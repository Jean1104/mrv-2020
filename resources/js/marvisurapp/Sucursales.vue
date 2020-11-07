<template>
    <div>
        <MenuComponent :seccion="'sucursales'"/>
        <div class="Cuerpo">
            <v-card
                color="#ffe3b2"
                style="border-radius: 0;"
                class="mt-3 mb-4"
                flat
            >
                <div
                    class="text-center red--text font-italic"
                    style="padding: 7px; font-size: 28px;"
                >
                    <strong>SUCURSALES</strong>
                </div>
            </v-card>
            <v-card
                class="py-2 mb-2 mt-0"
                flat
                color="#efefef"
            >
                <v-row>
                    <v-col
                        md="6"
                        cols="12"
                    >
                        <v-card
                            class="pa-3 mx-2 mt-0 cuadro"
                            outlined
                        >
                            <div style="text-align: center;" >
                                <v-text-field
                                    v-model="search"
                                    clearable
                                    flat
                                    dark
                                    hide-details
                                    prepend-inner-icon="mdi-magnify"
                                    label="Buscar Provincia"
                                    class="buscador my-5 pa-4 white--text rounded-xl"
                                ></v-text-field>
                            </div>
                            <div>
                                <v-list color="white">
                                    <v-list-item-group
                                        color="#d20817"
                                    >
                                        <v-list-item
                                            v-for="(provincia, i) in buscador_provincia"
                                            :key="i"
                                            class="provincia"
                                            link
                                            @click="mostrar_sucursales(provincia)"
                                        >
                                            <v-card-title class="font-weight py-0 pl-6">
                                                {{ provincia.name }}
                                            </v-card-title>
                                        </v-list-item>
                                    </v-list-item-group>
                                </v-list>
                            </div>
                        </v-card>
                    </v-col>
                    <v-col md="6" cols="12">
                        <div v-if="mostrar_mapa">
                            <v-card
                                color="#f1f1f1"
                                style="text-align: center;"
                                class="mb-2 mt-0 ml-2 mr-3"
                            >
                                <GmapMap
                                    :center="locacioninicial"
                                    :zoom="zoominicial"
                                    map-type-id="terrain"
                                    style="width: 100%; height: 420px"
                                >
                                    <GmapMarker
                                        :key="index"
                                        v-for="(m, index) in markers"
                                        :position="getPosition(m)"
                                    />
                                </GmapMap>
                            </v-card>
                        </div>
                        <div v-if="nombre_provincia != ''">
                            <div>
                                <v-card
                                    style="border-radius: 0;"
                                    class="mt-3"
                                >
                                    <div
                                        class="titulos text-center text-uppercase white--text"
                                        style="padding: 7px; font-size: 18px;"

                                    >
                                        <strong>{{nombre_provincia}}</strong>
                                    </div>
                                </v-card>
                            </div>
                            <div v-if="sucursal_mostrar">
                                <v-card
                                    flat
                                >
                                    <v-list
                                        color="white"
                                    >
                                        <v-list-item-group
                                            color="#f2d08c"
                                        >
                                            <v-list-item
                                                style="height: 110px;"
                                                v-for="(sucursal, i) in sucursales"
                                                :key="i"
                                                class="rounded-xl ma-3 cuadroProvincia"
                                                @click="mostrar_sucursal(sucursal)"
                                            >
                                                <v-list-item-content>
                                                    <v-list-item-title
                                                        class="text-center text-uppercase red--text pb-4"
                                                        style="font-size: 21px"
                                                    >
                                                        <strong> {{ sucursal.name }} </strong>
                                                    </v-list-item-title>
                                                    <v-list-item-subtitle
                                                        class="text-center text-uppercase"
                                                        style="font-size: 13px"
                                                    >
                                                        {{sucursal.direccion}}
                                                    </v-list-item-subtitle>
                                                </v-list-item-content>
                                            </v-list-item>
                                        </v-list-item-group>
                                    </v-list>
                                </v-card>
                            </div>
                            <div >
                                <v-card
                                    class="rounded-xl ma-3 ciudad"
                                    flat
                                    v-if="datos_sucursal"
                                >
                                    <div>
                                        <div class="titulo pa-2 rounded-t-xl">
                                            <v-row class=" fill-height">
                                                <v-card-title class="red--text text-uppercase py-0 pl-7 text-h5">
                                                    <strong> {{datos_sucursal.name}} </strong>
                                                </v-card-title>
                                            </v-row>
                                        </div>
                                        <v-list class="contenido rounded-b-xl">
                                            <v-list-item>
                                                <v-list-item-icon class="rounded-circle white pa-1 mb-0 mt-2">
                                                    <v-icon color="#d20817">
                                                        mdi-map-marker-radius
                                                    </v-icon>
                                                </v-list-item-icon>

                                                <v-list-item-content class="text-uppercase">
                                                    <v-list-item-title>
                                                        {{datos_sucursal.direccion}}
                                                    </v-list-item-title>
                                                </v-list-item-content>
                                            </v-list-item>
                                            <v-list-item >
                                                <v-list-item-icon class="rounded-circle white pa-1 my-0 mb-0 mt-2">
                                                    <v-icon color="#d20817">
                                                        mdi-phone
                                                    </v-icon>
                                                </v-list-item-icon>

                                                <v-list-item-content>
                                                    <v-list-item-title>
                                                        {{datos_sucursal.telefono}}
                                                    </v-list-item-title>
                                                </v-list-item-content>
                                            </v-list-item>
                                            <v-list-item>
                                                <v-list-item-icon class="rounded-circle white pa-1 my-0 mb-0 mt-2">
                                                    <v-icon color="#d20817">
                                                        mdi-email
                                                    </v-icon>
                                                </v-list-item-icon>

                                                <v-list-item-content>
                                                    <v-list-item-title>
                                                        {{datos_sucursal.email}}
                                                    </v-list-item-title>
                                                </v-list-item-content>
                                            </v-list-item>
                                            <v-list-item>
                                                <v-list-item-icon class="rounded-circle white pa-1 my-0 mb-0 mt-2">
                                                    <v-icon color="#d20817">
                                                        mdi-clock
                                                    </v-icon>
                                                </v-list-item-icon>
                                                <v-list-item-content class="text-uppercase">
                                                    <v-list-item-title>
                                                        {{datos_sucursal.horario}}
                                                    </v-list-item-title>
                                                </v-list-item-content>
                                            </v-list-item>
                                            <v-list-item>
                                                <v-list-item-icon class="rounded-circle white pa-1 my-0 mb-0 mt-2">
                                                    <v-icon color="#d20817">
                                                        mdi-send
                                                    </v-icon>
                                                </v-list-item-icon>
                                                <v-list-item-content class="text-uppercase">
                                                    <v-list-item-title>
                                                        ENVÍOS A: {{datos_sucursal.envios}}
                                                    </v-list-item-title>
                                                </v-list-item-content>
                                            </v-list-item>
                                        </v-list>
                                    </div>
                                </v-card>
                            </div>
                        </div>
                    </v-col>
                </v-row>
            </v-card>
        </div>
        <FooterComponent />
    </div>
</template>

<script>
    import MenuComponent from '../components/MenuComponent.vue';
    import FooterComponent from '../components/FooterComponent.vue';

    import axios from 'axios';

    export default {
        name: 'sucursales',
        components: {
            MenuComponent,
            FooterComponent,
        },
        data () {
            return {
                search: '',
                nombre_provincia: '',
                provincias: [
                    {
                        name: 'Arequipa',
                        sucursales: [
                            {   name: 'Arequipa',
                                direccion: 'Cal. Carbajar - Arequipa - Arequipa',
                                telefono: '(650) 555-1234',
                                email: 'aliconnors@example.com',
                                horario: 'Lun - Sab : 8:00 Am - 6:00 Pm*',
                                envios: 'NIVEL NACIONAL',
                            },

                            {name: 'Arequipa: Jacobo Hunter', direccion: 'Urb. Bellavista'},
                            {name: 'La Joya', direccion: 'cal. urb - Arequipa - Arequipa'},
                        ],
                        markers: []
                    },
                    {
                        name: 'Lima',
                        sucursales: [
                            {   name: 'Lima',
                                direccion: 'Cal. Carbajar - Arequipa - Arequipa',
                                telefono: '(650) 555-1234',
                                email: 'aliconnors@example.com',
                                horario: 'Lun - Sab : 8:00 Am - 6:00 Pm*',
                                envios: 'NIVEL NACIONAL',
                            },

                            {name: 'Lima: Jacobo Hunter', direccion: 'Urb. Bellavista'},
                            {name: 'La Joya', direccion: 'cal. urb - Arequipa - Arequipa'},
                        ],
                        markers: []
                    },
                    {
                        name: 'Cusco',
                        markers: []
                    },
                ],
                sucursales: [],
                datos_sucursal: null,
                mostrar_mapa: true,
                sucursal_mostrar: true,
                nombre_prov: false,
                locacioninicial : {
                    lat: -9.189967,
                    lng: -75.015152,
                },
                markers : [
                    {
                        lat: -16.39889,
                        lng: -71.535
                    },
                    {
                        lat: -12.04318,
                        lng: -77.02824
                    },
                    {
                        lat: -13.52264,
                        lng: -71.96734
                    }
                ],
                latitud : null,
                longitud : null,
                zoominicial : 5,
            }
        },

        methods: {
            mostrar_sucursales : function(provincia){
                this.nombre_provincia = provincia.name;
                this.sucursales = provincia.sucursales;
                this.datos_sucursal = null;
                this.sucursal_mostrar = true;
                this.nombre_prov = true;
                this.markers = provincia.markers;
                this.locacioninicial = { lat: parseFloat(provincia.latitud), lng: parseFloat(provincia.longitud) };
                this.zoominicial = 7;
            },
            mostrar_sucursal : function (sucursal){
                console.log(sucursal);
                this.datos_sucursal = sucursal;
                this.sucursal_mostrar = false;
                this.nombre_prov = true;
                this.locacioninicial = {lat: parseFloat(sucursal.lat), lng: parseFloat(sucursal.lng)};
                this.zoominicial = 14;
            },
            getPosition: function(marker) {
                return {
                lat: parseFloat(marker.lat),
                lng: parseFloat(marker.lng)
                }
            },
        },
        computed: {
            buscador_provincia: function() {
                return this.provincias.filter((provincia) => provincia.name.toLowerCase().includes(this.search.toLowerCase()));

            }

        },
        mounted: function()
        {
            axios.get('/api/getsucursales').then( res => {
                this.provincias = res.data.res;
                this.markers = res.data.markers;
            })
        }

    }
</script>

<style lang="scss" scoped>
    .Cuerpo{
        margin-top: 92px;
        margin-bottom: 290px;
    }
    @media (max-width: 900px) {
        .Cuerpo{
            margin-top: 82px;
            margin-bottom: 343px;
        }
    }
    .cuadro{
        background-color: white;
        border: 2px solid #d20817;

    }
    .buscador{
        background-color: #d20817;
        font-size: 20px;
        color: white;

    }
    .mapa{
        height: 240px;
        width: 100%;
    }
    .provincia{
        border-bottom: 2px solid #d20817;
        min-height: 38px;
    }

    .cuadroProvincia{
        background-color: white;
        border: 2px solid #d20817;
        height: 110px;
    }
    .titulo{
        background-color: #fbd491;
    }
    .contenido{
        background-color: #fbf0db;
    }
    .ciudad {
        border: 2px solid #d20817;
    }
    .titulos{
        background-color: #d20817;
    }
    .v-list-item__subtitle, .v-list-item__title {
        flex: 1 1 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: inherit;

    }
</style>
