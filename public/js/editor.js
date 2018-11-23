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
/******/ 	return __webpack_require__(__webpack_require__.s = 50);
/******/ })
/************************************************************************/
/******/ ({

/***/ 50:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(51);


/***/ }),

/***/ 51:
/***/ (function(module, exports) {

console.log('loaded editor js');

window.addEventListener('DOMContentLoaded', function () {

    // Instanciamos objeto MediumEditor en el div.editable.
    var editor = new MediumEditor('.editable', {
        toolbar: {
            updateOnEmptySelection: true,
            buttons: ['bold', 'italic', 'underline', 'anchor', 'h3', 'h4', 'quote']
        }
    });

    // Apuntamos a nuestro input para obtener el valor del titulo
    var title = document.querySelector('input[name="title"]');
    var user_id = document.querySelector('input[name="user_id"]');

    var publishBtn = document.querySelector('button#publishBtn');
    var saveBtn = document.querySelector('button#saveBtn');

    // Apuntamos a nuestro article body para objetener el valor del mismo
    var content = document.querySelector('#article');

    var formData = new FormData();

    var form = document.getElementById('editorMain');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
    });

    publishBtn.addEventListener('click', function (e) {
        e.preventDefault();

        var that = this;

        previousHTML = this.innerHTML;
        this.innerHTML = previousHTML + "<i class='fas fa-spin fa-circle-notch'></i>";
        saveBtn.disabled = true;
        this.disabled = true;

        formData.append('title', title.value);
        formData.append('content', content.innerHTML);
        formData.append('user_id', user_id.value);

        console.log(that);

        setTimeout(function () {
            console.log(that);
            button = that;
            console.log('timeout');
            fetch('/api/article', {
                method: "POST",
                body: formData
            }).then(function (response) {
                return response.json();
            }).then(function (response) {
                button.classList.add('success');
                button.innerHTML = "<i class='fas fa-spin fa-circle-notch'></i>";
                console.log(response);
                location.href = location.protocol + '/articles/' + response.article.id;
            }).catch(function (data) {
                console.log('data', data);
            });
        }, 2000);
    });

    saveBtn.addEventListener('click', function (e) {
        e.preventDefault();

        formData.append('title', title.value);
        formData.append('content', content.innerHTML);
        formData.append('user_id', user_id.value);

        fetch('/api/article', {
            method: "POST",
            body: formData
        }).then(function (response) {
            console.log(formData);
            response.json();
        }).then(function (data) {
            console.log('data', data);
        }).catch(function (data) {
            console.log('data', data);
        });
    });
});

/***/ })

/******/ });