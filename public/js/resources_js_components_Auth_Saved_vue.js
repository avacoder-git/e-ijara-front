"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_Auth_Saved_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Saved.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Saved.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Sidebar__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../Sidebar */ "./resources/js/components/Sidebar.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "Dashboard",
  data: function data() {
    return {
      data: null,
      saved: [],
      bg_photo: ['/foto/photo_2022-01-23_11-08-18.jpg', '/foto/photo_2022-01-23_11-10-35.jpg', '/foto/photo_2022-01-23_11-10-39.jpg', '/foto/photo_2022-01-23_11-10-46.jpg', '/foto/photo_2022-01-23_11-10-51.jpg', '/foto/photo_2022-01-23_11-10-56.jpg', '/foto/photo_2022-01-23_11-11-01.jpg', '/foto/photo_2022-01-23_11-11-16.jpg', '/foto/photo_2022-01-23_11-11-22.jpg', '/foto/photo_2022-01-23_11-07-20.jpg', '/foto/photo_2022-01-23_11-07-36.jpg', '/foto/photo_2022-01-23_11-08-40.jpg', '/foto/photo_2022-01-23_11-07-42.jpg', '/foto/photo_2022-01-23_11-07-47.jpg', '/foto/photo_2022-01-23_11-07-53.jpg', '/foto/photo_2022-01-23_11-07-59.jpg', '/foto/photo_2022-01-23_11-08-04.jpg', '/foto/photo_2022-01-23_11-08-09.jpg', '/foto/photo_2022-01-23_11-08-14.jpg', '/foto/photo_2022-01-23_11-08-25.jpg', '/foto/photo_2022-01-23_11-08-30.jpg', '/foto/photo_2022-01-23_11-08-46.jpg', '/foto/photo_2022-01-23_11-08-51.jpg', '/foto/photo_2022-01-23_11-08-56.jpg', '/foto/photo_2022-01-23_11-09-06.jpg', '/foto/photo_2022-01-23_11-09-13.jpg', '/foto/photo_2022-01-23_11-09-19.jpg', '/foto/photo_2022-01-23_11-09-24.jpg', '/foto/photo_2022-01-23_11-09-29.jpg', '/foto/photo_2022-01-23_11-09-33.jpg', '/foto/photo_2022-01-23_11-09-39.jpg', '/foto/photo_2022-01-23_11-09-43.jpg', '/foto/photo_2022-01-23_11-09-48.jpg', '/foto/photo_2022-01-23_11-09-52.jpg', '/foto/photo_2022-01-23_11-10-00.jpg', '/foto/photo_2022-01-23_11-10-07.jpg', '/foto/photo_2022-01-23_11-10-12.jpg', '/foto/photo_2022-01-23_11-10-16.jpg', '/foto/photo_2022-01-23_11-10-21.jpg', '/foto/photo_2022-01-23_11-10-25.jpg', '/foto/photo_2022-01-23_11-10-30.jpg'],
      isLoading: false,
      regions: [],
      districts: [],
      selectedRegion: null,
      selectedDistrict: null,
      auction_lot: null
    };
  },
  components: {
    Sidebar: _Sidebar__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  methods: {
    getRegionById: function getRegionById(id) {
      for (var i = 0; i < this.regions.length; i++) {
        if (this.regions[i].id === id) return this.regions[i];
      }

      return false;
    },
    getDistrictById: function getDistrictById(id) {
      for (var i = 0; i < this.districts.length; i++) {
        if (this.districts[i].id === id) return this.districts[i];
      }

      return false;
    },
    filter: function filter() {
      var _this = this;

      axios.get('/api/saved-lands', {
        params: {
          region_id: this.getRegionById(this.selectedRegion).regioncode,
          district_id: this.getDistrictById(this.selectedDistrict).cad_num,
          lot_number: this.auction_lot
        }
      }).then(function (response) {
        _this.data = response.data;
        console.log(response);
      })["finally"](function () {
        _this.isLoading = false;
      });
    },
    getRegions: function getRegions() {
      var _this2 = this;

      axios.get('/api/json/regions').then(function (response) {
        var _response$data, _this2$selectedRegion, _this2$selectedDistri;

        _this2.regions = (_response$data = response.data) !== null && _response$data !== void 0 ? _response$data : [];

        _this2.regions.push({
          id: 0,
          nameuz: _this2.$t("main.holat.region"),
          regioncode: 0
        });

        _this2.selectedRegion = (_this2$selectedRegion = _this2.selectedRegion) !== null && _this2$selectedRegion !== void 0 ? _this2$selectedRegion : 0;

        _this2.districts.push({
          id: 0,
          nameuz: "Tuman (shaxar)",
          regioncode: 0
        });

        _this2.selectedDistrict = (_this2$selectedDistri = _this2.selectedDistrict) !== null && _this2$selectedDistri !== void 0 ? _this2$selectedDistri : 0;
      });
    },
    getDistricts: function getDistricts(regioncode) {
      var _this3 = this;

      axios.get("/api/json/districts/".concat(regioncode)).then(function (response) {
        _this3.districts = response.data;
      });
    },
    setDistricts: function setDistricts() {
      this.getDistricts(this.getRegionById(this.selectedRegion).regioncode);
    },
    getData: function getData() {
      var _this4 = this;

      var auth = localStorage.getItem('token');
      this.isLoading = true;
      axios.get('/api/saved-lands', {
        headers: {
          "Authorization": "Bearer " + auth
        }
      }).then(function (response) {
        _this4.data = response.data;
        _this4.saved = response.data.data;
      })["finally"](function () {
        _this4.isLoading = false;
      });
    },
    getSavedLandByID: function getSavedLandByID(id) {
      var saved = this.saved;

      for (var i = 0; i < saved.length; i++) {
        if (saved[i].id === id) return saved[i];
      }

      return false;
    },
    saveLand: function saveLand(id) {
      var auth = localStorage.getItem('token');

      if (auth) {
        var saved = this.saved;
        var index = saved.indexOf(this.getSavedLandByID(id));

        if (saved.includes(this.getSavedLandByID(id))) {
          saved.splice(index, 1);
          axios.get("/api/save-land/".concat(id), {
            headers: {
              "Authorization": "Bearer " + auth
            }
          }).then(function (response) {
            if (response) {
              getData();
            }
          });
        } else {
          axios.get("/api/save-land/".concat(id), {
            headers: {
              "Authorization": "Bearer " + auth
            }
          }).then(function (response) {
            if (response) {
              getData();
            }
          });
          saved.push(id);
        }

        this.getData();
      } else {
        $("#login-modal").modal('show');
      }
    }
  },
  mounted: function mounted() {
    var _JSON$parse;

    this.getData();
    this.getRegions();
    this.saved = (_JSON$parse = JSON.parse(localStorage.getItem('savedLands'))) !== null && _JSON$parse !== void 0 ? _JSON$parse : [];
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Sidebar.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Sidebar.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Auth__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../Auth */ "./resources/js/Auth.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "Sidebar",
  data: function data() {
    return {
      username: this.auth.user
    };
  },
  methods: {
    logout: function logout() {
      _Auth__WEBPACK_IMPORTED_MODULE_0__["default"].logout();
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Saved.vue?vue&type=style&index=0&id=78144feb&scoped=true&lang=css&":
/*!*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Saved.vue?vue&type=style&index=0&id=78144feb&scoped=true&lang=css& ***!
  \*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "\n.check-offer[data-v-78144feb] {\n\n    margin-top: 20px;\n    background: #08705F;\n    border-radius: 8px;\n    color: white;\n    border: 1px solid #08705F;\n    width: 310px;\n    text-align: center;\n    padding: 12px;\n    transition: 0.2s;\n    text-decoration: none;\n}\n.check-offer[data-v-78144feb]:hover {\n\n    background: white;\n    color: #08705F;\n}\n.pagination[data-v-78144feb] {\n    gap: 8px;\n    justify-content: center;\n    margin-top: 64px;\n}\n.loading[data-v-78144feb] {\n    position: absolute;\n    top: 0;\n    left: 0;\n    right: 0;\n    bottom: 0;\n    background-color: rgba(0, 0, 0, 0.5);\n    z-index: 1000;\n}\n.pagination .page-item .page-link[data-v-78144feb] {\n    border-radius: 4px;\n    color: #313131;\n\n    font-family: 'Raleway';\n    font-style: normal;\n    font-weight: 500;\n    font-size: 16px;\n    line-height: 24px;\n    cursor: pointer;\n}\n.pagination .page-item .active[data-v-78144feb] {\n    background: rgba(8, 112, 95, 0.1);\n}\n.loading[data-v-78144feb] {\n    position: absolute;\n    top: 0;\n    left: 0;\n    right: 0;\n    bottom: 0;\n    background-color: rgba(0, 0, 0, 0.5);\n    z-index: 1000;\n}\n.select-2[data-v-78144feb] {\n    height: 48px;\n    width: 237px;\n    border-radius: 8px;\n    outline: none;\n    border: 1px solid #08705F;\n    padding: 12px;\n}\n.d-flex[data-v-78144feb] {\n    gap: 24px;\n}\n.filter[data-v-78144feb] {\n    background-color: #08705F;\n    color: white;\n    transition: 0.2s;\n}\n.filter[data-v-78144feb]:hover {\n    color: #08705F;\n    background-color: white;\n    transition: 0.2s;\n}\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Sidebar.vue?vue&type=style&index=0&id=81fbb27e&scoped=true&lang=css&":
/*!**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Sidebar.vue?vue&type=style&index=0&id=81fbb27e&scoped=true&lang=css& ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "\n.icon[data-v-81fbb27e]{\n    filter: brightness(50%);\n}\n\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Saved.vue?vue&type=style&index=0&id=78144feb&scoped=true&lang=css&":
/*!*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Saved.vue?vue&type=style&index=0&id=78144feb&scoped=true&lang=css& ***!
  \*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Saved_vue_vue_type_style_index_0_id_78144feb_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Saved.vue?vue&type=style&index=0&id=78144feb&scoped=true&lang=css& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Saved.vue?vue&type=style&index=0&id=78144feb&scoped=true&lang=css&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Saved_vue_vue_type_style_index_0_id_78144feb_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Saved_vue_vue_type_style_index_0_id_78144feb_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});

/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Sidebar.vue?vue&type=style&index=0&id=81fbb27e&scoped=true&lang=css&":
/*!**************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Sidebar.vue?vue&type=style&index=0&id=81fbb27e&scoped=true&lang=css& ***!
  \**************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_style_index_0_id_81fbb27e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Sidebar.vue?vue&type=style&index=0&id=81fbb27e&scoped=true&lang=css& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Sidebar.vue?vue&type=style&index=0&id=81fbb27e&scoped=true&lang=css&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_style_index_0_id_81fbb27e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_style_index_0_id_81fbb27e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});

/***/ }),

/***/ "./resources/js/components/Auth/Saved.vue":
/*!************************************************!*\
  !*** ./resources/js/components/Auth/Saved.vue ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Saved_vue_vue_type_template_id_78144feb_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Saved.vue?vue&type=template&id=78144feb&scoped=true& */ "./resources/js/components/Auth/Saved.vue?vue&type=template&id=78144feb&scoped=true&");
/* harmony import */ var _Saved_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Saved.vue?vue&type=script&lang=js& */ "./resources/js/components/Auth/Saved.vue?vue&type=script&lang=js&");
/* harmony import */ var _Saved_vue_vue_type_style_index_0_id_78144feb_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Saved.vue?vue&type=style&index=0&id=78144feb&scoped=true&lang=css& */ "./resources/js/components/Auth/Saved.vue?vue&type=style&index=0&id=78144feb&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _Saved_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Saved_vue_vue_type_template_id_78144feb_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _Saved_vue_vue_type_template_id_78144feb_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "78144feb",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Auth/Saved.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/Sidebar.vue":
/*!*********************************************!*\
  !*** ./resources/js/components/Sidebar.vue ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Sidebar_vue_vue_type_template_id_81fbb27e_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Sidebar.vue?vue&type=template&id=81fbb27e&scoped=true& */ "./resources/js/components/Sidebar.vue?vue&type=template&id=81fbb27e&scoped=true&");
/* harmony import */ var _Sidebar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Sidebar.vue?vue&type=script&lang=js& */ "./resources/js/components/Sidebar.vue?vue&type=script&lang=js&");
/* harmony import */ var _Sidebar_vue_vue_type_style_index_0_id_81fbb27e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Sidebar.vue?vue&type=style&index=0&id=81fbb27e&scoped=true&lang=css& */ "./resources/js/components/Sidebar.vue?vue&type=style&index=0&id=81fbb27e&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _Sidebar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Sidebar_vue_vue_type_template_id_81fbb27e_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _Sidebar_vue_vue_type_template_id_81fbb27e_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "81fbb27e",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Sidebar.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/Auth/Saved.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./resources/js/components/Auth/Saved.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Saved_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Saved.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Saved.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Saved_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/Sidebar.vue?vue&type=script&lang=js&":
/*!**********************************************************************!*\
  !*** ./resources/js/components/Sidebar.vue?vue&type=script&lang=js& ***!
  \**********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Sidebar.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Sidebar.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/Auth/Saved.vue?vue&type=style&index=0&id=78144feb&scoped=true&lang=css&":
/*!*********************************************************************************************************!*\
  !*** ./resources/js/components/Auth/Saved.vue?vue&type=style&index=0&id=78144feb&scoped=true&lang=css& ***!
  \*********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Saved_vue_vue_type_style_index_0_id_78144feb_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/style-loader/dist/cjs.js!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Saved.vue?vue&type=style&index=0&id=78144feb&scoped=true&lang=css& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Saved.vue?vue&type=style&index=0&id=78144feb&scoped=true&lang=css&");


/***/ }),

/***/ "./resources/js/components/Sidebar.vue?vue&type=style&index=0&id=81fbb27e&scoped=true&lang=css&":
/*!******************************************************************************************************!*\
  !*** ./resources/js/components/Sidebar.vue?vue&type=style&index=0&id=81fbb27e&scoped=true&lang=css& ***!
  \******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_style_index_0_id_81fbb27e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader/dist/cjs.js!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Sidebar.vue?vue&type=style&index=0&id=81fbb27e&scoped=true&lang=css& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Sidebar.vue?vue&type=style&index=0&id=81fbb27e&scoped=true&lang=css&");


/***/ }),

/***/ "./resources/js/components/Auth/Saved.vue?vue&type=template&id=78144feb&scoped=true&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/components/Auth/Saved.vue?vue&type=template&id=78144feb&scoped=true& ***!
  \*******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Saved_vue_vue_type_template_id_78144feb_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Saved_vue_vue_type_template_id_78144feb_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Saved_vue_vue_type_template_id_78144feb_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Saved.vue?vue&type=template&id=78144feb&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Saved.vue?vue&type=template&id=78144feb&scoped=true&");


/***/ }),

/***/ "./resources/js/components/Sidebar.vue?vue&type=template&id=81fbb27e&scoped=true&":
/*!****************************************************************************************!*\
  !*** ./resources/js/components/Sidebar.vue?vue&type=template&id=81fbb27e&scoped=true& ***!
  \****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_template_id_81fbb27e_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_template_id_81fbb27e_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_template_id_81fbb27e_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Sidebar.vue?vue&type=template&id=81fbb27e&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Sidebar.vue?vue&type=template&id=81fbb27e&scoped=true&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Saved.vue?vue&type=template&id=78144feb&scoped=true&":
/*!**********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Saved.vue?vue&type=template&id=78144feb&scoped=true& ***!
  \**********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "bg-gray-100", staticStyle: { "padding-top": "100px" } },
    [
      _c(
        "div",
        { staticClass: "d-flex dashboard" },
        [
          _c("Sidebar"),
          _vm._v(" "),
          _c("div", { staticClass: "card" }, [
            _c("h1", { staticClass: "text-center" }, [
              _vm._v(_vm._s(_vm.$t("dashboard.saved"))),
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "d-flex  my-4" }, [
              _c(
                "select",
                {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.selectedRegion,
                      expression: "selectedRegion",
                    },
                  ],
                  staticClass: "select-2",
                  attrs: {
                    reduce: function (option) {
                      return option.regioncode
                    },
                    label: "nameuz",
                  },
                  on: {
                    change: [
                      function ($event) {
                        var $$selectedVal = Array.prototype.filter
                          .call($event.target.options, function (o) {
                            return o.selected
                          })
                          .map(function (o) {
                            var val = "_value" in o ? o._value : o.value
                            return val
                          })
                        _vm.selectedRegion = $event.target.multiple
                          ? $$selectedVal
                          : $$selectedVal[0]
                      },
                      _vm.setDistricts,
                    ],
                  },
                },
                _vm._l(_vm.regions, function (region) {
                  return _vm.regions
                    ? _c(
                        "option",
                        {
                          attrs: { value: "" },
                          domProps: { value: region.id },
                        },
                        [
                          _vm._v(
                            _vm._s(region.nameuz) + "\n                    "
                          ),
                        ]
                      )
                    : _vm._e()
                }),
                0
              ),
              _vm._v(" "),
              _c(
                "select",
                {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.selectedDistrict,
                      expression: "selectedDistrict",
                    },
                  ],
                  staticClass: "select-2",
                  attrs: {
                    reduce: function (option) {
                      return option.id
                    },
                    label: "nameuz",
                    options: _vm.districts,
                  },
                  on: {
                    change: function ($event) {
                      var $$selectedVal = Array.prototype.filter
                        .call($event.target.options, function (o) {
                          return o.selected
                        })
                        .map(function (o) {
                          var val = "_value" in o ? o._value : o.value
                          return val
                        })
                      _vm.selectedDistrict = $event.target.multiple
                        ? $$selectedVal
                        : $$selectedVal[0]
                    },
                  },
                },
                _vm._l(_vm.districts, function (district) {
                  return _vm.districts
                    ? _c(
                        "option",
                        {
                          attrs: { value: "" },
                          domProps: { value: district.id },
                        },
                        [
                          _vm._v(
                            "\n                        " +
                              _vm._s(district.nameuz) +
                              "\n                    "
                          ),
                        ]
                      )
                    : _vm._e()
                }),
                0
              ),
              _vm._v(" "),
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.auction_lot,
                    expression: "auction_lot",
                  },
                ],
                staticClass: "select-2",
                attrs: { type: "text", placeholder: "Auksion lot raqami" },
                domProps: { value: _vm.auction_lot },
                on: {
                  input: function ($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.auction_lot = $event.target.value
                  },
                },
              }),
              _vm._v(" "),
              _c(
                "button",
                {
                  staticClass: "select-2 filter",
                  attrs: { type: "button" },
                  on: { click: _vm.filter },
                },
                [_vm._v("Izlash")]
              ),
            ]),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "container-fluid", attrs: { id: "saved" } },
              [
                _vm.isLoading
                  ? _c("div", { staticClass: "loading" })
                  : _vm._e(),
                _vm._v(" "),
                _vm.data
                  ? _c(
                      "div",
                      { staticClass: "row" },
                      [
                        _vm._l(_vm.data.data, function (item) {
                          return [
                            item.id
                              ? _c("div", { staticClass: "col-lg-4" }, [
                                  _c(
                                    "div",
                                    {
                                      staticClass:
                                        "rectangle position-relative",
                                    },
                                    [
                                      _c(
                                        "div",
                                        { staticClass: "rectangle-img" },
                                        [
                                          _c("img", {
                                            attrs: {
                                              src: _vm.bg_photo[
                                                Math.floor(
                                                  Math.random() *
                                                    _vm.bg_photo.length
                                                )
                                              ],
                                              alt: "",
                                            },
                                          }),
                                        ]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "div",
                                        {
                                          staticClass:
                                            "d-flex justify-content-between",
                                        },
                                        [
                                          _c(
                                            "div",
                                            { staticClass: "rectangle-lot" },
                                            [_vm._v(_vm._s(item.updated_at))]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "div",
                                            { staticClass: "rectangle-lot" },
                                            [_vm._v(_vm._s(item.lot_number))]
                                          ),
                                        ]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "div",
                                        {
                                          staticClass: "rectangle-name mb-auto",
                                        },
                                        [
                                          _vm._v(
                                            "\n                                    " +
                                              _vm._s(item.address) +
                                              "\n                                "
                                          ),
                                        ]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "div",
                                        { staticClass: "rectangle-footer" },
                                        [
                                          _c(
                                            "div",
                                            { staticClass: "rectangle-ga" },
                                            [_vm._v(_vm._s(item.area) + " Ga")]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "button",
                                            {
                                              staticClass: "rectangle-save",
                                              class: _vm.saved.includes(item.id)
                                                ? "rectangle-save-2"
                                                : "rectangle-save-1",
                                              on: {
                                                click: function ($event) {
                                                  $event.preventDefault()
                                                  return _vm.saveLand(item.id)
                                                },
                                              },
                                            },
                                            [
                                              _c("img", {
                                                attrs: {
                                                  src: "/image/Bookmark.svg",
                                                  alt: "",
                                                },
                                              }),
                                            ]
                                          ),
                                        ]
                                      ),
                                    ]
                                  ),
                                ])
                              : _vm._e(),
                          ]
                        }),
                      ],
                      2
                    )
                  : _vm._e(),
                _vm._v(" "),
                _vm.data
                  ? _c(
                      "nav",
                      { attrs: { "aria-label": "Page navigation example" } },
                      [
                        _c(
                          "ul",
                          { staticClass: "pagination" },
                          _vm._l(_vm.data.meta.links, function (item, index) {
                            return _c("li", { staticClass: "page-item" }, [
                              _c(
                                "a",
                                {
                                  staticClass: "page-link",
                                  class: item.active ? "active" : "",
                                  on: {
                                    click: function ($event) {
                                      $event.preventDefault()
                                      return _vm.getData(item.label)
                                    },
                                  },
                                },
                                [
                                  _vm._v(
                                    "\n                                " +
                                      _vm._s(
                                        index === 0
                                          ? "<"
                                          : index + 1 ===
                                            _vm.data.meta.links.length
                                          ? ">"
                                          : item.label
                                      )
                                  ),
                                ]
                              ),
                            ])
                          }),
                          0
                        ),
                      ]
                    )
                  : _vm._e(),
              ]
            ),
          ]),
        ],
        1
      ),
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Sidebar.vue?vue&type=template&id=81fbb27e&scoped=true&":
/*!*******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Sidebar.vue?vue&type=template&id=81fbb27e&scoped=true& ***!
  \*******************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("ul", { staticClass: "sidebar" }, [
      _c(
        "li",
        [
          _c(
            "router-link",
            {
              staticClass: "sidebar-link",
              attrs: { to: { name: "dashboard.application" } },
            },
            [
              _c("img", { attrs: { src: "/image/Vector.svg", alt: "" } }),
              _vm._v(
                "\n                " +
                  _vm._s(_vm.$t("dashboard.sidebar[0]")) +
                  "\n                "
              ),
              _c("span"),
            ]
          ),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "li",
        [
          _c(
            "router-link",
            {
              staticClass: "sidebar-link",
              attrs: { to: { name: "dashboard.application.create" } },
            },
            [
              _c("img", { attrs: { src: "/image/Vector.svg", alt: "" } }),
              _vm._v(
                "\n                " +
                  _vm._s(_vm.$t("dashboard.sidebar[1]")) +
                  "\n                "
              ),
              _c("span"),
            ]
          ),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "li",
        [
          _c(
            "router-link",
            {
              staticClass: "sidebar-link",
              attrs: { to: { name: "dashboard.info" } },
            },
            [
              _c("img", { attrs: { src: "/image/Profile.svg", alt: "" } }),
              _vm._v(
                "\n                " +
                  _vm._s(_vm.$t("dashboard.sidebar[2]")) +
                  "\n                "
              ),
              _c("span"),
            ]
          ),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "li",
        [
          _c(
            "router-link",
            {
              staticClass: "sidebar-link",
              attrs: { to: { name: "dashboard.application.saved" } },
            },
            [
              _c("img", {
                staticClass: "icon",
                attrs: { src: "/image/Bookmark.svg", alt: "" },
              }),
              _vm._v(
                "\n                " +
                  _vm._s(_vm.$t("dashboard.sidebar[3]")) +
                  "\n                "
              ),
              _c("span"),
            ]
          ),
        ],
        1
      ),
      _vm._v(" "),
      _c("li", [
        _c(
          "a",
          {
            staticClass: "sidebar-link leave",
            attrs: { href: "" },
            on: { click: _vm.logout },
          },
          [
            _c("img", {
              attrs: { src: "/image/Login.svg", height: "100%", alt: "" },
            }),
            _vm._v(
              "\n                " +
                _vm._s(_vm.$t("dashboard.sidebar[4]")) +
                "\n                "
            ),
            _c("span"),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);