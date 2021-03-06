/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/availability-calendar.js":
/*!***********************************************!*\
  !*** ./resources/js/availability-calendar.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($) {
  var weekdays = ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'];
  var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

  function AvailabilityCalendar(container, bookedDates) {
    this.date = new Date();
    this.date.setDate(1);
    this.container = container;
    this.bookedDates = bookedDates;
    this.createCalendar();
    this.renderMonth();
  }

  AvailabilityCalendar.prototype = {
    /**
     * Setup methods
     */
    __createToolbar: function __createToolbar() {
      var $toolbar = $('<div></div>').appendTo(this.container);
      $toolbar.addClass('availability-calendar-toolbar');
      this.$monthLabel = $('<span></span>').appendTo($toolbar);
      var $inputContainer = $('<span></span>').appendTo($toolbar);
      $inputContainer.append('<input type="button" title="This month" value="This Month">');
      $inputContainer.append('<input type="button" title="Previous month" value="&#10094;">');
      $inputContainer.append('<input type="button" title="Next month" value="&#10095;">');
      var $inputs = $inputContainer.children('input');
      var self = this;
      $inputs.eq(0).on('click', function () {
        self.date = new Date();
        self.date.setDate(1);
        self.renderMonth();
      });
      $inputs.eq(1).on('click', function () {
        self.date.setMonth(self.date.getMonth() - 1);
        self.renderMonth();
      });
      $inputs.eq(2).on('click', function () {
        self.date.setMonth(self.date.getMonth() + 1);
        self.renderMonth();
      });
    },
    __createTable: function __createTable() {
      var $table = $('<table></table>').appendTo(this.container);
      $table.addClass('availability-calendar'); // Weekday headers

      var $tr = $('<tr></tr>').appendTo($table);
      weekdays.forEach(function (day) {
        $('<th></th>').html(day).appendTo($tr);
      }); // Day cells

      for (var i = 0; i < 6; ++i) {
        $tr = $('<tr></tr>').appendTo($table);
        $tr.append('<td></td><td></td><td></td><td></td><td></td><td></td><td></td>');
      }

      this.$cells = $table.find('td');
    },
    createCalendar: function createCalendar() {
      this.__createToolbar();

      this.__createTable();
    },

    /**
     * Month rendering methods
     */
    __addPreviousMonthDays: function __addPreviousMonthDays(date, cellIndexes, dates) {
      var firstWeekdayOfMonth = date.getDay() - 1;
      if (firstWeekdayOfMonth < 0) firstWeekdayOfMonth = 6;

      if (firstWeekdayOfMonth > 0) {
        date.setDate(0);
        var numDays = date.getDate();

        for (var i = numDays - firstWeekdayOfMonth + 1; i <= numDays; ++i) {
          this.$cells.eq(dates.length).html(i).addClass('ex-month');
          date.setDate(i);
          var dateInt = date.valueOf();
          cellIndexes[dateInt] = dates.length;
          dates.push(dateInt);
        }
      }
    },
    __addThisMonthDays: function __addThisMonthDays(date, year, month, cellIndexes, dates) {
      date.setFullYear(year, month + 1, 0); // Need to reset year

      var numDays = date.getDate();

      for (var i = 1; i <= numDays; ++i) {
        this.$cells.eq(dates.length).html(i);
        date.setDate(i);
        var dateInt = date.valueOf();
        cellIndexes[dateInt] = dates.length;
        dates.push(dateInt);
      }
    },
    __addNextMonthDays: function __addNextMonthDays(date, month, cellIndexes, dates) {
      if (dates.length < 42) {
        date.setMonth(month + 1, 1);
        var remainingDays = 42 - dates.length;

        for (var i = 1; i <= remainingDays; ++i) {
          this.$cells.eq(dates.length).html(i).addClass('ex-month');
          date.setDate(i);
          var dateInt = date.valueOf();
          cellIndexes[dateInt] = dates.length;
          dates.push(dateInt);
        }
      }
    },
    __addEvents: function __addEvents(cellIndexes, dates) {
      var firstDate = dates[0];
      var lastDate = dates[dates.length - 1];
      var self = this;
      this.bookedDates.forEach(function (date) {
        if (date.start <= lastDate && date.end >= firstDate) {
          var startIndex = cellIndexes[date.start];
          var endIndex = cellIndexes[date.end];

          if (startIndex !== undefined) {
            self.$cells.eq(startIndex).addClass('unavailable').append('<div class="first"></div>');
            ++startIndex;
          } else {
            startIndex = cellIndexes[firstDate];
          }

          if (endIndex !== undefined) {
            self.$cells.eq(endIndex).addClass('unavailable').append('<div class="last"></div>');
            --endIndex;
          } else {
            endIndex = cellIndexes[lastDate];
          }

          self.$cells.slice(startIndex, endIndex + 1).addClass('unavailable').append('<div></div>');
        }
      });
    },
    renderMonth: function renderMonth() {
      var cellIndexes = {};
      var dates = [];
      var year = this.date.getFullYear();
      var month = this.date.getMonth();
      var date = new Date(year, month, 1);
      this.$monthLabel.html(months[month] + ' ' + year);
      this.$cells.removeClass('ex-month');
      this.$cells.filter('.unavailable').removeClass('unavailable').children().remove();

      this.__addPreviousMonthDays(date, cellIndexes, dates);

      this.__addThisMonthDays(date, year, month, cellIndexes, dates);

      this.__addNextMonthDays(date, month, cellIndexes, dates);

      this.__addEvents(cellIndexes, dates);
    }
  };

  $.fn.availabilityCalendar = function (bookedDates) {
    var dates = [];
    bookedDates.forEach(function (date) {
      var start = new Date(date.start);
      var end = new Date(date.end);
      start.setHours(0, 0, 0, 0);
      end.setHours(0, 0, 0, 0);
      start = start.valueOf();
      end = end.valueOf();

      if (start <= end) {
        dates.push({
          start: start,
          end: end
        });
      }
    });
    this.each(function () {
      new AvailabilityCalendar(this, dates);
    });
    return this;
  };
})(jQuery);

/***/ }),

/***/ 4:
/*!*****************************************************!*\
  !*** multi ./resources/js/availability-calendar.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\Utilisateur\Desktop\palmsRoyal\resources\js\availability-calendar.js */"./resources/js/availability-calendar.js");


/***/ })

/******/ });