# MATA: Penambah Viewer Website

**MATA Tool** adalah script PHP yang dirancang untuk menguji pengiriman traffic ke URL tertentu menggunakan proxy. Script ini mendukung terminal Linux/macOS dan menawarkan tampilan berwarna untuk kemudahan pemantauan.

## Fitur Utama
- Mendukung pengiriman traffic menggunakan proxy.
- Kompatibel dengan Blogspot untuk meningkatkan kemungkinan keberhasilan.
- Tampilan berwarna di terminal untuk memantau status eksekusi.
- Dapat menangani beberapa request secara bersamaan dengan konfigurasi yang fleksibel.

## Peringatan
**Penting!** Script ini hanya untuk keperluan edukasi dan pengujian. Penggunaan untuk tujuan ilegal, seperti manipulasi trafik secara tidak sah, dapat melanggar hukum atau kebijakan layanan tertentu. Gunakan dengan tanggung jawab.

## Cara Install di Termux dan Linux
### Persiapan Awal
1. **Update & Upgrade Sistem**:
   ```bash
   sudo apt update && sudo apt upgrade -y
   ```
   Untuk Termux:
   ```bash
   pkg update && pkg upgrade -y
   ```

2. **Install PHP**:
   Di Linux:
   ```bash
   sudo apt install php -y
   ```
   Di Termux:
   ```bash
   pkg install php -y
   ```

3. **Install Git** (jika belum terpasang):
   Di Linux:
   ```bash
   sudo apt install git -y
   ```
   Di Termux:
   ```bash
   pkg install git -y
   ```

### Unduh Script
1. Clone repository menggunakan Git:
   ```bash
   git clone https://github.com/wanzxploit/MATA.git
   cd MATA
   ```

2. Pastikan file `visitor.php` dan `proxy.txt` ada di direktori yang sama.

### Konfigurasi Proxy (optional)
1. Buka file `proxy.txt` dan tambahkan daftar proxy (setiap proxy dipisahkan dengan koma atau per baris).
2. Contoh format:
   ```
   123.45.67.89:8080
   98.76.54.32:3128
   ```

### Jalankan Script
1. Eksekusi script dengan perintah:
   ```bash
   php visitor.php
   ```
2. Masukkan URL target (disarankan Blogspot untuk hasil optimal).
3. Masukkan jumlah visitor yang ingin diuji.

## Struktur File
- **visitor.php**: Script utama.
- **proxy.txt**: Berisi daftar proxy.

## Preview
Berikut adalah contoh tampilan tools ini:

![Visitor Tool Preview](https://raw.githubusercontent.com/wanzxploit/MATA/refs/heads/main/visitor.png)

## Tips untuk Hasil Optimal
- Gunakan URL Blogspot karena layanan ini cenderung lebih toleran terhadap peningkatan traffic.
- Pastikan proxy yang digunakan aktif dan tidak diblokir.

## Kontak
- **GitHub**: [Wanz Xploit](https://github.com/wanzxploit)
- **Instagram**: [@wanz_xploit](https://instagram.com/wanz_xploit)
- **YouTube**: [Wanz Xploit](https://youtube.com/wanzxploit)

## Disclaimer
Script ini dibuat untuk tujuan edukasi. Penulis tidak bertanggung jawab atas penggunaan script untuk pelanggaran hukum atau kebijakan layanan tertentu.

