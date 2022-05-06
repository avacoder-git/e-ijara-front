<template>
    <div >
        <Preloader></Preloader>
        <div>
            <Navbar></Navbar>
            <router-view></router-view>
            <Footer></Footer>
        </div>
    </div>
</template>

<script>
import Navbar from "./Navbar";
import Footer from "./Footer";
import Preloader from "./Modules/Preloader";

export default {
    name: "Index",
    components: {Navbar, Footer, Preloader}
}
</script>

<style scoped>

</style>
