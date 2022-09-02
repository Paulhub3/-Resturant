<template>

    <!-- THIRD HOME SECTION -->
    <div>

        <div class="flex space-x-6 justify-center items-center">
            <div class="mr-56">
                <h2>Delicious Food Menu</h2>
            </div>

            <div class="container mx-auto">
                <ul class="flex justify-center space-x-2 text-white ">
                    <li>
                        <button @click="currentTab(1)" class="inline-block px-4 py-2 bg-blue-500 focus:outline-none">
                            Tab 1
                         </button>
                    </li>
                    <li>
                        <button @click="currentTab(2)" class="inline-block px-4 py-2 bg-blue-500 focus:outline-none">
                        Tab 2
                        </button>
                    </li>
                    <li>
                        <button @click="currentTab(3)" class="inline-block px-4 py-2 bg-blue-500 focus:outline-none">
                            Tab 3
                        </button>
                    </li>
                </ul>
                <div class="p-3 mt-6 text-center bg-white">
                    <div v-if="tab === 1">
                        Tab one
                    </div>
                    <div v-if="tab === 2">
                        Tab two
                    </div>
                    <div v-if="tab === 3">
                        Tab three
                    </div>
                </div>
            </div>


        </div>

    </div>

</template>

<script>
    import { ref } from 'vue';
    export default {
        setup() {
            const tab = ref(1);
            const currentTab = (tabNumber) => (tab.value = tabNumber);
            return { tab, currentTab };
        },
    };

</script>
