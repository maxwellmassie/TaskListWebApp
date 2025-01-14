# WebAplikasi Manajemen Tugas

Aplikasi ini digunakan untuk mencatat, mengelola, dan menampilkan daftar tugas dengan beberapa informasi terkait seperti  Tugas(matakuliah) kelompok, deadline, dan catatan tambahan.

## Kelompok

- **Nama Anggota**:
  1. Aria Riski Ramadhan
  2. Gold Stein Maxwell Massie
  3. Rafly Maulana Zaky



## Fitur

1. **Form Tambah Tugas**:
   - Input untuk nama tugas.
   - Checkbox untuk menentukan apakah tugas termasuk tugas kelompok.
   - Input tanggal untuk menentukan deadline tugas.
   - Input catatan tambahan.

2. **Tabel Daftar Tugas**:
   - Kolom nomor urut.
   - Kolom nama tugas.
   - Kolom status kelompok (yes/no).
   - Kolom deadline.
   - Kolom catatan.
   - Kolom aksi untuk mengelola tugas (seperti edit(update) atau hapus).

## Teknologi yang Digunakan

- **Frontend**:
  - Laravel PHP Artisan
  
- **Backend**:
  - MySQL Xampp sebagai database untuk menyimpan data tugas.

## Cara Menggunakan

1. **Menambah Tugas**:
   - Isi nama tugas di input "Tugas".
   - Centang checkbox "Kelompok" jika tugas termasuk tugas kelompok.
   - Pilih tanggal deadline menggunakan input tanggal.
   - Tambahkan catatan di input "Catatan" (opsional).
   - Klik tombol **Tambah Tugas** untuk menyimpan data tugas.

2. **Melihat Daftar Tugas**:
   - Tugas yang telah ditambahkan akan muncul di tabel di bawah form.

3. **Mengedit atau Menghapus Tugas**:
   - Gunakan tombol yang ada di kolom "Aksi" untuk mengedit atau menghapus tugas.
   - klik Simpan Tugas

## Instalasi dan Konfigurasi

1. **Clone Repository**:
   - 1. Dowoload as ZIP file
   - 2. Extrack file di htdoc xampp
   - 3. Buat database MySql dengan nama "to_do_list"
   - 4. Jalankan di terminal php artisan migrate
   - 5. Jalankan program di terminal "php artisan serve"
