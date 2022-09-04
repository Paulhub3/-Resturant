<template>
    <main>
        <!-- Navbar -->
        <Nav />

        <!-- Slot for main article -->
        <article>
            <slot />
        </article>

        <!-- Footer -->
        <Footer />
    </main>
</template>

<script setup>
import Nav from './Nav.vue';
import Footer from './Footer.vue';
</script>

<style>

</style>
