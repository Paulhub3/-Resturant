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
                <h1 class="text-xl font-medium text-sky-800"> Create Breakfast Menu </h1>
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
                    <input v-model="form.prize" type="number" name="prize" id=""  placeholder="Prize" class="border-2 border-gray-600 py-3 px-3 w-full md:w-80 lg:w-96 rounded focus:outline-none focus:border-2 focus:border-sky-500 block">

                     <div v-if="form.errors.prize" class="text-red-600 mt-2 text-lg font-medium">{{ form.errors.prize}}</div>
                </div>


                <div class="mb-4">

                    <div>
                        <input type="file"  name="image" class=""/>
                        <div  class="text-red-600 mt-2 text-base"></div>
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
    name: 'Breakfast',

    components: {
        Navbar ,
        Sidebar
    },


    setup () {
        const form = useForm({
            foodname: '',
            aboutfood: '',
            email: '',
            prize: '',
            image: '',
        });

        function submit(){
            form.post('/breakfast')
        }

        return { form , submit};
    },

}
</script>
