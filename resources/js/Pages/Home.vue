<template>

    <div>
        <!-- FIRST HOME SECTION -->

       <div class="bg-red-100 px-2 lg:px-6 py-4">

            <!-- HOME NAV DISPLAY -->
            <Subnav />

            <div class="flex flex-col-reverse px-2 mt-2 lg:mt-0 md:flex md:flex-row lg:space-x-12 lg:justify-center lg:items-center lg:px-12 lg:py-6">

                <div class="space-y-6 mt-4">

                    <h4 id="cover-h4" class="text-3xl lg:text-4xl text-red-700 font-medium">Expensive But The Best</h4>

                    <h1  class="text-3xl lg:text-6xl font-sans font-medium">Deliciousness jumping into the mouth</h1>

                    <p class="font-serif font-medium text-sm lg:text-lg">Together creeping heaven upon third dominion be upon won't darkness rule land behold it created good saw after she'd Our set living. Signs midst dominion creepeth morning</p>

                    <div class="lg:hidden py-3">
                        <button class="py-3 px-4 bg-red-700 font-semibold hover:text-red-700 hover:bg-white font-sans hover:border hover:border-red-600 text-white rounded-lg">Book Table</button>
                    </div>
                </div>

                <div>
                    <img src="images/home3.jpg" alt="" class="rounded-3xl object-cover">
                </div>
            </div>
       </div>

        <!-- SECOND HOME SECTION -->
        <div class="mt-12">

            <div class="flex flex-col-reverse px-2 mt-2 lg:mt-0 md:flex md:flex-row md:space-x-4 lg:space-x-12 lg:justify-center lg:items-center lg:px-12 lg:py-6">

                <div class="w-full mt-6 md:mt-0">
                    <img src="images/download.jpg" alt="" class="w-full rounded-3xl object-cover">
                </div>

                <div class="w-full space-y-6">

                    <h2 id="cover-h4" class="text-3xl lg:text-5xl text-red-700 font-medium">Discover</h2>

                    <h1 class="text-3xl lg:text-6xl font-sans font-medium">OUR STORY</h1>

                    <p class="font-serif font-medium text-sm lg:text-lg">
                        Multiply isn't night sixth under second second open he darkness said beast, without whales every herb sea place light life from divide isn't. Deep give greater. Darkness have fifth third open over itself. Third great make form is waters were. Midst green very.
                    </p>

                    <button class="py-3 px-4 bg-red-700 font-semibold hover:text-red-700 hover:bg-white font-sans hover:border hover:border-red-600 text-white rounded-lg">
                        Read Full Story
                    </button>
                </div>
            </div>
       </div>


        <!-- THIRD HOME SECTION -->
        <div>
            <Submenu />
        </div>

         <!-- FOURTH HOME SECTION -->
        <div>
            <Subbook />
        </div>

        <!-- FIFTH HOME SECTION -->
        <div class="mapouter flex justify-items-center mt-16 mx-auto">
            <div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas"    src="https://maps.google.com/maps?q=2%20Musa%20Yar'%20Adua%20Way,%20New%20Owerri%20460281,%20Owerri&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://fmovies-online.net"></a><br>
            </div>
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

//IMPORT SHARED  BOOKED
import Subbook from '../Shared/Subbook.vue';

export default {
    name: 'Home',
    layout: Layout,

    components: {
        Subnav,
        Submenu,
        Subbook
    },

}
</script>

<style>

/** HOME IMPORTED GOOGLE FONT */
@import url('https://fonts.googleapis.com/css2?family=Niconne&display=swap');

/** GOOGLE FONT USE */
#cover-h4{
    font-family: 'Niconne', cursive;
}

/** hOME MAP */
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
