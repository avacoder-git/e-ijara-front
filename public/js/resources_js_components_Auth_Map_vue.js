"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_Auth_Map_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Map.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Map.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Sidebar__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../Sidebar */ "./resources/js/components/Sidebar.vue");
/* harmony import */ var vue_select_dist_vue_select_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vue-select/dist/vue-select.css */ "./node_modules/vue-select/dist/vue-select.css");
/* harmony import */ var leaflet__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! leaflet */ "./node_modules/leaflet/dist/leaflet-src.js");
/* harmony import */ var leaflet__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(leaflet__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var vue2_leaflet__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! vue2-leaflet */ "./node_modules/vue2-leaflet/dist/components/LMap.js");
/* harmony import */ var vue2_leaflet__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! vue2-leaflet */ "./node_modules/vue2-leaflet/dist/components/LTileLayer.js");
/* harmony import */ var vue2_leaflet__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! vue2-leaflet */ "./node_modules/vue2-leaflet/dist/components/LMarker.js");
/* harmony import */ var vue2_leaflet__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! vue2-leaflet */ "./node_modules/vue2-leaflet/dist/components/LControlZoom.js");
/* harmony import */ var vue2_leaflet__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! vue2-leaflet */ "./node_modules/vue2-leaflet/dist/components/LGeoJson.js");
/* harmony import */ var vue2_leaflet__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! vue2-leaflet */ "./node_modules/vue2-leaflet/dist/components/LPopup.js");
/* harmony import */ var vue2_leaflet__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! vue2-leaflet */ "./node_modules/vue2-leaflet/dist/components/LIcon.js");
/* harmony import */ var _public_assets_js_leaflet_geojson_vt__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../public/assets/js/leaflet-geojson-vt */ "./public/assets/js/leaflet-geojson-vt.js");
/* harmony import */ var _public_assets_js_snoopy__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../public/assets/js/snoopy */ "./public/assets/js/snoopy.js");
/* harmony import */ var _public_image_marker_png__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../public/image/marker.png */ "./public/image/marker.png");
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







delete leaflet__WEBPACK_IMPORTED_MODULE_2__.Icon.Default.prototype._getIconUrl;

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "Map",
  data: function data() {
    return {
      map: null,
      selectedLands: [],
      selectedLandAreas: 0,
      regions: [],
      districts: [],
      lands: [],
      zoom: 6,
      center: [41.66655, 66.3235],
      selectedLand: null,
      url: "http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}",
      maxZoom: 20,
      subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
      attribution: '<a target="_blank" href="http://www.agro.uz"> www.agro.uz &copy; AgroDigital</a>',
      selectedRegion: null,
      selectedDistrict: null,
      geojson1: null,
      geojson2: null,
      options: {
        zoomControl: false
      },
      layerGroup: new (leaflet__WEBPACK_IMPORTED_MODULE_2___default().LayerGroup)(),
      currentLatLng: [0, 0],
      customIcon: _public_image_marker_png__WEBPACK_IMPORTED_MODULE_5__["default"],
      layer: null,
      geojsonStyle: {
        fillColor: "#0090ff",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.7
      }
    };
  },
  components: {
    LMap: vue2_leaflet__WEBPACK_IMPORTED_MODULE_6__["default"],
    LTileLayer: vue2_leaflet__WEBPACK_IMPORTED_MODULE_7__["default"],
    LMarker: vue2_leaflet__WEBPACK_IMPORTED_MODULE_8__["default"],
    LControlZoom: vue2_leaflet__WEBPACK_IMPORTED_MODULE_9__["default"],
    LGeoJson: vue2_leaflet__WEBPACK_IMPORTED_MODULE_10__["default"],
    Sidebar: _Sidebar__WEBPACK_IMPORTED_MODULE_0__["default"],
    LPopup: vue2_leaflet__WEBPACK_IMPORTED_MODULE_11__["default"],
    LIcon: vue2_leaflet__WEBPACK_IMPORTED_MODULE_12__["default"]
  },
  methods: {
    getRegions: function getRegions() {
      var _this = this;

      axios.get('/api/json/regions').then(function (response) {
        var _response$data, _this$selectedRegion, _this$selectedDistric;

        _this.regions = (_response$data = response.data) !== null && _response$data !== void 0 ? _response$data : [];

        _this.regions.push({
          id: 0,
          nameuz: _this.$t("main.holat.region"),
          regioncode: 0
        });

        _this.selectedRegion = (_this$selectedRegion = _this.selectedRegion) !== null && _this$selectedRegion !== void 0 ? _this$selectedRegion : 0;

        _this.districts.push({
          id: 0,
          nameuz: "Tuman (shaxar)",
          regioncode: 0
        });

        _this.selectedDistrict = (_this$selectedDistric = _this.selectedDistrict) !== null && _this$selectedDistric !== void 0 ? _this$selectedDistric : 0;
      });
    },
    getDistricts: function getDistricts(regioncode) {
      var _this2 = this;

      axios.get("/api/json/districts/".concat(regioncode)).then(function (response) {
        _this2.districts = response.data;
      });
    },
    setDistricts: function setDistricts() {
      this.districts = [];
      this.getDistricts(this.selectedRegion);
      this.getRegionGeoJSON(this.selectedRegion);
    },
    setMap: function setMap() {
      var _this3 = this;

      axios.get("/api/json/district/".concat(this.selectedDistrict)).then(function (response) {
        var geojson = response.data;

        _this3.makeGeoJSON(geojson);
      });
      this.removeMarkers();
      this.drawLands(this.selectedDistrict);
      this.drawCadLands(this.getCadNum(this.selectedDistrict));

      if (this.geojson1 && this.geojson2) {
        this.layerGroup.addLayer(this.geojson1);
        this.layerGroup.addLayer(this.geojson2);
      }
    },
    getCadNum: function getCadNum(id) {
      var data = this.districts;

      for (var i = 0; i < data.length; i++) {
        if (id === data[i].id) return data[i].cad_num;
      }
    },
    getRegionGeoJSON: function getRegionGeoJSON($region) {
      var _this4 = this;

      axios.get("/api/json/regions/".concat($region)).then(function (response) {
        var geojson = response.data;

        _this4.makeGeoJSON(geojson);
      });
    },
    makeGeoJSON: function makeGeoJSON(geojson) {
      this.removeMarkers();
      this.removeMarkers2();
      var geoJSON = leaflet__WEBPACK_IMPORTED_MODULE_2___default().geoJSON(geojson, {
        invert: true,
        onEachFeature: function onEachFeature(feature, layer) {
          layer.myTag = "myGeoJSON";
        }
      }).addTo(this.$refs.map.mapObject);
      this.$refs.map.mapObject.fitBounds(geoJSON.getBounds());
    },
    removeMarkers2: function removeMarkers2() {
      if (this.geojson1 && this.geojson2) {
        this.layerGroup.removeLayer(this.geojson1);
        this.layerGroup.removeLayer(this.geojson2);
      }
    },
    removeMarkers: function removeMarkers() {
      var map = this.$refs.map.mapObject;
      map.eachLayer(function (layer) {
        if (layer.myTag && layer.myTag === "myGeoJSON") {
          map.removeLayer(layer);
        }
      });
      this.removeMarkers2();
    },
    drawLands: function drawLands(id) {
      var _this5 = this;

      var This = this;
      axios.get("/api/geojson/lands/".concat(id), {
        params: {
          not_null: 0
        }
      }).then(function (response) {
        var lands = response.data;
        var options = {
          maxZoom: 20,
          tolerance: 3,
          debug: 0,
          style: _this5.geojsonStyle,
          onEachFeature: function onEachFeature(feature, layer) {
            layer.on('mouseover', function (e) {
              layer.setStyle({
                color: '#2262CC'
              });
            });
            layer.on("mouseout", function (e) {
              if (!This.selectedLands.includes(feature.properties.id)) {
                layer.setStyle(This.geojsonStyle);
              }
            });
            layer.on('click', function (e) {
              layer.setStyle({
                fillColor: "#11ff00"
              });
              This.layer = layer;
              This.selectedLand = feature;
              This.currentLatLng = e.latlng;
              This.$refs.marker.mapObject.openPopup();
            });
          }
        };
        _this5.geojson1 = leaflet__WEBPACK_IMPORTED_MODULE_2___default().geoJson(lands.data, options).addTo(_this5.$refs.map.mapObject);
      });
    },
    drawCadLands: function drawCadLands(prefix) {
      var _this6 = this;

      axios.get("https://api.agro.uz/gis_bridge/eijara", {
        params: {
          prefix: prefix
        }
      }).then(function (response) {
        var lands = response.data[0];
        var geojsonStyle = {
          fillColor: "#ff0000",
          color: "#000",
          weight: 1,
          opacity: 1,
          fillOpacity: 0.7
        };
        var options = {
          maxZoom: 20,
          tolerance: 3,
          debug: 0,
          style: geojsonStyle
        };
        if (lands.features !== null) _this6.geojson2 = (0,_public_assets_js_leaflet_geojson_vt__WEBPACK_IMPORTED_MODULE_3__["default"])(lands, options).addTo(_this6.$refs.map.mapObject);
      });
    },
    drawLandFromParam: function drawLandFromParam($land) {
      var _this7 = this;

      axios.get("/api/geojson/land/".concat($land)).then(function (response) {
        response;

        _this7.removeMarkers();

        var lands = response.data;
        var options = {
          maxZoom: 20,
          tolerance: 3,
          debug: 0,
          style: _this7.geojsonStyle
        };
        var geojson = {
          geometry: lands.data[0].geometry,
          type: "Feature",
          properties: {
            name: $land
          }
        };
        console.log(geojson);
        geojson = (0,_public_assets_js_leaflet_geojson_vt__WEBPACK_IMPORTED_MODULE_3__["default"])(geojson, options).addTo(_this7.$refs.map.mapObject);
        5;

        _this7.$refs.map.mapObject.fitBounds(geojson.getBounds());
      });
    },
    selectLand: function selectLand(feature) {
      if (!this.selectedLands.includes(feature.properties.id)) {
        this.$refs.map.mapObject.closePopup();
        this.selectedLands.push(feature.properties.id);
        this.selectedLandAreas += parseInt(feature.properties.area);
      }
    },
    removeLand: function removeLand(feature, layer) {
      if (this.selectedLands.includes(feature.properties.id)) {
        this.$refs.map.mapObject.closePopup();
        var index = this.selectedLands.indexOf(feature.properties.id);
        this.selectedLands.splice(index);
        this.selectedLandAreas -= parseInt(feature.properties.area);
        layer.setStyle(this.geojsonStyle);
      }
    }
  },
  mounted: function mounted() {
    this.getRegions();

    if (this.$route.query.land) {
      this.drawLandFromParam(this.$route.query.land);
    }

    (0,_public_assets_js_snoopy__WEBPACK_IMPORTED_MODULE_4__["default"])();
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

/***/ "./public/assets/js/leaflet-geojson-vt.js":
/*!************************************************!*\
  !*** ./public/assets/js/leaflet-geojson-vt.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var geojson_vt__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! geojson-vt */ "./node_modules/geojson-vt/src/index.js");

L.GeoJSON.VT = L.GridLayer.extend({
  options: {
    async: false
  },
  initialize: function initialize(geojson, options) {
    L.setOptions(this, options);
    L.GridLayer.prototype.initialize.call(this, options);
    this.tileIndex = (0,geojson_vt__WEBPACK_IMPORTED_MODULE_0__["default"])(geojson, this.options);
  },
  createTile: function createTile(coords) {
    // create a <canvas> element for drawing
    var tile = L.DomUtil.create("canvas", "leaflet-tile"); // setup tile width and height according to the options

    var size = this.getTileSize();
    tile.width = size.x;
    tile.height = size.y; // get a canvas context and draw something on it using coords.x, coords.y and coords.z

    var ctx = tile.getContext("2d"); // return the tile so it can be rendered on screen

    var tileInfo = this.tileIndex.getTile(coords.z, coords.x, coords.y);
    var features = tileInfo ? tileInfo.features : [];

    for (var i = 0; i < features.length; i++) {
      var feature = features[i];
      this.drawFeature(ctx, feature);
    }

    return tile;
  },
  drawFeature: function drawFeature(ctx, feature) {
    var typeChanged = type !== feature.type,
        type = feature.type;
    ctx.beginPath();
    if (this.options.style) this.options.style instanceof Function ? this.setStyle(ctx, this.options.style(feature.tags)) : this.setStyle(ctx, this.options.style);

    if (type === 2 || type === 3) {
      for (var j = 0; j < feature.geometry.length; j++) {
        var ring = feature.geometry[j];

        for (var k = 0; k < ring.length; k++) {
          var p = ring[k];
          if (k) ctx.lineTo(p[0] / 16.0, p[1] / 16.0);else ctx.moveTo(p[0] / 16.0, p[1] / 16.0);
        }
      }
    } else if (type === 1) {
      for (var j = 0; j < feature.geometry.length; j++) {
        var p = feature.geometry[j];
        ctx.arc(p[0] / 16.0, p[1] / 16.0, 2, 0, Math.PI * 2, true);
      }
    }

    if (type === 3) ctx.fill(this.options.style.fillRule || "evenodd");
    ctx.stroke();
  },
  setStyle: function setStyle(ctx, style) {
    var stroke = style.stroke || true;

    if (stroke) {
      ctx.lineWidth = style.weight || 5;
      var color = this.setOpacity(style.color, style.opacity);
      ctx.strokeStyle = color;
    } else {
      ctx.lineWidth = 0;
      ctx.strokeStyle = {};
    }

    var fill = style.fill || true;

    if (fill) {
      ctx.fillStyle = style.fillColor || "#03f";
      var color = this.setOpacity(style.fillColor, style.fillOpacity);
      ctx.fillStyle = color;
    } else {
      ctx.fillStyle = {};
    }
  },
  setOpacity: function setOpacity(color, opacity) {
    if (opacity) {
      var color = color || "#03f";

      if (color.iscolorHex()) {
        var colorRgb = color.colorRgb();
        return "rgba(" + colorRgb[0] + "," + colorRgb[1] + "," + colorRgb[2] + "," + opacity + ")";
      } else {
        return color;
      }
    } else {
      return color;
    }
  }
});

function vt(geojson, options) {
  return new L.GeoJSON.VT(geojson, options);
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (vt);

String.prototype.iscolorHex = function () {
  var sColor = this.toLowerCase();
  var reg = /^#([0-9a-fA-f]{3}|[0-9a-fA-f]{6})$/;
  return reg.test(sColor);
};

String.prototype.colorRgb = function () {
  var sColor = this.toLowerCase();

  if (sColor.length === 4) {
    var sColorNew = "#";

    for (var i = 1; i < 4; i += 1) {
      sColorNew += sColor.slice(i, i + 1).concat(sColor.slice(i, i + 1));
    }

    sColor = sColorNew;
  }

  var sColorChange = [];

  for (var i = 1; i < 7; i += 2) {
    sColorChange.push(parseInt("0x" + sColor.slice(i, i + 2)));
  }

  return sColorChange;
};

/***/ }),

/***/ "./public/assets/js/snoopy.js":
/*!************************************!*\
  !*** ./public/assets/js/snoopy.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
var snoopy = function snoopy() {
  !function () {
    function t(t) {
      var i = [t.latLng([90, 180]), t.latLng([90, -180]), t.latLng([-90, -180]), t.latLng([-90, 180])];
      if (t.version < "1.0.0") t.extend(t.Polygon.prototype, {
        initialize: function initialize(n, o) {
          if (i = o.worldLatLngs ? o.worldLatLngs : i, o && o.invert && !o.invertMultiPolygon) {
            var s = [];
            s.push(i), s.push(n[0]), n = s;
          }

          t.Polyline.prototype.initialize.call(this, n, o), this._initWithHoles(n);
        },
        getBounds: function getBounds() {
          return this.options.invert ? new t.LatLngBounds(this._holes) : new t.LatLngBounds(this.getLatLngs());
        }
      }), t.extend(t.MultiPolygon.prototype, {
        initialize: function initialize(t, n) {
          if (i = n.worldLatLngs ? n.worldLatLngs : i, this._layers = {}, this._options = n, n.invert) {
            n.invertMultiPolygon = !0;
            var o = [];
            o.push(i);

            for (var s in t) {
              o.push(t[s][0]);
            }

            t = [o];
          }

          this.setLatLngs(t);
        }
      });else {
        var o = {
          toGeoJSON: t.Polygon.prototype.toGeoJSON
        };
        t.extend(t.Polygon.prototype, {
          _setLatLngs: function _setLatLngs(o) {
            if (this._originalLatLngs = o, n(this._originalLatLngs) && (this._originalLatLngs = [this._originalLatLngs]), this.options.invert) {
              i = this.options.worldLatLngs ? this.options.worldLatLngs : i;
              var s = [];
              s.push(i);

              for (var e in o) {
                s.push(o[e]);
              }

              o = [s];
            }

            t.Polyline.prototype._setLatLngs.call(this, o);
          },
          getBounds: function getBounds() {
            return this._originalLatLngs ? new t.LatLngBounds(this._originalLatLngs) : new t.LatLngBounds(this.getLatLngs());
          },
          getLatLngs: function getLatLngs() {
            return this._originalLatLngs;
          },
          toGeoJSON: function toGeoJSON(i) {
            if (!this.options.invert) return o.toGeoJSON.call(this, i);
            var s = !n(this._originalLatLngs),
                e = s && !n(this._originalLatLngs[0]),
                a = t.GeoJSON.latLngsToCoords(this._originalLatLngs, e ? 2 : s ? 1 : 0, !0, i);
            return s || (a = [a]), t.GeoJSON.getFeature(this, {
              type: (e ? "Multi" : "") + "Polygon",
              coordinates: a
            });
          }
        });
      }
    }

    var n = L.LineUtil.isFlat ? L.LineUtil.isFlat : L.LineUtil._flat;
    "function" == typeof define && __webpack_require__.amdO ? define(["leaflet"], function (n) {
      t(n);
    }) : t(L);
  }();
};

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (snoopy);

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-select/dist/vue-select.css":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-select/dist/vue-select.css ***!
  \*************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, ":root{--vs-colors--lightest:rgba(60,60,60,0.26);--vs-colors--light:rgba(60,60,60,0.5);--vs-colors--dark:#333;--vs-colors--darkest:rgba(0,0,0,0.15);--vs-search-input-color:inherit;--vs-search-input-placeholder-color:inherit;--vs-font-size:1rem;--vs-line-height:1.4;--vs-state-disabled-bg:#f8f8f8;--vs-state-disabled-color:var(--vs-colors--light);--vs-state-disabled-controls-color:var(--vs-colors--light);--vs-state-disabled-cursor:not-allowed;--vs-border-color:var(--vs-colors--lightest);--vs-border-width:1px;--vs-border-style:solid;--vs-border-radius:4px;--vs-actions-padding:4px 6px 0 3px;--vs-controls-color:var(--vs-colors--light);--vs-controls-size:1;--vs-controls--deselect-text-shadow:0 1px 0 #fff;--vs-selected-bg:#f0f0f0;--vs-selected-color:var(--vs-colors--dark);--vs-selected-border-color:var(--vs-border-color);--vs-selected-border-style:var(--vs-border-style);--vs-selected-border-width:var(--vs-border-width);--vs-dropdown-bg:#fff;--vs-dropdown-color:inherit;--vs-dropdown-z-index:1000;--vs-dropdown-min-width:160px;--vs-dropdown-max-height:350px;--vs-dropdown-box-shadow:0px 3px 6px 0px var(--vs-colors--darkest);--vs-dropdown-option-bg:#000;--vs-dropdown-option-color:var(--vs-dropdown-color);--vs-dropdown-option-padding:3px 20px;--vs-dropdown-option--active-bg:#5897fb;--vs-dropdown-option--active-color:#fff;--vs-dropdown-option--deselect-bg:#fb5858;--vs-dropdown-option--deselect-color:#fff;--vs-transition-timing-function:cubic-bezier(1,-0.115,0.975,0.855);--vs-transition-duration:150ms}.v-select{font-family:inherit;position:relative}.v-select,.v-select *{box-sizing:border-box}:root{--vs-transition-timing-function:cubic-bezier(1,0.5,0.8,1);--vs-transition-duration:0.15s}@-webkit-keyframes vSelectSpinner{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}@keyframes vSelectSpinner{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}.vs__fade-enter-active,.vs__fade-leave-active{pointer-events:none;transition:opacity var(--vs-transition-duration) var(--vs-transition-timing-function)}.vs__fade-enter,.vs__fade-leave-to{opacity:0}:root{--vs-disabled-bg:var(--vs-state-disabled-bg);--vs-disabled-color:var(--vs-state-disabled-color);--vs-disabled-cursor:var(--vs-state-disabled-cursor)}.vs--disabled .vs__clear,.vs--disabled .vs__dropdown-toggle,.vs--disabled .vs__open-indicator,.vs--disabled .vs__search,.vs--disabled .vs__selected{background-color:var(--vs-disabled-bg);cursor:var(--vs-disabled-cursor)}.v-select[dir=rtl] .vs__actions{padding:0 3px 0 6px}.v-select[dir=rtl] .vs__clear{margin-left:6px;margin-right:0}.v-select[dir=rtl] .vs__deselect{margin-left:0;margin-right:2px}.v-select[dir=rtl] .vs__dropdown-menu{text-align:right}.vs__dropdown-toggle{-webkit-appearance:none;-moz-appearance:none;appearance:none;background:none;border:var(--vs-border-width) var(--vs-border-style) var(--vs-border-color);border-radius:var(--vs-border-radius);display:flex;padding:0 0 4px;white-space:normal}.vs__selected-options{display:flex;flex-basis:100%;flex-grow:1;flex-wrap:wrap;padding:0 2px;position:relative}.vs__actions{align-items:center;display:flex;padding:var(--vs-actions-padding)}.vs--searchable .vs__dropdown-toggle{cursor:text}.vs--unsearchable .vs__dropdown-toggle{cursor:pointer}.vs--open .vs__dropdown-toggle{border-bottom-color:transparent;border-bottom-left-radius:0;border-bottom-right-radius:0}.vs__open-indicator{fill:var(--vs-controls-color);transform:scale(var(--vs-controls-size));transition:transform var(--vs-transition-duration) var(--vs-transition-timing-function);transition-timing-function:var(--vs-transition-timing-function)}.vs--open .vs__open-indicator{transform:rotate(180deg) scale(var(--vs-controls-size))}.vs--loading .vs__open-indicator{opacity:0}.vs__clear{fill:var(--vs-controls-color);background-color:transparent;border:0;cursor:pointer;margin-right:8px;padding:0}.vs__dropdown-menu{background:var(--vs-dropdown-bg);border:var(--vs-border-width) var(--vs-border-style) var(--vs-border-color);border-radius:0 0 var(--vs-border-radius) var(--vs-border-radius);border-top-style:none;box-shadow:var(--vs-dropdown-box-shadow);box-sizing:border-box;color:var(--vs-dropdown-color);display:block;left:0;list-style:none;margin:0;max-height:var(--vs-dropdown-max-height);min-width:var(--vs-dropdown-min-width);overflow-y:auto;padding:5px 0;position:absolute;text-align:left;top:calc(100% - var(--vs-border-width));width:100%;z-index:var(--vs-dropdown-z-index)}.vs__no-options{text-align:center}.vs__dropdown-option{clear:both;color:var(--vs-dropdown-option-color);cursor:pointer;display:block;line-height:1.42857143;padding:var(--vs-dropdown-option-padding);white-space:nowrap}.vs__dropdown-option--highlight{background:var(--vs-dropdown-option--active-bg);color:var(--vs-dropdown-option--active-color)}.vs__dropdown-option--deselect{background:var(--vs-dropdown-option--deselect-bg);color:var(--vs-dropdown-option--deselect-color)}.vs__dropdown-option--disabled{background:var(--vs-state-disabled-bg);color:var(--vs-state-disabled-color);cursor:var(--vs-state-disabled-cursor)}.vs__selected{align-items:center;background-color:var(--vs-selected-bg);border:var(--vs-selected-border-width) var(--vs-selected-border-style) var(--vs-selected-border-color);border-radius:var(--vs-border-radius);color:var(--vs-selected-color);display:flex;line-height:var(--vs-line-height);margin:4px 2px 0;padding:0 .25em;z-index:0}.vs__deselect{fill:var(--vs-controls-color);-webkit-appearance:none;-moz-appearance:none;appearance:none;background:none;border:0;cursor:pointer;display:inline-flex;margin-left:4px;padding:0;text-shadow:var(--vs-controls--deselect-text-shadow)}.vs--single .vs__selected{background-color:transparent;border-color:transparent}.vs--single.vs--loading .vs__selected,.vs--single.vs--open .vs__selected{opacity:.4;position:absolute}.vs--single.vs--searching .vs__selected{display:none}.vs__search::-webkit-search-cancel-button{display:none}.vs__search::-ms-clear,.vs__search::-webkit-search-decoration,.vs__search::-webkit-search-results-button,.vs__search::-webkit-search-results-decoration{display:none}.vs__search,.vs__search:focus{-webkit-appearance:none;-moz-appearance:none;appearance:none;background:none;border:1px solid transparent;border-left:none;box-shadow:none;color:var(--vs-search-input-color);flex-grow:1;font-size:var(--vs-font-size);line-height:var(--vs-line-height);margin:4px 0 0;max-width:100%;outline:none;padding:0 7px;width:0;z-index:1}.vs__search::-moz-placeholder{color:var(--vs-search-input-placeholder-color)}.vs__search:-ms-input-placeholder{color:var(--vs-search-input-placeholder-color)}.vs__search::placeholder{color:var(--vs-search-input-placeholder-color)}.vs--unsearchable .vs__search{opacity:1}.vs--unsearchable:not(.vs--disabled) .vs__search{cursor:pointer}.vs--single.vs--searching:not(.vs--open):not(.vs--loading) .vs__search{opacity:.2}.vs__spinner{align-self:center;-webkit-animation:vSelectSpinner 1.1s linear infinite;animation:vSelectSpinner 1.1s linear infinite;border:.9em solid hsla(0,0%,39%,.1);border-left-color:rgba(60,60,60,.45);font-size:5px;opacity:0;overflow:hidden;text-indent:-9999em;transform:translateZ(0) scale(var(--vs-controls--spinner-size,var(--vs-controls-size)));transition:opacity .1s}.vs__spinner,.vs__spinner:after{border-radius:50%;height:5em;transform:scale(var(--vs-controls--spinner-size,var(--vs-controls-size)));width:5em}.vs--loading .vs__spinner{opacity:1}", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Map.vue?vue&type=style&index=0&id=b4ef9180&scoped=true&lang=css&":
/*!***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Map.vue?vue&type=style&index=0&id=b4ef9180&scoped=true&lang=css& ***!
  \***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
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
___CSS_LOADER_EXPORT___.push([module.id, "\n.vue2leaflet-map[data-v-b4ef9180] {\n    height: 400px;\n}\n.select-2[data-v-b4ef9180] {\n    height: 48px;\n    width: 237px;\n    border-radius: 8px;\n}\n.d-flex[data-v-b4ef9180] {\n    gap: 24px;\n}\n.map[data-v-b4ef9180] {\n    margin-top: 16px;\n    border-radius: 12px;\n    overflow: hidden;\n}\n\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./public/image/marker.png":
/*!*********************************!*\
  !*** ./public/image/marker.png ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ("/images/marker.png?680f69f3c2e6b90c1812a813edf67fd7");

/***/ }),

/***/ "./node_modules/geojson-vt/src/clip.js":
/*!*********************************************!*\
  !*** ./node_modules/geojson-vt/src/clip.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ clip)
/* harmony export */ });
/* harmony import */ var _feature__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./feature */ "./node_modules/geojson-vt/src/feature.js");



/* clip features between two axis-parallel lines:
 *     |        |
 *  ___|___     |     /
 * /   |   \____|____/
 *     |        |
 */

function clip(features, scale, k1, k2, axis, minAll, maxAll, options) {

    k1 /= scale;
    k2 /= scale;

    if (minAll >= k1 && maxAll < k2) return features; // trivial accept
    else if (maxAll < k1 || minAll >= k2) return null; // trivial reject

    var clipped = [];

    for (var i = 0; i < features.length; i++) {

        var feature = features[i];
        var geometry = feature.geometry;
        var type = feature.type;

        var min = axis === 0 ? feature.minX : feature.minY;
        var max = axis === 0 ? feature.maxX : feature.maxY;

        if (min >= k1 && max < k2) { // trivial accept
            clipped.push(feature);
            continue;
        } else if (max < k1 || min >= k2) { // trivial reject
            continue;
        }

        var newGeometry = [];

        if (type === 'Point' || type === 'MultiPoint') {
            clipPoints(geometry, newGeometry, k1, k2, axis);

        } else if (type === 'LineString') {
            clipLine(geometry, newGeometry, k1, k2, axis, false, options.lineMetrics);

        } else if (type === 'MultiLineString') {
            clipLines(geometry, newGeometry, k1, k2, axis, false);

        } else if (type === 'Polygon') {
            clipLines(geometry, newGeometry, k1, k2, axis, true);

        } else if (type === 'MultiPolygon') {
            for (var j = 0; j < geometry.length; j++) {
                var polygon = [];
                clipLines(geometry[j], polygon, k1, k2, axis, true);
                if (polygon.length) {
                    newGeometry.push(polygon);
                }
            }
        }

        if (newGeometry.length) {
            if (options.lineMetrics && type === 'LineString') {
                for (j = 0; j < newGeometry.length; j++) {
                    clipped.push((0,_feature__WEBPACK_IMPORTED_MODULE_0__["default"])(feature.id, type, newGeometry[j], feature.tags));
                }
                continue;
            }

            if (type === 'LineString' || type === 'MultiLineString') {
                if (newGeometry.length === 1) {
                    type = 'LineString';
                    newGeometry = newGeometry[0];
                } else {
                    type = 'MultiLineString';
                }
            }
            if (type === 'Point' || type === 'MultiPoint') {
                type = newGeometry.length === 3 ? 'Point' : 'MultiPoint';
            }

            clipped.push((0,_feature__WEBPACK_IMPORTED_MODULE_0__["default"])(feature.id, type, newGeometry, feature.tags));
        }
    }

    return clipped.length ? clipped : null;
}

function clipPoints(geom, newGeom, k1, k2, axis) {
    for (var i = 0; i < geom.length; i += 3) {
        var a = geom[i + axis];

        if (a >= k1 && a <= k2) {
            newGeom.push(geom[i]);
            newGeom.push(geom[i + 1]);
            newGeom.push(geom[i + 2]);
        }
    }
}

function clipLine(geom, newGeom, k1, k2, axis, isPolygon, trackMetrics) {

    var slice = newSlice(geom);
    var intersect = axis === 0 ? intersectX : intersectY;
    var len = geom.start;
    var segLen, t;

    for (var i = 0; i < geom.length - 3; i += 3) {
        var ax = geom[i];
        var ay = geom[i + 1];
        var az = geom[i + 2];
        var bx = geom[i + 3];
        var by = geom[i + 4];
        var a = axis === 0 ? ax : ay;
        var b = axis === 0 ? bx : by;
        var exited = false;

        if (trackMetrics) segLen = Math.sqrt(Math.pow(ax - bx, 2) + Math.pow(ay - by, 2));

        if (a < k1) {
            // ---|-->  | (line enters the clip region from the left)
            if (b > k1) {
                t = intersect(slice, ax, ay, bx, by, k1);
                if (trackMetrics) slice.start = len + segLen * t;
            }
        } else if (a > k2) {
            // |  <--|--- (line enters the clip region from the right)
            if (b < k2) {
                t = intersect(slice, ax, ay, bx, by, k2);
                if (trackMetrics) slice.start = len + segLen * t;
            }
        } else {
            addPoint(slice, ax, ay, az);
        }
        if (b < k1 && a >= k1) {
            // <--|---  | or <--|-----|--- (line exits the clip region on the left)
            t = intersect(slice, ax, ay, bx, by, k1);
            exited = true;
        }
        if (b > k2 && a <= k2) {
            // |  ---|--> or ---|-----|--> (line exits the clip region on the right)
            t = intersect(slice, ax, ay, bx, by, k2);
            exited = true;
        }

        if (!isPolygon && exited) {
            if (trackMetrics) slice.end = len + segLen * t;
            newGeom.push(slice);
            slice = newSlice(geom);
        }

        if (trackMetrics) len += segLen;
    }

    // add the last point
    var last = geom.length - 3;
    ax = geom[last];
    ay = geom[last + 1];
    az = geom[last + 2];
    a = axis === 0 ? ax : ay;
    if (a >= k1 && a <= k2) addPoint(slice, ax, ay, az);

    // close the polygon if its endpoints are not the same after clipping
    last = slice.length - 3;
    if (isPolygon && last >= 3 && (slice[last] !== slice[0] || slice[last + 1] !== slice[1])) {
        addPoint(slice, slice[0], slice[1], slice[2]);
    }

    // add the final slice
    if (slice.length) {
        newGeom.push(slice);
    }
}

function newSlice(line) {
    var slice = [];
    slice.size = line.size;
    slice.start = line.start;
    slice.end = line.end;
    return slice;
}

function clipLines(geom, newGeom, k1, k2, axis, isPolygon) {
    for (var i = 0; i < geom.length; i++) {
        clipLine(geom[i], newGeom, k1, k2, axis, isPolygon, false);
    }
}

function addPoint(out, x, y, z) {
    out.push(x);
    out.push(y);
    out.push(z);
}

function intersectX(out, ax, ay, bx, by, x) {
    var t = (x - ax) / (bx - ax);
    out.push(x);
    out.push(ay + (by - ay) * t);
    out.push(1);
    return t;
}

function intersectY(out, ax, ay, bx, by, y) {
    var t = (y - ay) / (by - ay);
    out.push(ax + (bx - ax) * t);
    out.push(y);
    out.push(1);
    return t;
}


/***/ }),

/***/ "./node_modules/geojson-vt/src/convert.js":
/*!************************************************!*\
  !*** ./node_modules/geojson-vt/src/convert.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ convert)
/* harmony export */ });
/* harmony import */ var _simplify__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./simplify */ "./node_modules/geojson-vt/src/simplify.js");
/* harmony import */ var _feature__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./feature */ "./node_modules/geojson-vt/src/feature.js");




// converts GeoJSON feature into an intermediate projected JSON vector format with simplification data

function convert(data, options) {
    var features = [];
    if (data.type === 'FeatureCollection') {
        for (var i = 0; i < data.features.length; i++) {
            convertFeature(features, data.features[i], options, i);
        }

    } else if (data.type === 'Feature') {
        convertFeature(features, data, options);

    } else {
        // single geometry or a geometry collection
        convertFeature(features, {geometry: data}, options);
    }

    return features;
}

function convertFeature(features, geojson, options, index) {
    if (!geojson.geometry) return;

    var coords = geojson.geometry.coordinates;
    var type = geojson.geometry.type;
    var tolerance = Math.pow(options.tolerance / ((1 << options.maxZoom) * options.extent), 2);
    var geometry = [];
    var id = geojson.id;
    if (options.promoteId) {
        id = geojson.properties[options.promoteId];
    } else if (options.generateId) {
        id = index || 0;
    }
    if (type === 'Point') {
        convertPoint(coords, geometry);

    } else if (type === 'MultiPoint') {
        for (var i = 0; i < coords.length; i++) {
            convertPoint(coords[i], geometry);
        }

    } else if (type === 'LineString') {
        convertLine(coords, geometry, tolerance, false);

    } else if (type === 'MultiLineString') {
        if (options.lineMetrics) {
            // explode into linestrings to be able to track metrics
            for (i = 0; i < coords.length; i++) {
                geometry = [];
                convertLine(coords[i], geometry, tolerance, false);
                features.push((0,_feature__WEBPACK_IMPORTED_MODULE_1__["default"])(id, 'LineString', geometry, geojson.properties));
            }
            return;
        } else {
            convertLines(coords, geometry, tolerance, false);
        }

    } else if (type === 'Polygon') {
        convertLines(coords, geometry, tolerance, true);

    } else if (type === 'MultiPolygon') {
        for (i = 0; i < coords.length; i++) {
            var polygon = [];
            convertLines(coords[i], polygon, tolerance, true);
            geometry.push(polygon);
        }
    } else if (type === 'GeometryCollection') {
        for (i = 0; i < geojson.geometry.geometries.length; i++) {
            convertFeature(features, {
                id: id,
                geometry: geojson.geometry.geometries[i],
                properties: geojson.properties
            }, options, index);
        }
        return;
    } else {
        throw new Error('Input data is not a valid GeoJSON object.');
    }

    features.push((0,_feature__WEBPACK_IMPORTED_MODULE_1__["default"])(id, type, geometry, geojson.properties));
}

function convertPoint(coords, out) {
    out.push(projectX(coords[0]));
    out.push(projectY(coords[1]));
    out.push(0);
}

function convertLine(ring, out, tolerance, isPolygon) {
    var x0, y0;
    var size = 0;

    for (var j = 0; j < ring.length; j++) {
        var x = projectX(ring[j][0]);
        var y = projectY(ring[j][1]);

        out.push(x);
        out.push(y);
        out.push(0);

        if (j > 0) {
            if (isPolygon) {
                size += (x0 * y - x * y0) / 2; // area
            } else {
                size += Math.sqrt(Math.pow(x - x0, 2) + Math.pow(y - y0, 2)); // length
            }
        }
        x0 = x;
        y0 = y;
    }

    var last = out.length - 3;
    out[2] = 1;
    (0,_simplify__WEBPACK_IMPORTED_MODULE_0__["default"])(out, 0, last, tolerance);
    out[last + 2] = 1;

    out.size = Math.abs(size);
    out.start = 0;
    out.end = out.size;
}

function convertLines(rings, out, tolerance, isPolygon) {
    for (var i = 0; i < rings.length; i++) {
        var geom = [];
        convertLine(rings[i], geom, tolerance, isPolygon);
        out.push(geom);
    }
}

function projectX(x) {
    return x / 360 + 0.5;
}

function projectY(y) {
    var sin = Math.sin(y * Math.PI / 180);
    var y2 = 0.5 - 0.25 * Math.log((1 + sin) / (1 - sin)) / Math.PI;
    return y2 < 0 ? 0 : y2 > 1 ? 1 : y2;
}


/***/ }),

/***/ "./node_modules/geojson-vt/src/feature.js":
/*!************************************************!*\
  !*** ./node_modules/geojson-vt/src/feature.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ createFeature)
/* harmony export */ });

function createFeature(id, type, geom, tags) {
    var feature = {
        id: typeof id === 'undefined' ? null : id,
        type: type,
        geometry: geom,
        tags: tags,
        minX: Infinity,
        minY: Infinity,
        maxX: -Infinity,
        maxY: -Infinity
    };
    calcBBox(feature);
    return feature;
}

function calcBBox(feature) {
    var geom = feature.geometry;
    var type = feature.type;

    if (type === 'Point' || type === 'MultiPoint' || type === 'LineString') {
        calcLineBBox(feature, geom);

    } else if (type === 'Polygon' || type === 'MultiLineString') {
        for (var i = 0; i < geom.length; i++) {
            calcLineBBox(feature, geom[i]);
        }

    } else if (type === 'MultiPolygon') {
        for (i = 0; i < geom.length; i++) {
            for (var j = 0; j < geom[i].length; j++) {
                calcLineBBox(feature, geom[i][j]);
            }
        }
    }
}

function calcLineBBox(feature, geom) {
    for (var i = 0; i < geom.length; i += 3) {
        feature.minX = Math.min(feature.minX, geom[i]);
        feature.minY = Math.min(feature.minY, geom[i + 1]);
        feature.maxX = Math.max(feature.maxX, geom[i]);
        feature.maxY = Math.max(feature.maxY, geom[i + 1]);
    }
}


/***/ }),

/***/ "./node_modules/geojson-vt/src/index.js":
/*!**********************************************!*\
  !*** ./node_modules/geojson-vt/src/index.js ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ geojsonvt)
/* harmony export */ });
/* harmony import */ var _convert__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./convert */ "./node_modules/geojson-vt/src/convert.js");
/* harmony import */ var _clip__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./clip */ "./node_modules/geojson-vt/src/clip.js");
/* harmony import */ var _wrap__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./wrap */ "./node_modules/geojson-vt/src/wrap.js");
/* harmony import */ var _transform__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./transform */ "./node_modules/geojson-vt/src/transform.js");
/* harmony import */ var _tile__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./tile */ "./node_modules/geojson-vt/src/tile.js");

     // GeoJSON conversion and preprocessing
           // stripe clipping algorithm
           // date line processing
 // coordinate transformation
     // final simplified tile generation

function geojsonvt(data, options) {
    return new GeoJSONVT(data, options);
}

function GeoJSONVT(data, options) {
    options = this.options = extend(Object.create(this.options), options);

    var debug = options.debug;

    if (debug) console.time('preprocess data');

    if (options.maxZoom < 0 || options.maxZoom > 24) throw new Error('maxZoom should be in the 0-24 range');
    if (options.promoteId && options.generateId) throw new Error('promoteId and generateId cannot be used together.');

    var features = (0,_convert__WEBPACK_IMPORTED_MODULE_0__["default"])(data, options);

    this.tiles = {};
    this.tileCoords = [];

    if (debug) {
        console.timeEnd('preprocess data');
        console.log('index: maxZoom: %d, maxPoints: %d', options.indexMaxZoom, options.indexMaxPoints);
        console.time('generate tiles');
        this.stats = {};
        this.total = 0;
    }

    features = (0,_wrap__WEBPACK_IMPORTED_MODULE_2__["default"])(features, options);

    // start slicing from the top tile down
    if (features.length) this.splitTile(features, 0, 0, 0);

    if (debug) {
        if (features.length) console.log('features: %d, points: %d', this.tiles[0].numFeatures, this.tiles[0].numPoints);
        console.timeEnd('generate tiles');
        console.log('tiles generated:', this.total, JSON.stringify(this.stats));
    }
}

GeoJSONVT.prototype.options = {
    maxZoom: 14,            // max zoom to preserve detail on
    indexMaxZoom: 5,        // max zoom in the tile index
    indexMaxPoints: 100000, // max number of points per tile in the tile index
    tolerance: 3,           // simplification tolerance (higher means simpler)
    extent: 4096,           // tile extent
    buffer: 64,             // tile buffer on each side
    lineMetrics: false,     // whether to calculate line metrics
    promoteId: null,        // name of a feature property to be promoted to feature.id
    generateId: false,      // whether to generate feature ids. Cannot be used with promoteId
    debug: 0                // logging level (0, 1 or 2)
};

GeoJSONVT.prototype.splitTile = function (features, z, x, y, cz, cx, cy) {

    var stack = [features, z, x, y],
        options = this.options,
        debug = options.debug;

    // avoid recursion by using a processing queue
    while (stack.length) {
        y = stack.pop();
        x = stack.pop();
        z = stack.pop();
        features = stack.pop();

        var z2 = 1 << z,
            id = toID(z, x, y),
            tile = this.tiles[id];

        if (!tile) {
            if (debug > 1) console.time('creation');

            tile = this.tiles[id] = (0,_tile__WEBPACK_IMPORTED_MODULE_4__["default"])(features, z, x, y, options);
            this.tileCoords.push({z: z, x: x, y: y});

            if (debug) {
                if (debug > 1) {
                    console.log('tile z%d-%d-%d (features: %d, points: %d, simplified: %d)',
                        z, x, y, tile.numFeatures, tile.numPoints, tile.numSimplified);
                    console.timeEnd('creation');
                }
                var key = 'z' + z;
                this.stats[key] = (this.stats[key] || 0) + 1;
                this.total++;
            }
        }

        // save reference to original geometry in tile so that we can drill down later if we stop now
        tile.source = features;

        // if it's the first-pass tiling
        if (!cz) {
            // stop tiling if we reached max zoom, or if the tile is too simple
            if (z === options.indexMaxZoom || tile.numPoints <= options.indexMaxPoints) continue;

        // if a drilldown to a specific tile
        } else {
            // stop tiling if we reached base zoom or our target tile zoom
            if (z === options.maxZoom || z === cz) continue;

            // stop tiling if it's not an ancestor of the target tile
            var m = 1 << (cz - z);
            if (x !== Math.floor(cx / m) || y !== Math.floor(cy / m)) continue;
        }

        // if we slice further down, no need to keep source geometry
        tile.source = null;

        if (features.length === 0) continue;

        if (debug > 1) console.time('clipping');

        // values we'll use for clipping
        var k1 = 0.5 * options.buffer / options.extent,
            k2 = 0.5 - k1,
            k3 = 0.5 + k1,
            k4 = 1 + k1,
            tl, bl, tr, br, left, right;

        tl = bl = tr = br = null;

        left  = (0,_clip__WEBPACK_IMPORTED_MODULE_1__["default"])(features, z2, x - k1, x + k3, 0, tile.minX, tile.maxX, options);
        right = (0,_clip__WEBPACK_IMPORTED_MODULE_1__["default"])(features, z2, x + k2, x + k4, 0, tile.minX, tile.maxX, options);
        features = null;

        if (left) {
            tl = (0,_clip__WEBPACK_IMPORTED_MODULE_1__["default"])(left, z2, y - k1, y + k3, 1, tile.minY, tile.maxY, options);
            bl = (0,_clip__WEBPACK_IMPORTED_MODULE_1__["default"])(left, z2, y + k2, y + k4, 1, tile.minY, tile.maxY, options);
            left = null;
        }

        if (right) {
            tr = (0,_clip__WEBPACK_IMPORTED_MODULE_1__["default"])(right, z2, y - k1, y + k3, 1, tile.minY, tile.maxY, options);
            br = (0,_clip__WEBPACK_IMPORTED_MODULE_1__["default"])(right, z2, y + k2, y + k4, 1, tile.minY, tile.maxY, options);
            right = null;
        }

        if (debug > 1) console.timeEnd('clipping');

        stack.push(tl || [], z + 1, x * 2,     y * 2);
        stack.push(bl || [], z + 1, x * 2,     y * 2 + 1);
        stack.push(tr || [], z + 1, x * 2 + 1, y * 2);
        stack.push(br || [], z + 1, x * 2 + 1, y * 2 + 1);
    }
};

GeoJSONVT.prototype.getTile = function (z, x, y) {
    var options = this.options,
        extent = options.extent,
        debug = options.debug;

    if (z < 0 || z > 24) return null;

    var z2 = 1 << z;
    x = ((x % z2) + z2) % z2; // wrap tile x coordinate

    var id = toID(z, x, y);
    if (this.tiles[id]) return (0,_transform__WEBPACK_IMPORTED_MODULE_3__["default"])(this.tiles[id], extent);

    if (debug > 1) console.log('drilling down to z%d-%d-%d', z, x, y);

    var z0 = z,
        x0 = x,
        y0 = y,
        parent;

    while (!parent && z0 > 0) {
        z0--;
        x0 = Math.floor(x0 / 2);
        y0 = Math.floor(y0 / 2);
        parent = this.tiles[toID(z0, x0, y0)];
    }

    if (!parent || !parent.source) return null;

    // if we found a parent tile containing the original geometry, we can drill down from it
    if (debug > 1) console.log('found parent tile z%d-%d-%d', z0, x0, y0);

    if (debug > 1) console.time('drilling down');
    this.splitTile(parent.source, z0, x0, y0, z, x, y);
    if (debug > 1) console.timeEnd('drilling down');

    return this.tiles[id] ? (0,_transform__WEBPACK_IMPORTED_MODULE_3__["default"])(this.tiles[id], extent) : null;
};

function toID(z, x, y) {
    return (((1 << z) * y + x) * 32) + z;
}

function extend(dest, src) {
    for (var i in src) dest[i] = src[i];
    return dest;
}


/***/ }),

/***/ "./node_modules/geojson-vt/src/simplify.js":
/*!*************************************************!*\
  !*** ./node_modules/geojson-vt/src/simplify.js ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ simplify)
/* harmony export */ });

// calculate simplification data using optimized Douglas-Peucker algorithm

function simplify(coords, first, last, sqTolerance) {
    var maxSqDist = sqTolerance;
    var mid = (last - first) >> 1;
    var minPosToMid = last - first;
    var index;

    var ax = coords[first];
    var ay = coords[first + 1];
    var bx = coords[last];
    var by = coords[last + 1];

    for (var i = first + 3; i < last; i += 3) {
        var d = getSqSegDist(coords[i], coords[i + 1], ax, ay, bx, by);

        if (d > maxSqDist) {
            index = i;
            maxSqDist = d;

        } else if (d === maxSqDist) {
            // a workaround to ensure we choose a pivot close to the middle of the list,
            // reducing recursion depth, for certain degenerate inputs
            // https://github.com/mapbox/geojson-vt/issues/104
            var posToMid = Math.abs(i - mid);
            if (posToMid < minPosToMid) {
                index = i;
                minPosToMid = posToMid;
            }
        }
    }

    if (maxSqDist > sqTolerance) {
        if (index - first > 3) simplify(coords, first, index, sqTolerance);
        coords[index + 2] = maxSqDist;
        if (last - index > 3) simplify(coords, index, last, sqTolerance);
    }
}

// square distance from a point to a segment
function getSqSegDist(px, py, x, y, bx, by) {

    var dx = bx - x;
    var dy = by - y;

    if (dx !== 0 || dy !== 0) {

        var t = ((px - x) * dx + (py - y) * dy) / (dx * dx + dy * dy);

        if (t > 1) {
            x = bx;
            y = by;

        } else if (t > 0) {
            x += dx * t;
            y += dy * t;
        }
    }

    dx = px - x;
    dy = py - y;

    return dx * dx + dy * dy;
}


/***/ }),

/***/ "./node_modules/geojson-vt/src/tile.js":
/*!*********************************************!*\
  !*** ./node_modules/geojson-vt/src/tile.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ createTile)
/* harmony export */ });

function createTile(features, z, tx, ty, options) {
    var tolerance = z === options.maxZoom ? 0 : options.tolerance / ((1 << z) * options.extent);
    var tile = {
        features: [],
        numPoints: 0,
        numSimplified: 0,
        numFeatures: 0,
        source: null,
        x: tx,
        y: ty,
        z: z,
        transformed: false,
        minX: 2,
        minY: 1,
        maxX: -1,
        maxY: 0
    };
    for (var i = 0; i < features.length; i++) {
        tile.numFeatures++;
        addFeature(tile, features[i], tolerance, options);

        var minX = features[i].minX;
        var minY = features[i].minY;
        var maxX = features[i].maxX;
        var maxY = features[i].maxY;

        if (minX < tile.minX) tile.minX = minX;
        if (minY < tile.minY) tile.minY = minY;
        if (maxX > tile.maxX) tile.maxX = maxX;
        if (maxY > tile.maxY) tile.maxY = maxY;
    }
    return tile;
}

function addFeature(tile, feature, tolerance, options) {

    var geom = feature.geometry,
        type = feature.type,
        simplified = [];

    if (type === 'Point' || type === 'MultiPoint') {
        for (var i = 0; i < geom.length; i += 3) {
            simplified.push(geom[i]);
            simplified.push(geom[i + 1]);
            tile.numPoints++;
            tile.numSimplified++;
        }

    } else if (type === 'LineString') {
        addLine(simplified, geom, tile, tolerance, false, false);

    } else if (type === 'MultiLineString' || type === 'Polygon') {
        for (i = 0; i < geom.length; i++) {
            addLine(simplified, geom[i], tile, tolerance, type === 'Polygon', i === 0);
        }

    } else if (type === 'MultiPolygon') {

        for (var k = 0; k < geom.length; k++) {
            var polygon = geom[k];
            for (i = 0; i < polygon.length; i++) {
                addLine(simplified, polygon[i], tile, tolerance, true, i === 0);
            }
        }
    }

    if (simplified.length) {
        var tags = feature.tags || null;
        if (type === 'LineString' && options.lineMetrics) {
            tags = {};
            for (var key in feature.tags) tags[key] = feature.tags[key];
            tags['mapbox_clip_start'] = geom.start / geom.size;
            tags['mapbox_clip_end'] = geom.end / geom.size;
        }
        var tileFeature = {
            geometry: simplified,
            type: type === 'Polygon' || type === 'MultiPolygon' ? 3 :
                type === 'LineString' || type === 'MultiLineString' ? 2 : 1,
            tags: tags
        };
        if (feature.id !== null) {
            tileFeature.id = feature.id;
        }
        tile.features.push(tileFeature);
    }
}

function addLine(result, geom, tile, tolerance, isPolygon, isOuter) {
    var sqTolerance = tolerance * tolerance;

    if (tolerance > 0 && (geom.size < (isPolygon ? sqTolerance : tolerance))) {
        tile.numPoints += geom.length / 3;
        return;
    }

    var ring = [];

    for (var i = 0; i < geom.length; i += 3) {
        if (tolerance === 0 || geom[i + 2] > sqTolerance) {
            tile.numSimplified++;
            ring.push(geom[i]);
            ring.push(geom[i + 1]);
        }
        tile.numPoints++;
    }

    if (isPolygon) rewind(ring, isOuter);

    result.push(ring);
}

function rewind(ring, clockwise) {
    var area = 0;
    for (var i = 0, len = ring.length, j = len - 2; i < len; j = i, i += 2) {
        area += (ring[i] - ring[j]) * (ring[i + 1] + ring[j + 1]);
    }
    if (area > 0 === clockwise) {
        for (i = 0, len = ring.length; i < len / 2; i += 2) {
            var x = ring[i];
            var y = ring[i + 1];
            ring[i] = ring[len - 2 - i];
            ring[i + 1] = ring[len - 1 - i];
            ring[len - 2 - i] = x;
            ring[len - 1 - i] = y;
        }
    }
}


/***/ }),

/***/ "./node_modules/geojson-vt/src/transform.js":
/*!**************************************************!*\
  !*** ./node_modules/geojson-vt/src/transform.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ transformTile)
/* harmony export */ });

// Transforms the coordinates of each feature in the given tile from
// mercator-projected space into (extent x extent) tile space.
function transformTile(tile, extent) {
    if (tile.transformed) return tile;

    var z2 = 1 << tile.z,
        tx = tile.x,
        ty = tile.y,
        i, j, k;

    for (i = 0; i < tile.features.length; i++) {
        var feature = tile.features[i],
            geom = feature.geometry,
            type = feature.type;

        feature.geometry = [];

        if (type === 1) {
            for (j = 0; j < geom.length; j += 2) {
                feature.geometry.push(transformPoint(geom[j], geom[j + 1], extent, z2, tx, ty));
            }
        } else {
            for (j = 0; j < geom.length; j++) {
                var ring = [];
                for (k = 0; k < geom[j].length; k += 2) {
                    ring.push(transformPoint(geom[j][k], geom[j][k + 1], extent, z2, tx, ty));
                }
                feature.geometry.push(ring);
            }
        }
    }

    tile.transformed = true;

    return tile;
}

function transformPoint(x, y, extent, z2, tx, ty) {
    return [
        Math.round(extent * (x * z2 - tx)),
        Math.round(extent * (y * z2 - ty))];
}


/***/ }),

/***/ "./node_modules/geojson-vt/src/wrap.js":
/*!*********************************************!*\
  !*** ./node_modules/geojson-vt/src/wrap.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ wrap)
/* harmony export */ });
/* harmony import */ var _clip__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./clip */ "./node_modules/geojson-vt/src/clip.js");
/* harmony import */ var _feature__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./feature */ "./node_modules/geojson-vt/src/feature.js");




function wrap(features, options) {
    var buffer = options.buffer / options.extent;
    var merged = features;
    var left  = (0,_clip__WEBPACK_IMPORTED_MODULE_0__["default"])(features, 1, -1 - buffer, buffer,     0, -1, 2, options); // left world copy
    var right = (0,_clip__WEBPACK_IMPORTED_MODULE_0__["default"])(features, 1,  1 - buffer, 2 + buffer, 0, -1, 2, options); // right world copy

    if (left || right) {
        merged = (0,_clip__WEBPACK_IMPORTED_MODULE_0__["default"])(features, 1, -buffer, 1 + buffer, 0, -1, 2, options) || []; // center world copy

        if (left) merged = shiftFeatureCoords(left, 1).concat(merged); // merge left into center
        if (right) merged = merged.concat(shiftFeatureCoords(right, -1)); // merge right into center
    }

    return merged;
}

function shiftFeatureCoords(features, offset) {
    var newFeatures = [];

    for (var i = 0; i < features.length; i++) {
        var feature = features[i],
            type = feature.type;

        var newGeometry;

        if (type === 'Point' || type === 'MultiPoint' || type === 'LineString') {
            newGeometry = shiftCoords(feature.geometry, offset);

        } else if (type === 'MultiLineString' || type === 'Polygon') {
            newGeometry = [];
            for (var j = 0; j < feature.geometry.length; j++) {
                newGeometry.push(shiftCoords(feature.geometry[j], offset));
            }
        } else if (type === 'MultiPolygon') {
            newGeometry = [];
            for (j = 0; j < feature.geometry.length; j++) {
                var newPolygon = [];
                for (var k = 0; k < feature.geometry[j].length; k++) {
                    newPolygon.push(shiftCoords(feature.geometry[j][k], offset));
                }
                newGeometry.push(newPolygon);
            }
        }

        newFeatures.push((0,_feature__WEBPACK_IMPORTED_MODULE_1__["default"])(feature.id, type, newGeometry, feature.tags));
    }

    return newFeatures;
}

function shiftCoords(points, offset) {
    var newPoints = [];
    newPoints.size = points.size;

    if (points.start !== undefined) {
        newPoints.start = points.start;
        newPoints.end = points.end;
    }

    for (var i = 0; i < points.length; i += 3) {
        newPoints.push(points[i] + offset, points[i + 1], points[i + 2]);
    }
    return newPoints;
}


/***/ }),

/***/ "./node_modules/vue-select/dist/vue-select.css":
/*!*****************************************************!*\
  !*** ./node_modules/vue-select/dist/vue-select.css ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_vue_select_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./vue-select.css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-select/dist/vue-select.css");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_vue_select_css__WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_vue_select_css__WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});

/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Map.vue?vue&type=style&index=0&id=b4ef9180&scoped=true&lang=css&":
/*!***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Map.vue?vue&type=style&index=0&id=b4ef9180&scoped=true&lang=css& ***!
  \***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Map_vue_vue_type_style_index_0_id_b4ef9180_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Map.vue?vue&type=style&index=0&id=b4ef9180&scoped=true&lang=css& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Map.vue?vue&type=style&index=0&id=b4ef9180&scoped=true&lang=css&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Map_vue_vue_type_style_index_0_id_b4ef9180_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Map_vue_vue_type_style_index_0_id_b4ef9180_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});

/***/ }),

/***/ "./resources/js/components/Auth/Map.vue":
/*!**********************************************!*\
  !*** ./resources/js/components/Auth/Map.vue ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Map_vue_vue_type_template_id_b4ef9180_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Map.vue?vue&type=template&id=b4ef9180&scoped=true& */ "./resources/js/components/Auth/Map.vue?vue&type=template&id=b4ef9180&scoped=true&");
/* harmony import */ var _Map_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Map.vue?vue&type=script&lang=js& */ "./resources/js/components/Auth/Map.vue?vue&type=script&lang=js&");
/* harmony import */ var _Map_vue_vue_type_style_index_0_id_b4ef9180_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Map.vue?vue&type=style&index=0&id=b4ef9180&scoped=true&lang=css& */ "./resources/js/components/Auth/Map.vue?vue&type=style&index=0&id=b4ef9180&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _Map_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Map_vue_vue_type_template_id_b4ef9180_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _Map_vue_vue_type_template_id_b4ef9180_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "b4ef9180",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Auth/Map.vue"
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
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
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

/***/ "./resources/js/components/Auth/Map.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./resources/js/components/Auth/Map.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Map_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Map.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Map.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Map_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

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

/***/ "./resources/js/components/Auth/Map.vue?vue&type=style&index=0&id=b4ef9180&scoped=true&lang=css&":
/*!*******************************************************************************************************!*\
  !*** ./resources/js/components/Auth/Map.vue?vue&type=style&index=0&id=b4ef9180&scoped=true&lang=css& ***!
  \*******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Map_vue_vue_type_style_index_0_id_b4ef9180_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/style-loader/dist/cjs.js!../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Map.vue?vue&type=style&index=0&id=b4ef9180&scoped=true&lang=css& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Map.vue?vue&type=style&index=0&id=b4ef9180&scoped=true&lang=css&");


/***/ }),

/***/ "./resources/js/components/Auth/Map.vue?vue&type=template&id=b4ef9180&scoped=true&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/components/Auth/Map.vue?vue&type=template&id=b4ef9180&scoped=true& ***!
  \*****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Map_vue_vue_type_template_id_b4ef9180_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Map_vue_vue_type_template_id_b4ef9180_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Map_vue_vue_type_template_id_b4ef9180_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Map.vue?vue&type=template&id=b4ef9180&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Map.vue?vue&type=template&id=b4ef9180&scoped=true&");


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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Map.vue?vue&type=template&id=b4ef9180&scoped=true&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Auth/Map.vue?vue&type=template&id=b4ef9180&scoped=true& ***!
  \********************************************************************************************************************************************************************************************************************************/
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
          _c("div", { staticClass: "col" }, [
            _c("div", { staticClass: "card" }, [
              _c("div", { staticClass: "row" }, [
                _c("div", { staticClass: "col-6" }, [
                  _c("h1", [_vm._v("Ochiq xarita")]),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "d-flex  mt-2" },
                    [
                      _c("v-select", {
                        staticClass: "select-2",
                        attrs: {
                          reduce: function (option) {
                            return option.regioncode
                          },
                          label: "nameuz",
                          options: _vm.regions,
                        },
                        on: {
                          change: _vm.setDistricts,
                          input: _vm.setDistricts,
                        },
                        model: {
                          value: _vm.selectedRegion,
                          callback: function ($$v) {
                            _vm.selectedRegion = $$v
                          },
                          expression: "selectedRegion",
                        },
                      }),
                      _vm._v(" "),
                      _c("v-select", {
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
                            return _vm.setMap()
                          },
                          input: _vm.setMap,
                        },
                        model: {
                          value: _vm.selectedDistrict,
                          callback: function ($$v) {
                            _vm.selectedDistrict = $$v
                          },
                          expression: "selectedDistrict",
                        },
                      }),
                    ],
                    1
                  ),
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-6 mt-4" }, [
                  _c("h5", [
                    _c("b", [_vm._v("Tanlangan yerlar soni")]),
                    _vm._v(": " + _vm._s(_vm.selectedLands.length) + " ta"),
                  ]),
                  _vm._v(" "),
                  _c("h5", [
                    _c("b", [_vm._v("Tanlangan yerlar maydoni")]),
                    _vm._v(": " + _vm._s(_vm.selectedLandAreas) + " ga"),
                  ]),
                ]),
              ]),
            ]),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "map" },
              [
                _c(
                  "l-map",
                  {
                    ref: "map",
                    attrs: {
                      options: _vm.options,
                      zoom: _vm.zoom,
                      center: _vm.center,
                    },
                  },
                  [
                    _c("l-tile-layer", {
                      attrs: {
                        maxZoom: _vm.maxZoom,
                        subdomains: _vm.subdomains,
                        url: _vm.url,
                        attribution: _vm.attribution,
                      },
                    }),
                    _vm._v(" "),
                    _c("l-control-zoom", {
                      attrs: { position: "bottomright" },
                    }),
                    _vm._v(" "),
                    _c(
                      "l-marker",
                      {
                        ref: "marker",
                        attrs: { "lat-lng": _vm.currentLatLng },
                      },
                      [
                        _c("l-icon", { attrs: { "icon-url": _vm.customIcon } }),
                        _vm._v(" "),
                        _vm.selectedLand && _vm.layer
                          ? [
                              _c(
                                "l-popup",
                                { ref: "popup" },
                                [
                                  _vm._v(
                                    "\n                                Umumiy maydoni: " +
                                      _vm._s(_vm.selectedLand.properties.area) +
                                      " ga "
                                  ),
                                  _c("br"),
                                  _c("br"),
                                  _vm._v(" "),
                                  _c(
                                    "button",
                                    { staticClass: "btn btn-primary" },
                                    [_vm._v("Tasdiqlash")]
                                  ),
                                  _vm._v(" "),
                                  _vm.selectedLands.includes(
                                    _vm.selectedLand.properties.id
                                  )
                                    ? [
                                        _c(
                                          "button",
                                          {
                                            staticClass:
                                              "btn btn-danger ml-1 btn-remove",
                                            on: {
                                              click: function ($event) {
                                                return _vm.removeLand(
                                                  _vm.selectedLand,
                                                  _vm.layer
                                                )
                                              },
                                            },
                                          },
                                          [
                                            _vm._v(
                                              "Bekor qilish\n                                    "
                                            ),
                                          ]
                                        ),
                                      ]
                                    : _vm._e(),
                                  _vm._v(" "),
                                  !_vm.selectedLands.includes(
                                    _vm.selectedLand.properties.id
                                  )
                                    ? [
                                        _c(
                                          "button",
                                          {
                                            staticClass:
                                              "btn btn-success ml-1 btn-select",
                                            on: {
                                              click: function ($event) {
                                                return _vm.selectLand(
                                                  _vm.selectedLand,
                                                  _vm.layer
                                                )
                                              },
                                            },
                                          },
                                          [
                                            _vm._v(
                                              "Yana tanlash\n                                    "
                                            ),
                                          ]
                                        ),
                                      ]
                                    : _vm._e(),
                                ],
                                2
                              ),
                            ]
                          : _vm._e(),
                      ],
                      2
                    ),
                  ],
                  1
                ),
              ],
              1
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
              _vm._v("\n                Arizalarim\n                "),
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
              _vm._v("\n                Ariza topshirish\n                "),
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
              _vm._v("\n                Ma'lumotlarim\n                "),
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
            _vm._v("\n                Chiqish\n                "),
            _c("span"),
          ]
        ),
      ]),
    ]),
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue2-leaflet/dist/components/LControlZoom.js":
/*!*******************************************************************!*\
  !*** ./node_modules/vue2-leaflet/dist/components/LControlZoom.js ***!
  \*******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var leaflet__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! leaflet */ "./node_modules/leaflet/dist/leaflet-src.js");
/* harmony import */ var leaflet__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(leaflet__WEBPACK_IMPORTED_MODULE_0__);


var capitalizeFirstLetter = function (string) {
  if (!string || typeof string.charAt !== 'function') {
    return string;
  }
  return string.charAt(0).toUpperCase() + string.slice(1);
};

var propsBinder = function (vueElement, leafletElement, props, options) {
  var loop = function ( key ) {
    var setMethodName = 'set' + capitalizeFirstLetter(key);
    var deepValue =
      props[key].type === Object ||
      props[key].type === Array ||
      Array.isArray(props[key].type);
    if (props[key].custom && vueElement[setMethodName]) {
      vueElement.$watch(
        key,
        function (newVal, oldVal) {
          vueElement[setMethodName](newVal, oldVal);
        },
        {
          deep: deepValue,
        }
      );
    } else if (setMethodName === 'setOptions') {
      vueElement.$watch(
        key,
        function (newVal, oldVal) {
          (0,leaflet__WEBPACK_IMPORTED_MODULE_0__.setOptions)(leafletElement, newVal);
        },
        {
          deep: deepValue,
        }
      );
    } else if (leafletElement[setMethodName]) {
      vueElement.$watch(
        key,
        function (newVal, oldVal) {
          leafletElement[setMethodName](newVal);
        },
        {
          deep: deepValue,
        }
      );
    }
  };

  for (var key in props) loop( key );
};

var collectionCleaner = function (options) {
  var result = {};
  for (var key in options) {
    var value = options[key];
    if (value !== null && value !== undefined) {
      result[key] = value;
    }
  }
  return result;
};

var optionsMerger = function (props, instance) {
  var options =
    instance.options && instance.options.constructor === Object
      ? instance.options
      : {};
  props = props && props.constructor === Object ? props : {};
  var result = collectionCleaner(options);
  props = collectionCleaner(props);
  var defaultProps = instance.$options.props;
  for (var key in props) {
    var def = defaultProps[key]
      ? defaultProps[key].default &&
        typeof defaultProps[key].default === 'function'
        ? defaultProps[key].default.call()
        : defaultProps[key].default
      : Symbol('unique');
    var isEqual = false;
    if (Array.isArray(def)) {
      isEqual = JSON.stringify(def) === JSON.stringify(props[key]);
    } else {
      isEqual = def === props[key];
    }
    if (result[key] && !isEqual) {
      console.warn(
        (key + " props is overriding the value passed in the options props")
      );
      result[key] = props[key];
    } else if (!result[key]) {
      result[key] = props[key];
    }
  }
  return result;
};

var ControlMixin = {
  props: {
    position: {
      type: String,
      default: 'topright'
    }
  },
  mounted: function mounted () {
    this.controlOptions = {
      position: this.position
    };
  },
  beforeDestroy: function beforeDestroy () {
    if (this.mapObject) {
      this.mapObject.remove();
    }
  }
};

var Options = {
  props: {
    /**
     * Leaflet options to pass to the component constructor
     */
    options: {
      type: Object,
      default: function () { return ({}); }
    }
  }
};

/**
 * Add any custom component as a leaflet control-zoom
 */
var script = {
  name: 'LControlZoom',
  mixins: [ControlMixin, Options],
  props: {
    zoomInText: {
      type: String,
      default: '+',
    },
    zoomInTitle: {
      type: String,
      default: 'Zoom in',
    },
    zoomOutText: {
      type: String,
      default: '-',
    },
    zoomOutTitle: {
      type: String,
      default: 'Zoom out',
    },
  },
  mounted: function mounted() {
    var this$1 = this;

    var options = optionsMerger(
      Object.assign({}, this.controlOptions,
        {zoomInText: this.zoomInText,
        zoomInTitle: this.zoomInTitle,
        zoomOutText: this.zoomOutText,
        zoomOutTitle: this.zoomOutTitle}),
      this
    );
    this.mapObject = leaflet__WEBPACK_IMPORTED_MODULE_0__.control.zoom(options);
    propsBinder(this, this.mapObject, this.$options.props);
    this.mapObject.addTo(this.$parent.mapObject);
    this.$nextTick(function () {
      /**
       * Triggers when the component is ready
       * @type {object}
       * @property {object} mapObject - reference to leaflet map object
       */
      this$1.$emit('ready', this$1.mapObject);
    });
  },
  render: function render() {
    return null;
  },
};

function normalizeComponent(template, style, script, scopeId, isFunctionalTemplate, moduleIdentifier /* server only */, shadowMode, createInjector, createInjectorSSR, createInjectorShadow) {
    if (typeof shadowMode !== 'boolean') {
        createInjectorSSR = createInjector;
        createInjector = shadowMode;
        shadowMode = false;
    }
    // Vue.extend constructor export interop.
    var options = typeof script === 'function' ? script.options : script;
    // render functions
    if (template && template.render) {
        options.render = template.render;
        options.staticRenderFns = template.staticRenderFns;
        options._compiled = true;
        // functional template
        if (isFunctionalTemplate) {
            options.functional = true;
        }
    }
    // scopedId
    if (scopeId) {
        options._scopeId = scopeId;
    }
    var hook;
    if (moduleIdentifier) {
        // server build
        hook = function (context) {
            // 2.3 injection
            context =
                context || // cached call
                    (this.$vnode && this.$vnode.ssrContext) || // stateful
                    (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext); // functional
            // 2.2 with runInNewContext: true
            if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
                context = __VUE_SSR_CONTEXT__;
            }
            // inject component styles
            if (style) {
                style.call(this, createInjectorSSR(context));
            }
            // register component module identifier for async chunk inference
            if (context && context._registeredComponents) {
                context._registeredComponents.add(moduleIdentifier);
            }
        };
        // used by ssr in case component is cached and beforeCreate
        // never gets called
        options._ssrRegister = hook;
    }
    else if (style) {
        hook = shadowMode
            ? function (context) {
                style.call(this, createInjectorShadow(context, this.$root.$options.shadowRoot));
            }
            : function (context) {
                style.call(this, createInjector(context));
            };
    }
    if (hook) {
        if (options.functional) {
            // register for functional component in vue file
            var originalRender = options.render;
            options.render = function renderWithStyleInjection(h, context) {
                hook.call(context);
                return originalRender(h, context);
            };
        }
        else {
            // inject component registration as beforeCreate hook
            var existing = options.beforeCreate;
            options.beforeCreate = existing ? [].concat(existing, hook) : [hook];
        }
    }
    return script;
}

/* script */
var __vue_script__ = script;

/* template */

  /* style */
  var __vue_inject_styles__ = undefined;
  /* scoped */
  var __vue_scope_id__ = undefined;
  /* module identifier */
  var __vue_module_identifier__ = undefined;
  /* functional template */
  var __vue_is_functional_template__ = undefined;
  /* style inject */
  
  /* style inject SSR */
  
  /* style inject shadow dom */
  

  
  var __vue_component__ = /*#__PURE__*/normalizeComponent(
    {},
    __vue_inject_styles__,
    __vue_script__,
    __vue_scope_id__,
    __vue_is_functional_template__,
    __vue_module_identifier__,
    false,
    undefined,
    undefined,
    undefined
  );

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__vue_component__);


/***/ }),

/***/ "./node_modules/vue2-leaflet/dist/components/LGeoJson.js":
/*!***************************************************************!*\
  !*** ./node_modules/vue2-leaflet/dist/components/LGeoJson.js ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var leaflet__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! leaflet */ "./node_modules/leaflet/dist/leaflet-src.js");
/* harmony import */ var leaflet__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(leaflet__WEBPACK_IMPORTED_MODULE_0__);


var capitalizeFirstLetter = function (string) {
  if (!string || typeof string.charAt !== 'function') {
    return string;
  }
  return string.charAt(0).toUpperCase() + string.slice(1);
};

var propsBinder = function (vueElement, leafletElement, props, options) {
  var loop = function ( key ) {
    var setMethodName = 'set' + capitalizeFirstLetter(key);
    var deepValue =
      props[key].type === Object ||
      props[key].type === Array ||
      Array.isArray(props[key].type);
    if (props[key].custom && vueElement[setMethodName]) {
      vueElement.$watch(
        key,
        function (newVal, oldVal) {
          vueElement[setMethodName](newVal, oldVal);
        },
        {
          deep: deepValue,
        }
      );
    } else if (setMethodName === 'setOptions') {
      vueElement.$watch(
        key,
        function (newVal, oldVal) {
          (0,leaflet__WEBPACK_IMPORTED_MODULE_0__.setOptions)(leafletElement, newVal);
        },
        {
          deep: deepValue,
        }
      );
    } else if (leafletElement[setMethodName]) {
      vueElement.$watch(
        key,
        function (newVal, oldVal) {
          leafletElement[setMethodName](newVal);
        },
        {
          deep: deepValue,
        }
      );
    }
  };

  for (var key in props) loop( key );
};

var collectionCleaner = function (options) {
  var result = {};
  for (var key in options) {
    var value = options[key];
    if (value !== null && value !== undefined) {
      result[key] = value;
    }
  }
  return result;
};

var optionsMerger = function (props, instance) {
  var options =
    instance.options && instance.options.constructor === Object
      ? instance.options
      : {};
  props = props && props.constructor === Object ? props : {};
  var result = collectionCleaner(options);
  props = collectionCleaner(props);
  var defaultProps = instance.$options.props;
  for (var key in props) {
    var def = defaultProps[key]
      ? defaultProps[key].default &&
        typeof defaultProps[key].default === 'function'
        ? defaultProps[key].default.call()
        : defaultProps[key].default
      : Symbol('unique');
    var isEqual = false;
    if (Array.isArray(def)) {
      isEqual = JSON.stringify(def) === JSON.stringify(props[key]);
    } else {
      isEqual = def === props[key];
    }
    if (result[key] && !isEqual) {
      console.warn(
        (key + " props is overriding the value passed in the options props")
      );
      result[key] = props[key];
    } else if (!result[key]) {
      result[key] = props[key];
    }
  }
  return result;
};

var findRealParent = function (firstVueParent) {
  var found = false;
  while (firstVueParent && !found) {
    if (firstVueParent.mapObject === undefined) {
      firstVueParent = firstVueParent.$parent;
    } else {
      found = true;
    }
  }
  return firstVueParent;
};

var Layer = {
  props: {
    pane: {
      type: String,
      default: 'overlayPane',
    },
    attribution: {
      type: String,
      default: null,
      custom: true,
    },
    name: {
      type: String,
      custom: true,
      default: undefined,
    },
    layerType: {
      type: String,
      custom: true,
      default: undefined,
    },
    visible: {
      type: Boolean,
      custom: true,
      default: true,
    },
  },
  mounted: function mounted() {
    this.layerOptions = {
      attribution: this.attribution,
      pane: this.pane,
    };
  },
  beforeDestroy: function beforeDestroy() {
    this.unbindPopup();
    this.unbindTooltip();
    this.parentContainer.removeLayer(this);
  },
  methods: {
    setAttribution: function setAttribution(val, old) {
      var attributionControl = this.$parent.mapObject.attributionControl;
      attributionControl.removeAttribution(old).addAttribution(val);
    },
    setName: function setName() {
      this.parentContainer.removeLayer(this);
      if (this.visible) {
        this.parentContainer.addLayer(this);
      }
    },
    setLayerType: function setLayerType() {
      this.parentContainer.removeLayer(this);
      if (this.visible) {
        this.parentContainer.addLayer(this);
      }
    },
    setVisible: function setVisible(isVisible) {
      if (this.mapObject) {
        if (isVisible) {
          this.parentContainer.addLayer(this);
        } else {
          if (this.parentContainer.hideLayer) {
            this.parentContainer.hideLayer(this);
          } else {
            this.parentContainer.removeLayer(this);
          }
        }
      }
    },
    unbindTooltip: function unbindTooltip() {
      var tooltip = this.mapObject ? this.mapObject.getTooltip() : null;
      if (tooltip) {
        tooltip.unbindTooltip();
      }
    },
    unbindPopup: function unbindPopup() {
      var popup = this.mapObject ? this.mapObject.getPopup() : null;
      if (popup) {
        popup.unbindPopup();
      }
    },
    updateVisibleProp: function updateVisibleProp(value) {
      /**
       * Triggers when the visible prop needs to be updated
       * @type {boolean}
       * @property {boolean} value - value of the visible property
       */
      this.$emit('update:visible', value);
    },
  },
};

var LayerGroup = {
  mixins: [Layer],
  mounted: function mounted () {
    this.layerGroupOptions = this.layerOptions;
  },
  methods: {
    addLayer: function addLayer (layer, alreadyAdded) {
      if (!alreadyAdded) {
        this.mapObject.addLayer(layer.mapObject);
      }
      this.parentContainer.addLayer(layer, true);
    },
    removeLayer: function removeLayer (layer, alreadyRemoved) {
      if (!alreadyRemoved) {
        this.mapObject.removeLayer(layer.mapObject);
      }
      this.parentContainer.removeLayer(layer, true);
    }
  }
};

var Options = {
  props: {
    /**
     * Leaflet options to pass to the component constructor
     */
    options: {
      type: Object,
      default: function () { return ({}); }
    }
  }
};

/**
 * Easily display a geo-json on the map
 */
var script = {
  name: 'LGeoJson',
  mixins: [LayerGroup, Options],
  props: {
    geojson: {
      type: [Object, Array],
      custom: true,
      default: function () { return ({}); },
    },
    options: {
      type: Object,
      custom: true,
      default: function () { return ({}); },
    },
    optionsStyle: {
      type: [Object, Function],
      custom: true,
      default: null,
    },
  },
  computed: {
    mergedOptions: function mergedOptions() {
      return optionsMerger(
        Object.assign({}, this.layerGroupOptions,
          {style: this.optionsStyle}),
        this
      );
    },
  },
  mounted: function mounted() {
    var this$1 = this;

    this.mapObject = (0,leaflet__WEBPACK_IMPORTED_MODULE_0__.geoJSON)(this.geojson, this.mergedOptions);
    leaflet__WEBPACK_IMPORTED_MODULE_0__.DomEvent.on(this.mapObject, this.$listeners);
    propsBinder(this, this.mapObject, this.$options.props);
    this.parentContainer = findRealParent(this.$parent);
    this.parentContainer.addLayer(this, !this.visible);
    this.$nextTick(function () {
      /**
       * Triggers when the component is ready
       * @type {object}
       * @property {object} mapObject - reference to leaflet map object
       */
      this$1.$emit('ready', this$1.mapObject);
    });
  },
  beforeDestroy: function beforeDestroy() {
    this.parentContainer.mapObject.removeLayer(this.mapObject);
  },
  methods: {
    setGeojson: function setGeojson(newVal) {
      this.mapObject.clearLayers();
      this.mapObject.addData(newVal);
    },
    getGeoJSONData: function getGeoJSONData() {
      return this.mapObject.toGeoJSON();
    },
    getBounds: function getBounds() {
      return this.mapObject.getBounds();
    },
    setOptions: function setOptions$1(newVal, oldVal) {
      this.mapObject.clearLayers();
      (0,leaflet__WEBPACK_IMPORTED_MODULE_0__.setOptions)(this.mapObject, this.mergedOptions);
      this.mapObject.addData(this.geojson);
    },
    setOptionsStyle: function setOptionsStyle(newVal, oldVal) {
      this.mapObject.setStyle(newVal);
    },
  },
  render: function render() {
    return null;
  },
};

function normalizeComponent(template, style, script, scopeId, isFunctionalTemplate, moduleIdentifier /* server only */, shadowMode, createInjector, createInjectorSSR, createInjectorShadow) {
    if (typeof shadowMode !== 'boolean') {
        createInjectorSSR = createInjector;
        createInjector = shadowMode;
        shadowMode = false;
    }
    // Vue.extend constructor export interop.
    var options = typeof script === 'function' ? script.options : script;
    // render functions
    if (template && template.render) {
        options.render = template.render;
        options.staticRenderFns = template.staticRenderFns;
        options._compiled = true;
        // functional template
        if (isFunctionalTemplate) {
            options.functional = true;
        }
    }
    // scopedId
    if (scopeId) {
        options._scopeId = scopeId;
    }
    var hook;
    if (moduleIdentifier) {
        // server build
        hook = function (context) {
            // 2.3 injection
            context =
                context || // cached call
                    (this.$vnode && this.$vnode.ssrContext) || // stateful
                    (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext); // functional
            // 2.2 with runInNewContext: true
            if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
                context = __VUE_SSR_CONTEXT__;
            }
            // inject component styles
            if (style) {
                style.call(this, createInjectorSSR(context));
            }
            // register component module identifier for async chunk inference
            if (context && context._registeredComponents) {
                context._registeredComponents.add(moduleIdentifier);
            }
        };
        // used by ssr in case component is cached and beforeCreate
        // never gets called
        options._ssrRegister = hook;
    }
    else if (style) {
        hook = shadowMode
            ? function (context) {
                style.call(this, createInjectorShadow(context, this.$root.$options.shadowRoot));
            }
            : function (context) {
                style.call(this, createInjector(context));
            };
    }
    if (hook) {
        if (options.functional) {
            // register for functional component in vue file
            var originalRender = options.render;
            options.render = function renderWithStyleInjection(h, context) {
                hook.call(context);
                return originalRender(h, context);
            };
        }
        else {
            // inject component registration as beforeCreate hook
            var existing = options.beforeCreate;
            options.beforeCreate = existing ? [].concat(existing, hook) : [hook];
        }
    }
    return script;
}

/* script */
var __vue_script__ = script;

/* template */

  /* style */
  var __vue_inject_styles__ = undefined;
  /* scoped */
  var __vue_scope_id__ = undefined;
  /* module identifier */
  var __vue_module_identifier__ = undefined;
  /* functional template */
  var __vue_is_functional_template__ = undefined;
  /* style inject */
  
  /* style inject SSR */
  
  /* style inject shadow dom */
  

  
  var __vue_component__ = /*#__PURE__*/normalizeComponent(
    {},
    __vue_inject_styles__,
    __vue_script__,
    __vue_scope_id__,
    __vue_is_functional_template__,
    __vue_module_identifier__,
    false,
    undefined,
    undefined,
    undefined
  );

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__vue_component__);


/***/ }),

/***/ "./node_modules/vue2-leaflet/dist/components/LIcon.js":
/*!************************************************************!*\
  !*** ./node_modules/vue2-leaflet/dist/components/LIcon.js ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var leaflet__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! leaflet */ "./node_modules/leaflet/dist/leaflet-src.js");
/* harmony import */ var leaflet__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(leaflet__WEBPACK_IMPORTED_MODULE_0__);


var capitalizeFirstLetter = function (string) {
  if (!string || typeof string.charAt !== 'function') {
    return string;
  }
  return string.charAt(0).toUpperCase() + string.slice(1);
};

var propsBinder = function (vueElement, leafletElement, props, options) {
  var loop = function ( key ) {
    var setMethodName = 'set' + capitalizeFirstLetter(key);
    var deepValue =
      props[key].type === Object ||
      props[key].type === Array ||
      Array.isArray(props[key].type);
    if (props[key].custom && vueElement[setMethodName]) {
      vueElement.$watch(
        key,
        function (newVal, oldVal) {
          vueElement[setMethodName](newVal, oldVal);
        },
        {
          deep: deepValue,
        }
      );
    } else if (setMethodName === 'setOptions') {
      vueElement.$watch(
        key,
        function (newVal, oldVal) {
          (0,leaflet__WEBPACK_IMPORTED_MODULE_0__.setOptions)(leafletElement, newVal);
        },
        {
          deep: deepValue,
        }
      );
    } else if (leafletElement[setMethodName]) {
      vueElement.$watch(
        key,
        function (newVal, oldVal) {
          leafletElement[setMethodName](newVal);
        },
        {
          deep: deepValue,
        }
      );
    }
  };

  for (var key in props) loop( key );
};

var collectionCleaner = function (options) {
  var result = {};
  for (var key in options) {
    var value = options[key];
    if (value !== null && value !== undefined) {
      result[key] = value;
    }
  }
  return result;
};

var optionsMerger = function (props, instance) {
  var options =
    instance.options && instance.options.constructor === Object
      ? instance.options
      : {};
  props = props && props.constructor === Object ? props : {};
  var result = collectionCleaner(options);
  props = collectionCleaner(props);
  var defaultProps = instance.$options.props;
  for (var key in props) {
    var def = defaultProps[key]
      ? defaultProps[key].default &&
        typeof defaultProps[key].default === 'function'
        ? defaultProps[key].default.call()
        : defaultProps[key].default
      : Symbol('unique');
    var isEqual = false;
    if (Array.isArray(def)) {
      isEqual = JSON.stringify(def) === JSON.stringify(props[key]);
    } else {
      isEqual = def === props[key];
    }
    if (result[key] && !isEqual) {
      console.warn(
        (key + " props is overriding the value passed in the options props")
      );
      result[key] = props[key];
    } else if (!result[key]) {
      result[key] = props[key];
    }
  }
  return result;
};

var findRealParent = function (firstVueParent) {
  var found = false;
  while (firstVueParent && !found) {
    if (firstVueParent.mapObject === undefined) {
      firstVueParent = firstVueParent.$parent;
    } else {
      found = true;
    }
  }
  return firstVueParent;
};

//

/**
 * Easy and reactive way to configure the icon of a marker
 */
var script = {
  name: 'LIcon',
  props: {
    iconUrl: {
      type: String,
      custom: true,
      default: null,
    },
    iconRetinaUrl: {
      type: String,
      custom: true,
      default: null,
    },
    iconSize: {
      type: [Object, Array],
      custom: true,
      default: null,
    },
    iconAnchor: {
      type: [Object, Array],
      custom: true,
      default: null,
    },
    popupAnchor: {
      type: [Object, Array],
      custom: true,
      default: function () { return [0, 0]; },
    },
    tooltipAnchor: {
      type: [Object, Array],
      custom: true,
      default: function () { return [0, 0]; },
    },
    shadowUrl: {
      type: String,
      custom: true,
      default: null,
    },
    shadowRetinaUrl: {
      type: String,
      custom: true,
      default: null,
    },
    shadowSize: {
      type: [Object, Array],
      custom: true,
      default: null,
    },
    shadowAnchor: {
      type: [Object, Array],
      custom: true,
      default: null,
    },
    bgPos: {
      type: [Object, Array],
      custom: true,
      default: function () { return [0, 0]; },
    },
    className: {
      type: String,
      custom: true,
      default: '',
    },
    options: {
      type: Object,
      custom: true,
      default: function () { return ({}); },
    },
  },

  data: function data() {
    return {
      parentContainer: null,
      observer: null,
      recreationNeeded: false,
      swapHtmlNeeded: false,
    };
  },

  mounted: function mounted() {
    var this$1 = this;

    this.parentContainer = findRealParent(this.$parent);
    if (!this.parentContainer) {
      throw new Error('No parent container with mapObject found for LIcon');
    }
    propsBinder(this, this.parentContainer.mapObject, this.$options.props);

    this.observer = new MutationObserver(function () {
      this$1.scheduleHtmlSwap();
    });
    this.observer.observe(this.$el, {
      attributes: true,
      childList: true,
      characterData: true,
      subtree: true,
    });
    this.scheduleCreateIcon();
  },

  beforeDestroy: function beforeDestroy() {
    if (this.parentContainer.mapObject) {
      this.parentContainer.mapObject.setIcon(this.parentContainer.$props.icon);
    }

    this.observer.disconnect();
  },

  methods: {
    scheduleCreateIcon: function scheduleCreateIcon() {
      this.recreationNeeded = true;

      this.$nextTick(this.createIcon);
    },

    scheduleHtmlSwap: function scheduleHtmlSwap() {
      this.htmlSwapNeeded = true;

      this.$nextTick(this.createIcon);
    },

    createIcon: function createIcon() {
      // If only html of a divIcon changed, we can just replace the DOM without the need of recreating the whole icon
      if (
        this.htmlSwapNeeded &&
        !this.recreationNeeded &&
        this.iconObject &&
        this.parentContainer.mapObject.getElement()
      ) {
        this.parentContainer.mapObject.getElement().innerHTML = this.$el.innerHTML;

        this.htmlSwapNeeded = false;
        return;
      }

      if (!this.recreationNeeded) {
        return;
      }

      if (this.iconObject) {
        leaflet__WEBPACK_IMPORTED_MODULE_0__.DomEvent.off(this.iconObject, this.$listeners);
      }

      var options = optionsMerger(
        {
          iconUrl: this.iconUrl,
          iconRetinaUrl: this.iconRetinaUrl,
          iconSize: this.iconSize,
          iconAnchor: this.iconAnchor,
          popupAnchor: this.popupAnchor,
          tooltipAnchor: this.tooltipAnchor,
          shadowUrl: this.shadowUrl,
          shadowRetinaUrl: this.shadowRetinaUrl,
          shadowSize: this.shadowSize,
          shadowAnchor: this.shadowAnchor,
          bgPos: this.bgPos,
          className: this.className,
          html: this.$el.innerHTML || this.html,
        },
        this
      );

      if (options.html) {
        this.iconObject = (0,leaflet__WEBPACK_IMPORTED_MODULE_0__.divIcon)(options);
      } else {
        this.iconObject = (0,leaflet__WEBPACK_IMPORTED_MODULE_0__.icon)(options);
      }

      leaflet__WEBPACK_IMPORTED_MODULE_0__.DomEvent.on(this.iconObject, this.$listeners);

      this.parentContainer.mapObject.setIcon(this.iconObject);

      this.recreationNeeded = false;
      this.htmlSwapNeeded = false;
    },

    setIconUrl: function setIconUrl() {
      this.scheduleCreateIcon();
    },
    setIconRetinaUrl: function setIconRetinaUrl() {
      this.scheduleCreateIcon();
    },
    setIconSize: function setIconSize() {
      this.scheduleCreateIcon();
    },
    setIconAnchor: function setIconAnchor() {
      this.scheduleCreateIcon();
    },
    setPopupAnchor: function setPopupAnchor() {
      this.scheduleCreateIcon();
    },
    setTooltipAnchor: function setTooltipAnchor() {
      this.scheduleCreateIcon();
    },
    setShadowUrl: function setShadowUrl() {
      this.scheduleCreateIcon();
    },
    setShadowRetinaUrl: function setShadowRetinaUrl() {
      this.scheduleCreateIcon();
    },
    setShadowAnchor: function setShadowAnchor() {
      this.scheduleCreateIcon();
    },
    setBgPos: function setBgPos() {
      this.scheduleCreateIcon();
    },
    setClassName: function setClassName() {
      this.scheduleCreateIcon();
    },
    setHtml: function setHtml() {
      this.scheduleCreateIcon();
    },
  },

  render: function render() {
    return null;
  },
};

function normalizeComponent(template, style, script, scopeId, isFunctionalTemplate, moduleIdentifier /* server only */, shadowMode, createInjector, createInjectorSSR, createInjectorShadow) {
    if (typeof shadowMode !== 'boolean') {
        createInjectorSSR = createInjector;
        createInjector = shadowMode;
        shadowMode = false;
    }
    // Vue.extend constructor export interop.
    var options = typeof script === 'function' ? script.options : script;
    // render functions
    if (template && template.render) {
        options.render = template.render;
        options.staticRenderFns = template.staticRenderFns;
        options._compiled = true;
        // functional template
        if (isFunctionalTemplate) {
            options.functional = true;
        }
    }
    // scopedId
    if (scopeId) {
        options._scopeId = scopeId;
    }
    var hook;
    if (moduleIdentifier) {
        // server build
        hook = function (context) {
            // 2.3 injection
            context =
                context || // cached call
                    (this.$vnode && this.$vnode.ssrContext) || // stateful
                    (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext); // functional
            // 2.2 with runInNewContext: true
            if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
                context = __VUE_SSR_CONTEXT__;
            }
            // inject component styles
            if (style) {
                style.call(this, createInjectorSSR(context));
            }
            // register component module identifier for async chunk inference
            if (context && context._registeredComponents) {
                context._registeredComponents.add(moduleIdentifier);
            }
        };
        // used by ssr in case component is cached and beforeCreate
        // never gets called
        options._ssrRegister = hook;
    }
    else if (style) {
        hook = shadowMode
            ? function (context) {
                style.call(this, createInjectorShadow(context, this.$root.$options.shadowRoot));
            }
            : function (context) {
                style.call(this, createInjector(context));
            };
    }
    if (hook) {
        if (options.functional) {
            // register for functional component in vue file
            var originalRender = options.render;
            options.render = function renderWithStyleInjection(h, context) {
                hook.call(context);
                return originalRender(h, context);
            };
        }
        else {
            // inject component registration as beforeCreate hook
            var existing = options.beforeCreate;
            options.beforeCreate = existing ? [].concat(existing, hook) : [hook];
        }
    }
    return script;
}

/* script */
var __vue_script__ = script;

/* template */
var __vue_render__ = function () {var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c('div',[_vm._t("default")],2)};
var __vue_staticRenderFns__ = [];

  /* style */
  var __vue_inject_styles__ = undefined;
  /* scoped */
  var __vue_scope_id__ = undefined;
  /* module identifier */
  var __vue_module_identifier__ = undefined;
  /* functional template */
  var __vue_is_functional_template__ = false;
  /* style inject */
  
  /* style inject SSR */
  
  /* style inject shadow dom */
  

  
  var __vue_component__ = /*#__PURE__*/normalizeComponent(
    { render: __vue_render__, staticRenderFns: __vue_staticRenderFns__ },
    __vue_inject_styles__,
    __vue_script__,
    __vue_scope_id__,
    __vue_is_functional_template__,
    __vue_module_identifier__,
    false,
    undefined,
    undefined,
    undefined
  );

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__vue_component__);


/***/ }),

/***/ "./node_modules/vue2-leaflet/dist/components/LPopup.js":
/*!*************************************************************!*\
  !*** ./node_modules/vue2-leaflet/dist/components/LPopup.js ***!
  \*************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var leaflet__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! leaflet */ "./node_modules/leaflet/dist/leaflet-src.js");
/* harmony import */ var leaflet__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(leaflet__WEBPACK_IMPORTED_MODULE_0__);


var capitalizeFirstLetter = function (string) {
  if (!string || typeof string.charAt !== 'function') {
    return string;
  }
  return string.charAt(0).toUpperCase() + string.slice(1);
};

var propsBinder = function (vueElement, leafletElement, props, options) {
  var loop = function ( key ) {
    var setMethodName = 'set' + capitalizeFirstLetter(key);
    var deepValue =
      props[key].type === Object ||
      props[key].type === Array ||
      Array.isArray(props[key].type);
    if (props[key].custom && vueElement[setMethodName]) {
      vueElement.$watch(
        key,
        function (newVal, oldVal) {
          vueElement[setMethodName](newVal, oldVal);
        },
        {
          deep: deepValue,
        }
      );
    } else if (setMethodName === 'setOptions') {
      vueElement.$watch(
        key,
        function (newVal, oldVal) {
          (0,leaflet__WEBPACK_IMPORTED_MODULE_0__.setOptions)(leafletElement, newVal);
        },
        {
          deep: deepValue,
        }
      );
    } else if (leafletElement[setMethodName]) {
      vueElement.$watch(
        key,
        function (newVal, oldVal) {
          leafletElement[setMethodName](newVal);
        },
        {
          deep: deepValue,
        }
      );
    }
  };

  for (var key in props) loop( key );
};

var collectionCleaner = function (options) {
  var result = {};
  for (var key in options) {
    var value = options[key];
    if (value !== null && value !== undefined) {
      result[key] = value;
    }
  }
  return result;
};

var optionsMerger = function (props, instance) {
  var options =
    instance.options && instance.options.constructor === Object
      ? instance.options
      : {};
  props = props && props.constructor === Object ? props : {};
  var result = collectionCleaner(options);
  props = collectionCleaner(props);
  var defaultProps = instance.$options.props;
  for (var key in props) {
    var def = defaultProps[key]
      ? defaultProps[key].default &&
        typeof defaultProps[key].default === 'function'
        ? defaultProps[key].default.call()
        : defaultProps[key].default
      : Symbol('unique');
    var isEqual = false;
    if (Array.isArray(def)) {
      isEqual = JSON.stringify(def) === JSON.stringify(props[key]);
    } else {
      isEqual = def === props[key];
    }
    if (result[key] && !isEqual) {
      console.warn(
        (key + " props is overriding the value passed in the options props")
      );
      result[key] = props[key];
    } else if (!result[key]) {
      result[key] = props[key];
    }
  }
  return result;
};

var findRealParent = function (firstVueParent) {
  var found = false;
  while (firstVueParent && !found) {
    if (firstVueParent.mapObject === undefined) {
      firstVueParent = firstVueParent.$parent;
    } else {
      found = true;
    }
  }
  return firstVueParent;
};

var Popper = {
  props: {
    content: {
      type: String,
      default: null,
      custom: true
    }
  },
  mounted: function mounted () {
    this.popperOptions = {};
  },
  methods: {
    setContent: function setContent (newVal) {
      if (this.mapObject && newVal !== null && newVal !== undefined) {
        this.mapObject.setContent(newVal);
      }
    }
  },
  render: function render (h) {
    if (this.$slots.default) {
      return h('div', this.$slots.default);
    }
    return null;
  }
};

var Options = {
  props: {
    /**
     * Leaflet options to pass to the component constructor
     */
    options: {
      type: Object,
      default: function () { return ({}); }
    }
  }
};

/**
 * Display a popup on the map
 */
var script = {
  name: 'LPopup',
  mixins: [Popper, Options],
  props: {
    latLng: {
      type: [Object, Array],
      default: function () { return []; },
    },
  },
  mounted: function mounted() {
    var this$1 = this;

    var options = optionsMerger(this.popperOptions, this);
    this.mapObject = (0,leaflet__WEBPACK_IMPORTED_MODULE_0__.popup)(options);
    if (this.latLng !== undefined) {
      this.mapObject.setLatLng(this.latLng);
    }
    leaflet__WEBPACK_IMPORTED_MODULE_0__.DomEvent.on(this.mapObject, this.$listeners);
    propsBinder(this, this.mapObject, this.$options.props);
    this.mapObject.setContent(this.content || this.$el);
    this.parentContainer = findRealParent(this.$parent);
    this.parentContainer.mapObject.bindPopup(this.mapObject);
    this.$nextTick(function () {
      /**
       * Triggers when the component is ready
       * @type {object}
       * @property {object} mapObject - reference to leaflet map object
       */
      this$1.$emit('ready', this$1.mapObject);
    });
  },
  beforeDestroy: function beforeDestroy() {
    if (this.parentContainer) {
      if (this.parentContainer.unbindPopup) {
        this.parentContainer.unbindPopup();
      } else if (
        this.parentContainer.mapObject &&
        this.parentContainer.mapObject.unbindPopup
      ) {
        this.parentContainer.mapObject.unbindPopup();
      }
    }
  },
};

function normalizeComponent(template, style, script, scopeId, isFunctionalTemplate, moduleIdentifier /* server only */, shadowMode, createInjector, createInjectorSSR, createInjectorShadow) {
    if (typeof shadowMode !== 'boolean') {
        createInjectorSSR = createInjector;
        createInjector = shadowMode;
        shadowMode = false;
    }
    // Vue.extend constructor export interop.
    var options = typeof script === 'function' ? script.options : script;
    // render functions
    if (template && template.render) {
        options.render = template.render;
        options.staticRenderFns = template.staticRenderFns;
        options._compiled = true;
        // functional template
        if (isFunctionalTemplate) {
            options.functional = true;
        }
    }
    // scopedId
    if (scopeId) {
        options._scopeId = scopeId;
    }
    var hook;
    if (moduleIdentifier) {
        // server build
        hook = function (context) {
            // 2.3 injection
            context =
                context || // cached call
                    (this.$vnode && this.$vnode.ssrContext) || // stateful
                    (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext); // functional
            // 2.2 with runInNewContext: true
            if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
                context = __VUE_SSR_CONTEXT__;
            }
            // inject component styles
            if (style) {
                style.call(this, createInjectorSSR(context));
            }
            // register component module identifier for async chunk inference
            if (context && context._registeredComponents) {
                context._registeredComponents.add(moduleIdentifier);
            }
        };
        // used by ssr in case component is cached and beforeCreate
        // never gets called
        options._ssrRegister = hook;
    }
    else if (style) {
        hook = shadowMode
            ? function (context) {
                style.call(this, createInjectorShadow(context, this.$root.$options.shadowRoot));
            }
            : function (context) {
                style.call(this, createInjector(context));
            };
    }
    if (hook) {
        if (options.functional) {
            // register for functional component in vue file
            var originalRender = options.render;
            options.render = function renderWithStyleInjection(h, context) {
                hook.call(context);
                return originalRender(h, context);
            };
        }
        else {
            // inject component registration as beforeCreate hook
            var existing = options.beforeCreate;
            options.beforeCreate = existing ? [].concat(existing, hook) : [hook];
        }
    }
    return script;
}

/* script */
var __vue_script__ = script;

/* template */

  /* style */
  var __vue_inject_styles__ = undefined;
  /* scoped */
  var __vue_scope_id__ = undefined;
  /* module identifier */
  var __vue_module_identifier__ = undefined;
  /* functional template */
  var __vue_is_functional_template__ = undefined;
  /* style inject */
  
  /* style inject SSR */
  
  /* style inject shadow dom */
  

  
  var __vue_component__ = /*#__PURE__*/normalizeComponent(
    {},
    __vue_inject_styles__,
    __vue_script__,
    __vue_scope_id__,
    __vue_is_functional_template__,
    __vue_module_identifier__,
    false,
    undefined,
    undefined,
    undefined
  );

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__vue_component__);


/***/ })

}]);