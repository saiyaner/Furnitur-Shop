<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Furniture Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FFAE00',
                        secondary: '#FFCD29',
                    }
                }
            }
        }
    </script>
    <style>
        .notification-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .notification {
            transform: translateX(400px);
            opacity: 0;
            transition: all 0.5s ease;
        }
        
        .notification.show {
            transform: translateX(0);
            opacity: 1;
        }
        
        .notification.hide {
            transform: translateX(400px);
            opacity: 0;
        }
        
        .progress-bar {
            height: 4px;
            background-color: rgba(255, 255, 255, 0.5);
            width: 100%;
            overflow: hidden;
            border-radius: 2px;
            margin-top: 8px;
        }
        
        .progress-bar-fill {
            height: 100%;
            background-color: white;
            width: 100%;
            animation: progress 3s linear forwards;
        }
        
        @keyframes progress {
            from { width: 100%; }
            to { width: 0%; }
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Notifikasi Login Berhasil -->
    <div id="notificationContainer" class="notification-container">
        <div id="loginNotification" class="notification bg-gradient-to-r from-green-400 to-green-500 rounded-2xl p-6 flex items-center shadow-lg w-80">
            <div class="bg-white rounded-full p-4 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="text-white flex-1">
                <h2 class="text-xl font-bold">Login Berhasil</h2>
                <p class="text-sm">Anda berhasil login ke aplikasi</p>
                <div class="progress-bar">
                    <div class="progress-bar-fill"></div>
                </div>
            </div>
            <button id="closeNotificationBtn" class="text-white ml-2 hover:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <div class="flex">
        <!-- Sidebar - Fixed Position -->
        <aside class="w-64 bg-white border-r border-gray-200 fixed left-0 h-full overflow-y-auto">
            <div class="p-6">
                <h2 class="text-xl font-bold mb-8">USER PROFILE</h2>
                <nav class="space-y-5">
                    <a href="#" class="block text-gray-900 font-semibold hover:text-[#FFAE00]">Personal Info</a>
                    <a href="#" class="block text-gray-600 hover:text-gray-900">Order History</a>
                    <a href="#" class="block text-gray-600 hover:text-gray-900">Whislist</a>
                    <a href="#" class="block text-gray-600 hover:text-gray-900">Notification</a>
                    <a href="#" class="block text-gray-600 hover:text-gray-900">Leanguage</a>
                    <a href="#" class="block text-gray-600 hover:text-gray-900">Accesibility</a>
                    <a href="#" class="block text-gray-600 hover:text-gray-900">Settings</a>
                </nav>

                <!-- Sign Out Button -->
                <form method="POST" action="{{ route('logout') }}" class="mt-12">
                    @csrf
                    <button type="submit" class="flex items-center space-x-2 px-5 py-2.5 border-2 border-gray-800 rounded-full hover:bg-gray-100 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span class="font-semibold">Sign Out</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content - Offset by sidebar width -->
        <main class="ml-64 flex-1 flex justify-center">
            <div class="w-full max-w-4xl m-5">

                <div class="bg-[#7EC26D] rounded-3xl shadow-lg p-5 flex justify-start items-center gap-5 mb-5">
                    <iconify-icon icon="mdi:user" width="45" height="45" class="bg-white rounded-full p-3"></iconify-icon>
                    <div class="text-white">
                        <h1>Ida Bagus Putu Angga Lesmana</h1>
                        <h1>Admin</h1>
                        <a href="#">Indonesia, Bali</a>
                    </div>
                </div>

                <!-- Profile Info Card -->
                <div class="bg-white rounded-3xl shadow-lg p-10">
                    <div class="space-y-6">
                        <!-- Username -->
                        <div class="flex justify-between items-center pb-6 border-b border-gray-200">
                            <span class="text-gray-600 text-base">Username</span>
                            <span class="text-gray-900 text-base font-medium">{{ Auth::user()->name }}</span>
                        </div>

                        <!-- Email -->
                        <div class="flex justify-between items-center pb-6 border-b border-gray-200">
                            <span class="text-gray-600 text-base">Email</span>
                            <span class="text-gray-900 text-base">{{ Auth::user()->email }}</span>
                        </div>

                        <!-- Password -->
                        <div class="flex justify-between items-center pb-6 border-b border-gray-200">
                            <span class="text-gray-600 text-base">Password</span>
                            <span class="text-gray-900 text-base">************</span>
                        </div>

                        <!-- Phone -->
                        <div class="flex justify-between items-center pb-6 border-b border-gray-200">
                            <span class="text-gray-600 text-base">Phone</span>
                            <span class="text-gray-900 text-base">{{ Auth::user()->phone ?? '089-334-559-121' }}</span>
                        </div>

                        <!-- Gender -->
                        <div class="flex justify-between items-center pb-6 border-b border-gray-200">
                            <span class="text-gray-600 text-base">Gender</span>
                            <span class="text-gray-900 text-base">{{ Auth::user()->gender ?? 'Women' }}</span>
                        </div>

                        <!-- Address -->
                        <div class="flex justify-between items-center pb-6 border-b border-gray-200">
                            <span class="text-gray-600 text-base">Address</span>
                            <span class="text-gray-900 text-base">{{ Auth::user()->address ?? 'Perum. Graha Pertiwi' }}</span>
                        </div>

                        <!-- Date Account -->
                        <div class="flex justify-between items-center pb-6">
                            <span class="text-gray-600 text-base">Date Account</span>
                            <span class="text-gray-900 text-base">{{ Auth::user()->created_at->format('Y/m/d') }}</span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex space-x-4 mt-8">
                        <a href="{{ route('profile.edit') }}" class="flex-1 bg-[#1e3a8a] text-white py-3.5 rounded-xl text-center text-base font-semibold hover:bg-[#1e40af] transition-all">
                            Edit Profile
                        </a>
                        <form method="POST" action="#" class="flex-1" onsubmit="return confirm('Are you sure you want to delete your account?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full bg-[#dc2626] text-white py-3.5 rounded-xl text-base font-semibold hover:bg-[#b91c1c] transition-all">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const notification = document.getElementById('loginNotification');
            const closeBtn = document.getElementById('closeNotificationBtn');
            
            // Tampilkan notifikasi saat halaman dimuat
            setTimeout(() => {
                notification.classList.add('show');
            }, 100);
            
            // Sembunyikan notifikasi setelah 3 detik
            const autoHideTimeout = setTimeout(() => {
                hideNotification();
            }, 3000);
            
            // Fungsi untuk menyembunyikan notifikasi
            function hideNotification() {
                notification.classList.remove('show');
                notification.classList.add('hide');
                
                // Hapus elemen dari DOM setelah animasi selesai
                setTimeout(() => {
                    const container = document.getElementById('notificationContainer');
                    if (container) {
                        container.remove();
                    }
                }, 500);
            }
            
            // Tutup notifikasi ketika tombol close diklik
            closeBtn.addEventListener('click', function() {
                clearTimeout(autoHideTimeout);
                hideNotification();
            });
            
            // Juga sembunyikan notifikasi jika diklik di area notifikasi (selain tombol close)
            notification.addEventListener('click', function(e) {
                if (e.target === notification) {
                    clearTimeout(autoHideTimeout);
                    hideNotification();
                }
            });
        });
    </script>
</body>
</html>