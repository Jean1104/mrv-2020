<template>
    <div>
        <v-footer
            padless
            absolute
        >
            <v-card
                color="#e4e4e4"
            >
                <v-row
                    justify="center"
                    no-gutters
                >
                    <v-card-title class="logo">
                        <img
                            height="62px"
                            width="220px"
                            src="/images/logo.png"
                        />
                    </v-card-title>
                    <v-card-text class="text-center pb-0">
                        CONECTANDO A TODO EL PERÚ <br>
                        Ubicados en 22 departamentos del Perú, contamos con 83 sucursales,
                        distribuidas estratégicamente a nivel nacional
                    </v-card-text>
                    <v-col
                    >
                        <v-row style="text-align: center;">
                            <!--<v-col md="12" cols="0">
                                <div class="menufijo">
                                    <v-btn
                                        v-for="link in links"
                                        :key="link.name"
                                        color="#3c3c3c"
                                        text
                                        rounded
                                        class="mt-0 pt-0 px-3"
                                        :to="link.url"
                                    >
                                        {{ link.name }}
                                    </v-btn>
                                </div>
                            </v-col>-->
                            <v-col md="12" cols="12" class="py-2">
                                <div class="text-center mb-5">
                                    Siguenos en:
                                    <v-btn
                                        v-for="icon in icons"
                                        :key="icon"
                                        class="light-blue darken-4 mx-3 white--text"
                                        href="https://www.facebook.com/MARVISUROFICIAL/"
                                        icon
                                    >
                                        <v-icon
                                            size="24px"
                                        >
                                            {{ icon }}
                                        </v-icon>
                                    </v-btn>
                                </div>
                            </v-col>
                        </v-row>
                    </v-col>

                    <v-col
                        class="grey lighten-1 py-2 text-center float-right"
                        cols="12"
                    >
                        © Arequipa Expreso Marvisur EIRL
                    </v-col>

                </v-row>
            </v-card>
        </v-footer>
    </div>
</template>

<script>
    export default {
        data: () => ({
            links: [
                {url:'./inicio', name:'INICIO'},
                {url:'../conocenos' ,name:'CONÓCENOS'},
                {url:'../servicios', name:'SERVICIOS'},
                {url:'../sucursales', name:'SUCURSALES'},
                {url:'../cotizaciones', name:'COTIZACIÓN'},
                {url:'../rastrea_tu_envio', name:'RASTREA TU ENVÍO'},
                {url:'../preguntas_frecuentes', name:'PREGUNTAS FRECUENTES'},
                {url:'../empleos', name:'OPORTUNIDAD LABORAL'},
            ],
            icons: [
                'mdi-facebook',
            ],
        }),
    }
</script>

<style lang="scss" scoped>
@media (max-width: 900px) {
    .menufijo {
        display: none;
    }
}
.logo{
    text-align: center;
}
</style>
