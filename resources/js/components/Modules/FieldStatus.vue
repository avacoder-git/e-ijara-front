<template>
    <div class="container-fluid section-3">
        <div class="row">
            <div class="col-12">
                <div class="map">
                    <h1>Hududlar bo’yicha yerlarning holati</h1>

                    <div class="list">
                        <ul class="nav nav-tabs" id="mapList" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="map-tab" data-toggle="tab" href="#map" role="tab"
                                   aria-controls="home" aria-selected="true">Bo'sh yerlar</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="map-table-tab" data-toggle="tab" href="#map-table"
                                   role="tab"
                                   aria-controls="profile" aria-selected="false">Loyihalashda</a>
                            </li>
                            <li class="date-list">
                                <div class="date" >{{ moment  }} holatiga ko’ra</div>
                            </li>
                        </ul>
                        <div class="tab-content" id="mapListContent">
                            <FieldStatusMap ref="map"></FieldStatusMap>
                            <FieldStatusTable></FieldStatusTable>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
import FieldStatusMap from "./FieldStatusMap";
import FieldStatusTable from "./FieldStatusTable";
import moment from "moment";


export default {
    name: "FieldStatus",
    components: {FieldStatusTable, FieldStatusMap},



    computed:{
        moment: function () {
            return moment().locale('uz').format('LLL');
        }

    }

}
</script>

<style scoped>

</style>
