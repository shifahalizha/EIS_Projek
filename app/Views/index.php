<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Delicious - Food Blog Template | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Open Sans", sans-serif;
            font-size: 14px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #000000;
            line-height: 1.3;
            font-weight: 600;
        }

        p {
            color: #9b9b9b;
            font-size: 14px;
            line-height: 2;
            font-weight: 400;
        }

        a,
        a:hover,
        a:focus {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            text-decoration: none;
            outline: 0 solid transparent;
            color: #000000;
            font-weight: 600;
            font-size: 14px;
            color: #474747;
        }

        ul,
        ol {
            margin: 0;
        }

        ul li,
        ol li {
            list-style: none;
        }

        img {
            height: auto;
            max-width: 100%;
        }

        /* Spacing */
        .mt-15 {
            margin-top: 15px !important;
        }

        .mt-30 {
            margin-top: 30px !important;
        }

        .mt-50 {
            margin-top: 50px !important;
        }

        .mt-70 {
            margin-top: 70px !important;
        }

        .mt-100 {
            margin-top: 100px !important;
        }

        .mb-15 {
            margin-bottom: 15px !important;
        }

        .mb-30 {
            margin-bottom: 30px !important;
        }

        .mb-50 {
            margin-bottom: 50px !important;
        }

        .mb-70 {
            margin-bottom: 70px !important;
        }

        .mb-80 {
            margin-bottom: 80px !important;
        }

        .mb-100 {
            margin-bottom: 100px !important;
        }

        .ml-15 {
            margin-left: 15px !important;
        }

        .ml-30 {
            margin-left: 30px !important;
        }

        .ml-50 {
            margin-left: 50px !important;
        }

        .mr-15 {
            margin-right: 15px !important;
        }

        .mr-30 {
            margin-right: 30px !important;
        }

        .mr-50 {
            margin-right: 50px !important;
        }

        /* Height */
        .height-400 {
            height: 400px !important;
        }

        .height-500 {
            height: 500px !important;
        }

        .height-600 {
            height: 600px !important;
        }

        .height-700 {
            height: 700px !important;
        }

        .height-800 {
            height: 800px !important;
        }

        /* Section Padding */
        .section-padding-80 {
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .section-padding-80-0 {
            padding-top: 80px;
            padding-bottom: 0;
        }

        .section-padding-0-80 {
            padding-top: 0;
            padding-bottom: 80px;
        }

        /* Section Heading */
        .section-heading {
            position: relative;
            z-index: 1;
            margin-bottom: 80px;
            text-align: center;
        }

        .section-heading h3 {
            font-size: 30px;
            margin-bottom: 0;
        }

        .section-heading.text-left {
            text-align: left !important;
        }

        .section-heading.white h3 {
            color: #ffffff;
        }

        /* Preloader */
        #preloader {
            background-color: #ffffff;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 5000;
        }

        #preloader img {
            width: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        #preloader .circle-preloader {
            display: block;
            width: 60px;
            height: 60px;
            border: 2px solid #ccc;
            border-bottom-color: #1c8314;
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            animation: spin 2s infinite linear;
        }

        @-webkit-keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        /* Miscellaneous */
        .bg-img {
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .bg-white {
            background-color: #ffffff !important;
        }

        .bg-dark {
            background-color: #000000 !important;
        }

        .bg-transparent {
            background-color: transparent !important;
        }

        .font-bold {
            font-weight: 700;
        }

        .font-light {
            font-weight: 300;
        }

        .bg-overlay {
            position: relative;
            z-index: 2;
            background-position: center center;
            background-size: cover;
        }

        .bg-overlay::after {
            background-color: rgba(10, 12, 18, 0.55);
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            content: "";
        }

        .mfp-image-holder .mfp-close,
        .mfp-iframe-holder .mfp-close {
            color: #ffffff;
            right: 0;
            padding-right: 0;
            width: 30px;
            height: 30px;
            background-color: #40ba37;
            line-height: 30px;
            text-align: center;
            position: absolute;
            top: 0;
            right: -30px;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {

            .mfp-image-holder .mfp-close,
            .mfp-iframe-holder .mfp-close {
                right: 0;
            }
        }

        @media only screen and (max-width: 767px) {

            .mfp-image-holder .mfp-close,
            .mfp-iframe-holder .mfp-close {
                right: 0;
            }
        }

        input:focus,
        textarea:focus {
            outline: none;
            box-shadow: none;
            border-color: transparent;
        }

        .nice-select {
            border: none;
            background-color: #f3f5f8;
            border-radius: 0;
            width: 100%;
            height: 60px;
            line-height: 60px;
            color: #2f2f2f;
        }

        .nice-select span {
            color: #2f2f2f;
        }

        .nice-select::after {
            right: 20px;
        }

        .nice-select .list {
            background-color: #ffffff;
            border: none;
            border-radius: 0;
            box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.1);
            margin-top: 0;
            width: 100%;
        }

        /* ScrollUp */
        #scrollUp {
            background-color: #40ba37;
            border-radius: 0;
            bottom: 60px;
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.3);
            color: #ffffff;
            font-size: 24px;
            height: 40px;
            line-height: 38px;
            right: 60px;
            text-align: center;
            width: 40px;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        #scrollUp:hover {
            background-color: #141414;
        }

        @media only screen and (max-width: 767px) {
            #scrollUp {
                bottom: 30px;
                right: 30px;
            }
        }

        /* Button */
        .delicious-btn {
            display: inline-block;
            min-width: 160px;
            height: 60px;
            color: #ffffff;
            border: none;
            border-left: 3px solid #1c8314;
            border-radius: 0;
            padding: 0 30px;
            font-size: 16px;
            line-height: 58px;
            font-weight: 600;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            text-transform: capitalize;
            background-color: #40ba37;
        }

        .delicious-btn.active,
        .delicious-btn:hover,
        .delicious-btn:focus {
            font-size: 16px;
            font-weight: 600;
            color: #ffffff;
            background-color: #1c8314;
            border-color: #40ba37;
        }

        .delicious-btn.btn-2 {
            background-color: #1c8314;
            border-color: #40ba37;
        }

        .delicious-btn.btn-2.active,
        .delicious-btn.btn-2:hover,
        .delicious-btn.btn-2:focus {
            background-color: #40ba37;
            border-color: #1c8314;
        }

        .delicious-btn.btn-3 {
            background-color: #474747;
            border-color: #1c8314;
        }

        .delicious-btn.btn-3.active,
        .delicious-btn.btn-3:hover,
        .delicious-btn.btn-3:focus {
            background-color: #40ba37;
            border-color: #1c8314;
        }

        .delicious-btn.btn-4 {
            background-color: transparent;
            border: 3px solid #40ba37;
            line-height: 53px;
            color: #40ba37;
        }

        @media only screen and (max-width: 767px) {
            .delicious-btn.btn-4 {
                height: 40px;
                line-height: 33px;
            }
        }

        .delicious-btn.btn-4.active,
        .delicious-btn.btn-4:hover,
        .delicious-btn.btn-4:focus {
            line-height: 53px;
            color: #ffffff;
            background-color: #40ba37;
        }

        @media only screen and (max-width: 767px) {

            .delicious-btn.btn-4.active,
            .delicious-btn.btn-4:hover,
            .delicious-btn.btn-4:focus {
                height: 40px;
                line-height: 33px;
            }
        }

        @media only screen and (max-width: 767px) {
            .delicious-btn {
                height: 40px;
                line-height: 39px;
            }
        }

        /* :: 4.0 Search Wrapper */
        .search-wrapper {
            width: 100%;
            height: 70px;
            position: fixed;
            z-index: 200;
            top: -80px;
            left: 0;
            background-color: #40ba37;
            -webkit-transition-duration: 700ms;
            transition-duration: 700ms;
        }

        .search-wrapper form {
            position: relative;
            z-index: 1;
        }

        .search-wrapper form input {
            width: 90%;
            height: 40px;
            border: 2px solid #ffffff;
            font-size: 12px;
            font-style: italic;
            padding: 0 20px;
            margin: 15px 0;
        }

        @media only screen and (max-width: 767px) {
            .search-wrapper form input {
                width: 80%;
            }
        }

        .search-wrapper form button {
            position: absolute;
            width: 60px;
            height: 40px;
            z-index: 1;
            top: 15px;
            border: none;
            right: 10%;
            cursor: pointer;
            outline: none;
        }

        @media only screen and (max-width: 767px) {
            .search-wrapper form button {
                right: 20%;
            }
        }

        .search-wrapper .close-btn {
            position: absolute;
            width: 70px;
            height: 100%;
            background-color: #000000;
            line-height: 50px;
            color: #ffffff;
            text-align: center;
            cursor: pointer;
            line-height: 70px;
            font-size: 12px;
            right: 0;
            top: 0;
            z-index: 100;
        }

        .search-wrapper.on {
            top: 0;
        }

        /* :: 5.0 Header Area CSS */
        .header-area {
            position: relative;
            z-index: 100;
            width: 100%;
        }

        .header-area .top-header-area {
            width: 100%;
            height: 50px;
            background-color: #ffffff;
            border-bottom: 1px solid #dddee9;
        }

        @media only screen and (max-width: 767px) {
            .header-area .top-header-area {
                height: 70px;
            }
        }

        .header-area .top-header-area .breaking-news {
            position: relative;
            z-index: 1;
        }

        .header-area .top-header-area .breaking-news .ticker {
            width: 100%;
            text-align: left;
            position: relative;
            overflow: hidden;
        }

        .header-area .top-header-area .breaking-news .ticker ul {
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .header-area .top-header-area .breaking-news .ticker ul li {
            display: none;
            width: 100%;
        }

        .header-area .top-header-area .breaking-news .ticker ul li a {
            font-size: 14px;
            color: #b6b6b6;
            font-style: italic;
        }

        .header-area .top-header-area .breaking-news .ticker ul li a:hover,
        .header-area .top-header-area .breaking-news .ticker ul li a:focus {
            color: #40ba37;
        }

        .header-area .top-header-area .top-social-info a {
            display: inline-block;
            color: #b6b6b6;
            font-size: 13px;
            margin-right: 30px;
        }

        .header-area .top-header-area .top-social-info a:last-child {
            margin-right: 0;
        }

        .header-area .top-header-area .top-social-info a:hover,
        .header-area .top-header-area .top-social-info a:focus,
        .header-area .top-header-area .top-social-info a.active {
            color: #40ba37;
        }

        .header-area .delicious-main-menu {
            position: relative;
            width: 100%;
            z-index: 100;
            height: 145px;
        }

        @media only screen and (max-width: 767px) {
            .header-area .delicious-main-menu {
                height: 80px;
            }
        }

        .header-area .delicious-main-menu .classy-nav-container {
            background-color: transparent;
        }

        .header-area .delicious-main-menu .classy-navbar {
            height: 145px;
            padding: 0;
        }

        @media only screen and (max-width: 767px) {
            .header-area .delicious-main-menu .classy-navbar {
                height: 80px;
            }
        }

        .header-area .delicious-main-menu .classy-navbar .classynav ul li a {
            font-weight: 600;
        }

        .header-area .delicious-main-menu .classy-navbar .classynav ul li a:hover,
        .header-area .delicious-main-menu .classy-navbar .classynav ul li a:focus {
            font-weight: 600;
        }

        .header-area .delicious-main-menu .classy-navbar .classynav>ul>li>a {
            text-transform: uppercase;
            padding: 12px 18px 11px;
            background-color: transparent;
            border-bottom: 3px solid transparent;
            line-height: 1;
            color: #474747;
            font-weight: 600;
        }

        .header-area .delicious-main-menu .classy-navbar .classynav>ul>li>a:hover,
        .header-area .delicious-main-menu .classy-navbar .classynav>ul>li>a:focus {
            font-size: 14px;
            color: #ffffff;
            background-color: #40ba37;
            border-bottom: 3px solid #1c8314;
        }

        .header-area .delicious-main-menu .classy-navbar .classynav>ul>li>a:hover::after,
        .header-area .delicious-main-menu .classy-navbar .classynav>ul>li>a:focus::after {
            color: #ffffff;
        }

        .header-area .delicious-main-menu .classy-navbar .classynav>ul>li.active>a {
            color: #ffffff;
            background-color: #40ba37;
            border-bottom: 3px solid #1c8314;
        }

        .header-area .delicious-main-menu .classy-navbar .classynav>ul>li.active>a::after {
            color: #ffffff;
        }

        .header-area .delicious-main-menu .classynav .search-btn {
            color: #b6b6b6;
            margin-left: 150px;
            cursor: pointer;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        .header-area .delicious-main-menu .classynav .search-btn i {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        .header-area .delicious-main-menu .classynav .search-btn:hover i,
        .header-area .delicious-main-menu .classynav .search-btn:focus i {
            color: #40ba37;
        }

        @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .header-area .delicious-main-menu .classynav .search-btn {
                margin-left: 50px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .header-area .delicious-main-menu .classynav .search-btn {
                margin-left: 30px;
                margin-top: 30px;
            }
        }

        @media only screen and (max-width: 767px) {
            .header-area .delicious-main-menu .classynav .search-btn {
                margin-left: 30px;
                margin-top: 30px;
            }
        }

        @media only screen and (max-width: 767px) {
            .header-area .nav-brand img {
                max-width: 90px;
            }
        }

        /* :: 6.0 Welcome Area CSS */
        .hero-area {
            position: relative;
            z-index: 1;
            margin-left: 4%;
            margin-right: 4%;
        }

        .hero-slides {
            position: relative;
            z-index: 1;
        }

        .hero-slides .single-hero-slide {
            width: 100%;
            height: 820px;
            position: relative;
            z-index: 1;
        }

        @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .hero-slides .single-hero-slide {
                height: 650px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .hero-slides .single-hero-slide {
                height: 650px;
            }
        }

        @media only screen and (max-width: 767px) {
            .hero-slides .single-hero-slide {
                height: 650px;
            }
        }

        .hero-slides .single-hero-slide .hero-slides-content {
            position: relative;
            z-index: 1;
            padding: 60px 50px;
            border-left: 3px solid #40ba37;
            background-color: rgba(24, 24, 24, 0.54);
        }

        @media only screen and (max-width: 767px) {
            .hero-slides .single-hero-slide .hero-slides-content {
                padding: 30px 20px;
            }
        }

        .hero-slides .single-hero-slide .hero-slides-content h2 {
            font-size: 30px;
            color: #ffffff;
            margin-bottom: 30px;
            font-weight: 600;
        }

        @media only screen and (max-width: 767px) {
            .hero-slides .single-hero-slide .hero-slides-content h2 {
                font-size: 24px;
            }
        }

        .hero-slides .single-hero-slide .hero-slides-content p {
            font-size: 16px;
            margin-bottom: 50px;
            color: #ffffff;
        }

        .hero-slides .owl-prev,
        .hero-slides .owl-next {
            background-color: transparent;
            width: 40px;
            height: 40px;
            line-height: 40px;
            color: #ffffff;
            top: 50%;
            margin-top: -20px;
            left: 4%;
            position: absolute;
            z-index: 10;
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            opacity: 0;
            visibility: hidden;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            border-bottom: 3px solid #1c8314;
        }

        @media only screen and (max-width: 767px) {

            .hero-slides .owl-prev,
            .hero-slides .owl-next {
                font-size: 13px;
            }
        }

        .hero-slides .owl-next {
            left: auto;
            right: 4%;
        }

        .hero-slides:hover .owl-prev,
        .hero-slides:hover .owl-next {
            opacity: 1;
            visibility: visible;
        }

        .hero-slides .owl-dots {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            bottom: 50px;
            z-index: 10;
            width: 80%;
            left: 17%;
        }

        .hero-slides .owl-dots .owl-dot {
            font-size: 16px;
            font-weight: 600;
            color: #ffffff;
            margin-right: 10px;
        }

        .hero-slides .owl-dots .owl-dot.active {
            color: #1c8314;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {

            .breakpoint-on .classynav ul li.cn-dropdown-item>a::after,
            .breakpoint-on .classynav ul li.megamenu-item>a::after {
                top: 10px;
            }
        }

        @media only screen and (max-width: 767px) {

            .breakpoint-on .classynav ul li.cn-dropdown-item>a::after,
            .breakpoint-on .classynav ul li.megamenu-item>a::after {
                top: 10px;
            }
        }

        /* :: 7.0 Top Catagory Area */
        .single-top-catagory {
            position: relative;
            z-index: 2;
            margin-bottom: 80px;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            overflow: hidden;
        }

        .single-top-catagory img {
            width: 100%;
        }

        .single-top-catagory::after {
            content: "";
            position: absolute;
            height: 100%;
            width: 100%;
            z-index: 5;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.8);
            background: -webkit-linear-gradient(to right, #000, rgba(0, 0, 0, 0.1));
            background: linear-gradient(to right, #000, rgba(0, 0, 0, 0.1));
        }

        .single-top-catagory .top-cta-content {
            position: absolute;
            top: 50%;
            left: 40px;
            width: auto;
            height: auto;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            z-index: 10;
        }

        .single-top-catagory .top-cta-content h3 {
            font-size: 30px;
            color: #ffffff;
            font-weight: 600;
            margin-bottom: 5px;
        }

        @media only screen and (max-width: 767px) {
            .single-top-catagory .top-cta-content h3 {
                font-size: 18px;
            }
        }

        .single-top-catagory .top-cta-content h6 {
            color: #ffffff;
            margin-bottom: 30px;
            display: block;
            font-weight: 400;
        }

        @media only screen and (max-width: 767px) {
            .single-top-catagory .top-cta-content h6 {
                margin-bottom: 10px;
            }
        }

        /* :: 8.0 Best Receipe Area */
        .best-receipe-area {
            position: relative;
            z-index: 1;
            padding-bottom: 50px;
        }

        .single-best-receipe-area {
            position: relative;
            z-index: 1;
        }

        .single-best-receipe-area img {
            border-bottom: 3px solid #40ba37;
        }

        .single-best-receipe-area .receipe-content {
            padding-top: 30px;
            text-align: center;
        }

        .single-best-receipe-area .receipe-content h5 {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: 400;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        .single-best-receipe-area .receipe-content h5:hover,
        .single-best-receipe-area .receipe-content h5:focus {
            color: #40ba37;
        }

        .single-best-receipe-area .receipe-content .ratings i {
            font-size: 11px;
            color: #fbb710;
            display: inline-block;
            padding: 0 1px;
        }

        /* :: 9.0 Cta Area */
        .cta-area {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 675px;
            background-attachment: fixed;
        }

        .cta-area .cta-content h2 {
            font-size: 72px;
            margin-bottom: 20px;
            color: #ffffff;
            font-weight: 400;
        }

        @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .cta-area .cta-content h2 {
                font-size: 48px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .cta-area .cta-content h2 {
                font-size: 48px;
            }
        }

        @media only screen and (max-width: 767px) {
            .cta-area .cta-content h2 {
                font-size: 30px;
            }
        }

        .cta-area .cta-content p {
            color: #ffffff;
            margin-bottom: 100px;
            font-size: 16px;
        }

        @media only screen and (max-width: 767px) {
            .cta-area .cta-content p {
                margin-bottom: 50px;
            }
        }

        /* :: 10.0 Small Receipe Area */
        .small-receipe-area {
            position: relative;
            z-index: 1;
            padding-bottom: 30px;
        }

        .single-small-receipe-area {
            position: relative;
            z-index: 1;
            margin-bottom: 50px;
        }

        .single-small-receipe-area .receipe-thumb {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100px;
            flex: 0 0 100px;
            max-width: 100px;
            width: 100px;
            padding-right: 20px;
        }

        .single-small-receipe-area .receipe-content span {
            font-size: 12px;
            display: block;
            color: #40ba37;
        }

        .single-small-receipe-area .receipe-content a {
            display: block;
        }

        .single-small-receipe-area .receipe-content a h5 {
            color: #474747;
            font-size: 18px;
            margin-bottom: 5px;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .single-small-receipe-area .receipe-content a h5 {
                font-size: 16px;
            }
        }

        .single-small-receipe-area .receipe-content a h5:hover,
        .single-small-receipe-area .receipe-content a h5:focus {
            color: #40ba37;
        }

        .single-small-receipe-area .receipe-content .ratings i {
            font-size: 11px;
            color: #fbb710;
            display: inline-block;
            padding: 0 1px;
        }

        .single-small-receipe-area .receipe-content p {
            font-size: 12px;
            margin-bottom: 0;
            color: #9b9b9b;
        }

        /* :: 11.0 Quote Area */
        .quote-area {
            position: relative;
            z-index: 1;
            border: 10px solid #40ba37;
            padding: 40px 25px;
            margin-bottom: 80px;
        }

        .quote-area span {
            font-size: 48px;
            font-style: italic;
            margin-bottom: 30px;
            display: block;
            color: #40ba37;
            line-height: 1;
        }

        .quote-area h4 {
            font-size: 24px;
            line-height: 1.5;
            font-style: italic;
            margin-bottom: 40px;
            color: #474747;
        }

        @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .quote-area h4 {
                font-size: 20px;
            }
        }

        .quote-area p {
            color: #474747;
            font-size: 16px;
            margin-bottom: 50px;
        }

        .quote-area .date-comments .date {
            font-size: 12px;
            color: #40ba37;
        }

        .quote-area .date-comments .comments {
            font-size: 12px;
            color: #9b9b9b;
        }

        /* :: 12.0 Newsletter Area */
        .newsletter-area {
            position: relative;
            z-index: 1;
            margin-bottom: 80px;
        }

        .newsletter-area h4 {
            font-size: 24px;
            margin-bottom: 50px;
            display: block;
            color: #474747;
        }

        @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .newsletter-area h4 {
                font-size: 20px;
            }
        }

        .newsletter-form {
            padding: 30px 15px 100px;
        }

        .newsletter-form form input {
            width: 100%;
            height: 60px;
            border: none;
            background-color: #ffffff;
            color: #9b9b9b;
            font-size: 12px;
            font-style: italic;
            border-left: 3px solid #1c8314;
            padding: 0 20px;
            margin-bottom: 25px;
        }

        .newsletter-form p {
            margin-top: 30px;
            color: #ffffff;
            font-size: 12px;
            margin-bottom: 0;
            font-style: italic;
        }

        /* :: 13.0 Delicious Adds */
        .delicious-add {
            position: relative;
            z-index: 1;
            margin-bottom: 80px;
        }

        .delicious-add img {
            width: 100%;
        }

        /* :: 14.0 Blog Area */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .blog-sidebar-area {
                margin-top: 80px;
            }
        }

        @media only screen and (max-width: 767px) {
            .blog-sidebar-area {
                margin-top: 80px;
            }
        }

        .single-blog-area {
            position: relative;
            z-index: 1;
        }

        .single-blog-area .blog-thumbnail {
            position: relative;
            z-index: 1;
        }

        .single-blog-area .blog-thumbnail .post-date {
            width: 75px;
            height: 100px;
            background-color: #40ba37;
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            text-align: center;
        }

        @media only screen and (max-width: 767px) {
            .single-blog-area .blog-thumbnail .post-date {
                top: 10px;
                left: 10px;
            }
        }

        .single-blog-area .blog-thumbnail .post-date a {
            color: #ffffff;
            padding: 18px 10px;
            display: block;
            line-height: 1.1;
            font-size: 14px;
            font-weight: 400;
        }

        .single-blog-area .blog-thumbnail .post-date a span {
            font-size: 30px;
            font-weight: 700;
            display: block;
        }

        .single-blog-area .blog-thumbnail .post-date:hover,
        .single-blog-area .blog-thumbnail .post-date:focus {
            background-color: #1c8314;
        }

        .single-blog-area .blog-content {
            position: relative;
            z-index: 1;
            padding-top: 40px;
        }

        .single-blog-area .blog-content .post-title {
            font-size: 22px;
            color: #474747;
            margin-bottom: 10px;
        }

        .single-blog-area .blog-content .post-title:hover,
        .single-blog-area .blog-content .post-title:focus {
            color: #40ba37;
        }

        .single-blog-area .blog-content .meta-data {
            font-size: 12px;
            color: #a4a4a4;
            margin-bottom: 20px;
        }

        .single-blog-area .blog-content .meta-data a {
            text-decoration: underline;
            font-size: 12px;
            color: #a4a4a4;
        }

        .single-blog-area .blog-content .meta-data a:hover,
        .single-blog-area .blog-content .meta-data a:focus {
            color: #40ba37;
        }

        .single-widget {
            position: relative;
            z-index: 1;
        }

        .single-widget h6 {
            margin-bottom: 50px;
            display: block;
        }

        .single-widget .list {
            padding-left: 30px;
        }

        .single-widget .list li a {
            display: block;
            padding: 5px 0;
            color: #797979;
        }

        .single-widget .list li a:hover,
        .single-widget .list li a:focus {
            color: #40ba37;
        }

        .pagination {
            position: relative;
            z-index: 1;
        }

        .pagination .page-link {
            padding: 0;
            font-size: 16px;
            margin-right: 5px;
            border: none;
            color: #474747;
        }

        .pagination .page-link:hover,
        .pagination .page-link:focus {
            background-color: transparent;
            color: #40ba37;
        }

        .pagination .page-item.active .page-link {
            background-color: transparent;
            color: #40ba37;
        }

        /* :: 15.0 Receipe Area */
        .receipe-post-search {
            position: relative;
            z-index: 20;
        }

        .receipe-post-search form input {
            width: 100%;
            height: 60px;
            background-color: #f3f5f8;
            font-size: 14px;
            padding: 0 20px;
            border: none;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .receipe-post-search .col-12 {
                margin-bottom: 30px;
            }
        }

        @media only screen and (max-width: 767px) {
            .receipe-post-search .col-12 {
                margin-bottom: 15px;
            }
        }

        .receipe-slider {
            position: relative;
            z-index: 1;
        }

        .receipe-slider .owl-prev,
        .receipe-slider .owl-next {
            background-color: transparent;
            width: 40px;
            height: 40px;
            line-height: 40px;
            color: #ffffff;
            top: 50%;
            margin-top: -20px;
            left: 4%;
            position: absolute;
            z-index: 10;
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            opacity: 0;
            visibility: hidden;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            border-bottom: 3px solid #1c8314;
        }

        @media only screen and (max-width: 767px) {

            .receipe-slider .owl-prev,
            .receipe-slider .owl-next {
                font-size: 14px;
            }
        }

        .receipe-slider .owl-next {
            left: auto;
            right: 4%;
        }

        .receipe-slider:hover .owl-prev,
        .receipe-slider:hover .owl-next {
            opacity: 1;
            visibility: visible;
        }

        .receipe-headline span {
            font-size: 14px;
            display: block;
            color: #a4a4a4;
            margin-bottom: 0;
        }

        .receipe-headline h2 {
            font-size: 36px;
            color: #474747;
            margin-bottom: 30px;
        }

        @media only screen and (max-width: 767px) {
            .receipe-headline h2 {
                font-size: 24px;
            }
        }

        .receipe-headline .receipe-duration {
            border-left: 3px solid #40ba37;
            padding: 15px;
        }

        .receipe-headline .receipe-duration h6 {
            font-size: 15px;
            margin-bottom: 5px;
        }

        .receipe-headline .receipe-duration h6:last-child {
            margin-bottom: 0;
        }

        .receipe-ratings .ratings {
            margin-bottom: 30px;
        }

        .receipe-ratings i {
            font-size: 18px;
            color: #fbb710;
            padding: 0 3px;
        }

        .single-preparation-step {
            position: relative;
            z-index: 1;
            margin-bottom: 50px;
        }

        .single-preparation-step h4 {
            color: #474747;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 60px;
            flex: 0 0 60px;
            max-width: 60px;
            width: 60px;
            margin-bottom: 0;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .ingredients {
                margin-bottom: 80px;
            }
        }

        @media only screen and (max-width: 767px) {
            .ingredients {
                margin-bottom: 80px;
            }
        }

        .ingredients h4 {
            color: #474747;
            margin-bottom: 30px;
        }

        .ingredients .custom-checkbox .custom-control-label::before {
            border-radius: 0;
        }

        .ingredients .custom-control-label::before {
            width: 30px;
            height: 30px;
            background-color: #f3f5f8;
        }

        .ingredients .custom-control {
            padding-left: 2.5rem;
            margin-bottom: 30px;
            min-height: 35px;
        }

        .ingredients .custom-control-label {
            margin-bottom: 0;
            padding-top: 5px;
            font-size: 16px;
            font-weight: 600;
            color: #2f2f2f;
        }

        .ingredients .custom-control-label::after {
            top: 10px;
            left: 5px;
            width: 20px;
            height: 20px;
        }

        .ingredients .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #40ba37;
        }

        /* :: 16.0 Footer Area CSS */
        .footer-area {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 140px;
            background-color: #ffffff;
        }

        @media only screen and (max-width: 767px) {
            .footer-area {
                height: 150px;
                border-top: 1px solid #ebebeb;
                margin-top: 30px;
            }
        }

        .footer-area .footer-social-info {
            padding-right: 15px;
        }

        .footer-area .footer-social-info a {
            display: inline-block;
            color: #b6b6b6;
            font-size: 13px;
            margin-right: 30px;
        }

        .footer-area .footer-social-info a:last-child {
            margin-right: 0;
        }

        .footer-area .footer-social-info a:hover,
        .footer-area .footer-social-info a:focus {
            color: #40ba37;
        }

        .footer-area p {
            color: #4b4b4b;
            font-weight: 600;
            margin-bottom: 0;
            padding-left: 15px;
        }

        @media only screen and (max-width: 767px) {
            .footer-area p {
                padding-left: 0;
            }
        }

        .footer-area p a {
            color: #4b4b4b;
            font-weight: 600;
        }

        .footer-area p a:hover,
        .footer-area p a:focus {
            color: #40ba37;
        }

        @media only screen and (max-width: 767px) {
            .footer-area .footer-logo {
                max-width: 90px;
            }
        }

        .follow-us-instagram {
            position: relative;
            z-index: 1;
            border-top: 1px solid #dcdcdc;
        }

        .follow-us-instagram h5 {
            font-size: 18px;
            padding: 35px 0;
            margin-bottom: 0;
        }

        .follow-us-instagram .insta-feeds {
            position: relative;
            z-index: 1;
        }

        .follow-us-instagram .insta-feeds .single-insta-feeds {
            position: relative;
            z-index: 1;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 14.2857%;
            flex: 0 0 14.2857%;
            max-width: 14.2857%;
            width: 14.2857%;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            overflow: hidden;
        }

        @media only screen and (max-width: 767px) {
            .follow-us-instagram .insta-feeds .single-insta-feeds {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
                width: 25%;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .follow-us-instagram .insta-feeds .single-insta-feeds {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
                width: 20%;
            }
        }

        .follow-us-instagram .insta-feeds .single-insta-feeds img {
            width: 100%;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        .follow-us-instagram .insta-feeds .single-insta-feeds .insta-icon {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(64, 186, 55, 0.9);
            top: 0;
            left: 0;
            z-index: 10;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-grid-row-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        .follow-us-instagram .insta-feeds .single-insta-feeds .insta-icon a {
            display: inline-block;
            color: #ffffff;
            font-size: 18px;
        }

        .follow-us-instagram .insta-feeds .single-insta-feeds:hover img {
            -webkit-transform: scale(1.2) rotate(2.5deg);
            transform: scale(1.2) rotate(2.5deg);
        }

        .follow-us-instagram .insta-feeds .single-insta-feeds:hover .insta-icon {
            opacity: 1;
            visibility: visible;
        }

        /* :: 17.0 Breadcumb Area CSS */
        .breadcumb-area {
            position: relative;
            z-index: 10;
            width: 92%;
            height: 190px;
            margin-left: 4%;
            margin-right: 4%;
        }

        @media only screen and (max-width: 767px) {
            .breadcumb-area {
                height: 120px;
            }
        }

        .breadcumb-area .breadcumb-text h2 {
            font-size: 30px;
            margin-bottom: 0;
            color: #ffffff;
        }

        @media only screen and (max-width: 767px) {
            .breadcumb-area .breadcumb-text h2 {
                font-size: 24px;
            }
        }

        /* About Us Area */
        .sub-heading {
            line-height: 2;
            font-size: 18px;
            text-align: center;
        }

        /* :: 18.0 Contact Area CSS */
        .map-area {
            position: relative;
            z-index: 2;
        }

        .map-area #googleMap {
            width: 100%;
            height: 680px;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .map-area #googleMap {
                height: 500px;
            }
        }

        @media only screen and (max-width: 767px) {
            .map-area #googleMap {
                height: 350px;
            }
        }

        .single-contact-information {
            position: relative;
            z-index: 1;
        }

        .single-contact-information h6 {
            font-size: 14px;
            border-bottom: 2px solid #40ba37;
            display: inline-block;
            color: #40ba37;
        }

        .contact-form-area .form-control {
            height: 52px;
            width: 100%;
            background-color: #f3f5f8;
            font-size: 12px;
            font-style: italic;
            margin-bottom: 15px;
            border: none;
            border-left: 3px solid #f3f5f8;
            border-radius: 0;
            padding: 15px 30px;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        .contact-form-area .form-control:focus {
            border-left: 3px solid #40ba37;
            box-shadow: none;
        }

        .contact-form-area textarea.form-control {
            height: 200px;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        /* :: 19.0 Elements Area CSS */
        .elements-title h2 {
            font-size: 30px;
            margin-bottom: 70px;
            color: #4b4b4b;
        }

        .single-pie-bar h6 {
            font-size: 18px;
            margin-bottom: 0;
        }

        .single-cool-fact {
            position: relative;
            text-align: center;
            z-index: 1;
            margin-bottom: 80px;
        }

        .single-cool-fact img {
            display: block;
            margin: 0 auto 10px;
        }

        .single-cool-fact h3 {
            font-size: 48px;
            margin-bottom: 10px;
            color: #40ba37;
            font-weight: 700;
        }

        .single-cool-fact h6 {
            font-size: 18px;
            margin-bottom: 0;
        }

        /* Accordians */
        .single-accordion.panel {
            background-color: #ffffff;
            border: 0 solid transparent;
            border-radius: 4px;
            box-shadow: 0 0 0 transparent;
            margin-bottom: 15px;
        }

        .single-accordion:last-of-type {
            margin-bottom: 0;
        }

        .single-accordion h6 {
            margin-bottom: 0;
            text-transform: uppercase;
        }

        .single-accordion h6 a {
            border-radius: 0;
            background-color: #40ba37;
            color: #ffffff;
            border-left: 3px solid #1c8314;
            display: block;
            margin: 0;
            padding: 20px 60px 20px 20px;
            position: relative;
            font-size: 14px;
            text-transform: capitalize;
            font-weight: 600;
        }

        .single-accordion h6 a span {
            font-size: 10px;
            position: absolute;
            right: 20px;
            text-align: center;
            top: 23px;
        }

        .single-accordion h6 a span.accor-open {
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
        }

        .single-accordion h6 a.collapsed {
            background-color: #f3f5f8;
            color: #9b9b9b;
            border-left: 3px solid #40ba37;
        }

        .single-accordion h6 a.collapsed span.accor-close {
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
        }

        .single-accordion h6 a.collapsed span.accor-open {
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
            filter: alpha(opacity=100);
        }

        .single-accordion .accordion-content {
            border-top: 0 solid transparent;
            box-shadow: none;
        }

        .single-accordion .accordion-content p {
            padding: 20px 15px 5px;
            margin-bottom: 0;
        }

        /* Tabs CSS*/
        .delicious-tabs-content {
            position: relative;
            z-index: 1;
        }

        .delicious-tabs-content .nav-tabs {
            border-bottom: none;
            margin-bottom: 50px;
        }

        .delicious-tabs-content .nav-tabs .nav-link {
            background-color: #f3f5f8;
            color: #9b9b9b;
            border: none;
            border-left: 3px solid #40ba37;
            padding: 0 15px;
            height: 50px;
            line-height: 50px;
            margin: 0 2px;
            border-radius: 0;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .delicious-tabs-content .nav-tabs .nav-link {
                padding: 0 10px;
            }
        }

        @media only screen and (max-width: 767px) {
            .delicious-tabs-content .nav-tabs .nav-link {
                padding: 0 10px;
            }
        }

        .delicious-tabs-content .nav-tabs .nav-link.active {
            background-color: #40ba37;
            color: #ffffff;
            border-left: 3px solid #1c8314;
        }

        .delicious-tabs-content .tab-content h6 {
            font-size: 18px;
        }

        /* Features Area */
        .single-feature-area {
            position: relative;
            z-index: 1;
        }

        .single-feature-area h5 {
            margin-bottom: 0;
            padding-left: 30px;
        }
    </style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <i class="circle-preloader"></i>
        <img src="img/core-img/salad.png" alt="">
    </div>

    <!-- Search Wrapper -->
    <div class="search-wrapper">
        <!-- Close Btn -->
        <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" method="post">
                        <input type="search" name="search" placeholder="Type any keywords...">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <!-- Breaking News -->
                    <div class="col-12 col-sm-6">
                        <div class="breaking-news">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">Hello World!</a></li>
                                    <li><a href="#">Welcome to Colorlib Family.</a></li>
                                    <li><a href="#">Hello Delicious!</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Top Social Info -->
                    <div class="col-12 col-sm-6">
                        <div class="top-social-info text-right">
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="blog-post.html">Blog Post</a></li>
                                            <li><a href="receipe-post.html">Receipe Post</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                            <li><a href="#">Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="blog-post.html">Blog Post</a></li>
                                                    <li><a href="receipe-post.html">Receipe Post</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <li><a href="#">Dropdown</a>
                                                        <ul class="dropdown">
                                                            <li><a href="index.html">Home</a></li>
                                                            <li><a href="about.html">About Us</a></li>
                                                            <li><a href="blog-post.html">Blog Post</a></li>
                                                            <li><a href="receipe-post.html">Receipe Post</a></li>
                                                            <li><a href="contact.html">Contact</a></li>
                                                            <li><a href="elements.html">Elements</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Catagory</li>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="blog-post.html">Blog Post</a></li>
                                                <li><a href="receipe-post.html">Receipe Post</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Catagory</li>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="blog-post.html">Blog Post</a></li>
                                                <li><a href="receipe-post.html">Receipe Post</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Catagory</li>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="blog-post.html">Blog Post</a></li>
                                                <li><a href="receipe-post.html">Receipe Post</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <div class="receipe-slider owl-carousel">
                                                    <a href="#"><img src="img/bg-img/bg1.jpg" alt=""></a>
                                                    <a href="#"><img src="img/bg-img/bg6.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="receipe-post.html">Receipies</a></li>
                                    <li><a href="receipe-post.html">4 Vegans</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                                <!-- Newsletter Form -->
                                <div class="search-btn">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Delicios Homemade Burger</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur
                                    sem eget dui tristique, ac posuere arcu varius.</p>
                                <a href="#" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">See
                                    Receipe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg6.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Delicios Homemade Burger</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur
                                    sem eget dui tristique, ac posuere arcu varius.</p>
                                <a href="#" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">See
                                    Receipe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg7.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Delicios Homemade Burger</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur
                                    sem eget dui tristique, ac posuere arcu varius.</p>
                                <a href="#" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">See
                                    Receipe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <section class="top-catagory-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Top Catagory Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-catagory">
                        <img src="img/bg-img/bg2.jpg" alt="">
                        <!-- Content -->
                        <div class="top-cta-content">
                            <h3>Strawberry Cake</h3>
                            <h6>Simple &amp; Delicios</h6>
                            <a href="receipe-post.html" class="btn delicious-btn">See Full Receipe</a>
                        </div>
                    </div>
                </div>
                <!-- Top Catagory Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-catagory">
                        <img src="img/bg-img/bg3.jpg" alt="">
                        <!-- Content -->
                        <div class="top-cta-content">
                            <h3>Chinesse Noodles</h3>
                            <h6>Simple &amp; Delicios</h6>
                            <a href="receipe-post.html" class="btn delicious-btn">See Full Receipe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### Best Receipe Area Start ##### -->
    <section class="best-receipe-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>The best Receipies</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="img/bg-img/r1.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Sushi Easy Receipy</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="img/bg-img/r2.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Homemade Burger</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="img/bg-img/r3.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Vegan Smoothie</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="img/bg-img/r4.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Calabasa soup</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="img/bg-img/r5.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Homemade Breakfast</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="img/bg-img/r6.jpg" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Healthy Fruit Desert</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Best Receipe Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <section class="cta-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg4.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content text-center">
                        <h2>Gluten Free Receipies</h2>
                        <p>Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accumsan molestie. Vestibulum
                            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras sed
                            accumsan neque. Ut vulputate, lectus vel aliquam congue, risus leo elementum nibh</p>
                        <a href="#" class="btn delicious-btn">Discover all the receipies</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Small Receipe Area Start ##### -->
    <section class="small-receipe-area section-padding-80-0">
        <div class="container">
            <div class="row">

                <!-- Small Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-small-receipe-area d-flex">
                        <!-- Receipe Thumb -->
                        <div class="receipe-thumb">
                            <img src="img/bg-img/sr1.jpg" alt="">
                        </div>
                        <!-- Receipe Content -->
                        <div class="receipe-content">
                            <span>January 04, 2018</span>
                            <a href="receipe-post.html">
                                <h5>Homemade italian pasta</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>2 Comments</p>
                        </div>
                    </div>
                </div>

                <!-- Small Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-small-receipe-area d-flex">
                        <!-- Receipe Thumb -->
                        <div class="receipe-thumb">
                            <img src="img/bg-img/sr2.jpg" alt="">
                        </div>
                        <!-- Receipe Content -->
                        <div class="receipe-content">
                            <span>January 04, 2018</span>
                            <a href="receipe-post.html">
                                <h5>Baked Bread</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>2 Comments</p>
                        </div>
                    </div>
                </div>

                <!-- Small Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-small-receipe-area d-flex">
                        <!-- Receipe Thumb -->
                        <div class="receipe-thumb">
                            <img src="img/bg-img/sr3.jpg" alt="">
                        </div>
                        <!-- Receipe Content -->
                        <div class="receipe-content">
                            <span>January 04, 2018</span>
                            <a href="receipe-post.html">
                                <h5>Scalops on salt</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>2 Comments</p>
                        </div>
                    </div>
                </div>

                <!-- Small Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-small-receipe-area d-flex">
                        <!-- Receipe Thumb -->
                        <div class="receipe-thumb">
                            <img src="img/bg-img/sr4.jpg" alt="">
                        </div>
                        <!-- Receipe Content -->
                        <div class="receipe-content">
                            <span>January 04, 2018</span>
                            <a href="receipe-post.html">
                                <h5>Fruits on plate</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>2 Comments</p>
                        </div>
                    </div>
                </div>

                <!-- Small Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-small-receipe-area d-flex">
                        <!-- Receipe Thumb -->
                        <div class="receipe-thumb">
                            <img src="img/bg-img/sr5.jpg" alt="">
                        </div>
                        <!-- Receipe Content -->
                        <div class="receipe-content">
                            <span>January 04, 2018</span>
                            <a href="receipe-post.html">
                                <h5>Macaroons</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>2 Comments</p>
                        </div>
                    </div>
                </div>

                <!-- Small Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-small-receipe-area d-flex">
                        <!-- Receipe Thumb -->
                        <div class="receipe-thumb">
                            <img src="img/bg-img/sr6.jpg" alt="">
                        </div>
                        <!-- Receipe Content -->
                        <div class="receipe-content">
                            <span>January 04, 2018</span>
                            <a href="receipe-post.html">
                                <h5>Chocolate tart</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>2 Comments</p>
                        </div>
                    </div>
                </div>

                <!-- Small Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-small-receipe-area d-flex">
                        <!-- Receipe Thumb -->
                        <div class="receipe-thumb">
                            <img src="img/bg-img/sr7.jpg" alt="">
                        </div>
                        <!-- Receipe Content -->
                        <div class="receipe-content">
                            <span>January 04, 2018</span>
                            <a href="receipe-post.html">
                                <h5>Berry Desert</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>2 Comments</p>
                        </div>
                    </div>
                </div>

                <!-- Small Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-small-receipe-area d-flex">
                        <!-- Receipe Thumb -->
                        <div class="receipe-thumb">
                            <img src="img/bg-img/sr8.jpg" alt="">
                        </div>
                        <!-- Receipe Content -->
                        <div class="receipe-content">
                            <span>January 04, 2018</span>
                            <a href="receipe-post.html">
                                <h5>Zucchini Grilled on peper</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>2 Comments</p>
                        </div>
                    </div>
                </div>

                <!-- Small Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-small-receipe-area d-flex">
                        <!-- Receipe Thumb -->
                        <div class="receipe-thumb">
                            <img src="img/bg-img/sr9.jpg" alt="">
                        </div>
                        <!-- Receipe Content -->
                        <div class="receipe-content">
                            <span>January 04, 2018</span>
                            <a href="receipe-post.html">
                                <h5>Chicken Salad</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>2 Comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Small Receipe Area End ##### -->

    <!-- ##### Quote Subscribe Area Start ##### -->
    <section class="quote-subscribe-adds">
        <div class="container">
            <div class="row align-items-end">
                <!-- Quote -->
                <div class="col-12 col-lg-4">
                    <div class="quote-area text-center">
                        <span>"</span>
                        <h4>Nothing is better than going home to family and eating good food and relaxing</h4>
                        <p>John Smith</p>
                        <div class="date-comments d-flex justify-content-between">
                            <div class="date">January 04, 2018</div>
                            <div class="comments">2 Comments</div>
                        </div>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="col-12 col-lg-4">
                    <div class="newsletter-area">
                        <h4>Subscribe to our newsletter</h4>
                        <!-- Form -->
                        <div class="newsletter-form bg-img bg-overlay"
                            style="background-image: url(img/bg-img/bg1.jpg);">
                            <form action="#" method="post">
                                <input type="email" name="email" placeholder="Subscribe to newsletter">
                                <button type="submit" class="btn delicious-btn w-100">Subscribe</button>
                            </form>
                            <p>Fusce nec ante vitae lacus aliquet vulputate. Donec sceleri sque accumsan molestie.
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
                        </div>
                    </div>
                </div>

                <!-- Adds -->
                <div class="col-12 col-lg-4">
                    <div class="delicious-add">
                        <img src="img/bg-img/add.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Quote Subscribe Area End ##### -->

    <!-- ##### Follow Us Instagram Area Start ##### -->
    <div class="follow-us-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Follow Us Instragram</h5>
                </div>
            </div>
        </div>
        <!-- Instagram Feeds -->
        <div class="insta-feeds d-flex flex-wrap">
            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta1.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta2.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta3.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta4.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta5.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta6.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta7.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Follow Us Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info text-right">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                    </div>
                    <!-- Copywrite -->
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This template
                        is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>