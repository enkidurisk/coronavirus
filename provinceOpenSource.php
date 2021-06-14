<?php 
    error_reporting(0);
    //Buat Fungsi http_request
    function http_request($url){

        //persiapkan CURL
        $ch = curl_init();

        //Set CURL
        curl_setopt($ch, CURLOPT_URL, $url);

        //Aktifkan Fungsi transfer Nilai Yang Berupa String
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //Setting Agar Dapat Dijalankan Pada Localhost
        //Mematikan ssl verify (https)
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        //Tampung Hasil Ke Dalam Variabel $output
        $output = curl_exec($ch);

        //tutup CURL
        curl_close($ch);

        //Mengembalikan Hasil curl
        return $output;
    }

    //Panggil Fungsi http_request($url / link API)https://dekontaminasi.com/api/id/covid19/stats https://api.kawalcorona.com/indonesia/provinsi/
    $data = http_request("https://api.kawalcorona.com/indonesia/provinsi/");

    //ubah Format json
    $data = json_decode($data, TRUE);

    /*echo "<pre>";
    print_r($data_2);
    echo "</pre>";*/

    //tampung jumlah data
    $jumlah = count($data);
    

    //Gunakan Nomor Untuk No. (Tidak Digunakan Untuk Perulangan For do)
    $Nomor = 1;

    for ($i = 0; $i < $jumlah; $i++) { 
        # code...
        $hasil = $data[$i]['attributes'];
    
?>

    <tr>
        <td style="background: #011d36;"><?=$Nomor++?></td>
        <td style="background: #013336;"><?=$hasil['Provinsi']?></td>
        <td style="background: #696803;"><?=number_format($hasil['Kasus_Posi'])?></td>
        <td style="background: #6d2503;"><?=number_format($hasil['Kasus_Meni'])?></td>
        <td style="background: #046d3c;"><?=number_format($hasil['Kasus_Semb'])?></td>

    </tr>

<?php 
   }
?>