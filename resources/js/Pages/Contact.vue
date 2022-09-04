<template>
    <div>

         <!-- FIRST CONTACT SECTION -->

        <!-- MENU SUB NAV DISPLAY -->
        <div>
            <Subnav />
        </div>

        
        <div class="bg-gray-700 z-30  w-full h-96 bg-cover bg-center relative">

            <img src="/images/food6.jpg" alt="banner" class="w-full h-96 bg-no-repeat object-cover absolute mix-blend-overlay">

            <div class="z-40 p-6 py-24">

                <!--  MENU TEXT -->
                <div class="z-40">
                    <h1 class="text-4xl lg:text-5xl text-white font-medium text-center  font-sans mt-9">Contact Us</h1>
                </div>

            </div>
        </div>

        <div class="mt-6 px-14">
            <!-- GRID-->
            <div class="grid grid-cols-1 gap-6 md:grid md:grid-cols-2 md:gap-4 container mx-auto justify-items-center">

                <!-- GRID BOX 1 -->
                <div class="w-full p-4">

                    <!-- MAP DIV -->
                    <div>
                        <div class="mapouter flex justify-items-center mt-16 mx-auto">
                            <div class="gmap_canvas"><iframe width="100%" height="350px" id="gmap_canvas"    src="https://maps.google.com/maps?q=2%20Musa%20Yar'%20Adua%20Way,%20New%20Owerri%20460281,%20Owerri&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://fmovies-online.net"></a><br>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GRID BOX 2 -->
                <div class="w-full p-4">
                    <h1 class="mb-12 text-gray-500 font-semibold text-base  md:font-medium md:text-2xl font-sans">DROP US A LINE OR JUST SAY HELLO</h1>

                    <div>

                        <h3 class="mb-3  text-gray-500 text-base font-medium font-sans">We will be Glad to hear from you, Especailly how to serve you better</h3>

                        <form action="" method="post">

                            <div class="md:flex mb-4 md:space-x-4">

                                <div class="mb-4">
                                    <label class="font-sans" for="text">Full Name</label>
                                    <input type="text" name="" id="" class="border-2 border-gray-500 py-2 px-3 w-full md:w-64 rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0">
                                </div>

                                <div class="mb-4">
                                    <label class="font-sans" for="email">E-mail Address</label>
                                    <input type="email" name="" id="" class="border-2 border-gray-500 py-2 px-3 w-full md:w-64 rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0">
                                </div>

                            </div>

                            <div class="mb-4">
                                <label class="font-sans" for="number">Phone</label>
                                <input type="number" name="" id="" class="border-2 border-gray-500 py-2 px-3 w-full md:w-11/12 rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0">
                            </div>

                            <div class="mb-4">
                                <label class="font-sans" for="message">Message</label>
                                <textarea name="" id="" class="border-2 border-gray-500 py-2 px-3 w-full md:w-11/12 rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0" cols="20" rows="8"></textarea>
                            </div>

                            <div class="mb-4">
                                <button type="submit" class=" py-3 px-4 text-white bg-[#800000] hover:bg-[#046ac9] rounded">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
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
        name: 'Menu',
        layout: Layout,

        components: {
            Subnav,
        },
    };
</script>

<style>

/** CONTACT MAP */
.mapouter{
    position:relative;
    text-align:right;
    height:100%;
    width:100%;
}
.gmap_canvas {
    overflow:hidden;
    background:none!important;
    height:100%;
    width:100%;
}

</style>