<template>
    <div class="bg-gray-100 pt-1 pb-5">
        <div class="container-fluid section-2">
            <div class="row">
                <div class="col-lg-12 mt-4">
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
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" v-if="data" id="home" role="tabpanel"
                             aria-labelledby="home-tab">
                            <div class="loading" v-if="isLoading"></div>
                            <div class="row">
                                <template v-for="item in data.data">
                                    <div class="col-lg-3">
                                        <div class="rectangle position-relative">
                                            <div class="rectangle-img"><img
                                                :src="bg_photo[Math.floor(Math.random()*bg_photo.length)]" alt=""></div>
                                            <div class="d-flex justify-content-between">
                                                <div class="rectangle-lot">{{ item.updated_at }}</div>
                                                <div class="rectangle-lot">{{ item.regnum }}</div>
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
                                        </div>
                                    </div>
                                </template>
                            </div>
                            <nav aria-label="Page navigation example">
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
        </div>

    </div>
</template>

<script>


export default {
    name: "AllLands",

    data() {
        return {
            data: null,
            saved: [],
            links: null,
            meta: null,
            isLoading: false,

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
        getData(page = 1) {
            window.scrollTo(0, 0);

            this.isLoading = true;

            axios.get(`/api/save-land/${id}`, {
                headers: {
                    "Authorization": "Bearer " + auth
                }
            })
                .then(response => {
                    if (response)
                        console.log(response);
                })
                .finally(() => {
                    this.isLoading = false;
                });
        },

        saveLand(id) {
            var auth = localStorage.getItem('authcheck')

            if (auth) {
                var saved = this.saved
                var index = saved.indexOf(id)
                if (saved.includes(id))
                    saved.splice(index, 1)
                else {
                    axios.get(`/api/save-land/${auth}/${id}`)
                        .then(response => {
                            if (response)
                                console.log(response);
                        })
                    saved.push(id)
                }
                this.saved = saved


            } else {
                $("#login-modal").modal('show')
            }

        }


    },

    mounted() {
        this.getData()

    },


}
</script>

<style scoped>


.pagination {
    gap: 8px;
    justify-content: center;
    margin-top: 64px;

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

</style>
