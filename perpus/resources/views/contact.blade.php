<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Perpustakaan Online</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-900">

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
            <h2 class="text-4xl font-bold text-center mb-6">Kontak Kami</h2>
            <p class="text-lg text-gray-700 text-center mb-8">Jika Anda memiliki pertanyaan atau membutuhkan bantuan, silakan hubungi kami melalui formulir di bawah ini.</p>

            <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Nama:</label>
                        <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nama Anda" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                        <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan email Anda" required>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-bold mb-2">Pesan:</label>
                        <textarea id="message" name="message" rows="5" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tulis pesan Anda" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Kirim Pesan</button>
                    </div>
                </form>

            </div>
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