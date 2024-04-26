<!DOCTYPE html>
<html>
    <head>
        <title>Data Level</title>
    </head>
    <body>

        <h1>Data Level</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Level</th>
                    <th>Nama Level</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $d)
                    <tr>
                        <td>{{ $d->level_id }}</td>
                        <td>{{ $d->level_kode }}</td>
                        <td>{{ $d->level_nama }}</td>
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