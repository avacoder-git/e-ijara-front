<template>
    <div class="bg-gray-100" style="padding-top: 100px">

        <div class="d-flex dashboard">
            <Sidebar ref="sidebar"></Sidebar>

            <div class="card">

                <h1  class="text-center">{{ $t("dashboard.my.applications") }}</h1>

                <table class="table border-0">
                    <thead>
                    <tr>
                        <th><span>ID</span></th>
                        <th><span>{{ $t("dashboard.my.region") }}</span></th>
                        <th><span>{{ $t("dashboard.my.district") }}</span></th>
                        <th><span>{{ $t("dashboard.my.purpose") }}</span></th>
                        <th><span>{{ $t("dashboard.my.expire") }}</span></th>
                        <th><span>{{ $t("dashboard.my.time") }}</span></th>
                        <th><span>{{ $t("dashboard.my.status") }}</span></th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr v-if="applications" v-for="application in applications">
                        <td><span>{{ application.id }}</span></td>
                        <td><span>{{ application.region.nameru }}</span></td>
                        <td><span>{{ application.district.nameru }}</span></td>
                        <td><span>{{ application.land_purpose.name_lat }}</span></td>
                        <td><span>{{ application.period }} {{ $t("dashboard.my.yil") }} </span></td>
                        <td><span>{{ application.updated_at }}</span></td>
                        <td><span>{{ application.status.name }}</span></td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>




    </div>
</template>

<script>

import Sidebar from "../Sidebar";


export default {
    name: "Dashboard",
    components: {Sidebar},

    data(){
        return {
            applications: null
        }
    },

    methods:{

        getApplications(){
            axios('/api/applications',{
                headers: {
                    Authorization: 'Bearer ' + window.localStorage.getItem('token'),
                }
            }).then(response =>{
                this.applications = response.data.data
            })
        }

    },


    mounted() {
        this.getApplications()
    }
}
</script>

<style scoped>

</style>
