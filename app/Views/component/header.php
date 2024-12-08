<!-- navbar -->
<header class="bg-[#FAF3E0] text-white shadow-lg border-gray-500 border-b-1 sticky top-0 z-50">
    <nav class="m-auto flex max-w-5xl items-center justify-between p-4">

        <div class="flex lg:flex-1">
            <a href="<?= base_url() ?>" class="text-[#2C3E50] text-2xl font-extrabold tracking-widest hover:tracking-[15px] hover:translate-x-1 duration-500 transition-all">
                PO SE
            </a>
        </div>

        <div class="hidden md:flex text-[#2C3E50] absolute left-1/2 transform -translate-x-1/2 space-x-6">
            <a href="<?= base_url('/dashboard') ?>" class="group text-xl font-semibold tracking-wider relative overflow-hidden hover:text-[#CD7F32] transition-all duration-500">
                <span>TERKINI</span>
                <span class="block h-0.5 bg-[#CD7F32] absolute left-1/2 bottom-0 w-0 transform -translate-x-1/2 transition-all duration-500 group-hover:w-full"></span>
            </a>
            <a href="<?= base_url('/kategori') ?>" class="group text-xl font-semibold tracking-wider relative overflow-hidden hover:text-[#CD7F32] transition-all duration-500">
                <span>KATEGORI</span>
                <span class="block h-0.5 bg-[#CD7F32] absolute left-1/2 bottom-0 w-0 transform -translate-x-1/2 transition-all duration-500 group-hover:w-full"></span>
            </a>
            <a href="<?= base_url('/about') ?>" class="group text-xl font-semibold tracking-wider relative overflow-hidden hover:text-[#CD7F32] transition-all duration-500">
                <span>ABOUT</span>
                <span class="block h-0.5 bg-[#CD7F32] absolute left-1/2 bottom-0 w-0 transform -translate-x-1/2 transition-all duration-500 group-hover:w-full"></span>
            </a>
        </div>

        <!-- Desktop mode -->
        <div class="hidden md:flex text-[#2C3E50] ml-auto space-x-6">
            <a href="<?= base_url('/login') ?>" class="group font-semibold tracking-wider relative overflow-hidden hover:text-[#CD7F32] transition-all duration-500">
                <span>MASUK</span>
                <span class="block h-0.5 bg-[#CD7F32] absolute left-1/2 bottom-0 w-0 transform -translate-x-1/2 transition-all duration-500 group-hover:w-full"></span>
            </a>
            <a href="<?= base_url('/register') ?>" class="group font-semibold tracking-wider relative overflow-hidden hover:text-[#CD7F32] transition-all duration-500">
                <span>DAFTAR</span>
                <span class="block h-0.5 bg-[#CD7F32] absolute left-1/2 bottom-0 w-0 transform -translate-x-1/2 transition-all duration-500 group-hover:w-full"></span>
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