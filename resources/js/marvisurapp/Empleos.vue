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
                    <strong>OPORTUNIDAD LABORAL</strong>
                </div>
            </v-card>
            <v-card
                color="#d20817"
                class="mt-5 py-1 rounded-t-xl"
                flat
            >
                <div
                    class="text-center white--text text-uppercase ma-2 text-h5"
                >
                    <strong>Trabaja con Nosotros</strong>
                </div>
            </v-card>
            <v-card
                flat
                class="mb-7 mt-0"
            >
                <img class="portada" src="/images/web-marvisur-empleos.png">

            </v-card>
            <v-card
                color="#efefef"
                class="my-3 pt-1 rounded-0"
                flat
            >
                <div
                    class="white text-center black--text text-uppercase my-5 mx-1 py-2 text-h5"
                >
                    Ofertas de Empleo Disponible
                </div>

                <v-row>
                    <v-col
                        md="8"
                        cols="12"
                    >
                        <v-card
                            class="mx-4 my-2 rounded-xl"
                            flat
                        >
                            <v-data-table
                                :headers="headers"
                                :items="empleos"
                                :page.sync="page"
                                :items-per-page="itemsPerPage"
                                hide-default-footer
                                @page-count="pageCount = $event"
                                class="tablacenter"
                                style="text-transform: uppercase;"

                            >
                                <template v-slot:[`item.action`]="{item}">
                                    <v-icon
                                        color="#d20817"
                                        class="red--text pa-1 ma-1 text-uppercase rounded-lg"
                                        dark
                                        @click="postular(item)"
                                    >
                                        mdi-folder-plus
                                    </v-icon>

                                </template>
                            </v-data-table>

                            <div class="text-center py-3">
                                <v-pagination
                                    color="#d20817"
                                    v-model="page"
                                    :length="pageCount"
                                    circle
                                >
                                </v-pagination>
                            </div>
                            <v-dialog
                                v-model="enviarcv"
                                max-width="700px"
                                persistent
                                class="pa-3"
                            >
                                <div
                                    class="enviacv pt-2 pb-2 rounded-xl"
                                    flat
                                >
                                    <div
                                        class="text-center white--text my-3 py-0 text-h5 rounded-0"
                                        style="background-color: #d20817;"
                                    >
                                        <v-row>
                                            <v-col
                                                cols="10"
                                                class="py-2"
                                            >
                                                <strong> Envíanos tu Curriculum Vitae </strong>
                                            </v-col>
                                            <v-col
                                                cols="1"
                                                class="mr-1 py-2"
                                            >
                                                <v-btn
                                                    class="cerrar"
                                                    icon
                                                    dark
                                                    @click="enviarcv = false"
                                                >
                                                    <v-icon>mdi-close-circle</v-icon>
                                                </v-btn>
                                            </v-col>
                                        </v-row>
                                    </div>
                                    <v-card
                                        class="pa-2 mx-3"
                                        max-width="100%"
                                        shaped
                                        color="grey lighten-4"
                                    >
                                        <v-simple-table
                                            class="text-uppercase"
                                        >
                                            <thead>
                                                <tr>
                                                <th class="red--text text-center">
                                                    Puesto
                                                </th>
                                                <th class="red--text text-center">
                                                    Código
                                                </th>
                                                <th class="red--text text-center">
                                                    Sucursal
                                                </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr
                                                    class="text-center"
                                                    style="text-transform: uppercase;"
                                                >
                                                    <td> {{empleo.puesto}} </td>
                                                    <td> {{empleo.codigo}} </td>
                                                    <td> {{empleo.sucursal}} </td>
                                                </tr>
                                            </tbody>
                                        </v-simple-table>
                                    </v-card>
                                    <div class="ma-4">
                                        <v-form
                                            ref="form"
                                            v-model="validate"
                                            class="white px-4 pt-6 rounded-xl empleoscard"
                                            style="text-align: center;"
                                        >
                                            <v-text-field
                                                ref="nombre"
                                                v-model="nombre"
                                                color="#d20817"
                                                label="Apellidos y Nombres"
                                                :rules="[rules.required]"
                                                required
                                                outlined
                                                clearable
                                                shaped
                                            ></v-text-field>
                                            <v-text-field
                                                ref="correo"
                                                v-model="correo"
                                                color="#d20817"
                                                label="Correo Electronico: "
                                                :rules="[rules.email]"
                                                required
                                                outlined
                                                clearable
                                                shaped
                                            ></v-text-field>
                                            <v-row>
                                                <v-col
                                                    cols="12"
                                                    md="6"
                                                    class="ma-0"
                                                >
                                                    <v-text-field
                                                        ref="edad"
                                                        v-model="edad"
                                                        color="#d20817"
                                                        label="Edad: "
                                                        type="number"
                                                        :rules="[rules.required]"
                                                        min='0'
                                                        required
                                                        outlined
                                                        clearable
                                                        shaped
                                                    ></v-text-field>
                                                </v-col>
                                                <v-col
                                                    cols="12"
                                                    md="6"
                                                >
                                                    <v-text-field
                                                        ref="telefono"
                                                        v-model="telefono"
                                                        color="#d20817"
                                                        label="Teléfono: "
                                                        :rules="[rules.required]"
                                                        required
                                                        outlined
                                                        clearable
                                                        shaped
                                                    ></v-text-field>
                                                </v-col>
                                            </v-row>
                                            <v-text-field
                                                ref="direccion"
                                                v-model="direccion"
                                                color="#d20817"
                                                label="Dirección Actual: "
                                                :rules="[rules.required]"
                                                required
                                                outlined
                                                clearable
                                                shaped
                                            ></v-text-field>
                                            <v-text-field
                                                ref="salario"
                                                v-model="salario"
                                                color="#d20817"
                                                label="Expectativa Salarial: "
                                                :rules="[rules.required]"
                                                type="number"
                                                min='0'
                                                required
                                                outlined
                                                clearable
                                                shaped
                                            ></v-text-field>
                                            <v-file-input
                                                v-model="files"
                                                color="#d20817"
                                                placeholder="Seleccionar archivo"
                                                prepend-icon="mdi-paperclip"
                                                label="Cargar CV: "
                                                :rules="[rules.required]"
                                                :show-size="1000"
                                                outlined
                                                clearable
                                                shaped
                                            >
                                                <template v-slot:selection="{ index, text }">
                                                    <v-chip
                                                        v-if="index < 2"
                                                        color="#d20817"
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
                                            <v-btn
                                                color="#d20817"
                                                class="white--text pa-3 ma-5 text-h6 rounded-lg"
                                                width="250px"
                                                x-large
                                                dark
                                                @click="enviar()"
                                            >
                                                <strong> Postular </strong>
                                            </v-btn>
                                            <v-dialog
                                                v-model="enviado"
                                                persistent
                                                max-width="400"
                                            >
                                                <v-card
                                                    class="pa-2"
                                                >
                                                    <v-alert
                                                        prominent
                                                        type="success"
                                                        class="my-0 mx-0 text-center"
                                                        outlined
                                                        text
                                                    >
                                                        <v-row align="center">
                                                            <v-col
                                                                class="grow"
                                                            >
                                                                Su <strong> CV</strong> fue enviado.
                                                            </v-col>
                                                            <v-col
                                                                class="shrink"
                                                            >
                                                                <v-btn
                                                                    color="#d20817"
                                                                    text
                                                                    @click="enviado = false"
                                                                    href="../empleos"
                                                                    outlined
                                                                    class="text-center"
                                                                >
                                                                    Aceptar
                                                                </v-btn>
                                                            </v-col>
                                                        </v-row>
                                                    </v-alert>
                                                </v-card>
                                            </v-dialog>
                                        </div>
                                    </div>
                                </div>
                            </v-dialog>
                        </v-card>
                    </v-col>
                    <v-col
                        md="4"
                        cols="12"
                        class="pb-0"
                    >
                        <div style="text-align: center;">
                            <img class="empleoslogo" src="/images/munequito.png">
                        </div>
                    </v-col>
                </v-row>
                <div
                    style="background-color: #d20817;"
                    class="text-center white--text text-uppercase py-2 text-h5 font-italic"
                >
                    ¿No encuentras puesto para tu especialidad?
                </div>
            </v-card>
            <!--<v-row>
                <v-col cols="12">
                    <div class="text-center">
                        <v-btn
                            color="#d20817"
                            class="white--text pa-3 ma-2 text-h6 text-uppercase rounded-lg"
                            width="250px"
                            href="/empleos/envia_tu_cv"
                            x-large
                            dark
                        >
                            <strong> Envíanos Tu CV</strong>
                        </v-btn>
                    </div>
                </v-col>
            </v-row>-->
        </div>
        <FooterComponent />
    </div>
</template>

<script>
    import MenuComponent from '../components/MenuComponent.vue';
    import FooterComponent from '../components/FooterComponent.vue';

    import axios from 'axios';

    export default {
        name: 'empleos',
        components: {
            MenuComponent,
            FooterComponent,
        },
        data () {
            return{
                page: 1,
                pageCount: 0,
                itemsPerPage: 5,
                enviarcv: false,
                validate: true,
                nombre: '',
                telefono: '',
                correo: '',
                edad: '',
                direccion:'',
                salario: '',
                files: null,
                rules: {
                    email: v => !!(v || '').match(/@/) || 'Se requiere un Correo Electronico Valido',
                    required: v => !!v || 'Se requiere ',
                },
                enviado: false,
                headers: [
                    {
                        text: 'Codigo',
                        align: 'start',
                        value: 'codigo',
                    },
                    {
                        text: 'Sucursal',
                        value: 'sucursal',
                    },
                    {
                        text: 'Puesto',
                        value: 'puesto',
                    },
                    {
                        text: 'Envianos tu CV',
                        value: 'action',
                    }
                ],
                empleos:[
                    {
                        puesto: 'empleado',
                        codigo: '21345',
                        sucursal: 'Arequipa',

                    },
                    {
                        puesto: 'administrados',
                        codigo: '21346',
                        sucursal: 'Arequipa: Jacobo Hunter',

                    },
                ],
                links: [
                    {url:'./empleos/envia_tu_cv', name:'EMPLEOS'},
                ],
                empleo: [{
                    puesto: 'empleado',
                    codigo: '21345',
                    sucursal: 'Arequipa',

                }],
            }
        },
        methods: {
            postular : function(item) {
                this.enviarcv = true;
                this.empleo.puesto = item.puesto;
                this.empleo.codigo = item.codigo;
                this.empleo.sucursal = item.sucursal;
            },

            enviar : function() {
                let data = new FormData();

                data.append('codigo', this.empleo.codigo);
                data.append('nombre', this.nombre);
                data.append('telefono', this.telefono);
                data.append('correo', this.correo);
                data.append('edad', this.edad);
                data.append('direccion', this.direccion);
                data.append('salario', this.salario);
                data.append('files', this.files);

                if(this.$refs.form.validate()) {
                    axios.post('/api/postular_empleo', data).then( res => {
                        this.enviado = true;
                    })
                }
            },
        },
        mounted: function()
        {
            axios.get('/api/empleos').then( res => {
                this.empleos = res.data.res;
            })
        }

    }
</script>

<style lang="scss" scoped>
    .Cuerpo{
        margin-top: 92px;
        margin-bottom: 290px;
    }
    .empleoslogo{
        width: 350px;
        height: 362px;
    }
    @media (max-width: 900px) {
        .Cuerpo{
            margin-top: 82px;
            margin-bottom: 343px;
        }
        .empleoslogo{
            width: 220px;
            height: 270px;
        }
    }
    .portada{
        width: 100%;
        height: 400px;
    }
    .cuadroProvincia{
        background-color: white;
        border: 2px solid #d20817;
        height: 110px;
    }
    .enviacv {
        background-color: #f1f1f1;
    }
    .cerrar {
        text-align: left;
    }
    .tablacenter{
        text-align: center;
    }
    .v-data-table>.v-data-table__wrapper>table>tbody>tr>td, .v-data-table>.v-data-table__wrapper>table>tfoot>tr>td, .v-data-table>.v-data-table__wrapper>table>thead>tr>td {
        font-size: .875rem;
        height: 48px;
        text-transform: uppercase;
    }
</style>
