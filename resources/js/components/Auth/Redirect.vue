<template>
    <div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12">
                    You will be redirected soon...

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Auth from "../../Auth";

export default {
    name: "Redirect",


    mounted() {
        Auth.login(this.$route.query.token, JSON.parse(this.$route.query.user));
        this.$router.push({name : 'dashboard.application'})
    }


}
</script>

<style scoped>

</style>
