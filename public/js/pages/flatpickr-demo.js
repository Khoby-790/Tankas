'use strict';

// Flatpickr Demo
// https://flatpickr.js.org/
// =============================================================

var flatpickrDemos = {
    init: function init() {
        // basic
        flatpickr('#flatpickr01', {});

        // DateTime
        flatpickr('#flatpickr02', {
            disableMobile: true, // always use the non-native picker
            enableTime: true,
            dateFormat: 'Y-m-d H:i'
        });

        // Human-friendly Dates
        flatpickr('#flatpickr03', {
            disableMobile: true,
            altInput: true,
            altFormat: 'F j, Y',
            dateFormat: 'Y-m-d',
            onChange: function (selectedDates, dateStr, instance) {
                alert(selectedDates);
            }
        });
        // event handlers

        // minDate and maxDate
        flatpickr('#flatpickr04', {
            disableMobile: true,
            minDate: 'today',
            maxDate: new Date().fp_incr(14)
        });

        // Disabling dates
        flatpickr('#flatpickr05', {
            disableMobile: true,
            disable: ['2025-01-30', '2025-02-21', '2025-03-08', new Date(2025, 4, 9)],
            dateFormat: 'Y-m-d'
        });

        // Selecting multiple dates
        flatpickr('#flatpickr06', {
            disableMobile: true,
            mode: 'multiple',
            dateFormat: 'Y-m-d',
            defaultDate: ['2018-03-20', '2018-04-04']
        });

        // Range Calendar
        flatpickr('#flatpickr07', {
            disableMobile: true,
            mode: 'range',
            dateFormat: 'Y-m-d',
            defaultDate: ['2018-03-03', '2018-03-20']
        });

        // Time Picker
        flatpickr('#flatpickr08', {
            disableMobile: true,
            enableTime: true,
            noCalendar: true,
            dateFormat: 'H:i',
            defaultDate: '13:45'
        });

        // wrap element
        flatpickr('#flatpickr9', {
            disableMobile: true,
            wrap: true
        });

        // Inline Calendar
        flatpickr('#flatpickr10', {
            inline: true
        });
    }
};

flatpickrDemos.init();