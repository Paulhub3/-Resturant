<template>

    <div>
        <!-- FIRST HOME SECTION -->

       <div class="bg-red-100 px-6 py-4">

            <!-- HOME NAV DISPLAY -->
            <Subnav />

            <div class="flex space-x-12 justify-center items-center px-12 py-6">
                <div class="space-y-6">
                    <h4 id="cover-h4" class="text-4xl text-red-700 font-medium">Expensive But The Best</h4>
                    <h1  class="text-6xl font-sans font-medium">Deliciousness jumping into the mouth</h1>
                    <p class="font-serif font-medium text-lg">Together creeping heaven upon third dominion be upon won't darkness rule land behold it created good saw after she'd Our set living. Signs midst dominion creepeth morning</p>
                </div>

                <div>
                    <img src="images/home3.jpg" alt="" class="rounded-3xl object-cover">
                </div>
            </div>
       </div>

        <!-- SECOND HOME SECTION -->
       <div>
            <h1 class="mt-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus suscipit, saepe odio nesciunt at ratione! Explicabo at inventore minus dolor eligendi ipsa maiores nemo. Amet porro assumenda suscipit saepe temporibus!</h1>
       </div>
    </div>

</template>


<script>
 // IMPORT SHARED LAYOUT
import Layout from '../Shared/Layout.vue';

//IMPORT SHARED FEATURE PRODUCT
import Subnav from '../Shared/Subnav.vue';

export default {
    name: 'Home',
    layout: Layout,

    components: {
        Subnav
    },

}
</script>

<style>

@import url('https://fonts.googleapis.com/css2?family=Niconne&display=swap');

#cover-h4{
    font-family: 'Niconne', cursive;
}

</style>
