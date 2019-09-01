<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <center>
            <h3>Membuat Laporan PDF dengan DOMPDF</h3>
        </center>
        <br/>
        <a href="/karyawan/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a>
        |
        <a href="/karyawan/export_excel" class="btn btn-success" target="_blank">Cetak Excel</a>
        <table class="table table-bordered table-striped">
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
    </div>
</body>
</html>