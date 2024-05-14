<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>

    @if(isset($locale))
        @php
        \Illuminate\Support\Facades\App::setLocale($locale)
        @endphp
    @endif


    <style>

        @page {
            /*size: a4 landscape;*/
            margin: 0px;
        }

        body {
            background-color: white;
            font-family: "Gilroy-Medium", cursive;
            color: #686670;
            font-weight: 500;
            width: 100%;
            margin: auto;
        }

        .body {
            padding: 60px 120px;
            text-align: center;
            max-height: 299px;
            min-height: 299px;
        }



        .header {
            padding: 60px 120px;
            position: relative;
            overflow: hidden;
            background-image: url({{\App\Helpers\MailUrl::imageLink(\App\Helpers\MailUrl::MAIL_HEADER_BG, \App\Helpers\MailUrl::MAIL_DIR_EMAILS)}});
            background-repeat: no-repeat;
            background-size: 100%;
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
            @if(isset($primaryColorHeader))
            background-color: {{$primaryColorHeader}};
            @else
            background-color: #6b4dff;
            @endif
            opacity: 0.4;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .header__logo img {
            max-width: 236px;
            margin: auto;
        }

        .footer {
            @if(isset($primaryColor))
            background-color: {{$primaryColor}};
            @else
            background-color: #6b4dff;
            @endif
            background-image: url({{\App\Helpers\MailUrl::imageLink(\App\Helpers\MailUrl::MAIL_SUBTRACT, \App\Helpers\MailUrl::MAIL_DIR_EMAILS)}});
            position: relative;
            overflow: hidden;
            justify-content: space-between;
            align-items: center;

            background-size: 100%;
            height: 205px;
            margin-top: 20px;
        }

        .footer__inner {
            padding: 40px 120px;
            background-image: url({{\App\Helpers\MailUrl::imageLink(\App\Helpers\MailUrl::MAIL_FOOTER_BG, \App\Helpers\MailUrl::MAIL_DIR_EMAILS)}});
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: 100%;
            height: 140px;
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
            @if(isset($primaryColor))
            color: {{$primaryColor}};
            @else
            color: #6b4dff;
            @endif
            /*margin-bottom: 40px;*/
            margin-bottom: 10px;
            font-weight: 700;
            /*max-width: 550px;*/
            max-width: 620px;
            text-align: left;

            line-height: 80%;
        }

        .body > p {
            /*margin-top: 0px;*/
            margin-top: 40px;
            margin-bottom: 40px;
            text-align: left;
            max-width: 750px;
            @if(isset($bodyFontSize))
            font-size: {{$bodyFontSize}}px;
            @else
            font-size: 24px;
            @endif

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
            max-height: 80px;
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
        <h1>{{__('Certificate')}}</h1>
        <p>{{__('is proudly presented to')}}</p>
    </div>
</div>

<div class="body">
    @if(isset($personName))
{{--            <h2>{{$personName}}</h2>--}}
        @if(count($personName))
            @foreach($personName as $name)
                <h2>{{$name}}</h2>
            @endforeach
        @endif
    @else
        <h2>Salvadore Felipe
            Dalí Jacinto</h2>
    @endif

    <p class="body__text1">
        @if(isset($certDescription))
            {{$certDescription}}
        @else
            for completing the Measuring Learning Success: Connecting Value to
            Business Impact course
        @endif
    </p>
</div>

<div class="footer">
    <div class="footer__inner">
        <div class="footer__left">
            <div class="footer__text">
                @if(isset($projectTitle))
                    <p>{{$projectTitle}}</p>
                @else
                    <p>Project name</p>
                @endif
                @if(isset($learningPeriod))
                    <p>{{$learningPeriod}}</p>
                @else
                    <p>21-22 February 2024</p>
                @endif
            </div>
        </div>

        <div class="footer__logo">
            @if(isset($logoUrl))
                <img src="{{$logoUrl}}" />
            @else
                <img src="{{\App\Helpers\MailUrl::imageLink(\App\Helpers\MailUrl::MAIL_LARGE_LOGO)}}" />
            @endif
        </div>
    </div>
</div>
</body>
</html>

