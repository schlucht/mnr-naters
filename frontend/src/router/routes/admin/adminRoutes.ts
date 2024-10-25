
const adminRoutes = [
    {
        path: '/admin',
        name: 'home',
        component: () => import("../../../components/pages/admin/OtsAdminHome.vue"),
        meta: "Admin Home",
    },
];

export default adminRoutes;