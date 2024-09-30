<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Buku - Perpustakaan Online</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Animation for the CRUD icon "twinkle" effect */
        @keyframes twinkle {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.2);
                opacity: 0.8;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Notification number scale-up effect */
        @keyframes scaleUp {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.5);
                opacity: 0.7;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Assigning the classes for animation */
        .animate {
            animation: twinkle 0.5s ease-in-out forwards;
        }

        .scale-up {
            animation: scaleUp 0.5s ease-in-out forwards;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900">

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


    <!-- Search and Filter Section -->
    <section class="py-8">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-6">
            <input type="text" id="searchInput" placeholder="Cari buku..." class="w-full md:w-1/3 border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4 md:mb-0">
            <select id="sortSelect" class="border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Sortir berdasarkan</option>
                <option value="judul">Judul</option>
                <option value="penulis">Penulis</option>
                <option value="tahun">Tahun Terbit</option>
            </select>
        </div>
    </section>


    <!-- Book Collection -->
    <main class="py-8">
        <div id="bookContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"> <!-- Grid Container for Cards -->
            <!-- Book Collection Card 1 -->
            <div class="book-card bg-white p-6 rounded-lg shadow-lg" data-title="Malinkundang" data-author="Niki" data-year="2024">
                <img src="https://via.placeholder.com/150" alt="Cover Buku 1" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-bold mb-2">Malinkundang</h3>
                <p class="text-gray-700">Penulis: Niki</p>
                <p class="text-gray-700">Tahun Terbit: 2024</p>
                <button class="mt-4 bg-blue-800 text-white py-2 px-4 rounded-lg" onclick="addBook()">Tambah Buku</button>
            </div>

            <!-- Book Collection Card 2 -->
            <div class="book-card bg-white p-6 rounded-lg shadow-lg" data-title="Sangkuriang" data-author="Gilang" data-year="2004">
                <img src="https://via.placeholder.com/150" alt="Cover Buku 2" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-bold mb-2">Sangkuriang</h3>
                <p class="text-gray-700">Penulis: Gilang</p>
                <p class="text-gray-700">Tahun Terbit: 2004</p>
                <button class="mt-4 bg-blue-800 text-white py-2 px-4 rounded-lg" onclick="addBook()">Tambah Buku</button>
            </div>

            <!-- Book Collection Card 3 -->
            <div class="book-card bg-white p-6 rounded-lg shadow-lg" data-title="Marjan" data-author="Nusa" data-year="2014">
                <img src="https://via.placeholder.com/150" alt="Cover Buku 3" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-bold mb-2">Marjan</h3>
                <p class="text-gray-700">Penulis: Nusa</p>
                <p class="text-gray-700">Tahun Terbit: 2014</p>
                <button class="mt-4 bg-blue-800 text-white py-2 px-4 rounded-lg" onclick="addBook()">Tambah Buku</button>
            </div>

            <!-- Book Collection Card 4 -->
            <div class="book-card bg-white p-6 rounded-lg shadow-lg" data-title="MoonHalo" data-author="Anwar" data-year="2003">
                <img src="https://via.placeholder.com/150" alt="Cover Buku 4" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-bold mb-2">MoonHalo</h3>
                <p class="text-gray-700">Penulis: Anwar</p>
                <p class="text-gray-700">Tahun Terbit: 2003</p>
                <button class="mt-4 bg-blue-800 text-white py-2 px-4 rounded-lg" onclick="addBook()">Tambah Buku</button>
            </div>

        </div>
    </main>



    <!-- CRUD Icon and Notification -->
    <div id="crudIcon" class="fixed bottom-20 right-10 flex items-center">
        <button class="bg-blue-800 text-white p-4 rounded-full shadow-lg focus:outline-none">
            <i class="fas fa-book text-3xl"></i>
            <span id="notification" class="absolute top-0 right-0 bg-red-600 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
        </button>
    </div>

    <div id="successBanner" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-green-500 text-white py-2 px-4 rounded-lg shadow-lg hidden">
        Buku berhasil ditambahkan!
    </div>


    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-6 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Perpustakaan Kami. All rights reserved.</p>
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


    let bookCount = 0; // Counter for added books

    function addBook() {
        // Increment book count
        bookCount++;

        // Show notification
        const notification = document.getElementById('notification');
        notification.textContent = bookCount;
        notification.style.display = 'flex';

        // Add "twinkle" animation to the CRUD icon
        const crudIcon = document.getElementById('crudIcon');
        crudIcon.classList.add('animate');

        // Add "scale-up" animation to the notification
        notification.classList.add('scale-up');

        // Show success banner
        const banner = document.getElementById('successBanner');
        banner.style.display = 'block';

        // Hide banner after 3 seconds
        setTimeout(() => {
            banner.style.display = 'none';
        }, 3000);

        // Remove the animation classes after 0.5 seconds to reset
        setTimeout(() => {
            crudIcon.classList.remove('animate');
            notification.classList.remove('scale-up');
        }, 500);
    }


    // Fungsi untuk melakukan pencarian
    document.getElementById('searchInput').addEventListener('input', function() {
        const searchValue = this.value.toLowerCase();
        const books = document.querySelectorAll('.book-card');

        books.forEach(function(book) {
            const title = book.getAttribute('data-title').toLowerCase();
            book.style.display = title.includes(searchValue) ? 'block' : 'none'; // Tampilkan jika cocok
        });
    });

    // Fungsi untuk melakukan sortir
    document.getElementById('sortSelect').addEventListener('change', function() {
        const sortBy = this.value;
        const bookContainer = document.getElementById('bookContainer');
        const books = Array.from(bookContainer.querySelectorAll('.book-card'));

        // Sortir berdasarkan pilihan yang dipilih
        books.sort(function(a, b) {
            let aValue, bValue;

            if (sortBy === 'judul') {
                aValue = a.getAttribute('data-title').toLowerCase();
                bValue = b.getAttribute('data-title').toLowerCase();
            } else if (sortBy === 'penulis') {
                aValue = a.getAttribute('data-author').toLowerCase();
                bValue = b.getAttribute('data-author').toLowerCase();
            } else if (sortBy === 'tahun') {
                aValue = parseInt(a.getAttribute('data-year'));
                bValue = parseInt(b.getAttribute('data-year'));
            }

            return (aValue > bValue ? 1 : -1); // Urutkan secara ascending
        });

        // Kosongkan kontainer dan tambahkan hasil sortir
        bookContainer.innerHTML = '';
        books.forEach(function(book) {
            bookContainer.appendChild(book);
        });
    });
</script>