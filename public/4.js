(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[4],{

/***/ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./resources/js/views/Advisor/Advisor.css":
/*!********************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/postcss-loader/src??ref--6-2!./resources/js/views/Advisor/Advisor.css ***!
  \********************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "#imge{\r\n    height: 400px;\r\n    width: 500px;\r\n    padding-top: 10%;\r\n}\r\n\r\n.ps{\r\n   padding: 2%; \r\n}\r\n.pt{\r\n    padding: 10%;\r\n    width: 100%;\r\n    padding-left: 10%;\r\n}\r\n.scrollbar-container{\r\n    height: 390px !important;\r\n}\r\n.top{\r\n    padding: 5%;\r\n    background-color:rgba(255, 255, 255, 0.712)!important;\r\n}\r\n.tops{\r\n    padding: 5%;\r\n}\r\n.reglogo{    \r\n    height: 80px;\r\n    width: auto;\r\n    margin-top: -37px;\r\n}\r\n\r\n#scroll{\r\n    height: 400px;\r\n    width: 500px;\r\n}\r\ninput,select{\r\n    border: 1px solid #20a8d8 !important; \r\n    padding: 12px !important;\r\n    height: 40px !important;\r\n    font-family: none !important;\r\n    letter-spacing: 0.9px !important;\r\n}\r\ninput{\r\n    border: 1px solid #20a8d8 !important; \r\n    padding: 12px !important;\r\n    height: 40px !important;\r\n    font-family: none !important;\r\n    letter-spacing: 0.9px !important;\r\n    text-transform: inherit !important;\r\n}\r\n.labelcheck{\r\n        text-transform: capitalize !important;\r\n\r\n}\r\n#btn{\r\n    position:absolute;\r\n    bottom: 0%;\r\n    float: right ;\r\n}\r\n.set{\r\n    min-height: 100%;\r\n    min-width: 1024px;\r\n\t\r\n    /* Set up proportionate scaling */\r\n    width: 100%;\r\n    height: auto;\r\n\t\r\n    /* Set up positioning */\r\n    position: fixed;\r\n    top: 0;\r\n    left: 0;\r\n}\r\n#checkbox{\r\n    padding-left: 10%;\r\n}\r\n#check{\r\n    position: absolute;\r\n    padding-left: 10%;\r\n\r\n}", ""]);

// exports


/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./resources/js/views/Advisor/Imageb/Imageb.css":
/*!**************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/postcss-loader/src??ref--6-2!./resources/js/views/Advisor/Imageb/Imageb.css ***!
  \**************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, ".set{\r\n    min-height: 100%;\r\n    min-width: 1024px;\r\n\t\r\n    /* Set up proportionate scaling */\r\n    width: 100%;\r\n    height: auto;\r\n\t\r\n    /* Set up positioning */\r\n    position: fixed;\r\n    top: 0;\r\n    left: 0;\r\n\r\n}", ""]);

// exports


/***/ }),

/***/ "./resources/js/views/Advisor/Advisor.css":
/*!************************************************!*\
  !*** ./resources/js/views/Advisor/Advisor.css ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../node_modules/css-loader??ref--6-1!../../../../node_modules/postcss-loader/src??ref--6-2!./Advisor.css */ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./resources/js/views/Advisor/Advisor.css");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./resources/js/views/Advisor/AdvisorSignup.js":
/*!*****************************************************!*\
  !*** ./resources/js/views/Advisor/AdvisorSignup.js ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _Imageb_Imageb__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Imageb/Imageb */ "./resources/js/views/Advisor/Imageb/Imageb.js");
/* harmony import */ var _Advisor_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Advisor.css */ "./resources/js/views/Advisor/Advisor.css");
/* harmony import */ var _Advisor_css__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_Advisor_css__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }






var AdvisorUsername =
/*#__PURE__*/
function (_Component) {
  _inherits(AdvisorUsername, _Component);

  function AdvisorUsername(props) {
    var _this;

    _classCallCheck(this, AdvisorUsername);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(AdvisorUsername).call(this, props));

    _defineProperty(_assertThisInitialized(_this), "continue", function (e) {
      e.preventDefault();

      _this.props.nextStep();
    });

    _this.state = {
      info: true
    };
    return _this;
  }

  _createClass(AdvisorUsername, [{
    key: "render",
    value: function render() {
      var values = this.props.values;
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, "  ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_1__["default"], null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], {
        className: "top justify-content-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Card"], {
        className: "top"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        className: "text-center",
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("img", {
        className: "reglogo",
        src: "assets/images/averti.png",
        alt: "averti"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        className: "large-text "
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h5", {
        className: "text-info"
      }, "SIGN IN"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "12",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "dealername"
      }, "UserName"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        id: "dealername",
        name: "dealername",
        placeholder: "User Name"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "licenseno"
      }, "Password"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "password",
        id: "password",
        name: "password",
        placeholder: "Password"
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Button"], {
        type: "submit",
        className: "text-white",
        color: "info",
        block: true
      }, "Sign up"))))));
    }
  }]);

  return AdvisorUsername;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (AdvisorUsername);

/***/ }),

/***/ "./resources/js/views/Advisor/Imageb/Imageb.css":
/*!******************************************************!*\
  !*** ./resources/js/views/Advisor/Imageb/Imageb.css ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../../node_modules/css-loader??ref--6-1!../../../../../node_modules/postcss-loader/src??ref--6-2!./Imageb.css */ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./resources/js/views/Advisor/Imageb/Imageb.css");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./resources/js/views/Advisor/Imageb/Imageb.js":
/*!*****************************************************!*\
  !*** ./resources/js/views/Advisor/Imageb/Imageb.js ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom */ "./node_modules/react-dom/index.js");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_dom__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _Imageb_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Imageb.css */ "./resources/js/views/Advisor/Imageb/Imageb.css");
/* harmony import */ var _Imageb_css__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_Imageb_css__WEBPACK_IMPORTED_MODULE_2__);
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }





var Img =
/*#__PURE__*/
function (_Component) {
  _inherits(Img, _Component);

  function Img() {
    _classCallCheck(this, Img);

    return _possibleConstructorReturn(this, _getPrototypeOf(Img).apply(this, arguments));
  }

  _createClass(Img, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("img", {
        className: "set",
        src: 'assets/images/com.jpg'
      });
    }
  }]);

  return Img;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Img);

/***/ })

}]);