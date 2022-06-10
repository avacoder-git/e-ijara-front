<template>
    <div class="bg-gray-100" style="padding-top: 100px">

        <div class="d-flex dashboard">
            <Sidebar></Sidebar>

            <div class="card">

                <h1>Foydalanuvchi ma'lumotlari</h1>


                <div class="form-row">
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleCity" class="">Ismi</label>
                            <input type="text" value="" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleState" class="">Familiyasi</label>
                            <input type="text" value="" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleZip" class="">Otasining ismi</label>
                            <input type="text" value="" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleCity" class="">Passport raqami</label>
                            <input type="text" value="" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleState" class="">Телефон рақами</label>
                            <input  type="text" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleZip" class="">Манзили</label>
                            <input  type="text" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleCity" class="">Login</label>
                            <input id="exampleCity" type="text" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleState" class="">Elektron pochta manzili</label>
                            <input id="exampleState" type="text"  class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="position-relative form-group">
                            <label for="exampleZip" class="">Fuqaro</label>
                            <input id="exampleZip" type="text"
                                   class="form-control" disabled>
                        </div>
                    </div>
                </div>

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


.check-offer{

    margin-top: 20px;
    background: #08705F;
    border-radius: 8px;
    color: white;
    border: 1px solid  #08705F;
    width: 310px;
    text-align: center;
    padding: 12px;
    transition: 0.2s;
    text-decoration: none;

}

.check-offer:hover{

    background: white;
    color: #08705F;
}



</style>
