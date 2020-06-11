(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[31],{

/***/ "./resources/js/_nav.js":
/*!******************************!*\
  !*** ./resources/js/_nav.js ***!
  \******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ({
  items: [{
    name: 'Dashboard',
    url: '/dashboard',
    icon: 'icon-speedometer',
    badge: {
      variant: 'info',
      text: 'NEW'
    }
  }, {
    name: 'Landing',
    url: '/landing'
  }, {
    title: true,
    name: 'Theme',
    wrapper: {
      // optional wrapper object
      element: '',
      // required valid HTML5 element tag
      attributes: {} // optional valid JS object with JS API naming ex: { className: "my-class", style: { fontFamily: "Verdana" }, id: "my-id"}

    },
    "class": '' // optional class names space delimited list for title item ex: "text-center"

  }, {
    name: 'Colors',
    url: '/theme/colors',
    icon: 'icon-drop'
  }, {
    name: 'Typography',
    url: '/theme/typography',
    icon: 'icon-pencil'
  }, {
    title: true,
    name: 'Components',
    wrapper: {
      element: '',
      attributes: {}
    }
  }, {
    name: 'Base',
    url: '/base',
    icon: 'icon-puzzle',
    children: [{
      name: 'Breadcrumbs',
      url: '/base/breadcrumbs',
      icon: 'icon-puzzle'
    }, {
      name: 'Cards',
      url: '/base/cards',
      icon: 'icon-puzzle'
    }, {
      name: 'Carousels',
      url: '/base/carousels',
      icon: 'icon-puzzle'
    }, {
      name: 'Collapses',
      url: '/base/collapses',
      icon: 'icon-puzzle'
    }, {
      name: 'Dropdowns',
      url: '/base/dropdowns',
      icon: 'icon-puzzle'
    }, {
      name: 'Forms',
      url: '/base/forms',
      icon: 'icon-puzzle'
    }, {
      name: 'Jumbotrons',
      url: '/base/jumbotrons',
      icon: 'icon-puzzle'
    }, {
      name: 'List groups',
      url: '/base/list-groups',
      icon: 'icon-puzzle'
    }, {
      name: 'Navs',
      url: '/base/navs',
      icon: 'icon-puzzle'
    }, {
      name: 'Paginations',
      url: '/base/paginations',
      icon: 'icon-puzzle'
    }, {
      name: 'Popovers',
      url: '/base/popovers',
      icon: 'icon-puzzle'
    }, {
      name: 'Progress Bar',
      url: '/base/progress-bar',
      icon: 'icon-puzzle'
    }, {
      name: 'Switches',
      url: '/base/switches',
      icon: 'icon-puzzle'
    }, {
      name: 'Tables',
      url: '/base/tables',
      icon: 'icon-puzzle'
    }, {
      name: 'Contact',
      url: '/base/contact',
      icon: 'icon-puzzle'
    }, {
      name: 'Tabs',
      url: '/base/tabs',
      icon: 'icon-puzzle'
    }, {
      name: 'Tooltips',
      url: '/base/tooltips',
      icon: 'icon-puzzle'
    }]
  }, {
    name: 'Buttons',
    url: '/buttons',
    icon: 'icon-cursor',
    children: [{
      name: 'Buttons',
      url: '/buttons/buttons',
      icon: 'icon-cursor'
    }, {
      name: 'Button dropdowns',
      url: '/buttons/button-dropdowns',
      icon: 'icon-cursor'
    }, {
      name: 'Button groups',
      url: '/buttons/button-groups',
      icon: 'icon-cursor'
    }, {
      name: 'Brand Buttons',
      url: '/buttons/brand-buttons',
      icon: 'icon-cursor'
    }]
  }, {
    name: 'Charts',
    url: '/charts',
    icon: 'icon-pie-chart'
  }, {
    name: 'Icons',
    url: '/icons',
    icon: 'icon-star',
    children: [{
      name: 'CoreUI Icons',
      url: '/icons/coreui-icons',
      icon: 'icon-star',
      badge: {
        variant: 'info',
        text: 'NEW'
      }
    }, {
      name: 'Flags',
      url: '/icons/flags',
      icon: 'icon-star'
    }, {
      name: 'Font Awesome',
      url: '/icons/font-awesome',
      icon: 'icon-star',
      badge: {
        variant: 'secondary',
        text: '4.7'
      }
    }, {
      name: 'Simple Line Icons',
      url: '/icons/simple-line-icons',
      icon: 'icon-star'
    }]
  }, {
    name: 'Notifications',
    url: '/notifications',
    icon: 'icon-bell',
    children: [{
      name: 'Alerts',
      url: '/notifications/alerts',
      icon: 'icon-bell'
    }, {
      name: 'Badges',
      url: '/notifications/badges',
      icon: 'icon-bell'
    }, {
      name: 'Modals',
      url: '/notifications/modals',
      icon: 'icon-bell'
    }]
  }, {
    name: 'Widgets',
    url: '/widgets',
    icon: 'icon-calculator',
    badge: {
      variant: 'info',
      text: 'NEW'
    }
  }, {
    divider: true
  }, {
    title: true,
    name: 'Extras'
  }, {
    name: 'Pages',
    url: '/pages',
    icon: 'icon-star',
    children: [{
      name: 'Login',
      url: '/login',
      icon: 'icon-star'
    }, {
      name: 'Register',
      url: '/register',
      icon: 'icon-star'
    }, {
      name: 'Error 404',
      url: '/404',
      icon: 'icon-star'
    }, {
      name: 'Error 500',
      url: '/500',
      icon: 'icon-star'
    }]
  }, {
    name: 'Disabled',
    url: '/dashboard',
    icon: 'icon-ban',
    attributes: {
      disabled: true
    }
  }, {
    name: 'Download CoreUI',
    url: 'https://coreui.io/react/',
    icon: 'icon-cloud-download',
    "class": 'mt-auto',
    variant: 'success',
    attributes: {
      target: '_blank',
      rel: "noopener"
    }
  }, {
    name: 'Try CoreUI PRO',
    url: 'https://coreui.io/pro/react/',
    icon: 'icon-layers',
    variant: 'danger',
    attributes: {
      target: '_blank',
      rel: "noopener"
    }
  }]
});

/***/ }),

/***/ "./resources/js/containers/DefaultLayout/DefaultLayout.js":
/*!****************************************************************!*\
  !*** ./resources/js/containers/DefaultLayout/DefaultLayout.js ***!
  \****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_router_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-router-dom */ "./node_modules/react-router-dom/esm/react-router-dom.js");
/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! reactstrap */ "./node_modules/reactstrap/es/index.js");
/* harmony import */ var _coreui_react__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @coreui/react */ "./node_modules/@coreui/react/es/index.js");
/* harmony import */ var _nav__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../_nav */ "./resources/js/_nav.js");
/* harmony import */ var _routes__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../routes */ "./resources/js/routes.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }





 // sidebar nav config

 // routes config


var DefaultAside = react__WEBPACK_IMPORTED_MODULE_0___default.a.lazy(function () {
  return __webpack_require__.e(/*! import() */ 39).then(__webpack_require__.bind(null, /*! ./DefaultAside */ "./resources/js/containers/DefaultLayout/DefaultAside.js"));
});
var DefaultFooter = react__WEBPACK_IMPORTED_MODULE_0___default.a.lazy(function () {
  return __webpack_require__.e(/*! import() */ 40).then(__webpack_require__.bind(null, /*! ./DefaultFooter */ "./resources/js/containers/DefaultLayout/DefaultFooter.js"));
});
var DefaultHeader = react__WEBPACK_IMPORTED_MODULE_0___default.a.lazy(function () {
  return __webpack_require__.e(/*! import() */ 41).then(__webpack_require__.bind(null, /*! ./DefaultHeader */ "./resources/js/containers/DefaultLayout/DefaultHeader.js"));
});

var DefaultLayout =
/*#__PURE__*/
function (_Component) {
  _inherits(DefaultLayout, _Component);

  function DefaultLayout() {
    _classCallCheck(this, DefaultLayout);

    return _possibleConstructorReturn(this, _getPrototypeOf(DefaultLayout).apply(this, arguments));
  }

  _createClass(DefaultLayout, [{
    key: "signOut",
    //loading = () => <div className="animated fadeIn pt-1 text-center">Loading...</div>
    value: function signOut(e) {
      e.preventDefault();
      this.props.history.push('/login');
    }
  }, {
    key: "render",
    value: function render() {
      return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "app"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
        className: "app-body"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("main", {
        className: "main"
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_2__["Container"], {
        fluid: true
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react__WEBPACK_IMPORTED_MODULE_0__["Suspense"], {
        fallback: react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement("div", {
          className: "animated fadeIn pt-3 text-center"
        }, "Loading...")
      }, react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_1__["Switch"], null, _routes__WEBPACK_IMPORTED_MODULE_5__["default"].map(function (route, idx) {
        return route.component ? react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_1__["Route"], {
          key: idx,
          path: route.path,
          exact: route.exact,
          name: route.name,
          render: function render(props) {
            return react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(route.component, props);
          }
        }) : null;
      }), react__WEBPACK_IMPORTED_MODULE_0___default.a.createElement(react_router_dom__WEBPACK_IMPORTED_MODULE_1__["Redirect"], {
        from: "/",
        to: "/landing"
      })))))));
    }
  }]);

  return DefaultLayout;
}(react__WEBPACK_IMPORTED_MODULE_0__["Component"]);

/* harmony default export */ __webpack_exports__["default"] = (DefaultLayout);

/***/ }),

/***/ "./resources/js/routes.js":
/*!********************************!*\
  !*** ./resources/js/routes.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);

var Email = react__WEBPACK_IMPORTED_MODULE_0___default.a.lazy(function () {
  return __webpack_require__.e(/*! import() */ 34).then(__webpack_require__.bind(null, /*! ./views/Profile/Email */ "./resources/js/views/Profile/Email.js"));
});
var Landing = react__WEBPACK_IMPORTED_MODULE_0___default.a.lazy(function () {
  return Promise.all(/*! import() */[__webpack_require__.e(0), __webpack_require__.e(2), __webpack_require__.e(3), __webpack_require__.e(6), __webpack_require__.e(29)]).then(__webpack_require__.bind(null, /*! ./views/Landing/Landing */ "./resources/js/views/Landing/Landing.js"));
});
var Addprofile = react__WEBPACK_IMPORTED_MODULE_0___default.a.lazy(function () {
  return Promise.all(/*! import() */[__webpack_require__.e(0), __webpack_require__.e(33)]).then(__webpack_require__.bind(null, /*! ./views/Profile/Addprofile */ "./resources/js/views/Profile/Addprofile.js"));
});
var Image = react__WEBPACK_IMPORTED_MODULE_0___default.a.lazy(function () {
  return Promise.all(/*! import() */[__webpack_require__.e(2), __webpack_require__.e(6)]).then(__webpack_require__.bind(null, /*! ./views/Image/Image */ "./resources/js/views/Image/Image.js"));
});
var Advisor = react__WEBPACK_IMPORTED_MODULE_0___default.a.lazy(function () {
  return Promise.all(/*! import() */[__webpack_require__.e(0), __webpack_require__.e(26), __webpack_require__.e(25), __webpack_require__.e(28)]).then(__webpack_require__.bind(null, /*! ./views/Advisor/Advisor */ "./resources/js/views/Advisor/Advisor.js"));
});
var AdvisorSignup = react__WEBPACK_IMPORTED_MODULE_0___default.a.lazy(function () {
  return __webpack_require__.e(/*! import() */ 25).then(__webpack_require__.bind(null, /*! ./views/Advisor/AdvisorSignup */ "./resources/js/views/Advisor/AdvisorSignup.js"));
});
var Users = react__WEBPACK_IMPORTED_MODULE_0___default.a.lazy(function () {
  return __webpack_require__.e(/*! import() */ 36).then(__webpack_require__.bind(null, /*! ./views/Users/Users */ "./resources/js/views/Users/Users.js"));
});
var User = react__WEBPACK_IMPORTED_MODULE_0___default.a.lazy(function () {
  return __webpack_require__.e(/*! import() */ 35).then(__webpack_require__.bind(null, /*! ./views/Users/User */ "./resources/js/views/Users/User.js"));
}); // https://github.com/ReactTraining/react-router/tree/master/packages/react-router-config

var routes = [{
  path: '/landing',
  name: 'Landing',
  component: Landing
}, {
  path: '/addprofile',
  name: 'Addprofile',
  component: Addprofile
}, {
  path: '/image',
  name: 'Image',
  component: Image
}, {
  path: '/advisor',
  name: 'Advisor',
  component: Advisor
}, {
  path: '/email',
  Name: 'Email',
  component: Email
}, {
  path: '/advisorsignup',
  Name: 'Advisorsignup',
  component: AdvisorSignup
}, {
  path: '/users',
  exact: true,
  name: 'Users',
  component: Users
}, {
  path: '/users/:id',
  exact: true,
  name: 'User Details',
  component: User
}];
/* harmony default export */ __webpack_exports__["default"] = (routes);

/***/ })

}]);