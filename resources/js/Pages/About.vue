<template>
    <div>
        <!-- FIRST ABOUT SECTION -->

        <!-- MENU SUB NAV DISPLAY -->
        <div>
            <Subnav />
        </div>

        <div class="bg-gray-700 z-30  w-full h-96 bg-cover bg-center relative">

            <img src="/images/food6.jpg" alt="banner" class="w-full h-96 bg-no-repeat object-cover absolute mix-blend-overlay">

            <div class="z-40 p-6 py-24">

                <!--  MENU TEXT -->
                <div class="z-40">
                    <h1 class="text-4xl lg:text-5xl text-white font-medium text-center  font-sans mt-9">WHO WE ARE</h1>
                </div>

            </div>
        </div>

         <!-- SECOND ABOUT SECTION -->
        <div class="mt-12 py-8 px-8">
            <h4 class="text-xl text-center text-gray-600 font-sans font-medium">Stars creeping one make darkness winged for open set lights night likeness yielding their first above without night yielding second he. Land said life subdue one. Fruit. Stars Waters, good from that great one spirit herb won't brought. Darkness made brought.</h4>
        </div>

         <!-- THIRD ABOUT SECTION -->
        <div class="mt-12">

            <div class="flex flex-col-reverse px-2 mt-2 lg:mt-0 md:flex md:flex-row md:space-x-4 lg:space-x-12 lg:justify-center lg:items-center lg:px-12 lg:py-6">

                <div class="w-full mt-6 md:mt-0">
                    <img src="images/food7.jpg" alt="" class="w-full h-96 rounded-3xl object-cover">
                </div>

                <div class="w-full space-y-6">

                    <h2 id="cover-h4" class="text-3xl lg:text-5xl text-red-700 font-medium">Discover</h2>

                    <h1 class="text-3xl lg:text-6xl font-sans font-medium">OUR STORY</h1>

                    <p class="font-serif font-medium text-sm lg:text-lg">
                        Multiply isn't night sixth under second second open he darkness said beast, without whales every herb sea place light life from divide isn't. Deep give greater. Darkness have fifth third open over itself. Third great make form is waters were. Midst green very.
                    </p>

                </div>
            </div>
       </div>


        <!-- FOURTH ABOUT SECTION -->
        <div class="bg-gray-800 z-30 mt-16  w-full h-96 bg-cover bg-center relative">

            <img src="/images/booked2.jpg" alt="banner" class="w-full h-96 bg-no-repeat object-cover absolute mix-blend-overlay">

            <div class="z-40 p-6 py-24">

                <h1 class="text-3xl lg:text-5xl font-sans mt-12 text-center text-white font-medium">BOOK A TABLE / PRIVATE DINING</h1>

                <!--  MENU TEXT -->
                <div class="z-40 flex justify-center mt-16">
                    <button class="z-40  py-3 px-4 bg-red-700 font-semibold hover:text-red-700 hover:bg-white font-sans hover:border hover:border-red-600 text-white rounded-lg">
                        <Link href="/contact-us">ENQUIRE NOW</Link>
                    </button>
                </div>

            </div>
        </div>

    </div>
</template>

<script>
    // IMPORT SHARED LAYOUT
    import Layout from '../Shared/Layout.vue';

    //IMPORT SHARED DISPLAY NAV
    import Subnav from '../Shared/Subnav.vue';

    export default {
        name: 'About',
        layout: Layout,

        components: {
            Subnav,
        },
    };
</script>
