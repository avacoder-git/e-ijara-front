<template>
    <div>
        <section class="land-details p-0 mg-b-30">
            <div class="container">
                <div class="row">
                    <div id="listing-lands" class="col-md-12" style="margin-top: 10px">
                        <div class="tab">
                            <div class="tabs">
                                <ul class="tab-links">
                                    <li class="active" @click="GetLands(1)"><a href="#tab1" >Бўш ерлар</a></li>
                                    <li @click="GetLands(2)"><a href="#tab2" >Лойиҳалашда</a></li>
                                    <li @click="GetLands(3)"><a href="#tab3">Танловда</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab1" class="tab active" >
                                        <div class="pre-featured clearfix">
                                            <div class="info-text">
                                                <h4 class="search-head">Бўш ер участкалари</h4>
                                            </div>
                                            <div class="right-content">
                                                <div class="input-select">
                                                    <select name="mark" id="mark">
                                                        <option value="-1">Саралаш</option>
                                                        <option>Ижара муддати</option>
                                                        <option>Майдони</option>
                                                        <option>Сўнгги</option>
                                                        <option>Барчаси</option>
                                                    </select>
                                                </div>
                                                <div class="grid-list">
                                                    <ul>
                                                        <li data-v-bc106788=""><a data-v-bc106788="" href="https://t.me/eijarahisobot"><i data-v-bc106788="" class="fa fa-file-excel-o"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-list"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-square"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <section class="land-grid p-0">
                                            <div class="container">
                                                <div class="row">
                                                    <div>
                                                        <div v-for="land in LoadMore"
                                                             class="land-item col-md-4 col-sm-6">
                                                            <img class="bg_photo"
                                                                 :src="land.land_files ? 'http://cabinet.e-ijara.uz/land/'+ land.id+'/file/download/'+ land.land_files.id : bg_photo[Math.floor(Math.random()*bg_photo.length)] "
                                                                 alt="">
                                                            <span>{{ parseFloat(land.area).toFixed(2) }} Га</span>
                                                            <div class="down-content">
                                                                <div class="post-info-new">
                                                                    <ul>
                                                                        <li>{{ land.created_at }}</li>
                                                                        <li>{{ land.regnum }}</li>
                                                                    </ul>
                                                                    <div class="tittle">
                                                                        <router-link
                                                                            :to="{ name:'map',params:{id:land.id} }">
                                                                            <h2>
                                                                                {{
                                                                                    land.region.nameuz
                                                                                }}<br>{{ land.district.nameuz }}
                                                                            </h2>
                                                                        </router-link>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div v-show="links.next != null"
                                                             class="col-md-12 text-center morebtn">
                                                            <div @click="getMore()"
                                                                 class="advanced-button item-center morebtn">
                                                                <span>Барчасини<i
                                                                    class="fa fa-arrow-down"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div id="tab2" class="tab">
                                        <div class="pre-featured clearfix">
                                            <div class="info-text">
                                                <h4 class="search-head">Лойиҳалашда</h4>
                                            </div>
                                            <div class="right-content">
                                                <div class="input-select">
                                                    <select name="mark" id="mark">
                                                        <option value="-1">Саралаш</option>
                                                        <option>Ижара муддати</option>
                                                        <option>Майдони</option>
                                                        <option>Сўнгги</option>
                                                        <option>Барчаси</option>
                                                    </select>
                                                </div>
                                                <div class="grid-list">
                                                    <ul>
                                                        <li data-v-bc106788=""><a data-v-bc106788="" href="/lands/export"><i data-v-bc106788="" class="fa fa-file-excel-o"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-list"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-square"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <section class="land-grid p-0">
                                            <div class="container">
                                                <div class="row">
                                                    <div>
                                                        <div v-for="land in LoadMore"
                                                             class="land-item col-md-4 col-sm-6">
                                                            <img class="bg_photo"
                                                                 :src="land.land_files ? 'http://cabinet.e-ijara.uz/land/'+ land.id+'/file/download/'+ land.land_files.id : bg_photo[Math.floor(Math.random()*bg_photo.length)] "
                                                                 alt="">
                                                            <span>{{ parseFloat(land.area).toFixed(2) }} Га</span>
                                                            <div class="down-content">
                                                                <div class="post-info-new">
                                                                    <ul>
                                                                        <li>{{ land.created_at }}</li>
                                                                        <li>{{ land.regnum }}</li>
                                                                    </ul>
                                                                    <div class="tittle">
                                                                        <router-link
                                                                            :to="{ name:'map',params:{id:land.id} }">
                                                                            <h2>
                                                                                {{
                                                                                    land.region.nameuz
                                                                                }}<br>{{ land.district.nameuz }}
                                                                            </h2>
                                                                        </router-link>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div v-show="links.next != null"
                                                             class="col-md-12 text-center morebtn">
                                                            <div @click="getMore()"
                                                                 class="advanced-button item-center morebtn">
                                                                <span>Барчасини<i
                                                                    class="fa fa-arrow-down"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div id="tab3" class="tab">
                                        <div class="pre-featured clearfix">
                                            <div class="info-text">
                                                <h4 class="search-head">Танловга чиқарилганлар</h4>
                                            </div>
                                            <div class="right-content">
                                                <div class="input-select">
                                                    <select name="mark" id="mark">
                                                        <option value="-1">Саралаш</option>
                                                        <option>Ижара муддати</option>
                                                        <option>Майдони</option>
                                                        <option>Сўнгги</option>
                                                        <option>Барчаси</option>
                                                    </select>
                                                </div>
                                                <div class="grid-list">
                                                    <ul>
                                                        <li data-v-bc106788=""><a data-v-bc106788="" href="/lands/export"><i data-v-bc106788="" class="fa fa-file-excel-o"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-list"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-square"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <section class="land-grid p-0">
                                            <div class="container">
                                                <div class="row">
                                                    <div>
                                                        <div v-for="land in LoadMore"
                                                             class="land-item col-md-4 col-sm-6">
                                                            <img class="bg_photo"
                                                                 :src="land.land_files ? 'http://cabinet.e-ijara.uz/land/'+ land.id+'/file/download/'+ land.land_files.id : bg_photo[Math.floor(Math.random()*bg_photo.length)] "
                                                                 alt="">
                                                            <span>{{ parseFloat(land.area).toFixed(2) }} Га</span>
                                                            <div class="down-content">
                                                                <div class="post-info-new">
                                                                    <ul>
                                                                        <li>{{ land.created_at }}</li>
                                                                        <li>{{ land.regnum }}</li>
                                                                    </ul>
                                                                    <div class="tittle">
                                                                        <router-link
                                                                            :to="{ name:'map',params:{id:land.id} }">
                                                                            <h2>
                                                                                {{
                                                                                    land.region.nameuz
                                                                                }}<br>{{ land.district.nameuz }}
                                                                            </h2>
                                                                        </router-link>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div v-show="links.next != null"
                                                             class="col-md-12 text-center morebtn">
                                                            <div @click="getMore()"
                                                                 class="advanced-button item-center morebtn">
                                                                <span>Барчасини<i
                                                                    class="fa fa-arrow-down"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="count mg-b-30">
            <div id="funny-facts">
                <div class="divider-text mg-b-45">СТАТИСТИКА</div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="fact-item">
                                <div class="count-number" :data-count="landCount.count_all">
                                    <span class="count-focus">{{ landCount.count_all }}</span>
                                </div>
                                <span class="fact-role">БАРЧАСИ</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="fact-item">
                                <div class="count-number" :data-count="landCount.count_ajratilgan">
                                    <span class="count-focus">{{ landCount.count_ajratilgan }}</span>
                                </div>
                                <span class="fact-role">АЖРАТИЛГАН</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="fact-item">
                                <div class="count-number" :data-count="landCount.count_tanlovda">
                                    <span class="count-focus">{{ landCount.count_tanlovda }}</span>
                                </div>
                                <span class="fact-role">ТАНЛОВДА</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="fact-item  fact-item-last">
                                <div class="count-number" :data-count="landCount.count_loyihalash">
                                    <span class="count-focus">{{ landCount.count_loyihalash }}</span>
                                </div>
                                <span class="fact-role">ЛОЙИҲАЛАШДА</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "Content",
    data() {
        return {
            lands: [],
            links: {},
            status:1,
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
            ],
            landCount: {
                count_all:0,
                count_loyihalash:0,
            },
        }
    },
    methods: {
        getMore() {
            axios.get(this.links.next)
                .then(response => {
                    this.LoadMore = response.data.data;
                    this.links = response.data.links;
                })
                .catch(error => {
                    console.log(error)
                });
        },
        GetAll() {
            axios.get('/api/geojson/getCount')
                .then(response => {
                    this.landCount = response.data;
                })
                .catch(error => {
                    console.log(error);
                })
        },
        GetLands(status) {
            axios.get('/api/lands',{
                params:{
                    status_id:status
                }
            })
                .then(response => {
                    this.lands = response.data.data;
                    this.links = response.data.links;
                })
                .catch(error => {
                    console.log(error)
                });
        },
    },
    computed: {
        LoadMore: {
            // getter
            get() {
                return this.lands;
            },
            // setter
            set(lands) {
                for (let i = 0; i < lands.length; i++) {
                    this.lands.push(lands[i]);

                }
            }
        }
    },
    mounted() {
        this.GetLands(1);
        this.GetAll();
    }
}
</script>

<style scoped>

</style>
