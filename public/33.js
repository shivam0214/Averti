(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[33],{

/***/ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./resources/js/views/Profile/Addprofile.css":
/*!***********************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/postcss-loader/src??ref--6-2!./resources/js/views/Profile/Addprofile.css ***!
  \***********************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "\r\n\r\n.top{\r\n    padding-top: 5%;\r\n    background-color:rgba(255, 255, 255, 0.712)!important;\r\n    \r\n}\r\n.set{\r\n    min-height: 100%;\r\n    min-width: 1024px;\r\n\t\r\n    /* Set up proportionate scaling */\r\n    width: 100%;\r\n    height: auto;\t\r\n    /* Set up positioning */\r\n    position: fixed;\r\n    top: 0;\r\n    left: 0;\r\n}\r\ninput{\r\n    border: 1px solid #20a8d8 !important; \r\n    padding: 12px !important;\r\n    height: 40px !important;\r\n    font-family: none !important;\r\n    letter-spacing: 0.9px !important;\r\n    text-transform: inherit !important;\r\n}\r\n#inpute{\r\n}\r\n.reglogo{    \r\n        height: 80px;\r\n        width: auto;\r\n        margin-top: -37px;\r\n}\r\n.maincont{\r\nbackground-image: url(https://roicallcentersolutions.com/wp-content/uploads/2018/09/iStock-897528636.jpg);\r\n    background-repeat: no-repeat;\r\n    background-size: cover;\r\n    position: relative;\r\n    left: -30px;\r\n    width: 105%;\r\n}\r\n.error{\r\n    /* top: -23px;\r\n    position: absolute;\r\n    color:red */\r\n}", ""]);

// exports


/***/ }),

/***/ "./resources/js/views/Profile/Addprofile.css":
/*!***************************************************!*\
  !*** ./resources/js/views/Profile/Addprofile.css ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../node_modules/css-loader??ref--6-1!../../../../node_modules/postcss-loader/src??ref--6-2!./Addprofile.css */ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./resources/js/views/Profile/Addprofile.css");

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

/***/ "./resources/js/views/Profile/Addprofile.js":
/*!**************************************************!*\
  !*** ./resources/js/views/Profile/Addprofile.js ***!
  \**************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var bootstrap_dist_css_bootstrap_min_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! bootstrap/dist/css/bootstrap.min.css */ "./node_modules/bootstrap/dist/css/bootstrap.min.css");
/* harmony import */ var bootstrap_dist_css_bootstrap_min_css__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(bootstrap_dist_css_bootstrap_min_css__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _Addprofile_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Addprofile.css */ "./resources/js/views/Profile/Addprofile.css");
/* harmony import */ var _Addprofile_css__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_Addprofile_css__WEBPACK_IMPORTED_MODULE_2__);
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






var Addprofile =
/*#__PURE__*/
function (_Component) {
  _inherits(Addprofile, _Component);

  function Addprofile(props) {
    var _this;

    _classCallCheck(this, Addprofile);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Addprofile).call(this, props));
    _this.state = {
      image: false,
      fields: {},
      error: {}
    };
    _this.image = _this.image.bind(_assertThisInitialized(_this));
    return _this;
  }

  _createClass(Addprofile, [{
    key: "handleValidation",
    value: function handleValidation() {
      var fields = this.state.fields;
      var errors = {};
      var formIsValid = true;

      if (!fields["email"]) {
        formIsValid = false;
        errors["email"] = "Cannot be empty";
      }

      if (!fields["firstname"]) {
        formIsValid = false;
        errors["firstname"] = "Cannot be empty";
      }

      if (!fields["lastname"]) {
        formIsValid = false;
        errors["lastname"] = "Cannot be empty";
      }

      if (!fields["company"]) {
        formIsValid = false;
        errors["company"] = "Cannot be empty";
      }

      if (!fields["phone"]) {
        formIsValid = false;
        errors["phone"] = "phone Number Cannot be empty";
      }

      if (!fields["city"]) {
        formIsValid = false;
        errors["city"] = "City Cannot be empty";
      }

      if (!fields["postcode"]) {
        formIsValid = false;
        errors["postcode"] = "postcode Cannot be empty";
      }

      if (!fields["country"]) {
        formIsValid = false;
        errors["country"] = "country Cannot be empty";
      }

      if (typeof fields["email"] !== "undefined") {
        var lastAtPos = fields["email"].lastIndexOf('@');
        var lastDotPos = fields["email"].lastIndexOf('.');

        if (!(lastAtPos < lastDotPos && lastAtPos > 0 && fields["email"].indexOf('@@') == -1 && lastDotPos > 2 && fields["email"].length - lastDotPos > 2)) {
          formIsValid = false;
          errors["email"] = "Email is not valid";
        }
      }

      if (typeof fields['phone'] !== "undefined") {
        var numl = fields["phone"];

        if (!(numl.length <= 10 && numl.length >= 10)) {
          formIsValid = false;
          errors["phone"] = "number is not valid";
        }
      }

      this.setState({
        errors: errors
      });
      return formIsValid;
    }
  }, {
    key: "contactSubmit",
    value: function contactSubmit(e) {
      e.preventDefault();

      if (this.handleValidation()) {
        window.location.href = "https://nrji.ca/averti/";
      } else {}
    }
  }, {
    key: "handleChange",
    value: function handleChange(field, e) {
      var fields = this.state.fields;
      fields[field] = e.target.value;
      this.setState({
        fields: fields
      });
    }
  }, {
    key: "image",
    value: function image() {
      this.setState({
        image: !this.state.image
      });
    }
  }, {
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("img", {
        className: "set",
        src: 'assets/images/com.jpg'
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], {
        className: "top justify-content-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "12"
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
        md: "12",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h5", {
        className: "text-info"
      }, "REGISTRATION"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Form"], {
        id: "myform"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], {
        row: true,
        className: "my-0"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["firstname"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "name"
      }, "First Name"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        onChange: this.handleChange.bind(this, "firstname"),
        value: this.state.fields["firstname"],
        id: "firstname",
        name: "firstname",
        placeholder: "first Name"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["lastname"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "lastname"
      }, "Last Name"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        onChange: this.handleChange.bind(this, "lastname"),
        value: this.state.fields["lastname"],
        id: "lastname",
        name: "lastname",
        placeholder: "Last Name"
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["company"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "company"
      }, "Company Name"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        onChange: this.handleChange.bind(this, "company"),
        value: this.state.fields["company"],
        id: "company",
        name: "company",
        placeholder: "Company"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["email"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "email"
      }, "Email"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "email",
        onChange: this.handleChange.bind(this, "email"),
        value: this.state.fields["email"],
        id: "email",
        placeholder: "Email"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["phone"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "phone_no"
      }, "Phone Number"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "number",
        onChange: this.handleChange.bind(this, "phone"),
        value: this.state.fields["phone"],
        id: "phone_no",
        name: "phone_no",
        placeholder: "Phone Number"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], {
        row: true,
        className: "my-0"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["city"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "city"
      }, "City"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        onChange: this.handleChange.bind(this, "city"),
        value: this.state.fields["city"],
        id: "city",
        placeholder: "Enter your city"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["postcode"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "postal-code"
      }, "Postal Code"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        onChange: this.handleChange.bind(this, "postcode"),
        value: this.state.fields["postcode"],
        id: "postal-code",
        placeholder: "Postal Code"
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["country"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "country"
      }, "Country"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        onChange: this.handleChange.bind(this, "country"),
        value: this.state.fields["country"],
        id: "country",
        placeholder: "Country name"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Button"], {
        type: "submit",
        color: "info",
        onClick: this.contactSubmit.bind(this),
        name: "Submit",
        block: true
      }, "Sign up")))))));
    }
  }]);

  return Addprofile;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Addprofile);

/***/ })

}]);