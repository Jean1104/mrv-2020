<template>
    <div>
        <MenuComponent :seccion="'preguntas_frecuentes'"/>
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
                    <strong>PREGUNTAS FRECUENTES</strong>
                </div>
            </v-card>
            <v-card
                color="#efefef"
                class="my-5 mx-0 pa-3"
                flat
            >
                <v-timeline
                    dense
                    class="mr-4"
                >
                    <v-timeline-item
                        color="#d20817"
                        icon="mdi-star"
                        fill-dot
                    >
                        <v-card
                            class="elevation-2"
                            shaped
                            fixed
                            temporary
                        >
                            <v-card-title
                                class="pregunta py-2 white--text "
                            >
                                ¿CUÁL ES SU COBERTURA?
                            </v-card-title>
                            <v-card-text class="white blue-grey--text pa-3 text-justify">
                                Estamos ubicados en 22 departamentos del Perú, contando con 90 sucursales,
                                distribuidas estratégicamente a nivel nacional, nos encontramos en proceso
                                de apertura de nuevas agencias. <br>
                                <strong> ¿Qué documentación necesito para realizar un envió?</strong>
                                    <v-list>
                                        <v-list-item class="my-0">
                                            <v-list-item-icon class="mr-3">
                                                <v-icon color="#d20817"> mdi-checkbox-marked-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content class="py-2">
                                                <v-list-item-title class="font-italic blue-grey--text text-body-2">
                                                    <strong> Para enviar encomiendas, sobres y cosas usadas necesitas:</strong> <br>
                                                    Usted necesita DNI en físico y una copia del mismo.
                                                </v-list-item-title>
                                            </v-list-item-content>
                                        </v-list-item>
                                        <v-list-item class="my-0">
                                            <v-list-item-icon class="mr-3">
                                                <v-icon color="#d20817" > mdi-checkbox-marked-circle</v-icon>
                                            </v-list-item-icon>

                                            <v-list-item-content class="py-2">
                                                <v-list-item-title class="font-italic blue-grey--text text-body-2">
                                                    <strong> Para enviar cosas nuevas: </strong> <br>
                                                    Usted necesita la documentación de compra (boleta o factura), y/o la
                                                    guía de remisión que sustenten el traslado de su mercadería.
                                                </v-list-item-title>
                                            </v-list-item-content>
                                        </v-list-item>
                                        <v-list-item class="my-0">
                                            <v-list-item-icon class="mr-3">
                                                <v-icon color="#d20817" > mdi-checkbox-marked-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content class="py-2">
                                                <v-list-item-title class="font-italic blue-grey--text text-body-2">
                                                    <strong> Mudanzas: </strong><br>
                                                    Usted necesita presentar una declaración jurada detallada de los
                                                    bienes que está enviando, DNI en físico y una copia del mismo.
                                                </v-list-item-title>
                                            </v-list-item-content>
                                        </v-list-item>
                                    </v-list>
                                <strong> ¿Con que modalidades de pago cuento?</strong>
                                    <v-list>
                                        <v-list-item class="my-0" style="min-height: 40px;">
                                            <v-list-item-icon class="mr-3 mb-0 mt-2">
                                                <v-icon color="#d20817"> mdi-checkbox-marked-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content class="py-0">
                                                <v-list-item-title class="blue-grey--text text-body-2">
                                                    Al contado: Se cancela el monto en su totalidad.
                                                </v-list-item-title>
                                            </v-list-item-content>
                                        </v-list-item>
                                        <v-list-item class="my-0" style="min-height: 40px;">
                                            <v-list-item-icon class="mr-3 mb-0 mt-2">
                                                <v-icon color="#d20817"> mdi-checkbox-marked-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content class="py-0">
                                                <v-list-item-title class="blue-grey--text text-body-2">
                                                    Pago en destino: La cancelación se realiza cuando recibe su mercadería.
                                                </v-list-item-title>
                                            </v-list-item-content>
                                        </v-list-item>
                                        <v-list-item class="my-0"  style="min-height: 40px;">
                                            <v-list-item-icon class="mr-3 mb-0 mt-2">
                                                <v-icon color="#d20817"> mdi-checkbox-marked-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content class="py-0">
                                                <v-list-item-title class="blue-grey--text text-body-2">
                                                    Pago de retorno de cargos.
                                                </v-list-item-title>
                                            </v-list-item-content>
                                        </v-list-item>
                                    </v-list>
                                <strong> ¿Realizan el servicio de retorno de cargo? </strong>
                                    <v-list>
                                        <v-list-item class="my-0">
                                            <v-list-item-icon class="mr-3">
                                                <v-icon color="#d20817"> mdi-checkbox-marked-circle</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content class="py-2">
                                                <v-list-item-title class="blue-grey--text text-body-2">
                                                    Si, AREQUIPA EXPRESO MARVISUR garantiza el retorno al cliente de cargos
                                                    adjuntos o guías de remisión debidamente sellados y firmados, pero con
                                                    un costo adicional.
                                                </v-list-item-title>
                                            </v-list-item-content>
                                        </v-list-item>
                                    </v-list>
                            </v-card-text>
                        </v-card>
                    </v-timeline-item>
                    <v-timeline-item
                        color="#d20817"
                        icon="mdi-book-variant"
                        fill-dot
                    >
                        <v-card
                            class="elevation-2"
                            shaped
                        >
                            <v-card-title
                                class="pregunta py-2 white--text "
                            >
                                ¿QUÉ DOCUMENTOS NECESITO PARA RECOGER MI MERCADERÍA?
                            </v-card-title>

                            <v-card-text class="white blue-grey--text pa-3">
                                <strong> Persona Natural: </strong>
                                Deberá presentar su DNI original y dejar una copia del mismo. <br>
                                <strong> Persona jurídica: </strong> <br>
                                <v-list>
                                    <v-list-item class="my-0" style="min-height: 40px;">
                                        <v-list-item-icon class="mr-3 mb-0 mt-2">
                                            <v-icon color="#d20817"> mdi-checkbox-marked-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content class="py-2">
                                            <v-list-item-title class="blue-grey--text text-body-2">
                                                En caso la guía no tenga atención a una persona Natural, se entregará
                                                únicamente al representante legal.
                                            </v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                    <v-list-item class="my-0" style="min-height: 40px;">
                                            <v-list-item-icon class="mr-3 mb-0 mt-2">
                                            <v-icon color="#d20817" > mdi-checkbox-marked-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content class="py-2">
                                            <v-list-item-title class="blue-grey--text text-body-2">
                                                En caso la encomienda sea recogida por un tercero se debe presentar carta
                                                una parta poder membretada y legalizada (Incluyendo el N° de Guía, firma,
                                                huella digital y copia del DNI del destinatario).
                                            </v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </v-list>
                                Solo se aplica para envíos destinados para entrega en agencia (oficina).
                            </v-card-text>
                        </v-card>
                    </v-timeline-item>
                    <v-timeline-item
                        color="#d20817"
                        icon="mdi-airballoon"
                        fill-dot
                    >
                        <v-card
                            class="elevation-2"
                            shaped
                        >
                            <v-card-title
                                class="pregunta py-2 white--text "
                            >
                                ¿CÓMO HACER UN CAMBIO DE DESTINO Y CONSIGNADO?
                            </v-card-title>

                            <v-card-text class="white blue-grey--text pa-3">
                                Si el envió es realizado por una <strong> PERSONA NATURAL</strong>
                                <v-list>
                                    <v-list-item class="my-0" style="min-height: 40px;">
                                        <v-list-item-icon class="mr-3 mb-0 mt-2">
                                            <v-icon color="#d20817"> mdi-checkbox-marked-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content class="py-2">
                                            <v-list-item-title class="blue-grey--text text-body-2">
                                                GUIA DE REMISION TRANSPORTISTA MARVISUR (COPIA DE REMITENTE).
                                            </v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                    <v-list-item class="my-0" style="min-height: 40px;">
                                        <v-list-item-icon class="mr-3 mb-0 mt-2">
                                            <v-icon color="#d20817" > mdi-checkbox-marked-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content class="py-2">
                                            <v-list-item-title class="blue-grey--text text-body-2">
                                                DNI FISICO Y COPIA.
                                            </v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </v-list>
                                Si el envió es realizado por una <strong>EMPRESA</strong>
                                <v-list>
                                    <v-list-item class="my-0" style="min-height: 40px;">
                                        <v-list-item-icon class="mr-3 mb-0 mt-2">
                                            <v-icon color="#d20817"> mdi-checkbox-marked-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content class="py-2">
                                            <v-list-item-title class="blue-grey--text text-body-2">
                                                GUIA DE REMISION TRANSPORTISTA MARVISUR (copia de remitente).
                                            </v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                    <v-list-item class="my-0" style="min-height: 40px;">
                                        <v-list-item-icon class="mr-3 mb-0 mt-2">
                                            <v-icon color="#d20817" > mdi-checkbox-marked-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content class="py-2">
                                            <v-list-item-title class="blue-grey--text text-body-2">
                                                CARTA DE AUTORIZACION MEMBRETADA (firma y huella del representante legal).
                                            </v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                    <v-list-item class="my-0" style="min-height: 40px;">
                                        <v-list-item-icon class="mr-3 mb-0 mt-2">
                                            <v-icon color="#d20817" > mdi-checkbox-marked-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content class="py-2">
                                            <v-list-item-title class="blue-grey--text text-body-2">
                                                COPIA DE DNI DEL REPRESENTANTE LEGAL.
                                            </v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </v-list>
                                OBS PARA REALIZAR LOS SIGUIENTES CAMBIOS EL REMITENTE TIENE QUE ACERCARCE PERSONALMENTE
                                A LA AGENCIA MAS CERCANA.
                            </v-card-text>
                        </v-card>
                    </v-timeline-item>
                    <v-timeline-item
                        color="#d20817"
                        icon="mdi-buffer"
                        fill-dot
                    >
                        <v-card
                            class="elevation-2"
                            shaped
                        >
                            <v-card-title
                                class="pregunta py-2 white--text "
                            >
                                ¿PUEDO ENVIAR CUALQUIER TIPO DE MERCADERÍA?
                            </v-card-title>

                            <v-card-text class="white blue-grey--text pa-3">
                                AREQUIPA EXPRESO MARVISUR transporta todo tipo de mercadería, excepto los siguientes:
                                <v-list>
                                    <v-list-item class="my-0" style="min-height: 40px;">
                                        <v-list-item-icon class="mr-3 mb-0 mt-2">
                                            <v-icon color="#d20817"> mdi-checkbox-marked-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content class="py-2">
                                            <v-list-item-title class="blue-grey--text text-body-2">
                                                Alimentos perecibles.
                                            </v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                    <v-list-item class="my-0" style="min-height: 40px;">
                                        <v-list-item-icon class="mr-3 mb-0 mt-2">
                                            <v-icon color="#d20817" > mdi-checkbox-marked-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content class="py-2">
                                            <v-list-item-title class="blue-grey--text text-body-2">
                                                Toda clase de armas, municiones, explosivos o cualquier material
                                                inflamable, corrosivo, tóxico o peligroso, así como sustancias, materiales.
                                            </v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                    <v-list-item class="my-0" style="min-height: 40px;">
                                        <v-list-item-icon class="mr-3 mb-0 mt-2">
                                            <v-icon color="#d20817" > mdi-checkbox-marked-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content class="py-2">
                                            <v-list-item-title class="blue-grey--text text-body-2">
                                                Especies vivas cuya comercialización, tenencia o transporte se encuentre
                                                prohibida o restringida.
                                            </v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                    <v-list-item class="my-0" style="min-height: 40px;">
                                        <v-list-item-icon class="mr-3 mb-0 mt-2">
                                            <v-icon color="#d20817" > mdi-checkbox-marked-circle</v-icon>
                                        </v-list-item-icon>
                                        <v-list-item-content class="py-2">
                                            <v-list-item-title class="blue-grey--text text-body-2">
                                                Bienes culturales, muebles, obras contemporáneas de patrimonio cultural.
                                            </v-list-item-title>
                                        </v-list-item-content>
                                    </v-list-item>
                                </v-list>
                                El cliente que entrega productos con las características antes mencionadas,
                                se hará responsable por cualquier daño causado a AREQUIPA EXPRESO MARVISUR o terceros.
                            </v-card-text>
                        </v-card>
                    </v-timeline-item>
                    <v-timeline-item
                        color="#d20817"
                        icon="mdi-star"
                        fill-dot
                    >
                        <v-card
                            class="elevation-2"
                            shaped
                        >
                            <v-card-title
                                class="pregunta py-2 white--text "
                            >
                                ¿QUÉ SUCEDE SI NO DECLARO MI MERCADERÍA VALIOSA?
                            </v-card-title>

                            <v-card-text class="white blue-grey--text pa-3">
                                En caso de robo o daño de mercadería sólo se reconocerá lo declarado.
                            </v-card-text>
                        </v-card>
                    </v-timeline-item>
                    <v-timeline-item
                        color="#d20817"
                        icon="mdi-star"
                        fill-dot
                    >
                        <v-card
                            class="elevation-2"
                            shaped
                        >
                            <v-card-title
                                class="pregunta py-2 white--text "
                            >
                                ¿ES POSIBLE ENVIAR OBJETOS FRÁGILES?
                            </v-card-title>

                            <v-card-text class="white blue-grey--text pa-3">
                                Sí, pero éstos deben estar correctamente embalados y rotulados con la descripción FRAGIL.

                            </v-card-text>
                        </v-card>
                    </v-timeline-item>
                </v-timeline>
            </v-card>

        </div>
        <FooterComponent />

    </div>
</template>

<script>
    import MenuComponent from '../components/MenuComponent.vue';
    import FooterComponent from '../components/FooterComponent.vue';
    export default {
        name: 'preguntas_frecuentes',
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
    .pregunta{
        background-color: #d20817;
    }
    .v-list-item__subtitle, .v-list-item__title {
        flex: 1 1 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: inherit;
    }
</style>
