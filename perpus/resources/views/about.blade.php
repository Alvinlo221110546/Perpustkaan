<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Perpustakaan Online</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900">

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



    <!-- Main Content -->
    <main class="py-16">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-10 text-blue-900">Tentang Kami</h2>
            
            <!-- First Section -->
            <section class="mb-16">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-3xl font-semibold text-blue-800 mb-4">Misi Kami</h3>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Kami berkomitmen untuk memberikan akses mudah dan cepat ke berbagai buku berkualitas yang dapat menginspirasi, memperkaya pengetahuan, dan menciptakan kebiasaan membaca di kalangan masyarakat.
                    </p>
                </div>
            </section>

            <!-- Second Section -->
            <section class="mb-16">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-3xl font-semibold text-blue-800 mb-4">Visi Kami</h3>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Menjadi perpustakaan digital terdepan yang menyediakan akses tanpa batas ke pengetahuan dan informasi, dan berperan aktif dalam membentuk generasi pembaca yang cerdas dan kritis.
                    </p>
                </div>
            </section>

            <!-- Why Choose Us Section -->
            <section class="text-center">
                <div class="bg-blue-100 p-8 rounded-lg shadow-md">
                    <h3 class="text-3xl font-semibold text-blue-900 mb-6">Mengapa Memilih Perpustakaan Kami?</h3>
                    <p class="text-lg text-gray-700 mb-6">
                        Kami menawarkan kemudahan akses ke berbagai buku dari kategori yang beragam, fitur pencarian canggih, dan layanan pelanggan yang siap membantu kebutuhan Anda dalam menemukan bahan bacaan yang tepat.
                    </p>
                    <a href="/register" class="bg-blue-800 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg">Bergabung Sekarang</a>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Perpustakaan Online. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
<script>
    function openModal(modalId) {
    document.getElementById(modalId).classList.remove('hidden');
}

function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
}
</script>