<template>
    <div>
        <Preloader v-if="show"></Preloader>
        <template>
            <Navbar></Navbar>
            <router-view></router-view>
            <Footer></Footer>
        </template>
    </div>
</template>

<script>
import Navbar from "./Navbar";
import Footer from "./Footer";
import Preloader from "./Modules/Preloader";

export default {
    name: "Index",
    components: {Navbar, Footer, Preloader},

    data() {
        return {
            show: true
        }
    },
    mounted() {
        this.showToggle()
    },
    methods: {
        showToggle() {
            setTimeout(() => {
                this.show = false
            }, 1000)
        }

    }
}
</script>

<style scoped>

</style>
