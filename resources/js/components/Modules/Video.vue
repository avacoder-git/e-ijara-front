<template>
    <div>
        <div class="container-fluid section-2" style="">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-video">

                        <div id="videoCarousel" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="image/video-thumbnail1.jpg" class="carousel-img" alt="Video">
                                    <div class="video-content">
                                        <div class="row">
                                            <div class="col-lg-5  col-12">
                                                <button type="button" class="play-btn d-lg-none" data-video="1"
                                                        data-toggle="modal"
                                                        data-target="#videoModal"><img
                                                    src="image/play_btn.svg" class="play-img" alt="">
                                                </button>
                                                <div class="w-100">
                                                    <div class="text-1">
                                                        {{ $t('main.video.about') }}
                                                    </div>
                                                    <div class="text-2" v-html="$t('main.video.content[0]')">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <button type="button" class="play-btn" data-video="1"
                                                        data-toggle="modal"
                                                        data-target="#videoModal"><img
                                                    src="image/play_btn.svg" class="play-img" alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="image/video-thumbnail1.jpg" class="carousel-img" alt="Video">
                                    <div class="video-content">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <button type="button" class="play-btn d-lg-none"
                                                        data-video="2" data-toggle="modal"
                                                        data-target="#videoModal"><img
                                                    src="image/play_btn.svg" class="play-img"
                                                    alt="">
                                                </button>
                                                <div class="w-100">
                                                    <div class="text-1">
                                                        {{ $t('main.video.about') }}
                                                    </div>
                                                    <div class="text-2" v-html="$t('main.video.content[1]')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 d-sm-none">
                                                <button type="button" class="play-btn"
                                                        data-video="2" data-toggle="modal"
                                                        data-target="#videoModal"><img
                                                    src="image/play_btn.svg" class="play-img"
                                                    alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-nav">
                                <a class="carousel-control-prev" href="#videoCarousel" role="button"
                                   data-slide="prev">
                                    <img src="image/left.svg" alt="">
                                    <span class="sr-only">Previous</span>
                                </a>
                                <ol class="carousel-indicators">
                                    <li data-target="#videoCarousel" data-slide-to="0"
                                        class="active"></li>
                                    <li data-target="#videoCarousel" data-slide-to="1"></li>
                                </ol>
                                <a class="carousel-control-next" href="#videoCarousel" role="button"
                                   data-slide="next">
                                    <img src="image/left.svg" alt="">
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content mt-5">
                    <video style="width: 100%" controls class="video-mp4 d-none video-1">
                        <source src="video/video1.mp4" type="video/mp4">
                    </video>
                    <video style="width: 100%" controls class="video-mp4 d-none video-2">
                        <source src="video/video2.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</template>

<script>


export default {
    name: "Video",


    mounted() {
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
            $('.play-btn').click(function () {
                $(".video-1").removeClass('d-none')
                var media = $(".video-" + $(this).data('video')).get(0);
                media.play()

            })

        })
    }
}
</script>

<style scoped>

</style>
