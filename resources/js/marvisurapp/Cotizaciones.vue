<template>
    <div>
        <MenuComponent :seccion="'cotizaciones'" />
        <div class="Cuerpo">
            <v-card color="#ffe3b2" style="border-radius: 0;" class="mt-3" flat>
                <div
                    class="text-center red--text font-italic"
                    style="padding: 7px; font-size: 28px;"
                >
                    <strong>COTIZACIÓN</strong>
                </div>
            </v-card>
            <v-card
                color="#efefef"
                class="mt-5 pt-0 rounded-t-xl"
                flat
                ref="form2"
            >
                <v-card color="#d20817" class="my-3 py-1 rounded-t-xl" flat>
                    <div
                        class="text-center white--text text-uppercase ma-2 text-h5"
                    >
                        <strong>Realiza tu Cotización</strong>
                    </div>
                </v-card>
                <div class="white text-center black--text my-2 text-h6">
                    <strong
                        >A partir de 8 artículos o cargas a mayores a 8
                        toneladas</strong
                    >
                </div>
                <v-form ref="form" v-model="validate">
                    <v-row class="pa-2 ">
                        <v-col md="7" cols="12">
                            <div class="white pa-4 pt-6 mx-1 rounded-xl">
                                <v-row>
                                    <v-col cols="12" md="12" class="py-0 my-0">
                                        <v-text-field
                                            ref="nombre"
                                            v-model="datos.nombre"
                                            color="#d20817"
                                            label="Nombre o Razón Social: "
                                            :rules="[rules.required]"
                                            required
                                            outlined
                                            clearable
                                            shaped
                                        ></v-text-field>
                                        <v-text-field
                                            ref="telefono"
                                            v-model="datos.telefono"
                                            color="#d20817"
                                            label="Teléfono: "
                                            :rules="[rules.required]"
                                            required
                                            outlined
                                            clearable
                                            shaped
                                        ></v-text-field>
                                        <v-text-field
                                            ref="correo"
                                            v-model="datos.correo"
                                            color="#d20817"
                                            label="Correo Electronico: "
                                            :rules="[rules.email]"
                                            required
                                            outlined
                                            clearable
                                            shaped
                                        ></v-text-field>
                                        <v-autocomplete
                                            ref="origen"
                                            v-model="datos.origen"
                                            color="#d20817"
                                            :items="sucursales"
                                            :rules="[rules.required]"
                                            label="Origen: "
                                            item-text="titulo"
                                            item-value="titulo"
                                            required
                                            outlined
                                            clearable
                                            shaped
                                        ></v-autocomplete>
                                        <v-autocomplete
                                            ref="destino"
                                            v-model="datos.destino"
                                            color="#d20817"
                                            label="Destino: "
                                            :items="sucursales"
                                            :rules="[rules.required]"
                                            item-text="titulo"
                                            item-value="titulo"
                                            required
                                            outlined
                                            clearable
                                            shaped
                                        ></v-autocomplete>
                                        <v-text-field
                                            ref="cantidad"
                                            v-model="datos.cantidad"
                                            color="#d20817"
                                            label="Cantidad: "
                                            :rules="[rules.required]"
                                            required
                                            outlined
                                            clearable
                                            shaped
                                        ></v-text-field>
                                        <v-text-field
                                            ref="unidad"
                                            v-model="datos.unidad"
                                            color="#d20817"
                                            label="Unidad: "
                                            :rules="[rules.required]"
                                            required
                                            outlined
                                            clearable
                                            shaped
                                        ></v-text-field>
                                    </v-col>
                                    <v-col md="6" cols="12" class="py-0 my-0">
                                        <v-text-field
                                            ref="peso"
                                            v-model="datos.peso"
                                            color="#d20817"
                                            label="Peso: "
                                            :rules="[rules.required]"
                                            suffix="Kg"
                                            required
                                            outlined
                                            clearable
                                            shaped
                                        ></v-text-field>
                                        <v-text-field
                                            ref="largo"
                                            v-model="datos.largo"
                                            color="#d20817"
                                            label="Largo: "
                                            :rules="[rules.required]"
                                            suffix="mts"
                                            required
                                            outlined
                                            clearable
                                            shaped
                                        ></v-text-field>
                                    </v-col>
                                    <v-col md="6" cols="12" class="py-0 my-0">
                                        <v-text-field
                                            ref="ancho"
                                            v-model="datos.ancho"
                                            color="#d20817"
                                            label="Ancho: "
                                            :rules="[rules.required]"
                                            suffix="mts"
                                            required
                                            outlined
                                            clearable
                                            shaped
                                        ></v-text-field>
                                        <v-text-field
                                            ref="alto"
                                            v-model="datos.alto"
                                            color="#d20817"
                                            label="Alto: "
                                            :rules="[rules.required]"
                                            suffix="mts"
                                            required
                                            outlined
                                            clearable
                                            shaped
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                            </div>
                        </v-col>
                        <v-col md="5" cols="12">
                            <div class="white pa-4 pt-6 mx-1 rounded-xl">
                                <v-card
                                    color="white"
                                    class="rounded-xl"
                                    style="text-align: center;"
                                >
                                    <img
                                        class="caja pa-5"
                                        src="/images/caja.png"
                                    />
                                </v-card>
                                <div class="py-5 px-4 mt-4 white rounded-xl">
                                    <v-textarea
                                        ref="descripcion"
                                        v-model="datos.descripcion"
                                        label="Descripción del envío: "
                                        clear-icon="mdi-close-circle"
                                        color="#d20817"
                                        rows="8"
                                        :rules="[rules.required]"
                                        required
                                        clearable
                                        outlined
                                        shaped
                                    ></v-textarea>
                                    <v-file-input
                                        v-model="datos.imagen"
                                        color="#d20817"
                                        accept="image/png, image/jpeg, image/bmp"
                                        placeholder="Seleccionar archivo"
                                        prepend-icon="mdi-camera"
                                        label="Cargar Imagen: "
                                        outlined
                                        clearable
                                        shaped
                                    >
                                        <template
                                            v-slot:selection="{ index, text }"
                                        >
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
                                </div>
                            </div>
                        </v-col>
                    </v-row>
                </v-form>
                <v-row>
                    <v-col cols="12">
                        <div class="text-center">
                            <v-btn
                                color="#d20817"
                                class="white--text pa-3 ma-2 text-h6 rounded-lg"
                                width="250px"
                                @click="enviar()"
                                x-large
                                dark
                            >
                                <strong> Enviar Solicitud </strong>
                            </v-btn>
                        </div>
                        <v-dialog v-model="dialog" persistent max-width="400">
                            <v-card class="pa-2">
                                <v-alert
                                    prominent
                                    type="success"
                                    class="my-0 mx-0 text-center"
                                    outlined
                                    text
                                >
                                    <v-row align="center">
                                        <v-col class="grow">
                                            Su <strong> Cotización</strong> fue
                                            enviada.
                                        </v-col>
                                        <v-col class="shrink">
                                            <v-btn
                                                color="#d20817"
                                                text
                                                @click="dialog = false"
                                                href="../cotizaciones"
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
                    </v-col>
                </v-row>
            </v-card>
        </div>
        <FooterComponent />
    </div>
</template>

<script>
import MenuComponent from "../components/MenuComponent.vue";
import FooterComponent from "../components/FooterComponent.vue";
import axios from "axios";

export default {
    name: "cotizaciones",
    components: {
        MenuComponent,
        FooterComponent
    },
    data() {
        return {
            validate: true,
            datos: {
                nombre: "",
                telefono: "",
                correo: "",
                origen: "",
                destino: "",
                cantidad: "",
                unidad: "",
                peso: "",
                largo: "",
                ancho: "",
                alto: "",
                descripcion: "",
                imagen: null
            },

            rules: {
                email: v =>
                    !!(v || "").match(/@/) ||
                    "Se requiere un Correo Electronico Valido",
                required: v => !!v || "Se requiere "
            },
            sucursales: [
                { id: 1, titulo: "Arequipa - La Joya" },
                { id: 2, titulo: "Arequipa" },
                { id: 3, titulo: "Lima" }
            ],
            dialog: false
        };
    },
    methods: {
        enviar: function() {
            let data = new FormData();

            data.append('nombre', this.datos.nombre);
            data.append('telefono', this.datos.telefono);
            data.append('correo', this.datos.correo);
            data.append('origen', this.datos.origen);
            data.append('destino', this.datos.destino);
            data.append('cantidad', this.datos.cantidad);
            data.append('unidad', this.datos.unidad);
            data.append('peso', this.datos.peso);
            data.append('largo', this.datos.largo);
            data.append('ancho', this.datos.ancho);
            data.append('alto', this.datos.alto);
            data.append('descripcion', this.datos.descripcion);
            data.append('imagen', this.datos.imagen);

            if (this.$refs.form.validate()) {
                axios.post("/api/cotizacion", data).then(res => {
                    this.dialog = true;
                });
            }
        }
    },
    mounted: function() {
        axios.get("/api/gettitulosucursal").then(res => {
            //console.log(res.data);
            this.sucursales = res.data;
        });
    }
};
</script>

<style lang="scss" scoped>
.Cuerpo {
    margin-top: 92px;
    margin-bottom: 290px;
}
.caja {
    height: 360px;
    width: 320px;
}
@media (max-width: 900px) {
    .Cuerpo {
        margin-top: 82px;
        margin-bottom: 343px;
    }
    .caja {
        height: 370px;
        width: 315px;
    }
}
</style>
