<template>
    <div class="container">
        <h1>{{ $t("nav.links.contact") }}</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <p v-hmtl="$t('contact.text')">
                    </p>

                    <h3>
                        {{ $t("contact.tel") }}
                    </h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <p>- (+99871) 206-71-40</p>
                        </div>
                        <div class="col-lg-4">
                            <p>- (+99871) 206-71-43</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p>- (+99871) 206-71-43</p>
                        </div>
                        <div class="col-lg-4">
                            <p>- (+99871) 206-71-51</p>
                        </div>
                    </div>
                    <h3>
                        {{ $t("contact.time") }}
                    </h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <p>- Dushanba – Juma</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p>- soat 9:00 dan 18:00 gacha.</p>
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
