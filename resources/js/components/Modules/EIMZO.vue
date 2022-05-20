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

        <input type="hidden" name="eri_fullname" id="eri_fullname">
        <input type="hidden" name="eri_inn" id="eri_inn">
        <input type="hidden" name="eri_pinfl" id="eri_pinfl">
        <input type="hidden" name="eri_sn" id="eri_sn">
        <textarea hidden class="none" name="eri_data" id="eri_data">authorization</textarea>
        <textarea hidden class="none" name="eri_hash" id="eri_hash"></textarea>

        <div class="text-center">
            <button class="btn btn-check1" id="eri_sign" @click.prevent="sign" type="button">Kirish</button>
            <button class="btn btn-check2 mt-2" @click.prevent="uiLoadKeys" type="button">Yangilash</button>
        </div>
    </form>
</template>

<script>

import EIMZOClient from "../../../../public/assets/js/e-imzo-client";


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

        }
    },

    computed:
    {
        route()
        {
            return window.location.origin + "/eri/auth"
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
                        if(r)
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
                    // Converts the date in d to a date-object. The input can be:
                    //   a date object: returned without modification
                    //  an array      : Interpreted as [year,month,day]. NOTE: month is 0-11.
                    //   a number     : Interpreted as number of milliseconds
                    //                  since 1 Jan 1970 (a timestamp)
                    //   a string     : Any format supported by the javascript engine, like
                    //                  "YYYY/MM/DD", "MM/DD/YYYY", "Jan 31 2009" etc.
                    //  an object     : Interpreted as an object with year, month and date
                    //                  attributes.  **NOTE** month is 0-11.
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
                    // Compare two dates (could be of any type supported by the convert
                    // function above) and returns:
                    //  -1 : if a < b
                    //   0 : if a = b
                    //   1 : if a > b
                    // NaN : if a or b is an illegal date
                    // NOTE: The code inside isFinite does an assignment (=).
                    return (
                        isFinite(a = this.convert(a).valueOf()) &&
                        isFinite(b = this.convert(b).valueOf()) ?
                            (a > b) - (a < b) :
                            NaN
                    );
                },
                inRange: function (d, start, end) {
                    // Checks if date in d is between dates in start and end.
                    // Returns a boolean or NaN:
                    //    true  : if d is between start and end (inclusive)
                    //    false : if d is before start or after end
                    //    NaN   : if one or more of the dates is illegal.
                    // NOTE: The code inside isFinite does an assignment (=).
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
                if(r)
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
        sign() {
            var itm = $("#key").val()
            if (itm) {
                var id = document.getElementById(itm);
                var vo = JSON.parse(id.getAttribute('vo'));
                var data = document.getElementById('eri_data').value;
                var keyId = document.getElementById('keyId').innerHTML;
                var Eimzo = this
                console.log(vo);

                document.getElementById('eri_fullname').value = vo.CN;
                document.getElementById('eri_inn').value = vo.TIN;
                document.getElementById('eri_pinfl').value = vo.PINFL;
                document.getElementById('eri_sn').value = vo.serialNumber;

                EIMZOClient.loadKey(vo, function (id) {
                    document.getElementById('keyId').innerHTML = id;
                    EIMZOClient.createPkcs7(id, data, null, function (pkcs7) {
                        document.getElementById('eri_hash').value = pkcs7;
                        document.getElementById('eri_sign').setAttribute('disabled', '');
                        document.getElementById('eri_sign').innerText = "Имзолаш (имзоланди)";
                        document.getElementById('eri_form').submit();
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
                            Eimzo.errorText  = errorWrongPassword
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
