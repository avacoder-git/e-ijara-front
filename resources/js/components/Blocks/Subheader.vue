<template>
    <div id="sub-header">
        <div class="container">
            <div class="row">
                <div class="left-info">
                    <a href="/"> <img class="logo-img hidden-sm"
                                      src="/Front/assets/images/logo-color.svg"> </a>
                    <a href="/"> <img class="logo-img visible-sm"
                                      src="/Front/assets/images/logo-menu.svg"> </a>
                </div>
                <div class="right-info mg-t-45">
                    <ul>
                        <li><a href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-main">Таклиф
                            ҳолатини текшириш</a></li>
                        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="loginmodal-container">
                                    <h5>Таклиф ҳолатини текшириш</h5>
                                    <div>
                                        <input type="text" v-model="offer_id" placeholder="Ариза рақами">
<!--                                        <input type="text" name="user" placeholder="Ариза махсус коди">-->
                                        <input type="submit" @click="checkOffer()" class="login loginmodal-submit"
                                               value="Текшириш">
                                        <div v-show="offer.status" class="alert alert-info">
                                            <p  v-html="offer.status"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <li v-if="!this.user"><a href="/login" class="btn btn-main">Тизимга кириш</a></li>
                        <li v-else><a href="#" class="btn btn-main">{{ this.user.fullname }}</a></li>
                        <li v-if="this.user"><a @click="logout" class="btn btn-main">Чиқиш</a></li>
                        <li><a href="javascript:void(0)" class="side-menu-button visible-sm visible-xs "><i
                            class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Subheader",
    data() {
        return {
            user: {},
            offer_id:'',
            offer: {
                status:null
            },
        }
    },
    methods: {
        currentUser() {
            axios.get('/api/me')
                .then(response => {
                    this.user = response.data.user;
                })
                .catch(error => {
                    console.log(error);
                })
        },
        checkOffer(){
          axios.get('/api/land_offers/'+ this.offer_id)
            .then(response=>{
                this.offer = response.data;
            })
            .catch(error=>{
                console.log(error)
            })
        },
        logout() {
            axios.post('/logout')
                .then(() => location.href = '/')
        }
    },
    mounted() {
        this.currentUser();
    }
}
</script>

<style scoped>

</style>
