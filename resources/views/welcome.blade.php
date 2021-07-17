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
                <div class="card item_program" onclick="setPreview(1,this)">
                    <div class="title">Dios Imparable</div>
                </div>
                <div class="card item_program" onclick="setPreview(0,this)">
                    <div class="title">Te doy Gloria</div>
                </div>
            </div>
            <div class="program_actions">
                <div class="program_actions_item"><i class="material-icons dp48">add</i></div>
                <div class="program_actions_item"><i class="material-icons dp48">remove</i></div>
                <div class="program_actions_item"><i class="material-icons dp48">arrow_upward</i></div>
                <div class="program_actions_item"><i class="material-icons dp48">arrow_downward</i></div>
            </div>
        </div>
        <div class="list_song">
            <div class="list_song_search">
                <div class="list_song_search-search">
                    <i class="material-icons">search</i>
                </div>
                <div class="list_song_search-input">
                    <input type="text">
                </div>
                <div class="list_song_search-clear">
                    <i class="material-icons">close</i>
                </div>
            </div>
            <div class="list_song_list ">
                @for($i = 1; $i <= 40; $i++)
                    <div  class="list_song_list-item">Alvin</div>
                @endfor
            </div>
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
                            <a class='btn red' onclick="LIVE.setCanto(CANTOACTIVO)"><i class="material-icons icon_live">fiber_manual_record</i> En Vivo</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="list_live" id="list_prelive">

        </div>
        <div class="live_viewer">
            <div class="bg_wrapper">
                <div class="wrapper_img"><img src="{{asset("imgs/bg.jpg")}}" alt=""></div>
                <div class="wrapper_text">
                   <span class="inner_text" id="main_viewer_pre" ></span>
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
                        <a onclick="LIVE.setBlack(this)">
                            <div class="iconbtn">
                                <img src="{{asset("imgs/icon_black.svg")}}" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a onclick="LIVE.setClear(this)">
                            <div class="iconbtn">
                                <img src="{{asset("imgs/icon_clear.svg")}}" alt="">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="list_live" id="list_live"></div>
        <div class="live_viewer" id="live_viewer_main_innner">
            <div class="bg_wrapper">
                <div class="online">
                    <div class="point"></div>
                    <div class="live_text">En vivo</div>
                </div>
                <div class="wrapper_img"><img src="{{asset("imgs/bg.jpg")}}" alt=""></div>
                <div class="wrapper_text">
                   <span class="inner_text" id="main_viewer"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="{{asset("js/remote_control/estrofa.js")}}"></script>
<script type="text/javascript" src="{{asset("js/remote_control/liveViewer.js")}}"></script>


<script type="text/javascript" src="{{asset("assets/bower/jquery/dist/jquery.js")}}"></script>
<script type="text/javascript" src="{{asset('assets/bower/materialize/dist/js/materialize.min.js')}}"></script>
<script>

    var CANTOS = [
        {
            "id": 1,
            "nombre": "Dios imparable",
            "data": [{
                "title": "Estrofa 1",
                "body": "Cuán hermoso\nEres, Jesús\nSon tus palabras\nEs tu amor."
            },
                {
                    "title": "Estrofa 2",
                    "body": "Cuán glorioso\nEres, Jesús\nEs tu poder\nFue tu cruz."
                },
                {
                    "title": "Estrofa 3",
                    "body": "La que me salvó\nY me rescató\nUn momento ahí\nNos dio libertad"
                },
                {
                    "title": "Coro",
                    "body": "Te doy gloria, gloria\nTe doy gloria, gloria\nTe doy gloria, gloria\nA ti, Jesús"
                }
            ]
        },{
            "id": 2,
            "nombre": "Dios imparable",
            "data": [
                {
                    "title": "Estrofa 1",
                    "body": "Eres alabado\nEres exaltado\nTu nombre levantamos\nAleluya, aleluya"
                },
                {
                    "title": "Estrofa 2",
                    "body": "Eres adorado\nTe glorificamos\nTu nombre levantamos\nAleluya, aleluya "
                },
                {
                    "title": "Estrofa 3",
                    "body": "A una sola voz\nNos unimos hoy\nTe cantamos Dios\nEn adoración"
                },
                {
                    "title": "Coro",
                    "body": "Dios imparable\nDios de imposibles,\ninigualable\nEres invencible"
                }
            ]
        }
    ]
    var CANTOACTIVO = null;
    var LIVE = new LiveViewer();
    var PRELIVE = new PreLiveViewer();
    var BG = "bg.jpg";

    function setActive(elemt,live) {
        if (live){
            var txt = $(".body_item",elemt).html()
            LIVE.setActive(elemt,txt);
        }else{
            var txt = $(".body_item",elemt).html()
            PRELIVE.setActive(elemt,txt);
        }

    }

    function setPreview(i,item){
        $(".item_program.active").removeClass("active")
        $(item).addClass("active");
        CANTOACTIVO = CANTOS[i];
        PRELIVE.setCanto(CANTOACTIVO)
    }


    $(document).ready(function () {
        /*$('.dropdown-trigger').dropdown({
            closeOnClick:false
        });*/





    });
</script>
</body>
</html>


