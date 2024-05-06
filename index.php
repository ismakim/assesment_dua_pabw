<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Magang</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="pasien-tabel"></div>

    <script>
    $(document).ready(function() {
        $.ajax({
            url: 'get_data.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Proses dan tampilkan data dalam bentuk tabel
                var html = '<table border="1">';
                html += '<tr><th>Nama Perusahaan</th><th>Alamat Perusahaan</th><th>Posisi Lowongan</th><th>Benefit</th><th>Durasi Pendaftaran</th><th>Aksi</th></tr>';
                for (var i = 0; i < data.length; i++) {
                    html += '<tr>';
                    html += '<td>' + data[i].nama_perusahaan + '</td>';
                    html += '<td>' + data[i].alamat_perusahaan + '</td>';
                    html += '<td>' + data[i].posisi_lowongan + '</td>';
                    html += '<td>' + data[i].benefit + '</td>';
                    html += '<td>' + data[i].durasi_pendaftaran + '</td>';
                    html += '<td><button class="delete-btn" data-id="' + data[i].id + '">Hapus</button></td>';
                    html += '</tr>';
                }
                html += '</table>';
                $('#pasien-tabel').html(html);
            }
        });
    });
    </script>
</body>
</html>