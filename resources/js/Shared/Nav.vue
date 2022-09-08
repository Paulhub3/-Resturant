<template>

    <!-- NAV -->
    <nav id="navbar" class="mx-auto z-[100]">

        <!-- NAV DIV -->
        <div class="flex bg-white  lg:px-6 justify-between mx-auto">

            <!-- LOGO -->
            <div class="lg:hidden py-3 px-2">
               <a href="/#home">
                    <img src="/images/hungry_logo.png" class="w-16" alt="logo">
                </a>
            </div>

            <div class="hidden lg:bg-white lg:flex lg:space-x-9 lg:justify-center lg:items-center lg:mx-auto">

                <!-- LOGO -->
                <div class="py-3 px-2 mr-36">
                    <a href="/#home">
                        <img src="/images/hungry_logo.png" class="w-24" alt="logo">
                    </a>
                </div>

                 <div class="py-3 px-3">
                    <a href="/" class="text-xl font-medium text-gray-700 font-sans hover:text-red-500">Home</a>
                </div>

                <div class="py-3 px-3">
                    <a href="/#menu"  class="text-xl font-medium text-gray-700 font-sans hover:text-red-500">Menu</a>
                </div>

                <div class="py-3 px-3">
                    <a href="/#about-us"  class="text-xl font-medium text-gray-700 font-sans hover:text-red-500">About</a>
                </div>

                <div class="py-3 px-3">
                    <a href="/#contact-us"  class="text-xl font-medium text-gray-700 font-sans hover:text-red-500">Contact us</a>
                </div>

                <div  class="py-3 px-24">
                    <a href="#book" class="py-3 px-4 bg-red-700 font-semibold hover:text-red-700 hover:bg-white font-sans hover:border hover:border-red-600 text-white rounded-lg">Book Table</a>
                </div>

            </div>


            <!-- MOBILE MENU -->
            <Transition>
                <div class="lg:hidden" v-if="Open">


                    <div class="absolute z-[100] flex-col bg-white px-4 h-96 overscroll-y-contain overflow-x-scroll self-end py-8 mt-14 space-y-4 font-bold sm:w-auto left-0 right-0">

                        <div @click="Open = !Open" class="font-bold py-4 px-3 ">
                            <a href="/#home" class="text-gray-700 font-sans text-lg hover:underline hover:underline-offset-8 decoration-4 decoration-red-600 hover:text-gray-400 underline-none">Home</a>
                        </div>


                        <div @click="Open = !Open" class="font-bold py-4 px-3">
                            <a href="/#menu"   class="text-gray-700 font-sans text-lg hover:underline hover:underline-offset-8 decoration-4 decoration-red-600 hover:text-gray-400 underline-none">Menu</a>
                        </div>

                        <div @click="isOpen = !isOpen" class="font-bold py-4 px-3">
                            <Link href="/#about-us"  class="text-gray-700 font-sans text-lg hover:underline hover:underline-offset-8 decoration-4 decoration-red-600 hover:text-gray-400 underline-none">About</Link>
                        </div>


                        <div @click="Open = !Open" class="font-bold py-4 px-3">
                            <a href="/#contact-us" class="text-gray-700 font-sans text-lg hover:underline hover:underline-offset-8 decoration-4 decoration-red-600 hover:text-gray-400 underline-none">Contact us</a>
                        </div>


                    </div>

                </div>
            </Transition>


            <!-- Hamburger icon -->
            <div class="lg:hidden  py-3 px-2" @click="Open = !Open">

                <svg xmlns="http://www.w3.org/2000/svg" v-if="Open" class="h-12 w-12 stroke-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg"  v-else class="h-12 w-12 stroke-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
        </div>

     </nav>

</template>

<script setup>

defineProps({
   Open: false,
})

</script>


<style>
    #navbar{
        position: fixed;
        top: -50%;
        width: 100%;
        display: block;
        transition: top 0.3s;

    }
</style>
