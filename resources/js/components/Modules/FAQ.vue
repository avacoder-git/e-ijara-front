<template>
    <div class="bg-gray-100 pt-1 pb-5">
        <div class="container">
            <h1>
                {{ $t('nav.links.faq') }}
            </h1>
            <div class="row">

                <div class="col-lg-12">
                    <template v-for="(faq, index) in $t('faq')">
                        <div class="card card-body">

                            <p class="m-0">
                                <button class="question" :class="selected === index + 1  ? 'text-active':''"  type="button" data-id="1" @click="animate(index + 1)">
                                    <span>{{ faq.question }}</span>
                                    <span  :class="selected === index + 1  ? 'icon-active':'icon'" ></span>
                                </button>
                            </p>
                            <div class="answer" :class="selected === index + 1  ? 'answer-active':''">
                                <div v-html="faq.answer">
                                </div>
                            </div>

                        </div>
                    </template>
                </div>
            </div>
        </div>

    </div>

</template>

<script>


export default {
    name: "FAQ",

    data() {
        return {
            selected: 0
        }
    },


    methods: {
        animate(id) {
            this.selected = this.selected === id ? 0 : id

        }
    }


}
</script>

<style scoped>

.text-active{
    color: #08705F!important;
}

.answer li{
    color: #60676D!important;
    font-family: 'Raleway'!important;
    font-style: normal!important;
    font-weight: 600!important;
    font-size: 18px!important;
    line-height: 28px!important;
}

</style>
