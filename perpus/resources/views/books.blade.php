<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Buku - Perpustakaan Online</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    </script>
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

        
        .animate {
            animation: twinkle 0.5s ease-in-out forwards;
        }

        .scale-up {
            animation: scaleUp 0.5s ease-in-out forwards;
        }

        .toast-enter {
            transform: translateY(-20px);
            opacity: 0;
        }

        .toast-enter-active {
            transform: translateY(0);
            opacity: 1;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .toast-leave {
            transform: translateY(0);
            opacity: 1;
        }

        .toast-leave-active {
            transform: translateY(-20px);
            opacity: 0;
            transition: transform 0.3s ease, opacity 0.3s ease;
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
                <button onclick="openModal('loginModal')"
                    class="bg-white text-blue-800 hover:bg-gray-100 py-2 px-4 rounded-lg">Login</button>
                <button onclick="openModal('registerModal')"
                    class="bg-blue-800 text-white hover:bg-blue-700 py-2 px-4 rounded-lg">Register</button>
            </div>
        </div>
    </header>

    <!-- Login Modal -->
    <div id="loginModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white w-full max-w-md p-8 rounded-lg shadow-lg relative">
            <button onclick="closeModal('loginModal')"
                class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">&times;</button>
            <h2 class="text-3xl font-bold text-blue-900 text-center mb-4">Login</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="login-email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" id="login-email" name="email"
                        class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan email Anda" required>
                </div>
                <div class="mb-4">
                    <label for="login-password" class="block text-gray-700 font-bold mb-2">Password:</label>
                    <input type="password" id="login-password" name="password"
                        class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan password Anda" required>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Login</button>
                </div>
            </form>
            <p class="text-center mt-4">
                Belum punya akun? <a href="#" onclick="closeModal('loginModal'); openModal('registerModal');"
                    class="text-blue-600 hover:underline">Daftar sekarang</a>
            </p>
        </div>
    </div>


    <!-- Register Modal -->
    <div id="registerModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white w-full max-w-md p-8 rounded-lg shadow-lg relative">
            <button onclick="closeModal('registerModal')"
                class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">&times;</button>
            <h2 class="text-3xl font-bold text-blue-900 text-center mb-4">Register</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="register-name" class="block text-gray-700 font-bold mb-2">Nama Lengkap:</label>
                    <input type="text" id="register-name" name="name"
                        class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan nama lengkap Anda" required>
                </div>
                <div class="mb-4">
                    <label for="register-email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" id="register-email" name="email"
                        class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan email Anda" required>
                </div>
                <div class="mb-4">
                    <label for="register-password" class="block text-gray-700 font-bold mb-2">Password:</label>
                    <input type="password" id="register-password" name="password"
                        class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan password Anda" required>
                </div>
                <div class="mb-4">
                    <label for="register-confirm-password" class="block text-gray-700 font-bold mb-2">Konfirmasi
                        Password:</label>
                    <input type="password" id="register-confirm-password" name="confirm_password"
                        class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Konfirmasi password Anda" required>
                </div>
                <div class="mb-4">
                    <label for="register-phone" class="block text-gray-700 font-bold mb-2">Nomor Telepon:</label>
                    <input type="text" id="register-phone" name="phone"
                        class="w-full border-gray-300 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan nomor telepon Anda" required>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Daftar</button>
                </div>
            </form>
            <p class="text-center mt-4">
                Sudah ada akun? <a href="#" onclick="closeModal('registerModal'); openModal('loginModal');"
                    class="text-blue-600 hover:underline">Login sekarang</a>
            </p>
        </div>
    </div>


    <!-- Search and Filter Section -->
    <section class="py-8">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-6">
            <input type="text" id="searchInput" placeholder="Cari buku..."
                class="w-full md:w-1/3 border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4 md:mb-0">
            <select id="sortSelect"
                class="border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Sortir berdasarkan</option>
                <option value="judul">Judul</option>
                <option value="penulis">Penulis</option>
                <option value="tahun">Tahun Terbit</option>
            </select>
        </div>
    </section>


    <!-- Book Collection -->
    <main class="py-8">
        <div id="bookContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Grid Container for Cards -->
            <!-- Book Collection Card 1 -->
            <div class="book-card bg-white p-6 rounded-lg shadow-lg" data-title="Malinkundang" data-author="Niki"
                data-year="2024">
                <img src="https://via.placeholder.com/150" alt="Cover Buku 1"
                    class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-bold mb-2">Malinkundang</h3>
                <p class="text-gray-700">Penulis: Niki</p>
                <p class="text-gray-700">Tahun Terbit: 2024</p>
                <button class="mt-4 bg-blue-800 text-white py-2 px-4 rounded-lg" onclick="addBook(this)">Tambah
                    Buku</button>
            </div>

            <!-- Book Collection Card 2 -->
            <div class="book-card bg-white p-6 rounded-lg shadow-lg" data-title="Sangkuriang" data-author="Gilang"
                data-year="2004">
                <img src="https://via.placeholder.com/150" alt="Cover Buku 2"
                    class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-bold mb-2">Sangkuriang</h3>
                <p class="text-gray-700">Penulis: Gilang</p>
                <p class="text-gray-700">Tahun Terbit: 2004</p>
                <button class="mt-4 bg-blue-800 text-white py-2 px-4 rounded-lg" onclick="addBook(this)">Tambah
                    Buku</button>
            </div>

            <!-- Book Collection Card 3 -->
            <div class="book-card bg-white p-6 rounded-lg shadow-lg" data-title="Marjan" data-author="Nusa"
                data-year="2014">
                <img src="https://via.placeholder.com/150" alt="Cover Buku 3"
                    class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-bold mb-2">Marjan</h3>
                <p class="text-gray-700">Penulis: Nusa</p>
                <p class="text-gray-700">Tahun Terbit: 2014</p>
                <button class="mt-4 bg-blue-800 text-white py-2 px-4 rounded-lg" onclick="addBook(this)">Tambah
                    Buku</button>
            </div>

            <!-- Book Collection Card 4 -->
            <div class="book-card bg-white p-6 rounded-lg shadow-lg" data-title="MoonHalo" data-author="Anwar"
                data-year="2003">
                <img src="https://via.placeholder.com/150" alt="Cover Buku 4"
                    class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-bold mb-2">MoonHalo</h3>
                <p class="text-gray-700">Penulis: Anwar</p>
                <p class="text-gray-700">Tahun Terbit: 2003</p>
                <button class="mt-4 bg-blue-800 text-white py-2 px-4 rounded-lg" onclick="addBook(this)">Tambah
                    Buku</button>
            </div>

        </div>
    </main>



    <!-- CRUD Icon and Notification -->
    <div id="crudIcon" class="fixed bottom-20 right-10 flex items-center">
        <button onclick="openModal('bookModal')"
            class="bg-blue-800 text-white p-4 rounded-full shadow-lg focus:outline-none">
            <i class="fas fa-book text-3xl"></i>
            <span id="notification"
                class="absolute top-0 right-0 bg-red-600 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
        </button>
    </div>


    <!-- Modal -->
    <div id="bookModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
        role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <div
                class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div class="flex justify-end">
            
                    <button type="button" onclick="closeModal('bookModal')"
                        class="text-gray-400 hover:text-gray-600">
                        <span class="sr-only">Close</span>
                        <!-- X Icon -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            
                <div class="mt-3 text-center sm:mt-5">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Detail Buku</h3>
                    <div class="mt-4">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Judul</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Penulis</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tahun Terbit</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($books as $book)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $book->title }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $book->author }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $book->year }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            <button onclick="deleteBook({{ $book->id }})"
                                                class="bg-red-600 text-white py-2 px-4 rounded-lg">Hapus</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                
                <div class="mt-5 sm:mt-6">
                    <button type="button" onclick="closeModal('bookModal')"
                        class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 sm:text-sm">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="toastContainer" class="fixed top-0 right-0 p-6 space-y-2 z-50"></div>




    <div id="successBanner"
        class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-green-500 text-white py-2 px-4 rounded-lg shadow-lg hidden">
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


    let bookCount = 0;

    function addBook(button) {
        bookCount++;


        const notification = document.getElementById('notification');
        notification.textContent = bookCount;
        notification.style.display = 'flex';


        const crudIcon = document.getElementById('crudIcon');
        crudIcon.classList.add('animate');


        const banner = document.getElementById('successBanner');
        banner.style.display = 'block';


        setTimeout(() => {
            banner.style.display = 'none';
        }, 3000);


        setTimeout(() => {
            crudIcon.classList.remove('animate');
        }, 500);


        const bookCard = button.closest('.book-card');

        const newBook = {
            title: bookCard.getAttribute('data-title'),
            author: bookCard.getAttribute('data-author'),
            year: parseInt(bookCard.getAttribute('data-year'))
        };

        console.log(newBook);
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


        fetch('/books', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(newBook)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {

                alert('Book added successfully!');
            })
            .catch((error) => {
                console.error('There was a problem with your fetch operation:', error);
            });
    }

    function deleteBook(bookId) {
        if (confirm("Apakah Anda yakin ingin menghapus buku ini?")) {
            const deleteUrl = '{{ route('books.destroy', ':id') }}'.replace(':id', bookId);

            fetch(deleteUrl, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    showToast(data.message);
                    location.reload();
                })
                .catch(error => {
                    console.error('There was a problem with your fetch operation:', error);
                    showToast('Error: ' + error.message);
                });
        }
    }



    function showToast(message) {
        const toastContainer = document.getElementById('toastContainer');


        const toast = document.createElement('div');
        toast.className =
            "bg-green-500 text-white p-4 rounded-lg shadow-md transition-transform transform translate-y-4 opacity-0";
        toast.innerText = message;


        toastContainer.appendChild(toast);


        setTimeout(() => {
            toast.classList.remove("opacity-0");
            toast.classList.add("translate-y-0");
        }, 100);


        setTimeout(() => {
            toast.classList.add("opacity-0");
            setTimeout(() => {
                toast.remove();
            }, 300);
        }, 3000);
    }



    document.getElementById('searchInput').addEventListener('input', function() {
        const searchValue = this.value.toLowerCase();
        const books = document.querySelectorAll('.book-card');

        books.forEach(function(book) {
            const title = book.getAttribute('data-title').toLowerCase();
            book.style.display = title.includes(searchValue) ? 'block' : 'none';
        });
    });


    document.getElementById('sortSelect').addEventListener('change', function() {
        const sortBy = this.value;
        const bookContainer = document.getElementById('bookContainer');
        const books = Array.from(bookContainer.querySelectorAll('.book-card'));


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

            return (aValue > bValue ? 1 : -1);
        });


        bookContainer.innerHTML = '';
        books.forEach(function(book) {
            bookContainer.appendChild(book);
        });
    });
</script>
