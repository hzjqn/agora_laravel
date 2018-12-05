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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

var _this = this;

window.addEventListener('DOMContentLoaded', function (e) {
  // Navbar article lenght/progress indicator
  var articleProgressIndicator = document.getElementById('navbarArticleProgressIndicator');
  articleProgressIndicator.addEventListener('scroll', function () {
    _this.boderColor = '#333';
    console.log(_this);
  }); // Navbar not on top styles

  var navbar = document.getElementsByClassName('navbar-agora')[0];
  window.addEventListener('scroll', function () {
    changeNavbar();
  });

  function changeNavbar() {
    if (window.scrollY > 10) {
      navbar.classList.add('not');
    } else {
      navbar.classList.remove('not');
    }
  } // Follow button and form


  function initFollowForm(parent) {
    var followForms = parent.getElementsByClassName('follow-form');

    for (var i = 0; i < followForms.length; i++) {
      var form = followForms[i];
      form.addEventListener('submit', function (e) {
        e.preventDefault();

        if (this.getAttribute('method') == 'post') {
          follow(this);
        } else if (this.getAttribute('method') == 'delete') {
          unfollow(this);
        }
      });
    }
  }

  function follow(form) {
    fetch('/follow', {
      method: "POST",
      body: new FormData(form)
    }).then(function (res) {
      return res.json();
    }).then(function (res) {
      if (res.status == 'ok') {
        var followBtn = form.getElementsByClassName('follow-btn')[0];
        followBtn.innerHTML = res.followbtn.html;
        followBtn.classList.remove('follow');
        followBtn.classList.add('unfollow');
        form.setAttribute('method', 'delete');
      } else {
        console.log(res.status);
      }
    }).catch(function (err) {
      console.log(err);
    });
  }

  function unfollow(form) {
    var formData = new FormData(form);
    formData.append('_method', 'DELETE');
    fetch('/unfollow', {
      method: "POST",
      body: formData
    }).then(function (res) {
      return res.json();
    }).then(function (res) {
      if (res.status == 'ok') {
        var followBtn = form.getElementsByClassName('follow-btn')[0];
        followBtn.innerHTML = res.followbtn.html;
        followBtn.classList.remove('unfollow');
        followBtn.classList.add('follow');
        form.setAttribute('method', 'post');
      } else {
        console.log(res.status);
      }
    }).catch(function (err) {
      console.log(err);
    });
  }

  if (document.getElementsByClassName('follow-form')) {
    initFollowForm(document);
  }
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);