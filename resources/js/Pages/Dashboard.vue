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

        <div class="ml-[30%] mt-14 ">

            <div class="mb-9">
                <h1 class="text-3xl font-medium text-sky-800">Create Menu</h1>
            </div>

            <div class="grid grid-cols-2 gap-4 md:flex md:flex-row md:items-center md:space-x-6">

                <div>
                    <button class="py-2 px-4 bg-sky-800 text-base font-sans rounded-md text-white" >
                        <Link href="/breakfast-menu">Breakfast</Link>
                    </button>
                </div>

                <div>
                    <button class="py-2 px-4 bg-sky-800 text-base font-sans rounded-md text-white" >
                        <Link href="/lunch-menu">Lunch</Link>
                    </button>
                </div>

                <div>
                    <button class="py-2 px-4 bg-sky-800 text-base font-sans rounded-md text-white">
                        <Link href="/dinner-menu">Dinner</Link>
                    </button>
                </div>

                <div>
                    <button class="py-2 px-4 bg-sky-800 text-base font-sans rounded-md text-white">
                        <Link href="/drinks-menu">Drinks</Link>
                    </button>
                </div>
            </div>
        </div>



    </div>

</template>

<script>
 // IMPORT NAVBAR AND SIDE BAR
import Navbar from '../Admin/Navbar.vue';
import Sidebar from '../Admin/Sidebar.vue';



export default {
    name: 'Dashboard',

    components: {
        Navbar ,
        Sidebar
    },


}
</script>
