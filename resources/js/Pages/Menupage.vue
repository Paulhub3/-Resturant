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


        <div v-if="!isHidden" class="relative z-0 grid justify-items-center">
            <div v-if="$page.props.flash.message"  class="alert flex-col mt-6 w-96 md:w-4/12 bg-white shadow-xl drop-shadow-lg px-3 py-12 rounded text-2xl font-sans absolute -z-10  font-semibold text-green-500">
                <h1 class="text-center">{{ $page.props.flash.message }}</h1>

                <button @click="isHidden = true" class="px-4 py-2 bg-green-500 text-base mt-6 w-16 mx-36 lg:ml-44 rounded font-mono text-white">
                    OK
                </button>
            </div>
        </div>


        <div  class="lg:p-8 ml-[25%] mt-12" style="overflow-x:auto;">
            <table class="border-collapse w-full border-2 border-gray-300">
                <tr>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">S/N</th>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">Food Name</th>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">Describe Food</th>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">Category</th>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">Prize</th>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">Image</th>

                </tr>
                <tr v-for="menu in menu.data" :key="menu.id">
                    <td >{{ menu.id }}</td>
                    <td class="border border-gray-300 text-gray-700 font-sans text-sm">{{ menu.foodname }}</td>
                    <td class="border border-gray-300 text-gray-700 font-sans text-sm">{{ menu.aboutfood }}</td>
                    <td class="border border-gray-300 text-gray-700 font-sans text-sm">{{ menu.category }}</td>
                    <td class="border border-gray-300 text-gray-700 font-sans text-sm">{{ menu.prize }}</td>
                    <td class="border border-gray-300"> <img :src="'/public/' + '/images/' + menu.image" class="w-24" /> </td>


                    <td class="border border-gray-300 ">
                        <button type="button" @click="destroy(menu.id)" class="py-2 px-3 font-medium text-white font-sans text-base bg-red-600 rounded-md ">
                            Delete
                        </button>
                    </td>
                </tr>
            </table>

            <!--pagination-->

            <div class="p-8">
                <Link
                    v-for="link in menu.links"
                    :href="link.url"
                    v-html="link.label"
                    class="px-1 text-lg font-medium"
                />
            </div>

        </div>


    </div>
</template>

<script>
import { Inertia } from '@inertiajs/inertia';

    // IMPORT NAVBAR AND SIDE BAR
    import Navbar from '../Admin/Navbar.vue';
    import Sidebar from '../Admin/Sidebar.vue';

    export default {
        components: {
           Navbar ,
           Sidebar
        },

        data() {
            return {
                isHidden: false,
            };
        },


        props: {
           menu: Object,
        },

        setup() {

            function destroy(id) {
                Inertia.delete(`menu-table/${id}/destroy`, {
                    onBefore: () => confirm('Are you sure you want to delete this booked table'),
                    onSuccess: () => alert('Booked Table Successfully deleted'),
                })
            }

            return {destroy}
        }
    }


</script>

<style>

    ​table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    th, td {
        text-align: left;
        padding: 6px;
    }

</style>
