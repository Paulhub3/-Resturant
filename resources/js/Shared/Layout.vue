<template>
    <main>
    <!-- Navbar -->
        <Nav />

    <!-- Slot for main article -->
        <article>
            <slot />
        </article>

    <!-- Footer -->
    </main>
</template>

<script setup>
import Nav from './Nav.vue';
</script>

<style>

</style>
