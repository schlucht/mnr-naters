import { createRouter, createMemoryHistory } from 'vue-router';

import mnrRroutes from './routes/mnr/mnrRoutes';

const routes = [mnrRroutes];

const router = createRouter({
    routes,
    history: createMemoryHistory(),
});

export default router;