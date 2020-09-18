import React from 'react';
const Email = React.lazy(() => import('./views/Profile/Email'));
const Landing = React.lazy(() => import('./views/Landing/Landing'));
const Addprofile = React.lazy(() => import('./views/Profile/Addprofile'));
const Image = React.lazy(() => import('./views/Image/Image'));
const Advisor = React.lazy(() => import('./views/Advisor/Advisor'));
const AdvisorSignup = React.lazy(() => import('./views/Advisor/AdvisorSignup'));
const Users = React.lazy(() => import('./views/Users/Users'));
const User = React.lazy(() => import('./views/Users/User'));


// https://github.com/ReactTraining/react-router/tree/master/packages/react-router-config
const routes = [
  { path: '/landing', name: 'Landing', component: Landing },
  { path: '/addprofile', name: 'Addprofile', component: Addprofile },
  { path: '/image', name: 'Image', component: Image },
  { path: '/advisor', name: 'Advisor', component: Advisor },
  { path: '/email', Name: 'Email', component:Email},
  { path: '/advisorsignup', Name: 'Advisorsignup', component:AdvisorSignup},

  { path: '/users', exact: true,  name: 'Users', component: Users },
  { path: '/users/:id', exact: true, name: 'User Details', component: User },

];
export default routes;  
