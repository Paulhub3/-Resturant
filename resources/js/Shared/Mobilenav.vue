<template>
    <!-- MOBILE MENU -->
    <Transition>
        <div class="lg:hidden" v-if="Open">


            <div class="absolute z-[100] flex-col bg-white w-96 px-4  h-72 overscroll-y-contain  py-8 mt-20 space-y-4 font-bold left-0 right-0">

                <div @click="Open = !Open" class="font-bold py-4 px-3 ">
                    <Link href="/"  class="text-gray-700 font-sans text-lg hover:underline hover:underline-offset-8 decoration-4 decoration-red-600 hover:text-gray-400 underline-none">Home</Link>
                </div>


                <div @click="Open = !Open" class="font-bold py-4 px-3">
                    <Link href="/"  class="text-gray-700 font-sans text-lg hover:underline hover:underline-offset-8 decoration-4 decoration-red-600 hover:text-gray-400 underline-none">Menu</Link>
                </div>

                        
                <div @click="Open = !Open" class="font-bold py-4 px-3">
                    <Link href="/"  class="text-gray-700 font-sans text-lg hover:underline hover:underline-offset-8 decoration-4 decoration-red-600 hover:text-gray-400 underline-none">Contact us</Link>
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
    
</template>

<script setup>

defineProps({
   Open: false,
})

</script>
