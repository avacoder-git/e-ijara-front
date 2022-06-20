<template>
    <div>
        <ul class="sidebar">
            <li>
                <router-link :to="{ name: 'dashboard.application'}" class="sidebar-link">
                    <img src="/image/Vector.svg" alt="">
                    {{ $t("dashboard.sidebar[0]") }}
                    <span></span>
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'dashboard.application.create'}" class="sidebar-link">
                    <img src="/image/Vector.svg" alt="">
                    {{ $t('dashboard.sidebar[1]') }}
                    <span></span>
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'dashboard.info'}" class="sidebar-link">
                    <img src="/image/Profile.svg" alt="">
                    {{ $t('dashboard.sidebar[2]') }}
                    <span></span>
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'dashboard.application.saved'}" class="sidebar-link">
                    <img class="icon" src="/image/Bookmark.svg" alt="">
                    {{ $t('dashboard.sidebar[3]') }}
                    <span></span>
                </router-link>
            </li>
            <li>
                <a href="" @click="logout" class="sidebar-link leave">
                    <img src="/image/Login.svg" height="100%" alt="">
                    {{ $t('dashboard.sidebar[4]') }}
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

.icon{
    filter: brightness(50%);

}

</style>
