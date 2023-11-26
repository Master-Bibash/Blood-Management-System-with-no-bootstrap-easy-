<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
         .footer-content {
            color: #351f1f;

            text-align: center;
        }

     footer {
        color: #2196F3;
      border-radius: 12px;
      margin-bottom:1px;
      margin-top:27px;
            bottom: 0;
            left: 0;
            right: 0;
            background: #E4E9F7;
            width: 100%;
            font-family: "Open Sans";
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px 0;
        }

     

        .footer-content h3 {
            color: #2196F3;
            font-size: 1.8rem;
            font-weight: 400;
            text-transform: capitalize;
            line-height: 3rem;
        }

        .footer-content p {
            color: #2196F3;
            /* margin: 10px auto; */
            line-height: 24px;
            font-size: 14px;
        }

        .socials {
            color: #2196F3;
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 1rem 0;
        }

        .socials li {
            color: #2196F3;
            margin: 0 10px;
        }

        .socials a {
            text-decoration: none;
            color: #fff;
        }

        .socials a i {
            color: #2196F3;
            font-size: 1.1rem;
            transition: color .4s ease;
        }

        .socials a:hover i {
            color: aqua;
        }

        .footer-bottom {
            color: #2196F3;
            /* background: #000; */
            width: 100%;
            padding: 5px 0;
            text-align: center;
        }

        .footer-bottom p {
            color: #2196F3;
            font-size: 12px;
            word-spacing: 2px;
            text-transform: capitalize;
        }

        .footer-bottom span {
            color: #2196F3;
            text-transform: uppercase;
            opacity: .4;
            font-weight: 200;
        }
    </style>
</head>
<body>
<footer>
        <div class="footer-content">
            <h3>Blood Management System</h3>
            <p>This is a project made by BCA fourth semester, which is a blood management system</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; 2023. Designed by <span>BDMS</span></p>
        </div>
    </footer>
</body>
</html>
