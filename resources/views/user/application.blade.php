@extends('layouts.dashboard')

@section('content')

    <div class="container">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Фойдаланиш шартлари</h5>
            </div>

            <div class="modal-body ht-250 px-5 scrollbar-sm pos-relative" style="overflow-y: scroll; height: 65vh">
                <h6 class="tx-color-01 h5 text-center">«E-IJARA» axborot tizimiga xush kelibsiz!</h6>
                <p class="mg-b-20 text-justify">«E-IJARA» axborot tizimiga (o‘rinlarda - Tizim) kirganingizda yoki
                    foydalanganingizda, siz ushbu maxfiylik siyosati va foydalanish shartlarini to‘liq qabul
                    qilasiz.</p>
                <h6 class="tx-color-01 h5 text-center">Shartlarni qabul qilish</h6>
                <p class="mg-b-20 text-justify">Ushbu Tizimga kirib, Siz ushbu Shartlarga roziligingizni bildirasiz.
                    Ushbu Shartlarga qo‘shimchalar va o‘zgartirishlar kiritilishi mumkin va yangilangan Shartlar
                    oldindan ogohlantirishsiz tizimga joylashtiriladi.
                    “Agrosanoatni raqamlashtirish markazi” davlat muassasasi Foydalanuvchi yoki boshqa tomonlar oldida
                    Tizimning ishlashi, Tizimda keltirilgan xizmatlar yoki mahsulotlar tufayli kelib chiqadigan har
                    qanday yo‘qotishlar, shu jumladan, beparvolik yoki boshqa holatlar tufayli ma’lumotlarni yo’qotish,
                    foyda yo‘qotish bilan bog‘liq to’g’ridan-to‘g‘ri va be’vosita yo‘qotishlar uchun javobgar emas.
                </p>
                <h6 class="tx-color-01 h5 text-center">«E-IJARA» axborot tizimi </h6>
                <p class="mg-b-20 text-justify">Ushbu Tizimda Siz, qishloq xo‘jaligiga mo‘ljallangan bo‘sh yer
                    uchastkalarini ijaraga olish tartibiga doir normativ-huquqiy hujjatlar haqida ma‘lumot olishingiz va
                    bo‘sh turgan yer uchastkasi to‘g‘risidagi ma’lumotlarni ochiq elecktron tanlovga qo‘yish masalasini
                    belgilangan tartibda ko‘rib chiqish uchun takliflar kiritishingiz mumkin.</p>
                <h6 class="tx-color-01 h5 text-center">Cookie-fayllar haqida ma’lumot</h6>
                <p class="mg-b-20 text-justify">«E-IJARA» axborot tizimining ba’zi bo‘limlari parol bilan himoyalangan.
                    Siz Tizimning parol bilan himoyalangan bo‘limlariga parolni qaytadan kiritishsiz kirishingiz uchun
                    Tizim cookie fayllarni ishlatadi (cookies kompyuteringizda joylashgan bo‘lib sizning
                    Internet-brauzeringiz boshqaruvi ostida bo‘ladi).</p>
                <h6 class="tx-color-01 h5 text-center">Tizimga kirish va shaxsiy kabinetingiz xavfsizligi</h6>
                <p class="mg-b-20 text-justify">Shaxsiy kabinetingiz siz taqdim etgan elektron pochta manzili orqali
                    identifikatsiyalashtiriladi, va siz loginingizdan (elektron pochta manzili) foydalanish huquqiga ega
                    yagona shaxs hisoblanasiz. Shaxsiy kabinet va har qanday tanlagan parollaringiz sir saqlanishiga
                    mas’uldirsiz, aks holda sizga akkauntingizga kirish taqiqlab qo‘yilishi mumkin.
                    Sizning ruxsatingizdan qat’iy nazar, Shaxsiy kabinetingizdan har qanday foydalanishlarga siz
                    javobgarsiz. Agar, Shaxsiy kabinet va/yoki parolingiz boshqa shaxs tomonidan foydalanilayotgani
                    haqida shubha qilsangiz, darhol id.egov.uz manzili orqali parolingizni yangilang.
                    Siz Tizimda bir Shaxsiy kabinetdan tashqari boshqa Shaxsiy kabinetlar bilan ro‘yxatdan o‘tmaslikka
                    roziligingizni bildirasiz. Siz soxta nom bilan ro‘yxatdan o‘ta olmaysiz.
                </p>
                <h6 class="tx-color-01 h5 text-center">Foydalanish cheklovlari</h6>
                <p class="mg-b-20 text-justify">«E-IJARA» axborot tizimidan ushbu foydalanish shartlariga muvofiq
                    faqatgina qonuniy maqsadlar uchun foydalanishingizga roziligingizni bildirasiz:
                </p>
                <ul>
                    <li>Tizimni ishlashini to‘xtatishga, ortiqcha yuklanishiga, zarar yetkazilishiga va boshqa salbiy
                        oqibatlarga olib keladigan, hamda boshqa foydalanuvchilarning tizimdan real vaqt rejimida
                        ishlashiga to‘sqinlik yoki halaqit berishga oid har qanday harakatlarni amalga oshirmaslikka;
                    </li>
                    <li>Tizimning normal ishlashiga halaqit beradigan har qanday qurilmalar, dasturiy ta’minotlar va
                        jarayonlarni qo‘llamaslikka;</li>
                    <li>Virus va boshqa zararli materiallarni qo‘llamaslikka;</li>
                    <li>Tizimga avtorizatsiyasiz kirishga xarakat qilmaslikka, hamda Tizimning ma’lumotlari joylashgan
                        serverlar va Tizimning barcha bo‘limlari uzluksiz ishlashiga halaqit va zarar bermaslikka;</li>
                    <li>Xizmatni rad etish yoki xizmat ko‘rsatishni taqiqlash orqali tizimning ishlashiga to‘sqinlik
                        qilmaslikka;</li>
                    <li>Tizimning normal ishlashiga to‘sqinlik qilmaslikka.</li>
                </ul>
                <h6 class="tx-color-01 h5 text-center">Majburiyatlar</h6>
                <p class="mg-b-20 text-justify">
                    «E-IJARA» axborot tizimidan foydalanganda, sizning shaxsiy ma’lumotlaringizni to‘plash, qayta
                    ishlash va ishlatish haqida xabardorligingizni tasdiqlaysiz. Shaxsiy ma’lumotlarni yig‘ish, saqlash
                    va qayta ishlashning maqsadi, foydalanuvchini shaxsiylashtirilgan Tizim xizmatlari bilan
                    ta’minlashdir, jumladan, shaxsiy kabinet, avtorizatsiyalash, parolni eslatishga ruxsat berish, hamda
                    xabarnomalar yuborish va foydalanuvchining talablarini bajarish kiradi.
                    «E-IJARA» axborot tizimi xizmatlaridan foydalanishni ta’minlash uchun, shaxsiy ma’lumotlarni qayta
                    ishlashga foydalanuvchining shaxsiy ma’lumotlarini yig‘ish, ro‘yxatdan o‘tkazish, to‘plash, saqlash,
                    ulardan foydalanish, o‘chirish bilan bog‘liq har qanday harakatlar va/yoki faoliyat turlari kiradi.

                </p>
                <h6 class="tx-color-01 h5 text-center">Shaxsiy ma’lumotlarni qayta ishlash</h6>
                <p class="mg-b-20 text-justify">«E-IJARA» axborot tizimidan foydalanganda, sizning shaxsiy
                    ma’lumotlaringizni to‘plash, qayta ishlash va ishlatish haqida xabardorligingizni tasdiqlaysiz.
                    Shaxsiy ma’lumotlarni yig‘ish, saqlash va qayta ishlashning maqsadi, foydalanuvchini
                    shaxsiylashtirilgan Tizim xizmatlari bilan ta’minlashdir, jumladan, shaxsiy kabinet,
                    avtorizatsiyalash, parolni eslatishga ruxsat berish, hamda xabarnomalar yuborish va
                    foydalanuvchining talablarini bajarish kiradi.
                    «E-IJARA» axborot tizimi xizmatlaridan foydalanishni ta’minlash uchun, shaxsiy ma’lumotlarni qayta
                    ishlashga foydalanuvchining shaxsiy ma’lumotlarini yig‘ish, ro‘yxatdan o‘tkazish, to‘plash, saqlash,
                    ulardan foydalanish, o‘chirish bilan bog‘liq har qanday harakatlar va/yoki faoliyat turlari kiradi.
                </p>

            </div>

            <div class="modal-footer">
                <a href="{{ route('user.application.map') }}" type="button" class="btn d-block btn-primary">Розиман</a>
            </div>

        </div>
    </div>

@endsection
