<template>
    <div>
        <MenuComponent :seccion="'servicios'"/>
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
                <strong>SERVICIOS</strong>
            </div>
        </v-card>
        <!--
        <v-card
            class="py-4 my-5"
            color="#efefef"
            flat
        >
            <v-row dense>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <div class="titulos rounded-r-xl white--text font-italic pl-4" style="margin-bottom: 12px;">
                        <v-card-title>TRANSPORTE DE CARGA </v-card-title>
                    </div>
                    <v-card
                        class="pa-2 ml-md-6"
                        max-width="100%"
                        shaped
                        color="white lighten-4"
                    >
                        <v-card-subtitle class="pb-0 text-justify">
                            Brindamos un servicio de calidad en el transporte de toda variedad
                            de carga, como paquetería - carga ligera - carga pesada - a personas
                            naturales y personas jurídicas trasladando la mercadería a donde
                            nuestro cliente lo solicite ya sea a nuestras oficinas o la dirección
                            que indique.
                        </v-card-subtitle>
                    </v-card>
                </v-col>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <v-img
                        height="230"
                        width="500"
                        class="pa-2 mx-lg-auto"
                        src="/images/servicio-transporte-carga.png"
                    ></v-img>
                </v-col>

            </v-row>
        </v-card>
        <v-card
            class="py-4 my-5"
            color="#efefef"
            flat
        >
            <v-row dense>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <div class="titulos rounded-r-xl white--text font-italic pl-4" style="margin-bottom: 12px;">
                        <v-card-title>MUDANZAS </v-card-title>
                    </div>
                    <v-card
                        class="pa-2 ml-md-6"
                        max-width="100%"
                        shaped
                        color="white lighten-4"
                    >
                        <v-card-subtitle class="pb-0 text-justify">
                            Brindamos un servicio seguro y de calidad en las mudanzas,
                            realizando el recojo desde el domicilio con personal muy
                            capacitado y un servicio personalizado hasta el destino que
                            nos indique.
                        </v-card-subtitle>
                    </v-card>
                </v-col>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <v-img
                        height="230"
                        width="500"
                        class="pa-2 mx-lg-auto"
                        src="/images/servicio-mudanzas.png"
                    ></v-img>
                </v-col>

            </v-row>
        </v-card>
        <v-card
            class="py-4 my-5"
            color="#efefef"
            flat
        >
            <v-row dense>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <div class="titulos rounded-r-xl white--text font-italic pl-4" style="margin-bottom: 12px;">
                        <v-card-title>SERVICIOS EXPRESO PARA EMPRESAS</v-card-title>
                    </div>
                    <v-card
                        class="pa-2 ml-md-6"
                        max-width="100%"
                        shaped
                        color="white lighten-4"
                    >
                        <v-card-subtitle class="pb-0 text-justify">
                            Brindamos a su empresa un servicio directo, para el traslado
                            exclusivo de su mercadería, con furgón cerrado desde la puerta de
                            su empresa de origen hasta su puerta de destino.
                        </v-card-subtitle>
                    </v-card>
                </v-col>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <v-img
                        height="230"
                        width="500"
                        class="pa-2 mx-lg-auto"
                        src="/images/servicio-expreso-empresas.png"
                    ></v-img>
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
                reverse
            >
                <v-timeline-item
                    v-for="(item, i) in items"
                    :key="i"
                    color="#d20817"
                    :icon="item.icon"
                    :text="item.text"
                    :name="item.name"
                    :name2="item.name2"
                    :name3="item.name3"
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
                                    <v-card-title
                                        class="py-0 px-4 rounded-tl-xl white--text font-italic text-center"
                                    >
                                        <v-img class="imagenesc rounded-tl-xl" :src="item.src">
                                            <v-expand-transition>
                                                <div
                                                    v-if="hover"
                                                    class="d-flex transition-fast-in-fast-out red darken-2 v-card--reveal text-h4 white--text"
                                                    style="height: 100%; "
                                                >
                                                    {{item.name}}
                                                    <br>
                                                    {{item.name2}}
                                                    <br>
                                                    {{item.name3}}
                                                </div>
                                            </v-expand-transition>
                                        </v-img>
                                    </v-card-title>
                                </v-col>
                                <v-col>
                                    <v-card-text class="white blue-grey--text pa-3 text-justify">
                                        <div class="red--text pa-3 font-italic">
                                            <strong> {{item.name}} {{item.name2}} {{item.name3}}</strong>
                                            <v-divider
                                                class="red"
                                            ></v-divider>
                                        </div>

                                        {{item.text}}
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
        name: 'servicios',
        components: {
            MenuComponent,
            FooterComponent,
        },
        data () {
            return{
                items: [
                    {
                        icon: 'mdi-tram',
                        src: '/images/servicio-transporte-carga.png',
                        name: 'TRANSPORTE',
                        name2: 'DE CARGA',
                        text: 'Brindamos un servicio de calidad en el transporte de toda variedad de carga, como paquetería - carga ligera - carga pesada - a personas naturales y personas jurídicas trasladando la mercadería a donde nuestro cliente lo solicite ya sea a nuestras oficinas o la dirección que indique.'
                    },
                    {
                        icon: 'mdi-truck',
                        src: '/images/servicio-mudanzas.png',
                        name: 'MUDANZAS',
                        text: 'Brindamos un servicio seguro y de calidad en las mudanzas, realizando el recojo desde el domicilio con personal muy capacitado y un servicio personalizado hasta el destino que nos indique.'
                    },
                    {
                        icon: 'mdi-bus',
                        src: '/images/servicio-expreso-empresas.png',
                        name: 'SERVICIOS',
                        name2: 'EXPRESO PARA',
                        name3: 'EMPRESAS',
                        text: 'Brindamos a su empresa un servicio directo, para el traslado exclusivo de su mercadería, con furgón cerrado desde la puerta de su empresa de origen hasta su puerta de destino.'
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
