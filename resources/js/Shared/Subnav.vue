<template>
    <div>
            <!-- NAV -->
            <nav>

                <!-- NAV DIV -->
                <div class="flex px-6 ">


                    <div  class="flex space-x-12 justify-center items-center mx-auto">

                         <!-- LOGO -->
                        <div class="py-3 px-2 mr-36">
                            <Link href="/">
                                <img src="/images/hungry_logo.png" class="w-24" alt="logo">
                            </Link>
                        </div>

                        <div class="py-3 px-3">
                            <Link href="/"  class="text-xl font-medium text-gray-700 font-sans hover:text-red-500">Home</Link>
                        </div>

                        <div class="py-3 px-3">
                            <Link href="/"  class="text-xl font-medium text-gray-700 font-sans hover:text-red-500">Menu</Link>
                        </div>

                        <div class="py-3 px-3">
                            <Link href="/"  class="text-xl font-medium text-gray-700 font-sans hover:text-red-500">About</Link>
                        </div>

                        <div class="py-3 px-3">
                            <Link href="/"  class="text-xl font-medium text-gray-700 font-sans hover:text-red-500">Contact us</Link>
                        </div>

                        <div class="py-3 px-24">
                            <button class="py-3 px-4 bg-red-700 font-semibold hover:text-red-700 hover:bg-white font-sans hover:border-2 hover:border-red-600 text-white rounded-lg">Book Table</button>
                        </div>

                    </div>

                </div>

            </nav>
    </div>
</template>
