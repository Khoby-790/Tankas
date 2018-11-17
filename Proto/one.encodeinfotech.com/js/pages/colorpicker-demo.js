'use strict';

// Colorpicker Demo
//https://farbelous.io/bootstrap-colorpicker
// =============================================================

var colorPickerDemo = {
    init: function init() {
        // Simple input field
        $('#colorpicker1').colorpicker();

        // As a component
        $('#colorpicker2').colorpicker();

        // With custom options
        $('#colorpicker3').colorpicker({
            color: '#4D9DE0',
            format: 'rgb'
        });

        // Disable alpha channel
        $('#colorpicker4').colorpicker({
            useAlpha: false
        });

        // Transparent color support
        $('#colorpicker5').colorpicker({
            color: 'transparent',
            format: 'hex'
        });

        // Horizontal mode
        $('#colorpicker6').colorpicker({
            color: '#C5906C',
            horizontal: true
        });

        // Inline mode
        $('#colorpicker7').colorpicker({
            color: '#C56C6C',
            container: true,
            inline: true
        });

        // Aliased color palette
        $('#colorpicker8').colorpicker({
            extensions: [{
                name: 'swatches',
                colors: {
                    'black': '#000000',
                    'white': '#ffffff',
                    'red': '#FF0000',
                    'default': '#777777',
                    'primary': '#337ab7',
                    'success': '#5cb85c',
                    'info': '#5bc0de',
                    'warning': '#f0ad4e',
                    'danger': '#d9534f'
                },
                namesAsValues: true
            }]
        });

        // Custom template
        $('#colorpicker9').colorpicker({
            inline: true,
            container: true,
            extensions: [],
            template: '<div class="colorpicker">\n        <div class="colorpicker-saturation"><i class="colorpicker-guide"><i></i></i></div>\n        <div class="colorpicker-hue"><i class="colorpicker-guide"></i></div>\n        <div class="colorpicker-alpha"><i class="colorpicker-guide"></i></div>\n        <div class="colorpicker-bar hsv-output"></div>\n      </div>'
        }).on('colorpickerChange colorpickerCreate', function (e) {
            var output = e.colorpicker.element.find('.hsv-output');
            output.html(e.color.toHsvString()).css('background-color', e.color.toRgbString());

            if (e.color.isDark()) {
                output.css('color', 'white');
            } else {
                output.css('color', 'black');
            }
        });

        // Inside a modal
        $('#colorpicker10').colorpicker();
    }
};

colorPickerDemo.init();