@extends('template.layout')

@section('filter')
    <div class="g-bg-cover g-bg-pos-top-center g-bg-img-hero g-bg-cover g-bg-black-opacity-0_3--after g-py-100"
         style="background-image: url('{{asset('assets/img-temp/1920x1080/img1.jpg')}}');">
        <div class="container g-pos-rel g-z-index-1">
            <div class="g-bg-white g-pa-30">
                <!-- Input Group -->
                <form>
                    <div class="row g-mx-0--md">
                        <!-- Button Group -->
                        <div class="col-md-6 col-lg-6 g-px-0--md g-mb-30">
                            <select
                                class="js-custom-select w-100 h-100 u-select-v1 g-min-width-150  g-brd-gray-light-v3 g-color-main g-color-primary--hover g-pt-12 g-pb-13"
                                required data-placeholder="Республика бўйича" data-open-icon="fa fa-angle-down"
                                data-close-icon="fa fa-angle-up">
                                <option></option>
                                <option
                                    class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                    value="1725">Тошкент вилояти
                                </option>
                                <option
                                    class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                    value="1703">Андижон вилояти
                                </option>
                                <option
                                    class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                    value="LN">Наманган вилояти
                                </option>
                                <option
                                    class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                    value="BR">Фарғона вилояти
                                </option>
                                <option
                                    class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                    value="ML">Жиззах вилояти
                                </option>
                                <option
                                    class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                    value="PR">Сирдарё вилояти
                                </option>
                                <option
                                    class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                    value="MS">Самарқанд вилояти
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-6 g-px-0--md g-mb-30">
                            <select
                                class="js-custom-select w-100 h-100 u-select-v1 g-min-width-150  g-brd-gray-light-v3 g-color-main g-color-primary--hover g-pt-12 g-pb-13"
                                required data-placeholder="Туман(шаҳар)" data-open-icon="fa fa-angle-down"
                                data-close-icon="fa fa-angle-up">
                                <option></option>
                                <option
                                    class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                    value="NY">Олтинкўл тумани
                                </option>
                                <option
                                    class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                    value="VC">Шаҳрихон тумани
                                </option>
                                <option
                                    class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                    value="LN">Избоскан тумани
                                </option>
                                <option
                                    class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                    value="BR">Андижон тумани
                                </option>
                            </select>
                        </div>
                        <!-- End Button Group -->
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-3 g-mb-30">
                            <!-- Button Group -->
                            <div class="input-group-btn">
                                <select
                                    class="js-custom-select u-select-v1 w-100 g-brd-gray-light-v3 g-color-main g-color-primary--hover g-py-12"
                                    required data-placeholder="Тури" data-open-icon="fa fa-angle-down"
                                    data-close-icon="fa fa-angle-up">
                                    <option></option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="dehqon">Деҳқон хўжалиги учун
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="qishloq">Қишлоқ хўжалиги учун
                                    </option>
                                </select>
                            </div>
                            <!-- End Button Group -->
                        </div>
                        <div class="col-6 col-lg-3 g-mb-30">
                            <!-- Button Group -->
                            <div class="input-group-btn">
                                <select
                                    class="js-custom-select u-select-v1 w-100 g-brd-gray-light-v3 g-color-main g-color-primary--hover g-py-12"
                                    required data-placeholder="Ихтисослик" data-open-icon="fa fa-angle-down"
                                    data-close-icon="fa fa-angle-up">
                                    <option></option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="">сабзавот-полизчилик
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="">боғдорчилик, узумчилик
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="">пахта ва ғаллачилик
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="">лалмикор ғаллачилик
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="">ғаллачилик ва сабзавотчилик
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="">чорва озуқа экинларини етиштириш
                                    </option>
                                </select>
                            </div>
                            <!-- End Button Group -->
                        </div>
                        <div class="col-6 col-lg-3 g-mb-30">
                            <!-- Button Group -->
                            <div class="input-group-btn">
                                <select
                                    class="js-custom-select u-select-v1 w-100 g-brd-gray-light-v3 g-color-main g-color-primary--hover g-py-12"
                                    required data-placeholder="Шўрланиш даражаси" data-open-icon="fa fa-angle-down"
                                    data-close-icon="fa fa-angle-up">
                                    <option></option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="1">Шўрланмаган – тузлар миқдори 2 г/л дан кам
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="1">Кучсиз шўрланган – 2–4 г/л
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="1">Ўртача шўрланган – 4–8 г/л
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="1">Кучли шўрланган – 8–16 г/л
                                    </option>
                                    >
                                </select>
                            </div>
                            <!-- End Button Group -->
                        </div>
                        <div class="col-6 col-lg-3 g-mb-30">
                            <!-- Button Group -->
                            <div class="input-group-btn">
                                <select
                                    class="js-custom-select u-select-v1 w-100 g-brd-gray-light-v3 g-color-main g-color-primary--hover g-py-12"
                                    required data-placeholder="Балл бонитети" data-open-icon="fa fa-angle-down"
                                    data-close-icon="fa fa-angle-up">
                                    <option></option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="10">10
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="20">20
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="30">30
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="40">40
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="50">50
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="60">60
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="70">70
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="80">80
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="90">90
                                    </option>
                                    <option
                                        class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                        value="100">100
                                    </option>
                                </select>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4 g-mb-30">
                            <input class="form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15" type="text"
                                   placeholder="Мин.майдон (Га)">
                        </div>
                        <div class="col-6 col-lg-4 g-mb-30">
                            <input class="form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15" type="text"
                                   placeholder="Макс.майдон (Га)">
                        </div>
                        <div class="col-sm-6 col-lg-4 g-mb-30">
                            <h2 class="h6 g-font-weight-600 mb-4">Ижара муддати(<span id="rangeSliderAmount3">25</span>)
                                йил</h2>
                            <div id="rangeSlider1" class="u-slider-v1-3" data-result-container="rangeSliderAmount3"
                                 data-range="true" data-default="10, 25" data-min="10" data-max="50"></div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button
                            class="btn btn-block u-btn-primary g-color-white g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                            type="submit">
                            Излаш
                        </button>
                    </div>
                </form>
                <!-- End Input Group -->
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container g-py-50" id="app">
        <div class="row g-mb-40">
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Lot -->
                <article>
                    <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                        <!-- Лотлар - Батафсил -->
                        <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                            <!-- Майдон -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-017 u-line-icon-pro"></i>
                                11.3 Га
                            </li>
                            <!-- Балл бонитет -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-030 u-line-icon-pro"></i>
                                50-60
                            </li>
                            <!-- Ижара муддати -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-035 u-line-icon-pro"></i>
                                10-15 й.
                            </li>
                        </ul>
                        <!-- End Лотлар - Батафсил -->
                        <!-- Лотлар - Address -->
                        <div class="g-pa-25">
                            <h3 class="g-font-weight-600 g-font-size-16">Cабзавот-полизчилик</h3>
                            <p class="g-font-size-13 mb-4">Андижон вилоят, Олтинкўл тумани</p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Лот рақами: <span
                                    class="g-color-text g-color-primary g-font-weight-600">D1703202-00001</span></p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-1">Ижара тури: <span
                                    class="g-color-text g-font-weight-400">Деҳқон хўжалиги</span></p>
                        </div>
                        <!-- End Лотлар - Address -->
                        <!-- Лотлар - Батафсил -->
                        <div
                            class="g-brd-gray-light-v3 g-brd-top js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1"
                            data-end-date="2021/08/09" data-month-format="%m" data-days-format="%d"
                            data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-days g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Кун</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-hours g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Соат</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-minutes g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Мин</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-seconds g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Сек</span>
                            </div>
                        </div>
                        <!-- End Лотлар - Батафсил -->
                    </div>
                    <a class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                       href="{{route('home')}}">
                        Батафсил
                        <i class="align-middle ml-2 fa fa-angle-right"></i>
                    </a>
                </article>
                <!-- End Lot -->
            </div>
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Lot -->
                <article>
                    <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                        <!-- Лотлар - Батафсил -->
                        <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                            <!-- Майдон -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-017 u-line-icon-pro"></i>
                                7.3 Га
                            </li>
                            <!-- Балл бонитет -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-030 u-line-icon-pro"></i>
                                20-30
                            </li>
                            <!-- Ижара муддати -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-035 u-line-icon-pro"></i>
                                5-10 й.
                            </li>
                        </ul>
                        <!-- End Лотлар - Батафсил -->
                        <!-- Лотлар - Address -->
                        <div class="g-pa-25">
                            <h3 class="g-font-weight-600 g-font-size-16">Боғдорчилик, узумчилик </h3>
                            <p class="g-font-size-13 mb-4">Тошкент вилоят, Паркент тумани</p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Лот рақами: <span
                                    class="g-color-text g-color-primary g-font-weight-600">B1703202-00001</span></p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-1">Ижара тури: <span
                                    class="g-color-text g-font-weight-400">Бошқа мақсадлар</span></p>
                        </div>
                        <!-- End Лотлар - Address -->
                        <!-- Лотлар - Батафсил -->
                        <div
                            class="g-brd-gray-light-v3 g-brd-top js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1"
                            data-end-date="2021/09/25" data-month-format="%m" data-days-format="%d"
                            data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-days g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Кун</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-hours g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Соат</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-minutes g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Мин</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-seconds g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Сек</span>
                            </div>
                        </div>
                        <!-- End Лотлар - Батафсил -->
                    </div>
                    <a class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                       href="{{route('home')}}">
                        Батафсил
                        <i class="align-middle ml-2 fa fa-angle-right"></i>
                    </a>
                </article>
                <!-- End Lot -->
            </div>
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Lot -->
                <article>
                    <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                        <!-- Лотлар - Батафсил -->
                        <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                            <!-- Майдон -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-017 u-line-icon-pro"></i>
                                11.3 Га
                            </li>
                            <!-- Балл бонитет -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-030 u-line-icon-pro"></i>
                                50-60
                            </li>
                            <!-- Ижара муддати -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-035 u-line-icon-pro"></i>
                                10-15 й.
                            </li>
                        </ul>
                        <!-- End Лотлар - Батафсил -->
                        <!-- Лотлар - Address -->
                        <div class="g-pa-25">
                            <h3 class="g-font-weight-600 g-font-size-16">Cабзавот-полизчилик</h3>
                            <p class="g-font-size-13 mb-4">Андижон вилоят, Олтинкўл тумани</p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Лот рақами: <span
                                    class="g-color-text g-color-primary g-font-weight-600">D1703202-00001</span></p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-1">Ижара тури: <span
                                    class="g-color-text g-font-weight-400">Деҳқон хўжалиги</span></p>
                        </div>
                        <!-- End Лотлар - Address -->
                        <!-- Лотлар - Батафсил -->
                        <div
                            class="g-brd-gray-light-v3 g-brd-top js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1"
                            data-end-date="2021/08/09" data-month-format="%m" data-days-format="%d"
                            data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-days g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Кун</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-hours g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Соат</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-minutes g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Мин</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-seconds g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Сек</span>
                            </div>
                        </div>
                        <!-- End Лотлар - Батафсил -->
                    </div>
                    <a class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                       href="{{route('home')}}">
                        Батафсил
                        <i class="align-middle ml-2 fa fa-angle-right"></i>
                    </a>
                </article>
                <!-- End Lot -->
            </div>
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Lot -->
                <article>
                    <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                        <!-- Лотлар - Батафсил -->
                        <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                            <!-- Майдон -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-017 u-line-icon-pro"></i>
                                7.3 Га
                            </li>
                            <!-- Балл бонитет -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-030 u-line-icon-pro"></i>
                                20-30
                            </li>
                            <!-- Ижара муддати -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-035 u-line-icon-pro"></i>
                                5-10 й.
                            </li>
                        </ul>
                        <!-- End Лотлар - Батафсил -->
                        <!-- Лотлар - Address -->
                        <div class="g-pa-25">
                            <h3 class="g-font-weight-600 g-font-size-16">Боғдорчилик, узумчилик </h3>
                            <p class="g-font-size-13 mb-4">Тошкент вилоят, Паркент тумани</p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Лот рақами: <span
                                    class="g-color-text g-color-primary g-font-weight-600">B1703202-00001</span></p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-1">Ижара тури: <span
                                    class="g-color-text g-font-weight-400">Бошқа мақсадлар</span></p>
                        </div>
                        <!-- End Лотлар - Address -->
                        <!-- Лотлар - Батафсил -->
                        <div
                            class="g-brd-gray-light-v3 g-brd-top js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1"
                            data-end-date="2021/09/25" data-month-format="%m" data-days-format="%d"
                            data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-days g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Кун</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-hours g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Соат</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-minutes g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Мин</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-seconds g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Сек</span>
                            </div>
                        </div>
                        <!-- End Лотлар - Батафсил -->
                    </div>
                    <a class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                       href="{{route('home')}}">
                        Батафсил
                        <i class="align-middle ml-2 fa fa-angle-right"></i>
                    </a>
                </article>
                <!-- End Lot -->
            </div>
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Lot -->
                <article>
                    <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                        <!-- Лотлар - Батафсил -->
                        <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                            <!-- Майдон -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-017 u-line-icon-pro"></i>
                                11.3 Га
                            </li>
                            <!-- Балл бонитет -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-030 u-line-icon-pro"></i>
                                50-60
                            </li>
                            <!-- Ижара муддати -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-035 u-line-icon-pro"></i>
                                10-15 й.
                            </li>
                        </ul>
                        <!-- End Лотлар - Батафсил -->
                        <!-- Лотлар - Address -->
                        <div class="g-pa-25">
                            <h3 class="g-font-weight-600 g-font-size-16">Cабзавот-полизчилик</h3>
                            <p class="g-font-size-13 mb-4">Андижон вилоят, Олтинкўл тумани</p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Лот рақами: <span
                                    class="g-color-text g-color-primary g-font-weight-600">D1703202-00001</span></p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-1">Ижара тури: <span
                                    class="g-color-text g-font-weight-400">Деҳқон хўжалиги</span></p>
                        </div>
                        <!-- End Лотлар - Address -->
                        <!-- Лотлар - Батафсил -->
                        <div
                            class="g-brd-gray-light-v3 g-brd-top js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1"
                            data-end-date="2021/08/09" data-month-format="%m" data-days-format="%d"
                            data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-days g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Кун</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-hours g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Соат</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-minutes g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Мин</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-seconds g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Сек</span>
                            </div>
                        </div>
                        <!-- End Лотлар - Батафсил -->
                    </div>
                    <a class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                       href="{{route('home')}}">
                        Батафсил
                        <i class="align-middle ml-2 fa fa-angle-right"></i>
                    </a>
                </article>
                <!-- End Lot -->
            </div>
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Lot -->
                <article>
                    <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                        <!-- Лотлар - Батафсил -->
                        <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                            <!-- Майдон -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-017 u-line-icon-pro"></i>
                                7.3 Га
                            </li>
                            <!-- Балл бонитет -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-030 u-line-icon-pro"></i>
                                20-30
                            </li>
                            <!-- Ижара муддати -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-035 u-line-icon-pro"></i>
                                5-10 й.
                            </li>
                        </ul>
                        <!-- End Лотлар - Батафсил -->
                        <!-- Лотлар - Address -->
                        <div class="g-pa-25">
                            <h3 class="g-font-weight-600 g-font-size-16">Боғдорчилик, узумчилик </h3>
                            <p class="g-font-size-13 mb-4">Тошкент вилоят, Паркент тумани</p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Лот рақами: <span
                                    class="g-color-text g-color-primary g-font-weight-600">B1703202-00001</span></p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-1">Ижара тури: <span
                                    class="g-color-text g-font-weight-400">Бошқа мақсадлар</span></p>
                        </div>
                        <!-- End Лотлар - Address -->
                        <!-- Лотлар - Батафсил -->
                        <div
                            class="g-brd-gray-light-v3 g-brd-top js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1"
                            data-end-date="2021/09/25" data-month-format="%m" data-days-format="%d"
                            data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-days g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Кун</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-hours g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Соат</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-minutes g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Мин</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-seconds g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Сек</span>
                            </div>
                        </div>
                        <!-- End Лотлар - Батафсил -->
                    </div>
                    <a class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                       href="{{route('home')}}">
                        Батафсил
                        <i class="align-middle ml-2 fa fa-angle-right"></i>
                    </a>
                </article>
                <!-- End Lot -->
            </div>
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Lot -->
                <article>
                    <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                        <!-- Лотлар - Батафсил -->
                        <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                            <!-- Майдон -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-017 u-line-icon-pro"></i>
                                11.3 Га
                            </li>
                            <!-- Балл бонитет -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-030 u-line-icon-pro"></i>
                                50-60
                            </li>
                            <!-- Ижара муддати -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-035 u-line-icon-pro"></i>
                                10-15 й.
                            </li>
                        </ul>
                        <!-- End Лотлар - Батафсил -->
                        <!-- Лотлар - Address -->
                        <div class="g-pa-25">
                            <h3 class="g-font-weight-600 g-font-size-16">Cабзавот-полизчилик</h3>
                            <p class="g-font-size-13 mb-4">Андижон вилоят, Олтинкўл тумани</p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Лот рақами: <span
                                    class="g-color-text g-color-primary g-font-weight-600">D1703202-00001</span></p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-1">Ижара тури: <span
                                    class="g-color-text g-font-weight-400">Деҳқон хўжалиги</span></p>
                        </div>
                        <!-- End Лотлар - Address -->
                        <!-- Лотлар - Батафсил -->
                        <div
                            class="g-brd-gray-light-v3 g-brd-top js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1"
                            data-end-date="2021/08/09" data-month-format="%m" data-days-format="%d"
                            data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-days g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Кун</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-hours g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Соат</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-minutes g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Мин</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-seconds g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Сек</span>
                            </div>
                        </div>
                        <!-- End Лотлар - Батафсил -->
                    </div>
                    <a class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                       href="{{route('home')}}">
                        Батафсил
                        <i class="align-middle ml-2 fa fa-angle-right"></i>
                    </a>
                </article>
                <!-- End Lot -->
            </div>
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Lot -->
                <article>
                    <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                        <!-- Лотлар - Батафсил -->
                        <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                            <!-- Майдон -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-017 u-line-icon-pro"></i>
                                7.3 Га
                            </li>
                            <!-- Балл бонитет -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-030 u-line-icon-pro"></i>
                                20-30
                            </li>
                            <!-- Ижара муддати -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-035 u-line-icon-pro"></i>
                                5-10 й.
                            </li>
                        </ul>
                        <!-- End Лотлар - Батафсил -->
                        <!-- Лотлар - Address -->
                        <div class="g-pa-25">
                            <h3 class="g-font-weight-600 g-font-size-16">Боғдорчилик, узумчилик </h3>
                            <p class="g-font-size-13 mb-4">Тошкент вилоят, Паркент тумани</p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Лот рақами: <span
                                    class="g-color-text g-color-primary g-font-weight-600">B1703202-00001</span></p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-1">Ижара тури: <span
                                    class="g-color-text g-font-weight-400">Бошқа мақсадлар</span></p>
                        </div>
                        <!-- End Лотлар - Address -->
                        <!-- Лотлар - Батафсил -->
                        <div
                            class="g-brd-gray-light-v3 g-brd-top js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1"
                            data-end-date="2021/09/25" data-month-format="%m" data-days-format="%d"
                            data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-days g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Кун</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-hours g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Соат</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-minutes g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Мин</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-seconds g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Сек</span>
                            </div>
                        </div>
                        <!-- End Лотлар - Батафсил -->
                    </div>
                    <a class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                       href="{{route('home')}}">
                        Батафсил
                        <i class="align-middle ml-2 fa fa-angle-right"></i>
                    </a>
                </article>
                <!-- End Lot -->
            </div>
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Lot -->
                <article>
                    <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                        <!-- Лотлар - Батафсил -->
                        <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                            <!-- Майдон -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-017 u-line-icon-pro"></i>
                                11.3 Га
                            </li>
                            <!-- Балл бонитет -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-030 u-line-icon-pro"></i>
                                50-60
                            </li>
                            <!-- Ижара муддати -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-035 u-line-icon-pro"></i>
                                10-15 й.
                            </li>
                        </ul>
                        <!-- End Лотлар - Батафсил -->
                        <!-- Лотлар - Address -->
                        <div class="g-pa-25">
                            <h3 class="g-font-weight-600 g-font-size-16">Cабзавот-полизчилик</h3>
                            <p class="g-font-size-13 mb-4">Андижон вилоят, Олтинкўл тумани</p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Лот рақами: <span
                                    class="g-color-text g-color-primary g-font-weight-600">D1703202-00001</span></p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-1">Ижара тури: <span
                                    class="g-color-text g-font-weight-400">Деҳқон хўжалиги</span></p>
                        </div>
                        <!-- End Лотлар - Address -->
                        <!-- Лотлар - Батафсил -->
                        <div
                            class="g-brd-gray-light-v3 g-brd-top js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1"
                            data-end-date="2021/08/09" data-month-format="%m" data-days-format="%d"
                            data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-days g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Кун</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-hours g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Соат</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-minutes g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Мин</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-seconds g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Сек</span>
                            </div>
                        </div>
                        <!-- End Лотлар - Батафсил -->
                    </div>
                    <a class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                       href="{{route('home')}}">
                        Батафсил
                        <i class="align-middle ml-2 fa fa-angle-right"></i>
                    </a>
                </article>
                <!-- End Lot -->
            </div>
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Lot -->
                <article>
                    <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                        <!-- Лотлар - Батафсил -->
                        <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                            <!-- Майдон -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-017 u-line-icon-pro"></i>
                                7.3 Га
                            </li>
                            <!-- Балл бонитет -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-030 u-line-icon-pro"></i>
                                20-30
                            </li>
                            <!-- Ижара муддати -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-035 u-line-icon-pro"></i>
                                5-10 й.
                            </li>
                        </ul>
                        <!-- End Лотлар - Батафсил -->
                        <!-- Лотлар - Address -->
                        <div class="g-pa-25">
                            <h3 class="g-font-weight-600 g-font-size-16">Боғдорчилик, узумчилик </h3>
                            <p class="g-font-size-13 mb-4">Тошкент вилоят, Паркент тумани</p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Лот рақами: <span
                                    class="g-color-text g-color-primary g-font-weight-600">B1703202-00001</span></p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-1">Ижара тури: <span
                                    class="g-color-text g-font-weight-400">Бошқа мақсадлар</span></p>
                        </div>
                        <!-- End Лотлар - Address -->
                        <!-- Лотлар - Батафсил -->
                        <div
                            class="g-brd-gray-light-v3 g-brd-top js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1"
                            data-end-date="2021/09/25" data-month-format="%m" data-days-format="%d"
                            data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-days g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Кун</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-hours g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Соат</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-minutes g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Мин</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-seconds g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Сек</span>
                            </div>
                        </div>
                        <!-- End Лотлар - Батафсил -->
                    </div>
                    <a class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                       href="{{route('home')}}">
                        Батафсил
                        <i class="align-middle ml-2 fa fa-angle-right"></i>
                    </a>
                </article>
                <!-- End Lot -->
            </div>
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Lot -->
                <article>
                    <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                        <!-- Лотлар - Батафсил -->
                        <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                            <!-- Майдон -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-017 u-line-icon-pro"></i>
                                11.3 Га
                            </li>
                            <!-- Балл бонитет -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-030 u-line-icon-pro"></i>
                                50-60
                            </li>
                            <!-- Ижара муддати -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-035 u-line-icon-pro"></i>
                                10-15 й.
                            </li>
                        </ul>
                        <!-- End Лотлар - Батафсил -->
                        <!-- Лотлар - Address -->
                        <div class="g-pa-25">
                            <h3 class="g-font-weight-600 g-font-size-16">Cабзавот-полизчилик</h3>
                            <p class="g-font-size-13 mb-4">Андижон вилоят, Олтинкўл тумани</p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Лот рақами: <span
                                    class="g-color-text g-color-primary g-font-weight-600">D1703202-00001</span></p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-1">Ижара тури: <span
                                    class="g-color-text g-font-weight-400">Деҳқон хўжалиги</span></p>
                        </div>
                        <!-- End Лотлар - Address -->
                        <!-- Лотлар - Батафсил -->
                        <div
                            class="g-brd-gray-light-v3 g-brd-top js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1"
                            data-end-date="2021/08/09" data-month-format="%m" data-days-format="%d"
                            data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-days g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Кун</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-hours g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Соат</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-minutes g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Мин</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-seconds g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Сек</span>
                            </div>
                        </div>
                        <!-- End Лотлар - Батафсил -->
                    </div>
                    <a class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                       href="{{route('home')}}">
                        Батафсил
                        <i class="align-middle ml-2 fa fa-angle-right"></i>
                    </a>
                </article>
                <!-- End Lot -->
            </div>
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Lot -->
                <article>
                    <div class="g-brd-x g-brd-gray-light-v3 g-bg-white">
                        <!-- Лотлар - Батафсил -->
                        <ul class="d-flex list-inline g-brd-y g-brd-gray-light-v3 mb-0">
                            <!-- Майдон -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-017 u-line-icon-pro"></i>
                                7.3 Га
                            </li>
                            <!-- Балл бонитет -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-brd-x g-brd-gray-light-v3 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-030 u-line-icon-pro"></i>
                                20-30
                            </li>
                            <!-- Ижара муддати -->
                            <li class="list-inline-item col-4 g-font-weight-500 g-font-size-13 text-center g-px-0 g-py-17 mr-0">
                                <i class="align-middle g-color-text mr-1 icon-real-estate-035 u-line-icon-pro"></i>
                                5-10 й.
                            </li>
                        </ul>
                        <!-- End Лотлар - Батафсил -->
                        <!-- Лотлар - Address -->
                        <div class="g-pa-25">
                            <h3 class="g-font-weight-600 g-font-size-16">Боғдорчилик, узумчилик </h3>
                            <p class="g-font-size-13 mb-4">Тошкент вилоят, Паркент тумани</p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-0">Лот рақами: <span
                                    class="g-color-text g-color-primary g-font-weight-600">B1703202-00001</span></p>
                            <p class="g-color-text g-font-weight-500 g-font-size-13 mb-1">Ижара тури: <span
                                    class="g-color-text g-font-weight-400">Бошқа мақсадлар</span></p>
                        </div>
                        <!-- End Лотлар - Address -->
                        <!-- Лотлар - Батафсил -->
                        <div
                            class="g-brd-gray-light-v3 g-brd-top js-countdown u-countdown-v1 text-center text-uppercase g-color-primary g-line-height-1"
                            data-end-date="2021/09/25" data-month-format="%m" data-days-format="%d"
                            data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-days g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Кун</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-hours g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Соат</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-minutes g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Мин</span>
                            </div>
                            <div class="d-inline-block g-pa-5 g-mx-2 g-mb-2 g-mt-2">
                                <div class="js-cd-seconds g-font-weight-700 g-font-size-20"></div>
                                <hr class="g-brd-primary-opacity-0_5 my-2">
                                <span class="g-font-size-12">Сек</span>
                            </div>
                        </div>
                        <!-- End Лотлар - Батафсил -->
                    </div>
                    <a class="btn btn-block g-brd-top-none g-brd-gray-light-v3 g-brd-primary--hover g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                       href="{{route('home')}}">
                        Батафсил
                        <i class="align-middle ml-2 fa fa-angle-right"></i>
                    </a>
                </article>
                <!-- End Lot -->
            </div>
        </div>
        <div class="text-center g-mb-20">
            <a class="btn g-color-text g-color-primary--hover g-bg-transparent g-font-weight-600 text-uppercase rounded-0"
               href="page-listing-1.html">
                <span class="align-middle g-color-primary g-font-size-20 g-pos-rel g-top-minus-2 mr-2">&#43;</span>
                Барча лотларни кўриш
            </a>
        </div>
        <section class="g-bg-primary g-color-white g-pa-30">
            <div class="row">
                <div class="col-md-9 align-self-center">
                    <h3 class="h4">Деҳқон ёки қишлоқ хўжалиги мақсадлари учун ер керакми?</h3>
                    <p class="lead g-color-white g-mb-20 g-mb-0--md">Ўзингизга керакли йўналишда ерларни танланг ва
                        танловда иштирок этиш учун ҳужжатларни жўнатинг</p>
                </div>
                <div class="col-md-3 align-self-center text-md-right">
                    <a class="btn btn-md u-btn-outline-white g-brd-2 rounded-0" href="#">Танловда иштирок этиш</a>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('footer')
    <!-- Footer Content -->
    <div class="container">
        <a class="d-block g-width-200 g-opacity-0_5 mx-auto g-mb-10" href="index.html">
            <img class="img-fluid" src="{{asset('assets/img/logo/logo-white1.svg')}}" alt="Logo">
        </a>
        <div class="g-width-70x--md mx-auto">
            <p class="mb-0 g-color-white">E-IJARA TANLOV» электрон майдончаси – ер участкалари бериш бўйича
                материалларни тўплаш, кўриб чиқиш ва ваколатли органлар ва ташкилотлар билан келишиш ҳамда танловни
                ташкил этиш ва ўтказиш учун зарур ахборотни киритиш, сақлаш, қайта ишлаш ва ҳужжатларни расмийлаштириш,
                шунингдек, манфаатдор шахсларнинг танлов жараёнларидан бевосита фойдаланиш имконини таъминлайдиган
                ахборот тизими.</p>
        </div>
    </div>
    <!-- End Footer Content -->
    <hr class="g-brd-white-opacity-0_2 g-my-40">
    <!-- Copyright -->
    <div class="container">
        <small class="footer-text-small">2021 Барча ҳуқуқлар ҳимояланган. Портал <a class="g-color-white" href="#">«Агросаноатни
                рақамлаштириш маркази»</a> давлат муассасаси томонидан ишлаб чиқилган.
        </small>
    </div>
    <!-- End Copyright -->
@endsection

@section('scripts')
    <script>

        let app = new Vue({
            el: '#app',
            data: {},
            methods: {
                inits: function () {
                    $(document).on('ready', function () {
                        // initialization of countdowns
                        var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                            yearsElSelector: '.js-cd-years',
                            monthElSelector: '.js-cd-month',
                            daysElSelector: '.js-cd-days',
                            hoursElSelector: '.js-cd-hours',
                            minutesElSelector: '.js-cd-minutes',
                            secondsElSelector: '.js-cd-seconds'
                        });
                    });
                    $(document).on('ready', function () {
                        // initialization of header
                        $.HSCore.components.HSHeader.init($('#js-header'));
                        $.HSCore.helpers.HSHamburgers.init('.hamburger');

                        // initialization of HSMegaMenu component
                        $('.js-mega-menu').HSMegaMenu({
                            event: 'hover',
                            pageContainer: $('.container'),
                            breakpoint: 991
                        });

                        // initialization of HSDropdown component
                        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
                            afterOpen: function () {
                                $(this).find('input[type="search"]').focus();
                            }
                        });

                        // initialization of range slider
                        $.HSCore.components.HSSlider.init('#rangeSlider1');

                        // initialization of custom select
                        $.HSCore.components.HSSelect.init('.js-custom-select');

                        // initialization of carousel
                        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

                        // initialization of popups
                        $.HSCore.components.HSPopup.init('.js-fancybox');

                        // initialization of go to
                        $.HSCore.components.HSGoTo.init('.js-go-to');
                    });
                }

            },
            created() {
                this.inits();
            }
        })
    </script>
@endsection
