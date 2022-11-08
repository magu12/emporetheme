<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/img/icons/favicon.png"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css"
        integrity="sha512-ipO1yoQyZS3BeIuv2A8C5AwQChWt2Pi4KU3nUvXxc4TKr8QgG8dPexPAj2JGsJD6yelwKa4c7Y2he9TTkPM4Dg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;800;900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="wrap">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/image/logo.png" alt="">
            </a>
            <div class="burger mobile">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="12" r="1" fill="#E44C65" />
                    <rect x="7" y="11" width="14" height="2" rx="0.94" fill="#E44C65" />
                    <rect x="3" y="16" width="18" height="2" rx="0.94" fill="#E44C65" />
                    <rect x="3" y="6" width="18" height="2" rx="0.94" fill="#E44C65" />
                </svg>
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.40864 5.99915L11.7045 1.71268C12.0962 1.32088 12.0962 0.685649 11.7045 0.293849C11.3127 -0.0979498 10.6776 -0.0979498 10.2859 0.293849L6 4.59031L1.71414 0.293849C1.3224 -0.0979498 0.687256 -0.0979498 0.295513 0.293849C-0.0962308 0.685649 -0.0962308 1.32088 0.295513 1.71268L4.59136 5.99915L0.295513 10.2856C0.106383 10.4732 0 10.7286 0 10.995C0 11.2614 0.106383 11.5168 0.295513 11.7044C0.483098 11.8936 0.738447 12 1.00483 12C1.27121 12 1.52656 11.8936 1.71414 11.7044L6 7.40799L10.2859 11.7044C10.4734 11.8936 10.7288 12 10.9952 12C11.2616 12 11.5169 11.8936 11.7045 11.7044C11.8936 11.5168 12 11.2614 12 10.995C12 10.7286 11.8936 10.4732 11.7045 10.2856L7.40864 5.99915Z"
                        fill="#E44C65" />
                </svg>
            </div>
            <ul>
                <li>
                    <a href="#hero">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#about">
                        About
                    </a>
                </li>
                <li>
                    <a href="#history">
                        History
                    </a>
                </li>
                <li>
                    <a href="#game">
                        Games
                    </a>
                </li>
                <li>
                    <a href="#team">
                        Team
                    </a>
                </li>
                <li>
                    <a href="#careers   ">
                        Careers
                    </a>
                </li>
                <li>
                    <a href="#news">
                        News
                    </a>
                </li>
            </ul>
        </div>
    </header>

    