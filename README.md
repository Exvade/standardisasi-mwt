# Portal Standardisasi Internal - PT Mada Wikri Tunggal

## 📖 Deskripsi Proyek
Portal ini adalah pusat kebenaran tunggal (*Single Source of Truth*) untuk seluruh standar pengembangan aplikasi web di lingkungan internal perusahaan. Proyek ini bertujuan untuk menyatukan desain antarmuka (UI/UX) dan aturan basis data yang selama ini terfragmentasi di berbagai sistem yang berbeda.

Portal ini berfungsi ganda sebagai:
1. **Design System & Documentation:** Etalase interaktif untuk melihat standar komponen UI beserta potongan kodenya (*code snippets*).
2. **Asset Center:** Tempat mengunduh panduan standar (berupa file `.md`) untuk diterapkan pada proyek-proyek lama (*brownfield*).
3. **Content Management System (CMS):** Panel admin untuk mengelola versi standar, komponen, dan pembaruan aturan tanpa harus mengubah *source code*.

---

## 🛠️ Tech Stack
*   **Bahasa:** PHP 8.2
*   **Framework Utama:** Laravel (versi terbaru)
*   **Frontend & Templating:** Laravel Blade
*   **Styling:** Tailwind CSS (via Vite)
*   **Database:** MySQL / PostgreSQL
*   **Autentikasi:** Custom Manual Auth (Clean)

---

## 🚀 Fitur Utama

### 1. Halaman Publik (Untuk Pengembang/Tim IT)
*   **Dashboard Utama:** Ringkasan standar versi terbaru dan *changelog* (riwayat pembaruan standar).
*   **Katalog Komponen UI:**
    *   Menampilkan bentuk visual komponen (Tombol, Formulir, Tabel, Kartu, Navigasi).
    *   Menyediakan blok kode (Blade + Tailwind) yang bisa langsung di-*copy-paste*.
*   **Panduan Arsitektur & Database:**
    *   Dokumentasi standar penamaan tabel, kolom wajib, dan aturan tipe data.
*   **Pusat Unduhan (Download Center):**
    *   Tombol unduh untuk file panduan seperti `standard-ui.md`, `standard-db.md`, atau *starter-kit* untuk disuntikkan ke proyek *existing*.

### 2. Panel Admin (CMS)
*   **Manajemen Autentikasi:** Login khusus untuk admin/lead engineer.
*   **Manajemen Komponen UI (CRUD):** 
    *   Formulir untuk menambah/mengedit komponen baru, lengkap dengan *field* untuk nama komponen, kategori, visual, dan potongan kode HTML/Blade-nya.
*   **Manajemen Aset & File Markdown:** 
    *   Fitur untuk mengunggah dan memperbarui file `.md` yang akan diunduh oleh pengembang lain.
*   **Manajemen Versi & Pengumuman:** 
    *   Fitur untuk merilis *changelog* (misal: "Rilis Standar UI v2.1: Pembaruan layout tabel").

---

## 🗄️ Struktur Database (Draft Awal)
Berikut adalah gambaran tabel utama yang dibutuhkan:

1.  **users** (Untuk akses Admin)
    *   `id`, `name`, `email`, `password`, `role`, `is_active` (boolean)
2.  **categories** (Kategori komponen, misal: Atoms, Molecules, Layouts)
    *   `id`, `name`, `slug`, `order` (integer untuk urutan)
3.  **components** (Menyimpan data komponen UI)
    *   `id`, `category_id`, `title`, `description`, `code_snippet`, `preview_html`, `status` (draft/published), `version`
4.  **guidelines** (Menyimpan panduan teks/aturan database)
    *   `id`, `title`, `content`, `type` (UI/Database), `status` (draft/published), `order` (integer)
5.  **downloadable_assets** (Menyimpan file `.md` atau zip)
    *   `id`, `file_name`, `file_path`, `version`, `status` (draft/published)

---

## 📅 Fase Pengembangan (Roadmap)
*   **Fase 1 - Fondasi & Autentikasi:** Instalasi Laravel, integrasi Tailwind CSS via Vite, dan setup sistem Login Admin (fitur *register* publik dinonaktifkan, rute admin & publik dipisah).
*   **Fase 2 - Pembangunan CMS:** Membuat fitur CRUD untuk Kategori, Komponen UI, dan Manajemen File.
*   **Fase 3 - Frontend / Publik:** Membuat tampilan halaman depan untuk melihat komponen, menyalin kode, dan mengunduh file `.md`.
*   **Fase 4 - Finalisasi:** Pengujian, perapihan UI dengan standar yang telah dibuat, dan rilis versi 1.0.