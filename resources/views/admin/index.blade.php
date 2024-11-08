<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <div class="navbar">
        <h1>Admin Panel</h1>
    </div>
    <div class="sidebar">
        <a href="{{ url('/admin') }}" style="text-decoration: none; color: inherit;">
            <h3>Menu</h3>
        </a>
        <a href="{{ url('/admin/artikel') }}">
            <i data-lucide="file-text"></i>
            <span>Artikel</span>
        </a>
        <a href="{{ url('/admin/dokumentasi') }}">
            <i data-lucide="book-open"></i>
            <span>Dokumentasi</span>
        </a>
        <a href="#" onclick="confirmLogout()">
            <i data-lucide="log-out"></i>
            <span>Logout</span>
        </a>
    </div>
    
    <div class="content">
        <!-- Kondisi untuk menampilkan banner hanya di /admin -->
        @if(request()->is('admin'))
        <div class="banner" style="background-image: url('{{ asset('assets/images/backgound.jpg') }}'); background-size: cover; background-position: center; ">
            <div class="overlay">
                <div class="banner-logo">
                    <img src="{{ asset('assets/images/ipb.png') }}" alt="Logo">
                </div>
                <h1>Selamat Datang di Admin Panel</h1>
                <p>Pusat Studi Bencana IPB University</p>
            </div>
        </div>
        @endif

        @yield('content')
    </div>

    <script>
        lucide.createIcons();

        function confirmLogout() {
            Swal.fire({
                title: 'Konfirmasi Logout',
                text: "Apakah Anda yakin ingin keluar?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Logout',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    //kembali ke login
                    window.location.href = "{{ url('/admin/logout') }}";
                }
            })
        }
    </script>
</body>
</html>
