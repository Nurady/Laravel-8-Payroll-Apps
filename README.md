# Overview - Laravel 8
1. Stisla Admin Template
2. Route Name
3. CRUD Query Builder
4. Product Factory
5. Pagination Customize
6. Sweet Alert
7. Validation
8. Flash Message
9. Message Validation Customize

10. Database Migration
11. CRUD Eloquent
12. Login menggunakan session dan middleware (Manual dan Package laravel/ui)
13. Laravel Factory
14. Laravel Seeder
15. Check email dan Hash Password saat login
16. Merubah return view auth login dan logout di vendor autenticateUser
17. Login menggunakan email
18. Login menggunakan username
19. Login menggunakan username/email


# Payroll Apps - Laravel 8
1. Struktur Database
    ..a. tabel hari kerja
        * id (PK)
        * jumlah_hari_kerja
    ..b. tabel jabatan (relasi ke tabel karyawan:jabatan_id)
        * id (PK)
        * nama_jabatan
        * gaji_pokok
        * tunjangan_jabatan
        * tunjangan_makan_perhari
        * tunjangan_transport_perhari
    ..c. tabel divisi (relasi ke tabel karyawan:divisi_id)
        * id (PK)
        * nama
    ..d. tabel karyawan
        * id (PK)
        * nama_karyawan
        * tanggal_masuk
        * jabatan_id (FK) -> relasi ke tabel jabatan
        * divisi_id (FK) -> relasi ke tabel divisi
    ..e. tabel gaji (relasi ke tabel karyawan:karyawan_id dan relasi ke tabel absensi:absensi_id)
        * id (PK)
        * karyawan_id (FK) -> relasi ke tabel karyawan
        * absensi_id (FK) -> relasi ke tabel absensi
        * tanggal_penggajian
        * gaji_pokok
        * tunjangan_jabatan
        * tunjangan_makan
        * tunjangan_transport
    ..f. tabel Absensi
        * id (PK) -> relasi ke tabel gaji
        * jumlah_hari_kerja
        * jumlah_hari_sakit
        * jumlah_hari_izin
        * jumlah_hari_cuti
        * jumlah_hari_alpa
        * potongan_tunjangan_transport
        * potongan_tunjangan_makan
        * potongan_gaji_pokok
