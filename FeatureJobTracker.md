# FeatureJobTracker.md - Sistem Pelacak Lamaran Kerja (Job Tracker System)

Dokumentasi lengkap mengenai fitur-fitur yang tersedia pada aplikasi **Job Tracker Sistem** berbasis **Laravel 10**, **AngularJS (v1.x)**, **Eloquent ORM**, **Repository Pattern**, dan **Form Request Validation**.

---

## 📋 Daftar Isi
1. [Arsitektur & Fitur Utama](#1-arsitektur--fitur-utama)
2. [Fitur Autentikasi & Akses Kontrol](#2-fitur-autentikasi--akses-kontrol)
3. [Fitur Peran Admin (Admin Features)](#3-fitur-peran-admin-admin-features)
4. [Fitur Peran Pelamar (User Features)](#4-fitur-peran-pelamar-user-features)
5. [Fitur Pengaturan Profil & Keamanan](#5-fitur-pengaturan-profil--keamanan)
6. [Fitur System Changelog Modal](#6-fitur-system-changelog-modal)
7. [Fitur Mode Gelap (Dark Mode)](#7-fitur-mode-gelap-dark-mode)

---

## 1. Arsitektur & Fitur Utama

- **Frontend Interaktif dengan AngularJS (v1.x)**:
  Aplikasi mengintegrasikan framework **AngularJS (v1.8.2)** secara langsung ke dalam Blade Layout tanpa memerlukan setup SPA/Node build terpisah. Seluruh interaksi form, pemuatan data, pencarian live, dan pengoperasian modal berjalan tanpa *page reload* melalui modul `jobTrackerApp`.
  
- **RESTful API Backend**:
  Setiap aksi data dihubungkan ke endpoint REST API yang bersih di `/api/*` (`/api/accounts`, `/api/applications`, `/api/profile`), diamankan dengan Laravel Session & CSRF Token.

- **Repository Pattern Architecture**:
  Arsitektur berstandar industri dengan pemisahan antarmuka (*interface*) dan implementasi (*Eloquent Repository*):
  - `UserRepositoryInterface` & `UserRepository`
  - `ApplicationRepositoryInterface` & `ApplicationRepository`
  - Terikat secara otomatis melalui `RepositoryServiceProvider`.

- **Strict Eloquent ORM**:
  Seluruh transaksi data menggunakan **Eloquent Model** (`App\Models\User` & `App\Models\Application`). Tidak ada lagi kueri manual `DB::table` Query Builder.

- **Form Request Validation**:
  Aturan validasi dipisahkan secara rapi ke dalam kelas `App\Http\Requests\*` (Profile, Account, Application) untuk menjaga kebersihan controller.

---

## 2. Fitur Autentikasi & Akses Kontrol

### 🔐 Autentikasi Pengguna (`/login` & `/logout`)
- **Multi-Role Authentication**: Mendukung dua tipe akun utama: `Admin` (`is_admin = 1`) dan `User / Pelamar` (`is_admin = 0`).
- **Redirect Cerdas berdasarkan Role**:
  - `Admin` yang berhasil login otomatis diarahkan ke Dashboard Admin (`/admin`).
  - `User` yang berhasil login otomatis diarahkan ke Dashboard User (`/user/dashboard`).
- **Keamanan Sesi**: Regenerasi ID sesi otomatis saat login dan invalidasi token CSRF saat logout.

---

## 3. Fitur Peran Admin (Admin Features)

### 👑 Dashboard Admin (`/admin`)
- Ucapan selamat datang personal pengguna admin.
- Tombol akses cepat untuk mendaftarkan akun baru pelamar/admin.

### 👥 Manajemen Akun (`/admin/account`)
- **Daftar Akun (`/admin/account`)**:
  - Menampilkan seluruh pengguna yang terdaftar secara real-time via AngularJS `$http.get('/api/accounts')`.
  - Informasi mencakup: Nama Lengkap, Email, Role (Admin/User), dan Aksi.
- **Tambah Akun Baru (`/admin/account/create`)**:
  - Form pendaftaran pengguna baru dengan penentuan role (`Admin` / `User`).
  - Validasi unik email dan kelengkapan nama via `StoreAccountRequest`.
- **Edit Akun (`/admin/account/edit/{id}`)**:
  - Memperbarui informasi nama, email, dan role akun pengguna yang sudah ada via `$http.put('/api/accounts/{id}')`.
- **Reset Password Akun (`/admin/account/pass/{id}`)**:
  - Admin dapat memperbarui password pengguna secara langsung via `$http.post('/api/accounts/{id}/password')`.
- **Hapus Akun**:
  - Admin dapat menghapus akun pengguna beserta konfirmasi konfirmasi dialog.

---

## 4. Fitur Peran Pelamar (User Features)

### 📊 Dashboard Pelamar (`/user/dashboard`)
- **Statistik Ringkasan Status Lamaran**:
  - **Send CV**: Jumlah lamaran yang baru terkirim.
  - **Viewed**: Jumlah lamaran yang telah dilihat oleh HRD.
  - **Interview HRD**: Jumlah proses wawancara tahap HRD.
  - **Interview User**: Jumlah proses wawancara tahap User/Technical.
  - **Failed**: Jumlah lamaran yang ditolak / belum beruntung.
  - **Total Lamaran**: Total akumulasi lamaran pekerjaan yang pernah dikirimkan.

### 📝 Manajemen Lamaran Kerja (`/user/applied`)
- **Live Search & Filter Data**:
  - Pencarian instan berdasarkan nama perusahaan menggunakan AngularJS `ng-model="search"` tanpa mereload halaman.
- **Statistik Ringkasan Platform Lamaran**:
  - Rekapitulasi otomatis jumlah lamaran berdasarkan platform asal: **LinkedIn**, **Glints**, **JobStreet**, **Indeed**, **Pintarnya**, dan **E-Krut**.
- **Tambah Lamaran Kerja (`/user/applied/create`)**:
  - Pencatatan detail lamaran:
    - Nama Perusahaan (`company`)
    - Posisi / Role Pekerjaan (`role`)
    - Platform Asal (`platform`)
    - Tanggal Lamaran (`apply_at`)
    - Status Lamaran (`Send CV`, `Viewed`, `Interview HRD`, `Interview User`, `Success`, `Failed`)
    - Link Eksternal / Portofolio (`link`)
    - Deskripsi Pekerjaan (`description`)
- **Detail Lamaran (`/user/applied/show/{id}`)**:
  - Menampilkan ringkasan lengkap lamaran pekerjaan beserta tanggal pembaruan terakhir (*updated_at*).
- **Edit Lamaran (`/user/applied/edit/{id}`)**:
  - Memperbarui status lamaran (misal: dari `Send CV` menjadi `Interview HRD` atau `Success`) secara real-time via `$http.put('/api/applications/{id}')`.
- **Hapus Lamaran**:
  - Penghapusan data lamaran pekerjaan dengan konfirmasi aman.

---

## 5. Fitur Pengaturan Profil & Keamanan

### 👤 Profil Pengguna (`/user/settings/profile` & `/admin/settings/profile`)
- Memperbarui Nama Lengkap dan Alamat Email secara langsung melalui AngularJS `ProfileController` tanpa perlu meload ulang halaman.
- Validasi instan keunikan email via `UpdateProfileRequest`.

### 🔒 Ubah Password (`/user/settings/change-password` & `/admin/settings/change-password`)
- Fitur ubah password akun pribadi.
- Memerlukan verifikasi **Password Lama** untuk menjaga keamanan akun.
- Apabila password baru berhasil diperbarui, sistem akan secara otomatis melogout pengguna dan meminta login kembali demi keamanan.

---

## 6. Fitur System Changelog Modal

- **Akses Instan dari Sidebar**:
  - Tombol **Changelog v2.0.0** terletak pada bagian bawah sidebar navigasi desktop maupun menu mobile.
- **AngularJS Modal at Body Level**:
  - Modal dirender pada root level `<body>` dengan `style="position: fixed !important; top: 0; left: 0; width: 100vw; height: 100vh; z-index: 999999;"` sehingga dijamin 100% muncul presisi di tengah layar (*centered popup modal*).
- **Catatan Versi & Timeline Visual**:
  - Menampilkan riwayat perubahan versi aplikasi (`v2.0.0`, `v1.1.0`, `v1.0.0`) lengkap dengan tanggal rilis, status tag (*Latest Release*), serta poin-poin fitur yang diimplementasikan.
- **Kontrol Penutupan Mudah**:
  - Modal dapat ditutup melalui tombol **Tutup**, tombol `X`, mengklik latar belakang (*backdrop click*), maupun menekan tombol **Escape** keyboard.

---

## 7. Fitur Mode Gelap (Dark Mode)

- **Sistem Tema Dinamis**:
  - Mendukung peralihan mode Terang (*Light Mode*) dan mode Gelap (*Dark Mode*).
- **Kompatibilitas Luas**:
  - Seluruh komponen UI (Sidebar, Navbar, Cards, Tables, Forms, dan Modal Changelog) telah disesuaikan agar nyaman di mata dalam mode gelap menggunakan variabel warna Tailwind (`dark:bg-darkmode-600`, `dark:text-white`, `dark:border-darkmode-400`).
