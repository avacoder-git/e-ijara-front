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
                            <a href="" class="footer-link">Tel: <b> <a style="text-decoration: none" href="tel: +99871) 2067142">+998 71 206-71-42</a> </b></a>
                            <a href="" class="footer-link">Tel: <b> <a style="text-decoration: none" href="tel: +99871 2067149">+998 71 206-71-49</a> </b></a>
                            <a style="text-decoration: none;font-size: 20px"  href="http://T.ME/EIJARASUPPORT" target="_blank" ><b>
                                <i class="fa fa-telegram"></i> </b></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container-fluid section-2">
                <div class="d-lg-flex flex-row justify-content-between align-items-center">


                    <a href=""  style="text-decoration: none">© 2022 <b>Barcha huquqlar himoyalangan.</b></a>
                    <a href="" >
<!--                        <div>-->
<!--                            &lt;!&ndash; START WWW.UZ TOP-RATING &ndash;&gt;<SCRIPT language="javascript" type="text/javascript">-->
<!--                            &lt;!&ndash;-->
<!--                            top_js="1.0";top_r="id=46496&r="+escape(document.referrer)+"&pg="+escape(window.location.href);document.cookie="smart_top=1; path=/"; top_r+="&c="+(document.cookie?"Y":"N")-->
<!--                            //&ndash;&gt;-->
<!--                        </SCRIPT>-->
<!--                            <SCRIPT language="javascript1.1" type="text/javascript">-->
<!--                                &lt;!&ndash;-->
<!--                                top_js="1.1";top_r+="&j="+(navigator.javaEnabled()?"Y":"N")-->
<!--                                //&ndash;&gt;-->
<!--                            </SCRIPT>-->
<!--                            <SCRIPT language="javascript1.2" type="text/javascript">-->
<!--                                &lt;!&ndash;-->
<!--                                top_js="1.2";top_r+="&wh="+screen.width+'x'+screen.height+"&px="+-->
<!--                                    (((navigator.appName.substring(0,3)=="Mic"))?screen.colorDepth:screen.pixelDepth)-->
<!--                                //&ndash;&gt;-->
<!--                            </SCRIPT>-->
<!--                            <SCRIPT language="javascript1.3" type="text/javascript">-->
<!--                                &lt;!&ndash;-->
<!--                                top_js="1.3";-->
<!--                                //&ndash;&gt;-->
<!--                            </SCRIPT>-->
<!--                            <SCRIPT language="JavaScript" type="text/javascript">-->
<!--                                &lt;!&ndash;-->
<!--                                top_rat="&col=D0D0CF&t=ffffff&p=24211D";top_r+="&js="+top_js+"";document.write('<a href="http://www.uz/ru/res/visitor/index?id=46496" target=_top><img src="http://cnt0.www.uz/counter/collect?'+top_r+top_rat+'" width=88 height=31 border=0 alt="Топ рейтинг www.uz"></a>')//&ndash;&gt;-->
<!--                            </SCRIPT><NOSCRIPT><A href="http://www.uz/ru/res/visitor/index?id=46496" target=_top><IMG height=31 src="http://cnt0.www.uz/counter/collect?id=46496&pg=http%3A//uzinfocom.uz&&col=D0D0CF&amp;t=ffffff&amp;p=24211D" width=88 border=0 alt="Топ рейтинг www.uz"></IMG></A></NOSCRIPT>&lt;!&ndash; FINISH WWW.UZ TOP-RATING &ndash;&gt;-->
<!--                        </div>-->
                        <img src="/image/digital-center.svg" alt=""></a>

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
