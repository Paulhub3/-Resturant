<template>
    <div>

        <!-- FIRST MENU SECTION -->

        <!-- MENU SUB NAV DISPLAY -->
        <div>
            <Subnav />
        </div>

        <div class="bg-gray-700 z-30  w-full h-96 bg-cover bg-center relative">

            <img src="/images/food5.jpg" alt="banner" class="w-full h-96 bg-no-repeat object-cover absolute mix-blend-overlay">

            <div class="z-40 p-6 py-24">

                <!--  MENU TEXT -->
                <div class="z-40">
                    <h1 class="text-4xl lg:text-5xl text-white font-medium text-center  font-sans mt-9">OUR MENU</h1>
                </div>

            </div>
        </div>

        <!-- SECOND MENU SECTION -->
        <div>
            <Submenu />
        </div>
        
    </div>
</template>

<script>
    // IMPORT SHARED LAYOUT
    import Layout from '../Shared/Layout.vue';

    //IMPORT SHARED DISPLAY NAV
    import Subnav from '../Shared/Subnav.vue';

    //IMPORT SHARED MENU
    import Submenu from '../Shared/Submenu.vue';

    export default {
        name: 'Menu',
        layout: Layout,

        components: {
            Subnav,
            Submenu,
        },
    };
</script>



