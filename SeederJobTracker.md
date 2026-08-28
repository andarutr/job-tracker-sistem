# SeederJobTracker.md - Dokumentasi & Data Seeder Job Tracker System

Dokumentasi lengkap seeder basis data (*Database Seeders*), data sampel, akun pengguna awal, serta kode program PHP Laravel Seeder yang siap dijalankan pada proyek **Job Tracker Sistem**.

---

## 🚀 Cara Menjalankan Seeder

Untuk mengisi basis data dengan data awal (pengguna & sampel lamaran pekerjaan), jalankan perintah Artisan berikut di terminal:

```bash
# 1. Menjalankan seeder saja pada basis data yang sudah ada
php artisan db:seed

# 2. ATAU melakukan reset total tabel dan langsung mengisi data seeder (Rekomendasi untuk Fresh Install)
php artisan migrate:fresh --seed
```

---

## 🔑 Data Akun Awal (Default Seed Credentials)

Setelah seeder dijalankan, gunakan kredensial berikut untuk masuk ke dalam sistem:

| Role / Akses | Email | Password | Gambar Profil | Hak Akses Utama |
| :--- | :--- | :--- | :--- | :--- |
| 👑 **Administrator** | `admin@kitacoding.my.id` | `password` | `user.jpg` | Mengelola & mendaftarkan akun pengguna (`/admin`). |
| 💼 **Pelamar / User** | `andarutr@gmail.com` | `password` | `andarutr.png` | Mencatat & memantau lamaran pekerjaan (`/user/applied`). |

*Catatan: Hash password default di basis data menggunakan format Bcrypt untuk string `'password'`.*

---

## 🛠️ Berkas Kode Seeder (Source Code)

### 1. `database/seeders/DatabaseSeeder.php`
Berkas seeder utama yang memanggil seluruh seeder secara berurutan.

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ApplicationSeeder::class,
        ]);
    }
}
```

---

### 2. `database/seeders/UserSeeder.php`
Menyiapkan data akun Administrator dan User/Pelamar awal.

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Reset tabel users
        User::truncate();

        // Akun Administrator
        User::create([
            'id' => 1,
            'name' => 'Administrator',
            'email' => 'admin@kitacoding.my.id',
            'password' => Hash::make('password'),
            'picture' => 'user.jpg',
            'is_admin' => 1,
            'created_at' => '2024-01-07 06:31:52',
            'updated_at' => '2024-01-07 06:31:52',
        ]);

        // Akun Pelamar / User
        User::create([
            'id' => 2,
            'name' => 'Andaru Triadi',
            'email' => 'andarutr@gmail.com',
            'password' => Hash::make('password'),
            'picture' => 'andarutr.png',
            'is_admin' => 0,
            'created_at' => '2024-01-07 06:31:52',
            'updated_at' => '2024-01-07 09:23:00',
        ]);
    }
}
```

---

### 3. `database/seeders/ApplicationSeeder.php`
Mengisi sampel data lamaran pekerjaan dari berbagai platform (LinkedIn, Glints, JobStreet, Indeed, Pintarnya, E-Krut) dengan berbagai status pelamaran.

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Application;

class ApplicationSeeder extends Seeder
{
    public function run(): void
    {
        // Reset tabel applications
        Application::truncate();

        $sampleApplications = [
            [
                'user_id' => 2,
                'company' => 'PT Tokopedia',
                'role' => 'Backend Engineer',
                'description' => 'Mengembangkan RESTful API microservices menggunakan Go dan PHP Laravel. Mengoptimalkan kueri database MySQL & Redis.',
                'platform' => 'Linkedin',
                'apply_at' => '2024-01-02 10:00:00',
                'status' => 'Interview User',
                'link' => 'https://www.linkedin.com/jobs/view/tokopedia-backend',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'company' => 'PT Bukalapak',
                'role' => 'Frontend Developer',
                'description' => 'Membangun antarmuka pengguna interaktif menggunakan Vue.js & Tailwind CSS. Berkolaborasi dengan tim UI/UX.',
                'platform' => 'Glints',
                'apply_at' => '2024-01-03 14:30:00',
                'status' => 'Interview HRD',
                'link' => 'https://glints.com/id/opportunities/jobs/bukalapak-frontend',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'company' => 'Gojek (GoTo)',
                'role' => 'Fullstack Developer',
                'description' => 'Integrasi sistem pembayaran online dan dashboard analitik internal perusahaan.',
                'platform' => 'Job Street',
                'apply_at' => '2024-01-04 09:15:00',
                'status' => 'Send CV',
                'link' => 'https://www.jobstreet.co.id/job/gojek-fullstack',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'company' => 'PT Bank Central Asia (BCA)',
                'role' => 'IT Application Developer',
                'description' => 'Pengembangan dan pemeliharaan aplikasi perbankan digital berbasis Java Spring Boot & Laravel API.',
                'platform' => 'Indeed',
                'apply_at' => '2024-01-05 11:00:00',
                'status' => 'Viewed',
                'link' => 'https://id.indeed.com/viewjob?jk=bca-it-dev',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'company' => 'PT Shopee International',
                'role' => 'Software Quality Assurance',
                'description' => 'Melakukan automated testing menggunakan Selenium & Cypress untuk menjamin kualitas fitur aplikasi e-commerce.',
                'platform' => 'Pintarnya',
                'apply_at' => '2024-01-06 16:45:00',
                'status' => 'Success',
                'link' => 'https://pintarnya.com/jobs/shopee-sqa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'company' => 'PT Traveloka Indonesia',
                'role' => 'DevOps Engineer',
                'description' => 'Mengelola infrastruktur cloud AWS, CI/CD pipeline dengan Docker & Kubernetes.',
                'platform' => 'E-Krut',
                'apply_at' => '2024-01-07 08:30:00',
                'status' => 'Failed',
                'link' => 'https://www.ekrut.com/jobs/traveloka-devops',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($sampleApplications as $app) {
            Application::create($app);
        }
    }
}
```
