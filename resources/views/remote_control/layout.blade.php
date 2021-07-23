<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="{{asset("css/remote_control.css")}}">
    <link href="{{asset('assets/bower/materialize/dist/css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body >
@yield("main_content")

<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
<!--JavaScript at end of body for optimized loading-->
</body>
</html>


