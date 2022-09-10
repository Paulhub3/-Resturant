<template>

    <!-- NAV -->
    <nav>

        <!-- NAV DIV -->
        <div class="flex bg-sky-200 pt-3 ml-[14%] md:ml-[0%] lg:ml-[22%] md:flex md:justify-center md:space-x-12 px-2 lg:px-24 lg:justify-between mx-auto">


            <!-- LOGO -->
            <div class="py-3 px-2">
                <Link href="/">
                    <img src="/images/hungry_logo.png" class="w-16 rounded-full" alt="logo">
                </Link>
            </div>

            <div class="py-3 px-2">
               <h1 class="text-gray-800 font-sans font-medium text-sm md:text-2xl">Welcome To Your Admin Dashboard</h1>
            </div>

            <div class="py-3 px-2">
                <button class="py-2 px-3 md:px-4 bg-red-700 font-medium text-base font-sans text-white rounded-lg">
                    Logout
                </button>
            </div>

        </div>

     </nav>

</template>
