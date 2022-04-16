<template>
    <section class="listing-grid">
        <div id="main-nav-menu">
            <div class="container">
                <div class="row">
                    <nav class="main-navigation text-justify hidden-xs hidden-sm">
                        <ul>
                            <li><router-link exact :to="{ name:'about'}">Тизим ҳақида</router-link></li>
                            <li><router-link exact :to="{ name:'map'}">Очиқ харита</router-link></li>
                            <li><router-link exact :to="{ name:'docs'}">Меъёрий ҳужжатлар</router-link></li>
                            <li><router-link exact :to="{ name:'instructions'}">Қўлланмалар</router-link></li>
                            <li><router-link exact :to="{ name:'faq'}">Кўп бериладиган саволлар</router-link></li>
                            <li><router-link exact :to="{ name:'contact'}">Боғланиш</router-link></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Navbar"
}
</script>

<style scoped>

</style>
