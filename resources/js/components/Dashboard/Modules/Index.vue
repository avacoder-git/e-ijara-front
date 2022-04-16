<template>
  <div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-5 my-3">
          <div class="form-group form-check">
            <input
              type="checkbox"
              v-model="agree"
              class="form-check-input"
              id="agree"
            />
            <label class="form-check-label" for="agree"
              >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, eligendi?</label
            >
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
           <div class="col-2 my-3">
          <router-link :to="{name: 'user.region'}" :class="!agree? 'disabled':''" :is="!agree ? 'span' : 'router-link'" class="btn w-100 btn-success shadow">
            Ariza topshirish
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Index",

  data() {
    return {
        agree: false
    };
  },


  updated()
  {
     this.$parent.agree = this.agree
  }
};
</script>

<style>
</style>