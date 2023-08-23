import './bootstrap';
import 'fomantic-ui-css/semantic.js';

$(document).ready(function () {
  // fix menu when passed
  $('#nav-section').visibility({
    once: false,
    onBottomPassed: function () {
      $('#attached-navbar').transition('fade in');
    },
    onBottomPassedReverse: function () {
      $('#attached-navbar').transition('fade out');
    }
  });
});

$('.ui.dropdown').dropdown();