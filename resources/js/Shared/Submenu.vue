<template>

    <!-- THIRD HOME SECTION -->
    <div class="mt-16 bg-gray-100 py-6 px-4">


        <div class="container flex flex-col  mx-auto">
            <div class="flex flex-col items-center lg:flex lg:justify-center lg:flex-row lg:space-x-6">
                <div class="flex flex-col">
                     <h1 class="text-lg text-red-700  font-sans font-medium">Popular Menu</h1>
                    <h2 class="text-3xl mb-6 lg:mb-0 underline underline-offset-8 decoration-red-500	 mr-36 font-sans font-medium">Delicious Food Menu</h2>
                </div>

                <div class="flex space-x-6">
                    <div @click="currentTab(1)" class="cursor-pointer">
                        <a class="text-xl font-normal hover-text-400 text-gray-700 font-sans">Breakfast</a>
                    </div>

                    <div @click="currentTab(2)" class="cursor-pointer">
                       <a class="text-xl font-normal hover-text-400 text-gray-700 font-sans">Launch</a>
                    </div>

                    <div @click="currentTab(3)" class="cursor-pointer">
                        <a class="text-xl font-normal hover-text-400 text-gray-700 font-sans">Dinner</a>
                    </div>

                     <div @click="currentTab(4)" class="cursor-pointer">
                        <a class="text-xl font-normal hover-text-400 text-gray-700 font-sans">Drinks</a>
                    </div>
                </div>
            </div>


            <div class="">
                <div class="p-3 mt-6 flex justify-center">

                    <!--DEFAULT TAB-->
                    <div v-if="tab === 1">

                        <!--GRID-->
                        <div class="grid grid-cols-1 gap-4 lg:grid lg:grid-cols-2 lg:gap-6">

                            <!--GRID BOX 1-->
                            <div class="py-4 px-4 rounded-lg flex flex-col justify-center lg:flex lg:flex-row lg:space-x-6 bg-white">

                                <div class="mx-auto">
                                    <img src="/images/food2.jpg" alt="meal" class="w-32 rounded-full lg:rounded-3xl object-cover">
                                </div>

                                <div class="mt-6">
                                    <h4 class="text-center text-2xl mb-3 font-normal text-gray-700 font-sans">Roasted Marrow</h4>
                                    <p class="text-center text-base mb-4 font-normal text-gray-500 font-sans">They're wherein heaven seed hath nothing</p>
                                    <h4 class="text-center text-xl font-normal text-red-500 font-sans">$40.00</h4>
                                </div>

                            </div>

                              <!--GRID BOX 2-->
                            <div class="py-4 px-4 rounded-lg flex flex-col justify-center lg:flex lg:flex-row lg:space-x-6 bg-white">

                                <div class="mx-auto">
                                    <img src="/images/food2.jpg" alt="meal" class="w-32 rounded-full lg:rounded-3xl object-cover">
                                </div>

                                <div class="mt-6">
                                    <h4 class="text-center text-2xl mb-3 font-normal text-gray-700 font-sans">Roasted Marrow</h4>
                                    <p class="text-center text-base mb-4 font-normal text-gray-500 font-sans">They're wherein heaven seed hath nothing</p>
                                    <h4 class="text-center text-xl font-normal text-red-500 font-sans">$40.00</h4>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- TAB 2-->
                    <div v-if="tab === 2">

                        <!--GRID-->
                       <div class="grid grid-cols-1 gap-4 lg:grid lg:grid-cols-2 lg:gap-6">

                            <!--GRID BOX 1-->
                            <div class="py-4 px-4 rounded-lg flex flex-col justify-center lg:flex lg:flex-row lg:space-x-6 bg-white">

                                <div class="mx-auto">
                                    <img src="/images/food1.jpg" alt="meal" class="w-32 rounded-full lg:rounded-3xl object-cover">
                                </div>

                                <div class="mt-6">
                                    <h4 class="text-center text-2xl mb-3 font-normal text-gray-700 font-sans">Roasted Marrow</h4>
                                    <p class="text-center text-base mb-4 font-normal text-gray-500 font-sans">They're wherein heaven seed hath nothing</p>
                                    <h4 class="text-center text-xl font-normal text-red-500 font-sans">$40.00</h4>
                                </div>

                            </div>

                              <!--GRID BOX 2-->
                            <div class="py-4 px-4 rounded-lg flex flex-col justify-center lg:flex lg:flex-row lg:space-x-6 bg-white">

                                <div class="mx-auto">
                                    <img src="/images/food1.jpg" alt="meal" class="w-32 rounded-full lg:rounded-3xl object-cover">
                                </div>

                                <div class="mt-6">
                                    <h4 class="text-center text-2xl mb-3 font-normal text-gray-700 font-sans">Roasted Marrow</h4>
                                    <p class="text-center text-base mb-4 font-normal text-gray-500 font-sans">They're wherein heaven seed hath nothing</p>
                                    <h4 class="text-center text-xl font-normal text-red-500 font-sans">$40.00</h4>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- TAB 3-->
                    <div v-if="tab === 3">

                        <!--GRID-->
                       <div class="grid grid-cols-1 gap-4 lg:grid lg:grid-cols-2 lg:gap-6">

                            <!--GRID BOX 1-->
                            <div class="py-4 px-4 rounded-lg flex flex-col justify-center lg:flex lg:flex-row lg:space-x-6 bg-white">

                                <div class="mx-auto">
                                    <img src="/images/food4.jpg" alt="meal" class="w-32 rounded-full lg:rounded-3xl object-cover">
                                </div>

                                <div class="mt-6">
                                    <h4 class="text-center text-2xl mb-3 font-normal text-gray-700 font-sans">Roasted Marrow</h4>
                                    <p class="text-center text-base mb-4 font-normal text-gray-500 font-sans">They're wherein heaven seed hath nothing</p>
                                    <h4 class="text-center text-xl font-normal text-red-500 font-sans">$40.00</h4>
                                </div>

                            </div>

                              <!--GRID BOX 2-->
                            <div class="py-4 px-4 rounded-lg flex flex-col justify-center lg:flex lg:flex-row lg:space-x-6 bg-white">

                                <div class="mx-auto">
                                    <img src="/images/food4.jpg" alt="meal" class="w-32 rounded-full lg:rounded-3xl object-cover">
                                </div>

                                <div class="mt-6">
                                    <h4 class="text-center text-2xl mb-3 font-normal text-gray-700 font-sans">Roasted Marrow</h4>
                                    <p class="text-center text-base mb-4 font-normal text-gray-500 font-sans">They're wherein heaven seed hath nothing</p>
                                    <h4 class="text-center text-xl font-normal text-red-500 font-sans">$40.00</h4>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- TAB 4-->
                    <div v-if="tab === 4">
                        <!--GRID-->
                       <div class="grid grid-cols-1 gap-4 lg:grid lg:grid-cols-2 lg:gap-6">

                            <!--GRID BOX 1-->
                            <div class="py-4 px-4 rounded-lg flex flex-col justify-center lg:flex lg:flex-row lg:space-x-6 bg-white">

                                <div class="mx-auto">
                                    <img src="/images/food3.jpg" alt="meal" class="w-32 rounded-full lg:rounded-3xl object-cover">
                                </div>

                                <div class="mt-6">
                                    <h4 class="text-center text-2xl mb-3 font-normal text-gray-700 font-sans">Roasted Marrow</h4>
                                    <p class="text-center text-base mb-4 font-normal text-gray-500 font-sans">They're wherein heaven seed hath nothing</p>
                                    <h4 class="text-center text-xl font-normal text-red-500 font-sans">$40.00</h4>
                                </div>

                            </div>

                              <!--GRID BOX 2-->
                            <div class="py-4 px-4 rounded-lg flex flex-col justify-center lg:flex lg:flex-row lg:space-x-6 bg-white">

                                <div class="mx-auto">
                                    <img src="/images/food3.jpg" alt="meal" class="w-32 rounded-full lg:rounded-3xl object-cover">
                                </div>

                                <div class="mt-6">
                                    <h4 class="text-center text-2xl mb-3 font-normal text-gray-700 font-sans">Roasted Marrow</h4>
                                    <p class="text-center text-base mb-4 font-normal text-gray-500 font-sans">They're wherein heaven seed hath nothing</p>
                                    <h4 class="text-center text-xl font-normal text-red-500 font-sans">$40.00</h4>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>

        </div>


        <div class="py-3 flex flex-col items-center mt-14">

            <h1 class="text-lg font-medium text-gray-600 font-sans"><span class="text-red-600 ">KITCHEN OPEN:</span> MON-SAT 12-10PM / SUN 12PM-9:30PM</h1>

            <div class="space-x-6 mt-6">

                <button class="py-3 px-4 bg-red-600 font-semibold hover:text-red-600 hover:bg-white font-sans hover:border hover:border-red-600 text-white rounded">BOOK NOW TABLE</button>

                <button class="py-3 px-4 bg-black font-semibold hover:text-red-600 hover:bg-white font-sans hover:border hover:border-white text-white rounded">ORDER ONLINE</button>
            </div>

        </div>

    </div>

</template>

<script>
    import { ref } from 'vue';
    export default {
        setup() {
            const tab = ref(1);
            const currentTab = (tabNumber) => (tab.value = tabNumber);
            return { tab, currentTab };
        },
    };

</script>

<style>

</style>
