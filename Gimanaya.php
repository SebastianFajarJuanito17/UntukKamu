<html>
<head>
    <title>Untuk ayang</title>
</head>
<body style="background-color:bisque">
    <div>
    <?php
    
        //ubah timezone menjadi jakarta
        date_default_timezone_set("Asia/Jakarta");

        //ambil jam dan menit
        $jam = date('H:i');

        //atur salam menggunakan IF
        if ($jam > '05:30' && $jam < '10:00') {
            $salam = '<p style="font-family:verdana;" align="center" text>Selamat Pagi Adeline</p>';
        } elseif ($jam >= '10:00' && $jam < '15:00') {
            $salam = '<p style="font-family:verdana;" align="center">Selamat Siang Adeline</p>';
        } elseif ($jam < '18:00') {
            $salam = 'Sore';
        } else {
            $salam = '<p style="font-family:verdana;" align="center">Selamat Malam Adeline . Bobo yang nyenyak yaaa</p>';
        }
        //tampilkan pesan
        echo 'Halo cantik ' .$salam;
    ?>
</body>
</html>