<template>
    <div>

        <div>
            <Flash />
        </div>

        <div class="md:container md:mx-auto md:flex md:justify-center mt-24">
            <div class="bg-slate-100 md:w-7/12 py-6 px-6 rounded-md">
                <h1 class="font-sans text-sky-800 mb-6 text-3xl font-semibold">Admin Login</h1>
                <form  @submit.prevent="submit">

                    <div class="mb-8">
                        <input v-model="form.email" type="email" name="" id="" placeholder="Email" class="border-b-2 border-gray-500 py-3 placeholder:text-gray-600 placeholder:text-base px-3 w-full md:w-11/12 rounded focus:outline-none focus:border-sky-600 focus:ring-sky-500 block sm:text-sm focus:ring-0">
                        <div v-if="form.errors.email" class="text-red-600 mt-2 text-base">{{ form.errors.email }}</div>
                    </div>

                    <div class="mb-8 relative">
                        <input v-model="form.password" v-bind:type="[showPassword ? 'text' : 'password']" name="password" id="" placeholder="Password" class="border-b-2 z-0 border-gray-500 py-3 placeholder:text-gray-600 placeholder:text-base px-3 w-full md:w-11/12 rounded focus:outline-none focus:border-sky-600 focus:ring-sky-500 block sm:text-sm focus:ring-0">

                        <div class="absolute z-20  top-2 right-3 md:right-10  lg:right-20" @click="showPassword = !showPassword">

                            <svg xmlns="http://www.w3.org/2000/svg"  v-if="showPassword" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" v-else  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg>

                        </div>

                         <div v-if="form.errors.password" class="text-red-600 mt-2 text-base">{{ form.errors.password }}</div>
                    </div>


                    <div class="flex justify-center">
                        <button type="submit" :disabled="form.processing" class="py-2 w-28 px-3 border-2 text-white font-sans bg-sky-800 rounded">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</template>

<script setup>
    import { useForm } from '@inertiajs/inertia-vue3';

    //IMPORT SHARED FLASH MESSAGE
    import Flash from '../Shared/Flash.vue'


    let form = useForm({
        name: '',
        email: '',
        password: '',
    })

    let submit = () => {
        form.post('/admin-control-login')
    }

    defineProps({
         showPassword: false,
    })

</script>

<style>

</style>
