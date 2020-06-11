(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[63],{

/***/ "./resources/js/views/Emails/Emails.js":
/*!*********************************************!*\
  !*** ./resources/js/views/Emails/Emails.js ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
!(function webpackMissingModule() { var e = new Error("Cannot find module './Addprofile.css'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
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





var Emails =
/*#__PURE__*/
function (_Component) {
  _inherits(Emails, _Component);

  function Emails(props) {
    var _this;

    _classCallCheck(this, Emails);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Emails).call(this, props));

    _defineProperty(_assertThisInitialized(_this), "fetchData", function () {
      _this.setState({
        loading: true
      });

      setTimeout(function () {
        _this.setState({
          loading: false
        });
      }, 8000);
    });

    _this.state = {
      msg: false,
      loading: false,
      fields: {},
      errors: {},
      usertype: null
    };
    _this.add = _this.add.bind(_assertThisInitialized(_this));
    return _this;
  }

  _createClass(Emails, [{
    key: "add",
    value: function add() {
      this.setState({
        msg: !this.state.msg
      });
    }
  }, {
    key: "handleValidation",
    value: function handleValidation() {
      var fields = this.state.fields;
      var errors = {};
      var formIsValid = true;

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

      this.setState({
        errors: errors
      });
      return formIsValid;
    }
  }, {
    key: "contactSubmit",
    value: function contactSubmit(e) {
      var _this2 = this;

      e.preventDefault();

      if (this.handleValidation()) {
        this.setState({
          loading: true
        }, function () {
          var that = _this2;
          var fields = _this2.state.fields;
          var jsonData = {
            email: _this2.state.fields['email'],
            usertype: _this2.props.location.query.lang
          };
          axios.post('/api/email', jsonData).then(function (res) {
            console.log("test", res.data);
            that.setState({
              msg: !that.state.msg
            }), fields['message'] = res.data.message;
            that.setState({
              fields: fields
            });

            loading: false;
          })["catch"](function (error) {
            console.log(error);
          });
        });
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
    key: "render",
    value: function render() {
      var loading = this.state.loading;
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react__WEBPACK_IMPORTED_MODULE_0___default.a.Fragment, null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "maincont app flex-row align-items-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Container"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Row"], {
        className: "justify-content-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        md: "5"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Card"], {
        className: "p-4"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Form"], null, this.state.msg ? react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Alert"], {
        color: "info"
      }, this.state.fields['message'] === undefined ? null : this.state.fields['message']) : null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h1", null, "Sign In"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "text-muted"
      }, "Please Verify your Email First"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["InputGroup"], {
        className: "mb-3 "
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Input"], {
        type: "email",
        id: "inpute",
        onChange: this.handleChange.bind(this, "email"),
        value: this.state.fields["email"],
        placeholder: "Email",
        autoComplete: "off"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        style: {
          color: "red"
        }
      }, this.state.errors["email"]), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        xs: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Button"], {
        color: "info",
        className: "px-4",
        onClick: this.contactSubmit.bind(this),
        disabled: loading
      }, "Verify", loading && react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-refresh fa-spin"
      })))))))))))));
    }
  }]);

  return Emails;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Emails);

/***/ })

}]);