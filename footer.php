<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Synap Solutions</title>
   
    <style>
        /* ... (Previous CSS styles) ... */

        /* Style the footer */
        footer {
            text-align: center;
            background-color: #333; /* Example background color for the footer */
            color: #fff;
            padding: 20px 0;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .footer-logo img {
            max-width: 100px;
            height: auto;
        }

        .footer-info p {
            margin-bottom: 10px;
        }

        .footer-info a {
            color: #fff;
            text-decoration: none;
        }

        /* Style the social media icons */
        .social-icons {
            text-align: center;
        }

        .social-icon {
            font-size: 24px;
            margin: 0 10px;
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icon:hover {
            color: #eaf0f6; /* Change color on hover (adjust to your preference) */
        }

        /* Media query for responsive design */
        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                text-align: center;
            }

            .footer-logo img {
                margin-bottom: 10px;
            }
        }


            /* Keyframes animation for the word "Welcome" */
@keyframes bounce {
    0%, 100% {
        transform: translateY();
    }
    50% {
        transform: translateY(-50px);
    }
}

/* Apply animation to the word */
.animated-word {
    font-size: 24px;
    animation: bounce 2s ease infinite; /* Adjust animation duration and properties as needed */
    color: #eaf0f6; /* Change color as desired */
    font-size: medium;

}
    </style>
</head>
<body>
  

    <footer>
        <div class="footer-content">
            <div class="footer-logo" >
                <img src="img/123.png" alt="Synap Solutions Logo">
            </div>
            <div class="footer-info">
                <p>&copy; 2023 Synap Solutions</p>
                <p>Email: <a href="mailto:info@synapsolutions.com">info@synapsolutions.com</a></p>
                <p>Phone: <a href="tel:+1234567890">+1 (234) 567-890</a></p>
            </div>
            <ul class="social-icons">

                            <li class="list-inline-item">
                                <a href="#" class="form-floating text-white">
                                    <i class="bi bi-facebook" style="font-size: 22px;"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#" class="form-floating text-white">
                                    <i class="bi bi-twitter" style="font-size: 22px;"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#" class="form-floating text-white">
                                    <i class="bi bi-google" style="font-size: 22px;"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#" class="form-floating text-white">
                                    <i class="bi bi-linkedin" style="font-size: 22px;"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#" class="form-floating text-white">
                                    <i class="bi bi-youtube" style="font-size: 22px;"></i>
                                </a>
                            </li>

                            <div class="col-md-6 col-lg-3 info_col " style="margin-right: -120px;">

                            <br>
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>

                        </ul>
        </div>

        <div class="animated-word">All Rights Reserved.

            Designed by  &COPY;SYNAP Solutions</div>
    </div>
    </footer>
</body>
</html>
