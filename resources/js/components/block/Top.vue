<template>
    <div>
        <div class="g-bg-white">
            <div class="container-fluid g-py-15">
                <div class="row align-items-center">
                    <div class="col-2 col-md-4 col-lg-2">
                        <!-- Logo -->
                        <router-link exact class="navbar-brand d-flex align-items-center g-color-main text-uppercase g-text-underline--none--hover"
                           :to="{ name:'index' }">
                                <span class="g-color-primary g-font-size-35 g-line-height-0_7 g-opacity-0_4 mr-4">
                                    <i class="icon-real-estate-089 u-line-icon-pro"></i></span>
                            <span class="g-color-primary d-block g-hidden-sm-down g-font-weight-600 g-line-height-1_4">
                                    E-IJARA TANLOV
                                    <span
                                        class="d-block g-color-text g-font-size-10 text-center">электрон майдонча</span>
                                </span>
                        </router-link>
                        <!-- End Logo -->
                    </div>
                    <div class="col-10 col-md-8 col-lg-6 ml-auto">
                        <!-- List -->
                        <ul class="list-inline float-right mb-0">
                            <!--                            <li class="list-inline-item">-->
                            <!--                                <a class="u-link-v5 g-color-main g-color-white&#45;&#45;hover g-bg-secondary g-bg-primary-dark-v1&#45;&#45;hover g-font-weight-500 g-px-15 g-py-10" href="page-register-1.html">Рўйхатдан ўтиш</a>-->
                            <!--                            </li>-->
                            <li class="list-inline-item">
                                <a v-if="user !== null"
                                   class="u-link-v5 g-color-white g-bg-primary g-bg-primary-dark-v1--hover g-font-weight-500 g-px-15 g-py-10"
                                   href="/login">{{ user.fullname }}</a>
                                <a v-else
                                   class="u-link-v5 g-color-white g-bg-primary g-bg-primary-dark-v1--hover g-font-weight-500 g-px-15 g-py-10"
                                   href="/login">Авторизация</a>
                            </li>
                        </ul>
                        <!-- End List -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: null,
        }
    },

    mounted() {
        axios.get('/api/me')
            .then(response => {
                if (response.data)
                    this.user = response.data
                else
                    this.user = null;
            })
            .catch(error => {
                if (error.response.status == 401) {
                    this.user = null;
                }
            })
    }
}
</script>
