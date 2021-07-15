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

<body>
<div class="row main_content  ">
    <div class="col m4 main_section" id="select_section">
        <nav class="navbar_header">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><img src="{{asset("imgs/logo_white.svg")}}" alt=""></a>
            </div>
        </nav>
        <div class="program">
            <div class="program_list">
                @for($i = 1; $i <= 10; $i++)
                    <div class="card item_program">
                        <div class="title">Titlo del primer canto</div>
                    </div>
                @endfor
            </div>
            <div class="program_actions">

            </div>
        </div>
        <div class="list_song">

        </div>
    </div>
    <div class="col m4 main_section" id="pre_live_section">
        <nav class="navbar_header">
            <div class="nav-wrapper">
                <div class="row">
                    <div class="col m6 center">
                        <div class="fondo">
                            <a class='dropdown-trigger btn azul_celeste_btn' href='#' data-target='fondo_dropdown'>Fondo</a>
                            <!-- Dropdown Structure -->
                            <div id='fondo_dropdown' class='dropdown-content'>
                                <div class="select_fondo">
                                    @for($i = 1; $i <= 10; $i++)
                                        <div class="item_fondo"><img src="{{asset("imgs/bg.jpg")}}" alt=""></div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col m6 center">
                        <div class="fondo">
                            <a class='dropdown-trigger btn red'><i class="material-icons icon_live">fiber_manual_record</i> En Vivo</a>
                            <!-- Dropdown Structure -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="list_live">
            @for($i = 1; $i <= 10; $i++)
                <div class="item_live card">
                    <div class="img_preview">
                        <div class="wrapper">
                            <div class="wrapper_img"><img src="{{asset("imgs/bg.jpg")}}" alt=""></div>
                            <div class="wrapper_text">
                                <span class="inner_text">
                                    El señor es mi pastor nada me faltara
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="text_preview">
                        <div class="title_item">Verso {{$i}}</div>
                        <div class="body_item">
                            El señor es mi pastor nada me faltara</div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="live_viewer">
            <div class="bg_wrapper">
                <div class="wrapper_img"><img src="{{asset("imgs/bg.jpg")}}" alt=""></div>
                <div class="wrapper_text">
                   <span class="inner_text">
                                    El señor es mi pastor nada me faltara
                   </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col m4 main_section" id="live_section">
        <nav class="navbar_header">
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="right items">
                    <li>
                        <a class="">
                            <div class="iconbtn">
                                <img src="{{asset("imgs/icon_logo.svg")}}" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="">
                            <div class="iconbtn">
                                <img src="{{asset("imgs/icon_black.svg")}}" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="">
                            <div class="iconbtn">
                                <img src="{{asset("imgs/icon_clear.svg")}}" alt="">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="list_live">
            @for($i = 1; $i <= 10; $i++)
                <div class="item_live card">
                    <div class="img_preview">
                        <div class="wrapper">
                            <div class="wrapper_img"><img src="{{asset("imgs/bg.jpg")}}" alt=""></div>
                            <div class="wrapper_text">
                                <span class="inner_text">
                                    El señor es mi pastor nada me faltara
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="text_preview">
                        <div class="title_item">Verso {{$i}}</div>
                        <div class="body_item">
                            El señor es mi pastor nada me faltara</div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="live_viewer">
            <div class="bg_wrapper">
                <div class="online">
                    <div class="point"></div>
                    <div class="live_text">En vivo</div>
                </div>
                <div class="wrapper_img"><img src="{{asset("imgs/bg.jpg")}}" alt=""></div>
                <div class="wrapper_text">
                   <span class="inner_text">
                                    El señor es mi pastor nada me faltara
                   </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="{{asset("assets/bower/jquery/dist/jquery.js")}}"></script>
<script type="text/javascript" src="{{asset('assets/bower/materialize/dist/js/materialize.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.dropdown-trigger').dropdown({
            closeOnClick:false
        });
    });
</script>
</body>
</html>


