<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>

    <link
            href="https://db.onlinewebfonts.com/c/040a78b437acd0433612f92e61d04a1b?family=Gilroy-Medium"
            rel="stylesheet"
            type="text/css"
    />

    <style>

        @font-face {
            font-family: 'Gilroy-Medium';
            src: url({{ public_path('fonts/GilroyMedium.ttf')}});
        }

        /*@font-face {*/
        /*    font-family: "Gilroy-Medium";*/
        /*    src: url("https://db.onlinewebfonts.com/t/040a78b437acd0433612f92e61d04a1b.eot");*/
        /*    src: url("https://db.onlinewebfonts.com/t/040a78b437acd0433612f92e61d04a1b.eot?#iefix")*/
        /*    format("embedded-opentype"),*/
        /*    url("https://db.onlinewebfonts.com/t/040a78b437acd0433612f92e61d04a1b.woff2")*/
        /*    format("woff2"),*/
        /*    url("https://db.onlinewebfonts.com/t/040a78b437acd0433612f92e61d04a1b.woff")*/
        /*    format("woff"),*/
        /*    url("https://db.onlinewebfonts.com/t/040a78b437acd0433612f92e61d04a1b.ttf")*/
        /*    format("truetype"),*/
        /*    url("https://db.onlinewebfonts.com/t/040a78b437acd0433612f92e61d04a1b.svg#Gilroy-Medium")*/
        /*    format("svg");*/
        /*}*/

        body {
            font-family: "Gilroy-Medium", sans-serif;
            color: #686670;
            font-weight: 500;
            width: 1237px;
            max-width: 1237px;
            margin: auto;
            overflow: hidden;
            font-size: 24px;
        }

        .header {
            padding: 60px 120px;

            position: relative;
            overflow: hidden;
            background-image: url({{ asset('images/BG1.png')}});
            background-repeat: no-repeat;
        }

        .header__title {
            z-index: 2;
            position: relative;
        }

        p {
            color: black;
        }

        .header p {
            font-size: 32px;
            margin: 0px;
            color: black;
        }

        .header__background {
            background: #6b4dff;
            opacity: 0.4;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .footer__inner {
            padding: 40px 120px;
            background-image: url({{ asset('images/BG2.png')}});
            background-position: bottom;
            background-repeat: no-repeat;
        }

        .footer__background {
            background: #6b4dff;
            opacity: 0.04;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }
        .header__logo {
            margin-bottom: 30px;
            text-align: center;
        }
        .header__logo img {
            max-width: 236px;
            margin: auto;
        }

        .footer {
            background-color: #6b4dff;
            background-image: url({{asset('images/Subtract.png')}});
            position: relative;
            overflow: hidden;
            justify-content: space-between;
            align-items: center;
        }

        .footer__left {
            column-gap: 24px;
            display: inline-block;
        }

        .footer__text {
            float: right;
            margin-left: 104px;
        }

        .footer__text p {
            margin-top: 0px;
            margin-bottom: 16px;
        }

        h1 {
            margin-top: 0px;
            font-size: 96px;
            color: black;
            margin-bottom: 16px;
            font-weight: 700;
            letter-spacing: 3px;
        }

        h2 {
            margin-top: 0px;
            font-size: 64px;
            color: #6b4dff;
            margin-bottom: 40px;
            font-weight: 700;
            max-width: 550px;
            text-align: left;
        }

        .body {
            padding: 60px 120px;
            text-align: center;
        }
        .body > p {
            margin-top: 0px;
            margin-bottom: 40px;
            text-align: left;
            max-width: 550px;
            font-size: 24px;
        }
        .body > p:not(:last-child) {
            margin-bottom: 30px;
        }

        .footer__logo {
            display: inline-block;
            float: right;
        }

        .footer__logo img {
            max-width: 180px;
        }

        .footer__background img {
            width: 100%;
            height: 100px;
        }

        .footer > .line {
            background: #9f9da5;
        }

        p a {
            color: #686670;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="header__background"></div>

    <div class="header__title">
        <h1>Certificate</h1>
        <p>іs proudly presented to</p>
    </div>
</div>

<div class="body">
    <h2>Salvador Felipe
        Dalí Jacinto</h2>
    <p class="body__text1">
        for completing the Measuring Learning Success: Connecting Value to
        Business Impact course
    </p>
</div>

<div class="footer">
    <div class="footer__inner">
        <div class="footer__left">
            <div class="footer__text">
                <p>Project name</p>
                <p>21-22 February 2024</p>
            </div>
        </div>

        <div class="footer__logo">
            {{--            <img src="{{asset('images/largeLogoPng.png')}}" />--}}
            <img src="https://storage.googleapis.com/sreda-mail-bucket/large_logo_png.png" />

        </div>
    </div>
</div>
</body>
</html>
