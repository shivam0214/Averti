(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[12],{

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

/***/ "./resources/js/views/Profile/Email.js":
/*!*********************************************!*\
  !*** ./resources/js/views/Profile/Email.js ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _Addprofile_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Addprofile.css */ "./resources/js/views/Profile/Addprofile.css");
/* harmony import */ var _Addprofile_css__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_Addprofile_css__WEBPACK_IMPORTED_MODULE_1__);
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





var Email =
/*#__PURE__*/
function (_Component) {
  _inherits(Email, _Component);

  function Email(props) {
    var _this;

    _classCallCheck(this, Email);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Email).call(this, props));
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

  _createClass(Email, [{
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
              loading: false
            }), that.setState({
              msg: !that.state.msg
            }), fields['message'] = res.data.message;
            that.setState({
              fields: fields
            });
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

  return Email;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Email);

/***/ })

}]);