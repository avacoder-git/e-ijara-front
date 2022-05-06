<template>
    <div class="container">
        <h1>
            Ko’p beriladigan savollar
        </h1>
        <div class="row">

            <div class="col-lg-12">
                <div class="card card-body">
                    <button class="question" type="button" data-id="1" @click="animate(1)">
                        <span>Ro‘yxatdan qanday o‘tiladi?</span>
                        <span class="icon"></span>
                    </button>
                    <div class="answer" :class="selected === 1 ? 'answer-active':''">
                        <div class="">
                            Some placeholder content for the collapse component. This panel is hidden by default but
                            revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                </div>
                <div class="card card-body">
                    <p>
                        <button class="question" type="button" data-id="1" @click="animate(2)">
                            <span>Ro‘yxatdan qanday o‘tiladi?</span>
                            <span class="icon"></span>
                        </button>
                    </p>
                    <div class="answer" :class="selected === 2 ? 'answer-active':''">
                        <div class="">
                            Some placeholder content for the collapse component. This panel is hidden by default but
                            revealed when the user activates the relevant trigger.
                        </div>
                    </div>
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

</style>
