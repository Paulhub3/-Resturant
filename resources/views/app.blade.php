<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <script src="https://kit.fontawesome.com/c73113cb2b.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="/images/hungry_logo.png">
    @vite('resources/css/app.css')
    @inertiaHead
  </head>
  <body>
    @inertia
    @vite('resources/js/app.js')

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
  </body>
</html>
