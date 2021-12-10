import Vue from 'vue';
import VueRouter from 'vue-router';
import total from './components/total_article.vue';
import css from './components/css_temp.vue';
import article from './components/article.vue';

Vue.use(VueRouter);

const routes = [{
    path: '/learndaily',
    name: 'total',
    component: total,
    meta: {
        auth: undefined
    }
},{
    path: '/',
    name: 'css',
    component: css,
    meta: {
        auth: undefined
    }
},{
    path: '/article/:articleId',
    name: 'article',
    component: article,
    meta: {
        auth: undefined
    }
},];

const router = new VueRouter({
    routes: routes,
    linkActiveClass: 'active'
});
export default router;