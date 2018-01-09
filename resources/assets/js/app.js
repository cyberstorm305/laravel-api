import Vue from 'vue'

import BootstrapVue from 'bootstrap-vue'

import axios from 'axios';

Vue.use(BootstrapVue);

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);

const app = new Vue({
   el: '#app'
});

const organisations = new Vue({
    el: '#organisation'
});

