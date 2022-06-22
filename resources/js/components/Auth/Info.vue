<template>
    <div class="bg-gray-100" style="padding-top: 100px">

        <div class="d-flex dashboard">
            <Sidebar></Sidebar>

            <div class="card">

                <h1>{{ $t("dashboard.info.title") }}</h1>


                <div class="form-row">
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleCity" class="">{{ $t("dashboard.info.firstname") }}</label>
                            <input type="text" v-model="firstname" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleState" class="">{{ $t("dashboard.info.lastname") }}</label>
                            <input type="text" v-model="lastname" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleZip" class="">{{ $t("dashboard.info.thirdname") }}</label>
                            <input type="text" value="" v-model="midname" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleCity" class="">{{ $t("dashboard.info.passport") }}</label>
                            <input type="text" value="" v-model="passport" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleState">{{ $t("dashboard.info.phone") }}</label>
                            <input type="text" class="form-control" v-model="phone" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleZip">{{ $t("dashboard.info.address") }}</label>
                            <input type="text" v-model="address" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleCity">{{ $t("dashboard.info.login") }}</label>
                            <input id="exampleCity" v-model="username" type="text" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleState" class="">{{ $t("dashboard.info.email") }}</label>
                            <input id="exampleState" v-model="email" type="text" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleZip" class="">{{ $t("dashboard.info.fuqaro") }}</label>
                            <input id="exampleZip" v-model="user_type " type="text"
                                   class="form-control" disabled>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
</template>

<script>

import Sidebar from "../Sidebar";


export default {
    name: "Dashboard",
    components: {Sidebar},
    data() {
        return {
            user: this.auth.user,
            firstname: this.auth.user.firstname,
            lastname: this.auth.user.lastname,
            midname: this.auth.user.midname,
            passport: this.auth.user.passport,
            phone: this.auth.user.phone,
            address: this.auth.user.address,
            username: this.auth.user.username,
            email: this.auth.user.email,

        }
    },
    computed: {
        user_type() {
            return this.auth.user.user_type === "Y" ? 'Yuridik shaxs' : 'Jismoniy shaxs'
        }

    }

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


</style>
