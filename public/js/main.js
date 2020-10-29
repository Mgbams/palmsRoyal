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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * main.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2015, Codrops
 * http://www.codrops.com
 */
;

(function (window) {
  'use strict';

  var support = {
    transitions: Modernizr.csstransitions
  },
      // transition end event name
  transEndEventNames = {
    'WebkitTransition': 'webkitTransitionEnd',
    'MozTransition': 'transitionend',
    'OTransition': 'oTransitionEnd',
    'msTransition': 'MSTransitionEnd',
    'transition': 'transitionend'
  },
      transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
      onEndTransition = function onEndTransition(el, callback) {
    var onEndCallbackFn = function onEndCallbackFn(ev) {
      if (support.transitions) {
        if (ev.target != this) return;
        this.removeEventListener(transEndEventName, onEndCallbackFn);
      }

      if (callback && typeof callback === 'function') {
        callback.call(this);
      }
    };

    if (support.transitions) {
      el.addEventListener(transEndEventName, onEndCallbackFn);
    } else {
      onEndCallbackFn();
    }
  },
      // the pages wrapper
  stack = document.querySelector('.pages-stack'),
      // the page elements
  pages = [].slice.call(stack.children),
      // total number of page elements
  pagesTotal = pages.length,
      // index of current page
  current = 0,
      // menu button
  menuCtrl = document.querySelector('button.menu-button'),
      // the navigation wrapper
  nav = document.querySelector('.pages-nav'),
      // the menu nav items
  navItems = [].slice.call(nav.querySelectorAll('.link--page')),
      // check if menu is open
  isMenuOpen = false;

  function init() {
    buildStack();
    initEvents();
  }

  function buildStack() {
    var stackPagesIdxs = getStackPagesIdxs(); // set z-index, opacity, initial transforms to pages and add class page--inactive to all except the current one

    for (var i = 0; i < pagesTotal; ++i) {
      var page = pages[i],
          posIdx = stackPagesIdxs.indexOf(i);

      if (current !== i) {
        classie.add(page, 'page--inactive');

        if (posIdx !== -1) {
          // visible pages in the stack
          page.style.WebkitTransform = 'translate3d(0,100%,0)';
          page.style.transform = 'translate3d(0,100%,0)';
        } else {
          // invisible pages in the stack
          page.style.WebkitTransform = 'translate3d(0,75%,-300px)';
          page.style.transform = 'translate3d(0,75%,-300px)';
        }
      } else {
        classie.remove(page, 'page--inactive');
      }

      page.style.zIndex = i < current ? parseInt(current - i) : parseInt(pagesTotal + current - i);

      if (posIdx !== -1) {
        page.style.opacity = parseFloat(1 - 0.1 * posIdx);
      } else {
        page.style.opacity = 0;
      }
    }
  } // event binding


  function initEvents() {
    // menu button click
    menuCtrl.addEventListener('click', toggleMenu); // navigation menu clicks

    navItems.forEach(function (item) {
      // which page to open?
      var pageid = item.getAttribute('href').slice(1);
      item.addEventListener('click', function (ev) {
        ev.preventDefault();
        openPage(pageid);
      });
    }); // clicking on a page when the menu is open triggers the menu to close again and open the clicked page

    pages.forEach(function (page) {
      var pageid = page.getAttribute('id');
      page.addEventListener('click', function (ev) {
        if (isMenuOpen) {
          ev.preventDefault();
          openPage(pageid);
        }
      });
    }); // keyboard navigation events

    document.addEventListener('keydown', function (ev) {
      if (!isMenuOpen) return;
      var keyCode = ev.keyCode || ev.which;

      if (keyCode === 27) {
        closeMenu();
      }
    });
  } // toggle menu fn


  function toggleMenu() {
    if (isMenuOpen) {
      closeMenu();
    } else {
      openMenu();
      isMenuOpen = true;
    }
  } // opens the menu


  function openMenu() {
    // toggle the menu button
    classie.add(menuCtrl, 'menu-button--open'); // stack gets the class "pages-stack--open" to add the transitions

    classie.add(stack, 'pages-stack--open'); // reveal the menu

    classie.add(nav, 'pages-nav--open'); // now set the page transforms

    var stackPagesIdxs = getStackPagesIdxs();

    for (var i = 0, len = stackPagesIdxs.length; i < len; ++i) {
      var page = pages[stackPagesIdxs[i]];
      page.style.WebkitTransform = 'translate3d(0, 75%, ' + parseInt(-1 * 200 - 50 * i) + 'px)'; // -200px, -230px, -260px

      page.style.transform = 'translate3d(0, 75%, ' + parseInt(-1 * 200 - 50 * i) + 'px)';
    }
  } // closes the menu


  function closeMenu() {
    // same as opening the current page again
    openPage();
  } // opens a page


  function openPage(id) {
    var futurePage = id ? document.getElementById(id) : pages[current],
        futureCurrent = pages.indexOf(futurePage),
        stackPagesIdxs = getStackPagesIdxs(futureCurrent); // set transforms for the new current page

    futurePage.style.WebkitTransform = 'translate3d(0, 0, 0)';
    futurePage.style.transform = 'translate3d(0, 0, 0)';
    futurePage.style.opacity = 1; // set transforms for the other items in the stack

    for (var i = 0, len = stackPagesIdxs.length; i < len; ++i) {
      var page = pages[stackPagesIdxs[i]];
      page.style.WebkitTransform = 'translate3d(0,100%,0)';
      page.style.transform = 'translate3d(0,100%,0)';
    } // set current


    if (id) {
      current = futureCurrent;
    } // close menu..


    classie.remove(menuCtrl, 'menu-button--open');
    classie.remove(nav, 'pages-nav--open');
    onEndTransition(futurePage, function () {
      classie.remove(stack, 'pages-stack--open'); // reorganize stack

      buildStack();
      isMenuOpen = false;
    });
  } // gets the current stack pages indexes. If any of them is the excludePage then this one is not part of the returned array


  function getStackPagesIdxs(excludePageIdx) {
    var nextStackPageIdx = current + 1 < pagesTotal ? current + 1 : 0,
        nextStackPageIdx_2 = current + 2 < pagesTotal ? current + 2 : 1,
        idxs = [],
        excludeIdx = excludePageIdx || -1;

    if (excludePageIdx != current) {
      idxs.push(current);
    }

    if (excludePageIdx != nextStackPageIdx) {
      idxs.push(nextStackPageIdx);
    }

    if (excludePageIdx != nextStackPageIdx_2) {
      idxs.push(nextStackPageIdx_2);
    }

    return idxs;
  }

  init(); //changes to a page such as id="page-manuals" without opening the menu and preserving menu transition functionality

  window.openPageNoTransition = function (id) {
    var futurePage = id ? document.getElementById(id) : pages[current],
        futureCurrent = pages.indexOf(futurePage),
        stackPagesIdxs = getStackPagesIdxs(futureCurrent); // set transforms for the new current page

    futurePage.style.WebkitTransform = 'translate3d(0, 0, 0)';
    futurePage.style.transform = 'translate3d(0, 0, 0)';
    futurePage.style.opacity = 1;
    classie.remove(futurePage, 'page--inactive'); // set current

    if (id) {
      current = futureCurrent;
    }

    buildStack();
  };
})(window);

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/main.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\Utilisateur\Desktop\palmsRoyal\resources\js\main.js */"./resources/js/main.js");


/***/ })

/******/ });