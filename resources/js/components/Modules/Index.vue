<template>
    <div>
        <div class="video">

            <video autoplay muted loop id="myVideo">
                <source src="image/video.mp4" type="video/mp4">
            </video>

            <div class="video-text">
                <p class="text-center text-white">
                    Qishloq xo‘jaligiga mo‘ljallangan yer uchastkalarini ijaraga berish bo‘yicha materiallarni to‘plash,
                    ko‘rib
                    chiqish va vakolatli organlar va tashkilotlar bilan kelishishni amalga oshirishga mo‘ljallangan
                    avtomatlashtirilgan axborot tizimi.
                </p>
            </div>


        </div>


        <div class="container-fluid section">
            <div class="row">
                <div class="col-lg-10">
                    <h1>Tizim bosqichlari</h1>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel" id="etap">
                        <div class="rectangle">
                            <div class="icon"><img src="image/uzdyl.svg" alt=""></div>
                            <div class="bosqich">1-bosqich</div>
                            <div class="rectangle-title">
                                “O‘zdavyerloyiha” DILI
                            </div>
                            <div class="rectangle-body">
                                Bo‘sh yerning “Yer tuzish loyihasi” ishlab chiqiladi.
                            </div>
                        </div>
                        <div class="rectangle">
                            <div class="icon"><img src="image/agree.svg" alt=""></div>
                            <div class="bosqich">2-bosqich</div>
                            <div class="rectangle-title">
                                Vakolatli organlar
                            </div>
                            <div class="rectangle-body">
                                “Yer tuzish loyihasi” tegishli tashkilot va idoralar bilan kelishiladi.
                            </div>
                        </div>
                        <div class="rectangle">
                            <div class="icon"><img src="image/auksion.svg" alt=""></div>
                            <div class="bosqich">3-bosqich</div>
                            <div class="rectangle-title">
                                “E-AUKSION” ESP
                            </div>
                            <div class="rectangle-body">
                                Bo‘sh yer tanlovga qo‘yiladi hamda g‘olib aniqlanadi va ijara
                                shartnomasi bir tomonlama imzolanadi.
                            </div>
                        </div>
                        <div class="rectangle">
                            <div class="icon"><img src="image/auksion.svg" alt=""></div>
                            <div class="bosqich">4-bosqich</div>
                            <div class="rectangle-title">
                                TUMAN HOKIMIYATI
                            </div>
                            <div class="rectangle-body">
                                Ijara shartnomasi ikkinchi tomonlama imzolanadi.
                            </div>
                        </div>
                        <div class="rectangle">
                            <div class="icon"><img src="image/kadastr.svg" alt=""></div>
                            <div class="bosqich">5-bosqich</div>
                            <div class="rectangle-title">
                                Davlat kadastr palatasi
                            </div>
                            <div class="rectangle-body">
                                Yerning kadastr hujjatlari rasmiylashtiradi.
                            </div>
                        </div>
                        <div class="rectangle">
                            <div class="icon"><img src="image/list.svg" alt=""></div>
                            <div class="bosqich">6-bosqich</div>
                            <div class="rectangle-title">
                                G'olib
                            </div>
                            <div class="rectangle-body">
                                “E-AUKSION” ESPdagi shaxsiy kabinetiga barcha xujjatlar kelib tushadi.
                            </div>
                        </div>
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
                                <h1>Siz taklif kiritmochimisiz?</h1>
                                <p>Bo'sh turgan yer uchastkasi to'g'risidagi ma'lumotlarni ochiq elektron tanlovga
                                    qo'yish
                                    masalasini belgilangan tartibda ko'rib chiqish uchun.</p>
                                <a href="" class="check-offer">Taklif kiritish</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid section-2">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Foydali havolalar</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel" id="quick-links">
                        <div class="rectangle">
                            <img src="image/gerb.png" alt="">
                            <div>
                                O'zbekiston Respublikasi Qishloq xo'jaligi vazirligi
                            </div>
                        </div>
                        <div class="rectangle">
                            <img src="image/agro-innovation.png" alt="">
                            <div>
                                Qishloq xo`jaligida bilim va innovasiyalar markazi
                            </div>
                        </div>
                        <div class="rectangle">
                            <img src="image/e-auksion.png" alt="">
                            <div>
                                “E-AUKSION” elektron savdo platformasi
                            </div>
                        </div>
                        <div class="rectangle">
                            <img src="image/strategy.png" alt="">
                            <div>
                                2020-2030 yillarda O'zbekiston Respublikasi qishloq xo'jaligini rivojlantirish strategiyasi
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
