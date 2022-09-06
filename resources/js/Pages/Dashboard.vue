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
                <h1 class="text-xl font-medium text-sky-800">Change Home Background  Picture</h1>
            </div>
            <form @submit.prevent="submit" class="flex-col">

                <div>
                    <input type="text" v-model="form.name" />
                </div>

                <div>
                    <input type="file" @input="form.avatar = $event.target.files[0]" />
                </div>

                <div>
                    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                        {{ form.progress.percentage }}%
                    </progress>
                </div>

                <div class="mt-6">
                     <button class="py-2 px-4 bg-sky-600 text-base font-sans rounded-md text-white" type="submit">Submit</button>
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
      name: '',
      avatar: '',
    })

    function submit() {
      form.post('/users')
    }

    return { form, submit }
  },



}
</script>
