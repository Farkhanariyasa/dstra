# Dokumentasi Web Dasbor Hasil PKL 62

Proyek ini menggunakan framework CodeIgniter 4 dan berlisensi MIT.

![Gambar](tampilan_web.png)

## Daftar Perubahan

Silahkan tambahkan daftar perubahan yang telah dilakukan pada dokumen ini jika melakukan perubahan mayor seperti merubah struktur basis data ataupun menginstal librari dengan composer.

- 15-01-2023 : Pembuatan Awal Proyek Dasbor Hasil PKL 62
- 17-01-2023 : Perubahan URL yang awalnya `pvd` menjadi `hasil-pkl`
- 17-01-2023 : Terdapat 'helper' yang digunakan untuk memudahkan penggunaan fungsi-fungsi yang sering digunakan.
- 18-01-2023 : Perubahan struktur basis data. Penambahan migrasi tabel. Lakukan `php spark migrate` untuk melakukan migrasi tabel.
- 20-01-2023 : Perubahan struktur basis data pada tabel `pvd_unduh_hasil_pkl`. Lakukan hapus terdahulu tabel yang sebelumnya dan `migrations` `php spark migrate` untuk melakukan migrasi tabel.
- 08-02-2023 : Perubahan Controller dan Routes. Diharapkan untuk memperhatikan perubahan tersebut.
- 05-03-2023 : Ditambahkan instalasi menggunakan Docker.
- 14-07-2023 : Ditambahkan fitur login dengan akun google stis untuk mengakses dasbor. Lakukan `composer install` untuk menginstall library googleapi client. Kemudian lakukan migrasi untuk menambahkan tabel `pvd_user` dengan perintah `php spark migrate`. Tambahkan `CLIENT_ID_GOOGLESTIS` dan `CLIENT_SECRET_GOOGLESTIS` serta atur `REDIRECT_URI_GOOGLESTIS` pada file `.env` untuk mengatur konfigurasi login dengan akun google stis. Lihat contoh pada file `.env.example`.
- 15-07-2023 : Ditambahkan fitur login dengan akun sso bps untuk mengakses dasbor. Lakukan `composer install` untuk menginstall library jkd sso. Tambahkan `CLIENT_ID_SSOBPS` dan `CLIENT_SECRET_SSOBPS` serta atur `REDIRECT_URI_SSOBPS` pada file `.env` untuk mengatur konfigurasi login dengan akun sso bps. Lihat contoh pada file `.env.example`.
- 17-07-2023 : Repo utama pindah ke github. Dilakukan miroring dari git stis ke github
- 18-07-2023 : SSO BPS tidak jadi digunakan. Ditambkan fitur login akun khusus. Maka tabel `pvd_users` ditambah kolom password. Lakukan `php spark migrate` untuk melakukan migrasi tabel. Untuk mencoba akun khusus, lakukan `php spark db:seed UserSeeder`

## Cara Instalasi

- Clone repository ini ke dalam folder `htdocs` pada XAMPP atau sesuai konfigurasi server anda.
- Jalankan XAMPP dan aktifkan Apache dan MySQL.
- Buka browser dan ketikkan url `http://localhost/phpmyadmin`.
- Buat basis data baru dengan nama `pkl62`.
- Import file sql yang berada dalam `app/Database/Backups` ke dalam basis data `pkl62`.
- Silahkan salin file `.env.example` yang berada pada folder `app/Config` dan ubah namanya menjadi `.env`.
- Lakukan konfigurasi pada file `.env` yang berada pada folder `app/Config` sesuai dengan konfigurasi basis data yang telah dibuat.
- Lakukan `composer install` untuk menginstall library yang dibutuhkan.
- Jalankan perintah `php spark serve` pada terminal untuk menjalankan server.
- Buka browser dan ketikkan url `http://localhost:8080/hasil-pkl` untuk melihat hasil webnya.

## Cara Instalasi (Docker)

- Clone repository ini ke dalam folder yang diinginkan.
- Jalankan Docker.
- Buka terminal dan masuk ke dalam folder hasil clone repository ini.
- Jalankan perintah `docker-compose up -d` untuk menjalankan docker.
- Jangan lupa untuk mengubah konfigurasi pada file `.env` yang berada pada folder `app/Config` sesuai dengan konfigurasi berikut ini :
  - `database.default.hostname = mysql`
  - `database.default.database = pkl62`
  - `database.default.username = pvd`
  - `database.default.password = pvd`
- Kemudian import file sql yang berada dalam `app/Database/Backups` ke dalam basis data `pkl62`.
- Buka browser dan ketikkan url `http://localhost:8080/hasil-pkl` untuk melihat hasil webnya.

## Penamaan Basis Data dan Tabel

Gunakan nama basis data `pkl62` untuk memudahkan pengembangan.
Untuk tabel, gunakan nama tabel yang sesuai dengan ketentuan berikut `pvd_[namariset]_[namatabel]`.
Contoh : `pvd_riset1_hasilsp`

## Penamaan Url

- Untuk halaman utama, gunakan nama url yang sesuai dengan ketentuan berikut `[baseurl]/pvd/beranda`.
  Contoh : `http://localhost:8080/hasil-pkl`
- Gunakan nama url yang sesuai dengan ketentuan berikut `[baseurl]/hasil-pkl/[namariset]`.
  Contoh : `http://localhost:8080/hasil-pkl/riset1`
- Untuk halaman dasbor hasil riset, gunakan nama url yang sesuai dengan ketentuan berikut `[baseurl]/hasil-pkl/[namariset]/dasbor`.
  Contoh : `http://localhost:8080/hasil-pkl/riset1/dasbor`
- Untuk menu yang berada pada halaman dasbor, gunakan nama url yang sesuai dengan ketentuan berikut `[baseurl]/hasil-pkl/[namariset]/[namamenu]`.
  Contoh : `http://localhost:8080/hasil-pkl/riset1/hasilsp`

## Aturan Controller

- Letakkan controller pada folder `app/Controllers/Pvd`.
- Jika dibutuhkann folder tambahan didalam folder `Pvd`, gunakan format penamaan PascalCase. Contoh : `LandingPage`
- Gunakan format penamaan PascalCase untuk penamaan controller. Contoh : `LandingPage.php`
- Untuk mempercepat proses pembuatan controller, gunakan perintah `php spark make:controller Pvd/[namacontroller]` pada terminal.
  Contoh : `php spark make:controller Pvd/LandingPage`

## Aturan Model

- Letakkan model pada folder `app/Models/Pvd`.
- Gunakan satu model untuk satu tabel.
- Gunakan format penamaan PascalCase dengan suffix Model yaitu `[NamaRiset][NamaTabel]Model`. Contoh : `Riset1HasilModel.php`
- Untuk mempercepat proses pembuatan model, gunakan perintah `php spark make:model Pvd/[namamodel]` pada terminal.
  Contoh : `php spark make:model Pvd/Riset1HasilModel`

## Aturan View

- Letakkan view pada folder `app/Views/pvd`.
- Pada folder `pvd`, terdapat 2 folder yaitu folder `layout` dan folder `pages`.
- Folder `layout` berisi file-file yang berfungsi sebagai layout utama dari web.
- Folder `pages` berisi file-file yang berfungsi sebagai halaman utama dari web.
- Dari setiap folder diatas terbagi dalam beberapa folder yaitu folder `dasbor` dan `landing page`.
- Letakkan file-file berdasarkan folder yang sesuai.
- Gunakan format penamaan snake_case untuk penamaan file atau folder. Contoh : `landing_page.php`

## Aturan Routing

- Letakkan routing pada folder `app/Config/Routes.php`.
- Gunakan group routing untuk memudahkan pengelompokan routing.

## Aturan Assets

- Letakkan assets pada folder `public/pvd`.
- Pada folder `pvd`, terdapat 3 folder yaitu folder `css`, folder `img` dan folder `js`.
- Letakkan file-file berdasarkan folder yang sesuai.
- Gunakan format penamaan snake_case untuk penamaan file atau folder yang dibuat. Contoh : `landing_page.css`. Untuk file gambar, silahkan disesuaikan namanya sesuai dengan kebutuhan.
- Jika terdapat file yang terkhusus untuk setiap riset, letakkan pada folder `public/pvd/[js]/[namariset]`. Contoh : `public/pvd/js/riset1`.

## Aturan Commit, Push dan Pull Request

- Pada proyek ini akan dibuat beberapa tipe perubahan file agar mudah terlihat perubahan apa saja yang dilakukan.
- Tipe perubahan file yang akan digunakan adalah sebagai berikut :
  - `A` : Menambahkan file baru.
  - `M` : Mengubah file yang sudah ada.
  - `D` : Menghapus file yang sudah ada.
- Jenis perubahan file yang akan digunakan adalah sebagai berikut :
  - `Assets`
  - `View`
  - `Controller`
  - `Model`
  - `Database`
  - `Helper`
  - `Routing`
  - `Readme`
  - `Other`
- Untuk commit, gunakan format `[tipeperubahan][spasi][jenisperubahan] : [keterangan]`. Usahakan keterangan ditulis selengkap-lengkapnya. Contoh : `A Assets : Menambahkan file css landing page`
- Lakukan commit untuk setiap perubahan file yang dilakukan dan 1 file percommit.
- Sebelum melakukan push, pastikan terlebih dahulu bahwa file yang akan di push sudah di commit dan sudah di pull terlebih dahulu.

## Aturan Penulisan Kode

- Tambahkan komentar pada kode yang dibuat jika diperlukan.
- Gunakan format penulisan kode yang rapi dan mudah dibaca.
- Gunakan format penulisan kode yang sesuai dengan aturan penulisan kode yang ada pada [PSR-12](https://www.php-fig.org/psr/psr-12/).
- Gunakan format penulisan kode yang sesuai dengan aturan penulisan kode yang ada pada [PSR-4](https://www.php-fig.org/psr/psr-4/).
- Gunakan format penulisan kode yang sesuai dengan aturan penulisan kode yang ada pada [PSR-1](https://www.php-fig.org/psr/psr-1/).
- Gunakan format penulisan kode yang sesuai dengan aturan penulisan kode yang ada pada [PSR-2](https://www.php-fig.org/psr/psr-2/).

## Lainnya

- Web harus dibuat dengan tampilan yang responsif.
- Cek console browser untuk mengetahui apakah terdapat error atau tidak.
- Gunakan ekstensi yang mendukung pengembangan pada VSCode atau kode editor lainnya.
- Gunakan ekstensi yang mendukung pengembangan pada browser.
- Jika diperlukan bisa menggunkan IDE lain seperti PHPStorm.
