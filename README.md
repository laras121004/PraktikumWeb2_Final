# Laporan Akhir Praktikum Pemograman Web 2

| Keterangan | Data |
|----|----|
|Nama|Laras Sakti|
|Nim|312310627|
|Kelas|TI.23.A6|
|Mata Kulial|Pemograman Web 2|

# 📋Daftar Praktikum

|No|Judul Praktikum|Deskripsi Singkat|
|---|----|----|
|1|PHP Framework (Codeigniter)|Setup awal CI4 secara manual.|
|2|Framework Lanjutan (CRUD)|Tambah, edit, hapus artikel dasar.|
|3|View Layout & View Cell|Modularisasi tampilan dan komponen dinamis|
|4|Framework Lanjutan (Modul Login)|Integrasi kategori dengan artikel|
|5|Pignation Dan Pencarian|Login sederhana berbasis session|
|6|Upload File Gambar|Tampilan admin + filter kategori & judul|
|7|Relasi Tabel dan Query Builder|Menampilkan data artikel via jQuery AJAX|
|8|AJAX|Pencarian, filter kategori, pagination via AJAX|
|9|Implementasi AJAX Pignation dan Search|API untuk get, post, put, delete artikel|
|10|Testing API dengan Postman|Uji semua endpoint API menggunakan Postman|
|11|Vue.js|Integrasi frontend Vue.js dengan REST API|

# 💻 Teknologi yang Digunakan
## Backend:

- PHP 8.x: Digunakan sebagai bahasa pemrograman utama untuk proses server-side.

- CodeIgniter 4: Framework PHP berbasis arsitektur MVC (Model-View-Controller) yang mempermudah pengembangan aplikasi web.

- MySQL / MariaDB: Basis data relasional yang digunakan untuk menyimpan data seperti artikel dan kategori.

- RESTful API (ResourceController CodeIgniter): Dimanfaatkan untuk menyediakan endpoint yang dapat diakses oleh frontend atau aplikasi pihak ketiga seperti Postman.

## Frontend:

- HTML5 & CSS3: Digunakan untuk membangun struktur halaman dan tampilan visual.

- JavaScript (ES6): Bahasa pemrograman sisi klien yang memperkaya interaksi pengguna.

- jQuery: Library JavaScript yang memudahkan manipulasi elemen HTML dan pengiriman data via AJAX.

- Vue.js 3 (via CDN): Framework modern berbasis JavaScript untuk membangun antarmuka pengguna yang interaktif.

- Axios: Library yang mempermudah pengiriman permintaan HTTP secara asynchronous ke REST API.

## Alat Pengembangan & Pengujian:

- Postmant: Digunakan untuk mencoba berbagai metode HTTP (GET, POST, PUT, DELETE) pada REST API.

  ## Pengujian Posmant
    ## - Get (Abmil Data)
    ![Cuplikan layar 2025-06-27 054621](https://github.com/user-attachments/assets/c9f07361-b68c-4560-8baa-6ef337069867)

    ## - Post (Menambah Data)
    ![Cuplikan layar 2025-07-01 102947](https://github.com/user-attachments/assets/332a1b6b-1573-4a42-b37e-82014a77bf07)

    ## - Put (Mengubah Data)
    ![Cuplikan layar 2025-06-28 201028](https://github.com/user-attachments/assets/6828b994-94df-4948-8e55-562a73b0466f)

    ## - Delete (Menghapus Data)
    ![Cuplikan layar 2025-06-28 201225](https://github.com/user-attachments/assets/6ec17816-651d-4ba5-aee0-c8debbecd12c)

- VS Code / Editor lainnya: Untuk menulis dan mengelola kode program.

- XAMPP / Laragon / Apache + MySQL: Digunakan sebagai server lokal dalam proses pengembangan aplikasi.

- Browser (Chrome / Firefox): Untuk melihat dan mengecek tampilan serta fungsi aplikasi secara langsung.

# 📰 Tujuan Aplikasi Manajemen Artikel
Aplikasi ini merupakan sistem berbasis web yang dibangun menggunakan CodeIgniter 4, dirancang untuk memudahkan pengguna dalam menyusun, mengatur, dan menampilkan konten artikel secara fleksibel. Aplikasi ini mendukung peran admin maupun pengguna biasa, dilengkapi dengan fitur-fitur seperti pengelolaan data (CRUD), pencarian, penyaringan artikel, serta REST API untuk integrasi dengan antarmuka modern berbasis JavaScript.
