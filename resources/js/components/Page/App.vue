<template>
    <div class="sidebar-menu-container" id="sidebar-menu-container">
        <div class="sidebar-menu-push">
            <div class="sidebar-menu-overlay"></div>
            <div class="sidebar-menu-inner">
<!--                <div class="bg-warning align-middle" style="padding: 5px">-->
<!--                    <marquee behavior="scroll" direction="left" class="align-middle"><span class="text-white"><b>Тизим синов режимида ишга туширилган</b></span>.</marquee>-->
<!--                </div>-->
                <Subheader/>
                <Navbar/>
                <router-view></router-view>
                <Footer/>
            </div>
        </div>
       <SideBarMenu/>
    </div>
</template>

<script>
import Subheader from "../Blocks/Subheader";
import Navbar from "../Blocks/Navbar";
import Landing from "../Blocks/Landing";
import Content from "../Blocks/Content";
import Footer from "../Blocks/Footer";
import SideBarMenu from "../Blocks/SideBarMenu";


export default {
    name: "App",
    components: {SideBarMenu, Footer, Landing, Navbar, Subheader,Content}
}
</script>

<style scoped>

</style>
