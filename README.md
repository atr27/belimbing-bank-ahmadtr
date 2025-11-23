# Bank Saving System - Belimbing.ai Engineering Test

Sistem manajemen tabungan bank sederhana yang dibangun menggunakan **Laravel (MVC)**. Aplikasi ini menangani pengelolaan nasabah, akun, tipe deposito, serta perhitungan bunga deposito (ROI) secara otomatis.

Project ini dibuat untuk memenuhi **Full Stack Engineer Test** dari Belimbing.ai.

## 📋 Fitur Utama (Sesuai Spesifikasi)

Aplikasi ini mencakup fitur-fitur berikut sesuai dokumen kebutuhan:

1.  **Manajemen Data (CRUD):**
    * **Customer:** Create, Edit, Delete data nasabah.
    * **Account:** Pembukaan rekening dengan validasi saldo awal.
    * **Deposito Type:** Pengaturan tipe deposito (Bronze, Silver, Gold) dengan persentase bunga berbeda.

2.  **Logika Bisnis & Perbankan:**
    * Satu nasabah dapat memiliki banyak akun.
    * Satu akun hanya terikat pada satu tipe deposito.
    * Validasi input tanggal deposit dan withdraw.

3.  **Kalkulasi Bunga Otomatis (Core Feature):**
    * Menghitung **Ending Balance** saat nasabah melakukan penarikan (Withdraw).
    * Rumus: `Ending Balance = Starting Balance + (Starting Balance * Durasi Bulan * Monthly Return)`.
    * Menangani perhitungan durasi bulan secara dinamis berdasarkan tanggal transaksi.

4.  **Technical Excellence:**
    * **MVC Architecture:** Menggunakan konsep Model-View-Controller yang ketat pada Backend dan Frontend.
    * **Unit Testing:** Dilengkapi dengan Automated Test (PHPUnit) untuk memvalidasi rumus bunga dan edge cases.
    * **Database Seeding:** Data dummy otomatis untuk memudahkan pengujian.

---

## 🛠 Teknologi yang Digunakan

* **Backend Framework:** Laravel 10.x / 11.x
* **Frontend:** Blade Templates & Bootstrap 5
* **Database:** MySQL
* **Testing:** PHPUnit (SQLite Memory)
* **Language:** PHP 8.x

---

## 🚀 Cara Instalasi (Local Development)

Ikuti langkah berikut untuk menjalankan aplikasi di komputer lokal Anda:

### 1. Clone Repositori
```bash
git clone <repository-url-anda>
cd belimbing-bank
