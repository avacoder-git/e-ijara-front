<template>
    <footer class="bg-white pt-4 mt-5">
        <div class="container-fluid section-2" style="">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="/image/logo2.png" alt="">
                            <div class="footer-body">
                                {{ $t("footer.text") }}
                            </div>
                        </div>


                        <div class="col-lg-4">
                            <div class="footer-header">{{ $t("footer.menu.title") }}</div>

                            <div class="row">
                                <div class="col-6">
                                    <router-link :to="{ name: 'about' }" class="footer-link">{{ $t("footer.menu.content[0]") }}</router-link>
                                    <router-link :to="{ name: 'map' }" class="footer-link">{{ $t("footer.menu.content[1]") }}</router-link>
                                    <router-link :to="{ name: 'docs' }" class="footer-link">{{ $t("footer.menu.content[2]") }}</router-link>
                                </div>
                                <div class="col-6">
                                    <router-link :to="{ name: 'manuals' }" class="footer-link">{{ $t("footer.menu.content[3]") }}</router-link>
                                    <router-link :to="{ name: 'faq' }" class="footer-link">{{ $t("footer.menu.content[4]") }}</router-link>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-header">{{ $t("nav.links.contact") }}</div>
                            <a href="" class="footer-link">Tel: <b> <a style="text-decoration: none" href="tel: +998996314221">+998 99 631 42 21</a> </b></a>
                            <a href="" class="footer-link">Telegram: <b> <a style="text-decoration: none"  href="http://T.ME/EIJARASUPPORT" target="_blank">http://T.ME/EIJARASUPPORT</a> </b></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container-fluid section-2">
                <div class="d-lg-flex flex-row justify-content-between align-items-center">
                    <a href="" class="mt-sm-3">© 2022 <b>Barcha huquqlar himoyalangan.</b></a>
                    <a href="" class="mt-sm-3"><img src="/image/digital-center.svg" alt=""></a>

                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>

</style>
