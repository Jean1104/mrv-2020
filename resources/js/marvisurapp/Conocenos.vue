<template>
    <div>
        <MenuComponent :seccion="'conocenos'"/>
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
                <strong>CONÓCENOS</strong>
            </div>
        </v-card>
        <!--
        <v-card
            class="pa-2 my-5"
            color="#efefef"
            flat
        >
            <v-row dense>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <v-img
                        height="230"
                        width="500"
                        class="pa-2 mx-lg-auto"
                        src="https://cdn.vuetifyjs.com/images/parallax/material2.jpg"
                    ></v-img>
                </v-col>
                </v-col>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <div class="titulos rounded-l-xl white--text font-italic pl-3"style="margin-bottom: 12px;">
                        <v-card-title>NUESTRA HISTORIA: </v-card-title>
                    </div>
                    <v-card
                        class="pa-2 mr-md-6"
                        max-width="100%"
                        shaped
                        color="white lighten-4"
                    >
                        <v-card-subtitle class="pb-0 text-justify">
                        Somos una empresa familiar que nace en la ciudad de Arequipa el
                        01 de mayo de 1989, iniciamos con dos vehículos que nos permitieron
                        conectar las principales ciudades del sur como: Arequipa, Juliaca, Puno,
                        Cusco y Tacna. En el año 2002 abrimos la primera sucursal de Lima, iniciando
                        así la expansión soñada; con sacrificio y perseverancia hemos permanecido
                        en este mercado, para poder formar parte de tu crecimiento empresarial.
                        </v-card-subtitle>
                    </v-card>
                </v-col>
            </v-row>
        </v-card>
        <v-card
            class="pa-2 my-5"
            color="#efefef"
            flat
        >
            <v-row dense>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <v-img
                        height="230"
                        width="500"
                        class="pa-2 mx-lg-auto"
                        src="https://cdn.vuetifyjs.com/images/parallax/material2.jpg"
                    ></v-img>
                </v-col>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <div class="titulos rounded-l-xl white--text font-italic pl-3" style="margin-bottom: 12px;">
                        <v-card-title>MISIÓN: </v-card-title>
                    </div>
                    <v-card
                        class="pa-2 mr-md-6"
                        max-width="100%"
                        shaped
                        color="white lighten-4"
                    >
                        <v-card-subtitle class="pb-0 text-justify">
                        Somos una empresa con mayor cobertura a nivel nacional en el
                        transporte de mercancías por vías terrestre, brindando un
                        servicio de calidad ya que contamos con una solida cultura
                        organizacional, lo que nos permite promover el desarrollo integral
                        de nuestro personal y mantener una estrecha relación con los
                        clientes, para poder consolidarnos como la empresa lider a nivel nacional.
                        </v-card-subtitle>
                    </v-card>
                </v-col>
            </v-row>
        </v-card>
        <v-card
            class="pa-2 my-5"
            color="#efefef"
            flat
        >
            <v-row dense>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <v-img
                        height="230"
                        width="500"
                        class="pa-2 mx-lg-auto"
                        src="https://cdn.vuetifyjs.com/images/parallax/material2.jpg"
                    ></v-img>
                </v-col>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <div class="titulos rounded-l-xl white--text font-italic pl-3" style="margin-bottom: 12px;">
                        <v-card-title>VISIÓN: </v-card-title>
                    </div>
                    <v-card
                        class="pa-2 mr-md-6"
                        max-width="100%"
                        shaped
                        color="white lighten-4"
                    >
                        <v-card-subtitle class="pb-0 text-justify">
                        consolidarnos como la empresa líder en el transporte de mercancías
                        por vía terrestre, expandiéndonos por nuevos mercados para ser la
                        empresa más rápida, sergura y con calidad de servicio a nivel nacional.
                        </v-card-subtitle>
                    </v-card>
                </v-col>
            </v-row>
        </v-card>-->
        <v-card
            color="#efefef"
            class="my-5 mx-0 py-3 px-2"
            flat
        >
            <v-timeline
                dense
            >
                <v-timeline-item
                    v-for="(item, i) in items"
                    :key="i"
                    color="#d20817"
                    :icon="item.icon"
                    :text="item.text"
                    :name="item.name"
                    :name2="item.name2"
                    :src="item.src"
                    fill-dot
                >
                    <v-hover v-slot="{ hover }">
                        <v-card
                            class="elevation-2"
                            shaped
                        >
                            <v-row>
                                <v-col
                                    cols="12"
                                    md="6"
                                    class="rounded-tl-xl"
                                >
                                    <v-card-text class="rounded-tl-xl white blue-grey--text pa-3 text-justify">
                                        <div class="red--text pa-3 font-italic">
                                            <strong> {{item.name}} {{item.name2}}</strong>
                                            <v-divider
                                                class="red"
                                            ></v-divider>
                                        </div>

                                        {{item.text}}
                                    </v-card-text>
                                </v-col>
                                <v-col
                                    cols="12"
                                    md="6"

                                >
                                    <v-card-text
                                        class="py-0 px-4 rounded-br-xl white--text font-italic text-center"
                                        style="text-align: center;"
                                    >
                                        <v-img class="imagenesc rounded-br-xl" :src="item.src">
                                            <v-expand-transition>
                                                <div
                                                    v-if="hover"
                                                    class="d-flex transition-fast-in-fast-out red darken-2 v-card--reveal text-h3 white--text"
                                                    style="height: 100%;"
                                                >
                                                    {{item.name}}
                                                    <br>
                                                    {{item.name2}}
                                                </div>
                                            </v-expand-transition>
                                        </v-img>
                                    </v-card-text>
                                </v-col>

                            </v-row>
                        </v-card>
                    </v-hover>
                </v-timeline-item>
            </v-timeline>
        </v-card>
        <FooterComponent />
        </div>
    </div>
</template>

<script>
    import MenuComponent from '../components/MenuComponent.vue';
    import FooterComponent from '../components/FooterComponent.vue';
    export default {
        name: 'conocenos',
        components: {
            MenuComponent,
            FooterComponent,
        },
        data () {
            return{
                items: [
                    {
                        icon: 'mdi-history',
                        src: '/images/servicio-transporte-carga.png',
                        name: 'NUESTRA',
                        name2: 'HISTORIA',
                        text: 'Somos una empresa familiar que nace en la ciudad de Arequipa el 01 de mayo de 1989, iniciamos con dos vehículos que nos permitieron conectar las principales ciudades del sur como: Arequipa, Juliaca, Puno, Cusco y Tacna. En el año 2002 abrimos la primera sucursal de Lima, iniciando así la expansión soñada; con sacrificio y perseverancia hemos permanecido en este mercado, para poder formar parte de tu crecimiento empresarial.'
                    },
                    {
                        icon: 'mdi-nature-people',
                        src: '/images/servicio-transporte-carga.png',
                        name: 'MISIÓN',
                        text: 'Somos una empresa con mayor cobertura a nivel nacional en el transporte de mercancías por vías terrestre, brindando un servicio de calidad ya que contamos con una solida cultura organizacional, lo que nos permite promover el desarrollo integral de nuestro personal y mantener una estrecha relación con los clientes, para poder consolidarnos como la empresa lider a nivel nacional.'
                    },
                    {
                        icon: 'mdi-eye',
                        src: '/images/servicio-transporte-carga.png',
                        name: 'VISIÓN',
                        text: 'consolidarnos como la empresa líder en el transporte de mercancías por vía terrestre, expandiéndonos por nuevos mercados para ser la empresa más rápida, sergura y con calidad de servicio a nivel nacional.'
                    },
                ],
            }
        },
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
    .titulos{
        background-color: #d20817;
    }
    .imagenesc{
        height: 230px;
    }
</style>
