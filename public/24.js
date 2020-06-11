(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[24],{

/***/ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./resources/js/views/Image/Image.css":
/*!****************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/postcss-loader/src??ref--6-2!./resources/js/views/Image/Image.css ***!
  \****************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "img{\r\n  height: 100px;\r\n    \r\n}", ""]);

// exports


/***/ }),

/***/ "./resources/js/views/Base/Breadcrumbs/Breadcrumbs.js":
/*!************************************************************!*\
  !*** ./resources/js/views/Base/Breadcrumbs/Breadcrumbs.js ***!
  \************************************************************/
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




var Breadcrumbs =
/*#__PURE__*/
function (_Component) {
  _inherits(Breadcrumbs, _Component);

  function Breadcrumbs() {
    _classCallCheck(this, Breadcrumbs);

    return _possibleConstructorReturn(this, _getPrototypeOf(Breadcrumbs).apply(this, arguments));
  }

  _createClass(Breadcrumbs, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Breadcrumbs"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "https://reactstrap.github.io/components/breadcrumbs/",
        rel: "noreferrer noopener",
        target: "_blank",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Breadcrumb"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["BreadcrumbItem"], {
        active: true
      }, "Home")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Breadcrumb"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["BreadcrumbItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#"
      }, "Home")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["BreadcrumbItem"], {
        active: true
      }, "Library")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Breadcrumb"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["BreadcrumbItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#"
      }, "Home")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["BreadcrumbItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#"
      }, "Library")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["BreadcrumbItem"], {
        active: true
      }, "Data")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Breadcrumb"], {
        tag: "nav"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["BreadcrumbItem"], {
        tag: "a",
        href: "#"
      }, "Home"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["BreadcrumbItem"], {
        tag: "a",
        href: "#"
      }, "Library"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["BreadcrumbItem"], {
        tag: "a",
        href: "#"
      }, "Data"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["BreadcrumbItem"], {
        active: true,
        tag: "span"
      }, "Bootstrap")))))));
    }
  }]);

  return Breadcrumbs;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Breadcrumbs);

/***/ }),

/***/ "./resources/js/views/Base/Carousels/Carousels.js":
/*!********************************************************!*\
  !*** ./resources/js/views/Base/Carousels/Carousels.js ***!
  \********************************************************/
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

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }



var items = [{
  src: 'data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1607923e7e2%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1607923e7e2%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9296875%22%20y%3D%22217.75625%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E',
  altText: 'Slide 1',
  caption: 'Slide 1'
}, {
  src: 'data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15ba800aa20%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15ba800aa20%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22218.3%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E',
  altText: 'Slide 2',
  caption: 'Slide 2'
}, {
  src: 'data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15ba800aa21%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15ba800aa21%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277%22%20y%3D%22218.3%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E',
  altText: 'Slide 3',
  caption: 'Slide 3'
}];

var Carousels =
/*#__PURE__*/
function (_Component) {
  _inherits(Carousels, _Component);

  function Carousels(props) {
    var _this;

    _classCallCheck(this, Carousels);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Carousels).call(this, props));
    _this.state = {
      activeIndex: 0
    };
    _this.next = _this.next.bind(_assertThisInitialized(_this));
    _this.previous = _this.previous.bind(_assertThisInitialized(_this));
    _this.goToIndex = _this.goToIndex.bind(_assertThisInitialized(_this));
    _this.onExiting = _this.onExiting.bind(_assertThisInitialized(_this));
    _this.onExited = _this.onExited.bind(_assertThisInitialized(_this));
    return _this;
  }

  _createClass(Carousels, [{
    key: "onExiting",
    value: function onExiting() {
      this.animating = true;
    }
  }, {
    key: "onExited",
    value: function onExited() {
      this.animating = false;
    }
  }, {
    key: "next",
    value: function next() {
      if (this.animating) return;
      var nextIndex = this.state.activeIndex === items.length - 1 ? 0 : this.state.activeIndex + 1;
      this.setState({
        activeIndex: nextIndex
      });
    }
  }, {
    key: "previous",
    value: function previous() {
      if (this.animating) return;
      var nextIndex = this.state.activeIndex === 0 ? items.length - 1 : this.state.activeIndex - 1;
      this.setState({
        activeIndex: nextIndex
      });
    }
  }, {
    key: "goToIndex",
    value: function goToIndex(newIndex) {
      if (this.animating) return;
      this.setState({
        activeIndex: newIndex
      });
    }
  }, {
    key: "render",
    value: function render() {
      var _this2 = this;

      var activeIndex = this.state.activeIndex;
      var slides = items.map(function (item) {
        return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CarouselItem"], {
          onExiting: _this2.onExiting,
          onExited: _this2.onExited,
          key: item.src
        }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("img", {
          className: "d-block w-100",
          src: item.src,
          alt: item.altText
        }));
      });
      var slides2 = items.map(function (item) {
        return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CarouselItem"], {
          onExiting: _this2.onExiting,
          onExited: _this2.onExited,
          key: item.src
        }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("img", {
          className: "d-block w-100",
          src: item.src,
          alt: item.altText
        }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CarouselCaption"], {
          captionText: item.caption,
          captionHeader: item.caption
        }));
      });
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        xl: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Carousel"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "https://reactstrap.github.io/components/carousel/",
        rel: "noreferrer noopener",
        target: "_blank",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Carousel"], {
        activeIndex: activeIndex,
        next: this.next,
        previous: this.previous,
        ride: "carousel"
      }, slides)))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        xl: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Carousel")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Carousel"], {
        activeIndex: activeIndex,
        next: this.next,
        previous: this.previous
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CarouselIndicators"], {
        items: items,
        activeIndex: activeIndex,
        onClickHandler: this.goToIndex
      }), slides2, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CarouselControl"], {
        direction: "prev",
        directionText: "Previous",
        onClickHandler: this.previous
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CarouselControl"], {
        direction: "next",
        directionText: "Next",
        onClickHandler: this.next
      })))))));
    }
  }]);

  return Carousels;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Carousels);

/***/ }),

/***/ "./resources/js/views/Base/Jumbotrons/Jumbotrons.js":
/*!**********************************************************!*\
  !*** ./resources/js/views/Base/Jumbotrons/Jumbotrons.js ***!
  \**********************************************************/
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




var Jumbotrons =
/*#__PURE__*/
function (_Component) {
  _inherits(Jumbotrons, _Component);

  function Jumbotrons() {
    _classCallCheck(this, Jumbotrons);

    return _possibleConstructorReturn(this, _getPrototypeOf(Jumbotrons).apply(this, arguments));
  }

  _createClass(Jumbotrons, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Jumbotron"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "https://reactstrap.github.io/components/jumbotron/",
        rel: "noreferrer noopener",
        target: "_blank",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Jumbotron"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h1", {
        className: "display-3"
      }, "Hello, world!"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "lead"
      }, "This is a simple hero unit, a simple Jumbotron-style component for calling extra attention to featured content or information."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("hr", {
        className: "my-2"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", null, "It uses utility classes for typgraphy and spacing to space content out within the larger container."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "lead"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], {
        color: "primary"
      }, "Learn More")))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Jumbotron"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, " fluid")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Jumbotron"], {
        fluid: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Container"], {
        fluid: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h1", {
        className: "display-3"
      }, "Fluid jumbotron"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "lead"
      }, "This is a modified jumbotron that occupies the entire horizontal space of its parent."))))))));
    }
  }]);

  return Jumbotrons;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Jumbotrons);

/***/ }),

/***/ "./resources/js/views/Base/Navbars/Navbars.js":
/*!****************************************************!*\
  !*** ./resources/js/views/Base/Navbars/Navbars.js ***!
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

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }




var Navbars =
/*#__PURE__*/
function (_Component) {
  _inherits(Navbars, _Component);

  function Navbars(props) {
    var _this;

    _classCallCheck(this, Navbars);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Navbars).call(this, props));
    _this.toggle = _this.toggle.bind(_assertThisInitialized(_this));
    _this.toggleNavbar = _this.toggleNavbar.bind(_assertThisInitialized(_this));
    _this.state = {
      isOpen: false,
      collapsed: true
    };
    return _this;
  }

  _createClass(Navbars, [{
    key: "toggle",
    value: function toggle() {
      this.setState({
        isOpen: !this.state.isOpen
      });
    }
  }, {
    key: "toggleNavbar",
    value: function toggleNavbar() {
      this.setState({
        collapsed: !this.state.collapsed
      });
    }
  }, {
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Navbar"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "https://reactstrap.github.io/components/navbar/",
        rel: "noreferrer noopener",
        target: "_blank",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Navbar"], {
        color: "info",
        light: true,
        expand: "md"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavbarBrand"], {
        href: "/"
      }, "Bootstrap"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavbarToggler"], {
        onClick: this.toggle
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Collapse"], {
        isOpen: this.state.isOpen,
        navbar: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Nav"], {
        className: "ml-auto",
        navbar: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#/components/navbars"
      }, "Components")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "https://github.com/reactstrap/reactstrap",
        target: "_blank"
      }, "Github")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["UncontrolledDropdown"], {
        nav: true,
        inNavbar: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownToggle"], {
        nav: true,
        caret: true
      }, "Options"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownMenu"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], null, "Option 1"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], null, "Option 2"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], {
        divider: true
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], null, "Reset")))))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Navbar Toggler")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Navbar"], {
        color: "success",
        light: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavbarBrand"], {
        href: "/",
        className: "mr-auto"
      }, "Bootstrap"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavbarToggler"], {
        onClick: this.toggleNavbar,
        className: "mr-2"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Collapse"], {
        isOpen: !this.state.collapsed,
        navbar: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Nav"], {
        navbar: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#/components/navbars"
      }, "Components")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "https://github.com/reactstrap/reactstrap"
      }, "Github"))))))));
    }
  }]);

  return Navbars;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Navbars);

/***/ }),

/***/ "./resources/js/views/Base/Navs/Navs.js":
/*!**********************************************!*\
  !*** ./resources/js/views/Base/Navs/Navs.js ***!
  \**********************************************/
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

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }




var Navs =
/*#__PURE__*/
function (_Component) {
  _inherits(Navs, _Component);

  function Navs(props) {
    var _this;

    _classCallCheck(this, Navs);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Navs).call(this, props));
    _this.toggle = _this.toggle.bind(_assertThisInitialized(_this));
    _this.state = {
      dropdownOpen: [false, false]
    };
    return _this;
  }

  _createClass(Navs, [{
    key: "toggle",
    value: function toggle(i) {
      var newArray = this.state.dropdownOpen.map(function (element, index) {
        return index === i ? !element : false;
      });
      this.setState({
        dropdownOpen: newArray
      });
    }
  }, {
    key: "render",
    value: function render() {
      var _this2 = this;

      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Navs"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "https://reactstrap.github.io/components/navs/",
        rel: "noreferrer noopener",
        target: "_blank",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", null, "List Based"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Nav"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Link")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Link")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Another Link")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        disabled: true,
        href: "#"
      }, "Disabled Link"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("hr", null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", null, "Link Based"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Nav"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Link"), " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Link"), " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Another Link"), " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        disabled: true,
        href: "#"
      }, "Disabled Link")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Navs Tabs")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Nav"], {
        tabs: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#",
        active: true
      }, "Link")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Dropdown"], {
        nav: true,
        isOpen: this.state.dropdownOpen[0],
        toggle: function toggle() {
          _this2.toggle(0);
        }
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownToggle"], {
        nav: true,
        caret: true
      }, "Dropdown"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownMenu"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], {
        header: true
      }, "Header"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], {
        disabled: true
      }, "Action"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], null, "Another Action"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], {
        divider: true
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], null, "Another Action"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Link")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Another Link")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        disabled: true,
        href: "#"
      }, "Disabled Link"))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Navs Pills")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Nav"], {
        pills: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#",
        active: true
      }, "Link")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Dropdown"], {
        nav: true,
        isOpen: this.state.dropdownOpen[1],
        toggle: function toggle() {
          _this2.toggle(1);
        }
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownToggle"], {
        nav: true,
        caret: true
      }, "Dropdown"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownMenu"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], {
        header: true
      }, "Header"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], {
        disabled: true
      }, "Action"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], null, "Another Action"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], {
        divider: true
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], null, "Another Action"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Link")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Another Link")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        disabled: true,
        href: "#"
      }, "Disabled Link"))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Navs Vertical")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", null, "List Based"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Nav"], {
        vertical: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Link")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Link")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Another Link")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        disabled: true,
        href: "#"
      }, "Disabled Link"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("hr", null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", null, "Link based"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Nav"], {
        vertical: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Link"), " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Link"), " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        href: "#"
      }, "Another Link"), " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        disabled: true,
        href: "#"
      }, "Disabled Link")))));
    }
  }]);

  return Navs;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Navs);

/***/ }),

/***/ "./resources/js/views/Base/Paginations/Pagnations.js":
/*!***********************************************************!*\
  !*** ./resources/js/views/Base/Paginations/Pagnations.js ***!
  \***********************************************************/
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




var Paginations =
/*#__PURE__*/
function (_Component) {
  _inherits(Paginations, _Component);

  function Paginations() {
    _classCallCheck(this, Paginations);

    return _possibleConstructorReturn(this, _getPrototypeOf(Paginations).apply(this, arguments));
  }

  _createClass(Paginations, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Pagination"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "https://reactstrap.github.io/components/pagination/",
        rel: "noreferrer noopener",
        target: "_blank",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Pagination"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        previous: true,
        tag: "button"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "1")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "2")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "3")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "4")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "5")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        next: true,
        tag: "button"
      }))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Pagination"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, " disabled and active states")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Pagination"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], {
        disabled: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        previous: true,
        tag: "button"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], {
        active: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "1")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "2")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "3")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "4")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "5")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        next: true,
        tag: "button"
      }))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Pagination"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, " sizing")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Pagination"], {
        size: "lg"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        previous: true,
        tag: "button"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "1")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "2")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "3")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], {
        className: "d-none d-sm-block"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        next: true,
        tag: "button"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Pagination"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        previous: true,
        tag: "button"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "1")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "2")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "3")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        next: true,
        tag: "button"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Pagination"], {
        size: "sm"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        previous: true,
        tag: "button"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "1")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "2")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        tag: "button"
      }, "3")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PaginationLink"], {
        next: true,
        tag: "button"
      }))))));
    }
  }]);

  return Paginations;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Paginations);

/***/ }),

/***/ "./resources/js/views/Base/Popovers/Popovers.js":
/*!******************************************************!*\
  !*** ./resources/js/views/Base/Popovers/Popovers.js ***!
  \******************************************************/
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

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }




var PopoverItem =
/*#__PURE__*/
function (_Component) {
  _inherits(PopoverItem, _Component);

  function PopoverItem(props) {
    var _this;

    _classCallCheck(this, PopoverItem);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(PopoverItem).call(this, props));
    _this.toggle = _this.toggle.bind(_assertThisInitialized(_this));
    _this.state = {
      popoverOpen: false
    };
    return _this;
  }

  _createClass(PopoverItem, [{
    key: "toggle",
    value: function toggle() {
      this.setState({
        popoverOpen: !this.state.popoverOpen
      });
    }
  }, {
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], {
        className: "mr-1",
        color: "secondary",
        id: 'Popover-' + this.props.id,
        onClick: this.toggle
      }, this.props.item.text), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Popover"], {
        placement: this.props.item.placement,
        isOpen: this.state.popoverOpen,
        target: 'Popover-' + this.props.id,
        toggle: this.toggle,
        trigger: "legacy",
        delay: 0
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PopoverHeader"], null, "Popover Title"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PopoverBody"], null, "Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.")));
    }
  }]);

  return PopoverItem;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

var Popovers =
/*#__PURE__*/
function (_Component2) {
  _inherits(Popovers, _Component2);

  function Popovers(props) {
    var _this2;

    _classCallCheck(this, Popovers);

    _this2 = _possibleConstructorReturn(this, _getPrototypeOf(Popovers).call(this, props));
    _this2.toggle = _this2.toggle.bind(_assertThisInitialized(_this2));
    _this2.state = {
      popoverOpen: false,
      popovers: [{
        placement: 'top',
        text: 'Top'
      }, {
        placement: 'bottom',
        text: 'Bottom'
      }, {
        placement: 'left',
        text: 'Left'
      }, {
        placement: 'right',
        text: 'Right'
      }]
    };
    return _this2;
  }

  _createClass(Popovers, [{
    key: "toggle",
    value: function toggle() {
      this.setState({
        popoverOpen: !this.state.popoverOpen
      });
    }
  }, {
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Popovers"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "https://reactstrap.github.io/components/popovers/",
        rel: "noreferrer noopener",
        target: "_blank",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], {
        id: "Popover1",
        onClick: this.toggle
      }, "Launch Popover"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Popover"], {
        placement: "bottom",
        isOpen: this.state.popoverOpen,
        target: "Popover1",
        toggle: this.toggle
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PopoverHeader"], null, "Popover Title"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["PopoverBody"], null, "Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Popovers"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, " list")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, this.state.popovers.map(function (popover, i) {
        return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(PopoverItem, {
          key: i,
          item: popover,
          id: i
        });
      }))));
    }
  }]);

  return Popovers;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Popovers);

/***/ }),

/***/ "./resources/js/views/Base/Tabs/Tabs.js":
/*!**********************************************!*\
  !*** ./resources/js/views/Base/Tabs/Tabs.js ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! classnames */ "./node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_2__);
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }





var Tabs =
/*#__PURE__*/
function (_Component) {
  _inherits(Tabs, _Component);

  function Tabs(props) {
    var _this;

    _classCallCheck(this, Tabs);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Tabs).call(this, props));
    _this.toggle = _this.toggle.bind(_assertThisInitialized(_this));
    _this.state = {
      activeTab: new Array(4).fill('1')
    };
    return _this;
  }

  _createClass(Tabs, [{
    key: "lorem",
    value: function lorem() {
      return 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.';
    }
  }, {
    key: "toggle",
    value: function toggle(tabPane, tab) {
      var newArray = this.state.activeTab.slice();
      newArray[tabPane] = tab;
      this.setState({
        activeTab: newArray
      });
    }
  }, {
    key: "tabPane",
    value: function tabPane() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react__WEBPACK_IMPORTED_MODULE_0___default.a.Fragment, null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["TabPane"], {
        tabId: "1"
      }, "1. ".concat(this.lorem())), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["TabPane"], {
        tabId: "2"
      }, "2. ".concat(this.lorem())), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["TabPane"], {
        tabId: "3"
      }, "3. ".concat(this.lorem())));
    }
  }, {
    key: "render",
    value: function render() {
      var _this2 = this;

      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        md: "6",
        className: "mb-4"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Nav"], {
        tabs: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        active: this.state.activeTab[0] === '1',
        onClick: function onClick() {
          _this2.toggle(0, '1');
        }
      }, "Home")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        active: this.state.activeTab[0] === '2',
        onClick: function onClick() {
          _this2.toggle(0, '2');
        }
      }, "Profile")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        active: this.state.activeTab[0] === '3',
        onClick: function onClick() {
          _this2.toggle(0, '3');
        }
      }, "Messages"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["TabContent"], {
        activeTab: this.state.activeTab[0]
      }, this.tabPane())), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        md: "6",
        className: "mb-4"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Nav"], {
        tabs: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        active: this.state.activeTab[1] === '1',
        onClick: function onClick() {
          _this2.toggle(1, '1');
        }
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-calculator"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        active: this.state.activeTab[1] === '2',
        onClick: function onClick() {
          _this2.toggle(1, '2');
        }
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-basket-loaded"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        active: this.state.activeTab[1] === '3',
        onClick: function onClick() {
          _this2.toggle(1, '3');
        }
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-pie-chart"
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["TabContent"], {
        activeTab: this.state.activeTab[1]
      }, this.tabPane())), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        md: "6",
        className: "mb-4"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Nav"], {
        tabs: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        active: this.state.activeTab[2] === '1',
        onClick: function onClick() {
          _this2.toggle(2, '1');
        }
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-calculator"
      }), " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: this.state.activeTab[2] === '1' ? '' : 'd-none'
      }, " Calculator"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        active: this.state.activeTab[2] === '2',
        onClick: function onClick() {
          _this2.toggle(2, '2');
        }
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-basket-loaded"
      }), " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: this.state.activeTab[2] === '2' ? '' : 'd-none'
      }, " Shopping cart"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        className: classnames__WEBPACK_IMPORTED_MODULE_2___default()({
          active: this.state.activeTab[2] === '3'
        }),
        onClick: function onClick() {
          _this2.toggle(2, '3');
        }
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-pie-chart"
      }), " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: this.state.activeTab[2] === '3' ? '' : 'd-none'
      }, " Charts")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["TabContent"], {
        activeTab: this.state.activeTab[2]
      }, this.tabPane())), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        md: "6",
        className: "mb-4"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Nav"], {
        tabs: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        active: this.state.activeTab[3] === '1',
        onClick: function onClick() {
          _this2.toggle(3, '1');
        }
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-calculator"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: this.state.activeTab[3] === '1' ? '' : 'd-none'
      }, " Calc"), "\xA0", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "success"
      }, "New"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        active: this.state.activeTab[3] === '2',
        onClick: function onClick() {
          _this2.toggle(3, '2');
        }
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-basket-loaded"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: this.state.activeTab[3] === '2' ? '' : 'd-none'
      }, " Cart"), "\xA0", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        pill: true,
        color: "danger"
      }, "29"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavItem"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["NavLink"], {
        active: this.state.activeTab[3] === '3',
        onClick: function onClick() {
          _this2.toggle(3, '3');
        }
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-pie-chart"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: this.state.activeTab[3] === '3' ? '' : 'd-none'
      }, " Charts")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["TabContent"], {
        activeTab: this.state.activeTab[3]
      }, this.tabPane()))));
    }
  }]);

  return Tabs;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Tabs);

/***/ }),

/***/ "./resources/js/views/Base/Tooltips/Tooltips.js":
/*!******************************************************!*\
  !*** ./resources/js/views/Base/Tooltips/Tooltips.js ***!
  \******************************************************/
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

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }




var TooltipItem =
/*#__PURE__*/
function (_React$Component) {
  _inherits(TooltipItem, _React$Component);

  function TooltipItem(props) {
    var _this;

    _classCallCheck(this, TooltipItem);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(TooltipItem).call(this, props));
    _this.toggle = _this.toggle.bind(_assertThisInitialized(_this));
    _this.state = {
      tooltipOpen: false
    };
    return _this;
  }

  _createClass(TooltipItem, [{
    key: "toggle",
    value: function toggle() {
      this.setState({
        tooltipOpen: !this.state.tooltipOpen
      });
    }
  }, {
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], {
        className: "mr-1",
        color: "secondary",
        id: 'Tooltip-' + this.props.id
      }, this.props.item.text), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Tooltip"], {
        placement: this.props.item.placement,
        isOpen: this.state.tooltipOpen,
        target: 'Tooltip-' + this.props.id,
        toggle: this.toggle
      }, "Tooltip Content!"));
    }
  }]);

  return TooltipItem;
}(react__WEBPACK_IMPORTED_MODULE_0___default.a.Component);

var Tooltips =
/*#__PURE__*/
function (_Component) {
  _inherits(Tooltips, _Component);

  function Tooltips(props) {
    var _this2;

    _classCallCheck(this, Tooltips);

    _this2 = _possibleConstructorReturn(this, _getPrototypeOf(Tooltips).call(this, props));
    _this2.toggle = _this2.toggle.bind(_assertThisInitialized(_this2));
    _this2.state = {
      tooltipOpen: [false, false],
      tooltips: [{
        placement: 'top',
        text: 'Top'
      }, {
        placement: 'bottom',
        text: 'Bottom'
      }, {
        placement: 'left',
        text: 'Left'
      }, {
        placement: 'right',
        text: 'Right'
      }]
    };
    return _this2;
  }

  _createClass(Tooltips, [{
    key: "toggle",
    value: function toggle(i) {
      var newArray = this.state.tooltipOpen.map(function (element, index) {
        return index === i ? !element : false;
      });
      this.setState({
        tooltipOpen: newArray
      });
    }
  }, {
    key: "render",
    value: function render() {
      var _this3 = this;

      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Tooltips"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "https://reactstrap.github.io/components/tooltips/",
        rel: "noreferrer noopener",
        target: "_blank",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", null, "Somewhere in here is a ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#",
        id: "TooltipExample"
      }, "tooltip"), "."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Tooltip"], {
        placement: "right",
        isOpen: this.state.tooltipOpen[0],
        target: "TooltipExample",
        toggle: function toggle() {
          _this3.toggle(0);
        }
      }, "Hello world!"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Tooltip"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, " disable autohide")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", null, "Sometimes you need to allow users to select text within a ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#",
        id: "DisabledAutoHideExample"
      }, "tooltip"), "."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Tooltip"], {
        placement: "top",
        isOpen: this.state.tooltipOpen[1],
        autohide: false,
        target: "DisabledAutoHideExample",
        toggle: function toggle() {
          _this3.toggle(1);
        }
      }, "Try to select this text!"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Tooltip"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, " list")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, this.state.tooltips.map(function (tooltip, i) {
        return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(TooltipItem, {
          key: i,
          item: tooltip,
          id: i
        });
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Tooltip"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, " uncontrolled")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", null, "Somewhere in here is a ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#",
        id: "UncontrolledTooltipExample"
      }, "tooltip"), "."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["UncontrolledTooltip"], {
        placement: "right",
        target: "UncontrolledTooltipExample"
      }, "Hello world!"))));
    }
  }]);

  return Tooltips;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Tooltips);

/***/ }),

/***/ "./resources/js/views/Base/index.js":
/*!******************************************!*\
  !*** ./resources/js/views/Base/index.js ***!
  \******************************************/
/*! exports provided: Breadcrumbs, Cards, Carousels, Collapses, Dropdowns, Forms, Jumbotrons, ListGroups, Navbars, Navs, Popovers, ProgressBar, Switches, Tables, Tabs, Tooltips, Paginations */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Breadcrumbs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Breadcrumbs */ "./resources/js/views/Base/Breadcrumbs/Breadcrumbs.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Breadcrumbs", function() { return _Breadcrumbs__WEBPACK_IMPORTED_MODULE_0__["default"]; });

/* harmony import */ var _Cards__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Cards */ "./resources/js/views/Base/Cards/Cards.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Cards", function() { return _Cards__WEBPACK_IMPORTED_MODULE_1__["default"]; });

/* harmony import */ var _Carousels__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Carousels */ "./resources/js/views/Base/Carousels/Carousels.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Carousels", function() { return _Carousels__WEBPACK_IMPORTED_MODULE_2__["default"]; });

/* harmony import */ var _Collapses__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./Collapses */ "./resources/js/views/Base/Collapses/Collapses.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Collapses", function() { return _Collapses__WEBPACK_IMPORTED_MODULE_3__["default"]; });

/* harmony import */ var _Dropdowns__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./Dropdowns */ "./resources/js/views/Base/Dropdowns/Dropdowns.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Dropdowns", function() { return _Dropdowns__WEBPACK_IMPORTED_MODULE_4__["default"]; });

/* harmony import */ var _Forms__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./Forms */ "./resources/js/views/Base/Forms/Forms.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Forms", function() { return _Forms__WEBPACK_IMPORTED_MODULE_5__["default"]; });

/* harmony import */ var _Jumbotrons__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./Jumbotrons */ "./resources/js/views/Base/Jumbotrons/Jumbotrons.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Jumbotrons", function() { return _Jumbotrons__WEBPACK_IMPORTED_MODULE_6__["default"]; });

/* harmony import */ var _ListGroups__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./ListGroups */ "./resources/js/views/Base/ListGroups/ListGroups.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "ListGroups", function() { return _ListGroups__WEBPACK_IMPORTED_MODULE_7__["default"]; });

/* harmony import */ var _Navbars__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./Navbars */ "./resources/js/views/Base/Navbars/Navbars.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Navbars", function() { return _Navbars__WEBPACK_IMPORTED_MODULE_8__["default"]; });

/* harmony import */ var _Navs__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./Navs */ "./resources/js/views/Base/Navs/Navs.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Navs", function() { return _Navs__WEBPACK_IMPORTED_MODULE_9__["default"]; });

/* harmony import */ var _Popovers__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./Popovers */ "./resources/js/views/Base/Popovers/Popovers.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Popovers", function() { return _Popovers__WEBPACK_IMPORTED_MODULE_10__["default"]; });

/* harmony import */ var _Paginations__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./Paginations */ "./resources/js/views/Base/Paginations/Pagnations.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Paginations", function() { return _Paginations__WEBPACK_IMPORTED_MODULE_11__["default"]; });

/* harmony import */ var _ProgressBar__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./ProgressBar */ "./resources/js/views/Base/ProgressBar/ProgressBar.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "ProgressBar", function() { return _ProgressBar__WEBPACK_IMPORTED_MODULE_12__["default"]; });

/* harmony import */ var _Switches__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./Switches */ "./resources/js/views/Base/Switches/Switches.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Switches", function() { return _Switches__WEBPACK_IMPORTED_MODULE_13__["default"]; });

/* harmony import */ var _Tables__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./Tables */ "./resources/js/views/Base/Tables/Tables.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Tables", function() { return _Tables__WEBPACK_IMPORTED_MODULE_14__["default"]; });

/* harmony import */ var _Tabs__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./Tabs */ "./resources/js/views/Base/Tabs/Tabs.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Tabs", function() { return _Tabs__WEBPACK_IMPORTED_MODULE_15__["default"]; });

/* harmony import */ var _Tooltips__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./Tooltips */ "./resources/js/views/Base/Tooltips/Tooltips.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Tooltips", function() { return _Tooltips__WEBPACK_IMPORTED_MODULE_16__["default"]; });




















/***/ }),

/***/ "./resources/js/views/Buttons/ButtonGroups/ButtonGroups.js":
/*!*****************************************************************!*\
  !*** ./resources/js/views/Buttons/ButtonGroups/ButtonGroups.js ***!
  \*****************************************************************/
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

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }




var ButtonGroups =
/*#__PURE__*/
function (_Component) {
  _inherits(ButtonGroups, _Component);

  function ButtonGroups(props) {
    var _this;

    _classCallCheck(this, ButtonGroups);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(ButtonGroups).call(this, props));
    _this.toggle = _this.toggle.bind(_assertThisInitialized(_this));
    _this.state = {
      dropdownOpen: new Array(2).fill(false)
    };
    return _this;
  }

  _createClass(ButtonGroups, [{
    key: "toggle",
    value: function toggle(i) {
      var newArray = this.state.dropdownOpen.map(function (element, index) {
        return index === i ? !element : false;
      });
      this.setState({
        dropdownOpen: newArray
      });
    }
  }, {
    key: "render",
    value: function render() {
      var _this2 = this;

      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Button Group"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "https://reactstrap.github.io/components/button-group/",
        rel: "noreferrer noopener",
        target: "_blank",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "Left"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "Middle"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "Right")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Vertical variation")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonGroup"], {
        vertical: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "1"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "2"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonDropdown"], {
        isOpen: this.state.dropdownOpen[0],
        toggle: function toggle() {
          _this2.toggle(0);
        }
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownToggle"], {
        caret: true
      }, "Dropdown"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownMenu"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], null, "Dropdown Link"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], null, "Dropdown Link")))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Button Toolbar")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonToolbar"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonGroup"], {
        className: "mr-2"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "1"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "2"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "3"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "4")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonGroup"], {
        className: "mr-2"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "5"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "6"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "7")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "8")))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        md: 6
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Sizing")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonGroup"], {
        size: "lg"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "Left"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "Middle"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "Right")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("hr", null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "Left"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "Middle"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "Right")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("hr", null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonGroup"], {
        size: "sm"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "Left"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "Middle"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "Right")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Nesting")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "1"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "2"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonDropdown"], {
        isOpen: this.state.dropdownOpen[1],
        toggle: function toggle() {
          _this2.toggle(1);
        }
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownToggle"], {
        caret: true
      }, "Dropdown"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownMenu"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], null, "Dropdown Link"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["DropdownItem"], null, "Dropdown Link")))))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Button Toolbar"), " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, "with input groups")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonToolbar"], {
        className: "mb-3"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonGroup"], {
        className: "mr-2"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "1"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "2"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "3"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "4")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupAddon"], {
        addonType: "prepend"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupText"], null, "@")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Input"], {
        placeholder: "Input group example"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonToolbar"], {
        className: "justify-content-between"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["ButtonGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "1"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "2"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "3"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], null, "4")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupAddon"], {
        addonType: "prepend"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupText"], null, "@")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Input"], {
        placeholder: "Input group example"
      }))))))));
    }
  }]);

  return ButtonGroups;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (ButtonGroups);

/***/ }),

/***/ "./resources/js/views/Buttons/index.js":
/*!*********************************************!*\
  !*** ./resources/js/views/Buttons/index.js ***!
  \*********************************************/
/*! exports provided: ButtonDropdowns, ButtonGroups, Buttons, BrandButtons */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ButtonDropdowns__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ButtonDropdowns */ "./resources/js/views/Buttons/ButtonDropdowns/ButtonDropdowns.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "ButtonDropdowns", function() { return _ButtonDropdowns__WEBPACK_IMPORTED_MODULE_0__["default"]; });

/* harmony import */ var _ButtonGroups__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ButtonGroups */ "./resources/js/views/Buttons/ButtonGroups/ButtonGroups.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "ButtonGroups", function() { return _ButtonGroups__WEBPACK_IMPORTED_MODULE_1__["default"]; });

/* harmony import */ var _Buttons__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Buttons */ "./resources/js/views/Buttons/Buttons/Buttons.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Buttons", function() { return _Buttons__WEBPACK_IMPORTED_MODULE_2__["default"]; });

/* harmony import */ var _BrandButtons__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./BrandButtons */ "./resources/js/views/Buttons/BrandButtons/BrandButtons.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "BrandButtons", function() { return _BrandButtons__WEBPACK_IMPORTED_MODULE_3__["default"]; });







/***/ }),

/***/ "./resources/js/views/Charts/Charts.js":
/*!*********************************************!*\
  !*** ./resources/js/views/Charts/Charts.js ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_chartjs_2__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-chartjs-2 */ "./node_modules/react-chartjs-2/es/index.js");
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
/* harmony import */ var _coreui_coreui_plugin_chartjs_custom_tooltips__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @coreui/coreui-plugin-chartjs-custom-tooltips */ "./node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/umd/custom-tooltips.js");
/* harmony import */ var _coreui_coreui_plugin_chartjs_custom_tooltips__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_coreui_coreui_plugin_chartjs_custom_tooltips__WEBPACK_IMPORTED_MODULE_3__);
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }





var line = {
  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
  datasets: [{
    label: 'My First dataset',
    fill: false,
    lineTension: 0.1,
    backgroundColor: 'rgba(75,192,192,0.4)',
    borderColor: 'rgba(75,192,192,1)',
    borderCapStyle: 'butt',
    borderDash: [],
    borderDashOffset: 0.0,
    borderJoinStyle: 'miter',
    pointBorderColor: 'rgba(75,192,192,1)',
    pointBackgroundColor: '#fff',
    pointBorderWidth: 1,
    pointHoverRadius: 5,
    pointHoverBackgroundColor: 'rgba(75,192,192,1)',
    pointHoverBorderColor: 'rgba(220,220,220,1)',
    pointHoverBorderWidth: 2,
    pointRadius: 1,
    pointHitRadius: 10,
    data: [65, 59, 80, 81, 56, 55, 40]
  }]
};
var bar = {
  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
  datasets: [{
    label: 'My First dataset',
    backgroundColor: 'rgba(255,99,132,0.2)',
    borderColor: 'rgba(255,99,132,1)',
    borderWidth: 1,
    hoverBackgroundColor: 'rgba(255,99,132,0.4)',
    hoverBorderColor: 'rgba(255,99,132,1)',
    data: [65, 59, 80, 81, 56, 55, 40]
  }]
};
var doughnut = {
  labels: ['Red', 'Green', 'Yellow'],
  datasets: [{
    data: [300, 50, 100],
    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
    hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
  }]
};
var radar = {
  labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
  datasets: [{
    label: 'My First dataset',
    backgroundColor: 'rgba(179,181,198,0.2)',
    borderColor: 'rgba(179,181,198,1)',
    pointBackgroundColor: 'rgba(179,181,198,1)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgba(179,181,198,1)',
    data: [65, 59, 90, 81, 56, 55, 40]
  }, {
    label: 'My Second dataset',
    backgroundColor: 'rgba(255,99,132,0.2)',
    borderColor: 'rgba(255,99,132,1)',
    pointBackgroundColor: 'rgba(255,99,132,1)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgba(255,99,132,1)',
    data: [28, 48, 40, 19, 96, 27, 100]
  }]
};
var pie = {
  labels: ['Red', 'Green', 'Yellow'],
  datasets: [{
    data: [300, 50, 100],
    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
    hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
  }]
};
var polar = {
  datasets: [{
    data: [11, 16, 7, 3, 14],
    backgroundColor: ['#FF6384', '#4BC0C0', '#FFCE56', '#E7E9ED', '#36A2EB'],
    label: 'My dataset' // for legend

  }],
  labels: ['Red', 'Green', 'Yellow', 'Grey', 'Blue']
};
var options = {
  tooltips: {
    enabled: false,
    custom: _coreui_coreui_plugin_chartjs_custom_tooltips__WEBPACK_IMPORTED_MODULE_3__["CustomTooltips"]
  },
  maintainAspectRatio: false
};

var Charts =
/*#__PURE__*/
function (_Component) {
  _inherits(Charts, _Component);

  function Charts() {
    _classCallCheck(this, Charts);

    return _possibleConstructorReturn(this, _getPrototypeOf(Charts).apply(this, arguments));
  }

  _createClass(Charts, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardColumns"], {
        className: "cols-2"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardHeader"], null, "Line Chart", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "http://www.chartjs.org",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "chart-wrapper"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react_chartjs_2__WEBPACK_IMPORTED_MODULE_1__["Line"], {
        data: line,
        options: options
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardHeader"], null, "Bar Chart", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "http://www.chartjs.org",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "chart-wrapper"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react_chartjs_2__WEBPACK_IMPORTED_MODULE_1__["Bar"], {
        data: bar,
        options: options
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardHeader"], null, "Doughnut Chart", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "http://www.chartjs.org",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "chart-wrapper"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react_chartjs_2__WEBPACK_IMPORTED_MODULE_1__["Doughnut"], {
        data: doughnut
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardHeader"], null, "Radar Chart", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "http://www.chartjs.org",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "chart-wrapper"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react_chartjs_2__WEBPACK_IMPORTED_MODULE_1__["Radar"], {
        data: radar
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardHeader"], null, "Pie Chart", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "http://www.chartjs.org",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "chart-wrapper"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react_chartjs_2__WEBPACK_IMPORTED_MODULE_1__["Pie"], {
        data: pie
      })))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardHeader"], null, "Polar Area Chart", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "http://www.chartjs.org",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "chart-wrapper"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react_chartjs_2__WEBPACK_IMPORTED_MODULE_1__["Polar"], {
        data: polar,
        options: options
      }))))));
    }
  }]);

  return Charts;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Charts);

/***/ }),

/***/ "./resources/js/views/Icons/index.js":
/*!*******************************************!*\
  !*** ./resources/js/views/Icons/index.js ***!
  \*******************************************/
/*! exports provided: CoreUIIcons, Flags, FontAwesome, SimpleLineIcons */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _CoreUIIcons__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./CoreUIIcons */ "./resources/js/views/Icons/CoreUIIcons/CoreUIIcons.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "CoreUIIcons", function() { return _CoreUIIcons__WEBPACK_IMPORTED_MODULE_0__["default"]; });

/* harmony import */ var _Flags__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Flags */ "./resources/js/views/Icons/Flags/Flags.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Flags", function() { return _Flags__WEBPACK_IMPORTED_MODULE_1__["default"]; });

/* harmony import */ var _FontAwesome__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./FontAwesome */ "./resources/js/views/Icons/FontAwesome/FontAwesome.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "FontAwesome", function() { return _FontAwesome__WEBPACK_IMPORTED_MODULE_2__["default"]; });

/* harmony import */ var _SimpleLineIcons__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./SimpleLineIcons */ "./resources/js/views/Icons/SimpleLineIcons/SimpleLineIcons.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "SimpleLineIcons", function() { return _SimpleLineIcons__WEBPACK_IMPORTED_MODULE_3__["default"]; });







/***/ }),

/***/ "./resources/js/views/Image/Image.css":
/*!********************************************!*\
  !*** ./resources/js/views/Image/Image.css ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../node_modules/css-loader??ref--6-1!../../../../node_modules/postcss-loader/src??ref--6-2!./Image.css */ "./node_modules/css-loader/index.js?!./node_modules/postcss-loader/src/index.js?!./resources/js/views/Image/Image.css");

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

/***/ "./resources/js/views/Image/Image.js":
/*!*******************************************!*\
  !*** ./resources/js/views/Image/Image.js ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _Image_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Image.css */ "./resources/js/views/Image/Image.css");
/* harmony import */ var _Image_css__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_Image_css__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var ___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../ */ "./resources/js/views/index.js");
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
        src: "assets/images/averti1.jpg",
        alt: "averti"
      });
    }
  }]);

  return Img;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Img);

/***/ }),

/***/ "./resources/js/views/Notifications/Alerts/Alerts.js":
/*!***********************************************************!*\
  !*** ./resources/js/views/Notifications/Alerts/Alerts.js ***!
  \***********************************************************/
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

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }




var Alerts =
/*#__PURE__*/
function (_Component) {
  _inherits(Alerts, _Component);

  function Alerts(props) {
    var _this;

    _classCallCheck(this, Alerts);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Alerts).call(this, props));
    _this.state = {
      visible: true
    };
    _this.onDismiss = _this.onDismiss.bind(_assertThisInitialized(_this));
    return _this;
  }

  _createClass(Alerts, [{
    key: "onDismiss",
    value: function onDismiss() {
      this.setState({
        visible: false
      });
    }
  }, {
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Alerts"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "https://reactstrap.github.io/components/alerts/",
        rel: "noreferrer noopener",
        target: "_blank",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "primary"
      }, "This is a primary alert \u2014 check it out!"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "secondary"
      }, "This is a secondary alert \u2014 check it out!"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "success"
      }, "This is a success alert \u2014 check it out!"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "danger"
      }, "This is a danger alert \u2014 check it out!"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "warning"
      }, "This is a warning alert \u2014 check it out!"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "info"
      }, "This is a info alert \u2014 check it out!"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "light"
      }, "This is a light alert \u2014 check it out!"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "dark"
      }, "This is a dark alert \u2014 check it out!")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Alerts"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, " use ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("code", null, ".alert-link"), " to provide links")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "primary"
      }, "This is a primary alert with ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#",
        className: "alert-link"
      }, "an example link"), ". Give it a click if you like."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "secondary"
      }, "This is a secondary alert with ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#",
        className: "alert-link"
      }, "an example link"), ". Give it a click if you like."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "success"
      }, "This is a success alert with ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#",
        className: "alert-link"
      }, "an example link"), ". Give it a click if you like."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "danger"
      }, "This is a danger alert with ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#",
        className: "alert-link"
      }, "an example link"), ". Give it a click if you like."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "warning"
      }, "This is a warning alert with ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#",
        className: "alert-link"
      }, "an example link"), ". Give it a click if you like."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "info"
      }, "This is a info alert with ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#",
        className: "alert-link"
      }, "an example link"), ". Give it a click if you like."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "light"
      }, "This is a light alert with ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#",
        className: "alert-link"
      }, "an example link"), ". Give it a click if you like."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "dark"
      }, "This is a dark alert with ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "#",
        className: "alert-link"
      }, "an example link"), ". Give it a click if you like."))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Alerts"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, "additional content")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "success"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h4", {
        className: "alert-heading"
      }, "Well done!"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", null, "Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("hr", null), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "mb-0"
      }, "Whenever you need to, be sure to use margin utilities to keep things nice and tidy."))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Alerts"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, "dismissing")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Alert"], {
        color: "info",
        isOpen: this.state.visible,
        toggle: this.onDismiss
      }, "I am an alert and I can be dismissed!"))))));
    }
  }]);

  return Alerts;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Alerts);

/***/ }),

/***/ "./resources/js/views/Notifications/Badges/Badges.js":
/*!***********************************************************!*\
  !*** ./resources/js/views/Notifications/Badges/Badges.js ***!
  \***********************************************************/
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




var Badges =
/*#__PURE__*/
function (_Component) {
  _inherits(Badges, _Component);

  function Badges() {
    _classCallCheck(this, Badges);

    return _possibleConstructorReturn(this, _getPrototypeOf(Badges).apply(this, arguments));
  }

  _createClass(Badges, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Badges"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header-actions"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("a", {
        href: "https://reactstrap.github.io/components/badge/",
        rel: "noreferrer noopener",
        target: "_blank",
        className: "card-header-action"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", {
        className: "text-muted"
      }, "docs")))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h1", null, "Heading ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "secondary"
      }, "New")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h2", null, "Heading ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "secondary"
      }, "New")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h3", null, "Heading ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "secondary"
      }, "New")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h4", null, "Heading ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "secondary"
      }, "New")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h5", null, "Heading ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "secondary"
      }, "New")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Heading ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "secondary"
      }, "New"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardFooter"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], {
        color: "primary",
        outline: true
      }, "Notifications ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        color: "secondary",
        pill: true,
        style: {
          position: 'static'
        }
      }, "9"))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Badges"), " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, "contextual variations")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "primary"
      }, "Primary"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "secondary"
      }, "Secondary"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "success"
      }, "Success"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "danger"
      }, "Danger"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "warning"
      }, "Warning"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "info"
      }, "Info"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "light"
      }, "Light"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "dark"
      }, "Dark"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Badges"), " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, "pill badges")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "primary",
        pill: true
      }, "Primary"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "secondary",
        pill: true
      }, "Secondary"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "success",
        pill: true
      }, "Success"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "danger",
        pill: true
      }, "Danger"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "warning",
        pill: true
      }, "Warning"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "info",
        pill: true
      }, "Info"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "light",
        pill: true
      }, "Light"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        color: "dark",
        pill: true
      }, "Dark"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardHeader"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-align-justify"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("strong", null, "Badges"), " ", react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("small", null, "links")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        href: "#",
        color: "primary"
      }, "Primary"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        href: "#",
        color: "secondary"
      }, "Secondary"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        href: "#",
        color: "success"
      }, "Success"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        href: "#",
        color: "danger"
      }, "Danger"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        href: "#",
        color: "warning"
      }, "Warning"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        href: "#",
        color: "info"
      }, "Info"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        href: "#",
        color: "light"
      }, "Light"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Badge"], {
        className: "mr-1",
        href: "#",
        color: "dark",
        pill: true
      }, "Dark"))))));
    }
  }]);

  return Badges;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Badges);

/***/ }),

/***/ "./resources/js/views/Notifications/index.js":
/*!***************************************************!*\
  !*** ./resources/js/views/Notifications/index.js ***!
  \***************************************************/
/*! exports provided: Alerts, Badges, Modals */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Alerts__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Alerts */ "./resources/js/views/Notifications/Alerts/Alerts.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Alerts", function() { return _Alerts__WEBPACK_IMPORTED_MODULE_0__["default"]; });

/* harmony import */ var _Badges__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Badges */ "./resources/js/views/Notifications/Badges/Badges.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Badges", function() { return _Badges__WEBPACK_IMPORTED_MODULE_1__["default"]; });

/* harmony import */ var _Modals__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Modals */ "./resources/js/views/Notifications/Modals/Modals.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Modals", function() { return _Modals__WEBPACK_IMPORTED_MODULE_2__["default"]; });






/***/ }),

/***/ "./resources/js/views/Pages/Login/Login.js":
/*!*************************************************!*\
  !*** ./resources/js/views/Pages/Login/Login.js ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_router_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-router-dom */ "./node_modules/react-router-dom/esm/react-router-dom.js");
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }





var Login =
/*#__PURE__*/
function (_Component) {
  _inherits(Login, _Component);

  function Login() {
    _classCallCheck(this, Login);

    return _possibleConstructorReturn(this, _getPrototypeOf(Login).apply(this, arguments));
  }

  _createClass(Login, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "app flex-row align-items-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Container"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Row"], {
        className: "justify-content-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        md: "5"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardGroup"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Card"], {
        className: "p-4"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["CardBody"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Form"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h1", null, "Login"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "text-muted"
      }, "Sign In to your account"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["InputGroup"], {
        className: "mb-3"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["InputGroupAddon"], {
        addonType: "prepend"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["InputGroupText"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-user"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Input"], {
        type: "text",
        value: "test",
        placeholder: "Username",
        autoComplete: "username"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["InputGroup"], {
        className: "mb-4"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["InputGroupAddon"], {
        addonType: "prepend"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["InputGroupText"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-lock"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Input"], {
        type: "password",
        placeholder: "Password",
        autoComplete: "current-password"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        xs: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Button"], {
        color: "primary",
        className: "px-4"
      }, "Login")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Col"], {
        xs: "6",
        className: "text-right"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Button"], {
        color: "link",
        className: "px-0"
      }, "Forgot password?")))))))))));
    }
  }]);

  return Login;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Login);

/***/ }),

/***/ "./resources/js/views/Pages/Page404/Page404.js":
/*!*****************************************************!*\
  !*** ./resources/js/views/Pages/Page404/Page404.js ***!
  \*****************************************************/
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




var Page404 =
/*#__PURE__*/
function (_Component) {
  _inherits(Page404, _Component);

  function Page404() {
    _classCallCheck(this, Page404);

    return _possibleConstructorReturn(this, _getPrototypeOf(Page404).apply(this, arguments));
  }

  _createClass(Page404, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "app flex-row align-items-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Container"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], {
        className: "justify-content-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "clearfix"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h1", {
        className: "float-left display-3 mr-4"
      }, "404"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h4", {
        className: "pt-3"
      }, "Oops! You're lost."), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "text-muted float-left"
      }, "The page you are looking for was not found.")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroup"], {
        className: "input-prepend"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupAddon"], {
        addonType: "prepend"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupText"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-search"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Input"], {
        size: "16",
        type: "text",
        placeholder: "What are you looking for?"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupAddon"], {
        addonType: "append"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], {
        color: "info"
      }, "Search")))))));
    }
  }]);

  return Page404;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Page404);

/***/ }),

/***/ "./resources/js/views/Pages/Page500/Page500.js":
/*!*****************************************************!*\
  !*** ./resources/js/views/Pages/Page500/Page500.js ***!
  \*****************************************************/
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




var Page500 =
/*#__PURE__*/
function (_Component) {
  _inherits(Page500, _Component);

  function Page500() {
    _classCallCheck(this, Page500);

    return _possibleConstructorReturn(this, _getPrototypeOf(Page500).apply(this, arguments));
  }

  _createClass(Page500, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "app flex-row align-items-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Container"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], {
        className: "justify-content-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        md: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", {
        className: "clearfix"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h1", {
        className: "float-left display-3 mr-4"
      }, "500"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h4", {
        className: "pt-3"
      }, "Houston, we have a problem!"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "text-muted float-left"
      }, "The page you are looking for is temporarily unavailable.")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroup"], {
        className: "input-prepend"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupAddon"], {
        addonType: "prepend"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupText"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "fa fa-search"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Input"], {
        size: "16",
        type: "text",
        placeholder: "What are you looking for?"
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupAddon"], {
        addonType: "append"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], {
        color: "info"
      }, "Search")))))));
    }
  }]);

  return Page500;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Page500);

/***/ }),

/***/ "./resources/js/views/Pages/Register/Register.js":
/*!*******************************************************!*\
  !*** ./resources/js/views/Pages/Register/Register.js ***!
  \*******************************************************/
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




var Register =
/*#__PURE__*/
function (_Component) {
  _inherits(Register, _Component);

  function Register() {
    _classCallCheck(this, Register);

    return _possibleConstructorReturn(this, _getPrototypeOf(Register).apply(this, arguments));
  }

  _createClass(Register, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "app flex-row align-items-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Container"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], {
        className: "justify-content-center"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        md: "9",
        lg: "7",
        xl: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Card"], {
        className: "mx-4"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardBody"], {
        className: "p-4"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Form"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h1", null, "Register"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("p", {
        className: "text-muted"
      }, "Create your account"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroup"], {
        className: "mb-3"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupAddon"], {
        addonType: "prepend"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupText"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-user"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Input"], {
        type: "text",
        placeholder: "Username",
        autoComplete: "username"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroup"], {
        className: "mb-3"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupAddon"], {
        addonType: "prepend"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupText"], null, "@")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Input"], {
        type: "text",
        placeholder: "Email",
        autoComplete: "email"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroup"], {
        className: "mb-3"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupAddon"], {
        addonType: "prepend"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupText"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-lock"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Input"], {
        type: "password",
        placeholder: "Password",
        autoComplete: "new-password"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroup"], {
        className: "mb-4"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupAddon"], {
        addonType: "prepend"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["InputGroupText"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-lock"
      }))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Input"], {
        type: "password",
        placeholder: "Repeat password",
        autoComplete: "new-password"
      })), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], {
        color: "success",
        block: true
      }, "Create Account"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["CardFooter"], {
        className: "p-4"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], {
        className: "btn-facebook mb-1",
        block: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", null, "facebook"))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Col"], {
        xs: "12",
        sm: "6"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_1__["Button"], {
        className: "btn-twitter mb-1",
        block: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("span", null, "twitter"))))))))));
    }
  }]);

  return Register;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Register);

/***/ }),

/***/ "./resources/js/views/Pages/index.js":
/*!*******************************************!*\
  !*** ./resources/js/views/Pages/index.js ***!
  \*******************************************/
/*! exports provided: Login, Page404, Page500, Register */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Login__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Login */ "./resources/js/views/Pages/Login/Login.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Login", function() { return _Login__WEBPACK_IMPORTED_MODULE_0__["default"]; });

/* harmony import */ var _Page404__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Page404 */ "./resources/js/views/Pages/Page404/Page404.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Page404", function() { return _Page404__WEBPACK_IMPORTED_MODULE_1__["default"]; });

/* harmony import */ var _Page500__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Page500 */ "./resources/js/views/Pages/Page500/Page500.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Page500", function() { return _Page500__WEBPACK_IMPORTED_MODULE_2__["default"]; });

/* harmony import */ var _Register__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./Register */ "./resources/js/views/Pages/Register/Register.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Register", function() { return _Register__WEBPACK_IMPORTED_MODULE_3__["default"]; });







/***/ }),

/***/ "./resources/js/views/Theme/Colors/Colors.js":
/*!***************************************************!*\
  !*** ./resources/js/views/Theme/Colors/Colors.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom */ "./node_modules/react-dom/index.js");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_dom__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! classnames */ "./node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
/* harmony import */ var _coreui_coreui_dist_js_coreui_utilities__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @coreui/coreui/dist/js/coreui-utilities */ "./node_modules/@coreui/coreui/dist/js/coreui-utilities.js");
/* harmony import */ var _coreui_coreui_dist_js_coreui_utilities__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_coreui_coreui_dist_js_coreui_utilities__WEBPACK_IMPORTED_MODULE_4__);
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }







var ThemeView =
/*#__PURE__*/
function (_Component) {
  _inherits(ThemeView, _Component);

  function ThemeView(props) {
    var _this;

    _classCallCheck(this, ThemeView);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(ThemeView).call(this, props));
    _this.state = {
      bgColor: 'rgb(255, 255, 255)'
    };
    return _this;
  }

  _createClass(ThemeView, [{
    key: "componentDidMount",
    value: function componentDidMount() {
      var elem = react_dom__WEBPACK_IMPORTED_MODULE_1___default.a.findDOMNode(this).parentNode.firstChild;
      var color = window.getComputedStyle(elem).getPropertyValue('background-color');
      this.setState({
        bgColor: color || this.state.bgColor
      });
    }
  }, {
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("table", {
        className: "w-100"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tbody", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tr", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", {
        className: "text-muted"
      }, "HEX:"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", {
        className: "font-weight-bold"
      }, Object(_coreui_coreui_dist_js_coreui_utilities__WEBPACK_IMPORTED_MODULE_4__["rgbToHex"])(this.state.bgColor))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("tr", null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", {
        className: "text-muted"
      }, "RGB:"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("td", {
        className: "font-weight-bold"
      }, this.state.bgColor))));
    }
  }]);

  return ThemeView;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

var ThemeColor =
/*#__PURE__*/
function (_Component2) {
  _inherits(ThemeColor, _Component2);

  function ThemeColor() {
    _classCallCheck(this, ThemeColor);

    return _possibleConstructorReturn(this, _getPrototypeOf(ThemeColor).apply(this, arguments));
  }

  _createClass(ThemeColor, [{
    key: "render",
    // constructor(props) {
    //   super(props);
    // }
    value: function render() {
      // const { className, children, ...attributes } = this.props
      var _this$props = this.props,
          className = _this$props.className,
          children = _this$props.children;
      var classes = classnames__WEBPACK_IMPORTED_MODULE_2___default()(className, 'theme-color w-75 rounded mb-3');
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Col"], {
        xl: "2",
        md: "4",
        sm: "6",
        xs: "12",
        className: "mb-4"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: classes,
        style: {
          paddingTop: '75%'
        }
      }), children, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeView, null));
    }
  }]);

  return ThemeColor;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

var Colors =
/*#__PURE__*/
function (_Component3) {
  _inherits(Colors, _Component3);

  function Colors() {
    _classCallCheck(this, Colors);

    return _possibleConstructorReturn(this, _getPrototypeOf(Colors).apply(this, arguments));
  }

  _createClass(Colors, [{
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "animated fadeIn"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-drop"
      }), " Theme colors"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-body"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-primary"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Brand Primary Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-secondary"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Brand Secondary Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-success"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Brand Success Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-danger"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Brand Danger Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-warning"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Brand Warning Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-info"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Brand Info Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-light"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Brand Light Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-dark"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Brand Dark Color"))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-drop"
      }), " Grays"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-body"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], {
        className: "mb-3"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-gray-100"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Gray 100 Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-gray-200"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Gray 200 Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-gray-300"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Gray 300 Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-gray-400"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Gray 400 Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-gray-500"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Gray 500 Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-gray-600"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Gray 600 Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-gray-700"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Gray 700 Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-gray-800"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Gray 800 Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-gray-900"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Gray 900 Color"))))), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-header"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("i", {
        className: "icon-drop"
      }), " Additional colors"), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "card-body"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_3__["Row"], null, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-blue"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Blue Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-light-blue"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Light Blue Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-indigo"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Indigo Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-purple"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Purple Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-pink"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Pink Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-red"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Red Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-orange"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Orange Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-yellow"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Yellow Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-green"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Green Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-teal"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Teal Color")), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(ThemeColor, {
        className: "bg-cyan"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("h6", null, "Cyan Color"))))));
    }
  }]);

  return Colors;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (Colors);

/***/ }),

/***/ "./resources/js/views/Theme/index.js":
/*!*******************************************!*\
  !*** ./resources/js/views/Theme/index.js ***!
  \*******************************************/
/*! exports provided: Colors, Typography */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Colors__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Colors */ "./resources/js/views/Theme/Colors/Colors.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Colors", function() { return _Colors__WEBPACK_IMPORTED_MODULE_0__["default"]; });

/* harmony import */ var _Typography__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Typography */ "./resources/js/views/Theme/Typography/Typography.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Typography", function() { return _Typography__WEBPACK_IMPORTED_MODULE_1__["default"]; });





/***/ }),

/***/ "./resources/js/views/index.js":
/*!*************************************!*\
  !*** ./resources/js/views/index.js ***!
  \*************************************/
/*! exports provided: Badges, Typography, Colors, CoreUIIcons, Page404, Page500, Register, Login, Modals, Alerts, Flags, SimpleLineIcons, FontAwesome, ButtonDropdowns, ButtonGroups, BrandButtons, Buttons, Tooltips, Tabs, Tables, Charts, Dashboard, Widgets, Jumbotrons, Switches, ProgressBar, Popovers, Navs, Navbars, ListGroups, Forms, Dropdowns, Collapses, Carousels, Cards, Breadcrumbs, Paginations */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Base__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Base */ "./resources/js/views/Base/index.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Tooltips", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Tooltips"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Tabs", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Tabs"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Tables", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Tables"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Jumbotrons", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Jumbotrons"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Switches", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Switches"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "ProgressBar", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["ProgressBar"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Popovers", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Popovers"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Navs", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Navs"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Navbars", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Navbars"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "ListGroups", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["ListGroups"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Forms", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Forms"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Dropdowns", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Dropdowns"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Collapses", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Collapses"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Carousels", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Carousels"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Cards", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Cards"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Breadcrumbs", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Breadcrumbs"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Paginations", function() { return _Base__WEBPACK_IMPORTED_MODULE_0__["Paginations"]; });

/* harmony import */ var _Buttons__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Buttons */ "./resources/js/views/Buttons/index.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "ButtonDropdowns", function() { return _Buttons__WEBPACK_IMPORTED_MODULE_1__["ButtonDropdowns"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "ButtonGroups", function() { return _Buttons__WEBPACK_IMPORTED_MODULE_1__["ButtonGroups"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "BrandButtons", function() { return _Buttons__WEBPACK_IMPORTED_MODULE_1__["BrandButtons"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Buttons", function() { return _Buttons__WEBPACK_IMPORTED_MODULE_1__["Buttons"]; });

/* harmony import */ var _Charts__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Charts */ "./resources/js/views/Charts/Charts.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Charts", function() { return _Charts__WEBPACK_IMPORTED_MODULE_2__["default"]; });

/* harmony import */ var _Dashboard__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./Dashboard */ "./resources/js/views/Dashboard/Dashboard.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Dashboard", function() { return _Dashboard__WEBPACK_IMPORTED_MODULE_3__["default"]; });

/* harmony import */ var _Icons__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./Icons */ "./resources/js/views/Icons/index.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "CoreUIIcons", function() { return _Icons__WEBPACK_IMPORTED_MODULE_4__["CoreUIIcons"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Flags", function() { return _Icons__WEBPACK_IMPORTED_MODULE_4__["Flags"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "SimpleLineIcons", function() { return _Icons__WEBPACK_IMPORTED_MODULE_4__["SimpleLineIcons"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "FontAwesome", function() { return _Icons__WEBPACK_IMPORTED_MODULE_4__["FontAwesome"]; });

/* harmony import */ var _Notifications__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./Notifications */ "./resources/js/views/Notifications/index.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Badges", function() { return _Notifications__WEBPACK_IMPORTED_MODULE_5__["Badges"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Modals", function() { return _Notifications__WEBPACK_IMPORTED_MODULE_5__["Modals"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Alerts", function() { return _Notifications__WEBPACK_IMPORTED_MODULE_5__["Alerts"]; });

/* harmony import */ var _Pages__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./Pages */ "./resources/js/views/Pages/index.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Page404", function() { return _Pages__WEBPACK_IMPORTED_MODULE_6__["Page404"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Page500", function() { return _Pages__WEBPACK_IMPORTED_MODULE_6__["Page500"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Register", function() { return _Pages__WEBPACK_IMPORTED_MODULE_6__["Register"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Login", function() { return _Pages__WEBPACK_IMPORTED_MODULE_6__["Login"]; });

/* harmony import */ var _Theme__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./Theme */ "./resources/js/views/Theme/index.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Typography", function() { return _Theme__WEBPACK_IMPORTED_MODULE_7__["Typography"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Colors", function() { return _Theme__WEBPACK_IMPORTED_MODULE_7__["Colors"]; });

/* harmony import */ var _Widgets__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./Widgets */ "./resources/js/views/Widgets/Widgets.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Widgets", function() { return _Widgets__WEBPACK_IMPORTED_MODULE_8__["default"]; });












/***/ })

}]);