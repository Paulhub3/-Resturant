<template>
    <div>

        <div class="md:container md:mx-auto md:flex md:justify-center mt-24">
            <div class="bg-slate-100 md:w-7/12 py-6 px-6 rounded-md">
                <h1 class="font-sans text-sky-800 mb-6 text-3xl font-semibold">Create Account As Admin</h1>

                <form  @submit.prevent="submit">

                    <div class="mb-8">
                        <input v-model="form.name"  type="text" name="name" id="" placeholder="Full Name" class="border-b-2 border-gray-500 py-3 placeholder:text-gray-600 placeholder:text-base px-3 w-full md:w-11/12 rounded focus:outline-none focus:border-sky-600 focus:ring-sky-500 block sm:text-sm focus:ring-0">
                        <div v-if="form.errors.name" class="text-red-600 mt-2 text-base">{{ form.errors.name }}</div>
                    </div>

                     <div class="mb-8">
                        <input v-model="form.email"  type="email" name="email" id="" placeholder="Email Address" class="border-b-2 border-gray-500 py-3 placeholder:text-gray-600 placeholder:text-base px-3 w-full md:w-11/12 rounded focus:outline-none focus:border-sky-600 focus:ring-sky-500 block sm:text-sm focus:ring-0">
                        <div v-if="form.errors.email" class="text-red-600 mt-2 text-base">{{ form.errors.email }}</div>
                    </div>

                    <div class="mb-8">
                        <input v-model="form.password" type="text" name="password" id="" placeholder="Password" class="border-b-2 border-gray-500 py-3 placeholder:text-gray-600 placeholder:text-base px-3 w-full md:w-11/12 rounded focus:outline-none focus:border-sky-600 focus:ring-sky-500 block sm:text-sm focus:ring-0">
                        <div v-if="form.errors.password" class="text-red-600 mt-2 text-base">{{ form.errors.password }}</div>
                    </div>

                    <div class="mb-8">
                        <input v-model="form.password_confirmation" type="text"  name="password_confirmation" placeholder="Confirm Password" class="border-b-2 border-gray-500 py-3 placeholder:text-gray-600 placeholder:text-base px-3 w-full md:w-11/12 rounded focus:outline-none focus:border-sky-600 focus:ring-sky-500 block sm:text-sm focus:ring-0">
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" :disabled="form.processing" class="py-2 w-28 px-3 border-2 text-white font-sans bg-sky-800 rounded">
                            Register
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</template>

<script setup>
    import { useForm } from '@inertiajs/inertia-vue3';

    let form = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    })

    let submit = () => {
        form.post('/admin-control-register')
    }


</script>

<style>

</style>
