<template>

    <form @submit.prevent="submit" class="z-40">

        <div class="md:flex mb-4 md:space-x-4">

            <div class="mb-4">
                <label class="font-sans text-lg text-white" for="text">Full Name</label>
                <input v-model="form.fullname" type="text" name="fullname" id="" class="border-2 border-gray-500 py-2 px-3 w-full md:w-64 rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0">

                <div v-if="form.errors.fullname" class="text-red-600 mt-2 text-xl font-medium">{{ form.errors.fullname}}</div>
            </div>

            <div class="mb-4">
                <label class="font-sans text-lg text-white" for="phone">Phone</label>
                <input type="text" v-model="form.phone" name="phone" id="" class="border-2 border-gray-500 py-2 px-3 w-full md:w-64 rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0">

                <div v-if="form.errors.phone" class="text-red-600 mt-2 text-xl font-medium">{{ form.errors.phone}}</div>
            </div>

        </div>

        <div class="mb-4">
            <label class="font-sans text-lg text-white" for="email">E-mail Address</label>
            <input type="email" v-model="form.email" name="email" id="" class="border-2 border-gray-500 py-2 px-3 w-full md:w-full rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0">

            <div v-if="form.errors.email" class="text-red-600 mt-2 text-xl font-medium">{{ form.errors.email}}</div>
        </div>

        <div class="md:flex mb-4 md:space-x-4">

            <div class="mb-4">
                <label class="font-sans text-lg text-white" for="text">Time</label>
                <input type="time" v-model="form.time" name="time" id="" class="border-2 border-gray-500 py-2 px-3 w-full md:w-64 rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0">

                <div v-if="form.errors.time" class="text-red-600 mt-2 text-xl font-medium">{{ form.errors.time}}</div>
            </div>

            <div class="mb-4">
                <label class="font-sans text-lg text-white" for="phone">Date</label>
                <input type="Date" v-model="form.date" name="date" id="" class="border-2 border-gray-500 py-2 px-3 w-full md:w-64 rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0">

                    <div v-if="form.errors.date" class="text-red-600 mt-2 text-xl font-medium">{{ form.errors.date}}</div>
            </div>

        </div>


        <div class="mb-4">
            <label for="lang" class="font-sans text-lg text-white">People</label>
            <select v-model="form.person" name="person" class="border-2 border-gray-500 py-2 px-3 w-full rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>

                <div v-if="form.errors.person" class="text-red-600 mt-2 text-xl font-medium">{{ form.errors.person}}</div>
        </div>

        <div class="mb-4">
            <label class="font-sans text-lg text-white" for="message">Add Note</label>
            <textarea v-model="form.note" name="note" id="" class="border-2 border-gray-500 py-2 px-3 w-full md:w-full rounded focus:outline-none focus:border-sky-500 focus:ring-sky-500 block sm:text-sm focus:ring-0" cols="20" rows="8"></textarea>

            <div v-if="form.errors.note" class="text-red-600 mt-2 text-xl font-medium">{{ form.errors.note}}</div>
        </div>

        <div class="mb-4">
            <button type="submit" :disabled="form.processing" class=" py-3 px-4 text-white bg-[#800000] hover:bg-[#046ac9] rounded">BOOK TABLE NOW</button>
        </div>
    </form>

</template>
<script>

    import { useForm } from '@inertiajs/inertia-vue3'

    export default {
        name: 'Book',
    

        setup () {
            const form = useForm({
                fullname: '',
                phone: '',
                email: '',
                time: '',
                date: '',
                person: '',
                note: '',
            });

            function submit(){
                form.post('/booked')
            }

            return { form , submit};
            },
    }


</script>

<style>

    input {
     display: flex;
     align-items: center;
     justify-content: center;
     margin: 0 auto;
   }

    select {
        margin-bottom: 10px;
        margin-top: 10px;
    }

</style>
