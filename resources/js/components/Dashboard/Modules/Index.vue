<template>
  <div>
      
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