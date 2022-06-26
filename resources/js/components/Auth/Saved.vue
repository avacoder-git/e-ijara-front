<template>
    <div class="bg-gray-100" style="padding-top: 100px">

        <div class="d-flex dashboard">
            <Sidebar></Sidebar>

            <div class="card">

                <h1 class="text-center">{{ $t("dashboard.saved") }}</h1>

                <div class="d-flex  my-4">
                    <select
                        @change="setDistricts"
                        v-model="selectedRegion"
                        :reduce="(option) => option.regioncode"
                        class="select-2"
                        label="nameuz">
                        <option value="" v-if="regions" v-for="region in regions" :value="region.id">{{
                                region.nameuz
                            }}
                        </option>
                    </select>
                    <select
                        v-model="selectedDistrict"
                        class="select-2"
                        :reduce="(option) => option.id"
                        label="nameuz"
                        :options="districts">
                        <option value="" v-if="districts" v-for="district in districts" :value="district.id">
                            {{ district.nameuz }}
                        </option>

                    </select>

                    <input type="text" placeholder="Auksion lot raqami" class="select-2" v-model="auction_lot">
                    <button type="button" @click="filter" class="select-2 filter">Izlash</button>

                </div>

                <div class="container-fluid" id="saved">
                    <div class="loading" v-if="isLoading"></div>

                    <div class="row" v-if="data">

                        <template v-for="item in data.data">
                            <div class="col-lg-4" v-if="item.id">
                                <div class="rectangle position-relative">
                                    <div class="rectangle-img"><img
                                        :src="bg_photo[Math.floor(Math.random()*bg_photo.length)]"
                                        alt=""></div>
                                    <div class="d-flex justify-content-between">
                                        <div class="rectangle-lot">{{ item.updated_at }}</div>
                                        <div class="rectangle-lot">{{ item.lot_number }}</div>
                                    </div>
                                    <div class="rectangle-name mb-auto">
                                        {{ item.address  }}
                                    </div>

                                    <div class="rectangle-footer">
                                        <div class="rectangle-ga">{{ item.area }} Ga</div>
                                        <button class="rectangle-save"
                                                :class="saved.includes(item.id) ? 'rectangle-save-2': 'rectangle-save-1' "
                                                @click.prevent="saveLand(item.id)">
                                            <img src="/image/Bookmark.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                    <nav aria-label="Page navigation example" v-if="data">
                        <ul class="pagination">
                            <li class="page-item" v-for="(item, index) in data.meta.links">
                                <a class="page-link" :class="item.active? 'active' : ''"
                                   @click.prevent="getData(item.label)">
                                    {{
                                        index === 0 ? "<" : index + 1 === data.meta.links.length ? ">" : item.label
                                    }}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


    </div>
</template>

<script>

import Sidebar from "../Sidebar";


export default {
    name: "Dashboard",
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
            ],
            isLoading: false,
            regions: [],
            districts: [],
            selectedRegion: null,
            selectedDistrict: null,
            auction_lot: null,
        }
    },
    components: {
        Sidebar
    },


    methods: {
        getRegionById(id) {
            for (let i = 0; i < this.regions.length; i++) {
                if (this.regions[i].id === id)
                    return this.regions[i];

            }
            return false
        },
        getDistrictById(id) {
            for (let i = 0; i < this.districts.length; i++) {
                if (this.districts[i].id === id)
                    return this.districts[i];
            }
            return false

        },
        filter() {
            axios.get('/api/saved-lands', {
                params: {
                    region_id: this.getRegionById(this.selectedRegion).regioncode,
                    district_id: this.getDistrictById(this.selectedDistrict).cad_num,
                    lot_number: this.auction_lot,
                }
            })
                .then(response => {
                    this.data = response.data
                    console.log(response);

                })
                .finally(() => {
                    this.isLoading = false;
                });
        },
        getRegions() {
            axios.get('/api/json/regions')
                .then(response => {
                    this.regions = response.data ?? []
                    this.regions.push({
                        id: 0,
                        nameuz: this.$t("main.holat.region"),
                        regioncode: 0

                    })
                    this.selectedRegion = this.selectedRegion ?? 0
                    this.districts.push({
                        id: 0,
                        nameuz: "Tuman (shaxar)",
                        regioncode: 0
                    })
                    this.selectedDistrict = this.selectedDistrict ?? 0

                })
        },


        getDistricts(regioncode) {
            axios.get(`/api/json/districts/${regioncode}`)
                .then(response => {
                    this.districts = response.data
                })
        },
        setDistricts() {

            this.getDistricts(this.getRegionById(this.selectedRegion).regioncode)

        },

        getData() {
            var auth = localStorage.getItem('token')
            this.isLoading = true;

            axios.get('/api/saved-lands', {
                headers: {
                    "Authorization": "Bearer " + auth
                }
            })
                .then(response => {
                    this.data = response.data
                    this.saved = response.data.data
                })
                .finally(() => {
                    this.isLoading = false;
                });
        },
        getSavedLandByID(id)
        {
            var saved = this.saved
            for (let i = 0; i < saved.length; i++)
            {
                if (saved[i].id === id)
                    return saved[i]
            }

            return  false

        },
        saveLand(id) {
            var auth = localStorage.getItem('token')
            if (auth) {
                var saved = this.saved
                var index = saved.indexOf(this.getSavedLandByID(id))
                if (saved.includes(this.getSavedLandByID(id)))
                {
                    saved.splice(index, 1)
                    axios.get(`/api/save-land/${id}`, {
                        headers: {
                            "Authorization": "Bearer " + auth
                        }
                    })
                        .then(response => {
                            if (response)
                            {
                                getData()
                            }
                        })
                }
                else {
                    axios.get(`/api/save-land/${id}`, {
                        headers: {
                            "Authorization": "Bearer " + auth
                        }
                    })
                        .then(response => {
                            if (response)
                            {
                                getData()
                            }
                        })
                    saved.push(id)
                }
                this.getData()
            } else {
                $("#login-modal").modal('show')
            }

        }

    },

    mounted() {
        this.getData()
        this.getRegions()

        this.saved = JSON.parse(localStorage.getItem('savedLands')) ?? []

    },


}
</script>

<style scoped>


.check-offer {

    margin-top: 20px;
    background: #08705F;
    border-radius: 8px;
    color: white;
    border: 1px solid #08705F;
    width: 310px;
    text-align: center;
    padding: 12px;
    transition: 0.2s;
    text-decoration: none;

}

.check-offer:hover {

    background: white;
    color: #08705F;
}


.pagination {
    gap: 8px;
    justify-content: center;
    margin-top: 64px;

}
.loading {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
}
.pagination .page-item .page-link {
    border-radius: 4px;
    color: #313131;

    font-family: 'Raleway';
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
    cursor: pointer;
}

.pagination .page-item .active {
    background: rgba(8, 112, 95, 0.1);
}

.loading {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
}


.select-2 {
    height: 48px;
    width: 237px;
    border-radius: 8px;
    outline: none;
    border: 1px solid #08705F;
    padding: 12px;
}

.d-flex {
    gap: 24px;
}

.filter {
    background-color: #08705F;
    color: white;
    transition: 0.2s;
}

.filter:hover {
    color: #08705F;
    background-color: white;
    transition: 0.2s;
}
</style>
