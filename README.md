# 🛡️ Group 10 Admin Panel

Admin panel modern berbasis **Laravel** + **Tailwind CSS** (Vite) untuk mata kuliah Pemrograman Web.

---

## 👥 Tim Pengembang

| No | Nama | Role | Branch |
|----|------|------|--------|
| 1 | Gilang *(Ketua)* | Setup, Layout, Integrasi, GitHub | `feature/gilang-setup` |
| 2 | Nazwa | UI: Header & Sidebar | `feature/nazwa-ui` |
| 3 | Ali | Content: Users & Settings page | `feature/ali-content` |

---

## 🚀 Cara Install & Menjalankan Project

### 1. Clone repository
```bash
git clone https://github.com/glngwrdiansyh10/group10-admin-panel-project.git
cd group10-admin-panel-project
```

### 2. Install PHP dependencies
```bash
composer install
```

### 3. Install Node dependencies
```bash
npm install
```

### 4. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Jalankan project
```bash
# Terminal 1 — Vite dev server
npm run dev

# Browser — buka XAMPP lalu akses:
http://localhost/group10-admin-panel/public/dashboard
```

---

## 📁 Struktur Folder

```
resources/views/
├── layouts/
│   └── app.blade.php          # Layout utama (sidebar + header + content + footer)
├── components/
│   ├── header.blade.php       # Komponen header
│   ├── sidebar.blade.php      # Komponen sidebar + navigasi
│   ├── footer.blade.php       # Komponen footer
│   ├── stat-card.blade.php    # Komponen kartu statistik (reusable)
│   └── data-table.blade.php   # Komponen tabel data (reusable)
└── pages/
    ├── dashboard.blade.php    # Halaman dashboard utama
    ├── users.blade.php        # Halaman manajemen user
    └── settings.blade.php     # Halaman pengaturan
```

---

## 🌿 GitHub Workflow

### Alur Kerja Tim
```
main
 └── feature/gilang-setup      ← Ketua (setup dasar)
 └── feature/anggota1-ui       ← Anggota 1 (header & sidebar)
 └── feature/anggota2-content  ← Anggota 2 (users & settings)
```

### Langkah Kerja Anggota
```bash
# 1. Ambil kode terbaru dari main
git checkout main
git pull origin main

# 2. Buat branch sendiri
git checkout -b feature/anggota1-ui   # (atau anggota2-content)

# 3. Kerjakan tugas masing-masing

# 4. Commit & push
git add .
git commit -m "feat: deskripsi perubahan"
git push origin feature/anggota1-ui

# 5. Buat Pull Request di GitHub ke branch main
```

---

## 📋 Pembagian Tugas Detail

### 👑 Ketua — Gilang
- [x] Setup Laravel + Tailwind CSS (Vite)
- [x] Konfigurasi `app.css` (tema, warna, font)
- [x] Buat layout utama `layouts/app.blade.php`
- [x] Buat halaman dashboard dengan stat cards & tabel
- [x] Buat semua Blade components (header, sidebar, footer, stat-card, data-table)
- [x] Setup routing di `routes/web.php`
- [x] Setup GitHub repository & workflow
- [x] Buat dokumentasi (README.md)

### 👨‍💻 Nazwa — UI Components
- [ ] Kustomisasi & percantik `components/header.blade.php`
- [ ] Kustomisasi & percantik `components/sidebar.blade.php`
- [ ] Tambah animasi / micro-interaction
- [ ] Pastikan responsive di mobile

### 👨‍💻 Ali — Content Pages
- [ ] Kembangkan `pages/users.blade.php` (tabel lengkap + search)
- [ ] Kembangkan `pages/settings.blade.php` (form settings)
- [ ] Tambah data dummy yang lebih variatif

---

## 🛠️ Tech Stack

- **Backend**: Laravel 12
- **Frontend**: Blade Template + Tailwind CSS v4
- **Build Tool**: Vite
- **Server lokal**: XAMPP (Apache + PHP)
- **Version Control**: Git + GitHub
