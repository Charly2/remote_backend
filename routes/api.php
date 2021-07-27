<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('v1')->group(function () {
    Route::get('/program', function (Request $request) {


        $jayParsedAry = [
            [
                "id" => 1,
                "nombre" => "Te Doy Gloria",
                "data" => [
                    [
                        "title" => "Estrofa 1",
                        "body" => "Cuán hermoso
Eres, Jesús
Son tus palabras
Es tu amor."
                    ],
                    [
                        "title" => "Estrofa 2",
                        "body" => "Cuán glorioso
Eres, Jesús
Es tu poder
Fue tu cruz."
                    ],
                    [
                        "title" => "Estrofa 3",
                        "body" => "La que me salvó
Y me rescató
Un momento ahí
Nos dio libertad"
                    ],
                    [
                        "title" => "Coro",
                        "body" => "Te doy gloria, gloria
Te doy gloria, gloria
Te doy gloria, gloria
A ti, Jesús"
                    ]
                ]
            ],
            [
                "id" => 2,
                "nombre" => "Dios imparable",
                "data" => [
                    [
                        "title" => "Estrofa 1",
                        "body" => "Eres alabado
Eres exaltado
Tu nombre levantamos
Aleluya, aleluya"
                    ],
                    [
                        "title" => "Estrofa 2",
                        "body" => "Eres adorado
Te glorificamos
Tu nombre levantamos
Aleluya, aleluya "
                    ],
                    [
                        "title" => "Estrofa 3",
                        "body" => "A una sola voz
Nos unimos hoy
Te cantamos Dios
En adoración"
                    ],
                    [
                        "title" => "Coro",
                        "body" => "Dios imparable
Dios de imposibles,
inigualable
Eres invencible"
                    ],
                    [
                        "title" => "Estrofa 2",
                        "body" => "Eres adorado
Te glorificamos
Tu nombre levantamos
Aleluya, aleluya "
                    ],
                    [
                        "title" => "Estrofa 3",
                        "body" => "A una sola voz
Nos unimos hoy
Te cantamos Dios
En adoración"
                    ]
                ]
            ]
        ];


        return $jayParsedAry;
    });
    Route::get('/songs', function (Request $request) {


 $jayParsedAry = [
     "data" => [
         [
             "id" => 1,
             "nombre" => "Mi peor error - Funky & Marcela Gándara"
         ],
         [
             "id" => 2,
             "nombre" => "No me soltarás - Damaris Guerra & Ariel Kelly"
         ],
         [
             "id" => 3,
             "nombre" => "Me amaste a mi - Christine D Clario & Lucía Parker"
         ],
         [
             "id" => 4,
             "nombre" => "Que baje el cielo - Jesús Adrián Romero"
         ],
         [
             "id" => 5,
             "nombre" => "Espíritu Santo - Redimi2 & Barak"
         ],
         [
             "id" => 6,
             "nombre" => "Cicatriz - Funky & Musiko"
         ],
         [
             "id" => 7,
             "nombre" => "Perdóname - Alex Campos"
         ],
         [
             "id" => 8,
             "nombre" => "Ofensivo y escandaloso - Redimi2"
         ],
         [
             "id" => 9,
             "nombre" => "Siempre será - Christine D Clario"
         ],
         [
             "id" => 10,
             "nombre" => "Tu palabra - Marcos Witt"
         ],
         [
             "id" => 11,
             "nombre" => "El proceso - Nancy Amancio"
         ],
         [
             "id" => 12,
             "nombre" => "La puerta - Sheila Romero"
         ],
         [
             "id" => 13,
             "nombre" => "Mi fiesta - Alex Campos & Silvestre Dangond"
         ],
         [
             "id" => 14,
             "nombre" => "Quien - Ken-y & Manny Montes"
         ],
         [
             "id" => 15,
             "nombre" => "Cuando una lágrima cae - Alex Campos"
         ],
         [
             "id" => 16,
             "nombre" => "Dios no está muerto - Miel San Marcos"
         ],
         [
             "id" => 17,
             "nombre" => "Daría lo que fuera - Ruth Mixter"
         ],
         [
             "id" => 18,
             "nombre" => "Tú estás conmigo - Emmanuel y Linda"
         ],
         [
             "id" => 19,
             "nombre" => "Que se abra el cielo - Christine D Clario & Marcos Brunet"
         ],
         [
             "id" => 20,
             "nombre" => "Tu gloria es la razón - Danilo Montero & Marcos Vidal"
         ],
         [
             "id" => 21,
             "nombre" => "Estoy Aquí - Rocio Crooke"
         ],
         [
             "id" => 22,
             "nombre" => "Vamos a celebrar - Harold Guerra, T-bone & Travy Joe"
         ],
         [
             "id" => 23,
             "nombre" => "Guerreras - Egleyda Belliard & Ingrid Rosario"
         ],
         [
             "id" => 24,
             "nombre" => "Que huyan los fantasmas - Jesús Adrián Romero"
         ],
         [
             "id" => 25,
             "nombre" => "Santa la noche - Fer Ariza & Julissa"
         ],
         [
             "id" => 26,
             "nombre" => "Dios de lo imposible - Aliento"
         ],
         [
             "id" => 27,
             "nombre" => "Es la sangre de Jesús - Lucía Parker"
         ],
         [
             "id" => 28,
             "nombre" => "Y sigo Aquí - Any Puello"
         ],
         [
             "id" => 29,
             "nombre" => "Volaré - T-Bone & Marcos Witt"
         ],
         [
             "id" => 30,
             "nombre" => "Lucecitas - Montreal"
         ],
         [
             "id" => 31,
             "nombre" => "Te busco - Alex Zurdo"
         ],
         [
             "id" => 32,
             "nombre" => "La niña y el lobo - Jesús Adrián Romero"
         ],
         [
             "id" => 33,
             "nombre" => "Solo uno - Marcos Witt"
         ],
         [
             "id" => 34,
             "nombre" => "Gracia Incomparable - Evan Craft & Evaluna Montaner"
         ],
         [
             "id" => 35,
             "nombre" => "Victoria - Villa Nova"
         ],
         [
             "id" => 36,
             "nombre" => "Tu habitación - Miel San Marcos"
         ],
         [
             "id" => 37,
             "nombre" => "Fácil - Kike Pavón"
         ],
         [
             "id" => 38,
             "nombre" => "Sin tu amor - Musiko & Alex Zurdo"
         ],
         [
             "id" => 39,
             "nombre" => "Lléname - Zeri"
         ],
         [
             "id" => 40,
             "nombre" => "Ella - Karina Moreno & Alex Campos"
         ],
         [
             "id" => 41,
             "nombre" => "Líbrame de mi - Edgar Lira"
         ],
         [
             "id" => 42,
             "nombre" => "Lenguaje del cielo - Erick Porta"
         ],
         [
             "id" => 43,
             "nombre" => "Confiaré - Memo Salazas & Edward Rivera"
         ],
         [
             "id" => 44,
             "nombre" => "Luz que permanece - Reforma"
         ],
         [
             "id" => 45,
             "nombre" => "Barro en tus manos - Wanda Estrada"
         ],
         [
             "id" => 46,
             "nombre" => "Como no voy a creer - Funky"
         ],
         [
             "id" => 47,
             "nombre" => "Se mi todo - Bani Muñoz & Marcela Gándara"
         ],
         [
             "id" => 48,
             "nombre" => "Santo es el señor - Tito Morales & TMBand"
         ],
         [
             "id" => 49,
             "nombre" => "Me levantarás - Alison"
         ],
         [
             "id" => 50,
             "nombre" => "Úsame - Karina Moreno"
         ]
     ]
 ];





        return $jayParsedAry;
    });
});




