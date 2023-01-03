<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('docTitle')</title>
</head>

<body>

    <header class=" w-full bg-indigo-400">
        <div class="container mx-auto px-[20%]">
            <div class="flex items-center justify-between h-10">
                <div class="logo">Logo</div>

                <nav>
                    <ul class="flex">
                        <a href="http://127.0.0.1:8000">
                            <li class="px-3">Home</li>
                        </a>
                        <a href="http://127.0.0.1:8000/about">
                            <li class="px-3">About</li>
                        </a>
                        <a href="http://127.0.0.1:8000/services">
                            <li class="px-3">Services</li>
                        </a>
                        <a href="http://127.0.0.1:8000/contact">
                            <li class="px-3 pr-0">Contact us</li>
                        </a>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <div class="container mx-auto px-[20%]">
        <section class="pt-10">
            @yield('content')
        </section>
    </div>



</body>

</html>
