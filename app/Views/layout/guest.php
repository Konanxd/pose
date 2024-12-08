<?= view('component/header.php') ?>

<section class="relative bg-gradient-to-r from-[#64C9FA] to-[#7DF27D] text-center text-white py-16 lg:py-24">
    <!-- Background image -->
    <div class="absolute inset-0 bg-cover bg-center opacity-80" style="background-image: url('assets/images/hero_banner.png');"></div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black opacity-40"></div>

    <!-- Content -->
    <div class="left-1/2 -translate-x-1/2 relative z-10 max-w-3xl">
        <h1 class="text-2xl lg:text-5xl text-gray-200 font-bold tracking-wider">
            <!-- Bener-bener bingung bikin kalimatnya -->
            Menyelami Jejak Sejarah, Menghidupkan Kisah Masa Lalu
        </h1>
        <p class="mt-4 text-lg lg:text-xl tracking-wide max-w-2xl mx-auto">
            Temukan peristiwa bersejarah, tokoh inspiratif, dan warisan budaya dari seluruh dunia di sini atau ikut berkontribusi dengan artikel yang kamu buat!
        </p>
        <div class="mt-8 flex justify-center gap-4">
            <a href="#explore"
                class="bg-[#f5e5a7] text-black py-3 px-6 rounded-full text-lg font-semibold hover:bg-[#FEC42D] transition-all">
                Lihat Artikel
            </a>
            <a href="#create"
                class="bg-white text-black py-3 px-6 rounded-full text-lg font-semibold hover:bg-gray-300 transition-all">
                Buat Artikel
            </a>
        </div>
    </div>
</section>

<?= view('component/footer.php') ?>