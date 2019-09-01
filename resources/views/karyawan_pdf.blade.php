<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF menggunakan DOMPDF</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
    <center>
        <h4>Membuat Laporan PDF menggunakan DOMPDF</h4>
    </center>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Pekerjaan</th>
            </tr>
        </thead>
        <tbody>
        @php $i=1 @endphp
        @foreach($karyawan as $kar)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $kar->nama }}</td>
                <td>{{ $kar->email }}</td>
                <td>{{ $kar->alamat }}</td>
                <td>{{ $kar->telepon }}</td>
                <td>{{ $kar->pekerjaan }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>