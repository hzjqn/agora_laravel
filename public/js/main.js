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
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
/******/ })
/************************************************************************/
/******/ ({

/***/ 44:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(45);


/***/ }),

/***/ 45:
/***/ (function(module, exports) {

window.onload = function () {

    var cantidadTareasAAgregar = 0;
    var appTitle = document.querySelector('h1');
    var toolTips = document.querySelector('#tooltips');
    var taskPendingCounter = document.createElement('h2');
    taskPendingCounter.classList.add('tasks-done-counter');
    toolTips.prepend(taskPendingCounter);
    var tasksDoneCounter = document.createElement('h2');
    tasksDoneCounter.classList.add('tasks-done-counter');
    toolTips.prepend(tasksDoneCounter);
    console.log(tasksDoneCounter);
    var confirmed = void 0;
    var tareas = [];
    var tareasRealizadas = [];
    var taskUl = document.querySelector('#task-list');

    while (!confirmed) {
        do {
            cantidadTareasAAgregar = prompt('Inidque la cantidad de tareas que desea programar.');
            if (isNaN(parseInt(cantidadTareasAAgregar)) || cantidadTareasAAgregar <= 0) {
                alert('La cantidad de tareas debe ser un numero entero mayor a 0.');
            }
        } while (isNaN(parseInt(cantidadTareasAAgregar)) || cantidadTareasAAgregar <= 0);

        confirmed = confirm('Desea programar ' + cantidadTareasAAgregar + ' tarea(s)?');
    }

    for (var i = 0; i < cantidadTareasAAgregar; i++) {
        var nuevaTarea = { "titulo": "",
            "contenido": ""
        };
        do {
            console.log('do');
            var titulo = prompt('Titule su tarea N° ' + (i + 1));
            nuevaTarea.titulo = titulo;
            tareas.push(nuevaTarea);
        } while (titulo == '' || titulo == null);
    }

    for (var _i = 0; _i < tareas.length; _i++) {
        console.log('do2');
        var newLi = document.createElement('li');
        var newCloseBtn = document.createElement('span');
        newLi.classList.add('task');
        newLi.innerHTML = '<h3>' + tareas[_i].titulo + '</h3>';
        newCloseBtn.classList.add('x-button');
        newCloseBtn.innerHTML = 'x';
        newLi.append(newCloseBtn);
        console.log(newLi, taskUl, newCloseBtn);
        taskUl.append(newLi);
        console.log(newLi, taskUl);
        console.log(newCloseBtn);

        newCloseBtn.addEventListener('click', function () {
            console.log(this);
            this.parentElement.parentElement.removeChild(this.parentElement);
        });
    }

    tasksDoneCounter.innerHTML = 'Tareas realizadas ' + tareas.length;
    tasksDoneCounter.innerHTML = 'Tareas realizadas ' + tareasRealizadas.length;
};

/***/ })

/******/ });