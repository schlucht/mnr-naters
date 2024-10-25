
const mnrRoutes = [
    {
        path: '/',
        name: 'home',
        component: () => import("../../../components/pages/mnr/OtsMnrHome.vue"),
        meta: {title: 'Startseite'},
    },
];

export default mnrRoutes;