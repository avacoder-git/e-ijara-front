<template>
    <div >
        <Navbar></Navbar>
        <router-view></router-view>
<!--        <Footer></Footer>-->
    </div>
</template>

<script>
import Navbar from "./Navbar";
import Footer from "./Footer";
export default {
    name: "Index",
    components: {Navbar, Footer}
}
</script>

<style scoped>

</style>
