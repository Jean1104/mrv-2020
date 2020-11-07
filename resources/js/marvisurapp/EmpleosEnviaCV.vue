<template>
    <div>
        <MenuComponent :seccion="'empleos'"/>
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
                    <strong>EMPLEOS</strong>
                </div>
            </v-card>

            <v-card
                color="#e4e4e4"
                class="my-5 pt-0 pb-5 rounded-t-xl"
                flat
            >
                <v-card
                    color="#dd1817"
                    class="my-3 py-1 rounded-t-xl"
                    flat
                >
                    <div
                        class="text-center white--text text-uppercase ma-2 text-h5"
                    >
                        <strong>Trabaja con Nosotros</strong>
                    </div>
                </v-card>
                <div
                    class="white text-center red--text my-5 mx-1 py-2 text-h5"
                >
                    <strong> Envíanos tu Curriculum Vitae </strong>
                </div>
                <div >
                    <v-form
                        ref="form"
                        v-model="form"
                        class="white px-4 pt-6 mx-auto rounded-xl empleoscard"
                        style="text-align: center;"
                    >
                        <v-text-field
                            v-model="nombre"
                            color="#dd1817"
                            label="Apellidos y Nombres"
                            required
                            outlined
                            shaped
                        ></v-text-field>
                        <v-text-field
                            v-model="correo"
                            color="#dd1817"
                            label="Correo Electronico: "
                            :rules="[rules.email]"
                            required
                            outlined
                            shaped
                        ></v-text-field>
                        <v-text-field
                            v-model="edad"
                            color="#dd1817"
                            label="Edad: "
                            required
                            outlined
                            shaped
                        ></v-text-field>
                        <v-text-field
                            v-model="telefono"
                            color="#dd1817"
                            label="Teléfono: "
                            required
                            outlined
                            shaped
                        ></v-text-field>
                        <v-text-field
                            v-model="direccion"
                            color="#dd1817"
                            label="Dirección Actual: "
                            required
                            outlined
                            shaped
                        ></v-text-field>
                        <v-text-field
                            v-model="salario"
                            color="#dd1817"
                            label="Expectativa Salarial: "
                            required
                            outlined
                            shaped
                        ></v-text-field>
                        <v-file-input
                            color="#dd1817"
                            placeholder="Seleccionar archivo"
                            prepend-icon="mdi-paperclip"
                            label="Cargar CV: "
                            :show-size="1000"
                            outlined
                            shaped
                        >
                            <template v-slot:selection="{ index, text }">
                                <v-chip
                                    v-if="index < 2"
                                    color="#585856"
                                    dark
                                    label
                                    small
                                >
                                    {{ text }}
                                </v-chip>
                            </template>
                        </v-file-input>
                    </v-form>
                    <div class="text-center">
                        <v-dialog
                            v-model="dialog"
                            persistent
                            max-width="290"
                        >
                            <template v-slot:activator="{ on, attrs }">
                            <v-btn
                                color="#dd1817"
                                class="white--text pa-3 ma-5 text-h6 rounded-lg"
                                width="250px"
                                v-bind="attrs"
                                v-on="on"
                                x-large
                                dark
                            >
                                <strong> Postular </strong>
                            </v-btn>
                            </template>
                            <v-card
                                class="pa-2"
                            >
                                <v-alert
                                    dense
                                    text
                                    type="success"
                                    class="my-3 mx-1 text-center"
                                    outlined
                                >
                                    Su <strong> CV</strong> fue enviado.
                                </v-alert>
                                <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn
                                    color="#dd1817"
                                    text
                                    @click="dialog = false"
                                    outlined
                                >
                                    Cancelar
                                </v-btn>
                                <v-btn
                                    color="#dd1817"
                                    text
                                    @click="dialog = false"
                                    href="../empleos"
                                >
                                    Aceptar
                                </v-btn>
                                </v-card-actions>
                            </v-card>
                        </v-dialog>
                    </div>
                </div>
            </v-card>
            <v-card
                hide-delimiters
                flat
                class="my-7"
            >
                <div>
                    <v-img class="portada" src="https://cdn.vuetifyjs.com/images/carousel/sky.jpg"></v-img>
                </div>
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
                form:'',
                nombre: '',
                telefono: '',
                correo: '',
                edad: '',
                direccion:'',
                salario: '',
                files: [],
                rules: {
                    email: v => !!(v || '').match(/@/) || 'Se requiere un Correo Electronico Valido',
                    required: v => !!v || 'Se requiere ',
                },
                dialog: false,
            }
        },

    }
</script>

<style lang="scss" scoped>
    .Cuerpo{
        margin-top: 92px;
        margin-bottom: 290px;
    }
    .empleoscard{
        text-align: center;
        margin-right: 20px;
        margin-left: 20px;
        width: 60%;
    }
    .portada{
        width: 100%;
        height: 300px;
    }
    @media (max-width: 900px) {
        .Cuerpo{
            margin-top: 82px;
            margin-bottom: 343px;
        }
        .empleoscard{
            text-align: center;
            margin-right: 10px;
            margin-left: 10px;
            width: 94%;
        }
    }

</style>
