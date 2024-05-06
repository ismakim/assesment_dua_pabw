$.ajax({
    url:'get_lowongan.php',
    dataType: 'json',
    success: function(data) {
        console.log(data);
    }
});