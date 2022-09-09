<template>

    <div>

        <!--NAV BAR -->
        <div>
            <Navbar />
        </div>

         <!--SIDE BAR -->
        <div>
            <Sidebar />
        </div>

        <div class="ml-[30%] mt-12">

            <div>
                <h1 class="text-xl font-medium text-sky-800"> Create Dinner Menu </h1>
            </div>

            <form action="" method="post" class="mt-9">

                <div class="mb-4">
                    <input  type="text" name="" id=""  placeholder="Food Name" class="border-2 border-gray-600 py-3 px-3 w-full md:w-80 lg:w-96 rounded focus:outline-none focus:border-2 focus:border-sky-500 block">
                    <div  class="text-red-600 mt-2 text-base"></div>
                </div>

                <div class="mb-4">
                    <input  type="text" name="" id=""  placeholder="About Food" class="border-2 border-gray-600 py-3 px-3 w-full md:w-80 lg:w-96 rounded focus:outline-none focus:border-2 focus:border-sky-500 block">
                    <div  class="text-red-600 mt-2 text-base"></div>
                </div>

                <div class="mb-4">
                    <input  type="text" name="" id=""  placeholder="Prize" class="border-2 border-gray-600 py-3 px-3 w-full md:w-80 lg:w-96 rounded focus:outline-none focus:border-2 focus:border-sky-500 block">
                    <div  class="text-red-600 mt-2 text-base"></div>
                </div>


                <div class="mb-4">
                    <div>
                        <input type="text"  />
                    </div>

                    <div>
                        <input type="file" name="picture" />
                        <div  class="text-red-600 mt-2 text-base"></div>
                    </div>

                </div>

                <div class="">
                    <button class="py-2 px-4 bg-sky-600 text-base font-sans rounded-md text-white" type="submit">Submit</button>
                </div>

            </form>

        </div>


    </div>

</template>

<script>
 /// IMPORT NAVBAR AND SIDE BAR
import Navbar from '../Admin/Navbar.vue';
import Sidebar from '../Admin/Sidebar.vue';


export default {
    name: 'Dinner',

    components: {
        Navbar ,
        Sidebar
    },

}
</script>
