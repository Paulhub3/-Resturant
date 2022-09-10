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

        <div class="ml-[20%] md:ml-[30%] mt-14 p-4">

            <div class="mb-9">
                <h1 class="text-3xl font-medium text-sky-800">Create Menu</h1>
            </div>


            <form @submit.prevent="submit" class="mt-9">

                <div class="mb-4">
                    <input v-model="form.foodname" type="text" name="foodname" id=""  placeholder="Food Name" class="border-2 border-gray-600 py-3 px-3 w-full md:w-80 lg:w-96 rounded focus:outline-none focus:border-2 focus:border-sky-500 block">

                     <div v-if="form.errors.foodname" class="text-red-600 mt-2 text-lg font-medium">{{ form.errors.foodname}}</div>
                </div>

                <div class="mb-4">
                    <input v-model="form.aboutfood" type="text" name="aboutfood" id=""  placeholder="describe Food" class="border-2 border-gray-600 py-3 px-3 w-full md:w-80 lg:w-96 rounded focus:outline-none focus:border-2 focus:border-sky-500 block">

                    <div v-if="form.errors.aboutfood" class="text-red-600 mt-2 text-lg font-medium">{{ form.errors.aboutfood}}</div>
                </div>

                <div class="mb-4">
                    <label for="category" class="font-sans text-lg text-gray-600">Category</label>
                    <select v-model="form.category" name="category" class="border-2 border-gray-500 py-2 px-6 w-full md:w-80 lg:w-96 rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0">
                        <option value="breakfast">Breakfast</option>
                        <option value="lunch">Lunch</option>
                        <option value="dinner">Dinner</option>
                        <option value="drinks">Drinks</option>

                    </select>

                    <div v-if="form.errors.category" class="text-red-600 mt-2 text-xl font-medium">{{ form.errors.category}}</div>
                </div>

                <div class="mb-4">
                    <input v-model="form.prize" type="number" name="prize" id=""  placeholder="Prize" class="border-2 border-gray-600 py-3 px-3 w-full md:w-80 lg:w-96 rounded focus:outline-none focus:border-2 focus:border-sky-500 block">

                     <div v-if="form.errors.prize" class="text-red-600 mt-2 text-lg font-medium">{{ form.errors.prize}}</div>
                </div>


                <div class="mb-4">

                    <div class="flex flex-col">
                        <input type="file" name="image" @input="form.image = $event.target.files[0]" />
                        <div v-if="form.errors.picture" class="text-red-600 mt-2 text-lg font-medium">{{ form.errors.picture}}</div>
                    </div>

                </div>

                <div class="">
                    <button :disabled="form.processing" class="py-2 px-4 bg-sky-600 text-base font-sans rounded-md text-white" type="submit">Submit</button>
                </div>

            </form>


        </div>



    </div>

</template>

<script>
 // IMPORT NAVBAR AND SIDE BAR
import Navbar from '../Admin/Navbar.vue';
import Sidebar from '../Admin/Sidebar.vue';

import { useForm } from '@inertiajs/inertia-vue3'

export default {
    name: 'Dashboard',

    components: {
        Navbar ,
        Sidebar
    },

     setup () {
        const form = useForm({
            foodname: '',
            aboutfood: '',
            category: '',
            prize: '',
            image: '',
        });

        function submit(){
            form.post('/menu'), {
                forceFormData: true,
            }
        }

        return { form , submit};
    },


}
</script>

<style>


    select {
        margin-bottom: 10px;
        margin-top: 10px;
    }

</style>
