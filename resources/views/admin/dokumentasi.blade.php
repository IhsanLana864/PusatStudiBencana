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
            <!-- Contoh data dummy -->
            <tr>
                <td>Judul Dokumentasi</td>
                <td>Penjelasan singkat</td>
                <td><img src="path/to/image.jpg" alt="Gambar Dokumentasi" width="50"></td>
                <td>
                    <a href="#" class="btn btn-edit" onclick="showForm('editDokumentasiForm')">Edit</a>
                    <a href="#" class="btn btn-delete" onclick="confirmDeletion()">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Form Tambah Dokumentasi -->
    <div id="addDokumentasiForm" class="form-popup" style="display: none;">
        <h3>Tambah Dokumentasi</h3>
        <form id="addDokumentasiFormElement" action="#" method="post" enctype="multipart/form-data">
            @csrf
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" required>
            
            <label for="penjelasan">Penjelasan Singkat:</label>
            <input type="text" id="penjelasan" name="penjelasan" maxlength="5" required>
            
            <label for="gambar">Gambar:</label>
            <input type="file" id="gambar" name="gambar" required>
            
            <button type="submit" class="btn">Simpan</button>
            <button type="button" class="btn btn-delete" onclick="closeForm('addDokumentasiForm')">Batal</button>
        </form>
    </div>

    <!-- Form Edit Dokumentasi -->
    <div id="editDokumentasiForm" class="form-popup" style="display: none;">
        <h3>Edit Dokumentasi</h3>
        <form id="editDokumentasiFormElement" action="#" method="post" enctype="multipart/form-data">
            @csrf
            <label for="editJudul">Judul:</label>
            <input type="text" id="editJudul" name="judul" value="Judul Dokumentasi" required>
            
            <label for="editPenjelasan">Penjelasan Singkat:</label>
            <input type="text" id="editPenjelasan" name="penjelasan" value="Penjelasan singkat" maxlength="5" required>
            
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
                    
                    
                    Swal.fire(
                        'Terhapus!',
                        'Dokumentasi telah dihapus.',
                        'success'
                    )
                }
            })
        }

        document.getElementById('addDokumentasiFormElement').addEventListener('submit', function(e) {
            e.preventDefault();
            if (this.checkValidity()) {
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Dokumentasi berhasil ditambahkan',
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

        document.getElementById('editDokumentasiFormElement').addEventListener('submit', function(e) {
            e.preventDefault();
            if (this.checkValidity()) {
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Dokumentasi berhasil diperbarui',
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