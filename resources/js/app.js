require('./bootstrap');
require('admin-lte');

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';
$('#datepicker').datepicker();

//flatpickr
const flatpickr = window.flatpickr = require("flatpickr");
