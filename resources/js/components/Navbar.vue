<template>
    <nav class="navbar  w-100 navbar-expand-lg">
        <a class="navbar-brand" href=""><img src="/image/logo-color%201.svg" alt=""></a>
        <button class="navbar-toggler text-white border-white" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Tizim xaqida</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Ochiq xarita</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Meyoriy xujjatlar</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Qo’llanmalar</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Ko’p beriladigan savollar</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Aloqa</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        UZ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">UZ</a>
                        <a class="dropdown-item" href="#">RU</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link check-offer"  data-toggle="modal" data-target="#check-application" href="#">Taklifni tekshirish</a></li>
                <li class="nav-item"><a class="nav-link login" href="#">Tizimga kirish</a></li>

            </ul>
        </div>
    </nav>

</template>

<script>
export default {
    name: "Navbar"
}
</script>

<style scoped>

</style>
