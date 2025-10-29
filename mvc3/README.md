# MVC Pattern Demo (PHP)

## Struktur Folder
```
mvc3/
├── index.php          # Front Controller (Entry point)
├── controller/         # Controllers - Handle business logic
│   ├── LoginController.php
│   └── BerandaController.php
├── model/             # Models - Handle data operations
│   └── UserModel.php
└── view/              # Views - Handle presentation
    ├── login.php
    └── beranda.php
```

## Cara Kerja MVC

### 1. Model (UserModel.php)
- Menangani operasi data (database, validasi)
- Tidak peduli bagaimana data ditampilkan
- Contoh: `authenticate()`, `userExists()`

### 2. Controller (LoginController.php, BerandaController.php)
- Menerima request dari user
- Memanggil Model untuk dapatkan data
- Mengirim data ke View untuk ditampilkan
- Contoh: `processLogin()`, `showBeranda()`

### 3. View (login.php, beranda.php)
- Menampilkan data yang diberikan Controller
- Hanya berisi HTML dan sedikit PHP untuk echo data
- Tidak mengandung logika bisnis

### 4. Front Controller (index.php)
- Entry point untuk semua request
- Routing: menentukan controller/method yang dipanggil
- Memastikan arsitektur konsisten

## Alur Request
1. User buka `index.php?page=login`
2. Front Controller routing ke `LoginController::showLogin()`
3. Controller load view `login.php`
4. User submit form ke `index.php?page=do_login`
5. Front Controller routing ke `LoginController::processLogin()`
6. Controller panggil `UserModel::authenticate()`
7. Jika berhasil, redirect ke beranda

## Keuntungan MVC
- **Separation of Concerns**: Setiap bagian punya tanggung jawab jelas
- **Maintainable**: Mudah mengubah view tanpa ganggu logic
- **Testable**: Controller dan Model bisa di-test terpisah
- **Scalable**: Mudah menambah fitur baru