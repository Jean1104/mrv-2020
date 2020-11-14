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
        <div class="ThirdSection">
            <v-card
                class="my-4 mx-0"
                max-width="100%"
                flat
            >
                <v-card
                    color="#ffe3b2"
                    style="border-radius: 0;"
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
            show: false,
        }),
        data() {
            return {
                model: null,
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
                noticias: [
                    {
                        src: 'https://cdn.vuetifyjs.com/images/cards/sunshine.jpg',
                        subtitulo: 'well meaning and kindly.',
                        titulo: 'Noticia 1',
                        descripcion: 'consolidarnos como la empresa líder en el transporte de mercancías por vía terrestre, expandiéndonos por nuevos mercados para ser la empresa más rápida, sergura y con calidad de servicio a nivel nacional.'
                    },
                    {
                        src: 'https://picsum.photos/510/300?random',
                        subtitulo: 'notice',
                        titulo: 'Noticia 2 Turns out semicolon-less style',
                        descripcion: 'consolidarnos como la empresa líder en el transporte de mercancías por vía terrestre.'
                    },
                    {
                        src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg',
                        subtitulo: 'notice well and kindly',
                        titulo: 'Noticia 5',
                        descripcion: 'Expandiéndonos por nuevos mercados para ser la empresa más rápida, sergura y con calidad de servicio a nivel nacional.'
                    },
                    {
                        src: 'https://picsum.photos/510/300?random',
                        subtitulo: 'well',
                        titulo: 'Noticia 3',
                        descripcion: 'consolidarnos como la empresa líder en el transporte de mercancías por vía terrestre, expandiéndonos por nuevos mercados para ser la empresa más rápida.'
                    },
                    {
                        src: 'https://picsum.photos/510/300?random',
                        subtitulo: 'meaning and kindly',
                        titulo: 'Noticia 4',
                        descripcion: 'consolidarnos como la empresa líder en el transporte de mercancías por vía terrestre, expandiéndonos por nuevos.'
                    },
                ],
                noticia: {
                    src: '',
                    titulo: '',
                    subtitulo: '',
                    descripcion: ''
                }
            };
        },
        methods: {
            mostrar_noticia : function(noticia){
                console.log(noticia);
                this.noticia = noticia;
            }
        },

        mounted() {
            console.log("Example component mounted");
            this.noticia = this.noticias[1];
        }
    };
</script>

<style>
    .SecondSection{
        margin: 10px;
    }
    .ThirdSection{
        margin-top: 30px;
    }
    .noticiasSection{
        margin: 0px;
    }

    .Cuerpo{
        margin-top: 78px;
        margin-bottom: 300px;
    }
    .noticiaimg{
        height: 200px;
        width: 100%;
    }
    .noticiaprincipal{
        width: 100%;
        height: 300px;
    }
    @media (max-width: 900px) {
        .Cuerpo{
            margin-top: 78px;
            margin-bottom: 320px;
        }
        .noticiaimg{
            height: 200px;
            width: 100%;
        }
        .noticiaprincipal{
            width: 100%;
            height: 150px;
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
    .v-list-item__subtitle, .v-list-item__title {
        flex: 1 1 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: inherit;
    }
</style>
