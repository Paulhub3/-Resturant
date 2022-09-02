<template>

    <!-- NAV -->
    <nav id="navbar" class="mx-auto">

        <!-- NAV DIV -->

        <div class="bg-white flex space-x-12 justify-center items-center mx-auto">

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

     </nav>

</template>

​<script>
    //When the user scrolls down 20px from the top of the document, slide down the navbar
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-50%";
    }
    }
</script>


<style>
    #navbar{
        position: fixed;
        top: -50%;
        width: 100%;
        display: block;
        transition: top 0.3s;

    }
</style>
