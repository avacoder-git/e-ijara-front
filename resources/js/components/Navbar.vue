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
                <li class="nav-item"><a class="nav-link nav-link-mini" href="#">Tizim xaqida</a></li>
                <li class="nav-item"><a class="nav-link nav-link-mini" href="#">Ochiq xarita</a></li>
                <li class="nav-item"><a class="nav-link nav-link-mini" href="#">Meyoriy xujjatlar</a></li>
                <li class="nav-item"><a class="nav-link nav-link-mini" href="#">Qo’llanmalar</a></li>
                <li class="nav-item"><a class="nav-link nav-link-mini" href="#">Ko’p beriladigan savollar</a></li>
                <li class="nav-item"><a class="nav-link nav-link-mini" href="#">Aloqa</a></li>
                <li class="nav-item dropdown lang-lg">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
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
                <li class="nav-item"><a class="nav-link login" href="#">Tizimga kirish</a></li>

            </ul>
        </div>
    </nav>

</template>

<script>


$(function () {
    $('#langdropdown').click(function () {
        $('.dropdown-menu').toggle(function () {

            $('.dropdown-menu').animate(function () {
                $('.dropdown-menu').css('bottom', '0')
            })

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
    name: "Navbar"
}
</script>

<style scoped>

</style>
