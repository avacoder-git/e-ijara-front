<template>
    <nav class="sidebar-menu slide-from-left">
        <div class="nano">
            <div class="content">
                <nav class="responsive-menu">
                    <ul>
                        <li><a href="/"> <img src="/Front/assets/images/logo-menu.svg"
                                                       class="logo-menu"></a></li>
                    </ul>
                    <ul>
                        <li><router-link exact :to="{ name:'about'}">Тизим ҳақида</router-link></li>
                        <li><router-link exact :to="{ name:'map'}">Очиқ ҳарита</router-link></li>
                        <li><router-link exact :to="{ name:'docs'}">Меъёрий ҳужжатлар</router-link></li>
                        <li><router-link exact :to="{ name:'instructions'}">Қўлланмалар</router-link></li>
                        <li><router-link exact :to="{ name:'faq'}">Кўп бериладиган саволлар</router-link></li>
                        <li><router-link exact :to="{ name:'contact'}">Боғланиш</router-link></li>
                        <li><router-link exact :to="{ name:'contact'}">+998 71 235 0000 <span>техник қўллаш</span></router-link></li>

                    </ul>
<!--                    <ul class="footer-sidebar">-->
<!--                        <li></li>-->
<!--                    </ul>-->
                </nav>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "SideBarMenu"
}
</script>

<style scoped>

</style>
