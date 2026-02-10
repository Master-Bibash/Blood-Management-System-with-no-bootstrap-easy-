// // ============================================
// // FIXED: FeedContainer with improved visibility detection
// // ============================================

// import 'package:cached_network_image/cached_network_image.dart';
// import 'package:flutter/material.dart';
// import 'package:flutter_riverpod/flutter_riverpod.dart';
// import 'package:flutter_screenutil/flutter_screenutil.dart';
// import 'package:share_plus/share_plus.dart';
// import 'package:shimmer/shimmer.dart';
// import 'package:smartbazar/constant/color_constant.dart';
// import 'package:smartbazar/features/feed_page/widget/feed_comment.dart';
// import 'package:smartbazar/features/feed_page/widget/feed_header_widget.dart';
// import 'package:smartbazar/routes/page_stack_manager.dart';
// import 'package:visibility_detector/visibility_detector.dart';

// import '../../../constant/image_constant.dart';
// import '../../../constant/text_constant.dart';
// import '../../reels/view/widgets/video_player_item.dart';
// import '../api/feed_page_notifier.dart';
// import '../api/post_feed_wow_api.dart';
// import '../model/get_for_you_feed_model.dart';
// import '../provider/video_provider.dart';
// import 'image_full_screen.dart';

// class FeedContainer extends ConsumerStatefulWidget {
//   const FeedContainer({
//     super.key,
//     required this.feedPost,
//     required this.index,
//     this.scrollController,
//     this.showCommentBottomSheet = false,
//   });

//   final FeedPost feedPost;
//   final int index;
//   final ScrollController? scrollController;
//   final bool showCommentBottomSheet;

//   @override
//   ConsumerState<FeedContainer> createState() => _FeedContainerState();
// }

// class _FeedContainerState extends ConsumerState<FeedContainer>
//     with SingleTickerProviderStateMixin, AutomaticKeepAliveClientMixin {
//   @override
//   bool get wantKeepAlive => true;

//   int _interestedCount = 0;
//   bool _isVideoVisible = false; // Track visibility locally
//   bool _isLoading = false;
//   bool? _isLiked = false;
//   bool _showHeart = false;
//   Offset _heartPosition = Offset.zero;

//   late AnimationController _heartController;
//   late Animation<Offset> _positionAnimation;
//   late Animation<double> _scaleAnimation;
//   late Animation<double> _opacityAnimation;

//   @override
//   void initState() {
//     super.initState();

//     _isLiked = widget.feedPost.wowStatus;
//     _interestedCount = widget.feedPost.interested?.interested ?? 0;

//     if (widget.showCommentBottomSheet) {
//       WidgetsBinding.instance.addPostFrameCallback((_) {
//         showFeedCommentSection(context, widget.feedPost.id!);
//       });
//     }

//     _initializeHeartAnimation();
//   }

//   void _initializeHeartAnimation() {
//     _heartController = AnimationController(
//       vsync: this,
//       duration: const Duration(milliseconds: 800),
//     );

//     _positionAnimation = Tween<Offset>(
//       begin: const Offset(0, 0.5),
//       end: const Offset(0, -0.2),
//     ).animate(CurvedAnimation(
//       parent: _heartController,
//       curve: Curves.easeOutCubic,
//     ));

//     _scaleAnimation = Tween<double>(begin: 0.5, end: 1.5).animate(
//       CurvedAnimation(parent: _heartController, curve: Curves.elasticOut),
//     );

//     _opacityAnimation = Tween<double>(begin: 1, end: 0).animate(
//       CurvedAnimation(parent: _heartController, curve: Curves.easeOut),
//     );

//     _heartController.addStatusListener((status) {
//       if (status == AnimationStatus.completed) {
//         _heartController.reset();
//         if (mounted) {
//           setState(() => _showHeart = false);
//         }
//       }
//     });
//   }

//   @override
//   void dispose() {
//     _heartController.dispose();
//     super.dispose();
//   }

//   void _shareImage(String? url, String bio) {
//     if (url != null && url.isNotEmpty) {
//       Share.share("It's about $bio\n : $url", subject: bio);
//     }
//   }

//   Future<void> _handleLike() async {
//     if (!mounted) return;
//     setState(() => _isLoading = true);

//     try {
//       await ref.read(postFeedWowProvider(widget.feedPost.id!).future);

//       if (_isLiked != null && mounted) {
//         setState(() {
//           _isLiked = !_isLiked!;
//           _interestedCount += _isLiked! ? 1 : -1;
//           _interestedCount = _interestedCount < 0 ? 0 : _interestedCount;
//         });
//       }

//       ref.read(feedPaginationProvider.notifier).toggleLike(
//             widget.feedPost.id!,
//             _isLiked ?? false,
//           );
//     } catch (e) {
//       if (mounted) {
//         ScaffoldMessenger.of(context).showSnackBar(
//           SnackBar(content: Text('Error liking post: $e')),
//         );
//       }
//     } finally {
//       if (mounted) setState(() => _isLoading = false);
//     }
//   }

//   Future<void> _handleDoubleTap() async {
//     if (!mounted) return;

//     setState(() {
//       _showHeart = true;
//       if (_isLiked != null && !_isLiked!) {
//         _isLiked = true;
//         _interestedCount += 1;
//       }
//       _isLoading = true;
//     });

//     _heartController.forward();

//     try {
//       await ref.read(postFeedWowProvider(widget.feedPost.id!).future);
//       ref.read(feedPaginationProvider.notifier).toggleLike(
//             widget.feedPost.id!,
//             _isLiked ?? false,
//           );
//     } catch (e) {
//       if (mounted) {
//         ScaffoldMessenger.of(context).showSnackBar(
//           SnackBar(content: Text('Error liking post: $e')),
//         );
//       }
//     } finally {
//       if (mounted) setState(() => _isLoading = false);
//     }
//   }

//   void _handleMuteToggle() {
//     ref.read(globalVideoProvider.notifier).toggleMuteActiveSafe();
//   }

//   /// CRITICAL: Improved visibility handling with debounce
//   void _onVisibilityChanged(VisibilityInfo info) {
//     final isVisible = info.visibleFraction > 0.7; // Increased threshold

//     // Only update if state actually changes
//     if (_isVideoVisible == isVisible) return;

//     WidgetsBinding.instance.addPostFrameCallback((_) {
//       if (!mounted) return;
//       setState(() => _isVideoVisible = isVisible);
//     });
//   }

//   @override
//   Widget build(BuildContext context) {
//     super.build(context);

//     final feedItem = ref.watch(feedPaginationProvider.select(
//       (state) => state
//           .whenData(
//               (list) => list.firstWhere((e) => e.id == widget.feedPost.id))
//           .valueOrNull,
//     ));

//     final isMuted = ref.watch(isActiveMutedProvider);
//     final userDetails = widget.feedPost.userdetail;
//     final interested = widget.feedPost.interested;
//     final feedDetail = widget.feedPost.feedDetail;

//     final bool hasVideo = (widget.feedPost.video ?? '').isNotEmpty;

//     return Column(
//       mainAxisSize: MainAxisSize.min,
//       children: [
//         FeedHeader(
//           vendorImage: userDetails!.vendorImage,
//           vendorName: userDetails.vendorName!,
//           suscribers: userDetails.subscribers.toString(),
//           membershipTitle: userDetails.membershipTitle!,
//           distance: userDetails.distance?.toString(),
//           hasStory: (userDetails.storyCount ?? 0) > 0,
//           showGift: userDetails.hasSponsoredGifts ?? false,
//           userId: widget.feedPost.userId!,
//           passref: ref,
//           refreshprovider: () async {},
//         ),
//         Container(
//           width: double.infinity,
//           color: Colors.white,
//           child: Column(
//             children: [
//               Stack(
//                 children: [
//                   GestureDetector(
//                     behavior: HitTestBehavior.opaque,
//                     onDoubleTapDown: (details) {
//                       _heartPosition = details.localPosition;
//                     },
//                     onDoubleTap: _handleDoubleTap,
//                     child: Container(
//                       color: Colors.black,
//                       child: hasVideo
//                           ? VisibilityDetector(
//                               key:
//                                   Key('video_visibility_${widget.feedPost.id}'),
//                               onVisibilityChanged: _onVisibilityChanged,
//                               child: FeedVideoArea(
//                                 videoId: 'video_${widget.feedPost.id}',
//                                 // Only active if this specific video is visible AND no other is forcing it
//                                 isActive: _isVideoVisible,
//                                 aspectRatio: widget.feedPost.videoAspectRatio,
//                                 videoHeight: widget.feedPost.videoHeight,
//                                 videoWidth: widget.feedPost.videoWidth,
//                                 url: feedItem?.video ??
//                                     widget.feedPost.video ??
//                                     '',
//                               ),
//                             )
//                           : feedDetail?.image != null
//                               ? GestureDetector(
//                                   onTap: () {
//                                     pushPage(
//                                       context,
//                                       FullScreenImagePage(
//                                         imageUrl: feedDetail!.image!,
//                                       ),
//                                     );
//                                   },
//                                   child: CachedNetworkImage(
//                                     imageUrl: feedDetail!.image!,
//                                     fit: BoxFit.cover,
//                                     width: double.infinity,
//                                     placeholder: (c, u) => Shimmer.fromColors(
//                                       baseColor: Colors.grey[300]!,
//                                       highlightColor: Colors.grey[100]!,
//                                       child: Container(
//                                         height: 200.h,
//                                         color: Colors.white,
//                                       ),
//                                     ),
//                                     errorWidget: (c, e, s) => const SizedBox(),
//                                   ),
//                                 )
//                               : const SizedBox(),
//                     ),
//                   ),
//                   // Action buttons
//                   Positioned(
//                     bottom: 50.0,
//                     right: 15,
//                     left: 15,
//                     child: Row(
//                       mainAxisAlignment: MainAxisAlignment.spaceEvenly,
//                       children: [
//                         GestureDetector(
//                           onTap: _handleLike,
//                           child: Container(
//                             padding: EdgeInsets.all(8.w),
//                             decoration: BoxDecoration(
//                               color: Colors.black26,
//                               shape: BoxShape.circle,
//                             ),
//                             child: Image.asset(
//                               likedicon,
//                               height: 28.h,
//                               width: 28.w,
//                               filterQuality: FilterQuality.medium,
//                               color: _isLiked!
//                                   ? ColorConstant.likedcolor
//                                   : Colors.white,
//                             ),
//                           ),
//                         ),
//                         SizedBox(width: 15.w),
//                         GestureDetector(
//                           onTap: () => showFeedCommentSection(
//                               context, widget.feedPost.id!),
//                           child: Container(
//                             padding: EdgeInsets.all(8.w),
//                             decoration: BoxDecoration(
//                               color: Colors.black26,
//                               shape: BoxShape.circle,
//                             ),
//                             child: Image.asset(
//                               commenticon,
//                               height: 28.h,
//                               width: 28.w,
//                             ),
//                           ),
//                         ),
//                         SizedBox(width: 15.w),
//                         GestureDetector(
//                           onTap: () {
//                             _shareImage(
//                               feedDetail?.image ?? widget.feedPost.video,
//                               widget.feedPost.captionTitle.toString(),
//                             );
//                           },
//                           child: Container(
//                             padding: EdgeInsets.all(8.w),
//                             decoration: BoxDecoration(
//                               color: Colors.black26,
//                               shape: BoxShape.circle,
//                             ),
//                             child: Image.asset(
//                               normalshareicon,
//                               height: 28.h,
//                               width: 28.w,
//                             ),
//                           ),
//                         ),
//                       ],
//                     ),
//                   ),
//                   // Stats row
//                   Positioned(
//                     bottom: 0.0,
//                     left: 0,
//                     right: 0,
//                     child: FeedStatsRow(
//                       interestedCount: _interestedCount,
//                       engagement: interested?.engagement.toString(),
//                       views: interested?.views.toString(),
//                     ),
//                   ),
//                   // Mute button
//                   if (hasVideo)
//                     Positioned(
//                       top: 10.h,
//                       left: 10.w,
//                       child: Material(
//                         color: Colors.black54,
//                         borderRadius: BorderRadius.circular(20),
//                         child: InkWell(
//                           borderRadius: BorderRadius.circular(20),
//                           onTap: _handleMuteToggle,
//                           child: Padding(
//                             padding: EdgeInsets.all(8.w),
//                             child: Icon(
//                               isMuted ? Icons.volume_off : Icons.volume_up,
//                               color: ColorConstant.whiteColor,
//                               size: 24,
//                             ),
//                           ),
//                         ),
//                       ),
//                     ),
//                   // Fullscreen button
//                   if (hasVideo)
//                     Positioned(
//                       top: 10.h,
//                       right: 10.w,
//                       child: Material(
//                         color: Colors.black54,
//                         borderRadius: BorderRadius.circular(20),
//                         child: InkWell(
//                           borderRadius: BorderRadius.circular(20),
//                           onTap: () {
//                             // TODO: Implement fullscreen
//                           },
//                           child: Padding(
//                             padding: EdgeInsets.all(8.w),
//                             child: const Icon(
//                               Icons.fullscreen_rounded,
//                               color: ColorConstant.whiteColor,
//                               size: 24,
//                             ),
//                           ),
//                         ),
//                       ),
//                     ),
//                   // Heart animation
//                   if (_showHeart)
//                     Positioned(
//                       left: _heartPosition.dx - 40,
//                       top: _heartPosition.dy - 40,
//                       child: IgnorePointer(
//                         child: AnimatedBuilder(
//                           animation: _heartController,
//                           builder: (context, child) {
//                             return Transform.translate(
//                               offset: _positionAnimation.value * 200,
//                               child: Transform.scale(
//                                 scale: _scaleAnimation.value,
//                                 child: Opacity(
//                                   opacity: _opacityAnimation.value,
//                                   child: child,
//                                 ),
//                               ),
//                             );
//                           },
//                           child: const Icon(
//                             Icons.favorite,
//                             color: ColorConstant.headercolor,
//                             size: 80,
//                           ),
//                         ),
//                       ),
//                     ),
//                 ],
//               ),
//             ],
//           ),
//         ),
//       ],
//     );
//   }
// }

// class FeedVideoArea extends ConsumerWidget {
//   const FeedVideoArea({
//     super.key,
//     required this.videoId,
//     required this.isActive,
//     required this.aspectRatio,
//     this.videoHeight,
//     this.videoWidth,
//     required this.url,
//   });

//   final String videoId;
//   final bool isActive;
//   final double? aspectRatio;
//   final int? videoHeight;
//   final int? videoWidth;
//   final String url;

//   @override
//   Widget build(BuildContext context, WidgetRef ref) {
//     // Safety checks for aspect ratio
//     double safeAspectRatio = aspectRatio ?? 0.75;
//     if (safeAspectRatio < 0.5) safeAspectRatio = 0.5;
//     if (safeAspectRatio > 2.0) safeAspectRatio = 2.0;

//     return NewVideoPlayer(
//       key: Key(videoId),
//       videoId: videoId,
//       isactive: isActive,
//       videoAspectRatio: safeAspectRatio,
//       videoheight: (videoHeight ?? 800) > 800 ? 700 : (videoHeight ?? 600),
//       videowidth: videoWidth,
//       url: url,
//     );
//   }
// }

// class FeedStatsRow extends StatelessWidget {
//   const FeedStatsRow({
//     super.key,
//     required this.interestedCount,
//     required this.engagement,
//     required this.views,
//   });

//   final int interestedCount;
//   final String? engagement;
//   final String? views;

//   String _fmtNum(Object? v) {
//     if (v == null) return '0';
//     final s = v.toString();
//     if (s.length <= 3) return s;
//     if (s.length <= 6) {
//       return '${(double.parse(s) / 1000).toStringAsFixed(1)}k';
//     }
//     return s;
//   }

//   @override
//   Widget build(BuildContext context) {
//     return Padding(
//       padding: EdgeInsets.symmetric(horizontal: 20.w),
//       child: Container(
//         height: 40.h,
//         width: MediaQuery.of(context).size.width * 0.85,
//         decoration: BoxDecoration(
//           color: Colors.white.withOpacity(0.9),
//           borderRadius: BorderRadius.circular(8),
//           boxShadow: [
//             BoxShadow(
//               color: Colors.black.withOpacity(0.1),
//               blurRadius: 4,
//               offset: const Offset(0, 2),
//             ),
//           ],
//         ),
//         child: Padding(
//           padding: EdgeInsets.symmetric(horizontal: 12.w, vertical: 6.h),
//           child: Row(
//             mainAxisAlignment: MainAxisAlignment.spaceBetween,
//             children: [
//               Expanded(
//                 child: Text(
//                   '${_fmtNum(interestedCount)} Interested',
//                   style: interSemiBold.copyWith(fontSize: 11.sp),
//                   textAlign: TextAlign.center,
//                 ),
//               ),
//               Container(
//                 width: 1.5,
//                 height: 20.h,
//                 color: Colors.grey.shade300,
//               ),
//               Expanded(
//                 child: Text(
//                   '${_fmtNum(engagement)} Engaged',
//                   style: interSemiBold.copyWith(fontSize: 11.sp),
//                   textAlign: TextAlign.center,
//                 ),
//               ),
//               Container(
//                 width: 1.5,
//                 height: 20.h,
//                 color: Colors.grey.shade300,
//               ),
//               Expanded(
//                 child: Text(
//                   '${_fmtNum(views)} Views',
//                   style: interSemiBold.copyWith(fontSize: 11.sp),
//                   textAlign: TextAlign.center,
//                 ),
//               ),
//             ],
//           ),
//         ),
//       ),
//     );
//   }
// }
