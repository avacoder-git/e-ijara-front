<template>
    <div>
        <div class="slim-landing-headline">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mg-b-30">
                        <h1>ХУШ КЕЛИБСИЗ!</h1>
                        <h5>Қишлоқ хўжалигига мўлжалланган ер участкаларини ижарага бериш бўйича материалларни тўплаш, кўриб чиқиш ва ваколатли органлар ва ташкилотлар билан келишишни амалга оширишга мўлжалланган автоматлаштирилган ахборот тизими</h5>
                        <router-link class="btn btn-slim-demo" exact :to="{ name:'map'}">Таклиф киритиш</router-link>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div>
        <section class="meet-team hidden-sm hidden-xs mg-b-30">
            <div class="container desc-icons">
                <div id="featured-cars" class="mg-t-45">
                    <div class="col-md-3 col-sm-6 mg-b-30">
                        <div class="team-member text-center">
                            <div class="thumb-holder">
                                <img src="/Front/assets/svg/01.svg" alt="">
                                <div class="hover-content">
                                    <p>Жисмоний ва юридик шахслар томонидан таклиф келиб тушади</p>
                                </div>
                                <div class="down-content">
                                    <h2>ТАКЛИФЛАР</h2>
                                    <span>1-қадам</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mg-b-30">
                        <div class="team-member text-center">
                            <div class="thumb-holder">
                                <img src="/Front/assets/svg/02.svg" alt="">
                                <div class="hover-content">
                                    <p>Ер тузиш лойиҳасини тайёрлайди ва туман хокимлиги билан келишади.</p>
                                </div>
                                <div class="down-content">
                                    <h2>ИЖРОЧИ</h2>
                                    <span>2-қадам</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6mg-b-30">
                        <div class="team-member text-center">
                            <div class="thumb-holder">
                                <img src="/Front/assets/svg/03.svg" alt="">
                                <div class="hover-content">
                                    <p>Ваколатли органлар томонидан ер тузиш лойиҳасига хулоса берилади</p>
                                </div>
                                <div class="down-content">
                                    <h2>ВАКОЛАТЛИ ОРГАНЛАР</h2>
                                    <span>3-қадам</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mg-b-30">
                        <div class="team-member text-center team-member-last">
                            <div class="thumb-holder">
                                <img src="/Front/assets/svg/04.svg" alt="">
                                <div class="hover-content">
                                    <p>Бўш ер танловга қўйилади ва ғолиб билан ижара шартномаси имзоланади</p>
                                </div>
                                <div class="down-content">
                                    <h2>ТАНЛОВ</h2>
                                    <span>4-қадам</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "Landing"
}
</script>

<style scoped>

</style>
