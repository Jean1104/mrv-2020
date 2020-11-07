window.Vue = require('vue')

import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

import es from 'vuetify/es5/locale/es'

Vue.use(Vuetify)

const opts = {
    icons: {
        iconfont: 'mdi',
    },
    lang: {
        locales: { es },
        current: 'es',
    },
}

export default new Vuetify(opts)
