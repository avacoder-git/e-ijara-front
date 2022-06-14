<template>
    <form name="eri_form" :action="route" id="eri_form" method="post">
        <div class="alert alert-danger" v-if="isError" id="error" role="alert">
            {{ errorText }}
        </div>
        <div class="form-group mb-2">
            <label for="key">Kalitni tanlang</label>
            <select name="key" id="key" v-model="selectedKey" class="form-control bordered">
            </select>
        </div>
        <input type="hidden" name="_token" v-bind:value="csrf">


        <div hidden id="keyId" class="none"></div>

        <input type="hidden" v-model="eri_fullname" id="eri_fullname">
        <input type="hidden" v-model="eri_inn" id="eri_inn">
        <input type="hidden" v-model="eri_pinfl" id="eri_pinfl">
        <input type="hidden" v-model="eri_sn" id="eri_sn">
        <textarea hidden class="none" v-model="eri_data" id="eri_data">authorization</textarea>
        <textarea hidden class="none" v-model="eri_hash" id="eri_hash"></textarea>

        <div class="text-center">
            <button class="btn btn-check1" id="eri_sign" @click.prevent="sign" type="button">Kirish</button>
            <button class="btn btn-check2 mt-2" @click.prevent="uiLoadKeys" type="button">Yangilash</button>
        </div>
    </form>
</template>

<script>

import EIMZOClient from "../../../../public/assets/js/e-imzo-client";
import Auth from "../../Auth";
export default {
    name: "EIMZO",
    data() {
        return {
            EIMZO_MAJOR: 3,
            EIMZO_MINOR: 37,
            errorCAPIWS: 'Ошибка соединения с E-IMZO. Возможно у вас не установлен модуль E-IMZO или Браузер E-IMZO.',
            errorBrowserWS: 'Браузер не поддерживает технологию WebSocket. Установите последнюю версию браузера.',
            errorUpdateApp: 'ВНИМАНИЕ !!! Установите новую версию приложения E-IMZO или Браузера E-IMZO.<br /><a href="https://e-imzo.uz/main/downloads/" role="button">Скачать ПО E-IMZO</a>',
            errorWrongPassword: 'Пароль неверный.',
            isError: false,
            errorText: null,
            keys: [],
            selectedKey: null,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            eri_fullname: null,
            eri_inn: null,
            eri_pinfl: null,
            eri_sn: null,
            eri_data: 'authorization',
            eri_hash: 'authorization',

        }
    },

    computed:
        {
            route() {
                return window.location.origin + ""
            }
        },

    methods: {
        AppLoad() {
            EIMZOClient.API_KEYS = [
                'localhost', '96D0C1491615C82B9A54D9989779DF825B690748224C2B04F500F370D51827CE2644D8D4A82C18184D73AB8530BB8ED537269603F61DB0D03D2104ABF789970B',
                '127.0.0.1', 'A7BCFA5D490B351BE0754130DF03A068F855DB4333D43921125B9CF2670EF6A40370C646B90401955E1F7BC9CDBF59CE0B2C5467D820BE189C845D0B79CFC96F',
                'null', 'E0A205EC4E7B78BBB56AFF83A733A1BB9FD39D562E67978CC5E7D73B0951DB1954595A20672A63332535E13CC6EC1E1FC8857BB09E0855D7E76E411B6FA16E9D',
                'reestr.agro.uz', 'C55F15788BE5DD04DCC42FEEEAB06858F2E05F0CEA950A7AEBE724741B1F164D25E515CC1FC5A30596D784F6C6E205B5D224A682818D3C332EA09C4B57777792'
            ];

            var Eimzo = this

            EIMZOClient.checkVersion(function (major, minor) {
                var newVersion = 3 * 100 + 37;
                var installedVersion = parseInt(major) * 100 + parseInt(minor);
                if (installedVersion < newVersion) {
                    Eimzo.isError = true
                    this.$parent.errorText = this.$parent.errorUpdateApp
                } else {
                    EIMZOClient.installApiKeys(function () {
                        Eimzo.uiLoadKeys()
                    }, function (e, r) {
                        Eimzo.isError = true
                        if (r)
                            Eimzo.errorText = r
                        else
                            Eimzo.errorText = Eimzo.errorCAPIWS
                    });
                }
            }, function (e, r) {
                Eimzo.isError = true
                if (r)
                    Eimzo.errorText = r
                else
                    Eimzo.errorText = Eimzo.errorCAPIWS
            });
        },

        uiLoadKeys() {
            var dates = {
                convert: function (d) {
                    return (
                        d.constructor === Date ? d :
                            d.constructor === Array ? new Date(d[0], d[1], d[2]) :
                                d.constructor === Number ? new Date(d) :
                                    d.constructor === String ? new Date(d) :
                                        typeof d === "object" ? new Date(d.year, d.month, d.date) :
                                            NaN
                    );
                },
                compare: function (a, b) {
                    return (
                        isFinite(a = this.convert(a).valueOf()) &&
                        isFinite(b = this.convert(b).valueOf()) ?
                            (a > b) - (a < b) :
                            NaN
                    );
                },
                inRange: function (d, start, end) {
                    return (
                        isFinite(d = this.convert(d).valueOf()) &&
                        isFinite(start = this.convert(start).valueOf()) &&
                        isFinite(end = this.convert(end).valueOf()) ?
                            start <= d && d <= end :
                            NaN
                    );
                }
            };

            var uiCreateItem = function (itmkey, vo) {
                var now = new Date();
                vo.expired = dates.compare(now, vo.validTo) > 0;
                var itm = document.createElement("option");
                itm.value = itmkey;
                itm.text = vo.CN;
                if (!vo.expired) {

                } else {
                    itm.style.color = 'gray';
                    itm.text = itm.text + ' (срок истек)';
                    itm.setAttribute('disabled', "disabled");
                }
                itm.setAttribute('vo', JSON.stringify(vo));
                itm.setAttribute('id', itmkey);
                return itm;
            }
            var Eimzo = this

            EIMZOClient.listAllUserKeys(function (o, i) {
                var itemId = "itm-" + o.serialNumber + "-" + i;
                return itemId;
            }, function (itemId, v) {
                return uiCreateItem(itemId, v);
            }, function (items, firstId) {
                Eimzo.isError = false

                for (let i = 0; i < items.length; i++) {
                    $("#key").append(items[i])
                }
            }, function (e, r) {
                Eimzo.isError = true
                if (r)
                    Eimzo.errorText = r
                else
                    console.log(e)
            });

        },
        uiCreateItem(itmkey, vo) {
            var now = new Date();
            vo.expired = dates.compare(now, vo.validTo) > 0;
            var itm = document.createElement("option");
            itm.value = itmkey;
            itm.text = vo.CN;
            if (!vo.expired) {

            } else {
                itm.style.color = 'gray';
                itm.text = itm.text + ' (срок истек)';
                itm.setAttribute('disabled', "disabled");
            }
            itm.setAttribute('vo', JSON.stringify(vo));
            itm.setAttribute('id', itmkey);
            return itm;
        },
        sendAuth() {
            axios.post("/api/auth/eri", {
                eri_fullname: this.eri_fullname,
                eri_inn: this.eri_inn,
                eri_pinfl: this.eri_pinfl,
                eri_data: this.eri_data,
                eri_hash: this.eri_hash,
                eri_sn: this.eri_sn
            })
                .then(response => {
                    Auth.login(response.data.access_token, response.data.user); //set local storage
                    $('#login-modal').hide()
                    $('.modal-backdrop').remove()
                    $('.modal-open').removeClass('modal-open')
                    this.$router.push({name: "dashboard.application"});
                })
        },


        sign() {
            var itm = $("#key").val()
            if (itm) {
                var id = document.getElementById(itm);
                var vo = JSON.parse(id.getAttribute('vo'));
                var data = this.eri_data;
                var keyId = document.getElementById('keyId').innerHTML;
                var Eimzo = this

                this.eri_fullname = vo.CN;
                this.eri_inn = vo.TIN;
                this.eri_pinfl = vo.PINFL;
                this.eri_sn = vo.serialNumber;

                EIMZOClient.loadKey(vo, function (id) {
                    document.getElementById('keyId').innerHTML = id;
                    EIMZOClient.createPkcs7(id, data, null, function (pkcs7) {
                        Eimzo.eri_hash = pkcs7;
                        document.getElementById('eri_sign').setAttribute('disabled', '');
                        document.getElementById('eri_sign').innerText = "Имзолаш (имзоланди)";
                        // document.getElementById('eri_form').submit();
                        Eimzo.sendAuth()
                    }, function (e, r) {
                        Eimzo.isError = true
                        if (r) {
                            if (r.indexOf("BadPaddingException") != -1) {
                                Eimzo.errorText = Eimzo.errorWrongPassword;
                            } else {
                                Eimzo.errorText = r
                            }
                        } else {
                            document.getElementById('keyId').innerHTML = '';
                            Eimzo.errorText = Eimzo.errorBrowserWS;
                        }
                        if (e)
                            Eimzo.errorText = Eimzo.errorCAPIWS;
                    });
                }, function (e, r) {
                    Eimzo.isError = true
                    if (r) {
                        if (r.indexOf("BadPaddingException") != -1) {
                            Eimzo.errorText = errorWrongPassword
                        } else {
                            Eimzo.errorText = r
                        }
                    } else {
                        Eimzo.errorText = errorBrowserWS;
                    }
                    if (e)
                        Eimzo.errorText = Eimzo.errorCAPIWS;
                });

            }
        },
    },

    mounted() {
        this.AppLoad()
    }


}
</script>

<style scoped>
.btn-check1 {
    background-color: #08705F;
    color: white;
    width: 100%;
    padding: 12px 0 !important;
    border-radius: 8px;
    border: 1px solid #08705F;
}

.btn-check1:hover {
    background-color: white;
    color: #08705F;
}

.btn-check2 {
    background-color: white;
    color: #08705F;
    width: 100%;
    padding: 12px 0 !important;
    border-radius: 8px;
    border: 1px solid #08705F;
}

.btn-check2:hover {
    background-color: #08705;
    color: white;
}


</style>
