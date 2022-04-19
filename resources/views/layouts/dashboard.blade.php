<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>E-IJARA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
   

    <!-- Scripts -->
    <link href="{{ asset('assets/main.css') }}" rel="stylesheet">

    @yield('style')
</head>

<body>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header" id="dashboard">
        <x-navbar></x-navbar>
        <div class="app-main">
            <x-sidebar></x-sidebar>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLongTitle">Фойдаланиш шартлари</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class="modal-body ht-250 scrollbar-sm pos-relative" style="overflow-y: auto;">
                    <h6 class="tx-color-01 text-center">Фойдаланиш шартларининг қўлланиш кўлами</h6>
                    <p class="mg-b-20 text-justify">Фойдаланиш келишуви “E-IJARA TANLOV” электрон савдо майдончасига
                        (кейинги ўринларда - Тизим) нисбатан қўлланилади. Ушбу орқали тизим фойдаланувчиларга Келишувни
                        ўқиб чиқиш ва тўлиқ тушинишни махсус тарзда эслатади. Тизимдан фойдаланишингиз сизнинг
                        Фойдаланиш келушувига розилигингизни англатади; Агар рози бўлмасангиз, тизимдан фойдаланманг.
                        Келишув мазмунини қонун кўлами доирасида ўз ихтиёри бўйича вақт-вақти билан ўзгартириб туриш
                        ҳуқуқини сақлаб қолади ва Фойдаланиш келишувидаги ўзгаришларни мунтазам равишда кўриб бориш учун
                        ёлғиз ўзингиз жавобгардирсиз. Агар сиз ўзгартирилган маълумотлар чоп қилинганидан кейин тизимдан
                        фойдаланишни давом эттирсангиз, бу сизнинг ўзгаришларга розилигингиз ва уларни қабул
                        қилишингизни англатади.</p>
                    <h6 class="tx-color-01 text-center">Интеллектуал мулкчилик ҳуқуқлари бўйича баёнот</h6>
                    <p class="mg-b-20 text-justify">Тизимда мавжуд бўлган барча контентлар, жумладан, бироқ фақат шу
                        билан чекланмаган ҳолда, матнлар, расмлар, намуналар, диаграммалар, визуал интерфейслар ва
                        компютер кодларига (“контентлар”) нисбатан тегишли интеллеcтуал мулкчилик ҳуқуқлари Агросаноатни
                        рақамлаштириш марказига тегишли бўлади ёки ҳуқуқий ваколатлар билан Марказ томонидан
                        фойдаланилади. Сиз тизим томонидан кўрсатилувчи хизматлар ҳақидаги маълумотларни тизимда юклаб
                        олишингиз мумкин, бироқ улардан тижорий мақсадларда фойдаланилмаслиги керак ва юқоридаги
                        маълумотлар ўзгартирилмаслиги ҳамда юқоридаги маълумотлар ва ушбу маълумотлар мавжуд бўлган
                        ҳужжатлар кафолатланиши ва айтиб ўтилиши ва тизимнинг қонуний ҳуқуқлари ва манфаатлари сақлаб
                        қолиниши керак.</p>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Ёпиш</button>
                <a href="{{ route('user.application.region.get') }}" type="button" class="btn d-block btn-primary">Розиман</a>  
            </div>

        </div>

    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    @yield('javascript')

    <script type="text/javascript" src="{{ asset('assets/scripts/main.js') }}"></script>

</body>

</html>
