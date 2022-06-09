<template>
    <div>
        <ul class="sidebar">
            <li>
                <router-link :to="{ name: 'dashboard'}" class="sidebar-link">
                    <i>ico</i>
                    Arizalarim
                    <span></span>
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'dashboard.application'}" class="sidebar-link">
                    <i>ico</i>
                    Ariza topshirish
                    <span></span>
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'dashboard'}" class="sidebar-link">
                    <i>ico</i>
                    Ma'lumotlarim
                    <span></span>
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'dashboard'}" class="sidebar-link">
                    <i>ico</i>
                    Xisobotlar
                    <span></span>
                </router-link>
            </li>
            <li>
                <a @click="leave" class="sidebar-link leave">
                    <i>ico</i>
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
