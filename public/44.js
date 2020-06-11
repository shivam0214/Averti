(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[44],{

/***/ "./resources/js/views/Base/Contact/Contact.js":
/*!****************************************************!*\
  !*** ./resources/js/views/Base/Contact/Contact.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }




var Contact =
/*#__PURE__*/
function (_Component) {
  _inherits(Contact, _Component);

  function Contact() {
    _classCallCheck(this, Contact);

    return _possibleConstructorReturn(this, _getPrototypeOf(Contact).apply(this, arguments));
  }

  _createClass(Contact, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        lg: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), "Mapping"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Form"], {
        action: "",
        method: "post",
        encType: "multipart/form-data",
        className: "form-horizontal"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["FormGroup"], {
        row: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        md: "1"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Label"], {
        htmlFor: "select"
      }, "Title")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        md: "2"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Input"], {
        type: "select",
        name: "select",
        id: "select"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "0"
      }, "Choose One"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        md: "1"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Label"], {
        htmlFor: "select"
      }, "First Name")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        md: "2"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Input"], {
        type: "select",
        name: "select",
        id: "select"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "0"
      }, "Choose One"))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Table"], {
        responsive: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("thead", null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tbody", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tr", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Title"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("select", {
        type: "select",
        name: "select",
        id: "select"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "Choose one"
      }, "Choose one"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "First Name"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("select", {
        type: "select",
        name: "select",
        id: "select"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "Choose one"
      }, "Choose one"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Account No"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("select", {
        type: "select",
        name: "select",
        id: "select"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "Choose one"
      }, "Choose one"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Open Date"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("select", {
        type: "select",
        name: "select",
        id: "select"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "Choose one"
      }, "Choose one")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tr", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Last Name"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("select", {
        type: "select",
        name: "select",
        id: "select"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "Choose one"
      }, "Choose one"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Address"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("select", {
        type: "select",
        name: "select",
        id: "select"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "Choose one"
      }, "Choose one"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Change Off Date"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("select", {
        type: "select",
        name: "select",
        id: "select"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "Choose one"
      }, "Choose one"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Current Balance"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("select", {
        type: "select",
        name: "select",
        id: "select"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "Choose one"
      }, "Choose one")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tr", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Chetan Mohamed"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "2012/02/01"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Admin"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "secondary"
      }, "Inactive"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tr", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Derick Maximinus"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "2012/03/01"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Member"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "warning"
      }, "Pending"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tr", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Friderik D\xE1vid"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "2012/01/21"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Staff"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "success"
      }, "Active"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tr", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Samppa Nori"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "2012/01/01"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Member"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "success"
      }, "Active"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tr", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Estavan Lykos"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "2012/02/01"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Staff"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "danger"
      }, "Banned"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tr", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Chetan Mohamed"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "2012/02/01"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Admin"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "secondary"
      }, "Inactive"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tr", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Derick Maximinus"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "2012/03/01"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Member"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "warning"
      }, "Pending"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tr", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Friderik D\xE1vid"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "2012/01/21"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, "Staff"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "success"
      }, "Active"))))))))));
    }
  }]);

  return Contact;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Contact);

/***/ })

}]);