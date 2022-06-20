<template>
    <div>
        <ul class="sidebar">
            <li>
                <router-link :to="{ name: 'dashboard.application'}" class="sidebar-link">
                    <img src="/image/Vector.svg" alt="">
                    Takliflarim
                    <span></span>
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'dashboard.application.create'}" class="sidebar-link">
                    <img src="/image/Vector.svg" alt="">
                    Taklif kiritish
                    <span></span>
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'dashboard.info'}" class="sidebar-link">
                    <img src="/image/Profile.svg" alt="">
                    Ma'lumotlarim
                    <span></span>
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'dashboard.application.saved'}" class="sidebar-link">
                    <img src="/image/Profile.svg" alt="">
                    Saqlangan yerlar
                    <span></span>
                </router-link>
            </li>
            <li>
                <a href="" @click="logout" class="sidebar-link leave">
                    <img src="/image/Login.svg" height="100%" alt="">
                    Chiqish
                    <span></span>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
import Auth from "../Auth";
export default {
    name: "Sidebar",

    data(){
        return {
            username: this.auth.user
        }
    },


    methods:{
        logout(){
            Auth.logout()
        }
    }


}
</script>

<style scoped>

</style>
