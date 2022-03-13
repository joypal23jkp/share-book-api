const routes = [
    {
        path: '/',
        component: require('../views/Dashboard').default
    },
    {
        path: '/login',
        component: require('../views/auth/AdminLogin').default
    },
    {
        path: '/register',
        component: require('../views/auth/AdminRegistration').default
    }
]

export default routes;
