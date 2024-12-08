<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nevo</title>
    <link rel="stylesheet" href=" <?php base_url() ?> css/styles.css">
</head>

<body>
    <!-- navbar -->
    <header class="bg-[#00BFFF] text-white shadow-md">
        <nav class="sticky mx-auto flex max-w-7xl items-center justify-between p-4">

            <div class="flex lg:flex-1">
                <a href="<?= base_url() ?>" class="text-3xl font-extrabold tracking-widest text-white hover:tracking-[15px] hover:-translate-x-2 duration-500 transition-all">
                    NEVO
                </a>
            </div>

            <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 space-x-6">
                <a href="<?= base_url('/events') ?>" class="group text-2xl font-semibold tracking-wider relative overflow-hidden hover:text-[#94ff94] transition-all duration-500">
                    <span>EVENTS</span>
                    <span class="block h-0.5 bg-[#64ff64] absolute left-1/2 bottom-0 w-0 transform -translate-x-1/2 transition-all duration-500 group-hover:w-full"></span>
                </a>
                <a href="#" class="group text-2xl font-semibold tracking-wider relative overflow-hidden hover:text-[#94ff94] transition-all duration-500">
                    <span>UPCOMING</span>
                    <span class="block h-0.5 bg-[#64ff64] absolute left-1/2 bottom-0 w-0 transform -translate-x-1/2 transition-all duration-500 group-hover:w-full"></span>
                </a>
                <a href="#" class="group text-2xl font-semibold tracking-wider relative overflow-hidden hover:text-[#94ff94] transition-all duration-500">
                    <span>CATEGORIES</span>
                    <span class="block h-0.5 bg-[#64ff64] absolute left-1/2 bottom-0 w-0 transform -translate-x-1/2 transition-all duration-500 group-hover:w-full"></span>
                </a>
                <a href="#" class="group text-2xl font-semibold tracking-wider relative overflow-hidden hover:text-[#94ff94] transition-all duration-500">
                    <span>ABOUT</span>
                    <span class="block h-0.5 bg-[#64ff64] absolute left-1/2 bottom-0 w-0 transform -translate-x-1/2 transition-all duration-500 group-hover:w-full"></span>
                </a>
            </div>

            <!-- Desktop mode -->
            <div class="hidden md:flex ml-auto space-x-6">
                <a href="#" class="group text-1xl font-semibold tracking-wider relative overflow-hidden hover:text-[#94ff94] transition-all duration-500">
                    <span>LOGIN</span>
                    <span class="block h-0.5 bg-[#64ff64] absolute left-1/2 bottom-0 w-0 transform -translate-x-1/2 transition-all duration-500 group-hover:w-full"></span>
                </a>
                <a href="#" class="group text-1xl font-semibold tracking-wider relative overflow-hidden hover:text-[#94ff94] transition-all duration-500">
                    <span>REGISTER</span>
                    <span class="block h-0.5 bg-[#64ff64] absolute left-1/2 bottom-0 w-0 transform -translate-x-1/2 transition-all duration-500 group-hover:w-full"></span>
                </a>
            </div>

            <!-- Mobile mode -->
            <div class="md:hidden flex-2 px-2">
                <button aria-label="Open navigation menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>

        </nav>
    </header>