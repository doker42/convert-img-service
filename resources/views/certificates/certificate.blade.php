<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>

    <link href="https://fonts.cdnfonts.com/css/gilroy-regular" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/gilroy-light" rel="stylesheet">
    <style>

        body {
            font-family: 'Gilroy-Regular', sans-serif;
        }
        .certificate__title {
            font-family: 'Gilroy-Light', sans-serif;
            position: absolute;
            left: 40px;
            top: 160px;
            color: #686670;
        }
        .certificate__personName {
            position: absolute;
            left: 40px;
            top: 320px;
            color: #6B4DFF;

        }
        .certificate__courseName {
            position: absolute;
            left: 50px;
            top: 390px;
        }
        .certificate__projectName {
            position: absolute;
            top: 515px;
            left: 120px;
            color: #686670;
        }
        .certificate__date {
            position: absolute;
            top: 539px;
            left: 120px;
            color: #686670;
        }
    </style>
</head>
<body>
<img src='{{asset('images/certificate.png')}}' width="874" height="616" />
{{--<img src='{{asset('images/certificate.png')}}' width="1030" height="700" />--}}
<div class="certificate">
    <div class="certificate__title">
        <h1>{{__('Certificate')}}</h1>
        <h4>{{__('This certificate is proudly presented to')}}</h4>
    </div>
    <div class="certificate__personName">
        <h1>{{$certificate->person->name}}</h1>
    </div>
    <div class="certificate__courseName">
        <p>for completing the {{$certificate->product->title}} course</p>
    </div>
    <div class="certificate__projectName">
        <p>{{$certificate->product->project->title}}</p>
    </div>
    <div class="certificate__date">
        <p>{{ $certificate->created_at->format('d-m-Y') }}</p>
    </div>
</div>
</body>
</html>
