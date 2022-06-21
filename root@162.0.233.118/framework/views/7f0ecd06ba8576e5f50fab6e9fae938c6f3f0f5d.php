<?php $__env->startSection('content'); ?>
    <div class="media d-block d-sm-flex">
        <div class="media-body mg-t-15 mg-sm-t-0">
            <blockquote class="blockquote bd-l bd-5 pd-l-20 mg-b-0">
                <p class="mg-b-5 tx-inverse">Тизимга кириш <span class="tx-bold tx-success">OneID Ягона идентификация тизими</span>
                    ёки <span class="tx-bold tx-success">ЭРИ</span> орқали амалга оширилади.</p>
            </blockquote>
        </div><!-- media-body -->
    </div>
    <hr>

    <div class="form-group mg-b-15">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#oneid">OneID</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#eri">ЭРИ</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane container active" id="oneid">
                <div class="form-group mg-b-20 mg-t-30">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="agree" v-model="oneAuthConfirmation">
                        <label class="custom-control-label tx-sm" for="agree">Шахсий маълумотларимни узатилишига ва
                            тизимдан <a href="#agreement" data-toggle="modal" class="tx-primary">фойдаланиш
                                шартларига</a> розиман.</label>
                    </div>
                </div>
                <div class="form-group mg-b-30">
                    <button class="btn btn-primary btn-uppercase flex-fill full-width" :disabled="!oneAuthConfirmation"

                            onclick="oneAuth('<?php echo e(json_encode(config('oneauth.one_id'))); ?>')">Тизимга кириш
                    </button>
                </div>
            </div>
            <div class="tab-pane container fade m-0 p-0 pt-2" id="eri">
                
                <div class="mb-2 mg-t-15">
                    <form name="eri_form" action="<?php echo e(route('eri.auth')); ?>" id="eri_form" method="post">
                        <?php echo $__env->make('common.eimzo-fields', ['data' => "authorization"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="divider-text">интерфейс тили</div>
    <div class="btn-group text-center">
        <a href="#" class="btn btn-creat btn-sm btn-uppercase"> Ўзбекча</a>
        <a href="#" class="btn btn-creat btn-sm btn-uppercase"> O'zbekcha</a>
    </div>
    <div class="clearfix"></div>
<?php $__env->stopSection(); ?>
<script>
    function oneAuth(config) {
        console.log('sdsd');
        var config = JSON.parse(config);
        window.location.href = "https://sso.egov.uz/sso/oauth/Authorization.do?response_type=one_code&client_id=" + config.CLIENT_ID + "&redirect_uri=" + config.REDIRECT_URI + "/oneauth/auth&scope=" + config.SCOPE + "&state=testState";
    }
</script>
<?php $__env->startSection('modal'); ?>
    <!-- ФОЙДАЛАНИШ ШАРТЛАРИ -->
    <div class="modal fade" id="agreement" tabindex="-1" role="dialog" aria-labelledby="agreementModal"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="agreementModal">Фойдаланиш шартлари</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i data-feather="x"></i></span>
                    </button>
                </div>
                <div class="modal-body ht-250 scrollbar-sm pos-relative" style="overflow-y: auto;">
                    <h6 class="tx-color-01 text-center">Фойдаланиш шартларининг қўлланиш кўлами</h6>
                    <p class="mg-b-20 text-justify">Фойдаланиш келишуви “E-IJARA TANLOV” электрон савдо майдончасига
                        (кейинги ўринларда - Тизим) нисбатан қўлланилади. Ушбу орқали тизим фойдаланувчиларга Келишувни
                        ўқиб чиқиш ва тўлиқ тушинишни махсус тарзда эслатади. Тизимдан фойдаланишингиз сизнинг
                        Фойдаланиш келушувига розилигингизни англатади; Агар рози бўлмасангиз, тизимдан фойдаланманг.
                        Келишув мазмунини қонун кўлами доирасида ўз ихтиёри бўйича вақт-вақти билан ўзгартириб туриш
                        ҳуқуқини сақлаб қолади ва Фойдаланиш келишувидаги ўзгаришларни мунтазам равишда кўриб бориш учун
                        ёлғиз ўзингиз жавобгардирсиз. Агар сиз ўзгартирилган маълумотлар чоп қилинганидан кейин тизимдан
                        фойдаланишни давом эттирсангиз, бу сизнинг ўзгаришларга розилигингиз ва уларни қабул
                        қилишингизни англатади.</p>
                    <h6 class="tx-color-01 text-center">Интеллектуал мулкчилик ҳуқуқлари бўйича баёнот</h6>
                    <p class="mg-b-20 text-justify">Тизимда мавжуд бўлган барча контентлар, жумладан, бироқ фақат шу
                        билан чекланмаган ҳолда, матнлар, расмлар, намуналар, диаграммалар, визуал интерфейслар ва
                        компютер кодларига (“контентлар”) нисбатан тегишли интеллеcтуал мулкчилик ҳуқуқлари Агросаноатни
                        рақамлаштириш марказига тегишли бўлади ёки ҳуқуқий ваколатлар билан Марказ томонидан
                        фойдаланилади. Сиз тизим томонидан кўрсатилувчи хизматлар ҳақидаги маълумотларни тизимда юклаб
                        олишингиз мумкин, бироқ улардан тижорий мақсадларда фойдаланилмаслиги керак ва юқоридаги
                        маълумотлар ўзгартирилмаслиги ҳамда юқоридаги маълумотлар ва ушбу маълумотлар мавжуд бўлган
                        ҳужжатлар кафолатланиши ва айтиб ўтилиши ва тизимнинг қонуний ҳуқуқлари ва манфаатлари сақлаб
                        қолиниши керак.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ёпиш</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ФОЙДАЛАНИШ ШАРТЛАРИ -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function oneAuth(config) {
            console.log('sdsd');
            var config = JSON.parse(config);
            window.location.href = "https://sso.egov.uz/sso/oauth/Authorization.do?response_type=one_code&client_id=" + config.CLIENT_ID + "&redirect_uri=" + config.REDIRECT_URI + "/oneauth/auth&scope=" + config.SCOPE + "&state=testState";
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.ijara-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\e-ijara\e-ijara-front\resources\views/oneauth/index.blade.php ENDPATH**/ ?>