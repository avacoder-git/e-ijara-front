<template>
    <div>
        <div class="video">

            <video autoplay muted loop id="myVideo">
                <source src="image/video.mp4" type="video/mp4">
            </video>

            <div class="video-text">
                <p class="text-center text-white">
                    {{ $t('main.text') }}
                </p>
            </div>


        </div>


        <div class="container-fluid section">
            <div class="row">
                <div class="col-lg-10">
                    <h1>{{ $t("main.levels.name") }}</h1>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel" id="etap">

                        <div class="rectangle" v-for="(level, index) in  $t('main.levels.сontent')">
                            <div class="icon"><img :src="level.icon" alt=""></div>
                            <div class="bosqich">{{ index+1 }}-{{$t("main.levels.etap") }}</div>
                            <div class="rectangle-title">
                                {{ level.name }}
                            </div>
                            <div class="rectangle-body">
                                {{ level.text }}
                            </div>
                        </div>


<!--                        <div class="rectangle">-->
<!--                            <div class="icon"><img src="image/uzdyl.svg" alt=""></div>-->
<!--                            <div class="bosqich">{{ $t("main.levels.first.counter") }}</div>-->
<!--                            <div class="rectangle-title">-->
<!--                                {{ $t("main.levels.second.name") }}-->
<!--                            </div>-->
<!--                            <div class="rectangle-body">-->
<!--                                {{ $t("main.levels.first.text") }}-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="rectangle">-->
<!--                            <div class="icon"><img src="image/agree.svg" alt=""></div>-->
<!--                            <div class="bosqich">{{ $t("main.levels.second.counter") }}</div>-->
<!--                            <div class="rectangle-title">-->
<!--                                {{ $t("main.levels.second.name") }}-->
<!--                            </div>-->
<!--                            <div class="rectangle-body">-->
<!--                                {{ $t("main.levels.second.text") }}-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="rectangle">-->
<!--                            <div class="icon"><img src="image/auksion.svg" alt=""></div>-->
<!--                            <div class="bosqich">{{ $t("main.levels.third.counter") }}</div>-->
<!--                            <div class="rectangle-title">-->
<!--                                {{ $t("main.levels.third.name") }}-->
<!--                            </div>-->
<!--                            <div class="rectangle-body">-->
<!--                                {{ $t("main.levels.third.text") }}-->

<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="rectangle">-->
<!--                            <div class="icon"><img src="image/auksion.svg" alt=""></div>-->
<!--                            <div class="bosqich">{{ $t("main.levels.fourth.counter") }}</div>-->
<!--                            <div class="rectangle-title">-->
<!--                                {{ $t("main.levels.fourth.name") }}-->
<!--                            </div>-->
<!--                            <div class="rectangle-body">-->
<!--                                {{ $t("main.levels.fourth.text") }}-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="rectangle">-->
<!--                            <div class="icon"><img src="image/kadastr.svg" alt=""></div>-->
<!--                            <div class="bosqich">{{ $t("main.levels.fifth.counter") }}</div>-->
<!--                            <div class="rectangle-title">-->
<!--                                {{ $t("main.levels.fifth.name") }}-->
<!--                            </div>-->
<!--                            <div class="rectangle-body">-->
<!--                                {{ $t("main.levels.fifth.text") }}-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="rectangle">-->
<!--                            <div class="icon"><img src="image/list.svg" alt=""></div>-->
<!--                            <div class="bosqich">{{ $t("main.levels.sixth.counter") }}</div>-->
<!--                            <div class="rectangle-title">-->
<!--                                {{ $t("main.levels.sixth.name") }}-->
<!--                            </div>-->
<!--                            <div class="rectangle-body">-->
<!--                                {{ $t("main.levels.sixth.text") }}-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <Lands></Lands>
        <Video></Video>
        <Statistics></Statistics>
        <FieldStatus></FieldStatus>
        <div class="container-fluid d-sm-none section-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="offer">
                        <div class="row">
                            <div class="col-6">
                                <h1>{{  $t("main.offer.name") }}</h1>
                                <p>{{  $t("main.offer.text") }}</p>
                                <a href="/dashboard" class="check-offer">{{  $t("offer") }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid section-2">
            <div class="row">
                <div class="col-lg-12">
                    <h1>{{  $t("main.useful.title") }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel" id="quick-links">
                        <div class="rectangle">
                            <img src="image/gerb.png" alt="">
                            <div>
                                {{  $t("main.useful.content[0]") }}
                            </div>
                        </div>
                        <div class="rectangle">
                            <img src="image/agro-innovation.png" alt="">
                            <div>
                                {{  $t("main.useful.content[1]") }}
                            </div>
                        </div>
                        <div class="rectangle">
                            <img src="image/e-auksion.png" alt="">
                            <div>
                                {{  $t("main.useful.content[2]") }}
                            </div>
                        </div>
                        <div class="rectangle">
                            <img src="image/strategy.png" alt="">
                            <div>
                                {{  $t("main.useful.content[3]") }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
</template>

<script>
import jQuery from "jquery";
import Video from "./Video";
import FieldStatus from "./FieldStatus";
import Statistics from "./Statistics";
import Lands from "./Lands";
$(function () {
    $('#etap').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        navigation: true,
        navText: ['<div class="owl-prev-a"><img src="image/right.svg" alt=""></div>', '<div class="owl-next-a"><img src="image/right2.svg" alt=""></div>'],
        pagination: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,

        responsive: {
            0: {
                pagination: false,
                nav: false,
                items: 1.1,
            },
            600: {
                items: 4,
            },
            1000: {
                items: 4,
            }
        }
    })
    $('#statistics-owl').owlCarousel({
        margin: 24,

        responsive: {
            0: {
                items: 1.2
            },
            600: {
                items: 4,
            },
            1000: {
                items: 4,
            }
        }
    })
    $('#quick-links').owlCarousel({
        loop: true,
        margin: 24,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        navigation: true,
        navText: ['<img src="image/left.svg" alt="">', '<img src="image/left.svg" alt="">'],
        pagination: true,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3,
            },
            1000: {
                items: 3,
            }
        }
    })

});


export default {
    name: "Index",
    components: {Lands, Statistics, Video, jQuery, FieldStatus},


    mounted() {


    }
}
</script>

<style scoped>

</style>
