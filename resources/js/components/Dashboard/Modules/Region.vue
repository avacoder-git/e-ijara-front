<template>
  <div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-4">
          <select
            class="mb-2 form-control"
            v-model="selectedRegion"
            required
            @change="changeRegion"
          >
            <option selected>Tanlang</option>
            <template v-if="regions">
              <option v-for="region in regions" v-bind:value="region">
                {{ region.nameuz }}
              </option>
            </template>
          </select>
        </div>
        <div class="col-4">
          <select class="mb-2 form-control" v-model="selectedDistrict">
            <option selected>Tanlang</option>
            <template v-if="selectedRegion">
              <option v-for="district in selectedRegion.districts">
                {{ district.nameuz }}
              </option>
            </template>
          </select>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Region",

  data() {
    return {
      regions: null,
      district: null,
      selectedRegion: null,
      selectedDistrict: null,
    };
  },

  mounted() {
    this.getRegions();
  },

  methods: {
    getRegions() {
      axios.get("/get/regions").then((result) => {
        this.regions = result.data.data;
      });
    },

    changeRegion() {
      this.district = this.selectedRegion.district;
    },
  },

  updated() {},
};
</script>

<style>
</style>