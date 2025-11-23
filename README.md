# Bank Saving System - Belimbing.ai Engineering Test

Sistem manajemen tabungan bank sederhana yang dibangun menggunakan **Laravel (MVC)**. Aplikasi ini menangani pengelolaan nasabah, akun, tipe deposito, serta perhitungan bunga deposito (ROI) secara otomatis.

Project ini dibuat untuk memenuhi **Full Stack Engineer Test** dari Belimbing.ai.

## 📋 Fitur Utama (Sesuai Spesifikasi)

Aplikasi ini mencakup fitur-fitur berikut sesuai dokumen kebutuhan:

1.  **Manajemen Data (CRUD):**
    * [cite_start]**Customer:** Create, Edit, Delete data nasabah[cite: 25].
    * [cite_start]**Account:** Pembukaan rekening dengan validasi saldo awal[cite: 29].
    * [cite_start]**Deposito Type:** Pengaturan tipe deposito (Bronze, Silver, Gold) dengan persentase bunga berbeda [cite: 33, 42-44].

2.  **Logika Bisnis & Perbankan:**
    * [cite_start]Satu nasabah dapat memiliki banyak akun[cite: 47].
    * [cite_start]Satu akun hanya terikat pada satu tipe deposito[cite: 49].
    * [cite_start]Validasi input tanggal deposit dan withdraw[cite: 57].

3.  **Kalkulasi Bunga Otomatis (Core Feature):**
    * Menghitung **Ending Balance** saat nasabah melakukan penarikan (Withdraw).
    * [cite_start]Rumus: `Ending Balance = Starting Balance + (Starting Balance * Durasi Bulan * Monthly Return)` [cite: 58-59].
    * Menangani perhitungan durasi bulan secara dinamis berdasarkan tanggal transaksi.

4.  **Technical Excellence:**
    * [cite_start]**MVC Architecture:** Menggunakan konsep Model-View-Controller yang ketat pada Backend dan Frontend[cite: 18].
    * [cite_start]**Unit Testing:** Dilengkapi dengan Automated Test (PHPUnit) untuk memvalidasi rumus bunga dan edge cases[cite: 16].
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