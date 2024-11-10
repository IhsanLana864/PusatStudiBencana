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
        @foreach($komentars as $komentar)
        <tr>
            <td>{{ $komentar->nama }}</td>
            <td>{{ $komentar->email }}</td>
            <td>{{ $komentar->subjek }}</td>
            <td>{{ $komentar->pendapat }}</td>
            <td>
                <button type="button" class="btn btn-delete" onclick="confirmDeletion({{ $komentar->id }})">Hapus</button>

                <form id="deleteForm-{{ $komentar->id }}" action="{{ route('admin.komentar.destroy', $komentar->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDeletion(komentarId) {
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
                // Submit form penghapusan secara otomatis
                document.getElementById(`deleteForm-${komentarId}`).submit();
            }
        });
    }
</script>
@endsection
