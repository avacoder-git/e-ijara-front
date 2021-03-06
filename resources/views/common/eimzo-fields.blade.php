@csrf

<div class="form-group mb-2">
    <label for="">Калитни танланг</label>
    <select name="key" class="form-control bordered" onchange="cbChanged(this)"></select>
</div>

<div id="keyId" class="none"></div>

<input type="hidden" name="eri_fullname" id="eri_fullname">
<input type="hidden" name="eri_inn" id="eri_inn">
<input type="hidden" name="eri_pinfl" id="eri_pinfl">
<input type="hidden" name="eri_sn" id="eri_sn">
<textarea class="none" name="eri_data" id="eri_data">{{ $data }}</textarea>
<textarea class="none" name="eri_hash" id="eri_hash"></textarea>

<div class="text-center">
    <button class="btn btn-sm btn-primary" id="eri_sign" onclick="sign()" type="button">Имзолаш</button>
    <button class="btn btn-sm btn-info" id="eri_sign" onclick="uiLoadKeys()" type="button">Янгилаш</button>
</div>
