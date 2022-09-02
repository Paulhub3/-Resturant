<template>

    <div>
        <!-- FIRST HOME SECTION -->

       <div class="bg-red-100 px-6 py-4">

            <!-- NAV -->
            <nav>

                <!-- NAV DIV -->
                <div class="flex px-6 ">


                    <div  class="flex space-x-6 justify-center items-center mx-auto">

                         <!-- LOGO -->
                        <div class="py-3 px-2 mr-36">
                            <Link href="/">
                                <img src="/images/hungry_logo.png" class="w-24" alt="logo">
                            </Link>
                        </div>

                        <div class="py-3 px-3">
                            <Link href="/"  class="text-xl font-medium text-neutral-600 font-sans hover:text-gray-500">Home</Link>
                        </div>

                        <div class="py-3 px-3">
                            <Link href="/"  class="text-xl font-medium text-neutral-600 font-sans hover:text-gray-500">Menu</Link>
                        </div>

                        <div class="py-3 px-3">
                            <Link href="/"  class="text-xl font-medium text-neutral-600 font-sans hover:text-gray-500">About</Link>
                        </div>

                        <div class="py-3 px-3">
                            <Link href="/"  class="text-xl font-medium text-neutral-600 font-sans hover:text-gray-500">Contact us</Link>
                        </div>

                        <div class="py-3 px-28">
                            <button class="py-3 px-4 bg-red-700 hover:text-red-700 hover:bg-white font-sans hover:border-2 hover:border-red-600 text-white rounded-lg">Book Table</button>
                        </div>

                    </div>

                </div>

            </nav>
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

export default {
    name: 'Home',
    layout: Layout,


}
</script>

<style>

@import url('https://fonts.googleapis.com/css2?family=Niconne&display=swap');

#cover-h4{
    font-family: 'Niconne', cursive;
}

</style>
