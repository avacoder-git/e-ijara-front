jQuery(function ($) {
    $(".email-field").inputmask({alias: "email"});
    $(".phone-field").inputmask("999999999");
    $(".passport-field").inputmask("AA9999999");

    $(document).on("wheel", "input[type=number]", function (e) {
        $(this).blur();
    });

    $.fn.datepicker.dates['en'] = {
        days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        daysMin: ["Як", "Ду", "Се", "Чо", "Па", "Жу", "Ша"],
        months: ["Январ", "Феврал", "Март", "Апрел", "Май", "Июн", "Июл", "Август", "Сентябр", "Октябр", "Ноябр", "Декабр"],
        monthsShort: ["Янв", "Фев", "Март", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"],
        today: "Сегодня",
        clear: "Очистить",
        format: "dd.mm.yyyy",
        titleFormat: "MM yyyy",
        weekStart: 1
    };

    $('.date-field').datepicker({
        language: 'ru',
        format: 'dd.mm.yyyy',
        weekStart: 1,
        autoclose: 1
    });

    $('#checkAllPermissions').on('click', function() {
        if(!$(this).hasClass('checked-all'))
            $('.permissions-list .custom-checkbox').prop('checked', true);
        else
            $('.permissions-list .custom-checkbox').prop('checked', false);

        $(this).toggleClass('checked-all');
    });
});
