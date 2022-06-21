<template>
    <div class="bg-gray-100 pt-1 pb-5">

        <div class="container">
            <h1>{{ $t("nav.links.contact") }}</h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <p v-html="$t('contact.text')">
                        </p>

                        <h3 class="mb-2 mt-2 header">
                            {{ $t("contact.tel") }}
                        </h3>
                        <div class="row">
                            <div class="col-lg-12 text">
                                - (+99871) 206-71-42
                            </div>
                            <div class="col-lg-12 text">
                                - (+99871) 206-71-49
                            </div>
                        </div>
                        <h3 class="my-2 header">
                            {{ $t("contact.time") }}
                        </h3>
                        <div class="row">
                            <div class="col-lg-4 text-lowercase text">
                                <p class="text">- {{ $t('contact.monday') }} – {{ $t('contact.friday') }}</p>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-4 text-lowercase text ">
                                <p class="text">{{ $t('contact.ot') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Contact"
}
</script>

<style scoped>
.header{
    font-family: 'Raleway';
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px;
}

.text{
    color: #60676D!important;
    font-family: 'Raleway'!important;
    font-style: normal!important;
    font-weight: 600!important;
    font-size: 18px!important;
    line-height: 28px!important;
}


</style>
