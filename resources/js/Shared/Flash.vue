<template>
    <div>

        <div v-if="!isHidden" class="relative z-0 grid justify-items-center">
            <div v-if="$page.props.flash.message"  class="alert flex-col mt-6 w-96 md:w-6/12 bg-white shadow-xl drop-shadow-lg px-3 py-12 rounded text-2xl font-sans absolute -z-10  font-semibold text-green-500">
                <h1 class="text-center">{{ $page.props.flash.message }}</h1>

                <button @click="isHidden = true" class="px-4 py-2 bg-green-500 text-base mt-6 w-16 mx-36 md:mx-44 lg:mx-56 rounded font-mono text-white">
                    OK
                </button>
            </div>
        </div>

    </div>
</template>

<script>
    export default {

        data() {
            return {
                isHidden: false,
            };
        },

    }

</script>


<style>



</style>
