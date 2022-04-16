<template>
  <div
    class="
      app-container app-theme-white
      body-tabs-shadow
      fixed-sidebar fixed-header
    "
  >
    <navbar ref="navbar"></navbar>
    <div class="app-main">
      <Sidebar></Sidebar>

      <div class="app-main__outer">
        <div class="app-main__inner">
          <router-view></router-view>   
        </div>
      </div>
    </div>

    <!-- <router-view></router-view> -->
  </div>
</template>
<script>
import Sidebar from "./Sidebar.vue";
import Navbar from "./Navbar.vue";

export default {
  name: "Index",

  components: { Sidebar, Navbar },

  data(){
    return{
      user: null,
      agree: false
    }
  },

  mounted(){
    this.getMe()
  },
  methods: {
    
    getMe(){
      axios.get('/user/me')
      .then(result => {
       this.user = result.data
      })
      
    }

  }


};
</script>

<style>
</style>