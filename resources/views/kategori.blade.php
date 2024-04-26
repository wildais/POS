<!DOCTYPE html>
<html>
    <head>
        <title>Data Kategori</title>
    </head>
    <body>

        <h1>Data Kategori</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Kategori</th>
                    <th>Nama Kategori</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $d)
                    <tr>
                        <td>{{ $d->kategori_id }}</td>
                        <td>{{ $d->kategori_kode }}</td>
                        <td>{{ $d->kategori_nama}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Tidak ada data</td>
                    </tr>
                @endforelse
                
            </tbody>
        </table>

    </body>
</html>