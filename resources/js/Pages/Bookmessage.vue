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

        <div  class="lg:p-8 ml-[30%] mt-12" style="overflow-x:auto;">
            <table class="border-collapse  border-2 border-gray-300">
                <tr>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">S/N</th>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">Full Name</th>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">Phone number</th>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">Email</th>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">Time</th>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">Date</th>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">Email</th>
                <th class="border border-gray-300 text-gray-700 font-sans text-base">Note</th>

                </tr>
                <tr v-for="booked in booked.data" :key="booked.id">
                    <td >{{ booked.id }}</td>
                    <td class="border border-gray-300 text-gray-700 font-sans text-sm">{{ booked.fullname }}</td>
                    <td class="border border-gray-300 text-gray-700 font-sans text-sm">{{ booked.phone }}</td>
                    <td class="border border-gray-300 text-gray-700 font-sans text-sm">{{ booked.email }}</td>
                    <td class="border border-gray-300 text-gray-700 font-sans text-sm">{{ booked.time }}</td>
                    <td class="border border-gray-300 text-gray-700 font-sans text-sm">{{ booked.date }}</td>
                    <td class="border border-gray-300 text-gray-700 font-sans text-sm">{{ booked.person }}</td>
                    <td class="border border-gray-300 text-gray-700 font-sans text-sm">{{ booked.note }}</td>

                    <td class="border border-gray-300">
                        <button class="py-2 px-3 bg-sky-600 rounded-md"><a class="font-medium text-white font-sans text-base" href="https://www.google.com/intl/en-GB/gmail/about/#inbox" target="_blank" rel="noopener noreferrer">Reply</a></button>
                    </td>
                    <td class="border border-gray-300">
                        <button type="button" @click="destroy(booked.id)" class="py-2 px-3 font-medium text-white font-sans text-base bg-red-600 rounded-md">
                            Delete
                        </button>
                    </td>
                </tr>
            </table>

            <!--pagination-->

            <div class="p-8">
                <Link
                    v-for="link in booked.links"
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

        props: {
           booked: Object,
        },

        setup() {

            function destroy(id) {
                Inertia.delete(`admin-book/${id}/destroy`, {
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
