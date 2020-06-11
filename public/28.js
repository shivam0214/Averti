(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[28],{

/***/ "./resources/js/views/Advisor/Advisor.js":
/*!***********************************************!*\
  !*** ./resources/js/views/Advisor/Advisor.js ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var bootstrap_dist_css_bootstrap_min_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! bootstrap/dist/css/bootstrap.min.css */ "./node_modules/bootstrap/dist/css/bootstrap.min.css");
/* harmony import */ var bootstrap_dist_css_bootstrap_min_css__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(bootstrap_dist_css_bootstrap_min_css__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _Advisor_AdvisorDetails__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../Advisor/AdvisorDetails */ "./resources/js/views/Advisor/AdvisorDetails.js");
/* harmony import */ var _Advisor_AdvisorInfo__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../Advisor/AdvisorInfo */ "./resources/js/views/Advisor/AdvisorInfo.js");
/* harmony import */ var _Advisor_AdvisorTerms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../Advisor/AdvisorTerms */ "./resources/js/views/Advisor/AdvisorTerms.js");
/* harmony import */ var _AdvisorUsername__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./AdvisorUsername */ "./resources/js/views/Advisor/AdvisorUsername.js");
/* harmony import */ var _AdvisorQuestions_AdvisorIntro__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../AdvisorQuestions/AdvisorIntro */ "./resources/js/views/AdvisorQuestions/AdvisorIntro.js");
/* harmony import */ var _AdvisorQuestions_AdvisorWhat__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../AdvisorQuestions/AdvisorWhat */ "./resources/js/views/AdvisorQuestions/AdvisorWhat.js");
/* harmony import */ var _AdvisorQuestions_AdvisorAssets__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../AdvisorQuestions/AdvisorAssets */ "./resources/js/views/AdvisorQuestions/AdvisorAssets.js");
/* harmony import */ var _AdvisorQuestions_AdvisorRisk__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../AdvisorQuestions/AdvisorRisk */ "./resources/js/views/AdvisorQuestions/AdvisorRisk.js");
/* harmony import */ var _AdvisorQuestions_AdvisorWhen__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../AdvisorQuestions/AdvisorWhen */ "./resources/js/views/AdvisorQuestions/AdvisorWhen.js");
/* harmony import */ var _AdvisorQuestions_AdvisorWhy__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ../AdvisorQuestions/AdvisorWhy */ "./resources/js/views/AdvisorQuestions/AdvisorWhy.js");
/* harmony import */ var _AdvisorQuestions_AdvisorWhere__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ../AdvisorQuestions/AdvisorWhere */ "./resources/js/views/AdvisorQuestions/AdvisorWhere.js");
/* harmony import */ var _AdvisorSignup__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./AdvisorSignup */ "./resources/js/views/Advisor/AdvisorSignup.js");
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
















var Advisor =
/*#__PURE__*/
function (_Component) {
  _inherits(Advisor, _Component);

  function Advisor() {
    var _getPrototypeOf2;

    var _this;

    _classCallCheck(this, Advisor);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _possibleConstructorReturn(this, (_getPrototypeOf2 = _getPrototypeOf(Advisor)).call.apply(_getPrototypeOf2, [this].concat(args)));

    _defineProperty(_assertThisInitialized(_this), "state", _defineProperty({
      step: 1,
      firstname: true
    }, "firstname", ''));

    _defineProperty(_assertThisInitialized(_this), "nextStep", function () {
      var step = _this.state.step;

      _this.setState({
        step: step + 1
      });
    });

    _defineProperty(_assertThisInitialized(_this), "prvStep", function () {
      var step = _this.state.step;

      _this.setState({
        step: step - 1
      });
    });

    _defineProperty(_assertThisInitialized(_this), "handleChange", function (input) {
      return function (e) {
        _this.setState(_defineProperty({}, input, e.target.value));
      };
    });

    return _this;
  }

  _createClass(Advisor, [{
    key: "render",
    value: function render() {
      var step = this.state.step;
      var _this$state = this.state,
          firstname = _this$state.firstname,
          lastname = _this$state.lastname,
          email = _this$state.email,
          city = _this$state.city;
      var values = {
        firstname: firstname,
        lastname: lastname,
        email: email,
        city: city
      };

      switch (step) {
        case 1:
          return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Advisor_AdvisorDetails__WEBPACK_IMPORTED_MODULE_2__["default"], {
            nextStep: this.nextStep,
            prvStep: this.prvStep,
            handleChange: this.handleChange,
            values: values
          });

        case 2:
          return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Advisor_AdvisorInfo__WEBPACK_IMPORTED_MODULE_3__["default"], {
            nextStep: this.nextStep,
            prvStep: this.prvStep,
            handleChange: this.handleChange,
            values: values
          });

        case 3:
          return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_AdvisorUsername__WEBPACK_IMPORTED_MODULE_5__["default"], {
            nextStep: this.nextStep,
            prvStep: this.prvStep,
            handleChange: this.handleChange,
            values: values
          });

        case 4:
          return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_AdvisorQuestions_AdvisorIntro__WEBPACK_IMPORTED_MODULE_6__["default"], {
            nextStep: this.nextStep,
            prvStep: this.prvStep,
            handleChange: this.handleChange,
            values: values
          });

        case 5:
          return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_AdvisorQuestions_AdvisorWhat__WEBPACK_IMPORTED_MODULE_7__["default"], {
            nextStep: this.nextStep,
            prvStep: this.prvStep,
            handleChange: this.handleChange,
            values: values
          });

        case 6:
          return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_AdvisorQuestions_AdvisorWhere__WEBPACK_IMPORTED_MODULE_12__["default"], {
            nextStep: this.nextStep,
            prvStep: this.prvStep,
            handleChange: this.handleChange,
            values: values
          });

        case 7:
          return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_AdvisorQuestions_AdvisorAssets__WEBPACK_IMPORTED_MODULE_8__["default"], {
            nextStep: this.nextStep,
            prvStep: this.prvStep,
            handleChange: this.handleChange,
            values: values
          });

        case 8:
          return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_AdvisorQuestions_AdvisorRisk__WEBPACK_IMPORTED_MODULE_9__["default"], {
            nextStep: this.nextStep,
            prvStep: this.prvStep,
            handleChange: this.handleChange,
            values: values
          });

        case 9:
          return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_AdvisorQuestions_AdvisorWhen__WEBPACK_IMPORTED_MODULE_10__["default"], {
            nextStep: this.nextStep,
            prvStep: this.prvStep,
            handleChange: this.handleChange,
            values: values
          });

        case 10:
          return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_AdvisorQuestions_AdvisorWhy__WEBPACK_IMPORTED_MODULE_11__["default"], {
            nextStep: this.nextStep,
            prvStep: this.prvStep,
            handleChange: this.handleChange,
            values: values
          });

        case 11:
          return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Advisor_AdvisorTerms__WEBPACK_IMPORTED_MODULE_4__["default"], {
            nextStep: this.nextStep,
            prvStep: this.prvStep,
            handleChange: this.handleChange,
            values: values
          });
      }
    }
  }]);

  return Advisor;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Advisor);

/***/ }),

/***/ "./resources/js/views/Advisor/AdvisorDetails.js":
/*!******************************************************!*\
  !*** ./resources/js/views/Advisor/AdvisorDetails.js ***!
  \******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var bootstrap_dist_css_bootstrap_min_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! bootstrap/dist/css/bootstrap.min.css */ "./node_modules/bootstrap/dist/css/bootstrap.min.css");
/* harmony import */ var bootstrap_dist_css_bootstrap_min_css__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(bootstrap_dist_css_bootstrap_min_css__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _Imageb_Imageb__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Imageb/Imageb */ "./resources/js/views/Advisor/Imageb/Imageb.js");
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






var AdvisorDetails =
/*#__PURE__*/
function (_Component) {
  _inherits(AdvisorDetails, _Component);

  function AdvisorDetails(props) {
    var _this;

    _classCallCheck(this, AdvisorDetails);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(AdvisorDetails).call(this, props));

    _defineProperty(_assertThisInitialized(_this), "continue", function (e) {
      e.preventDefault();

      if (_this.handleValidation()) {
        _this.props.nextStep();
      } else {}
    });

    _defineProperty(_assertThisInitialized(_this), "back", function (e) {
      e.preventDefault();

      _this.props.prvStep();
    });

    _this.state = {
      fields: {},
      error: {}
    };
    return _this;
  }

  _createClass(AdvisorDetails, [{
    key: "handleValidation",
    value: function handleValidation() {
      var fields = this.state.fields;
      var errors = {};
      var formIsValid = true;

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

      if (!fields["phone_no"]) {
        formIsValid = false;
        errors["phone_no"] = "Cannot be empty";
      }

      if (!fields["address"]) {
        formIsValid = false;
        errors["address"] = "Cannot be empty";
      }

      if (!fields["city"]) {
        formIsValid = false;
        errors["city"] = "Cannot be empty";
      }

      if (!fields["state"]) {
        formIsValid = false;
        errors["state"] = "Cannot be empty";
      }

      if (!fields["postal_code"]) {
        formIsValid = false;
        errors["postal_code"] = "Cannot be empty";
      }

      if (!fields["country"]) {
        formIsValid = false;
        errors["country"] = "Cannot be empty";
      }

      if (!fields["email"]) {
        formIsValid = false;
        errors["email"] = "Cannot be empty";
      }

      if (typeof fields["email"] !== "undefined") {
        var lastAtPos = fields["email"].lastIndexOf('@');
        var lastDotPos = fields["email"].lastIndexOf('.');

        if (!(lastAtPos < lastDotPos && lastAtPos > 0 && fields["email"].indexOf('@@') == -1 && lastDotPos > 2 && fields["email"].length - lastDotPos > 2)) {
          formIsValid = false;
          errors["email"] = "Email is not valid";
        }
      }

      if (typeof fields['phone_no'] !== "undefined") {
        var numl = fields["phone_no"];

        if (!(numl.length <= 10 && numl.length >= 10)) {
          formIsValid = false;
          errors["phone_no"] = "number is not valid";
        }
      }

      this.setState({
        errors: errors
      });
      return formIsValid;
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
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_2__["default"], null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], {
        className: "top justify-content-center "
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
        className: "large-text text-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h5", {
        className: "text-info"
      }, "DETAILS"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Form"], {
        id: "myform"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["firstname"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "name"
      }, "First Name"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        id: "firstname",
        name: "firstname",
        onChange: this.handleChange.bind(this, "firstname"),
        value: this.state.fields["firstname"],
        placeholder: "First Name"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["lastname"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "lastname"
      }, "Last Name"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        id: "lastname",
        onChange: this.handleChange.bind(this, "lastname"),
        value: this.state.fields["lastname"],
        name: "lastname",
        placeholder: "Last Name"
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["email"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "email"
      }, "Email"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "email",
        onChange: this.handleChange.bind(this, "email"),
        value: this.state.fields["email"],
        id: "email",
        name: "email",
        placeholder: "Email"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], {
        row: true,
        className: "my-0"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["company"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "company"
      }, "Company Name"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "company",
        onChange: this.handleChange.bind(this, "company"),
        value: this.state.fields["company"],
        id: "company",
        name: "company",
        placeholder: "Company Name"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["phone_no"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "phone_no"
      }, "Phone Number"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "number",
        id: "phone_no",
        onChange: this.handleChange.bind(this, "phone_no"),
        value: this.state.fields["phone_no"],
        name: "phone_no",
        placeholder: "Phone Number"
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], {
        row: true,
        className: "my-0"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["address"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "address"
      }, "Street Address"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        onChange: this.handleChange.bind(this, "address"),
        value: this.state.fields["address"],
        id: "address",
        name: "address",
        placeholder: "Street Address"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["city"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "city"
      }, "City"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        id: "city",
        onChange: this.handleChange.bind(this, "city"),
        value: this.state.fields["city"],
        name: "city",
        placeholder: "City"
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], {
        row: true,
        className: "my-0"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["state"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "state"
      }, "State"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        id: "state",
        name: "state",
        onChange: this.handleChange.bind(this, "state"),
        value: this.state.fields["state"],
        placeholder: "State"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["postal_code"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "postal-code"
      }, "Postal Code"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        id: "postal_code",
        name: "postal_code",
        onChange: this.handleChange.bind(this, "postal_code"),
        value: this.state.fields["postal_code"],
        placeholder: "Postal Code"
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["country"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "country"
      }, "Country"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        id: "country",
        name: "country",
        onChange: this.handleChange.bind(this, "country"),
        value: this.state.fields["country"],
        placeholder: "Country name"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Button"], {
        type: "submit",
        size: "md",
        className: "float-right",
        onClick: this["continue"].bind(this),
        color: "info"
      }, " Next   "))))));
    }
  }]);

  return AdvisorDetails;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (AdvisorDetails);

/***/ }),

/***/ "./resources/js/views/Advisor/AdvisorInfo.js":
/*!***************************************************!*\
  !*** ./resources/js/views/Advisor/AdvisorInfo.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom */ "./node_modules/react-dom/index.js");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_dom__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _Imageb_Imageb__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Imageb/Imageb */ "./resources/js/views/Advisor/Imageb/Imageb.js");
/* harmony import */ var _material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @material-ui/core/Checkbox */ "./node_modules/@material-ui/core/esm/Checkbox/index.js");
/* harmony import */ var _material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @material-ui/core/FormControlLabel */ "./node_modules/@material-ui/core/esm/FormControlLabel/index.js");
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
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








var AdvisorInfo =
/*#__PURE__*/
function (_Component) {
  _inherits(AdvisorInfo, _Component);

  function AdvisorInfo(props) {
    var _this;

    _classCallCheck(this, AdvisorInfo);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(AdvisorInfo).call(this, props));

    _defineProperty(_assertThisInitialized(_this), "continue", function (e) {
      e.preventDefault();

      if (_this.handleValidation()) {
        _this.props.nextStep();
      }
    });

    _defineProperty(_assertThisInitialized(_this), "back", function (e) {
      e.preventDefault();

      _this.props.prvStep();
    });

    _this.state = {
      fields: {},
      error: {}
    };
    return _this;
  }

  _createClass(AdvisorInfo, [{
    key: "handleValidation",
    value: function handleValidation() {
      var fields = this.state.fields;
      var errors = {};
      var formIsValid = true;

      if (!fields["license_no"]) {
        formIsValid = false;
        errors["license_no"] = "Cannot be empty";
      }

      if (!fields["selectSm"]) {
        formIsValid = false;
        errors["selectSm"] = "Select Any Option";
      }

      if (!fields["refer"]) {
        formIsValid = false;
        errors["refer"] = " Cannot be empty";
      }

      if (!fields["select_data"]) {
        formIsValid = false;
        errors["select_data"] = " Select Any Option";
      }

      this.setState({
        errors: errors
      });
      return formIsValid;
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
    key: "render",
    value: function render() {
      var _React$createElement;

      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, "  ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_2__["default"], null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], {
        className: "top justify-content-center "
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Card"], {
        className: "top"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        className: "text-center",
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("img", {
        className: "reglogo",
        src: "assets/images/averti.png",
        alt: "averti"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h5", {
        className: "text-info text-center"
      }, "INFORMATION"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["license_no"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Label"], {
        className: "sr-only",
        htmlFor: "licenseno"
      }, "Lincense Number"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Input"], {
        type: "text",
        id: "license_no",
        name: "license_no",
        onChange: this.handleChange.bind(this, "license_no"),
        value: this.state.fields["license_no"],
        placeholder: "Lincense Number"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        md: "12",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["FormGroup"], {
        row: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Label"], {
        className: "sr-only",
        htmlFor: "selectSm"
      }, "How Did You Hear About Us?"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12",
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["selectSm"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Input"], {
        type: "select",
        name: "selectSm",
        onChange: this.handleChange.bind(this, "selectSm"),
        value: this.state.fields["selectSm"],
        id: "SelectLm",
        bsSize: "sm"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: ""
      }, "How Did You Hear About Us?"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "1"
      }, "Option #1"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "2"
      }, "Option #2"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "3"
      }, "Option #3"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "4"
      }, "Option #4"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "5"
      }, "Option #5"))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["refer"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Label"], {
        className: "sr-only",
        htmlFor: " Did Someone Refer you to us"
      }, "Did Someone Refer you to us"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Input"], {
        type: "text",
        id: "refer",
        onChange: this.handleChange.bind(this, "refer"),
        name: "refer",
        placeholder: "Did Someone Refer you to us?"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12",
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["FormGroup"], {
        row: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Label"], {
        className: "sr-only",
        htmlFor: "selectSm"
      }, "What database program  do you currently Use"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12",
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["select_data"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Input"], {
        type: "select",
        onChange: this.handleChange.bind(this, "select_data"),
        name: "select_data",
        id: "select_data",
        bsSize: "sm"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: ""
      }, "What database program  do you currently Use"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "1"
      }, "Option #1"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "2"
      }, "Option #2"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "3"
      }, "Option #3"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "4"
      }, "Option #4"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "5"
      }, "Option #5"))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        md: "12",
        xs: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_4__["default"], (_React$createElement = {
        value: "end",
        className: "let",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_3__["default"], {
          color: "primary"
        })
      }, _defineProperty(_React$createElement, "className", "labelcheck"), _defineProperty(_React$createElement, "label", "I would like to recive the redtail email Newsletter"), _defineProperty(_React$createElement, "labelPlacement", "end"), _React$createElement)))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        md: "12",
        xs: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_4__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_3__["default"], {
          color: "primary"
        }),
        className: "labelcheck",
        label: "Populate My Trial Database with Sample Data",
        labelPlacement: "end"
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Button"], {
        type: "submit",
        size: "md",
        className: "float-right",
        onClick: this["continue"],
        color: "info"
      }, " Next"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Button"], {
        type: "reset",
        size: "md",
        onClick: this.back
      }, " PREVIOUS"))))));
    }
  }]);

  return AdvisorInfo;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (AdvisorInfo);

/***/ }),

/***/ "./resources/js/views/Advisor/AdvisorTerms.js":
/*!****************************************************!*\
  !*** ./resources/js/views/Advisor/AdvisorTerms.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_perfect_scrollbar__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-perfect-scrollbar */ "./node_modules/react-perfect-scrollbar/lib/index.js");
/* harmony import */ var react_perfect_scrollbar__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_perfect_scrollbar__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _Imageb_Imageb__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Imageb/Imageb */ "./resources/js/views/Advisor/Imageb/Imageb.js");
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






var AdvisorTerms =
/*#__PURE__*/
function (_Component) {
  _inherits(AdvisorTerms, _Component);

  function AdvisorTerms(props) {
    var _this;

    _classCallCheck(this, AdvisorTerms);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(AdvisorTerms).call(this, props));

    _defineProperty(_assertThisInitialized(_this), "back", function (e) {
      e.preventDefault();

      _this.props.prvStep();
    });

    _this.state = {
      dashboard: false
    };
    _this.dashboard = _this.dashboard.bind(_assertThisInitialized(_this));
    return _this;
  }

  _createClass(AdvisorTerms, [{
    key: "dashboard",
    value: function dashboard() {
      alert(window.location.hostname);
      this.props.history.push('home');
    }
  }, {
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, "   ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_2__["default"], null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], {
        className: " tops justify-content-center "
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6",
        className: "text-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("img", {
        className: "reglogo",
        src: "assets/images/averti.png",
        alt: "averti"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Card"], {
        className: "text-info"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react_perfect_scrollbar__WEBPACK_IMPORTED_MODULE_1___default.a, null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", null, "Please read these Terms of Use carefully, as they contain important information regarding your legal rights and remedies. Overview Redtail Technology, Inc. (\u201CRedtail\u201D, \u201Cwe\u201D, \u201Cus\u201D and terms of similar meaning) provides this website (in these Terms we call this website and any successor websites, the \u201CSite\u201D) and the products and Services (individually and collectively, the \u201CServices\u201D) found at this Site, to you subject to these Terms and Conditions of Use (these \u201CTerms\u201D). If you are agreeing to these Terms on behalf of a corporate entity, you represent and warrant that you have the legal authority to bind such corporate entity to these Terms, in which case the Terms \u201Cyou\u201D, \u201Cyour\u201D, \u201CUser\u201D or \u201CCustomer\u201D shall refer to such corporate entity. Nothing in these Terms shall be deemed to confer any third-party rights or benefits. Please read these Terms carefully before using the Site. By accessing or using the Site or by merely browsing the Site you agree to be legally bound by these Terms and all terms, policies and guidelines incorporated by reference in these Terms. If you do not agree with these Terms in their entirety, you may not use the Site. Use of the Site In order to utilize the Services you will be asked to create an account (\u201CAccount\u201D) by providing certain personal information such as your name, email address, physical address and major credit card number. (The Site\u2019s Privacy Policy (corporate.redtailtechnology.com/privacy-policy) explains how such information may be collected and used). Redtail offers a number of Services on the Site. When you enroll to obtain a Service from Redtail on the Site, you accept the specific Terms applicable to that Service. Your use of any such Service offered on the Site is governed by the Terms and Conditions for that Service. Except as provided in the Terms, Redtail does not warrant that any product descriptions or content contained in the Site is accurate, current, reliable, complete, or error-free. You may not use the Site in any manner that: (i) imposes an unreasonable or disproportionately large load on the Site\u2019s infrastructure, or otherwise adversely affects, restricts or inhibits any other User from using and enjoying the Site; (ii) introduces a virus or other harmful component to the Site; (iii) constitutes or contains false or misleading indications of origin or statements of fact including but not limited to impersonating any other person; (iv) contains any virus, Trojan horse, worm, time bomb, cancelbot or other similar harmful programming routine; (v) results in the transmission of any information, data, text, images, links, files, etc., except in connection with your authorized use of the Site and (vi) results in the harvesting of any information concerning other Users of this Site. Redtail reserves the right to change or modify any Terms, or any policy or guideline of the Site, at any time and in its sole discretion. If you do not agree with changes, you can cancel your account with us without further obligation. Unless otherwise specified, any changes or modifications will be effective immediately upon posting of the revisions on the Site, and your use of the Site after such time will constitute your acceptance of such changes or modifications. From time to time, review the Terms, and any policies and documents incorporated in them, to understand the Terms and Conditions that apply to your use of the Site. The Terms will always show the \u2018latest updated\u2019 date. If you do not agree to any amended Terms, you must stop using the Site. If you have any questions about the Terms, please email us at support@redtailtechnology.com. The Services we provide through the Site are for your own use only. You may not resell, lease or provide them in any other way to anyone else. Privacy Policy This is a United States website and is subject to United States law. Please refer to Redtail\u2019s Privacy Policy, available at corporate.redtailtechnology.com/privacy-policy for information on how Redtail collects, uses and discloses Personally Identifiable Information (\u201CPII\u201D) from its Users. By using the Site you agree to our use, collection and disclosure of Personally Identifiable Information in accordance with the Privacy Policy. Registration Data, Account Security The Site is available to persons who are 18 years and older, who have properly registered and who have not been suspended or removed by Redtail for any reason (an \u201CAccount Holder\u201D). As an Account Holder, you agree to (a) provide accurate, current and complete information as may be prompted by any registration forms on the Site (\u201CRegistration Data\u201D); (b) maintain the security of your password; (c) maintain and promptly update the Registration Data, and any other information you provide to Redtail, and to keep it accurate, current and complete; and (d) accept all risks of unauthorized access to the Registration Data and any other information you provide to Redtail. You are responsible for all activity on your Redtail account, and for all charges incurred by your Redtail account. Accounts are void where prohibited by law. Redtail reserves the right to revoke or prohibit your account for any reason at any time, without notice, but, in particular, upon any violation of any of these Terms or the Privacy Policy. Fees and Charges Fees and any other charges for the use of the Site and Services are described on the Site. You agree to pay any and all prices and fees due for all Services purchased at this Site at the time you order the Services. All prices and fees are non-refundable unless otherwise expressly noted. Prices may change from time to time. If we change them, we will give you at least 30 days\u2019 notice. If they do change, your continued use of the Site or Services after the change indicates your agreement with the new fees and charges after the effective date of the change. Any change to fees and other charges will not be applicable to the billing period in which the change occurs. Payment for purchased Services shall be made by valid payment method (acceptable to Redtail) at the time of purchase at the fee set forth on the Site. Any recurring payments for Service shall be automatically charged to the credit card provided by you (and acceptable to Redtail) at the time of your purchase (with such payments being charged in advance, as applicable) each month or annually, as applicable and you hereby agree that Redtail is authorized to so charge the payment method on file. In addition to recurring service fees, Redtail may charge set up fees and other one-time fees for any of the Services (\u201COne-time Fees\u201D). All One-time Fees shall be charged to the payment method provided by you (and acceptable to Redtail) at the time of your purchase, and you hereby agree that Redtail is authorized to so charge the payment method provided by you. Redtail, in its sole discretion, shall determine the prices it will charge for all One-time Fees. If you believe that the billing or invoice is incorrect, you must contact us within 60 days of the billing period start date to be eligible to receive an adjustment or credit. Your account is considered delinquent (in arrears) if full payment is not received by the billing period start date. If your account is delinquent for 30 days, we will deactivate your account. Deactivated accounts are not deleted \u2013 they are placed in storage and can be restored. We will notify you by email or phone if we decide to deactivate your account. If after your account has been deactivated, it stays delinquent and we don\u2019t hear from you, we may terminate it at any time and without notice. You and Redtail may terminate these Terms and your use of the Site at any time. If you terminate your use of the Site you must pay the fees applicable for the balance due on your account. Ownership, Copyright and Trademarks If any provision of these Terms shall be deemed unlawful, void or for any reason unenforceable, then that provision shall be deemed severable from these Terms and shall not affect the validity and enforceability of any remaining provisions. Redtail may assign any or all of its rights hereunder to any party without your consent. You are not permitted to assign any of your rights or obligations hereunder without the prior written consent of Redtail, and any such attempted assignment will be void and unenforceable. These Terms constitute the entire agreement between you and Redtail regarding your use of the Site, and supersede all prior or contemporaneous communications whether electronic, oral or written between you and Redtail regarding your use of the Site. Redtail in its sole discretion may amend these Terms, and your use of the Site and Services after such amendment is posted on the Site will constitute acceptance of it by you. If any term in these Terms is declared unlawful, void or for any reason unenforceable by any court, then such term will be deemed severable from the remaining Terms and will not affect the validity and enforceability of such remaining terms. The Section headings in these Terms are for convenience only and must not be given any legal import. This Site may contain typographical errors or inaccuracies and may not be complete or current. On the Site some products may appear larger or smaller than their actual size. Redtail therefore reserves the right to correct any errors, inaccuracies or omissions and to change or update information at any time without prior notice. Please note that such errors, inaccuracies or omissions may relate to pricing and availability, and we reserve the right to cancel or refuse to accept any order placed based on incorrect pricing or availability information. We apologize for any inconvenience. All Sections representation or warranty you make in these Terms, shall survive indefinitely, or as permitted by law."))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        type: "submit",
        size: "sm",
        className: "float-right btn btn-info btn-md",
        href: "home",
        color: "info"
      }, " I Accept, terms and Condition "), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Button"], {
        type: "reset",
        size: "sm",
        className: "float-left",
        onClick: this.back
      }, " I Decline"))));
    }
  }]);

  return AdvisorTerms;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (AdvisorTerms);

/***/ }),

/***/ "./resources/js/views/Advisor/AdvisorUsername.js":
/*!*******************************************************!*\
  !*** ./resources/js/views/Advisor/AdvisorUsername.js ***!
  \*******************************************************/
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

      if (_this.handleValidation()) {
        _this.props.nextStep();
      }
    });

    _defineProperty(_assertThisInitialized(_this), "back", function (e) {
      e.preventDefault();

      _this.props.prvStep();
    });

    _this.state = {
      fields: {},
      error: {}
    };
    return _this;
  }

  _createClass(AdvisorUsername, [{
    key: "handleValidation",
    value: function handleValidation() {
      var fields = this.state.fields;
      var errors = {};
      var formIsValid = true;

      if (!fields["username"]) {
        formIsValid = false;
        errors["username"] = "Insert UserName";
      }

      if (!fields["password"]) {
        formIsValid = false;
        errors["password"] = "Enter password";
      }

      if (fields["password"] !== fields["password_confirm"]) {
        formIsValid = false;
        errors["password_confirm"] = " Password not match";
      }

      this.setState({
        errors: errors
      });
      return formIsValid;
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
    key: "render",
    value: function render() {
      var values = this.props.values;
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_1__["default"], null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], {
        className: "top justify-content-center "
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
        className: "large-text text-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h5", {
        className: "text-info"
      }, "ADVISOR USERNAME"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        xs: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["username"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "username"
      }, "UserName"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "text",
        id: "username",
        name: "username",
        onChange: this.handleChange.bind(this, "username"),
        placeholder: "User Name"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["password"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "Password"
      }, "Password"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "password",
        id: "password",
        name: "password",
        onChange: this.handleChange.bind(this, "password"),
        placeholder: "Password"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["password_confirm"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "Password"
      }, "Password Confirmation"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "password",
        id: "password_confirm",
        name: "password_confirm",
        onChange: this.handleChange.bind(this, "password_confirm"),
        placeholder: "Password Confirmation"
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Button"], {
        type: "submit",
        size: "md",
        color: "info",
        className: "float-right",
        onClick: this["continue"]
      }, " Next"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Button"], {
        type: "reset",
        size: "md",
        onClick: this.back
      }, " Privous"))))));
    }
  }]);

  return AdvisorUsername;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (AdvisorUsername);

/***/ }),

/***/ "./resources/js/views/AdvisorQuestions/AdvisorAssets.js":
/*!**************************************************************!*\
  !*** ./resources/js/views/AdvisorQuestions/AdvisorAssets.js ***!
  \**************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../Advisor/Imageb/Imageb */ "./resources/js/views/Advisor/Imageb/Imageb.js");
/* harmony import */ var _Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../Advisor/Advisor.css */ "./resources/js/views/Advisor/Advisor.css");
/* harmony import */ var _Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_2__);
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






var AdvisorAssets =
/*#__PURE__*/
function (_Component) {
  _inherits(AdvisorAssets, _Component);

  function AdvisorAssets(props) {
    var _this;

    _classCallCheck(this, AdvisorAssets);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(AdvisorAssets).call(this, props));

    _defineProperty(_assertThisInitialized(_this), "continue", function (e) {
      e.preventDefault();

      if (_this.handleValidation()) {
        _this.props.nextStep();
      }
    });

    _defineProperty(_assertThisInitialized(_this), "back", function (e) {
      e.preventDefault();

      _this.props.prvStep();
    });

    _this.state = {
      fields: {},
      error: {}
    };
    return _this;
  }

  _createClass(AdvisorAssets, [{
    key: "handleValidation",
    value: function handleValidation() {
      var fields = this.state.fields;
      var errors = {};
      var formIsValid = true;

      if (!fields["age"]) {
        formIsValid = false;
        errors["age"] = " Select Age";
      }

      if (!fields["assets"]) {
        formIsValid = false;
        errors["assets"] = " Select Assets";
      }

      if (!fields["retirement_goal"]) {
        formIsValid = false;
        errors["retirement_goal"] = " Select Retirement Goal";
      }

      this.setState({
        errors: errors
      });
      return formIsValid;
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
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_1__["default"], null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], {
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
        className: "large-text text-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h5", {
        className: "text-info"
      }, "ASSETS"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Form"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["assets"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "selectSm"
      }, "ASSETS"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "select",
        name: "assets",
        onChange: this.handleChange.bind(this, "assets"),
        id: "assets",
        bsSize: "sm"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: ""
      }, "Assets"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "1"
      }, "0-99,999"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "2"
      }, "100,000-250,000"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "3"
      }, "250,001-500,000"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "4"
      }, "500,001-1,000,000")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["age"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "selectSm"
      }, "Age"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "select",
        name: "age",
        id: "age",
        onChange: this.handleChange.bind(this, "age"),
        bsSize: "sm"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: ""
      }, "Age"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "1"
      }, "21-35"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "2"
      }, "36-45"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "3"
      }, "46-55"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "4"
      }, "56-75"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "5"
      }, "75+"))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "selectSm"
      }, "Life Happiness"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "select",
        name: "life_happiness",
        id: "Select",
        bsSize: "sm"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: ""
      }, "Life Happiness"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "1"
      }, "Over the moon"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "2"
      }, "Very Happy"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "3"
      }, "UnHappy"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "4"
      }, "Depressed")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "selectSm"
      }, "Financial Awareness"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "select",
        name: "select",
        id: "Select",
        bsSize: "sm"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "0"
      }, "Financial Awareness"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "1"
      }, "Financially Confident"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "2"
      }, "Financially Aware"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "3"
      }, "Financially Chanllenged"))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["retirement_goal"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "selectSm"
      }, "Retirement Goal"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "select",
        name: "retirement_goal",
        onChange: this.handleChange.bind(this, "retirement_goal"),
        id: "Select",
        bsSize: "sm"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: ""
      }, "Retirement Goal"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "1"
      }, "0-5"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "2"
      }, "6-10"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "3"
      }, "11-15")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "selectSm"
      }, "Money Meaning"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "select",
        name: "select",
        id: "Select",
        bsSize: "sm"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: ""
      }, "Money Meaning"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "1"
      }, "Freedom"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "2"
      }, "Control"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "3"
      }, "Security"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "4"
      }, "All the above"))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Label"], {
        className: "sr-only",
        htmlFor: "selectSm"
      }, "Financial Desision Maker"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Input"], {
        type: "select",
        name: "select",
        id: "Select",
        bsSize: "sm"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "0"
      }, "Financial Desision Maker"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "1"
      }, "Me"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "2"
      }, "Partner"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "3"
      }, "Both"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "4"
      }, "Outside Source")))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Button"], {
        type: "submit",
        size: "md",
        className: "float-right",
        onClick: this["continue"],
        color: "info"
      }, " Next"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Button"], {
        type: "reset",
        size: "md",
        onClick: this.back
      }, " PREVIOUS"))))));
    }
  }]);

  return AdvisorAssets;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (AdvisorAssets);

/***/ }),

/***/ "./resources/js/views/AdvisorQuestions/AdvisorIntro.js":
/*!*************************************************************!*\
  !*** ./resources/js/views/AdvisorQuestions/AdvisorIntro.js ***!
  \*************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../Advisor/Imageb/Imageb */ "./resources/js/views/Advisor/Imageb/Imageb.js");
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
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





var AdvisorIntro =
/*#__PURE__*/
function (_Component) {
  _inherits(AdvisorIntro, _Component);

  function AdvisorIntro(props) {
    var _this;

    _classCallCheck(this, AdvisorIntro);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(AdvisorIntro).call(this, props));

    _defineProperty(_assertThisInitialized(_this), "continue", function (e) {
      e.preventDefault();

      _this.props.nextStep();
    });

    _defineProperty(_assertThisInitialized(_this), "back", function (e) {
      e.preventDefault();

      _this.props.prvStep();
    });

    _this.state = {
      image: false
    };
    _this.image = _this.image.bind(_assertThisInitialized(_this));
    return _this;
  }

  _createClass(AdvisorIntro, [{
    key: "image",
    value: function image() {
      this.setState({
        image: !this.state.image
      });
    }
  }, {
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_1__["default"], null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Row"], {
        className: "pt justify-content-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        md: "6",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Card"], {
        className: "top "
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        className: "text-center",
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("img", {
        className: "reglogo",
        src: "assets/images/averti.png",
        alt: "averti"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        className: "large-text text-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h5", {
        className: "text-info"
      }, "INTRODUCTION"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        md: "12",
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("b", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "text-center large-text text-info font-bold font-italic"
      }, "Before we can create your life and financial plan, we need to find out what you're looking for and what you value most."))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Button"], {
        type: "submit",
        size: "md",
        className: "float-right",
        onClick: this["continue"],
        color: "info"
      }, " Next"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Button"], {
        type: "reset",
        size: "md",
        onClick: this.back
      }, " Previous"))))));
    }
  }]);

  return AdvisorIntro;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (AdvisorIntro);

/***/ }),

/***/ "./resources/js/views/AdvisorQuestions/AdvisorRisk.js":
/*!************************************************************!*\
  !*** ./resources/js/views/AdvisorQuestions/AdvisorRisk.js ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../Advisor/Imageb/Imageb */ "./resources/js/views/Advisor/Imageb/Imageb.js");
/* harmony import */ var _Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../Advisor/Advisor.css */ "./resources/js/views/Advisor/Advisor.css");
/* harmony import */ var _Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @material-ui/core/Checkbox */ "./node_modules/@material-ui/core/esm/Checkbox/index.js");
/* harmony import */ var _material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @material-ui/core/FormControlLabel */ "./node_modules/@material-ui/core/esm/FormControlLabel/index.js");
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
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








var AdvisorRisk =
/*#__PURE__*/
function (_Component) {
  _inherits(AdvisorRisk, _Component);

  function AdvisorRisk() {
    var _getPrototypeOf2;

    var _this;

    _classCallCheck(this, AdvisorRisk);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _possibleConstructorReturn(this, (_getPrototypeOf2 = _getPrototypeOf(AdvisorRisk)).call.apply(_getPrototypeOf2, [this].concat(args)));

    _defineProperty(_assertThisInitialized(_this), "continue", function (e) {
      e.preventDefault();

      _this.props.nextStep();
    });

    _defineProperty(_assertThisInitialized(_this), "back", function (e) {
      e.preventDefault();

      _this.props.prvStep();
    });

    return _this;
  }

  _createClass(AdvisorRisk, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_1__["default"], null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], {
        className: "top justify-content-center "
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        md: "6",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Card"], {
        className: "top"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        className: "text-center",
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("img", {
        className: "reglogo",
        src: "assets/images/averti.png",
        alt: "averti"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        md: "12",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h5", {
        className: "text-center text-info"
      }, "RISK"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], {
        id: "top"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_4__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_3__["default"], {
          color: "primary"
        }),
        className: "labelcheck",
        label: "Aggressive",
        labelPlacement: "end"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_4__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_3__["default"], {
          color: "primary"
        }),
        className: "labelcheck",
        label: "Moderately Aggressive",
        labelPlacement: "end"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_4__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_3__["default"], {
          color: "primary"
        }),
        className: "labelcheck",
        label: "Moderate",
        labelPlacement: "end"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_4__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_3__["default"], {
          color: "primary"
        }),
        className: "labelcheck",
        label: "Conservative",
        labelPlacement: "end"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Button"], {
        type: "submit",
        size: "md",
        className: "float-right",
        onClick: this["continue"],
        color: "info"
      }, " Next"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Button"], {
        type: "reset",
        size: "md",
        onClick: this.back
      }, " PREVIOUS"))))));
    }
  }]);

  return AdvisorRisk;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (AdvisorRisk);

/***/ }),

/***/ "./resources/js/views/AdvisorQuestions/AdvisorWhat.js":
/*!************************************************************!*\
  !*** ./resources/js/views/AdvisorQuestions/AdvisorWhat.js ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../Advisor/Imageb/Imageb */ "./resources/js/views/Advisor/Imageb/Imageb.js");
/* harmony import */ var _material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @material-ui/core/Checkbox */ "./node_modules/@material-ui/core/esm/Checkbox/index.js");
/* harmony import */ var _material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @material-ui/core/FormControlLabel */ "./node_modules/@material-ui/core/esm/FormControlLabel/index.js");
/* harmony import */ var _Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../Advisor/Advisor.css */ "./resources/js/views/Advisor/Advisor.css");
/* harmony import */ var _Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
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








var AdvisorWhat =
/*#__PURE__*/
function (_Component) {
  _inherits(AdvisorWhat, _Component);

  function AdvisorWhat(props) {
    var _this;

    _classCallCheck(this, AdvisorWhat);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(AdvisorWhat).call(this, props));

    _defineProperty(_assertThisInitialized(_this), "continue", function (e) {
      e.preventDefault();

      if (_this.handleValidation()) {
        _this.props.nextStep();
      }
    });

    _defineProperty(_assertThisInitialized(_this), "back", function (e) {
      e.preventDefault();

      _this.props.prvStep();
    });

    _this.state = {
      fields: {},
      error: {}
    };
    return _this;
  }

  _createClass(AdvisorWhat, [{
    key: "handleValidation",
    value: function handleValidation() {
      var fields = this.state.fields;
      var errors = {};
      var formIsValid = true;

      if (!fields["checkbox"]) {
        formIsValid = false;
        errors["checkbox"] = " Select yes or Not";
      }

      this.setState({
        errors: errors
      });
      return formIsValid;
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
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_1__["default"], null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], {
        className: "top justify-content-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        md: "6",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Card"], {
        className: "top"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        className: "text-center",
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("img", {
        className: "reglogo",
        src: "assets/images/averti.png",
        alt: "averti"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        md: "12",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h5", {
        className: "text-info text-center"
      }, "WHAT"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["checkbox"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "text-center text-info"
      }, "Are you looking for holistic approach to life and money management?")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_3__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_2__["default"], {
          name: "checkbox",
          onChange: this.handleChange.bind(this, "checkbox"),
          color: "primary",
          value: "0"
        }),
        className: "labelcheck",
        label: "Yes",
        labelPlacement: "end"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_3__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_2__["default"], {
          name: "checkbox",
          onChange: this.handleChange.bind(this, "checkbox"),
          color: "primary",
          value: "1"
        }),
        className: "labelcheck",
        label: "No",
        labelPlacement: "end"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Button"], {
        type: "submit",
        size: "md",
        className: "float-right",
        onClick: this["continue"],
        color: "info"
      }, " Next"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Button"], {
        type: "reset",
        size: "md",
        onClick: this.back
      }, " PREVIOUS"))))));
    }
  }]);

  return AdvisorWhat;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (AdvisorWhat);

/***/ }),

/***/ "./resources/js/views/AdvisorQuestions/AdvisorWhen.js":
/*!************************************************************!*\
  !*** ./resources/js/views/AdvisorQuestions/AdvisorWhen.js ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @material-ui/core/Checkbox */ "./node_modules/@material-ui/core/esm/Checkbox/index.js");
/* harmony import */ var _material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @material-ui/core/FormControlLabel */ "./node_modules/@material-ui/core/esm/FormControlLabel/index.js");
/* harmony import */ var _Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../Advisor/Imageb/Imageb */ "./resources/js/views/Advisor/Imageb/Imageb.js");
/* harmony import */ var _Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../Advisor/Advisor.css */ "./resources/js/views/Advisor/Advisor.css");
/* harmony import */ var _Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
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








var AdvisorWhen =
/*#__PURE__*/
function (_Component) {
  _inherits(AdvisorWhen, _Component);

  function AdvisorWhen() {
    var _getPrototypeOf2;

    var _this;

    _classCallCheck(this, AdvisorWhen);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _possibleConstructorReturn(this, (_getPrototypeOf2 = _getPrototypeOf(AdvisorWhen)).call.apply(_getPrototypeOf2, [this].concat(args)));

    _defineProperty(_assertThisInitialized(_this), "continue", function (e) {
      e.preventDefault();

      _this.props.nextStep();
    });

    _defineProperty(_assertThisInitialized(_this), "back", function (e) {
      e.preventDefault();

      _this.props.prvStep();
    });

    return _this;
  }

  _createClass(AdvisorWhen, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_3__["default"], null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], {
        className: "top justify-content-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        md: "6",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Card"], {
        className: "top"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        className: "text-center",
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("img", {
        className: "reglogo",
        src: "assets/images/averti.png",
        alt: "averti"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        md: "12",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h5", {
        className: "text-info text-center"
      }, "WHEN"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        className: "text-center text-info"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", null, "How soon would you like to schedule a meeting?")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_2__["default"], {
        value: "",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_1__["default"], {
          color: "primary"
        }),
        className: "labelcheck",
        name: "meeting",
        label: "ASAP",
        labelPlacement: "end"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_2__["default"], {
        value: "",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_1__["default"], {
          color: "primary"
        }),
        className: "labelcheck",
        name: "meeting",
        label: "Week From Now",
        labelPlacement: "end"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_2__["default"], {
        value: "",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_1__["default"], {
          color: "primary"
        }),
        className: "labelcheck",
        name: "meeting",
        label: "Month From Now",
        labelPlacement: "end"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_2__["default"], {
        value: "",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_1__["default"], {
          color: "primary"
        }),
        className: "labelcheck",
        name: "meeting",
        label: "With Six Month",
        labelPlacement: "end"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Button"], {
        type: "submit",
        size: "md",
        className: "float-right",
        onClick: this["continue"],
        color: "info"
      }, " Next"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__["Button"], {
        type: "reset",
        size: "md",
        onClick: this.back
      }, " PREVIOUS"))))));
    }
  }]);

  return AdvisorWhen;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (AdvisorWhen);

/***/ }),

/***/ "./resources/js/views/AdvisorQuestions/AdvisorWhere.js":
/*!*************************************************************!*\
  !*** ./resources/js/views/AdvisorQuestions/AdvisorWhere.js ***!
  \*************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @material-ui/core/Checkbox */ "./node_modules/@material-ui/core/esm/Checkbox/index.js");
/* harmony import */ var _material_ui_core_Radio__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @material-ui/core/Radio */ "./node_modules/@material-ui/core/esm/Radio/index.js");
/* harmony import */ var _material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @material-ui/core/FormControlLabel */ "./node_modules/@material-ui/core/esm/FormControlLabel/index.js");
/* harmony import */ var _Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../Advisor/Imageb/Imageb */ "./resources/js/views/Advisor/Imageb/Imageb.js");
/* harmony import */ var _Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../Advisor/Advisor.css */ "./resources/js/views/Advisor/Advisor.css");
/* harmony import */ var _Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_Advisor_Advisor_css__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
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









var AdvisorWhere =
/*#__PURE__*/
function (_Component) {
  _inherits(AdvisorWhere, _Component);

  function AdvisorWhere(props) {
    var _this;

    _classCallCheck(this, AdvisorWhere);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(AdvisorWhere).call(this, props));

    _defineProperty(_assertThisInitialized(_this), "continue", function (e) {
      e.preventDefault();

      if (_this.handleValidation()) {
        _this.props.nextStep();
      }
    });

    _defineProperty(_assertThisInitialized(_this), "back", function (e) {
      e.preventDefault();

      _this.props.prvStep();
    });

    _this.state = {
      fields: {},
      error: {}
    };
    return _this;
  }

  _createClass(AdvisorWhere, [{
    key: "handleValidation",
    value: function handleValidation() {
      var fields = this.state.fields;
      var errors = {};
      var formIsValid = true;

      if (!fields["status"]) {
        formIsValid = false;
        errors["status"] = " Select Status";
      }

      this.setState({
        errors: errors
      });
      return formIsValid;
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
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_4__["default"], null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Row"], {
        className: "top justify-content-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Col"], {
        md: "6",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Card"], {
        className: "top "
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Col"], {
        className: "text-center",
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("img", {
        className: "reglogo",
        src: "assets/images/averti.png",
        alt: "averti"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Col"], {
        md: "12",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h5", {
        className: "text-info text-center"
      }, "WHERE"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "form-control-label text-center text-info"
      }, "What services are you most interested in receiving help with?"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_3__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_1__["default"], {
          color: "primary"
        }),
        className: "labelcheck",
        label: "Estate Planning",
        labelPlacement: "end"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_3__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_1__["default"], {
          color: "primary"
        }),
        className: "labelcheck",
        label: "Life And Money Management",
        labelPlacement: "end"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_3__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_1__["default"], {
          color: "primary"
        }),
        className: "labelcheck",
        label: "Cash Flow / Budgeting",
        labelPlacement: "end"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_3__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Checkbox__WEBPACK_IMPORTED_MODULE_1__["default"], {
          color: "primary"
        }),
        className: "labelcheck",
        label: "All Of The Above",
        labelPlacement: "end"
      }))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Col"], {
        md: "6",
        className: "text-center "
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Label"], {
        className: "form-control-label text-info"
      }, "Where are you now? Status")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["status"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_3__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Radio__WEBPACK_IMPORTED_MODULE_2__["default"], {
          name: "options",
          onChange: this.handleChange.bind(this, "status"),
          color: "primary"
        }),
        className: "labelcheck",
        label: "Single",
        labelPlacement: "end"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_3__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Radio__WEBPACK_IMPORTED_MODULE_2__["default"], {
          name: "options",
          onChange: this.handleChange.bind(this, "status"),
          color: "primary"
        }),
        className: "labelcheck",
        label: "Married",
        labelPlacement: "end"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_3__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Radio__WEBPACK_IMPORTED_MODULE_2__["default"], {
          name: "options",
          onChange: this.handleChange.bind(this, "status"),
          color: "primary"
        }),
        className: "labelcheck",
        label: "widowd",
        labelPlacement: "end"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Col"], {
        xs: "12",
        sm: "4",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_FormControlLabel__WEBPACK_IMPORTED_MODULE_3__["default"], {
        value: "end",
        control: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_material_ui_core_Radio__WEBPACK_IMPORTED_MODULE_2__["default"], {
          name: "options",
          onChange: this.handleChange.bind(this, "status"),
          color: "primary"
        }),
        className: "labelcheck",
        label: "Divorce",
        labelPlacement: "end"
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Button"], {
        type: "submit",
        size: "md",
        className: "float-right",
        onClick: this["continue"],
        color: "info"
      }, " Next"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__["Button"], {
        type: "reset",
        size: "md",
        onClick: this.back
      }, " PREVIOUS"))))));
    }
  }]);

  return AdvisorWhere;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (AdvisorWhere);

/***/ }),

/***/ "./resources/js/views/AdvisorQuestions/AdvisorWhy.js":
/*!***********************************************************!*\
  !*** ./resources/js/views/AdvisorQuestions/AdvisorWhy.js ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../Advisor/Imageb/Imageb */ "./resources/js/views/Advisor/Imageb/Imageb.js");
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
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





var AdvisorWhy =
/*#__PURE__*/
function (_Component) {
  _inherits(AdvisorWhy, _Component);

  function AdvisorWhy(props) {
    var _this;

    _classCallCheck(this, AdvisorWhy);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(AdvisorWhy).call(this, props));

    _defineProperty(_assertThisInitialized(_this), "continue", function (e) {
      e.preventDefault();

      if (_this.handleValidation()) {
        _this.props.nextStep();
      }
    });

    _defineProperty(_assertThisInitialized(_this), "back", function (e) {
      e.preventDefault();

      _this.props.prvStep();
    });

    _this.state = {
      fields: {},
      error: {}
    };
    return _this;
  }

  _createClass(AdvisorWhy, [{
    key: "handleValidation",
    value: function handleValidation() {
      var fields = this.state.fields;
      var errors = {};
      var formIsValid = true;

      if (!fields["planning"]) {
        formIsValid = false;
        errors["planning"] = " Select Option";
      }

      if (!fields["services"]) {
        formIsValid = false;
        errors["services"] = " Select Option";
      }

      this.setState({
        errors: errors
      });
      return formIsValid;
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
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Advisor_Imageb_Imageb__WEBPACK_IMPORTED_MODULE_1__["default"], null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Row"], {
        className: "top justify-content-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        md: "6",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Card"], {
        className: "top"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        className: "text-center",
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("img", {
        className: "reglogo",
        src: "assets/images/averti.png",
        alt: "averti"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        md: "12",
        xs: "12",
        sm: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h5", {
        className: "text-info text-center"
      }, "WHY"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "text-center text-info"
      }, "What type of planning do you want to get started ?"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        xs: "12",
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["planning"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Label"], {
        className: "sr-only text-info",
        htmlFor: "selectSm"
      }, "Planning"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Input"], {
        type: "select",
        name: "planning",
        onChange: this.handleChange.bind(this, "planning"),
        id: "Select",
        bsSize: "sm"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "0"
      }, "Select Option"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "1"
      }, "Financial Planning"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "2"
      }, "Life Management"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "3"
      }, "Income Planning"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "4"
      }, "Investments")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "text-center text-info"
      }, "How much do you have allocated for these services?"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        xs: "12",
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "error"
      }, this.state.errors === undefined ? null : this.state.errors["services"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Label"], {
        className: "sr-only text-info",
        htmlFor: "selectSm"
      }, "Planning"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Input"], {
        type: "select",
        name: "services",
        onChange: this.handleChange.bind(this, "services"),
        id: "Select",
        bsSize: "sm"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "0"
      }, "Select Option"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "1"
      }, "2500-5000"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "2"
      }, "5001-7000"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "3"
      }, "7001-10000"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("option", {
        value: "4"
      }, "10000+"))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Button"], {
        type: "submit",
        size: "md",
        className: "float-right",
        onClick: this["continue"],
        color: "info"
      }, " Next"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Button"], {
        type: "reset",
        size: "md",
        onClick: this.back
      }, " PREVIOUS"))))));
    }
  }]);

  return AdvisorWhy;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (AdvisorWhy);

/***/ })

}]);