<template>
    <div>
        <ul class="sidebar">
            <li>
                <router-link :to="{ name: 'dashboard.application'}" class="sidebar-link">
                    <img src="/image/Vector.svg" alt="">
                    Arizalarim
                    <span></span>
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'dashboard.application.create'}" class="sidebar-link">
                    <img src="/image/Vector.svg" alt="">
                    Ariza topshirish
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
                <a @click="leave" class="sidebar-link leave">
                    <img src="/image/Login.svg" height="100%" alt="">
                    Chiqish
                    <span></span>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Sidebar",


    methods:{
        leave(){

        }
    }


}
</script>

<style scoped>

</style>
