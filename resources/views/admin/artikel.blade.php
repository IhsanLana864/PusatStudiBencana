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
            <!-- Contoh data dummy -->
            <tr>
                <td>Contoh Judul</td>
                <td><img src="path/to/image.jpg" alt="Contoh Gambar" width="50"></td>
                <td>Deskripsi singkat...</td>
                <td>Publikasi</td>
                <td>
                    <a href="#" class="btn btn-edit" onclick="showForm('editArtikelForm')">Edit</a>
                    <a href="#" class="btn btn-delete" onclick="confirmDeletion()">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Form Tambah Artikel -->
    <div id="addArtikelForm" class="form-popup" style="display: none;">
        <h3>Tambah Artikel</h3>
        <form id="addArtikelFormElement" action="#" method="post" enctype="multipart/form-data">
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
            </select>
            
            <button type="submit" class="btn">Simpan</button>
            <button type="button" class="btn" onclick="closeForm('addArtikelForm')">Batal</button>
        </form>
    </div>

    <!-- Form Edit Artikel -->
    <div id="editArtikelForm" class="form-popup" style="display: none;">
        <h3>Edit Artikel</h3>
        <form id="editArtikelFormElement" action="#" method="post" enctype="multipart/form-data">
            @csrf
            <label for="editJudul">Judul:</label>
            <input type="text" id="editJudul" name="judul" value="Contoh Judul" required>
            
            <label for="editGambar">Gambar:</label>
            <input type="file" id="editGambar" name="gambar">
            
            <label for="editDeskripsi">Deskripsi:</label>
            <textarea id="editDeskripsi" name="deskripsi" required>Deskripsi singkat...</textarea>
            
            <label for="editJenis">Jenis:</label>
            <select id="editJenis" name="jenis" required>
                <option value="publikasi">Publikasi</option>
                <option value="berita">Berita</option>
            </select>
            
            <button type="submit" class="btn">Simpan</button>
            <button type="button" class="btn" onclick="closeForm('editArtikelForm')">Batal</button>
        </form>
    </div>
    

    <script>
        function showForm(formId) {
            document.getElementById(formId).style.display = 'block';
        }

        function closeForm(formId) {
            document.getElementById(formId).style.display = 'none';
        }

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
                        'Artikel telah dihapus.',
                        'success'
                    )
                }
            })
        }

        document.getElementById('addArtikelFormElement').addEventListener('submit', function(e) {
            e.preventDefault();
            if (this.checkValidity()) {
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Artikel berhasil ditambahkan',
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

        document.getElementById('editArtikelFormElement').addEventListener('submit', function(e) {
            e.preventDefault();
            if (this.checkValidity()) {
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Artikel berhasil diperbarui',
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
