@extends('admin.index')

@section('content')
    <div class="admin-header">
        <h2>Komentar</h2>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Subjek</th>
                <th>Pendapat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Contoh data dummy -->
            <tr>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>Feedback</td>
                <td>Artikel ini sangat informatif!</td>
                <td>
                    <a href="#" class="btn btn-delete" onclick="confirmDeletion()">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>

    
    <script>
        function confirmDeletion() {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Lakukan aksi penghapusan di sini
                    Swal.fire(
                        'Terhapus!',
                        'Komentar telah dihapus.',
                        'success'
                    )
                }
            })
        }

        document.getElementById('addKomentarFormElement').addEventListener('submit', function(e) {
            e.preventDefault();
            if (this.checkValidity()) {
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Komentar berhasil ditambahkan',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            } else {
                Swal.fire({
                    title: 'Error!',
                    text: 'Harap isi semua field yang diperlukan',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    </script>
@endsection