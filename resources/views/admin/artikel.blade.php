@extends('admin.index')

@section('content')

    <div class="admin-header">
        <h2>Artikel</h2>
        <a href="#" class="btn" onclick="showForm('addArtikelForm')">Tambah Artikel</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Jenis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artikels as $artikel)
            <tr>
                <td>{{ $artikel->judul }}</td>
                <td><img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" width="50"></td>
                <td>{{ Str::limit($artikel->deskripsi, 50) }}</td>
                <td>{{ ucfirst($artikel->jenis) }}</td>
                <td>
                    <a href="#" class="btn btn-edit" onclick="editArtikel({{ $artikel->id }})">Edit</a>
                    <form action="{{ route('admin.artikel.destroy', $artikel->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Form Tambah Artikel -->
    <div id="addArtikelForm" class="form-popup" style="display: none;">
        <h3>Tambah Artikel</h3>
        <form id="addArtikelFormElement" action="{{ route('admin.artikel.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" required>

            <label for="gambar">Gambar:</label>
            <input type="file" id="gambar" name="gambar" required>

            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" required></textarea>

            <label for="jenis">Jenis:</label>
            <select id="jenis" name="jenis" required>
                <option value="publikasi">Publikasi</option>
                <option value="berita">Berita</option>
                <option value="berita">Event</option>
            </select>

            <button type="submit" class="btn" onclick="closeForm('addArtikelForm')">Simpan</button>
            <button type="button" class="btn" onclick="closeForm('addArtikelForm')">Batal</button>
        </form>
    </div>

    <!-- Form Edit Artikel -->
    <div id="editArtikelForm" class="form-popup" style="display: none;">
        <h3>Edit Artikel</h3>
        <form id="editArtikelFormElement" action="#" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="editJudul">Judul:</label>x
            <input type="text" id="editJudul" name="judul" required>

            <label for="editGambar">Gambar:</label>
            <input type="file" id="editGambar" name="gambar">

            <label for="editDeskripsi">Deskripsi:</label>
            <textarea id="editDeskripsi" name="deskripsi" required></textarea>

            <label for="editJenis">Jenis:</label>
            <select id="editJenis" name="jenis" required>
                <option value="publikasi">Publikasi</option>
                <option value="berita">Berita</option>
            </select>

            <button type="submit" class="btn" onclick="closeForm('editArtikelForm')">Simpan</button>
            <button type="button" class="btn" onclick="closeForm('editArtikelForm')">Batal</button>
        </form>
    </div>

    <script>
        function editArtikel(id) {
            fetch(`/admin/artikel/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('editJudul').value = data.judul;
                    document.getElementById('editDeskripsi').value = data.deskripsi;
                    document.getElementById('editJenis').value = data.jenis;

                    document.getElementById('editArtikelFormElement').action = `/admin/artikel/${id}`;
                    showForm('editArtikelForm');
                });
        }
    </script>

    <script>
        function showForm(formId) {
            document.getElementById(formId).style.display = 'block';
        }

        function closeForm(formId) {
            document.getElementById(formId).style.display = 'none';
        }

        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Mencegah submit default

                const form = this.closest('form'); // Ambil form terkait
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
                        form.submit(); // Submit form setelah konfirmasi
                    }
                });
            });
        });


        document.getElementById('addArtikelFormElement').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah form reload secara penuh
            if (this.checkValidity()) {
                const formData = new FormData(this); // Ambil data dari form
                fetch(this.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (!response.ok) throw new Error('Gagal menyimpan data');
                    return response.json();
                })
                .then(data => {
                    Swal.fire({
                        title: 'Sukses!',
                        text: 'Artikel berhasil ditambahkan.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        closeForm('addArtikelForm'); // Tutup form setelah sukses
                        location.reload(); // Reload halaman untuk melihat perubahan
                    });
                })
                .catch(error => {
                    Swal.fire({
                        title: 'Gagal!',
                        text: error.message,
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


        document.getElementById('editArtikelFormElement').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah reload otomatis
            if (this.checkValidity()) {
                const formData = new FormData(this);
                fetch(this.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (!response.ok) throw new Error('Gagal memperbarui data');
                    return response.json();
                })
                .then(data => {
                    Swal.fire({
                        title: 'Sukses!',
                        text: 'Artikel berhasil diperbarui.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        closeForm('editArtikelForm');
                        location.reload(); // Reload untuk memuat data terbaru
                    });
                })
                .catch(error => {
                    Swal.fire({
                        title: 'Gagal!',
                        text: error.message,
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


        function showSweetAlert(title, text, icon, confirmButtonText) {
            return Swal.fire({
                title: title,
                text: text,
                icon: icon,
                confirmButtonText: confirmButtonText,
                width: '300px',
                customClass: {
                    popup: 'small-popup'
                }
            });
        }
        </script>
@endsection
