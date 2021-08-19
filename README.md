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
    ## a. tabel hari kerja
        1. id (PK)
        2. jumlah_hari_kerja
    ## b. tabel jabatan (relasi ke tabel karyawan:jabatan_id)
        1. id (PK)
        2. nama_jabatan
        3. gaji_pokok
        4. tunjangan_jabatan
        5. tunjangan_makan_perhari
        6. tunjangan_transport_perhari
    ## c. tabel divisi (relasi ke tabel karyawan:divisi_id)
        1. id (PK)
        2. nama
     ## d. tabel karyawan
        1. id (PK)
        2. nama_karyawan
        3. tanggal_masuk
        4. jabatan_id (FK) -> relasi ke tabel jabatan
        5. divisi_id (FK) -> relasi ke tabel divisi
     ## e. tabel gaji (relasi ke tabel karyawan:karyawan_id dan relasi ke tabel absensi:absensi_id)
        1. id (PK)
        2. karyawan_id (FK) -> relasi ke tabel karyawan
        3. absensi_id (FK) -> relasi ke tabel absensi
        4. tanggal_penggajian
        5. gaji_pokok
        6. tunjangan_jabatan
        7. tunjangan_makan
        8. tunjangan_transport
     ## f. tabel Absensi
        1. id (PK) -> relasi ke tabel gaji
        2. jumlah_hari_kerja
        3. jumlah_hari_sakit
        4. jumlah_hari_izin
        5. jumlah_hari_cuti
        6. jumlah_hari_alpa
        7. potongan_tunjangan_transport
        8. potongan_tunjangan_makan
        9. potongan_gaji_pokok

2. Dynamic Active Link
3. CRUD Eloquent menggunakan modal bootstrap
4. Validation Modal Bootstrap
5. CRUD Divisi
6. Laravel Meta Manager
7. Alert Component Dinamis props
8. Database Seeder
9. Database Factory
10. One to one relationship, FK Tabel addresses (employee_id) relasi dengan PK tabel employees
11. One to one relationship Inverse/belongsTo, FK Tabel employees (division_id, position_id) relasi dengan PK tabel divisions dan tabel positions
12. Laravel tinker
13. Number Format
14. One to many relationship, FK Tabel details (employee_id) relasi dengan PK employees
15. One to many relationship Inverse/belongsTo, Tabel details -> employees
16. Many to many relationship (belongsToMany), Tabel users dan Tabel Roles, Pivot role_user

