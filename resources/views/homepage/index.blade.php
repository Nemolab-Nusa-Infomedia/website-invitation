@extends('component.layout')

@section('content')
    <!-- SECTION 1 -->
        <div id="home" class="flex-col w-4/5 mx-auto flex lg:flex-row lg:items-center mb-16 py-16">
            <div class="w-full lg:w-1/2">
                <img src="{{ asset('assets/img/Frame 100.png') }}" class="w-full" alt="">
            </div>
            <div class="w-full lg:w-1/2">
                <div class="w-full pt-6 lg:w-11/12 xl:w-4/5 lg:ms-auto">
                    <h3 class="font-semibold text-2xl lg:text-4xl mb-6">Rayakan Momen Spesial dengan Undangan Digital yang Berkesan.</h3>
                    <p class="text-base mb-6">Kirim kabar gembira lebih mudah dengan undangan digital yang dapat disesuaikan untuk acara apapun—cepat, praktis, dan ramah lingkungan.</p>
                    <div class="grid grid-cols-2">
                        <div class="flex gap-3">
                            <button class="bg-coklat text-xs w-11/12 xl:w-4/5 lg:text-base py-2 rounded-lg text-white"><a href=""><i class="fa-solid fa-cart-shopping"></i> Pesan Sekarang</a></button>
                        </div>
                        <div class="flex gap-3">
                            <button class="border-coklat text-xs w-11/12 xl:w-4/5 lg:text-base py-2 rounded-lg text-coklat"><a href=""><i class="fa-solid fa-cart-shopping"></i> Lihat Tema</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION 1 -->

        <!-- SECTION 2 -->
        <section class=" mx-auto px-4 py-16 custom-bg-section-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

              <!-- Desain Mudah -->
              <div class="text-center p-6 bg-white rounded-lg shadow-md w-full">
                <div class="mb-4 text-orange-500">
                  <!-- Font Awesome Icon for Paint Brush -->
                  <i class="fas fa-paint-brush fa-3x"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Desain Mudah</h3>
                <p class="text-sm text-gray-600">Sesuaikan desain undangan dengan tema acara Anda dengan cepat dan mudah.</p>
              </div>

              <!-- Akses Tanpa Batas -->
              <div class="text-center p-6 bg-white rounded-lg shadow-md w-full">
                <div class="mb-4 text-orange-500">
                  <!-- Font Awesome Icon for Mobile Access -->
                  <i class="fas fa-mobile-alt fa-3x"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Akses Tanpa Batas</h3>
                <p class="text-sm text-gray-600">Tamu dapat mengakses undangan dari perangkat apa pun, kapan saja.</p>
              </div>

              <!-- Pengelolaan Mudah -->
              <div class="text-center p-6 bg-white rounded-lg shadow-md w-full">
                <div class="mb-4 text-orange-500">
                  <!-- Font Awesome Icon for Management -->
                  <i class="fas fa-tasks fa-3x"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Pengelolaan Mudah</h3>
                <p class="text-sm text-gray-600">Kelola semua undangan dan konfirmasi kehadiran dalam satu platform yang efisien.</p>
              </div>

              <!-- Pembaruan Instan -->
              <div class="text-center p-6 bg-white rounded-lg shadow-md w-full">
                <div class="mb-4 text-orange-500">
                  <!-- Font Awesome Icon for Sync -->
                  <i class="fas fa-sync-alt fa-3x"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Pembaruan Instan</h3>
                <p class="text-sm text-gray-600">Update undangan secara langsung dan beri tahu semua tamu tanpa perlu mencetak ulang.</p>
              </div>

            </div>
          </section>
        <!-- END SECTION 2 -->

        <!-- SECTION 3 -->
        <div id="keunggulan" class="container mx-auto px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Section -->
                <div class="flex flex-col justify-center">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">Keunggulan Undangan Digital untuk Acara Anda</h2>
                    <p class="text-gray-600 mb-6">
                        Undangan digital memungkinkan Anda menyesuaikan desain dengan tema acara secara fleksibel dan mudah melakukan perubahan. Edit elemen desain dan kirim pembaruan instan, memastikan semua tamu mendapatkan informasi terbaru tanpa perlu mencetak ulang.
                    </p>
                    <button class="bg-coklat block mt-6 py-2 px-3 rounded-lg text-white"><a href=""><i class="fa-solid fa-cart-shopping"></i> Pesan Sekarang</a></button>
                </div>

                <!-- Right Section: Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Card 1 -->
                    <div class="group bg-yellow-500 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:-rotate-2 hover:bg-yellow-500">
                        <div class="flex items-center space-x-2 mb-4">
                            <span class="text-3xl text-white"><i class="fa-solid fa-clock-rotate-left text-4xl mb-3 xl:mb-2"></i></span>
                            <h3 class="text-lg text-white font-semibold">Hemat Waktu</h3>
                        </div>
                        <p class="text-white">
                            Undangan digital memungkinkan Anda mengirimkan undangan ke banyak tamu dalam hitungan detik. Tidak perlu repot dengan pengiriman fisik.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="group bg-hitam-muda p-6 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:-rotate-2 hover:bg-yellow-500">
                        <div class="flex items-center space-x-2 mb-4">
                            <span class="text-3xl text-white"><i class="fa-solid fa-money-bill-wave text-4xl mb-3 xl:mb-2"></i></span>
                            <h3 class="text-lg font-semibold text-white">Biaya Terjangkau</h3>
                        </div>
                        <p class="text-white group-hover:text-gray-100">
                            Kurangi biaya pengiriman dan cetak dengan undangan digital. Pilihan hemat untuk acara besar tanpa mengorbankan kualitas.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="group bg-hitam-muda p-6 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:-rotate-2 hover:bg-yellow-500">
                        <div class="flex items-center space-x-2 mb-4">
                            <span class="text-3xl text-white"><i class="fa-solid fa-screwdriver-wrench text-4xl mb-3 xl:mb-2"></i></span>
                            <h3 class="text-lg font-semibold text-white">Pengelolaan Sederhana</h3>
                        </div>
                        <p class="text-white group-hover:text-gray-100">
                            Kelola daftar tamu, konfirmasi kehadiran, dan kirim pengingat secara otomatis. Semua dalam satu platform yang mudah digunakan.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="group bg-hitam-muda p-6 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:-rotate-2 hover:bg-yellow-500">
                        <div class="flex items-center space-x-2 mb-4">
                            <span class="text-3xl text-white"><i class="fa-solid fa-leaf text-4xl mb-3 xl:mb-2"></i></span>
                            <h3 class="text-lg font-semibold text-white">Ramah Lingkungan</h3>
                        </div>
                        <p class="text-white group-hover:text-gray-100">
                            Kurangi penggunaan kertas dan dampak lingkungan dengan memilih undangan digital. Solusi cerdas untuk acara yang lebih hijau.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION 3 -->

        <!-- SECTION 4 -->
        <div id="bantuan" class="container mx-auto px-4 py-12 flex justify-center items-center custom-bg-section-4 rounded-xl">
            <div class="w-full lg:w-11/12">
                <!-- Title Section -->
                <div class="text-center mb-12">
                    <h1 class="text-3xl font-bold text-gray-800">Langkah Mudah Memesan Undangan</h1>
                    <p class="text-lg text-gray-600">Ikuti Langkah Mudah Untuk Mendapatkan Undangan Impian Anda.</p>
                </div>

                <!-- Steps and Image Section -->
                <div class="flex flex-col lg:flex-row justify-center items-center gap-8 lg:gap-12">
                    <!-- Left Column (Steps 1, 2, 3) -->
                    <div class="space-y-8 lg:w-1/3">
                        <!-- Step 1 -->
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-red-700 text-white flex justify-center items-center rounded-full">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Buat Akun</h3>
                                <p class="text-gray-600">Anda dapat membuat akun pribadi atau akun perusahaan</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-red-700 text-white flex justify-center items-center rounded-full">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Temukan Acaranya</h3>
                                <p class="text-gray-600">Cari acara yang ingin Anda buat undangannya.</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-red-700 text-white flex justify-center items-center rounded-full">
                                <i class="fas fa-palette"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Pilih template desain</h3>
                                <p class="text-gray-600">Pilih dari berbagai template yang tersedia.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Center Image -->
                    <div class="lg:w-1/3">
                        <img src="{{ url('assets/img/mockup.png') }}" alt="Phone with invitation" class="mx-auto w-80">
                    </div>

                    <!-- Right Column (Steps 4, 5, 6) -->
                    <div class="space-y-8 lg:w-1/3">
                        <!-- Step 4 -->
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-red-700 text-white flex justify-center items-center rounded-full">
                                <i class="fas fa-font"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Sesuaikan teks</h3>
                                <p class="text-gray-600">Edit teks sesuai kebutuhan Anda.</p>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-red-700 text-white flex justify-center items-center rounded-full">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Bayar online</h3>
                                <p class="text-gray-600">Lakukan pembayaran secara online untuk memproses pesanan.</p>
                            </div>
                        </div>

                        <!-- Step 6 -->
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-red-700 text-white flex justify-center items-center rounded-full">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">Undangan Anda sudah Tayang!</h3>
                                <p class="text-gray-600">Undangan siap untuk dibagikan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION 4 -->

        <!-- SECTION 5 -->
        <section id="tamplate" class="max-w-7xl mx-auto py-8">
            <!-- Judul dan deskripsi -->
            <div class="text-center mb-8">
              <h2 class="text-3xl font-bold mb-2">Temukan Inspirasi dari Beragam Template Kami</h2>
              <p class="text-gray-600">Lihat preview template kami dan temukan desain yang paling cocok untuk kebutuhan Anda.</p>
            </div>

            <!-- Tabs (Kategori) -->
            <div class="flex justify-center mb-6">
              <button class="px-4 py-2 text-sm font-semibold text-gray-800 category-active" onclick="filterSelection('all', this)">Semua</button>
              <button class="px-4 py-2 text-sm font-semibold text-gray-800 mx-4" onclick="filterSelection('pernikahan', this)">Pernikahan</button>
              <button class="px-4 py-2 text-sm font-semibold text-gray-800 mx-4" onclick="filterSelection('kedukaan', this)">Kedukaan</button>
              <button class="px-4 py-2 text-sm font-semibold text-gray-800" onclick="filterSelection('khitanan', this)">Khitanan</button>
            </div>

            <!-- Grid Template -->
            <div id="templateContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              <!-- Card 1 (Pernikahan) -->
              <div class="template-item bg-white rounded-lg shadow-md overflow-hidden fade-enter fade-enter-active" data-category="pernikahan">
                <img src="{{ asset('assets/img/mockup-undangan/frame-1.png') }}" alt="Ruwah Suci" class="w-full object-cover">
                <div class="p-4 text-start">
                  <h3 class="text-lg font-semibold mb-2">Ruwah Suci</h3>
                  <div class="flex justify-between gap-2">
                    <button class="px-4 py-2 bg-coklat text-white rounded-md">Lihat Demo</button>
                    <button class="px-4 py-2 bg-coklat text-white rounded-md">Pesan</button>
                  </div>
                </div>
              </div>

              <!-- Card 2 (Kedukaan) -->
              <div class="template-item bg-white rounded-lg shadow-md overflow-hidden fade-enter fade-enter-active" data-category="kedukaan">
                <img src="{{ asset('assets/img/mockup-undangan/frame-2.png') }}" alt="Modern Elegan" class="w-full object-cover">
                <div class="p-4 text-start">
                  <h3 class="text-lg font-semibold mb-2">Modern Elegan</h3>
                  <div class="flex justify-between gap-2">
                    <button class="px-4 py-2 bg-coklat text-white rounded-md">Lihat Demo</button>
                    <button class="px-4 py-2 bg-coklat text-white rounded-md">Pesan</button>
                  </div>
                </div>
              </div>

              <!-- Card 3 (Pernikahan) -->
              <div class="template-item bg-white rounded-lg shadow-md overflow-hidden fade-enter fade-enter-active" data-category="pernikahan">
                <img src="{{ asset('assets/img/mockup-undangan/frame-3.png') }}" alt="Nuansa Nostalgia" class="w-full object-cover">
                <div class="p-4 text-start">
                  <h3 class="text-lg font-semibold mb-2">Nuansa Nostalgia</h3>
                  <div class="flex justify-between gap-2">
                    <button class="px-4 py-2 bg-coklat text-white rounded-md">Lihat Demo</button>
                    <button class="px-4 py-2 bg-coklat text-white rounded-md">Pesan</button>
                  </div>
                </div>
              </div>

              <!-- Card 4 (Khitanan) -->
              <div class="template-item bg-white rounded-lg shadow-md overflow-hidden fade-enter fade-enter-active" data-category="khitanan">
                <img src="{{ asset('assets/img/mockup-undangan/frame-3.png') }}" alt="Khitanan Modern" class="w-full object-cover">
                <div class="p-4 text-start">
                  <h3 class="text-lg font-semibold mb-2">Khitanan Modern</h3>
                  <div class="flex justify-between gap-2">
                    <button class="px-4 py-2 bg-coklat text-white rounded-md">Lihat Demo</button>
                    <button class="px-4 py-2 bg-coklat text-white rounded-md">Pesan</button>
                  </div>
                </div>
              </div>

              <!-- Card 5 (pernikahan) -->
              <div class="template-item bg-white rounded-lg shadow-md overflow-hidden fade-enter fade-enter-active" data-category="pernikahan">
                <img src="{{ asset('assets/img/mockup-undangan/frame-2.png') }}" alt="Khitanan Modern" class="w-full object-cover">
                <div class="p-4 text-start">
                  <h3 class="text-lg font-semibold mb-2">Pernikahan Modern</h3>
                  <div class="flex justify-between gap-2">
                    <button class="px-4 py-2 bg-coklat text-white rounded-md">Lihat Demo</button>
                    <button class="px-4 py-2 bg-coklat text-white rounded-md">Pesan</button>
                  </div>
                </div>
              </div>

              <!-- Card 6 (duka) -->
              <div class="template-item bg-white rounded-lg shadow-md overflow-hidden fade-enter fade-enter-active" data-category="kedukaan">
                <img src="{{ asset('assets/img/mockup-undangan/frame-1.png') }}" alt="Khitanan Modern" class="w-full object-cover">
                <div class="p-4 text-start">
                  <h3 class="text-lg font-semibold mb-2">Duka</h3>
                  <div class="flex justify-between gap-2">
                    <button class="px-4 py-2 bg-coklat text-white rounded-md">Lihat Demo</button>
                    <button class="px-4 py-2 bg-coklat text-white rounded-md">Pesan</button>
                  </div>
                </div>
              </div>

              <!-- Tambahkan lebih banyak card sesuai kebutuhan -->
            </div>
          </section>
        <!-- END SECTION 5 -->
@endsection
