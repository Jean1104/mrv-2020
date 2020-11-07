<template>
    <v-app>
        <v-main>
            <transition name="slide-fade" mode="out-in">
                <router-view :key="$route.fullPath"></router-view>
            </transition>
        </v-main>
    </v-app>
</template>

<script>

export default {
    name: "App",
    props: {
        source: String
    }
};
</script>

<style scoped></style>
