<template>
    <div>
        <nav class="js-mega-menu navbar navbar-expand-lg g-brd-y g-brd-2 g-bg-ijara g-pa-0">
            <div class="container-fluid">
                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0" type="button"
                        aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                        data-toggle="collapse" data-target="#navBar">
                        <span class="hamburger hamburger--slider g-px-0">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </span>
                </button>
                <!-- End Responsive Toggle Button -->
                <div class="col-auto order-lg-1">
                    <!-- Излаш шакли -->
                    <form id="searchform-1"
                          class="g-min-width-180--sm g-min-width-315--xl g-brd-right g-brd-primary-dark-v1 g-pos-rel">
                        <span class="g-color-white g-pos-abs g-top-15"><i class="fa fa-search"></i></span>
                        <input
                            class="form-control w-100 g-brd-transparent g-color-white g-bg-transparent g-font-size-13 g-pl-25 g-py-18"
                            type="text" placeholder="Лот рақами бўйича излаш">
                    </form>
                    <!-- End Излаш шакли -->
                </div>
                <!-- Navigation -->
                <div id="navBar"
                     class="collapse navbar-collapse align-items-center order-lg-last g-brd-top g-brd-none--lg g-brd-primary-dark-v1">
                    <ul class="navbar-nav g-py-30 g-py-0--lg">
                        <li class="nav-item">
                            <router-link exact
                                         class="nav-link g-color-white g-brd-right--lg g-brd-primary-dark-v1 g-bg-primary-dark-v1--hover g-font-weight-600 g-font-size-default g-px-17 g-px-23--xl g-py-15"
                                         :to="{ name:'index' }">Бош саҳифа
                            </router-link>
                        </li>
                        <!-- Лотлар - Submenu -->
                        <li class="nav-item hs-has-sub-menu">
                            <a id="nav-link--listing"
                               class="nav-link g-color-white g-brd-right--lg g-brd-primary-dark-v1 g-bg-primary-dark-v1--hover g-font-weight-600 g-font-size-default g-px-17 g-px-23--xl g-py-15"
                               href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--listing">
                                Лотлар
                            </a>
                            <!-- Submenu -->
                            <ul id="nav-submenu--listing"
                                class="hs-sub-menu list-unstyled u-shadow-v11 g-min-width-220 g-mt-2"
                                aria-labelledby="nav-link--listing">
                                <li class="dropdown-item">
                                    <router-link exact  class="nav-link g-color-text g-font-weight-600" :to="{ name:'lot.lots' }">Танловлар</router-link>
                                </li>
                                <li class="dropdown-item">
                                    <router-link exact class="nav-link g-color-text g-font-weight-600" :to="{ name:'lot.lots' }">Якунланганлар</router-link>
                                </li>
                                <li class="dropdown-item">
                                    <router-link exact class="nav-link g-color-text g-font-weight-600" :to="{ name:'lot.lots' }">Ўтказилмаганлар</router-link>
                                </li>
                            </ul>
                            <!-- End Submenu -->
                        </li>
                        <!-- End Лотлар - Submenu -->
                        <!--Портал ҳақида - Submenu -->
                        <li class="nav-item hs-has-sub-menu">
                            <a id="nav-link--page"
                               class="nav-link g-color-white g-brd-right--lg g-brd-primary-dark-v1 g-bg-primary-dark-v1--hover g-font-weight-600 g-font-size-default g-px-17 g-px-23--xl g-py-15"
                               href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--page">
                                Портал ҳақида
                            </a>
                            <!-- Submenu -->
                            <ul id="nav-submenu--page"
                                class="hs-sub-menu list-unstyled u-shadow-v11 g-min-width-220 g-mt-2"
                                aria-labelledby="nav-link--page">
                                <li class="dropdown-item">
                                    <router-link exact    class="nav-link g-color-text g-font-weight-600" :to="{ name:'pages.docs'}">Меъёрий-ҳуқуқий
                                        ҳужжатлар</router-link>
                                </li>
                                <li class="dropdown-item">
                                    <router-link exact :to="{name:'pages.manual'}" class="nav-link g-color-text g-font-weight-600" >Танловда қатнашиш
                                        бўйича қўлланма</router-link>
                                </li>
                                <li class="dropdown-item">
                                    <router-link exact :to="{name:'pages.competition-rules'}" class="nav-link g-color-text g-font-weight-600" >Танлов ўтказиш
                                        қоидалари</router-link>
                                </li>
                                <li class="dropdown-item">
                                    <router-link exact :to="{name:'pages.policy'}" class="nav-link g-color-text g-font-weight-600" >Махфийлик
                                        сиёсати</router-link>
                                </li>
                                <li class="dropdown-item">
                                    <router-link exact :to="{name:'pages.faq'}" class="nav-link g-color-text g-font-weight-600" >Кўп бериладиган
                                        саволлар</router-link>
                                </li>
                            </ul>
                            <!-- End Submenu -->
                        </li>
                        <!-- End Портал ҳақида - Submenu -->
                        <li class="nav-item">
                            <router-link exact :to="{name:'pages.help'}" class="nav-link g-color-white g-brd-right--lg g-brd-primary-dark-v1 g-bg-primary-dark-v1--hover g-font-weight-600 g-font-size-default g-px-17 g-px-23--xl g-py-15"
                               href="page-help-1.html">
                                Ёрдам
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link exact :to="{name:'pages.contact'}" class="nav-link g-color-white g-brd-right--lg g-brd-primary-dark-v1 g-bg-primary-dark-v1--hover g-font-weight-600 g-font-size-default g-px-17 g-px-23--xl g-py-15"
                               href="page-contacts-1.html">
                                Боғланиш
                            </router-link>
                        </li>
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </nav>
    </div>
</template>
