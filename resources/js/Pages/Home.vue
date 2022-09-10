<template>

    <!-- Navbar -->
    <Nav />

    <div>
        <!-- FIRST HOME SECTION -->

        <div class="bg-red-100 px-2 lg:px-6 py-4">

            <!-- HOME NAV DISPLAY -->
            <Subnav />

            <div class="z-50">
                <Flash />
            </div>

            <div class="flex flex-col-reverse px-2 mt-2 lg:mt-0 md:flex md:flex-row lg:space-x-12 lg:justify-center lg:items-center lg:px-12 lg:py-6">

                <div class="space-y-6 mt-4">

                    <h4 id="cover-h4" class="text-3xl lg:text-4xl text-red-700 font-medium">Expensive But The Best</h4>

                    <h1  class="text-3xl lg:text-6xl font-sans font-medium">Deliciousness jumping into the mouth</h1>

                    <p class="font-serif font-medium text-sm lg:text-lg">Together creeping heaven upon third dominion be upon won't darkness rule land behold it created good saw after she'd Our set living. Signs midst dominion creepeth morning</p>

                    <div class="lg:hidden py-3">
                        <a href="#book" class="py-3 px-4 bg-red-700 font-semibold hover:text-red-700 hover:bg-white font-sans hover:border hover:border-red-600 text-white rounded-lg">Book Table</a>
                    </div>
                </div>

                <div>
                    <img src="images/home3.jpg" alt="" class="rounded-3xl object-cover">
                </div>
            </div>
       </div>

        <!-- SECOND HOME SECTION ABOUT US-->
        <div id="about-us" class="mt-12">

            <div  class="flex flex-col-reverse px-2 mt-2 lg:mt-0 md:flex md:flex-row md:space-x-4 lg:space-x-12 lg:justify-center lg:items-center lg:px-12 lg:py-6">

                <div class="w-full mt-6 md:mt-0">
                    <img src="images/download.jpg" alt="" class="w-full rounded-3xl object-cover">
                </div>

                <div class="w-full space-y-8">

                    <h2 id="cover-h4" class="text-3xl lg:text-5xl text-red-700 font-medium">Discover</h2>

                    <h1 class="text-3xl lg:text-6xl font-sans font-medium">OUR STORY</h1>

                    <p class="font-serif font-medium text-sm lg:text-xl">
                        Multiply isn't night sixth under second second open he darkness said beast, without whales every herb sea place light life from divide isn't. Deep give greater. Darkness have fifth third open over itself. Third great make form is waters were. Midst green very.
                    </p>

                </div>
            </div>
       </div>


            <!-- THIRD HOME SECTION -->
        <div class="mt-16 bg-gray-100 py-6 px-4">


            <div id="menu" class="container flex flex-col  mx-auto">
                <div class="flex flex-col items-center lg:flex lg:justify-center lg:flex-row lg:space-x-6">
                    <div class="flex flex-col">
                        <h1 class="text-lg text-red-700  font-sans font-medium">Popular Menu</h1>
                        <h2 class="text-3xl mb-6 lg:mb-0 underline underline-offset-8 decoration-red-500	 mr-36 font-sans font-medium">Delicious Food Menu</h2>
                    </div>

                    <div class="flex space-x-6">
                        <div @click="currentTab(1)" class="cursor-pointer">
                            <button class="text-xl font-normal hover-text-400 text-gray-700 hover:text-sky-600 
                             font-sans">Breakfast</button>
                        </div>

                        <div @click="currentTab(2)" class="cursor-pointer">
                        <button class="text-xl font-normal hover-text-400 text-gray-700 hover:text-sky-600 font-sans">Launch</button>
                        </div>

                        <div @click="currentTab(3)" class="cursor-pointer">
                            <button class="text-xl font-normal hover-text-400 text-gray-700 hover:text-sky-600  font-sans">Dinner</button>
                        </div>

                        <div @click="currentTab(4)" class="cursor-pointer">
                            <button class="text-xl font-normal hover-text-400 text-gray-700 hover:text-sky-600 font-sans">Drinks</button>
                        </div>
                    </div>
                </div>


                <div class="">
                    <div class="p-3 mt-16 flex justify-center">

                        <!--DEFAULT TAB BREAK FAST-->
                        <div  v-if="tab === 1">

                            <div class="flex flex-col space-y-6 lg:space-y-0 lg:flex lg:flex-row lg:space-x-6">
                                <div class="" v-for="breakfast in breakfast" :key="breakfast.id">
                                    
                                    <!--GRID BOX -->
        
                                    <div class="py-4 px-4 rounded-lg flex flex-col justify-center lg:flex lg:flex-row lg:space-x-6 bg-white">

                                        <div class="mx-auto">
                                            <img :src="'/public/' + '/images/' + breakfast.image" class="w-32 rounded-full lg:rounded-3xl object-cover" />
                                        </div>

                                        <div class="mt-6">
                                            <h4 class="text-center text-2xl mb-3 font-normal text-gray-700 font-sans">{{ breakfast.foodname }}</h4>
                                            <p class="text-center  text-base mb-4 w-80 font-normal text-gray-500 font-sans">{{ breakfast.aboutfood }}</p>
                                            <h4 class="text-center text-xl font-normal text-red-500 font-sans">
                                                <i class="fa-solid fa-naira-sign"></i>
                                                {{ breakfast.prize }}
                                            </h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TAB 2 LUNCH-->
                        <div v-if="tab === 2">

                            <!--GRID-->
                            <div class="flex flex-col space-y-6 lg:space-y-0 lg:flex lg:flex-row lg:space-x-6">
                                <div class="" v-for="lunch in lunch " :key="lunch.id">
                                    
                                    <!--GRID BOX -->
        
                                    <div class="py-4 px-4  rounded-lg flex flex-col justify-center lg:flex lg:flex-row lg:space-x-6 bg-white">

                                        <div class="mx-auto">
                                            <img :src="'/public/' + '/images/' + lunch.image" class="w-32 rounded-full lg:rounded-3xl object-cover" />
                                        </div>

                                        <div class="mt-6">
                                            <h4 class="text-center text-2xl mb-3 font-normal text-gray-700 font-sans">{{ lunch.foodname }}</h4>
                                            <p class="text-center text-base mb-4 w-80 font-normal text-gray-500 font-sans">{{ lunch.aboutfood }}</p>
                                            <h4 class="text-center text-xl font-normal text-red-500 font-sans">
                                                <i class="fa-solid fa-naira-sign"></i>
                                                {{ lunch.prize }}
                                            </h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TAB 3-->
                        <div v-if="tab === 3">

                            <!--GRID-->
                            <div class="flex flex-col space-y-6 lg:space-y-0 lg:flex lg:flex-row lg:space-x-6">
                                <div class="" v-for="dinner in dinner " :key="dinner.id">
                                    
                                    <!--GRID BOX -->
        
                                    <div class="py-4 px-4  rounded-lg flex flex-col justify-center lg:flex lg:flex-row lg:space-x-6 bg-white">

                                        <div class="mx-auto">
                                            <img :src="'/public/' + '/images/' + dinner.image" class="w-32 rounded-full lg:rounded-3xl object-cover" />
                                        </div>

                                        <div class="mt-6">
                                            <h4 class="text-center text-2xl mb-3 font-normal text-gray-700 font-sans">{{ dinner.foodname }}</h4>
                                            <p class="text-center text-base w-80 mb-4 font-normal text-gray-500 font-sans">{{ dinner.aboutfood }}</p>
                                            <h4 class="text-center text-xl font-normal text-red-500 font-sans">
                                                <i class="fa-solid fa-naira-sign"></i>
                                                {{ dinner.prize }}
                                            </h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TAB 4-->
                        <div v-if="tab === 4">
                            <!--GRID-->
                            <div class="flex flex-col space-y-6 lg:space-y-0 lg:flex lg:flex-row lg:space-x-6">
                                <div class="" v-for="drinks in drinks " :key="drinks.id">
                                    
                                    <!--GRID BOX -->
        
                                    <div class="py-4 px-4  rounded-lg flex flex-col justify-center lg:flex lg:flex-row lg:space-x-6 bg-white">

                                        <div class="mx-auto">
                                            <img :src="'/public/' + '/images/' + drinks.image" class="w-32 rounded-full lg:rounded-3xl object-cover" />
                                        </div>

                                        <div class="mt-6">
                                            <h4 class="text-center text-2xl mb-3 font-normal text-gray-700 font-sans">{{ drinks.foodname }}</h4>
                                            <p class="text-center w-80 text-base mb-4 font-normal text-gray-500 font-sans">{{ drinks.aboutfood }}</p>
                                            <h4 class="text-center text-xl font-normal text-red-500 font-sans">
                                                <i class="fa-solid fa-naira-sign"></i>
                                                {{ drinks.prize }}
                                            </h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                </div>
            </div>

        </div>


        <div class="py-3 mt-20  flex flex-col items-center ">

            <h1 class="text-lg font-medium text-gray-600 font-sans"><span class="text-red-600 ">KITCHEN OPEN:</span> MON-SAT 12-10PM / SUN 12PM-9:30PM</h1>

            <div class="mt-6">
                <Link class="py-3 px-4 bg-black font-semibold hover:text-red-600 hover:bg-white font-sans hover:border hover:border-white text-white rounded">ORDER ONLINE</Link>
            </div>

        </div>

    </div>
         <!-- FOURTH HOME SECTION BOOK TABLE-->
        <div class="mt-24">
            <Book />
        </div>

        <!-- FIFTH HOME SECTION MAP-->
        <div class="mapouter flex justify-items-center mt-16 mx-auto">
            <div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas"    src="https://maps.google.com/maps?q=2%20Musa%20Yar'%20Adua%20Way,%20New%20Owerri%20460281,%20Owerri&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://fmovies-online.net"></a><br>
            </div>
        </div>


        <!-- SIXTH HOME SECTION CONTACT US  -->
        <div class="mt-24">
            <Contact />
        </div>


    </div>

    <!-- Footer -->
    <Footer />

</template>


<script>


 // IMPORT SHARED COMPONENT FOR NAV AND FOOTER
import Nav from '../Shared/Nav.vue'
import Footer from '../Shared/Footer.vue'

 // IMPORT SHARED COMPONENT FOR SUBNAV
import Subnav from '../Shared/Subnav.vue'

 // IMPORT SHARED COMPONENT FOR BOOKED
import Book from '../Shared/Book.vue'


 // IMPORT SHARED COMPONENT FOR  CONTACT US
import Contact from '../Shared/Contact.vue'

 //IMPORT SHARED FLASH MESSAGE
import Flash from '../Shared/Flash.vue';

import { ref } from 'vue';

export default {
    name: 'Home',

    components: {
        Nav,
        Footer,
        Subnav,
        Book,
        Contact,
        Flash
    },

    props: {
        breakfast: Array,
        lunch: Array,
        dinner: Array,
        drinks: Array,
    },

    setup() {
        const tab = ref(1);
        const currentTab = (tabNumber) => (tab.value = tabNumber);
        return { tab, currentTab };
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
