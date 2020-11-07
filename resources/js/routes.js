import Vue from 'vue'

import Router from 'vue-router'

Vue.use(Router)
var subdominio = ''

const ruta = new Router({

    routes: [
        {
            path: subdominio + '/',
            name: 'inicio',
            component: require('./marvisurapp/Inicio').default
        },
        {
            path: subdominio + '/inicio',
            name: 'home',
            component: require('./marvisurapp/Inicio').default
        },
        {
            path:  subdominio + '/conocenos',
            name: 'conocenos',
            component: require('./marvisurapp/Conocenos').default
        },
        {
            path:  subdominio + '/servicios',
            name: 'servicios',
            component: require('./marvisurapp/Servicios').default
        },
        {
            path:  subdominio + '/sucursales',
            name: 'sucursales',
            component: require('./marvisurapp/Sucursales').default
        },
        {
            path:  subdominio + '/cotizaciones',
            name: 'cotizaciones',
            component: require('./marvisurapp/Cotizaciones').default
        },
        {
            path:  subdominio + '/rastrea_tu_envio',
            name: 'rastrea_tu_envio',
            component: require('./marvisurapp/RastreaTuEnvio').default
        },
        {
            path:  subdominio + '/preguntas_frecuentes',
            name: 'preguntas_frecuentes',
            component: require('./marvisurapp/PreguntasFrecuentes').default
        },
        {
            path:  subdominio + '/empleos',
            name: 'empleos',
            component: require('./marvisurapp/Empleos').default
        },
        {
            path:  subdominio + '/empleos/envia_tu_cv',
            name: 'envia_tu_cv',
            component: require('./marvisurapp/EmpleosEnviaCV').default
        },
        {
            path:  subdominio + '/cotizaciones/cotizacionesmap',
            name: 'cotizacionesmap',
            component: require('./marvisurapp/CotizacionesMap').default
        },
    ],
    mode: 'history',
    base: __dirname
})

export default ruta
