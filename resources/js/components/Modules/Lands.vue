<template>
    <div class="container-fluid section-2">
        <div class="row">
            <div class="col-lg-12">
                <h1>{{ $t("main.lands.name") }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 " id="fields">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                           aria-controls="home" aria-selected="true">{{ $t("main.statistics.tanlovdagi") }}</a>
                    </li>
                    <li class="date-list d-sm-none">
                        <div class="date"><router-link :to="{name: 'all'}">{{ $t("seeAll") }}<img src="image/left.svg"
                                                                            style="transform: rotate(180deg); margin-left: 16px"
                                                                            alt=""></router-link></div>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="owl-carousel owl-custom" id="fields1Indicators">
                            <template v-for="item in data">
                                <a target="_blank" :href="`https://e-auksion.uz/lot-view?lot_id=${ item.lot_number }`" class="rectangle position-relative d-block">
                                    <div class="rectangle-img"><img
                                        :src="bg_photo[Math.floor(Math.random()*bg_photo.length)]" alt=""></div>
                                    <div class="d-flex justify-content-between">
                                        <div class="rectangle-lot">{{ item.updated_at }}</div>
                                        <div class="rectangle-lot">{{ item.lot_number }}</div>
                                    </div>
                                    <div class="rectangle-name mb-auto">
                                        {{ item.address }}
                                    </div>

                                    <div class="rectangle-footer">
                                        <div class="rectangle-ga">{{ item.area }} Ga</div>
                                        <button class="rectangle-save"
                                                :class="saved.includes(item.id) ? 'rectangle-save-2': 'rectangle-save-1' "
                                                @click.prevent="saveLand(item.id)">
                                            <img src="/image/Bookmark.svg" alt="">
                                        </button>
                                    </div>
                                </a>
                            </template>
                        </div>
                    </div>
                </div>

                <router-link :to="{name:'all'}" class="barchasi d-lg-none">{{ $t("seeAll")  }}</router-link>


            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Lands",


    data() {
        return {
            data: null,
            saved: [],
            bg_photo: [
                '/foto/photo_2022-01-23_11-08-18.jpg',
                '/foto/photo_2022-01-23_11-10-35.jpg',
                '/foto/photo_2022-01-23_11-10-39.jpg',
                '/foto/photo_2022-01-23_11-10-46.jpg',
                '/foto/photo_2022-01-23_11-10-51.jpg',
                '/foto/photo_2022-01-23_11-10-56.jpg',
                '/foto/photo_2022-01-23_11-11-01.jpg',
                '/foto/photo_2022-01-23_11-11-16.jpg',
                '/foto/photo_2022-01-23_11-11-22.jpg',
                '/foto/photo_2022-01-23_11-07-20.jpg',
                '/foto/photo_2022-01-23_11-07-36.jpg',
                '/foto/photo_2022-01-23_11-08-40.jpg',
                '/foto/photo_2022-01-23_11-07-42.jpg',
                '/foto/photo_2022-01-23_11-07-47.jpg',
                '/foto/photo_2022-01-23_11-07-53.jpg',
                '/foto/photo_2022-01-23_11-07-59.jpg',
                '/foto/photo_2022-01-23_11-08-04.jpg',
                '/foto/photo_2022-01-23_11-08-09.jpg',
                '/foto/photo_2022-01-23_11-08-14.jpg',
                '/foto/photo_2022-01-23_11-08-25.jpg',
                '/foto/photo_2022-01-23_11-08-30.jpg',
                '/foto/photo_2022-01-23_11-08-46.jpg',
                '/foto/photo_2022-01-23_11-08-51.jpg',
                '/foto/photo_2022-01-23_11-08-56.jpg',
                '/foto/photo_2022-01-23_11-09-06.jpg',
                '/foto/photo_2022-01-23_11-09-13.jpg',
                '/foto/photo_2022-01-23_11-09-19.jpg',
                '/foto/photo_2022-01-23_11-09-24.jpg',
                '/foto/photo_2022-01-23_11-09-29.jpg',
                '/foto/photo_2022-01-23_11-09-33.jpg',
                '/foto/photo_2022-01-23_11-09-39.jpg',
                '/foto/photo_2022-01-23_11-09-43.jpg',
                '/foto/photo_2022-01-23_11-09-48.jpg',
                '/foto/photo_2022-01-23_11-09-52.jpg',
                '/foto/photo_2022-01-23_11-10-00.jpg',
                '/foto/photo_2022-01-23_11-10-07.jpg',
                '/foto/photo_2022-01-23_11-10-12.jpg',
                '/foto/photo_2022-01-23_11-10-16.jpg',
                '/foto/photo_2022-01-23_11-10-21.jpg',
                '/foto/photo_2022-01-23_11-10-25.jpg',
                '/foto/photo_2022-01-23_11-10-30.jpg',
            ]
        }
    },


    methods: {
        getData() {
            axios.get('/api/front/lands')
                .then(response => {
                    this.data = response.data.data
                })
        },
        saveLand(id)
        {
            var auth = localStorage.getItem('token')
            if (auth)
            {
                var saved = this.saved
                var index = saved.indexOf(id)
                if (saved.includes(id))
                    saved.splice(index,1)
                else
                {
                    axios.get(`/api/save-land/${id}`,{
                        headers:{
                            "Authorization": "Bearer " + auth
                        }
                    })
                    .then(response => {
                        if (response)
                            console.log(response);
                    })
                    saved.push(id)
                }
                this.saved  = saved
            }
            else
            {
                $("#login-modal").modal('show')
            }

        }

    },

    mounted() {
        this.getData()
        this.saved = JSON.parse(localStorage.getItem('savedLands')) ?? []

    },

    updated() {
        setTimeout(function() {
            $('.owl-custom').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                navigation: true,
                navText: ['<img src="image/left.svg" alt="">', '<img src="image/left.svg" alt="">'],
                pagination: true,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,

                responsive: {
                    0: {
                        items: 1,
                        pagination: false,
                        nav: false,
                        navigation: false,

                    },
                    600: {
                        items: 4,
                    },
                    1000: {
                        items: 4,
                    }
                }
            })

        }, 1500);


    }


}
</script>

<style scoped>

.rectangle{
    transition: 0.2s;
    text-decoration: none;
}

.rectangle:hover{
    transform: scale(1.05);
}

</style>
