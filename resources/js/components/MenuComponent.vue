<template>
    <div >
        <div class="overflow-hidden">
        <v-row
        class="pr-0"
        >
        <v-app-bar
            color="white accent-4"
            fixed
            flat
            height="78px"
            style="padding-right: 3px;"
            class="pr-0"
        >
            <v-col
                cols="1"
                md="1"
            >
                <v-app-bar-nav-icon
                    color="#d20817" @click.stop="drawer = !drawer"
                ></v-app-bar-nav-icon>
            </v-col>
            <v-col
                cols="11"
                md="2"
                class="pa-0"
            >
                <div class="logo">
                    <v-toolbar-title >
                        <img style="width: 200px;" src="/images/logo.png"
                        >
                    </v-toolbar-title>
                </div>
            </v-col>
            <v-col
                cols="0"
                md="9"
                class="pr-0"
            >
                <nav
                    class="menufijo"
                    background-color="#d20817"
                    right
                >
                    <div id="inicio" v-on:click="ElegirRuta('inicio')"><span>INICIO</span></div>
                    <div id="conocenos" v-on:click="ElegirRuta('conocenos')" ><span> CONÓCENOS </span></div>
                    <div id="servicios" v-on:click="ElegirRuta('servicios')" ><span> SERVICIOS </span></div>
                    <div id="sucursales" v-on:click="ElegirRuta('sucursales')" ><span> SUCURSALES </span></div>
                    <div id="cotizaciones" v-on:click="ElegirRuta('cotizaciones')" ><span> COTIZACIÓN </span></div>
                    <div id="rastrea_tu_envio" v-on:click="ElegirRuta('rastrea_tu_envio')" ><span> RASTREA <br> TU ENVÍO </span></div>
                    <div id="preguntas_frecuentes" v-on:click="ElegirRuta('preguntas_frecuentes')" ><span> PREGUNTAS <br> FRECUENTES </span></div>
                    <div id="empleos" v-on:click="ElegirRuta('empleos')" ><span> OPORTUNIDAD <br> LABORAL </span></div>
                </nav>
            </v-col>
        </v-app-bar>
        </v-row>

        <v-navigation-drawer
            v-model="drawer"
            fixed
            temporary
        >
            <v-divider></v-divider>
            <v-list
                nav
                dense
            >
                <img style="width: 200px;" src="/images/logo.png">
                <v-divider class="pb-3"></v-divider>
                <v-list-item
                    v-for="item in items"
                    :key="item.title"
                    :to="item.url"
                    class="pa-3"
                    color="#d20817"
                >
                    <v-list-item-icon>
                        <v-icon color="#d20817">{{ item.icon }}</v-icon>
                    </v-list-item-icon>

                    <v-list-item-content>
                        <v-list-item-title style="font-size: 15px;">{{ item.title }}</v-list-item-title>
                    </v-list-item-content>

                </v-list-item>

            </v-list>
        </v-navigation-drawer>
        </div>
    </div>

</template>

<script>
    export default {
        name: 'MenuComponent',
        props: [ 'seccion' ],
        data () {
            return {
                drawer: null,
                items: [
                    { title: 'INICIO', icon: 'mdi-home', url: './inicio' },
                    { title: 'CONÓCENOS', icon: 'mdi-account-multiple-outline', url: '../conocenos'  },
                    { title: 'SERVICIOS', icon: 'mdi-bus', url: '../servicios'  },
                    { title: 'SUCURSALES', icon: 'mdi-google-maps', url: '../sucursales'  },
                    { title: 'COTIZACIÓN', icon: 'mdi-calculator', url: '../cotizaciones'  },
                    { title: 'RASTREA TU ENVÍO', icon: 'mdi-map-marker-radius', url: '../rastrea_tu_envio'  },
                    { title: 'PREGUNTAS FRECUENTES', icon: ' mdi-help-circle', url: '../preguntas_frecuentes'  },
                    { title: 'OPORTUNIDAD LABORAL', icon: 'mdi-comment-account', url: '../empleos'},
                ],
                value: 1,
                active: true,
            }
        },
        mounted: function(){
            console.log('Seccion', this.seccion);
            document.getElementById(this.seccion).classList.add('active');
        },
        methods: {
            ElegirRuta : function(boton) {
                location.href = '/' + boton;
            }
        }
    }
</script>

<style lang="scss" scoped>

.menufijo {
    display: flex;
    justify-content: space-between;
}
.menufijo div{
    flex: 1;
    font-family: Arial, Helvetica, sans-serif;
    height: 78px;
    display: flex;
    color: white;
    text-decoration: none;
    font-size: 12px;
    font-weight: bold;
    justify-content: center;
    align-items: center;
    background: #dd1817;
    transform: skew(-20deg)
}
.menufijo div span{
    transform: skew(13deg);
}
.menufijo div:hover{
    background: #ffe3b2;
    color: black;
}
.menufijo div.active{
    background: #ffe3b2;
    color: black;
}

.menufijo a span{
    transform: skew(13deg);
}
@media (max-width: 981px) {
    .menufijo {
        display: none;
    }
}

.logo {
    text-align: center;
}
.v-list-item__subtitle, .v-list-item__title {
    flex: 1 1 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: inherit;
}
</style>
