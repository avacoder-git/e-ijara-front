<template>
    <div>
        <main>
            <div class="container g-py-50">
                <div class="row">
                    <div class="error-panel col-md-12 text-center">
                        <div class="svg-wrapper mg-b-50">
                                                <object width="200" height="200" type="image/svg+xml" data="/ijara/assets/svg/404.svg"></object>
                        </div>
                        <h1 class="tx-28 tx-sm-36 tx-numeric tx-md-40 tx-semibold">404</h1>
                        <h4 class="tx-16 tx-sm-18 tx-md-24 tx-light mg-b-20 mg-md-b-30">Сиз излаган саҳифа мавжуд
                            эмас.</h4>
                        <p class="tx-12 tx-sm-13 tx-md-14 tx-color-04">Балки саҳифа бошқа манзилга кўчирилган ёки Сиз
                            адашган бўлишингиз мумкин.</p>
                        <div class="wd-200">
                            <router-link exact :to="{ name:'index' }" class="btn btn-block btn-white">Бош саҳифага
                                қайтиш
                            </router-link>
                        </div><!-- search-form -->
                    </div>
                </div>
            </div>
        </main>

    </div>
</template>
