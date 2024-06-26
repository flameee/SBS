jQuery(document).ready(function ($) {
    /*Generic Declarations*/

    let currentDataValue = $('.current-data-value')
    ajaxCalendar()

    function ajaxCalendar() {
        $(".loader-full-calendar-slot").toggleClass('hidden')
        $('.container-full-calendar-slot').html('')
        const month = parseInt(currentDataValue.attr('data-current-month'));
        const year = parseInt(currentDataValue.attr('data-current-year'));
        $('.current-date-textual').text(getMonthName(month) + ' ' + year)
        $.ajax({
            url: ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'render_calendar',
                month: month,
                year: year
            },
            success: function (response) {
                // Gestisci la risposta (ad esempio, aggiorna il contenuto del div)
                $(".loader-full-calendar-slot").toggleClass('hidden')
                $('.container-full-calendar-slot').html(response);
            },
            error: function (xhr, status, error) {
                console.log('AJAX Error: ' + error);
            }
        });
    }

    /*Month Controller for Data*/

    $('.month-controller-container .previous-month').on('click', function () {
        let currentMonth = parseInt(currentDataValue.attr('data-current-month'));
        let currentYear = parseInt(currentDataValue.attr('data-current-year'));
        if (currentMonth === 1) {
            currentMonth = 12;
            currentYear -= 1;
        } else {
            currentMonth -= 1;
        }
        currentDataValue.attr('data-current-month', currentMonth);
        currentDataValue.attr('data-current-year', currentYear);
        ajaxCalendar()
    });

    $('.month-controller-container .next-month').on('click', function () {
        let currentMonth = parseInt(currentDataValue.attr('data-current-month'));
        let currentYear = parseInt(currentDataValue.attr('data-current-year'));
        if (currentMonth === 12) {
            currentMonth = 1;
            currentYear += 1;
        } else {
            currentMonth += 1;
        }
        currentDataValue.attr('data-current-month', currentMonth);
        currentDataValue.attr('data-current-year', currentYear);
        ajaxCalendar()
    });

    $(".calendar-set-today").on('click', function () {
        const month = parseInt($(this).attr('data-today-month'))
        const year = parseInt($(this).attr('data-today-year'))
        currentDataValue.attr('data-current-month', month);
        currentDataValue.attr('data-current-year', year);
        ajaxCalendar()
    })

    function getMonthName(month) {
        let monthNames = ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"];
        return monthNames[month - 1];
    }


});

function toggleSlideover(e) {
    const name = jQuery(e).attr('data-title')
    const slot = jQuery(e).attr('data-selected-slot')
    jQuery('#event-name').text(name)
    jQuery('#event-slot').text(slot)
    jQuery('#slideover-container').toggleClass('invisible');
    jQuery('#slideover-bg').toggleClass('backdrop-blur-none backdrop-blur');
    jQuery('#slideover').toggleClass('translate-x-full');
}
