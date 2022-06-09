<template>
    <div class="bg-gray-100" style="padding-top: 100px">

        <div class="d-flex dashboard">
            <Sidebar></Sidebar>

            <div class="card">

                <h1>Mening arizalarim</h1>

                <table class="table border-0">
                    <thead>
                    <tr>
                        <th><span>Viloyat</span></th>
                        <th><span>Tuman</span></th>
                        <th><span>Ijara maqsadi</span></th>
                        <th><span>Ijara muddati</span></th>
                        <th><span>Vaqti</span></th>
                        <th><span>Xolati</span></th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td><span>Viloyat</span></td>
                        <td><span>Tuman</span></td>
                        <td><span>Ijara maqsadi</span></td>
                        <td><span>Ijara muddati</span></td>
                        <td><span>Vaqti</span></td>
                        <td><span>Xolati</span></td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>




    </div>
</template>

<script>

import Sidebar from "../Sidebar";


export default {
    name: "Dashboard",
    components: {Sidebar},
}
</script>

<style scoped>

</style>
