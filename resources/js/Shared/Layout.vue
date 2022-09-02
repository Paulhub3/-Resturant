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
import Footer from './Footer.vue';
import Nav from './Nav.vue';
</script>

<style>

</style>
