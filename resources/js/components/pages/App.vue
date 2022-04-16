<template>
    <div>
        <header id="js-header"
                class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance"
                data-header-fix-moment="600" data-header-fix-effect="slide">
            <div class="u-header__section g-transition-0_5" data-header-fix-moment-exclude="g-mt-0"
                 data-header-fix-moment-classes="g-mt-minus-73 g-mt-minus-76--md">
                <!-- Topbar -->
                <Top/>
                <Nav/>
            </div>
        </header>
        <router-view></router-view>
        <Footer/>
    </div>
</template>


<script>
import Nav from "../block/Nav";
import Top from "../block/Top";
import Footer from "../block/Footer";


export default {
    components: {Footer, Top, Nav},
    methods: {
        InitStat() {

            $(document).on('ready', function () {
                // initialization of header
                $.HSCore.components.HSHeader.init($('#js-header'));
                $.HSCore.helpers.HSHamburgers.init('.hamburger');

                // initialization of HSMegaMenu component
                $('.js-mega-menu').HSMegaMenu({
                    event: 'hover',
                    pageContainer: $('.container'),
                    breakpoint: 991
                });

                // initialization of HSDropdown component
                $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
                    afterOpen: function () {
                        $(this).find('input[type="search"]').focus();
                    }
                });
            });
        },
    },
    async mounted() {
        this.InitStat();
    }
}
</script>
