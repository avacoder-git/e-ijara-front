(function ($) {
    $(function () {
        $('.table-expandable').each(function () {
            var table = $(this);
            table.children('thead').children('tr').append('<th></th>');
            table.children('tbody').children('tr').filter(':odd').hide();
            table.children('tbody').children('tr').filter(':even').click(function () {
                var element = $(this);
                element.next('').toggle('fast');

            });
            table.children('tbody').children('th').filter(':even').each(function () {
                var element = $(this);

            });
        });
    });
})(jQuery); 