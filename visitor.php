<?php
// Efek clear di awal
system('clear'); // Untuk sistem berbasis Linux atau macOS
// system('cls'); // Untuk sistem berbasis Windows
//--Data Warna--//
$biru = "\e[34m";
$kuning = "\e[33m";
$cyan = "\e[96m";
$magenta = "\e[35m";
$hijau = "\e[92m";
$merah = "\e[91m";
$orange = "\e[125";
$dark_gray = "\e[38;5;236m"; // abu-abu gelap
//--Data warna--//

//-- Bagian UI --//
echo "$hijau=\n
    ███╗   ███╗ █████╗ ████████╗ █████╗ 
    ████╗ ████║██╔══██╗╚══██╔══╝██╔══██╗
    ██╔████╔██║███████║   ██║   ███████║
    ██║╚██╔╝██║██╔══██║   ██║   ██╔══██║
    ██║ ╚═╝ ██║██║  ██║   ██║   ██║  ██║
    ╚═╝     ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝
                                        
\n\n";// Credit
echo "$hijau\n";
echo "╔══════════════════════════════════════════════╗\n";
echo "║ Github   : https://github.com/wanzxploit     ║\n";
echo "║ Instagram: https://instagram.com/wanz_xploit ║\n";
echo "║ YouTube  : https://youtube.com/wanzxploit    ║\n";
echo "╚══════════════════════════════════════════════╝\n";
// Menambahkan informasi lainnya
echo "$dark_gray\n";
echo " URL: ";
$jnck_url = trim(fgets(STDIN));
echo " Jumlah Visitor: ";
$total = trim(fgets(STDIN));

//--Bagian Proses Curl--//
error_reporting(0);

function curl($jnck_url){
    $proxy_list = file_get_contents('proxy.txt');
    $exploded_string = explode(",", $proxy_list);
    $random_num_array = array_rand($exploded_string, 1);
    $jnck_proxy = trim($exploded_string[$random_num_array]);
    $userAgent = array(
        'Mozilla/5.0 (X11; Linux i686) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.52 Safari/536.5',
        'Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.8.1.11) Gecko/20071127 Firefox/2.0.0.11',
        'Opera/9.25 (Windows NT 5.1; U; en)',
        'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)',
        'Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.5 (like Gecko) (Kubuntu)',
        'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.12) Gecko/20070731 Ubuntu/dapper-security Firefox/1.5.0.12',
        'Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:50',
        'Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30',
        'Mozilla/5.0 (Linux; U; Android 2.2.1; en-ca; LG-P505R Build/FRG83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
        'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16',
        'iTunes/9.1 (Macintosh; U; PPC Mac OS X 10.2',
        'Mozilla/5.0 (Linux; U; Android 2.1; en-us; Nexus One Build/ERD62) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
        'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.66 Safari/535.11',
        'Mozilla/5.0 (X11; Linux i686) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.65 Safari/535.11',
        'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.0',
        'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6',
        'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36',
        'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7'
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $jnck_url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, 'https://www.google.co.id');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent[array_rand($userAgent)]);
    $exec = curl_exec($ch);
    if(!curl_errno($ch)){
        $info = curl_getinfo($ch);
        $ip = $jnck_proxy;
        $port = 80;
        $code = $info['http_code'];
        curl_close($ch);
        return "SUKSES        $ip:$port";
    }
    curl_close($ch);
    return "FAILED        $jnck_proxy:80"; // Menambahkan status failed
}

// Menampilkan hasil dalam format yang sesuai
echo "$hijau\n";
echo "╔══════════════════════════════════════════════╗\n";
echo "║         Hasil Visitor                        ║\n";
echo "╚══════════════════════════════════════════════╝\n";
echo "╔══════════════════════════════════════════════╗\n";
echo "║ TIME    ║  STATUS     ║     IP & PORT        ║\n";
echo "╚══════════════════════════════════════════════╝\n";

$start = microtime(true); // Mulai menghitung waktu dengan presisi mikro
for($a=0; $a<$total; $a++){
    $elapsed_time = microtime(true) - $start; // Hitung waktu yang berlalu
    $elapsed_seconds = floor($elapsed_time); // Konversi ke detik
    $elapsed_ms = floor(($elapsed_time - $elapsed_seconds) * 1000); // Dapatkan milidetik
    $formatted_time = sprintf("%02d:%02d:%02d", floor($elapsed_seconds / 3600), floor(($elapsed_seconds % 3600) / 60), $elapsed_seconds % 60);
    $hasil = curl($jnck_url);
    echo " $formatted_time    $hasil\n"; // Sekarang waktu tampil lebih dulu
}

$end = time()-$start;

echo "$hijau\n";
echo "╚══════════════════════════════════════════════╝\n";
echo "$bir\n Proses selesai Tools By Wanz Xploit\n";
echo("")
?>
