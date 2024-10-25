import { createRouter, createMemoryHistory } from 'vue-router';

import mnrRroutes from './routes/mnr/mnrRoutes';

const routes = [mnrRroutes];

const router = createRouter({
    routes,
    history: createMemoryHistory(),    
});

router.beforeEach((to, form, next) => {
    const defaultTitle = "MNR-Naters";
    document.title = to.meta.title ? `${ defaultTitle } - ${to.meta.title}` : defaultTitle;
    next();
});

export default router;