<template>
    <div>
        <header id="js-header"
                class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance"
                data-header-fix-moment="600" data-header-fix-effect="slide">
            <div class="u-header__section g-transition-0_5" data-header-fix-moment-exclude="g-mt-0"
                 data-header-fix-moment-classes="g-mt-minus-73 g-mt-minus-76--md">
                <!-- Topbar -->
            </div>
        </header>
        <main>
            <Content :lands="lands"/>
        </main>
    </div>
</template>

<script>
import ContentFilter from '../block/ContentFiler.vue'
import Content from "../block/Content";


export default {
    name: 'lots',
    data() {
        return {
            lands: [],
        }
    },
    methods: {
        GetLands() {
            axios.get('/api/lands')
                .then(response => {
                    this.lands = response.data.data;
                })
                .catch(error => {
                    console.log(error)
                });
        },

    },
    components: {
        Content,
        ContentFilter,

    },
    async mounted() {
        this.GetLands();

    }
}
</script>
