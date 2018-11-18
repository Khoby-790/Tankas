'use strict';

// Typeahead Demo
// https://github.com/bassjobsen/Bootstrap-3-Typeahead
// =============================================================

var typeaheadDemo = {
    init: function init() {

        this.bindUIActions();
    },
    bindUIActions: function bindUIActions() {

        // event handlers
        this.basic();
        this.prefetch();
        this.remote();
        this.customTemplates();
        this.selectedValue();
    },

    basic: function basic() {
        var states = this.getStates();
        $('#the-basics, #the-basics-a').typeahead({
            source: states,
            autoSelect: false,
            fitToElement: true,
            items: 10
        });
    },
    prefetch: function prefetch() {

        $.get("/js/data/countries.json", function (data) {
            $("#prefetch, #prefetch-a").typeahead({ fitToElement: true, source: data });
        }, 'json');
    },
    remote: function remote() {
        var typeheadTimeout;
        $('#remote, #remote-a').typeahead({
            fitToElement: true,
            source: function (query, process) {
                try {
                    clearTimeout(typeheadTimeout);
                }
                catch (e) { }
                typeheadTimeout = setTimeout(function () {
                    return $.get('/Masters/Countries/LoadCountries', { q: query }, function (data) {
                        return process(data);
                    });
                }, 400);
            }
        });
    },
    customTemplates: function customTemplates() {
        var typeheadTimeout;
        $('#custom-templates, #custom-templates-a').typeahead({
            fitToElement: true,
            autoSelect: true,
            changeInputOnMove: false,
            source: function (query, process) {
                try {
                    clearTimeout(typeheadTimeout);
                }
                catch (e) { }
                typeheadTimeout = setTimeout(function () {
                    return $.get('/Masters/Countries/LoadCountries', { q: query }, function (data) {
                        return process(data);
                    });
                }, 400);
            },
            displayText: function (item) {
                return item.name + ' - <span class="small">' + item.code + '</span>'
            },
            afterSelect: function (item) {
                $(this)[0].$element.val(item.name).change();
            }
        });
    },
    selectedValue: function selectedValue() {
        var states = this.getStates();
        $('#selected-event, #selected-event-a').typeahead({
            source: states,
            autoSelect: false,
            fitToElement: true,
            items: 10,
            afterSelect: function (item) {
                alert(item);
            }
        });
    },
    getStates: function getStates() {
        return ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];
    }
};
typeaheadDemo.init();