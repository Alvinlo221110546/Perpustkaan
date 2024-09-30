<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Perpustakaan online dengan koleksi buku terbaik">
    <title>Perpustakaan Online</title>
    <!-- Link CDN Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    .fade-in {
        opacity: 0;
        transition: opacity 0.8s ease-in-out;
    }

    .fade-in.visible {
        opacity: 1;
    }

    .scale-up {
        transform: scale(0.9);
        transition: transform 0.8s ease;
    }

    .scale-up-visible {
        transform: scale(1);
    }
</style>

</head>
<body class="text-gray-900">

  <!-- Navbar -->
<header class="bg-blue-900 text-white py-6 shadow-lg">
    <div class="container mx-auto flex justify-between items-center px-6">
        <div class="flex items-center space-x-8">
            <h1 class="text-4xl font-bold tracking-wide">Perpustakaan Kami</h1>
            <nav>
                <ul class="flex space-x-8 text-lg">
                    <li><a href="/" class="hover:underline">Home</a></li>
                    <li><a href="/books" class="hover:underline">Koleksi Buku</a></li>
                    <li><a href="/about" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="/contact" class="hover:underline">Kontak</a></li>
                </ul>
            </nav>
        </div>

        <div class="flex space-x-6">
        <button onclick="openModal('loginModal')" class="bg-white text-blue-800 hover:bg-gray-100 py-2 px-4 rounded-lg">Login</button>
        <button onclick="openModal('registerModal')" class="bg-blue-800 text-white hover:bg-blue-700 py-2 px-4 rounded-lg">Register</button>
        </div>
    </div>
</header>

<!-- Login Modal -->
<div id="loginModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white w-full max-w-md p-8 rounded-lg shadow-lg relative">
        <button onclick="closeModal('loginModal')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">&times;</button>
        <h2 class="text-3xl font-bold text-blue-900 text-center mb-4">Login</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="login-email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" id="login-email" name="email" class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan email Anda" required>
            </div>
            <div class="mb-4">
                <label for="login-password" class="block text-gray-700 font-bold mb-2">Password:</label>
                <input type="password" id="login-password" name="password" class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan password Anda" required>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Login</button>
            </div>
        </form>
        <p class="text-center mt-4">
            Belum punya akun? <a href="#" onclick="closeModal('loginModal'); openModal('registerModal');" class="text-blue-600 hover:underline">Daftar sekarang</a>
        </p>
    </div>
</div>


 <!-- Register Modal -->
<div id="registerModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white w-full max-w-md p-8 rounded-lg shadow-lg relative">
        <button onclick="closeModal('registerModal')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">&times;</button>
        <h2 class="text-3xl font-bold text-blue-900 text-center mb-4">Register</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="register-name" class="block text-gray-700 font-bold mb-2">Nama Lengkap:</label>
                <input type="text" id="register-name" name="name" class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nama lengkap Anda" required>
            </div>
            <div class="mb-4">
                <label for="register-email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" id="register-email" name="email" class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan email Anda" required>
            </div>
            <div class="mb-4">
                <label for="register-password" class="block text-gray-700 font-bold mb-2">Password:</label>
                <input type="password" id="register-password" name="password" class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan password Anda" required>
            </div>
            <div class="mb-4">
                <label for="register-confirm-password" class="block text-gray-700 font-bold mb-2">Konfirmasi Password:</label>
                <input type="password" id="register-confirm-password" name="confirm_password" class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Konfirmasi password Anda" required>
            </div>
            <div class="mb-4">
                <label for="register-phone" class="block text-gray-700 font-bold mb-2">Nomor Telepon:</label>
                <input type="text" id="register-phone" name="phone" class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nomor telepon Anda" required>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Daftar</button>
            </div>
        </form>
        <p class="text-center mt-4">
            Sudah ada akun? <a href="#" onclick="closeModal('registerModal'); openModal('loginModal');" class="text-blue-600 hover:underline">Login sekarang</a>
        </p>
    </div>
</div>



<!-- Hero Section Full-Screen with Image and Text -->
<section class="h-screen  flex items-center justify-center">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6">
        <!-- Image Section -->
        <div class="w-full md:w-1/2 mb-8 md:mb-0">
            <img src="https://th.bing.com/th/id/OIP.IyHCC216oCTjjMwSkhQGMwHaDv?w=297&h=176&c=7&r=0&o=5&dpr=1.4&pid=1.7" alt="Library" class="w-full h-auto rounded-lg shadow-lg">
        </div>

        <!-- Text Section -->
        <div class="w-full md:w-1/2  bg-opacity-70 p-8 rounded-lg text-black">
            <h2 class="text-5xl font-bold mb-4">Perpustakaan Modern untuk Semua</h2>
            <p class="text-xl mb-6">Akses ribuan buku, dari fiksi hingga non-fiksi, yang bisa diakses kapan saja di mana saja. Bergabunglah sekarang dan temukan buku favorit Anda.</p>
            <a href="/books" class="bg-blue-900 hover:bg-blue-800 text-white py-3 px-8 rounded-md text-lg font-semibold transition duration-300 ease-in-out">Jelajahi Koleksi</a>

        </div>
    </div>
</section>

<!-- Feature Section with Animation -->
<section class="py-16 bg-blue-50 fade-in">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-teal-700 mb-8">Kenapa Memilih Kami?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="p-6 bg-white rounded-lg shadow-md scale-up">
                <img src="https://th.bing.com/th/id/OIP.DQEylgeu82h_cxH_Vp8ibgHaL0?w=188&h=301&c=7&r=0&o=5&dpr=1.4&pid=1.7" alt="Buku Terbaru" class="w-full h-40 object-cover mb-4 rounded">
                <h3 class="text-2xl font-bold text-teal-800">Koleksi Buku Terbaru</h3>
                <p class="mt-2 text-teal-700">Kami menyediakan buku-buku terbaru dari berbagai genre dan penulis ternama.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md scale-up">
                <img src="https://th.bing.com/th/id/OIP.DQEylgeu82h_cxH_Vp8ibgHaL0?w=188&h=301&c=7&r=0&o=5&dpr=1.4&pid=1.7" alt="Pinjam Mudah" class="w-full h-40 object-cover mb-4 rounded">
                <h3 class="text-2xl font-bold text-teal-800">Pinjam Buku dengan Mudah</h3>
                <p class="mt-2 text-teal-700">Proses peminjaman buku yang mudah dan cepat tanpa harus antre panjang.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md scale-up">
                <img src="https://th.bing.com/th/id/OIP.DQEylgeu82h_cxH_Vp8ibgHaL0?w=188&h=301&c=7&r=0&o=5&dpr=1.4&pid=1.7" alt="Rekomendasi Personal" class="w-full h-40 object-cover mb-4 rounded">
                <h3 class="text-2xl font-bold text-teal-800">Rekomendasi Personal</h3>
                <p class="mt-2 text-teal-700">Dapatkan rekomendasi buku berdasarkan preferensi dan riwayat membaca Anda.</p>
            </div>
        </div>
    </div>
</section>

<!-- New Section with Background -->
<section class="py-16 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-blue-700 mb-8">Temukan Buku Favorit Anda</h2>
        <p class="text-blue-700 mb-6">Kami memiliki ribuan buku dalam berbagai kategori yang siap menemani perjalanan literasi Anda.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg scale-up">
                <img src="https://th.bing.com/th/id/OIP.DQEylgeu82h_cxH_Vp8ibgHaL0?w=188&h=301&c=7&r=0&o=5&dpr=1.4&pid=1.7" alt="Buku 1" class="h-64 w-full object-cover mb-4 rounded-lg">
                <h3 class="text-xl font-semibold text-black-800 mb-2">Judul Buku 1</h3>
                <p class="text-teal-700">Penulis: John Doe</p>
                <a href="#" class="text-teal-600 hover:underline mt-4 block">Lihat Detail</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg scale-up">
                <img src="https://th.bing.com/th/id/OIP.DQEylgeu82h_cxH_Vp8ibgHaL0?w=188&h=301&c=7&r=0&o=5&dpr=1.4&pid=1.7" alt="Buku 2" class="h-64 w-full object-cover mb-4 rounded-lg">
                <h3 class="text-xl font-semibold text-black-800 mb-2">Judul Buku 2</h3>
                <p class="text-teal-700">Penulis: Jane Doe</p>
                <a href="#" class="text-teal-600 hover:underline mt-4 block">Lihat Detail</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg scale-up">
                <img src="https://th.bing.com/th/id/OIP.DQEylgeu82h_cxH_Vp8ibgHaL0?w=188&h=301&c=7&r=0&o=5&dpr=1.4&pid=1.7" alt="Buku 3" class="h-64 w-full object-cover mb-4 rounded-lg">
                <h3 class="text-xl font-semibold text-black-800 mb-2">Judul Buku 3</h3>
                <p class="text-teal-700">Penulis: Alex Doe</p>
                <a href="#" class="text-teal-600 hover:underline mt-4 block">Lihat Detail</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16 bg-teal-50">
    <div class="container mx-auto text-center fade-in">
        <h2 class="text-3xl font-bold text-teal-700 mb-4">Butuh Bantuan?</h2>
        <p class="mb-6 text-teal-700">Hubungi kami kapan saja jika Anda membutuhkan bantuan atau pertanyaan terkait koleksi buku.</p>
        <a href="/contact" class="bg-blue-900 hover:bg-blue-800 text-white py-3 px-8 rounded-md text-lg font-semibold transition duration-300 ease-in-out">Kontak Kami</a>


    </div>
</section>

<!-- Footer -->
<footer class="bg-blue-900 text-white py-6">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 Perpustakaan Online. All rights reserved.</p>
    </div>
</footer>

<!-- JavaScript Animations -->
<script>
    // Fade in effect for sections
    document.addEventListener('DOMContentLoaded', function() {
        const fadeInElements = document.querySelectorAll('.fade-in');
        fadeInElements.forEach(el => {
            el.classList.add('visible');
        });
    });

    // Scale-up effect for featurecards
    const scaleUpElements = document.querySelectorAll('.scale-up');
    window.addEventListener('scroll', () => {
        scaleUpElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight) {
                el.classList.add('scale-up-visible');
            }
        });
    });

    function openModal(modalId) {
    document.getElementById(modalId).classList.remove('hidden');
}

function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
}

</script>

