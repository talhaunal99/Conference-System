require('./bootstrap');

require('alpinejs');

const flatpickr = window.flatpickr = require("flatpickr");
$(document).ready(function() {
    new flatpickr(document.querySelectorAll('.js-datepicker'), {
        altInputClass: '',
        altInput: true,
        altFormat: 'd.m.Y',
        dateFormat: 'Y-m-d',
    });
});
