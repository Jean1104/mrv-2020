<template>
    <div>
        <MenuComponent :seccion="'rastrea_tu_envio'"/>
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
                    <strong>RASTREA TU ENVÍO</strong>
                </div>
            </v-card>
            <v-card
                color="#efefef"
                class="my-5 pt-0 pb-5"
                flat
            >
                <v-row>
                    <v-col
                        cols="12"
                        md="8"
                    >
                    </v-col>
                    <v-col
                        cols="12"
                        md="4"
                    >
                        <div style="text-align: center;">
                            <img class="empleoslogo" src="/images/munequito.png">
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
    export default {
        name: 'rastrea_tu_envio',
        components: {
            MenuComponent,
            FooterComponent,
        },
        data () {
            return{
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
    .empleoslogo{
        width: 350px;
        height: 362px;
    }
</style>
