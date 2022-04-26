<template>
    <div class="container-fluid section-2" style="">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-video">

                    <div class="video-gradient">
                        <div class="video-content">
                            <div class="text-1">
                                Tizim haqida videorolik
                            </div>
                            <div class="text-2">
                                Bo'sh turgan er uchastkasi to'g'risidagi ma'lumotlarni ochiq elektron tanlovga
                                qo'yish masalasini belgilangan tartibda ko'rib chiqish borasida.
                            </div>
                            <div class="carousel-nav">
                                <a class="carousel-control-prev" href="#videoCarousel" role="button"
                                   data-slide="prev">
                                    <img src="image/left.svg" alt="">
                                    <span class="sr-only">Previous</span>
                                </a>
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                        class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                </ol>
                                <a class="carousel-control-next" href="#videoCarousel" role="button"
                                   data-slide="next">
                                    <img src="image/left.svg" alt="">
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>


                    </div>
                    <div id="videoCarousel" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item  active">
                                <img class="d-block w-100" src="image/video-thumbnail1.jpg" alt="First slide">
                                <button type="button" class="play-btn" data-video="1" data-toggle="modal" data-target="#video"><img
                                    src="image/play_btn.svg" class="play-img" alt="">
                                </button>

                            </div>
                            <div class="carousel-item ">
                                <img class="d-block w-100" src="image/video-thumbnail1.jpg" alt="First slide">
                                <button type="button" class="play-btn"  data-video="2"  data-toggle="modal" data-target="#video"><img src="image/play_btn.svg" class="play-img" alt="">
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content mt-5">
                    <video style="width: 100%" controls class="video-mp4 d-none video-1">
                        <source src="video/video1.mp4"  type="video/mp4">
                    </video>
                    <video style="width: 100%" controls class="video-mp4 d-none video-2">
                        <source src="video/video2.mp4"  type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
import jQuery from "jquery";

$(function () {
    $('#video').on('hidden.bs.modal', function () {
        var media = $(".video-1").get(0);
        media.pause();
        media.currentTime = 0;
        media = $(".video-2").get(0);
        media.pause();
        media.currentTime = 0;
        $(".video-mp4").addClass('d-none')
    })
    $('.play-btn').click(function (){
        $(".video-"+$(this).data('video')).removeClass('d-none')
    })

})

export default {
    name: "Video",

    components: {jQuery}
}
</script>

<style scoped>

</style>
