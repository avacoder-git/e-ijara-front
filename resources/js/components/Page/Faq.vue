<template>
    <section class="blog-page mg-t-45">
        <div class="container minh">
            <div class="row">
                <div id="blog-posts" style="margin-bottom: 40px">
                    <div class="accordion" role="tablist">
                        <b-card no-body class="mb-1">
                            <b-card-header header-tag="header" class="p-1" role="tab">
                                <b-button block v-b-toggle.accordion-1 variant="success">Рўйхатдан қандай ўтилади?
                                </b-button>
                            </b-card-header>
                            <b-collapse id="accordion-1" accordion="my-accordion" role="tabpanel">
                                <b-card-body style="margin-top: 20px">
                                    <b-card-text class="pt-8">
                                        <!--                                    <div class="text-center pt-2">-->
                                        <!--                                    <img class="img-thumbnail" src="/images/1.png" alt="">-->
                                        <!--                                    </div>-->
                                        <!--                                    <h3>Видеоқўлланмага ҳавола:</h3>-->
                                        <!--                                    <table class="table table-bordered">-->
                                        <!--                                        <tr>-->
                                        <!--                                            <td>Қандай рўйхатдан ўтиш</td>-->
                                        <!--                                            <td>https://www.youtube.com/watch?v=NnIOnwodeIs</td>-->
                                        <!--                                        </tr>-->
                                        <!--                                    </table>-->
                                        <!--                                    <h3>Қўлланма матни:</h3>-->
                                        <p class="text-justify"
                                           style="font-size: 11pt; line-height: 1.2; text-indent: 15px;">“E-IJARA”да
                                            шахсий кабинетга кириш учун қуйидагиларни амалга оширишингиз керак:
                                            e-ijara.uz сайтига кириб “Тизимга кириш” тугмасини босинг.
                                        </p>
                                        <img class="img-thumbnail" src="/images/2.png" alt="">
                                        <p class="text-justify"
                                           style="font-size: 11pt; line-height: 1.2; text-indent: 15px;">Сиз аввалдан
                                            “Электрон ҳукумат” тизими фойдаланувчиларини идентификациялашнинг
                                            ягона ахборот тизимида (id.egov.uz) тизимида рўйхатдан ўтган бўлсангиз
                                            шахсий
                                            логин ва паролингизни киритиб “E-IJARA”да авторизациядан ўтишингиз мумкун.
                                            Агарда Сиз <b>id.egov.uz тизимида</b> аввал рўйхатдан ўтмаган бўлсангиз:
                                            Фойдаланувчилар келишуви билан танишиб чиқинг ва “Рўйхатдан ўтиш” тугмасини
                                            босиб қуйидагиларни амалга оширишингиз керак:
                                        </p>
                                        <img class="img-thumbnail" src="/images/3.png" alt="">
                                        <h3></h3>
                                        <ul class="list-info">
                                            <li><b>Жисмоний шахснинг шахсий идентификацион рақамингизни киритинг
                                                (ЖШШИР).</b>
                                                (ЖШШИР - бу фуқаролик паспортингизни қуйи қисмидаги 14 рақам);
                                            </li>
                                            <li><b>Паспортингизнинг серияси ва рақамини;</b></li>
                                            <li><b>Электрон почта</b> манзилингизни;</li>
                                            <li><b>Телефон рақамингизни киритинг ва кодли SMS олиш</b> тугмасини босинг.
                                            </li>
                                        </ul>
                                        <img class="img-thumbnail" src="/images/4.png" alt="">
                                        <p class="text-justify"
                                           style="font-size: 11pt; line-height: 1.2; text-indent: 15px;">Телефон
                                            рақамингизга <b>SMS орқали келган</b> кодни <b>SMS орқали келган код</b>
                                            майдонига
                                            киритинг, сўнгра <b>“Кейинги”</b> тугмасини босинг.</p>
                                        <img class="img-thumbnail" src="/images/5.png" alt="">
                                        <p class="text-justify"
                                           style="font-size: 11pt; line-height: 1.2; text-indent: 15px;">Ушбу ойнада
                                            id.egov.uz тизими учун <b>логин</b> ва <b>парол</b> киритинг, сўнгра
                                            “Рўйхатдан
                                            ўтиш” тугмасини босинг.</p>
                                        <img class="img-thumbnail" src="/images/6.png" alt="">
                                        <p class="text-justify"
                                           style="font-size: 11pt; line-height: 1.2; text-indent: 15px;"><b>id.egov.uz
                                            тизимида</b> рўйхатдан ўтганлигингиз тўғрисида хабарнома ойнаси чиқади ва
                                            Сиз тизимда рўйхатдан ўтганингиз тасдиқланади.</p>
                                        <h3 class="text-center">ID.EGOV.UZ ТИЗИМИДА АККАУНТНИ ЭРИ БИЛАН ТАСДИҚЛАШ БЎЙИЧА
                                            ЙЎРИҚНОМА
                                        </h3>
                                        <p class="text-justify"
                                           style="font-size: 11pt; line-height: 1.2; text-indent: 15px;"><b>id.egov.uz
                                            тизимида</b> аккаунтингизни тасдиқлаш учун логин ва паролингиз билан
                                            тизимга киринг.</p>
                                        <img class="img-thumbnail" src="/images/7.png" alt="">
                                        <p class="text-justify"
                                           style="font-size: 11pt; line-height: 1.2; text-indent: 15px;"><b>id.egov.uz
                                            тизимида</b> аккаунтингизни тасдиқлаш учун <b>“Тасдиқлаш”</b> бўлинмасига
                                            ўтинг,
                                            ЭРИ калитингизни танланг ва <b>“Тасдиқлаш”</b> тугмасини босинг.</p>
                                        <img class="img-thumbnail" src="/images/8.png" alt="">
                                        <p class="text-justify"
                                           style="font-size: 11pt; line-height: 1.2; text-indent: 15px;">ЭРИ
                                            калитингизнинг <b>паролини</b> киритинг.</p>
                                        <img class="img-thumbnail" src="/images/9.png" alt="">
                                        <p class="text-justify"
                                           style="font-size: 11pt; line-height: 1.2; text-indent: 15px;">Тизимда
                                            аккаунтингиз тасдиқлангани тўғрисида хабарнома ойнаси чиқади ва <b>Сизнинг
                                                профилингиз тасдиқланади.</b></p>
                                    </b-card-text>
                                </b-card-body>
                            </b-collapse>
                        </b-card>

                        <b-card no-body class="mb-1">
                            <b-card-header header-tag="header" class="p-1" role="tab">
                                <b-button block v-b-toggle.accordion-2 variant="success">Логин қандай ўзгартирилади?
                                </b-button>
                            </b-card-header>
                            <b-collapse id="accordion-2" accordion="my-accordion" role="tabpanel">
                                <b-card-body style="margin-top: 20px">
                                    <b-card-text>
                                        <h3 class="text-justify"
                                            style="font-size: 11pt; line-height: 1.2; text-indent: 15px;">id.egov.uz
                                            тизимида аккаунтингизга кирганингиздан сўнг “шахсий маълумотлар” ойнасидаги
                                            “Созламалар” ойнасида ўз логинингизни ўзгартириш имкониятига эгасиз.</h3>
                                        <img class="img-thumbnail" src="/images/10.png" alt="">
                                        <p class="text-justify"
                                           style="font-size: 11pt; line-height: 1.2; text-indent: 15px;">Эски логинингиз
                                            кўрсатилган жойга янги логинингизни киритганингиздан сўнг, паролингизни
                                            киритасиз ва Тизимда логинингиз мувофақиятли янгиланади. </p>
                                        <img class="img-thumbnail" src="/images/11.png" alt="">

                                    </b-card-text>
                                </b-card-body>
                            </b-collapse>
                        </b-card>

                        <b-card no-body class="mb-1">
                            <b-card-header header-tag="header" class="p-1" role="tab">
                                <b-button block v-b-toggle.accordion-3 variant="success">Пароль қандай тикланади?
                                </b-button>
                            </b-card-header>
                            <b-collapse id="accordion-3" accordion="my-accordion" role="tabpanel">
                                <b-card-body style="margin-top: 20px">
                                    <b-card-text>
                                        <p><b>Агар сиз аввал id.egov.uz тизимидан рўйхатдан ўтган бўлсангиз, аммо логин
                                            ёки паролингизни унутган бўлсангиз
                                            <a href="https://id.egov.uz">“Логин ёки паролни унутдингизми?”</a>тугмасини
                                            босинг.</b></p>
                                        <img class="img-thumbnail" src="/images/12.png" alt="">
                                        <p class="text-justify"
                                           style="font-size: 11pt; line-height: 1.2; text-indent: 15px;">“Логин ва
                                            парольни қайта тиклаш” ойнасида маълумотларни тўлдиринг ва “Тиклаш”
                                            тугмасини босинг.</p>
                                        <img class="img-thumbnail" src="/images/13.png" alt="">
                                        <p class="text-justify"
                                           style="font-size: 11pt; line-height: 1.2; text-indent: 15px;">Сизнинг
                                            логинингиз ва янги паролингиз <b>id.egov.uz тизимидан рўйхатдан ўтган
                                                вақтингизда кўрсатилган электрон почта манзилингизга ва мобил телефон
                                                рақамингизга SMS орқали юборилади.</b></p>
                                        <img class="img-thumbnail" src="/images/14.png" alt="">
                                    </b-card-text>
                                </b-card-body>
                            </b-collapse>
                        </b-card>
                        <b-card no-body class="mb-1">
                            <b-card-header header-tag="header" class="p-1" role="tab">
                                <b-button block v-b-toggle.accordion-4 variant="success">Ерни ижарага олиш бўйича таклиф
                                    қандай берилади? / Тизимда таклиф қандай берилади?
                                </b-button>
                            </b-card-header>
                            <b-collapse id="accordion-4" accordion="my-accordion" role="tabpanel">
                                <b-card-body>
                                    <b-card-text>

                                        <div class=WordSection1>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal'><b><span lang=UZ-CYR style='font-size:14.0pt;
font-family:"Times New Roman",serif'>Ер участкасини ижарага чиқариш учун
таклиф &#1179;андай берилади? / Тизимда таклиф қандай берилади?</span></b></p>

                                            <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm;text-align:justify;text-indent:35.45pt;line-height:normal'><b><span
                                                lang=UZ-CYR
                                                style='font-size:14.0pt;font-family:"Times New Roman",serif;'>&nbsp;</span></b>
                                            </p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>Ер
участкасини ижарага чи&#1179;аришга таклиф киритиш учун <br>
“</span><span style='font-size:14.0pt;font-family:"Times New Roman",serif;
color:black'><img width=101 height=29 id="Рисунок 27"
                  src="/images/faq/image001.jpg"></span><span
                                                lang=UZ-CYR style='font-size:14.0pt;font-family:"Times New Roman",serif;
color:black'>” тугмасини босинг. Таклиф киритиш тугмаси босилгандан сўнг бўш
турган ер участкаларини танлаш имконини берувчи сахифа очилади (1-расм). </span></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;line-height:
normal;background:white'><span style='font-size:14.0pt;font-family:"Times New Roman",serif;
color:black'><img width=581 height=222 id="Рисунок 28"
                  src="/images/faq/image002.jpg"></span></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><i><span lang=UZ-CYR
                                                      style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>1-расм
– Бўш турган ер участкаларини танлаш сахифаси</span></i></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif'>&nbsp;</span>
                                            </p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>Бўш
турган ер участкаларини танлаш учун “</span><span style='font-size:14.0pt;
font-family:"Times New Roman",serif;color:black'><img width=28 height=32
                                                      id="Рисунок 29"
                                                      src="/images/faq/image003.jpg"></span><span
                                                lang=UZ-CYR style='font-size:14.0pt;font-family:"Times New Roman",serif;
color:black'>” тугмасини босиб Республика ва вилоятлар ми&#1179;ёсида ер
участкалар сонини кўришингиз мумкин (2-расм).</span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Times New Roman",serif;color:black'><img width=337 height=361 id="Рисунок 30"
                                          src="/images/faq/image004.jpg"></span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
text-indent:35.45pt;line-height:normal;background:white'><i><span lang=UZ-CYR
                                                                  style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>2-расм
– Республика ва вилоятлар ми&#1179;ёсида</span></i><span lang=UZ-CYR
                                                         style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'> <i>Ер
участкалари сони</i></span></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>Ўз
худудингизга тегишли бўш турган ер участкаларини танлаш учун Ер участкалари
рўйхатидан керакли худуд/туман устига босинг (3-расм).</span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Times New Roman",serif;color:black'><img width=420 height=273 id="Рисунок 62"
                                          src="/images/faq/image005.jpg"></span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
text-indent:35.45pt;line-height:normal;background:white'><i><span lang=UZ-CYR
                                                                  style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>3-расм
– Туманни танлаш</span></i></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><i><span lang=UZ-CYR
                                                      style='font-size:14.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></i>
                                            </p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>Тумандаги
бўш ер участкалари жойлашишини сахифа харитасида кўришингиз мумкин (4-расм).</span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Times New Roman",serif;color:black'><img width=579 height=213 id="Рисунок 32"
                                          src="/images/faq/image006.jpg"></span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
text-indent:35.45pt;line-height:normal;background:white'><i><span lang=UZ-CYR
                                                                  style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>4-расм
– Бўш ер участкаларининг харитадаги кўриниши</span></i></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif'>&nbsp;</span>
                                            </p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>Ер
участкаларини катталаштириш учун “</span><span style='font-size:14.0pt;
font-family:"Times New Roman",serif;color:black'><img width=25 height=25
                                                      id="Рисунок 33"
                                                      src="/images/faq/image007.jpg"></span><span
                                                lang=UZ-CYR style='font-size:14.0pt;font-family:"Times New Roman",serif;
color:black'>” тугмасини босинг. Ер участкаларини кичкинилаштириш учун “</span><span
                                                style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'><img
                                                width=22 height=23 id="Рисунок 34"
                                                src="/images/faq/image008.jpg"></span><span
                                                lang=UZ-CYR style='font-size:14.0pt;font-family:"Times New Roman",serif;
color:black'>” тугмасини босинг. Харитани катта экран режимида кўриш учун “</span><span
                                                style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'><img
                                                width=23 height=23 id="Рисунок 36"
                                                src="/images/faq/image009.jpg"></span><span
                                                lang=UZ-CYR style='font-size:14.0pt;font-family:"Times New Roman",serif;
color:black'>” тугмасини босинг, катта экран режимидан чи&#1179;иш учун “</span><span
                                                style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'><img
                                                width=27 height=24 id="Рисунок 37"
                                                src="/images/faq/image010.jpg"></span><span
                                                lang=UZ-CYR style='font-size:14.0pt;font-family:"Times New Roman",serif;
color:black'>” тугмасини ёки клавиатурадаги “Esc” тугмасини босинг. </span></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif'>&nbsp;</span>
                                            </p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif'>&nbsp;</span>
                                            </p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>Ер
участкаси &#1203;а&#1179;ида маълумот олиш учун ер участкаси устига компьютер
сич&#1179;ончасини олиб келиб ўнг тугмасини босганингизда ер участкаси
ха&#1179;идаги маълумотлар кўринади (5-расм).</span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Times New Roman",serif;color:black'><img width=260 height=270 id="Рисунок 40"
                                          src="/images/faq/image011.jpg"></span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
text-indent:35.45pt;line-height:normal;background:white'><i><span lang=UZ-CYR
                                                                  style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>5-расм
– Ер участкаси ха&#1179;ида маълумот</span></i></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif'>&nbsp;</span>
                                            </p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>Ер
участкасини очик электрон танловга чи&#1179;ариш учун “Таклиф юбориш” тугмаси
босинг ва таклиф юбориш шаклини тўлдиринг (6-расм). </span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Times New Roman",serif;color:black'><img width=451 height=387 id="Рисунок 42"
                                          src="/images/faq/image012.jpg"></span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
line-height:normal;background:white'><i><span lang=UZ-CYR style='font-size:
14.0pt;font-family:"Times New Roman",serif;color:black'>6-расм - Таклиф юбориш
шакли</span></i></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif'>&nbsp;</span>
                                            </p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>Таклиф
юбориш шаклида “Ф.И.Ш.” ва “Телефон ра&#1179;амингиз” кўрсатилган бўлади.
“Ижара ма&#1179;сади”ни пастга тушадиган рўйхатдан танлашингиз мумкин (7-расм).</span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Times New Roman",serif;color:black'><img width=377 height=282 id="Рисунок 43"
                                          src="/images/faq/image013.jpg"></span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
line-height:normal;background:white'><i><span lang=UZ-CYR style='font-size:
14.0pt;font-family:"Times New Roman",serif;color:black'>7-расм – Ижара
ма&#1179;сади рўйхати</span></i></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><i><span lang=UZ-CYR
                                                      style='font-size:14.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></i>
                                            </p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>Ер
участкаси бўйича таклифни жўнатишдан олдин таклифингиз мазмунини бўш майдонга
киритишингиз керак (8-расм). Таклиф юбориш шаклида келтирилган майдонлар
тўли&#1179; тўлдирилгандан кейин “</span><span style='font-size:14.0pt;
font-family:"Times New Roman",serif;color:black'><img width=65 height=24
                                                      id="Рисунок 2"
                                                      src="/images/faq/image014.jpg"></span><span
                                                lang=UZ-CYR style='font-size:14.0pt;font-family:"Times New Roman",serif;
color:black'>” тугмасини босинг. Таклифни жўнатишни бекор &#1179;илиш учун “</span><span
                                                style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'><img
                                                width=104 height=29 id="Рисунок 3"
                                                src="/images/faq/image015.jpg"></span><span
                                                lang=UZ-CYR style='font-size:14.0pt;font-family:"Times New Roman",serif;
color:black'>” тугмасини босинг.</span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Times New Roman",serif;color:black'><img width=408 height=310 id="Рисунок 44"
                                          src="/images/faq/image016.jpg"></span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
line-height:normal;background:white'><i><span lang=UZ-CYR style='font-size:
14.0pt;font-family:"Times New Roman",serif;color:black'>8-расм – Таклиф киритиш
майдони</span></i></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><i><span lang=UZ-CYR
                                                      style='font-size:14.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></i>
                                            </p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><i><span lang=UZ-CYR
                                                      style='font-size:14.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></i>
                                            </p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>Таклиф
жўнатилгандан кейин Таклиф рўйхатга олинган ра&#1179;ам ва таклиф &#1179;айси
жараёндалиги ха&#1179;ида маълумот берилади (9-расм). Маълумот ойнасидан
чи&#1179;иш учун “</span><span style='font-size:14.0pt;font-family:"Times New Roman",serif;
color:black'><img width=60 height=30 id="Рисунок 16"
                  src="/images/faq/image017.jpg"></span><span
                                                lang=UZ-CYR style='font-size:14.0pt;font-family:"Times New Roman",serif;
color:black'>” тугмасини босинг.</span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Times New Roman",serif;color:black'><img width=627 height=86 id="Рисунок 10"
                                          src="/images/faq/image018.jpg"></span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
text-indent:35.45pt;line-height:normal;background:white'><i><span lang=UZ-CYR
                                                                  style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>9-расм
– Жўнатилган таклиф рўйхатга олинган ра&#1179;ами</span></i></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif'>&nbsp;</span>
                                            </p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><span lang=UZ-CYR
                                                   style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>Таклифингиз
&#1179;абул &#1179;илинганлиги &#1203;а&#1179;идаги SMS хабар, рўйхатдан
ўтаётганда кўрсатган телефон ра&#1179;амга юборилади (10-расм). SMS хабарда
таклиф/ариза &#1203;олатини кузатиб бориш учун махсус код кўрсатилади.</span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Times New Roman",serif;color:black'><img width=174 height=182 id="Рисунок 63"
                                          src="/images/faq/image019.jpg"></span></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal;background:white'><i><span lang=UZ-CYR
                                                      style='font-size:14.0pt;font-family:"Times New Roman",serif;color:black'>10-расм
- Таклифингиз &#1179;абул &#1179;илинганлиги &#1203;а&#1179;идаги SMS хабар</span></i></p>

                                            <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm;text-align:justify;text-indent:35.45pt;line-height:normal'><b><span
                                                lang=UZ-CYR style='font-size:14.0pt;font-family:"Times New Roman",serif;
'>&nbsp;</span></b></p>

                                            <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm;text-align:justify;text-indent:35.45pt;line-height:normal'><b><span
                                                lang=UZ-CYR style='font-size:14.0pt;font-family:"Times New Roman",serif;
'>&nbsp;</span></b></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;line-height:normal'><span lang=UZ-CYR style='font-size:14.0pt;
font-family:"Times New Roman",serif'>&nbsp;</span></p>

                                        </div>

                                    </b-card-text>
                                </b-card-body>
                            </b-collapse>
                        </b-card>
                        <b-card no-body class="mb-1">
                            <b-card-header header-tag="header" class="p-1" role="tab">
                                <b-button block v-b-toggle.accordion-5 variant="success">Таклиф берилганидан сўнг нима
                                    қилишим зарур?
                                </b-button>
                            </b-card-header>
                            <b-collapse id="accordion-5" accordion="my-accordion" role="tabpanel">
                                <b-card-body>
                                    <b-card-text>
                                        <div class=WordSection1>

                                            <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm;text-align:justify;text-indent:35.45pt;line-height:normal'><b><span
                                                lang=UZ-CYR
                                                style='font-size:14.0pt;font-family:"Times New Roman",serif'>Жўнатилган
Таклиф &#1203;олатини &#1179;андай текшириш мумкин?</span></b></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;background:white'><span lang=UZ-CYR style='font-size:14.0pt;line-height:
107%;font-family:"Times New Roman",serif'>&nbsp;</span></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;background:white'><span lang=UZ-CYR style='font-size:14.0pt;line-height:
107%;font-family:"Times New Roman",serif;color:black'>Таклиф &#1203;олатини
текшириш учун “</span><span style='font-size:14.0pt;line-height:107%;
font-family:"Times New Roman",serif;color:black'><img width=212 height=28
                                                      id="Рисунок 15" src="/images/faq/2/image001.png"></span><span
                                                lang=UZ-CYR
                                                style='font-size:14.0pt;line-height:107%;font-family:"Times New Roman",serif;
color:black'>” тугмасини боссангиз таклиф &#1203;олатини текшириш ойнаси га
Ариза ра&#1179;ами/махсус кодни киритинг ва “</span><span style='font-size:
14.0pt;line-height:107%;font-family:"Times New Roman",serif;color:black'><img
                                                width=114 height=31 id="Рисунок 13"
                                                src="/images/faq/2/image002.jpg"></span><span
                                                lang=UZ-CYR style='font-size:14.0pt;line-height:107%;font-family:"Times New Roman",serif;
color:black'>” тугмасини босинг (1-расм).</span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
background:white'><span style='font-size:14.0pt;line-height:107%;font-family:
"Times New Roman",serif;color:black'><img width=382 height=231 id="Рисунок 12"
                                          src="/images/faq/2/image003.png"></span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
text-indent:35.45pt;background:white'><i><span lang=UZ-CYR style='font-size:
14.0pt;line-height:107%;font-family:"Times New Roman",serif;color:black'>1-расм
- Таклиф &#1203;олатини текшир ойнаси</span></i></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;background:white'><span lang=UZ-CYR style='font-size:14.0pt;line-height:
107%;font-family:"Times New Roman",serif'>&nbsp;</span></p>

                                            <p class=MsoNormal style='margin-bottom:6.0pt;text-align:justify;text-indent:
35.45pt;background:white'><span lang=UZ-CYR style='font-size:14.0pt;line-height:
107%;font-family:"Times New Roman",serif;color:black'>“Текшириш” тугмаси
босилгандан кейин жўнатилган таклиф холати &#1203;а&#1179;ида маълумот пайдо
бўлади (2-расм).</span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
background:white'><span style='font-size:14.0pt;line-height:107%;font-family:
"Times New Roman",serif;color:black'><img width=337 height=226 id="Рисунок 14"
                                          src="/images/faq/2/image004.png"></span></p>

                                            <p class=MsoNormal align=center style='margin-bottom:6.0pt;text-align:center;
background:white'><i><span lang=UZ-CYR style='font-size:14.0pt;line-height:
107%;font-family:"Times New Roman",serif;color:black'>2-расм – Таклиф
&#1203;а&#1179;ида маълумот</span></i></p>

                                            <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm;text-align:justify;text-indent:35.45pt;line-height:normal'><b><span
                                                lang=UZ-CYR style='font-size:14.0pt;font-family:"Times New Roman",serif;'>&nbsp;</span></b></p>

                                            <p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
                                                lang=UZ-CYR
                                                style='font-size:14.0pt;line-height:107%;font-family:"Times New Roman",serif'>&nbsp;</span>
                                            </p>

                                        </div>
                                    </b-card-text>
                                </b-card-body>
                            </b-collapse>
                        </b-card>
                        <b-card no-body class="mb-1">
                            <b-card-header header-tag="header" class="p-1" role="tab">
                                <b-button block v-b-toggle.accordion-6 variant="success">Юридик шахсларга қишлоқ
                                    хўжалиги
                                    мақсадлари учун ер участкаларини ижарага беришнинг балл бериш мезонлари қандай?
                                </b-button>
                            </b-card-header>
                            <b-collapse id="accordion-6" accordion="my-accordion" role="tabpanel">
                                <b-card-body style="margin-top: 20px">
                                    <b-card-text>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td width="4%">
                                                    <p align="center"><strong>Т/р</strong></p>
                                                </td>
                                                <td width="29%">
                                                    <p align="center"><strong>Балл бериш мезонлари</strong></p>
                                                </td>
                                                <td width="46%">
                                                    <p align="center"><strong>Амалга ошириш муддати</strong></p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center"><strong>Рейтинг баллари</strong></p>
                                                </td>
                                                <td width="10%">
                                                    <p align="center"><strong>Талабгор</strong></p>
                                                    <p align="center"><strong>(Ф.И.О)</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" width="100%">
                                                    <p align="center"><strong>А-БЛОК. Қишлоқ хўжалиги мақсадлари учун ер
                                                        участкаларини ижарага олиш бўйича мажбуриятлар</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" width="100%">
                                                    <p align="center"><strong>Қишлоқ хўжалиги ер майдонларини ижарага
                                                        олиш ҳуқуқини қўлга киритиш учун ернинг норматив қийматидан
                                                        келиб чиқиб, 30 йил муддатга ҳисобланадиган қўшимча
                                                        тўловлар</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" width="4%">
                                                    <p align="center">1.</p>
                                                </td>
                                                <td rowspan="2" width="29%">
                                                    <p>Ижара ҳуқуқини ютиб олиш учун тўланадиган тўлов (мазкур сумма
                                                        танлов ўтказилган санадаги норматив қиймат бўйича ҳисобланади
                                                        ҳамда 30 йилга тенг тақсимланади)</p>
                                                </td>
                                                <td width="46%">
                                                    <p>10 норматив қийматидан юқори (ҳар бир норматив қиймат учун)</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>ер норматив қийматининг 0 баробаридан 10 баробаригача (ҳар бир
                                                        норматив қиймат учун)</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">2</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" width="100%">
                                                    <p align="center"><strong>Б-БЛОК. Талабгор ҳақида маълумот
                                                        (автоматик равишда баҳоланади)</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5" width="4%">
                                                    <p align="center">2.</p>
                                                </td>
                                                <td rowspan="5" width="29%">
                                                    <p>Талабгорнинг кредит тарихи</p>
                                                </td>
                                                <td width="46%">
                                                    <p>аъло кўрсаткич</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>яхши кўрсаткич</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">6</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>ўртача кўрсаткич</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>заиф кўрсаткич</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">2</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>ёмон кўрсаткич</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">0</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="6" width="4%">
                                                    <p align="center">3.</p>
                                                </td>
                                                <td rowspan="6" width="29%">
                                                    <p>Талабгорнинг мутахассислиги</p>
                                                </td>
                                                <td width="46%">
                                                    <p>агроном, фермер хўжалигини бошқариш</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">5</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>селекция ва уруғчилик, ўсимликларни ҳимоя қилиш, ер тузиш</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">4</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>қишлоқ хўжалигини механизациялаш, агроиқтисодиёт</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>механик, зоотехник, ветеринар</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">2</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>бошқа мутахассис</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>мутахассислиги мавжуд бўлмаганда</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">0</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="6" width="4%">
                                                    <p align="center">4.</p>
                                                </td>
                                                <td rowspan="6" width="29%">
                                                    <p>Талабгор (юридик шахс раҳбари)нинг аграр соҳадаги иш стажи</p>
                                                </td>
                                                <td width="46%">
                                                    <p>15 йил ва ундан юқори</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>10 йилдан 15 йилгача</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">9</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>5 йилдан 10 йилгача</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">8</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>3 йилдан 5 йилгача</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">7</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 йилдан 3 йилгача</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">6</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>иш стажи бўлмаганда</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">0</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="6" width="4%">
                                                    <p align="center">5.</p>
                                                </td>
                                                <td rowspan="6" width="29%">
                                                    <p>Мавжуд қишлоқ хўжалиги техникаси (хизмат муддати 15 йилдан кам ва
                                                        техник соз техникалар ҳисобга олинади)</p>
                                                </td>
                                                <td width="46%">
                                                    <p>юқори унумли техника (ҳайдов трактор ёки комбайн ёки ПТМ)</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>универсал чопиқ трактори</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">8</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>ишлов бериш трактори</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">5</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>комбинациялашган агрегат</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">4</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>юк машинаси</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">2</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>бошқа қишлоқ хўжалиги техникаси</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3" width="4%">
                                                    <p align="center">6.</p>
                                                </td>
                                                <td rowspan="3" width="29%">
                                                    <p>Мавжуд чорва боши сони (шартли бош)</p>
                                                </td>
                                                <td width="46%">
                                                    <p>1 гектар ер учун 5 бош ва ундан кўп</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">15</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 гектар ер учун 4 бош</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 гектар ер учун 3 бош</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">5</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" width="100%">
                                                    <p align="center"><strong>В-БЛОК. Талабгорнинг келгусидаги
                                                        режалари</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" width="100%">
                                                    <p align="center"><strong>Яратиладиган иш ўрни</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3" width="4%">
                                                    <p align="center">7.</p>
                                                </td>
                                                <td rowspan="3" width="29%">
                                                    <p>Пахта-ғаллачилик йўналишида</p>
                                                </td>
                                                <td width="46%">
                                                    <p>1 йил давомида ҳар 2 гектар майдон учун 1 та доимий иш ўрни</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 йил давомида ҳар 3 гектар майдон учун 1 та доимий иш ўрни</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">2</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 йил давомида ҳар 5 гектар майдон учун 1 та доимий иш ўрни</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3" width="4%">
                                                    <p align="center">8.</p>
                                                </td>
                                                <td rowspan="3" width="29%">
                                                    <p>Ғаллачилик (шоличилик) йўналишида</p>
                                                </td>
                                                <td width="46%">
                                                    <p>1 йил давомида ҳар 5 гектар майдон учун 1 та доимий иш ўрни</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 йил давомида ҳар 10 гектар майдон учун 1 та доимий иш ўрни</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">2</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 йил давомида ҳар 15 гектар майдон учун 1 та доимий иш ўрни</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3" width="4%">
                                                    <p align="center">9.</p>
                                                </td>
                                                <td rowspan="3" width="29%">
                                                    <p>Боғдорчилик-узумчилик йўналишида</p>
                                                </td>
                                                <td width="46%">
                                                    <p>1 йил давомида ҳар 1 гектар майдон учун 1 та доимий иш ўрни</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 йил давомида ҳар 2 гектар майдон учун 1 та доимий иш ўрни</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">2</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 йил давомида ҳар 3 гектар майдон учун 1 та доимий иш ўрни</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3" width="4%">
                                                    <p align="center">10.</p>
                                                </td>
                                                <td rowspan="3" width="29%">
                                                    <p>Сабзавот-полизчилик, картошкачилик ва бошқа йўналишларда</p>
                                                </td>
                                                <td width="46%">
                                                    <p>1 йил давомида ҳар 1 гектар майдон учун 3 та доимий иш ўрни</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 йил давомида ҳар 1 гектар майдон учун 2 та доимий иш ўрни</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">2</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 йил давомида ҳар 1 гектар майдон учун 1 та доимий иш ўрни</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" width="100%">
                                                    <p align="center"><strong>Сув тежовчи технологияларни жорий
                                                        этиш</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="10" width="4%">
                                                    <p align="center">11.</p>
                                                </td>
                                                <td rowspan="10" width="29%">
                                                    <p>Сув тежовчи технологиялар жорий этиш</p>
                                                </td>
                                                <td width="46%">
                                                    <p>10 йил давомида 100 фоиз майдонга</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">20</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>9 йил давомида 90 фоиз майдонга</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">18</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>8 йил давомида 80 фоиз майдонга</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">16</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>7 йил давомида 70 фоиз майдонга</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">14</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>6 йил давомида 60 фоиз майдонга</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">12</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>5 йил давомида 50 фоиз майдонга</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>4 йил давомида 40 фоиз майдонга</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">8</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>3 йил давомида 30 фоиз майдонга</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">6</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>2 йил давомида 20 фоиз майдонга</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">4</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 йил давомида 10 фоиз майдонга</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">2</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" width="100%">
                                                    <p align="center"><strong>Механизациялаштириш даражаси</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="6" width="4%">
                                                    <p align="center">12.</p>
                                                </td>
                                                <td rowspan="6" width="29%">
                                                    <p>Пахтачилик ва ғаллачилик (камида 30 гектар учун) йўналишида</p>
                                                </td>
                                                <td width="46%">
                                                    <p>15 йил давомида камида 1 дона юқори унумли техника (150 от
                                                        кучидан юқори)</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>10 йил давомида камида 1 дона универсал чопиқ трактори</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">8</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>7 йил давомида камида 1 дона ишлов бериш трактори</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">6</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>5 йил давомида камида 1 дона комбинациялашган агрегат</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">4</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>5 йил давомида камида 1 дона юк машинаси</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>3 йил давомида камида 1 дона бошқа қишлоқ хўжалиги техникаси</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="6" width="4%">
                                                    <p align="center">13.</p>
                                                </td>
                                                <td rowspan="6" width="29%">
                                                    <p>Чорвачилик (камида 10 гектар учун) йўналишида</p>
                                                </td>
                                                <td width="46%">
                                                    <p>15 йил давомида камида 1 дона юқори унумли техника (ҳайдов
                                                        трактори ёки комбайн)</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>10 йил давомида камида 1 дона универсал чопиқ трактори</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">8</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>7 йил давомида камида 1 дона ишлов бериш трактори</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">6</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>5 йил давомида камида 1 дона комбинациялашган агрегат</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">4</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>5 йил давомида камида 1 дона юк машинаси</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>3 йил давомида камида 1 дона бошқа қишлоқ хўжалиги техникаси</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="6" width="4%">
                                                    <p align="center">14.</p>
                                                </td>
                                                <td rowspan="6" width="29%">
                                                    <p>Сабзавот-полизчилик ва картошкачилик (камида 5 гектар учун)
                                                        йўналишида</p>
                                                </td>
                                                <td width="46%">
                                                    <p>15 йил давомида камида 1 дона ҳайдов трактори</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>10 йил давомида камида 1 дона махсус техникалар</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">8</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>7 йил давомида камида 1 дона универсал чопиқ трактори</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">5</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>5 йил давомида камида 1 дона комбинациялашган агрегат</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">4</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>5 йил давомида камида 1 дона юк машинаси</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>3 йил давомида камида 1 дона бошқа қишлоқ хўжалиги техникаси</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5" width="4%">
                                                    <p align="center">15.</p>
                                                </td>
                                                <td rowspan="5" width="29%">
                                                    <p>Боғдорчилик-узумчилик (камида 5 гектар учун) йўналишида</p>
                                                </td>
                                                <td width="46%">
                                                    <p>15 йил давомида камида 1 дона махсус мини трактор</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>10 йил давомида камида 1 дона махсус техника</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">8</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>7 йил давомида камида 1 дона комбинациялашган агрегат</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">6</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>5 йил давомида камида 1 дона юк машинаси</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">5</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>3 йил давомида камида 1 дона бошқа қишлоқ хўжалиги техникаси</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" width="100%">
                                                    <p align="center"><strong>Чорвачилик йўналиши учун</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3" width="4%">
                                                    <p align="center">16.</p>
                                                </td>
                                                <td rowspan="3" width="29%">
                                                    <p>Суғориладиган экин ерларида 1 гектар майдон учун чорва мол бош
                                                        сонини ошириш</p>
                                                </td>
                                                <td width="46%">
                                                    <p>5 йил давомида 5 бош ва ундан кўпайтириш</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>3 йил давомида 4 бошга етказиш</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">5</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 йил давомида 3 бошга етказиш</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3" width="4%">
                                                    <p align="center">17.</p>
                                                </td>
                                                <td rowspan="3" width="29%">
                                                    <p>Суғорилмайдиган (лалмикор) ерларда 1 гектар майдон учун чорва мол
                                                        боши сонини ошириш</p>
                                                </td>
                                                <td width="46%">
                                                    <p>5 йил давомида 3 бошга ва ундан кўпайтириш</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>3 йил давомида 2 бошга етказиш</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">5</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 йил давомида 1 бошга етказиш</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3" width="4%">
                                                    <p align="center">18.</p>
                                                </td>
                                                <td rowspan="3" width="29%">
                                                    <p>Яйлов ва пичанзорларда 2 гектар майдон учун чорва мол бош сонини
                                                        ошириш</p>
                                                </td>
                                                <td width="46%">
                                                    <p>5 йил давомида 3 бошга ва ундан кўпайтириш</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>3 йил давомида 2 бошга етказиш</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">5</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="46%">
                                                    <p>1 йил давомида 1 бошга етказиш</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" width="100%">
                                                    <p align="center"><strong>Г-БЛОК. Умумий балларни оширувчи
                                                        коэффициентлар (автоматик равишда баҳоланади)</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="4%">
                                                    <p align="center">19.</p>
                                                </td>
                                                <td colspan="2" width="75%">
                                                    <p>Ер участкаси жойлашган ҳудуд (МФЙ)да яшовчи талабгор</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1,3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="4%">
                                                    <p align="center">20.</p>
                                                </td>
                                                <td colspan="2" width="75%">
                                                    <p>Ер участкаси жойлашган туманда, бироқ бошқа ҳудуд (МФЙ)да яшовчи
                                                        талабгор</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1,2</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="4%">
                                                    <p align="center">21.</p>
                                                </td>
                                                <td colspan="2" width="75%">
                                                    <p>Ер участкаси жойлашган вилоятда, бироқ бошқа туман (шаҳар)да
                                                        яшовчи талабгор</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1,0</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" width="80%">
                                                    <p align="center"><strong>ЖАМИ</strong></p>
                                                </td>
                                                <td width="9%">&nbsp;</td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </b-card-text>
                                </b-card-body>
                            </b-collapse>
                        </b-card>
                        <b-card no-body class="mb-1">
                            <b-card-header header-tag="header" class="p-1" role="tab">
                                <b-button block v-b-toggle.accordion-7 variant="success">Деҳқон хўжалиги юритиш учун ер
                                    участкаларини ижарага беришнинг балл бериш мезонлари қандай?
                                </b-button>
                            </b-card-header>
                            <b-collapse id="accordion-7" accordion="my-accordion" role="tabpanel">
                                <b-card-body style="margin-top: 20px">
                                    <b-card-text>
                                        <table class="table table-bordered" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr>
                                                <td width="4%">
                                                    <p align="center"><strong>Т/р</strong></p>
                                                </td>
                                                <td colspan="2" width="75%">
                                                    <p align="center"><strong>Балл бериш мезонлари</strong></p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center"><strong>Рейтинг баллари</strong></p>
                                                </td>
                                                <td width="10%">
                                                    <p align="center"><strong>Талабгор</strong></p>
                                                    <p align="center"><strong>(Ф.И.О)</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" width="100%">
                                                    <p align="center"><strong>А-БЛОК. Қишлоқ хўжалиги мақсадлари учун ер
                                                        участкаларини ижарага олиш бўйича мажбуриятлар</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" width="4%">
                                                    <p align="center">1.</p>
                                                </td>
                                                <td rowspan="2" width="26%">
                                                    <p>Ижара ҳуқуқини ютиб олиш учун тўланадиган тўлов (мазкур сумма
                                                        танлов ўтказилган санадаги норматив қиймат бўйича ҳисобланади
                                                        ҳамда 30 йилга тенг тақсимланади)</p>
                                                </td>
                                                <td width="49%">
                                                    <p>10 норматив қийматидан юқори (ҳар бир норматив қиймат учун)</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">2</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>ер норматив қийматининг 0 баробаридан 10 баробаригача (ҳар бир
                                                        норматив қиймат учун)</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3" width="4%">
                                                    <p align="center">2.</p>
                                                </td>
                                                <td rowspan="3" width="26%">
                                                    <p>Яратиладиган иш ўрни</p>
                                                    <p>(бир гектар майдон ҳисобидан)</p>
                                                </td>
                                                <td width="49%">
                                                    <p>3 нафар ва ундан кўп</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>2 нафар</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">5</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>1 нафар</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" width="100%">
                                                    <p align="center"><strong>Б-БЛОК. Талабгор ҳақида
                                                        маълумотлар</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5" width="4%">
                                                    <p align="center">3.</p>
                                                </td>
                                                <td rowspan="5" width="26%">
                                                    <p>Талабгорнинг кредит тарихи</p>
                                                </td>
                                                <td width="49%">
                                                    <p>Аъло кўрсаткич</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">8</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>Яхши кўрсаткич</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">6</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>Ўртача кўрсаткич</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">4</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>Заиф кўрсаткич</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">2</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>Ёмон кўрсаткич</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">0</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="4" width="4%">
                                                    <p align="center">4.</p>
                                                </td>
                                                <td rowspan="4" width="26%">
                                                    <p>Талабгорнинг аграр соҳа бўйича мутахассислиги ва аниқ режаларнинг
                                                        мавжудлиги</p>
                                                </td>
                                                <td width="49%">
                                                    <p>Олий ва ўрта махсус маълумот</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">5</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>Янги тартибда ташкил қилинган касбга ўқитиш марказларида, малака
                                                        ва билимга эгалиги (моно марказ, агрохизматлар маркази,
                                                        фермерлар мактаби, маслаҳат офислари ва бошқа)</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>Техник иқтисодий асос ва бизнес режанинг мавжудлиги</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">2</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>Мавжуд эмас</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">0</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="4" width="4%">
                                                    <p align="center">5.</p>
                                                </td>
                                                <td rowspan="4" width="26%">
                                                    <p>Талабгорнинг ўз томорқасидан самарали фойдаланаётганлиги</p>
                                                    <p>(маҳалладаги ҳоким ёрдамчиси томонидан баҳоланади)</p>
                                                </td>
                                                <td width="49%">
                                                    <p>аъло</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">20</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>яхши</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>қониқарли</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">0</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>қониқарсиз</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">-5</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="4" width="4%">
                                                    <p align="center">6.</p>
                                                </td>
                                                <td rowspan="4" width="26%">
                                                    <p>Ишсиз оила аъзолари сони (ота-онаси, эр-хотини, фарзандлари)</p>
                                                </td>
                                                <td width="49%">
                                                    <p>4 киши ва ундан кўп</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">15</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>3 киши</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">10</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>2 киши</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">7</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p>1 киши</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">3</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" width="100%">
                                                    <p align="center"><strong>В-БЛОК. Қўшимча имкониятлар берувчи
                                                        коэффициентлар (автоматик равишда баҳоланади)</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3" width="4%">
                                                    <p align="center">7.</p>
                                                </td>
                                                <td colspan="2" width="75%">
                                                    <p>Ер участкаси жойлашган ҳудуд (МФИ)да яшовчи талабгор</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">2,0</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" width="75%">
                                                    <p>Ер участкаси жойлашган туманда, бироқ бошқа ҳудуд (МФЙ)да яшовчи
                                                        талабгор</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1,5</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" width="75%">
                                                    <p>Ер участкаси жойлашган вилоятда, бироқ бошқа туман (шаҳар)да
                                                        яшовчи талабгор</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1,1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="4%">
                                                    <p align="center">8.</p>
                                                </td>
                                                <td colspan="2" width="75%">
                                                    <p>&laquo;Темир дафтар&raquo;, &laquo;Аёллар дафтари&raquo; ва
                                                        &laquo;Ёшлар дафтари&raquo;га киритилган талабгор</p>
                                                </td>
                                                <td width="9%">
                                                    <p align="center">1,1</p>
                                                </td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" width="80%">
                                                    <p align="center"><strong>Жами</strong></p>
                                                </td>
                                                <td width="9%">&nbsp;</td>
                                                <td width="10%">&nbsp;</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </b-card-text>
                                </b-card-body>
                            </b-collapse>
                        </b-card>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Faq"
}
</script>

<style scoped>

</style>
