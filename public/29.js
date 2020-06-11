(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[29],{

/***/ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./resources/js/views/Landing/Landing.css":
/*!********************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/postcss-loader/src??ref--6-2!./resources/js/views/Landing/Landing.css ***!
  \********************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "#p{\r\n    padding-top:5px;\r\n}\r\nimg{\r\n    height: 100px;\r\n}\r\n#body{\r\n    font-family:'Times New Roman', Times, serif;\r\n}\r\n#pb{\r\n    font-family: sans-serif ;\r\n}\r\n#video{\r\n    padding-top:10px;\r\n    width:100%;\r\n\r\n}\r\n.icon{\r\n     padding: 3px; \r\n            min-width:20px; \r\n}\r\ninput{text-transform: inherit !important;\r\n\r\n}    \r\n#link1{\r\n    padding-top:15px;\r\n    padding-bottom:15px;\r\n}\r\n.video-container {\r\n    width: 100%;\r\n    padding-top: 56.25%;\r\n    height: 0px;\r\n    position: relative;\r\n}\r\n\r\n.video {\r\n    width: 100%;\r\n    height: 100%;\r\n    position: absolute;\r\n    top: 0;\r\n    left: 0;\r\n}\r\n.nav{display: list-item !important;}\r\n", ""]);

// exports


/***/ }),

/***/ "./resources/js/views/Landing/Landing.css":
/*!************************************************!*\
  !*** ./resources/js/views/Landing/Landing.css ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../node_modules/css-loader??ref--6-1!../../../../node_modules/postcss-loader/src??ref--6-2!./Landing.css */ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./resources/js/views/Landing/Landing.css");

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

/***/ "./resources/js/views/Landing/Landing.js":
/*!***********************************************!*\
  !*** ./resources/js/views/Landing/Landing.js ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom */ "./node_modules/react-dom/index.js");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_dom__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _Landing_Landing_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../Landing/Landing.css */ "./resources/js/views/Landing/Landing.css");
/* harmony import */ var _Landing_Landing_css__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_Landing_Landing_css__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _Image_Image__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../Image/Image */ "./resources/js/views/Image/Image.js");
/* harmony import */ var bootstrap_dist_css_bootstrap_min_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! bootstrap/dist/css/bootstrap.min.css */ "./node_modules/bootstrap/dist/css/bootstrap.min.css");
/* harmony import */ var bootstrap_dist_css_bootstrap_min_css__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(bootstrap_dist_css_bootstrap_min_css__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var react_html5video__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! react-html5video */ "./node_modules/react-html5video/dist/index.js");
/* harmony import */ var react_html5video__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(react_html5video__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var react_html5video_dist_styles_css__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! react-html5video/dist/styles.css */ "./node_modules/react-html5video/dist/styles.css");
/* harmony import */ var react_html5video_dist_styles_css__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(react_html5video_dist_styles_css__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }










var Landing =
/*#__PURE__*/
function (_Component) {
  _inherits(Landing, _Component);

  function Landing(props) {
    var _this;

    _classCallCheck(this, Landing);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Landing).call(this, props));
    _this.state = {
      modal: false,
      modal1: false,
      Advisorprofile: false,
      email: false,
      image: false,
      small: false,
      hidden: true,
      password: ""
    };
    _this.toggle = _this.toggle.bind(_assertThisInitialized(_this));
    _this.toggle1 = _this.toggle1.bind(_assertThisInitialized(_this));
    _this.email = _this.email.bind(_assertThisInitialized(_this));
    _this.email2 = _this.email2.bind(_assertThisInitialized(_this));
    _this.Advisorprofile = _this.Advisorprofile.bind(_assertThisInitialized(_this));
    _this.image = _this.image.bind(_assertThisInitialized(_this));
    _this.handlePasswordChange = _this.handlePasswordChange.bind(_assertThisInitialized(_this));
    _this.toggleShow = _this.toggleShow.bind(_assertThisInitialized(_this));
    return _this;
  }

  _createClass(Landing, [{
    key: "handleChange",
    value: function handleChange(field, e) {
      var fields = this.state.fields;
      fields[field] = e.target.value;
      this.setState({
        fields: fields
      });
    }
  }, {
    key: "toggle",
    value: function toggle() {
      this.setState({
        modal: !this.state.modal
      });
    }
  }, {
    key: "toggle1",
    value: function toggle1() {
      this.setState({
        modal1: !this.state.modal1
      });
    }
  }, {
    key: "email",
    value: function email() {
      this.props.history.push({
        pathname: '/email',
        query: {
          lang: 'user'
        }
      });
    }
  }, {
    key: "email2",
    value: function email2() {
      this.props.history.push({
        pathname: '/email',
        query: {
          lang: 'advisor'
        }
      });
    }
  }, {
    key: "Advisorprofile",
    value: function Advisorprofile() {
      this.props.history.push('/advisor');
    }
  }, {
    key: "image",
    value: function image() {
      this.setState({
        image: !this.state.image
      });
    }
  }, {
    key: "handlePasswordChange",
    value: function handlePasswordChange(e) {
      this.setState({
        password: e.target.value
      });
    }
  }, {
    key: "toggleShow",
    value: function toggleShow() {
      this.setState({
        hidden: !this.state.hidden
      });
    }
  }, {
    key: "componentDidMount",
    value: function componentDidMount() {
      if (this.props.password) {
        this.setState({
          password: this.props.password
        });
      }
    }
  }, {
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Col"], {
        className: "text-center bg-white"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Image_Image__WEBPACK_IMPORTED_MODULE_3__["default"], null))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Col"], {
        className: "text-center bg-white"
      }, "Averti365 was developed for a unique community of life logistic advisors", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("br", null), " and advocates who seek to provide world class experiences ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("br", null), "on behalf of their clients.")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("hr", {
        className: "style-one"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Col"], {
        md: "12",
        className: "text-center bg-white"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Button"], {
        onClick: this.toggle,
        size: "md",
        color: "info",
        className: "mr-1 large-text"
      }, "Sign In")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Col"], {
        md: "12",
        className: "large-text text-center",
        id: "link1"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        className: "section-scroll",
        href: ""
      }, "How may we help you?")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Col"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react_html5video__WEBPACK_IMPORTED_MODULE_5__["DefaultPlayer"], {
        autoPlay: true,
        loop: true,
        muted: true,
        controls: ['PlayPause', 'Seek', 'Time', 'Volume', 'Fullscreen']
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("source", {
        src: "assets/videos/123.mp4",
        type: "video/webm"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Col"], {
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Nav"], {
        className: "text-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["NavLink"], {
        className: "section-scroll",
        href: "#"
      }, "Terms and Conditions"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["NavLink"], {
        className: "section-scroll",
        href: "#"
      }, "Privacy Policy"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Col"], {
        md: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h3", {
        id: "body",
        className: "module-title font-alt"
      }, "WORLD\u2019S FIRST TOTAL LIFE MANAGEMENT SYSTEM"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("hr", {
        className: "style-one"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "style-one"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        id: "pb",
        className: "module-subtitle font-serif large-text"
      }, "Evoking the futurist services of tomorrow coupled with thoughtful, client-centric design, our new, fully customized Life Filtering Service System will offer exceptional life expeditions for a unique group of visionaries.")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "scroll-up float-right"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#totop"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-angle-double-up"
      }))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Col"], {
        md: "6",
        xs: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Modal"], {
        isOpen: this.state.modal,
        toggle: this.toggle,
        className: this.props.className
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["ModalBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Col"], {
        className: "text-center bg-white"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(_Image_Image__WEBPACK_IMPORTED_MODULE_3__["default"], null)), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h3", {
        className: "text-info"
      }, "SIGN IN"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "text-muted"
      }, "Sign In to your account"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["FormGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["InputGroup"], {
        className: "mb-3"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Input"], {
        type: "text",
        placeholder: "Email",
        autoComplete: "Email"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["InputGroup"], {
        className: "mb-3"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Input"], {
        placeholder: "Password",
        type: this.state.hidden ? "password" : "text",
        value: this.state.password,
        onChange: this.handlePasswordChange
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["InputGroupText"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-eye icon",
        onClick: this.toggleShow
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Col"], {
        md: "12",
        className: "text-right"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Button"], {
        type: "submit",
        size: "md",
        color: "info"
      }, "LogIn"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["FormGroup"], {
        className: "form-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Button"], {
        onClick: this.email,
        color: "info",
        className: "mr-1"
      }, "Apply For user"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_7__["Button"], {
        onClick: this.email2,
        color: "info",
        className: "mr-1"
      }, "Apply For Advisor")))))));
    }
  }]);

  return Landing;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Landing);

/***/ })

}]);