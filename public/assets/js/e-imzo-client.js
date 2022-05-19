var CAPIWS = (typeof EIMZOEXT !== 'undefined') ? EIMZOEXT : {
    URL: (window.location.protocol.toLowerCase() === "https:" ? "wss://127.0.0.1:64443" : "ws://127.0.0.1:64646") + "/service/cryptapi",
    callFunction: function (funcDef, callback, error) {
        if (!window.WebSocket) {
            if (error)
                error();
            return;
        }
        var socket;
        try {
            socket = new WebSocket(this.URL);
        } catch (e) {
            error(e);
        }
        socket.onerror = function (e) {
            if (error)
                error(e);
        };
        socket.onmessage = function (event) {
            var data = JSON.parse(event.data);
            socket.close();
            callback(event, data);
        };
        socket.onopen = function () {
            socket.send(JSON.stringify(funcDef));
        };
    },
    version: function (callback, error) {
        if (!window.WebSocket) {
            if (error)
                error();
            return;
        }
        var socket;
        try {
            socket = new WebSocket(this.URL);
        } catch (e) {
            error(e);
        }
        socket.onerror = function (e) {
            if (error)
                error(e);
        };
        socket.onmessage = function (event) {
            var data = JSON.parse(event.data);
            socket.close();
            callback(event, data);
        };
        socket.onopen = function () {
            var o = {name: 'version'};
            socket.send(JSON.stringify(o));
        };
    },
    apidoc: function (callback, error) {
        if (!window.WebSocket) {
            if (error)
                error();
            return;
        }
        var socket;
        try {
            socket = new WebSocket(this.URL);
        } catch (e) {
            error(e);
        }
        socket.onerror = function (e) {
            if (error)
                error(e);
        };
        socket.onmessage = function (event) {
            var data = JSON.parse(event.data);
            socket.close();
            callback(event, data);
        };
        socket.onopen = function () {
            var o = {name: 'apidoc'};
            socket.send(JSON.stringify(o));
        };
    },
    apikey: function (domainAndKey, callback, error) {
        if (!window.WebSocket) {
            if (error)
                error();
            return;
        }
        var socket;
        try {
            socket = new WebSocket(this.URL);
        } catch (e) {
            error(e);
        }
        socket.onerror = function (e) {
            if (error)
                error(e);
        };
        socket.onmessage = function (event) {
            var data = JSON.parse(event.data);
            socket.close();
            callback(event, data);
        };
        socket.onopen = function () {
            var o = {name: 'apikey', arguments: domainAndKey};
            socket.send(JSON.stringify(o));
        };
    }
};var Base64 = {

    // private property
    _keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",

    // public method for encoding
    encode : function (input) {
        var output = "";
        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
        var i = 0;

        input = Base64._utf8_encode(input);

        while (i < input.length) {

            chr1 = input.charCodeAt(i++);
            chr2 = input.charCodeAt(i++);
            chr3 = input.charCodeAt(i++);

            enc1 = chr1 >> 2;
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            enc4 = chr3 & 63;

            if (isNaN(chr2)) {
                enc3 = enc4 = 64;
            } else if (isNaN(chr3)) {
                enc4 = 64;
            }

            output = output +
                this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
                this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);
        }
        return output;
    },

    // public method for decoding
    decode : function (input) {
        var output = "";
        var chr1, chr2, chr3;
        var enc1, enc2, enc3, enc4;
        var i = 0;

        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

        while (i < input.length) {

            enc1 = this._keyStr.indexOf(input.charAt(i++));
            enc2 = this._keyStr.indexOf(input.charAt(i++));
            enc3 = this._keyStr.indexOf(input.charAt(i++));
            enc4 = this._keyStr.indexOf(input.charAt(i++));

            chr1 = (enc1 << 2) | (enc2 >> 4);
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            chr3 = ((enc3 & 3) << 6) | enc4;

            output = output + String.fromCharCode(chr1);

            if (enc3 != 64) {
                output = output + String.fromCharCode(chr2);
            }
            if (enc4 != 64) {
                output = output + String.fromCharCode(chr3);
            }
        }

        output = Base64._utf8_decode(output);

        return output;
    },

    // private method for UTF-8 encoding
    _utf8_encode : function (string) {
        string = string.replace(/\r\n/g,"\n");
        var utftext = "";

        for (var n = 0; n < string.length; n++) {

            var c = string.charCodeAt(n);

            if (c < 128) {
                utftext += String.fromCharCode(c);
            }
            else if((c > 127) && (c < 2048)) {
                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);
            }
            else {
                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);
            }
        }
        return utftext;
    },

    // private method for UTF-8 decoding
    _utf8_decode : function (utftext) {
        var string = "";
        var i = 0;
        var c = c1 = c2 = 0;

        while ( i < utftext.length ) {

            c = utftext.charCodeAt(i);

            if (c < 128) {
                string += String.fromCharCode(c);
                i++;
            }
            else if((c > 191) && (c < 224)) {
                c2 = utftext.charCodeAt(i+1);
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            }
            else {
                c2 = utftext.charCodeAt(i+1);
                c3 = utftext.charCodeAt(i+2);
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }
        }
        return string;
    }
}

Date.prototype.yyyymmdd = function () {
    var yyyy = this.getFullYear().toString();
    var mm = (this.getMonth() + 1).toString(); // getMonth() is zero-based
    var dd = this.getDate().toString();
    return yyyy + (mm[1] ? mm : "0" + mm[0]) + (dd[1] ? dd : "0" + dd[0]); // padding
};
Date.prototype.ddmmyyyy = function () {
    var yyyy = this.getFullYear().toString();
    var mm = (this.getMonth() + 1).toString(); // getMonth() is zero-based
    var dd = this.getDate().toString();
    return (dd[1] ? dd : "0" + dd[0]) + "." + (mm[1] ? mm : "0" + mm[0]) + "." + yyyy; // padding
};
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
String.prototype.splitKeep = function (splitter, ahead) {
    var self = this;
    var result = [];
    if (splitter != '') {
        // Substitution of matched string
        function getSubst(value) {
            var substChar = value[0] == '0' ? '1' : '0';
            var subst = '';
            for (var i = 0; i < value.length; i++) {
                subst += substChar;
            }
            return subst;
        };
        var matches = [];
        // Getting mached value and its index
        var replaceName = splitter instanceof RegExp ? "replace" : "replaceAll";
        var r = self[replaceName](splitter, function (m, i, e) {
            matches.push({value: m, index: i});
            return getSubst(m);
        });
        // Finds split substrings
        var lastIndex = 0;
        for (var i = 0; i < matches.length; i++) {
            var m = matches[i];
            var nextIndex = ahead == true ? m.index : m.index + m.value.length;
            if (nextIndex != lastIndex) {
                var part = self.substring(lastIndex, nextIndex);
                result.push(part);
                lastIndex = nextIndex;
            }
        }
        ;
        if (lastIndex < self.length) {
            var part = self.substring(lastIndex, self.length);
            result.push(part);
        }
        ;
    } else {
        result.add(self);
    }
    ;
    return result;
};

var EIMZOClient = {
    NEW_API: true,
    API_KEYS: [
        'localhost', '96D0C1491615C82B9A54D9989779DF825B690748224C2B04F500F370D51827CE2644D8D4A82C18184D73AB8530BB8ED537269603F61DB0D03D2104ABF789970B',
        '127.0.0.1', 'A7BCFA5D490B351BE0754130DF03A068F855DB4333D43921125B9CF2670EF6A40370C646B90401955E1F7BC9CDBF59CE0B2C5467D820BE189C845D0B79CFC96F'
    ],
    checkVersion: function (success, fail) {
        CAPIWS.version(function (event, data) {
            if (data.success === true) {
                if (data.major && data.minor) {
                    var installedVersion = parseInt(data.major) * 100 + parseInt(data.minor);
                    EIMZOClient.NEW_API = installedVersion >= 336;
                    success(data.major, data.minor);
                } else {
                    fail(null, 'E-IMZO Version is undefined');
                }
            } else {
                fail(null, data.reason);
            }
        }, function (e) {
            fail(e, null);
        });
    },
    installApiKeys: function (success, fail) {
        CAPIWS.apikey(EIMZOClient.API_KEYS, function (event, data) {
            if (data.success) {
                success();
            } else {
                fail(null, data.reason);
            }
        }, function (e) {
            fail(e, null);
        });
    },
    listAllUserKeys: function (itemIdGen, itemUiGen, success, fail) {
        var items = [];
        var errors = [];
        if (!EIMZOClient.NEW_API) {
            fail(null, 'Please install new version of E-IMZO');
        } else {
            EIMZOClient._findPfxs2(itemIdGen, itemUiGen, items, errors, function (firstItmId2) {
                EIMZOClient._findTokens2(itemIdGen, itemUiGen, items, errors, function (firstItmId3) {
                    if (items.length === 0 && errors.length > 0) {
                        fail(errors[0].e, errors[0].r);
                    } else {
                        var firstId = null;
                        if (items.length === 1) {
                            if (firstItmId2) {
                                firstId = firstItmId2;
                            } else if (firstItmId3) {
                                firstId = firstItmId3;
                            }
                        }
                        success(items, firstId);
                    }
                });
            });
        }
    },
    loadKey: function (itemObject, success, fail, verifyPassword) {
        if (itemObject) {
            var vo = itemObject;
            if (vo.type === "pfx") {
                CAPIWS.callFunction({
                    plugin: "pfx",
                    name: "load_key",
                    arguments: [vo.disk, vo.path, vo.name, vo.alias]
                }, function (event, data) {
                    if (data.success) {
                        var id = data.keyId;
                        if (verifyPassword) {
                            CAPIWS.callFunction({
                                name: "verify_password",
                                plugin: "pfx",
                                arguments: [id]
                            }, function (event, data) {
                                if (data.success) {
                                    success(id);
                                } else {
                                    fail(null, data.reason);
                                }
                            }, function (e) {
                                fail(e, null);
                            });
                        } else {
                            success(id);
                        }
                    } else {
                        fail(null, data.reason);
                    }
                }, function (e) {
                    fail(e, null);
                });
            } else if (vo.type === "ftjc") {
                CAPIWS.callFunction({
                    plugin: "ftjc",
                    name: "load_key",
                    arguments: [vo.cardUID]
                }, function (event, data) {
                    if (data.success) {
                        var id = data.keyId;
                        if (verifyPassword) {
                            CAPIWS.callFunction({
                                plugin: "ftjc",
                                name: "verify_pin",
                                arguments: [id, '1']
                            }, function (event, data) {
                                if (data.success) {
                                    success(id);
                                } else {
                                    fail(null, data.reason);
                                }
                            }, function (e) {
                                fail(e, null);
                            });
                        } else {
                            success(id);
                        }
                    } else {
                        fail(null, data.reason);
                    }
                }, function (e) {
                    fail(e, null);
                });
            }
        }
    },
    changeKeyPassword: function (itemObject, success, fail) {
        if (itemObject) {
            var vo = itemObject;
            if (vo.type === "pfx") {
                CAPIWS.callFunction({
                    plugin: "pfx",
                    name: "load_key",
                    arguments: [vo.disk, vo.path, vo.name, vo.alias]
                }, function (event, data) {
                    if (data.success) {
                        var id = data.keyId;
                        CAPIWS.callFunction({
                            name: "change_password",
                            plugin: "pfx",
                            arguments: [id]
                        }, function (event, data) {
                            if (data.success) {
                                success();
                            } else {
                                fail(null, data.reason);
                            }
                        }, function (e) {
                            fail(e, null);
                        });
                    } else {
                        fail(null, data.reason);
                    }
                }, function (e) {
                    fail(e, null);
                });
            } else if (vo.type === "ftjc") {
                CAPIWS.callFunction({
                    plugin: "ftjc",
                    name: "load_key",
                    arguments: [vo.cardUID]
                }, function (event, data) {
                    if (data.success) {
                        var id = data.keyId;
                        CAPIWS.callFunction({
                            name: "change_pin",
                            plugin: "ftjc",
                            arguments: [id, '1']
                        }, function (event, data) {
                            if (data.success) {
                                success();
                            } else {
                                fail(null, data.reason);
                            }
                        }, function (e) {
                            fail(e, null);
                        });
                    } else {
                        fail(null, data.reason);
                    }
                }, function (e) {
                    fail(e, null);
                });
            }
        }
    },
    createPkcs7: function (id, data, timestamper, success, fail) {
        CAPIWS.callFunction({
            plugin: "pkcs7",
            name: "create_pkcs7",
            arguments: [Base64.encode(data), id, 'no']
        }, function (event, data) {
            if (data.success) {
                var pkcs7 = data.pkcs7_64;
                if (timestamper) {
                    var sn = data.signer_serial_number;
                    timestamper(data.signature_hex, function (tst) {
                        CAPIWS.callFunction({
                            plugin: "pkcs7",
                            name: "attach_timestamp_token_pkcs7",
                            arguments: [pkcs7, sn, tst]
                        }, function (event, data) {
                            if (data.success) {
                                var pkcs7tst = data.pkcs7_64;
                                success(pkcs7tst);
                            } else {
                                fail(null, data.reason);
                            }
                        }, function (e) {
                            fail(e, null);
                        });
                    }, fail);
                } else {
                    success(pkcs7);
                }
            } else {
                fail(null, data.reason);
            }
        }, function (e) {
            fail(e, null);
        });
    },
    _getX500Val: function (s, f) {
        var res = s.splitKeep(/,[A-Z]+=/g, true);
        for (var i in res) {
            var n = res[i].search((i > 0 ? "," : "") + f + "=");
            if (n !== -1) {
                return res[i].slice(n + f.length + 1 + (i > 0 ? 1 : 0));
            }
        }
        return "";
    },
    _findPfxs2: function (itemIdGen, itemUiGen, items, errors, callback) {
        var itmkey0;
        CAPIWS.callFunction({plugin: "pfx", name: "list_all_certificates"}, function (event, data) {
            if (data.success) {
                for (var rec in data.certificates) {
                    var el = data.certificates[rec];
                    var x500name_ex = el.alias.toUpperCase();
                    x500name_ex = x500name_ex.replace("1.2.860.3.16.1.1=", "INN=");
                    x500name_ex = x500name_ex.replace("1.2.860.3.16.1.2=", "PINFL=");
                    var vo = {
                        disk: el.disk,
                        path: el.path,
                        name: el.name,
                        alias: el.alias,
                        serialNumber: EIMZOClient._getX500Val(x500name_ex, "SERIALNUMBER"),
                        validFrom: new Date(EIMZOClient._getX500Val(x500name_ex, "VALIDFROM").replace(/\./g, "-").replace(" ", "T")),
                        validTo: new Date(EIMZOClient._getX500Val(x500name_ex, "VALIDTO").replace(/\./g, "-").replace(" ", "T")),
                        CN: EIMZOClient._getX500Val(x500name_ex, "CN"),
                        TIN: (EIMZOClient._getX500Val(x500name_ex, "INN") ? EIMZOClient._getX500Val(x500name_ex, "INN") : EIMZOClient._getX500Val(x500name_ex, "UID")),
                        UID: EIMZOClient._getX500Val(x500name_ex, "UID"),
                        PINFL: EIMZOClient._getX500Val(x500name_ex, "PINFL"),
                        O: EIMZOClient._getX500Val(x500name_ex, "O"),
                        T: EIMZOClient._getX500Val(x500name_ex, "T"),
                        type: 'pfx'
                    };
                    if (!vo.TIN && !vo.PINFL)
                        continue;
                    var itmkey = itemIdGen(vo, rec);
                    if (!itmkey0) {
                        itmkey0 = itmkey;
                    }
                    var itm = itemUiGen(itmkey, vo);
                    items.push(itm);
                }
            } else {
                errors.push({r: data.reason});
            }
            callback(itmkey0);
        }, function (e) {
            errors.push({e: e});
            callback(itmkey0);
        });
    },
    _findTokens2: function (itemIdGen, itemUiGen, items, errors, callback) {
        var itmkey0;
        CAPIWS.callFunction({plugin: "ftjc", name: "list_all_keys", arguments: ['']}, function (event, data) {
            if (data.success) {
                for (var rec in data.tokens) {
                    var el = data.tokens[rec];
                    var x500name_ex = el.info.toUpperCase();
                    x500name_ex = x500name_ex.replace("1.2.860.3.16.1.1=", "INN=");
                    x500name_ex = x500name_ex.replace("1.2.860.3.16.1.2=", "PINFL=");
                    var vo = {
                        cardUID: el.cardUID,
                        statusInfo: el.statusInfo,
                        ownerName: el.ownerName,
                        info: el.info,
                        serialNumber: EIMZOClient._getX500Val(x500name_ex, "SERIALNUMBER"),
                        validFrom: new Date(EIMZOClient._getX500Val(x500name_ex, "VALIDFROM")),
                        validTo: new Date(EIMZOClient._getX500Val(x500name_ex, "VALIDTO")),
                        CN: EIMZOClient._getX500Val(x500name_ex, "CN"),
                        TIN: (EIMZOClient._getX500Val(x500name_ex, "INN") ? EIMZOClient._getX500Val(x500name_ex, "INN") : EIMZOClient._getX500Val(x500name_ex, "UID")),
                        UID: EIMZOClient._getX500Val(x500name_ex, "UID"),
                        PINFL: EIMZOClient._getX500Val(x500name_ex, "PINFL"),
                        O: EIMZOClient._getX500Val(x500name_ex, "O"),
                        T: EIMZOClient._getX500Val(x500name_ex, "T"),
                        type: 'ftjc'
                    };
                    if (!vo.TIN && !vo.PINFL)
                        continue;
                    var itmkey = itemIdGen(vo, rec);
                    if (!itmkey0) {
                        itmkey0 = itmkey;
                    }
                    var itm = itemUiGen(itmkey, vo);
                    items.push(itm);
                }
            } else {
                errors.push({r: data.reason});
            }
            callback(itmkey0);
        }, function (e) {
            errors.push({e: e});
            callback(itmkey0);
        });
    }
};


export default EIMZOClient
