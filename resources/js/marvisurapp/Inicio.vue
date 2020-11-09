<template>
    <div>
        <MenuComponent :seccion="'inicio'" />
        <div class="Cuerpo">
        <div>
            <v-carousel
                cycle
                hide-delimiters
                show-arrows-on-hover
                height="auto"
            >
                <v-carousel-item
                    v-for="(slide, i) in slides"
                    :key="i"
                    :src="slide.src"
                >
                </v-carousel-item>
            </v-carousel>
        </div>
        <div class="SecondSection">
            <v-row>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <v-hover
                        v-slot="{ hover }"
                    >
                        <v-card
                            class="mx-auto"
                            height="170"
                            color="#d20817"
                            href="/rastrea_tu_envio"
                            :elevation="hover ? 16 : 2"
                            :class="{ 'on-hover': hover }"
                        >
                            <div class="rounded-r-xl black--text iconorastrea">
                                <div class="imagenicono">
                                    <img style="width: 233px; padding-top: 11px;" src="/images/iconorastreae.png"/>
                                    <v-expand-transition>
                                        <div
                                            v-if="hover"
                                            class="d-flex transition-fast-in-fast-out darken-2 v-card--reveal display-3 white--text"
                                            style="height: 100%; background-color: #f7e3bf7d;"
                                        >

                                        </div>
                                    </v-expand-transition>
                                </div>
                            </div>
                        </v-card>
                    </v-hover>
                </v-col>
                <v-col
                    cols="12"
                    sm="6"
                >
                    <v-hover
                        v-slot="{ hover }"

                    >
                        <v-card
                            :elevation="hover ? 16 : 2"
                            :class="{ 'on-hover': hover }"
                            class="mx-auto"
                            height="170"
                            color="#d20817"
                            href="/sucursales"
                        >
                            <div class="rounded-r-xl black--text iconorastrea">
                                <div class="imagenicono">
                                    <img style="width: 226px;" src="/images/icononuestrassu.png"/>
                                    <v-expand-transition>
                                        <div
                                            v-if="hover"
                                            class="d-flex transition-fast-in-fast-out darken-2 v-card--reveal display-3 white--text"
                                            style="height: 100%; background-color: #f7e3bf7d;"
                                        >
                                        </div>
                                    </v-expand-transition>
                                </div>
                            </div>
                        </v-card>
                    </v-hover>
                </v-col>
            </v-row>
        </div>
        <div class="ThirdSection" style="margin: 10px;">
            <v-card
                class="mx-auto"
                max-width="100%"
                flat
            >
                <v-card
                    color="#ffe3b2"
                    style="border-radius: 0;"
                    class="mt-3"
                    flat
                >
                    <div
                        class="text-center red--text font-italic"
                        style="padding: 7px; font-size: 24px;"
                    >
                        NUESTROS SERVICIOS
                    </div>
                </v-card>
                <div class="nuestrosServicios">
                        <v-row >
                            <v-col
                                cols="12"
                                sm="4"
                            >
                                <v-hover v-slot="{ hover }">
                                    <v-card
                                        :elevation="hover ? 16 : 2"
                                        :class="{ 'on-hover': hover }"
                                        class="rounded-r-xl"
                                        to="/servicios"
                                    >
                                        <div class="rounded-r-xl white black--text iconoservicios">
                                            <div class="imagenicono">
                                                <img style="width: 126px; padding-top: 13px;" src="/images/iconotransportec.png"/>
                                                <v-expand-transition>
                                                    <div
                                                        v-if="hover"
                                                        class="rounded-r-xl d-flex transition-fast-in-fast-out darken-2 v-card--reveal display-3 white--text"
                                                        style="height: 100%; background-color: #ea091a85;"
                                                    >
                                                    </div>
                                                </v-expand-transition>
                                            </div>
                                        </div>
                                    </v-card>
                                </v-hover>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="4"
                            >
                                <v-hover v-slot="{ hover }">
                                    <v-card
                                        :elevation="hover ? 16 : 2"
                                        :class="{ 'on-hover': hover }"
                                        class="rounded-xl"
                                        to="/servicios"
                                    >
                                        <div class="rounded-xl white black--text text-center iconoservicios">
                                            <div class="imagenicono">
                                                <img style="width: 115px;" src="/images/iconomudanzas.png"/>
                                                <v-expand-transition>
                                                    <div
                                                        v-if="hover"
                                                        class="rounded-xl d-flex transition-fast-in-fast-out darken-2 v-card--reveal display-3 white--text"
                                                        style="height: 100%; background-color: #ea091a85;"
                                                    >
                                                    </div>
                                                </v-expand-transition>
                                            </div>
                                        </div>
                                    </v-card>
                                </v-hover>

                            </v-col>
                            <v-col
                                cols="12"
                                sm="4"
                            >
                                <v-hover v-slot="{ hover }">
                                    <v-card
                                        :elevation="hover ? 16 : 2"
                                        :class="{ 'on-hover': hover }"
                                        class="rounded-l-xl"
                                        to="/servicios"
                                    >
                                        <div class="rounded-l-xl white black--text text-center iconoservicios">
                                            <div class="imagenicono">
                                                <img style="width: 160px; padding-top: 12px;" src="/images/iconoservicioe.png"/>
                                                <v-expand-transition>
                                                    <div
                                                        v-if="hover"
                                                        class="rounded-l-xl d-flex transition-fast-in-fast-out darken-2 v-card--reveal display-3 white--text"
                                                        style="height: 100%; background-color: #ea091a85;"
                                                    >
                                                    </div>
                                                </v-expand-transition>
                                            </div>
                                        </div>
                                    </v-card>
                                </v-hover>
                            </v-col>
                        </v-row>
                </div>
            </v-card>
        </div>
        <FooterComponent />
        </div>

    </div>
</template>
<script>
    import MenuComponent from '../components/MenuComponent.vue';
    import FooterComponent from '../components/FooterComponent.vue';
    export default {
        name: 'inicio',
        components: {
            MenuComponent,
            FooterComponent,
        },

        data: () => ({
            show: false
        }),
        data() {
            return {
                colors: [
                    "indigo",
                    "warning",
                    "pink darken-2",
                    "red lighten-1",
                    "deep-purple accent-4"
                ],
                slides: [
                    {
                        src: '/images/imageninicio1.jpg',
                    },
                    {
                        src: '/images/imageninicio2.jpg',
                    },
                    {
                        src: '/images/imageninicio3.jpg',
                    },
                    {
                        src: '/images/imageninicio4.jpg',
                    },
                ],
            };
        },

        mounted() {
            console.log("Example component mounted");
        }
    };
</script>

<style>
    .SecondSection{
        margin: 10px;
    }
    .ThirdSection{
        margin: 10px;
    }

    .Cuerpo{
        margin-top: 78px;
        margin-bottom: 300px;
    }
    @media (max-width: 900px) {
        .Cuerpo{
            margin-top: 78px;
            margin-bottom: 320px;
        }
    }
    .nuestrosServicios{
        background-color: #d20817;
    }
    .iconoservicios{
        height: 152px;
        margin-bottom: 12px;
        text-align: center;
    }
    .imagenicono{
        padding-top: 16px;
    }
    .iconorastrea{
        height: 152px;
        margin-bottom: 12px;
        text-align: center;

    }
    .v-card--reveal {
        align-items: center;
        bottom: 0;
        justify-content: center;
        opacity: .5;
        position: absolute;
        width: 100%;
    }
</style>
