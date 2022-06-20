<template>
    <div class="bg-gray-100 pt-1 pb-5">

        <div class="container">
            <h1>{{ $t("nav.links.contact") }}</h1>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <p v-html="$t('contact.text')">
                        </p>

                        <h3 class="mb-2">
                            {{ $t("contact.tel") }}
                        </h3>
                        <div class="row">
                            <div class="col-lg-4">
                                - (+99871) 206-71-42
                            </div>
                            <div class="col-lg-4">
                                - (+99871) 206-71-49
                            </div>
                        </div>
                        <h3>
                            {{ $t("contact.time") }}
                        </h3>
                        <div class="row">
                            <div class="col-lg-4">
                                <p>- {{ $t('contact.monday') }} – {{ $t('contact.friday') }}</p>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <p>{{ $t('contact.ot') }}</p>
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

</style>
