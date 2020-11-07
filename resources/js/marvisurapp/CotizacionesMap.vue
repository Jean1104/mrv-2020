<template>
    <div>
        <MenuComponent :seccion="'cotizaciones'"/>
        <div class="Cuerpo">
            <v-card
                color="#ffe3b2"
                style="border-radius: 0;"
                class="mt-3"
                flat
            >
                <div
                    class="text-center red--text font-italic"
                    style="padding: 7px; font-size: 28px;"
                >
                    <strong>COTIZACIÓN</strong>
                </div>
            </v-card>
            <v-card
                color="#efefef"
                class="my-5 px-2 pt-0"
                flat
            >
                <v-row>
                    <v-col
                        md="6"
                        cols="12"

                    >
                        <v-card
                            color="white"
                            class="mt-2 py-0 rounded-t-xl"
                            flat
                        >
                            <div
                                class="text-center white--text text-uppercase ma-0 py-2 text-h6"
                                style="background-color: #d20817;"
                            >
                                <strong>Punto de Origen</strong>
                            </div>
                            <div class="white" style="text-align: center;" >
                                <v-text-field
                                    v-model="search"
                                    clearable
                                    flat
                                    dark
                                    hide-details
                                    prepend-inner-icon="mdi-magnify"
                                    label="Buscar Provincia"
                                    class="buscador ma-2 pa-4 white--text rounded-xl"
                                ></v-text-field>
                            </div>
                            <div v-if="mostrar_mapa">
                                <v-card
                                    color="#f1f1f1"
                                    style="text-align: center;"
                                    class="mb-2 mt-0 mx-2"
                                >
                                    <GmapMap
                                        :center="locacioninicial"
                                        :zoom="5"
                                        map-type-id="terrain"
                                        style="width: 100%; height: 250px"
                                    >
                                        <GmapMarker
                                            :key="index"
                                            v-for="(m, index) in markers"
                                            :position="getPosition(m)"
                                        />
                                    </GmapMap>
                                </v-card>
                            </div>
                            <div>
                                <v-card
                                    class="rounded-t-xl ma-3 ciudad"
                                    flat
                                    v-if="datos_sucursal"
                                >
                                    <div
                                        class="text-left red--text text-uppercase ma-0 py-1 px-3 text-subtitle-1"
                                        style="background-color: #ececec;"
                                    >
                                        <strong>Arequipa</strong>
                                    </div>
                                    <div>
                                        <v-list class="white ">
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
                        </v-card>
                    </v-col>
                    <v-col
                        md="6"
                        cols="12"
                    >
                        <v-card
                            color="white"
                            class="mt-2 py-0 rounded-t-xl"
                            flat
                        >
                            <div
                                class="text-center white--text text-uppercase ma-0 py-2 text-h6"
                                style="background-color: #d20817;"
                            >
                                <strong>Punto de Destino</strong>
                            </div>
                            <div class="white" style="text-align: center;" >
                                <v-text-field
                                    v-model="search"
                                    clearable
                                    flat
                                    dark
                                    hide-details
                                    prepend-inner-icon="mdi-magnify"
                                    label="Buscar Provincia"
                                    class="buscador ma-2 pa-4 white--text rounded-xl"
                                ></v-text-field>
                            </div>
                            <div v-if="mostrar_mapa">
                                <v-card
                                    color="#f1f1f1"
                                    style="text-align: center;"
                                    class="mb-2 mt-0 mx-2"
                                >
                                    <GmapMap
                                        :center="locacioninicial"
                                        :zoom="5"
                                        map-type-id="terrain"
                                        style="width: 100%; height: 250px"
                                    >
                                        <GmapMarker
                                            :key="index"
                                            v-for="(m, index) in markers"
                                            :position="getPosition(m)"
                                        />
                                    </GmapMap>
                                </v-card>
                            </div>
                            <div>
                                <v-card
                                    class="rounded-t-xl ma-3 ciudad"
                                    flat
                                    v-if="datos_sucursal"
                                >
                                    <div
                                        class="text-left red--text text-uppercase ma-0 py-1 px-3 text-subtitle-1"
                                        style="background-color: #ececec;"
                                    >
                                        <strong>Arequipa</strong>
                                    </div>
                                    <div>
                                        <v-list class="white ">
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
                        </v-card>
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
    export default {
        name: 'cotizacionesmap',
        components: {
            MenuComponent,
            FooterComponent,
        },
        data () {
            return{
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
                    },
                    {
                        name: 'Cusco'},
                ],
                sucursales: [],
                datos_sucursal: true,
                mostrar_mapa: true,
                sucursal_mostrar: true,
                nombre_prov: false,
                locacioninicial : {
                    lat: -9.189967,
                    lng: -75.015152
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
            }
        },
        methods: {
            getPosition: function(marker) {
                return {
                lat: parseFloat(marker.lat),
                lng: parseFloat(marker.lng)
                }
            },
        },

    }
</script>

<style lang="scss" scoped>
    .Cuerpo{
        margin-top: 92px;
        margin-bottom: 290px;
    }
    .caja{
        height: 400px;
        width: 360px;
    }
    @media (max-width: 900px) {
        .Cuerpo{
            margin-top: 82px;
            margin-bottom: 343px;
        }
        .caja{
            height: 370px;
            width: 315px;
        }

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
    .contenido{
        background-color: #fbf0db;
    }
    .ciudad {
        border: 2px solid #d20817;
    }

</style>
