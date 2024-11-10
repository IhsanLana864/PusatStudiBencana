@extends('admin.index')

@section('content')
    <div class="admin-header">
        <h2>Dokumentasi</h2>
        <a href="#" class="btn" onclick="showForm('addDokumentasiForm')">Tambah Dokumentasi</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penjelasan</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dokumentasis as $dokumentasi)
            <tr>
                <td>{{ $dokumentasi->judul }}</td>
                <td>{{ Str::limit($dokumentasi->penjelasan, 50) }}</td>
                <td><img src="{{ asset('storage/' . $dokumentasi->gambar) }}" alt="{{ $dokumentasi->judul }}" width="50"></td>
                <td>
                    <a href="#" class="btn btn-edit" onclick="editDokumentasi({{ $dokumentasi->id }})">Edit</a>
                    <form action="{{ route('admin.dokumentasi.destroy', $dokumentasi->id) }}" method="POST" class="form-delete" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-delete" onclick="confirmDeletion(this)">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Form Tambah Dokumentasi -->
    <div id="addDokumentasiForm" class="form-popup" style="display: none;">
        <h3>Tambah Dokumentasi</h3>
        <form id="addDokumentasiFormElement" action="{{ route('admin.dokumentasi.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" required>
            
            <label for="penjelasan">Penjelasan Singkat:</label>
            <textarea id="penjelasan" name="penjelasan" required></textarea>
            
            <label for="gambar">Gambar:</label>
            <input type="file" id="gambar" name="gambar" required>
            
            <button type="submit" class="btn">Simpan</button>
            <button type="button" class="btn btn-delete" onclick="closeForm('addDokumentasiForm')">Batal</button>
        </form>
    </div>

    <!-- Form Edit Dokumentasi -->
    <div id="editDokumentasiForm" class="form-popup" style="display: none;">
        <h3>Edit Dokumentasi</h3>
        <form id="editDokumentasiFormElement" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Gunakan PUT untuk update -->
            
            <label for="editJudul">Judul:</label>
            <input type="text" id="editJudul" name="judul" required>
            
            <label for="editPenjelasan">Penjelasan Singkat:</label>
            <textarea id="editPenjelasan" name="penjelasan" required></textarea>
            
            <label for="editGambar">Gambar:</label>
            <input type="file" id="editGambar" name="gambar">
            
            <button type="submit" class="btn">Simpan</button>
            <button type="button" class="btn" onclick="closeForm('editDokumentasiForm')">Batal</button>
        </form>
    </div>


    <script>
        function showForm(formId) {
            document.getElementById(formId).style.display = 'block';
        }

        function closeForm(formId) {
            document.getElementById(formId).style.display = 'none';
        }

        function editDokumentasi(id) {
            fetch(`/admin/dokumentasi/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('editJudul').value = data.judul;
                    document.getElementById('editPenjelasan').value = data.penjelasan;
                    document.getElementById('editDokumentasiFormElement').action = `/admin/dokumentasi/${id}`;
                    showForm('editDokumentasiForm');
                });
        }

        document.getElementById('addDokumentasiFormElement').addEventListener('submit', function(e) {
    e.preventDefault(); // Mencegah reload otomatis
    if (this.checkValidity()) {
        const formData = new FormData(this);
        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                closeForm('addDokumentasiForm'); // Tutup form tambah
                Swal.fire({
                    title: 'Sukses!',
                    text: data.success,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.reload(); // Reload halaman untuk memperbarui data
                });
            } else {
                throw new Error('Gagal menambahkan dokumentasi.');
            }
        })
        .catch(error => {
            Swal.fire({
                title: 'Gagal!',
                text: error.message || 'Gagal menambahkan dokumentasi.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
    } else {
        Swal.fire({
            title: 'Error!',
            text: 'Harap isi semua field yang diperlukan.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    }
});

        document.getElementById('editDokumentasiFormElement').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah reload otomatis
            if (this.checkValidity()) {
                const formData = new FormData(this);
                formData.append('_method', 'PUT'); // Tambahkan method PUT

                fetch(this.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        closeForm('editDokumentasiForm'); // Tutup form edit
                        Swal.fire({
                            title: 'Sukses!',
                            text: data.success,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            location.reload(); // Reload halaman untuk memperbarui data
                        });
                    } else {
                        throw new Error('Gagal memperbarui dokumentasi.');
                    }
                })
                .catch(error => {
                    Swal.fire({
                        title: 'Gagal!',
                        text: error.message || 'Gagal memperbarui dokumentasi.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
            } else {
                Swal.fire({
                    title: 'Error!',
                    text: 'Harap isi semua field yang diperlukan.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });


        function confirmDeletion(button) {
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
                    // Submit form terkait jika konfirmasi
                    button.closest('form').submit();
                }
            });
        }


    </script>
@endsection
