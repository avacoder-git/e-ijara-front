var snoopy = function()
{
    !function(){function t(t){var i=[t.latLng([90,180]),t.latLng([90,-180]),t.latLng([-90,-180]),t.latLng([-90,180])];if(t.version<"1.0.0")t.extend(t.Polygon.prototype,{initialize:function(n,o){if(i=o.worldLatLngs?o.worldLatLngs:i,o&&o.invert&&!o.invertMultiPolygon){var s=[];s.push(i),s.push(n[0]),n=s}t.Polyline.prototype.initialize.call(this,n,o),this._initWithHoles(n)},getBounds:function(){return this.options.invert?new t.LatLngBounds(this._holes):new t.LatLngBounds(this.getLatLngs())}}),t.extend(t.MultiPolygon.prototype,{initialize:function(t,n){if(i=n.worldLatLngs?n.worldLatLngs:i,this._layers={},this._options=n,n.invert){n.invertMultiPolygon=!0;var o=[];o.push(i);for(var s in t)o.push(t[s][0]);t=[o]}this.setLatLngs(t)}});else{var o={toGeoJSON:t.Polygon.prototype.toGeoJSON};t.extend(t.Polygon.prototype,{_setLatLngs:function(o){if(this._originalLatLngs=o,n(this._originalLatLngs)&&(this._originalLatLngs=[this._originalLatLngs]),this.options.invert){i=this.options.worldLatLngs?this.options.worldLatLngs:i;var s=[];s.push(i);for(var e in o)s.push(o[e]);o=[s]}t.Polyline.prototype._setLatLngs.call(this,o)},getBounds:function(){return this._originalLatLngs?new t.LatLngBounds(this._originalLatLngs):new t.LatLngBounds(this.getLatLngs())},getLatLngs:function(){return this._originalLatLngs},toGeoJSON:function(i){if(!this.options.invert)return o.toGeoJSON.call(this,i);var s=!n(this._originalLatLngs),e=s&&!n(this._originalLatLngs[0]),a=t.GeoJSON.latLngsToCoords(this._originalLatLngs,e?2:s?1:0,!0,i);return s||(a=[a]),t.GeoJSON.getFeature(this,{type:(e?"Multi":"")+"Polygon",coordinates:a})}})}}var n=L.LineUtil.isFlat?L.LineUtil.isFlat:L.LineUtil._flat;"function"==typeof define&&define.amd?define(["leaflet"],function(n){t(n)}):t(L)}();
}

export default snoopy