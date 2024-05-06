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
                html += '<tr><th>Antrian</th><th>Nama Pasien</th><th>Alamat Pasien</th><th>Umur</th><th>Penyakit</th><th>Aksi</th></tr>';
                for (var i = 0; i < data.length; i++) {
                    html += '<tr>';
                    html += '<td>' + data[i].no_daftar + '</td>';
                    html += '<td>' + data[i].nama_pasien + '</td>';
                    html += '<td>' + data[i].alamat_pasien + '</td>';
                    html += '<td>' + data[i].umur + '</td>';
                    html += '<td>' + data[i].penyakit + '</td>';
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