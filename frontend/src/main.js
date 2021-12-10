import Vue from 'vue';
import App from './App.vue';
import router from './router';
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import { BootstrapVue } from 'bootstrap-vue'
import VueMarkdown from 'vue-markdown'

Vue.use(Vuetify);
Vue.use(BootstrapVue);

Vue.component('vue-markdown', VueMarkdown);

new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    router,
    render: h => h(App)
});
new Vuetify({
    icons: {
        iconfont: 'md', // 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4' || 'faSvg'
    },
})