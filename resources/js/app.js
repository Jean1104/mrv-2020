window.Vue = require("vue");
import 'vuetify/dist/vuetify.min.css'
import vuetify from './vuetify/index.js';

import App from './App.vue';

import router from './routes';

import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
    load: {
        //key: 'AIzaSyDkzKKeWALVer8nj3GGEANc9OsKgP2SST4',
        key: 'AIzaSyBopqxqgycEOXp1pXb-ye1PBOvS5jWY55M',
        libraries: 'places',
    },
})

const app = new Vue({
    vuetify,
	router,
	render: h => h(App),
    el: "#app",
});
