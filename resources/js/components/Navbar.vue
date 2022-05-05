<template>
    <nav class="navbar  w-100 navbar-expand-lg">
        <a class="navbar-brand" href=""><img src="/image/logo-color%201.svg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                aria-expanded="false" aria-label="Toggle navigation">
            <i class="toggle-line toggle-line1 "></i>
            <i class="toggle-line toggle-line2 "></i>
            <i class="toggle-line toggle-line3 "></i>
        </button>
        <div class="dropdown langdropdown text-white d-lg-none lang-lg">
            <a class="dropdown-toggle text-white" href="#" id="langdropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                UZ
            </a>
            <div class="dropdown-menu" aria-labelledby="langdropdown">
                <a class="dropdown-item" href="#">UZ</a>
                <a class="dropdown-item" href="#">RU</a>
            </div>
        </div>


        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><router-link to="/about" class="nav-link nav-link-mini" href="#">Tizim xaqida</router-link></li>
                <li class="nav-item"><a class="nav-link nav-link-mini" href="#">Ochiq xarita</a></li>
                <li class="nav-item"><router-link to="/documents" class="nav-link nav-link-mini" href="#">Meyoriy xujjatlar</router-link></li>
                <li class="nav-item"><router-link to="/manuals" class="nav-link nav-link-mini" href="#">Qo’llanmalar</router-link></li>
                <li class="nav-item"><router-link to="/faq" class="nav-link nav-link-mini" href="#">Ko’p beriladigan savollar</router-link></li>
                <li class="nav-item"><a class="nav-link nav-link-mini" href="#">Aloqa</a></li>
                <li class="nav-item dropdown lang-lg">
                    <a class="nav-link dropdown-toggle" href="#" id="langlgdropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        UZ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">UZ</a>
                        <a class="dropdown-item" href="#">RU</a>
                    </div>
                </li>
                <li class="nav-item "><a class="nav-link check-offer" data-toggle="modal"
                                         data-target="#check-application" href="#">Taklifni tekshirish</a></li>
                <li class="nav-item"><a class="nav-link login" data-toggle="modal" style="cursor: pointer"
                                        data-target="#login-modal">Tizimga kirish</a></li>

            </ul>
        </div>
    </nav>

    <div class="modal" id="check-application" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title">Taklif holatini tekshirish</h5>


                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body border-0">
                    <label for="application_id">Ariza raqami</label>
                    <input id="application_id" type="text" placeholder="0000000"
                           class="form-control border-0 bg-light shadow-none">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-check">Tekshirish</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="login-modal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">

            <div class="modal-content overflow-hidden">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row">
                    <div class="col-lg-6 d-sm-none p-0 overflow-hidden">
                            <img src="image/bg.jpg" class="w-100 h-100" alt="">
                    </div>
                    <div class="col-lg-6 p-lg-0">
                        <div class="login-content">
                            <h3>Tizimga kirish</h3>
                            <p class="description">Tizimga kirish OneID Yagona identifikatsiya tizimi yoki ERI orqali amalga
                                oshiriladi.</p>

                            <nav class="m-24">
                                <div class="nav nav-tabs" id="login-tab" role="tablist">
                                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-oneid"
                                       role="tab" aria-controls="nav-home" aria-selected="true">
                                        <img src="image/oneid.png" alt="">
                                    </a>
                                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-imzo"
                                       role="tab" aria-controls="nav-profile" aria-selected="false">
                                        <img src="image/e-imzo.png" alt="">
                                    </a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-oneid" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                </div>
                                <div class="tab-pane fade" id="nav-imzo" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">...
                                </div>
                            </div>

                            <div class="d-flex flex-row m-24">
                                <div class="checkbox-custom cursor-pointer" :class="agree ? 'custom-checked' : ''" @toggle.prevent="agreeToggle"><i class="fas fa-solid fa-check"></i></div>
                                <p class="w-75 ml-3  cursor-pointer"  @click.prevent="agreeToggle">Shaxsiy maʼlumotlarimni uzatilishiga va tizimdan <a href="">foydalanish shartlariga</a> roziman.</p>
                            </div>

                            <button class="btn btn-check" :class="agree ? '' : 'disabled'" :disabled="!agree">Tizimga kirish</button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>


import Button from "../../../vendor/laravel/breeze/stubs/inertia-vue/resources/js/Components/Button";
$(function () {
    $('#langdropdown').click(function () {
        $('.dropdown-menu').toggle(function () {

            $('.dropdown-menu').animate(function () {
                $('.dropdown-menu').css('bottom', '0')
            },1000)

        })
    })
    $('#langlgdropdown').click(function () {
        $('.dropdown-menu').toggle(function () {

            $('.dropdown-menu').animate(function () {
                $('.dropdown-menu').css('bottom', '0')
            },1000)

        })
    })
    $('.navbar-toggler').click(function () {
        $('#navbarNav').toggle(function () {
            $('#navbarNav').animate(function () {
                $('#navbarNav').css('bottom', '0')
                $('.toggle-line2').css('opacity', 0)
            })
        })
        $('.toggle-line').toggleClass('border-black')
        $('.toggle-line1').toggleClass('line1')
        $('.toggle-line2').toggleClass('line2')
        $('.toggle-line3').toggleClass('line3')

    })
})


export default {
    name: "Navbar",
    components: {Button},
    data(){
        return {
            agree: false
        }
    },


    methods:{
        agreeToggle(){
            this.agree = !this.agree
        }
    }

}
</script>

<style scoped>

</style>
