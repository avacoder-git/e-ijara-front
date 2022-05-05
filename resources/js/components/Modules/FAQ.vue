<template>
    <div class="container">
        <h1>
            Ko’p beriladigan savollar
        </h1>
        <div class="row">

            <div class="col-lg-12">
                <p>
                    <button class="question" type="button" data-id="1" @toggle="animate(1)">
                        Ro‘yxatdan qanday o‘tiladi?
                        <i class="fa-regular fa-circle-plus"></i>
                    </button>
                </p>
                <div id="question1" class="h-0 ">
                    <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>


export default {
    name: "FAQ",


    methods: {
        animate(id)
        {
            alert(id)
        }
    }



}
</script>

<style scoped>

</style>
