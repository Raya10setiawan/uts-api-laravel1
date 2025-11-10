# 🚀 Project UTS Pemrograman API (Laravel)

Project ini dibuat untuk memenuhi tugas Ujian Tengah Semester (UTS) mata kuliah **Pemrograman API** di Universitas Islam Balitar.

Project ini berupa API sederhana yang dibuat menggunakan framework Laravel, dengan autentikasi berbasis token menggunakan **Laravel Sanctum**.

- **Program Studi:** Teknik Informatika
- **Dosen Pengampu:** Saiful Nur Budiman, S.Kom., M.Kom

---

## 👨‍💻 Daftar Anggota    

* **Nama:** Raya Yuni Setiawan (23104410018)
* **Nama:** Ahmad Fathin Naufal H. (23104410032)
* **Nama:** Pacitra Ade Saputra (23104410048)
* **Nama:** Syahrul Evan Nur Rohman (23104410040)
* **Nama:** Mohchammad Ichlasul Amal (23104410045)
* **Nama:** M.Regi Fabian Nashfi (23104410037)

---

## ⚙️ Prasyarat

* PHP (versi 8.1+)
* Composer
* Laragon (atau server lokal lainnya)
* Postman (untuk pengujian API)

---

## 🚀 Instalasi dan Setup

Berikut adalah langkah-langkah untuk menjalankan project ini di komputer lokal:

1.  **Clone Repository**
    Buka terminal dan jalankan:
    ```bash
    git clone [https://github.com/Raya10setiawan/uts-api-laravel1.git](https://github.com/Raya10setiawan/uts-api-laravel1.git)
    cd uts-api-laravel1
    ```
    *(Ganti URL dengan URL GitHub kamu jika berbeda)*

2.  **Install Dependensi**
    ```bash
    composer install
    ```

3.  **Buat File `.env`**
    Salin file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```

4.  **Setup Database (SQLite)**
    * Di dalam folder `database/`, buat sebuah file kosong bernama `database.sqlite`.
    * Buka file `.env` dan atur koneksi database menjadi:
        ```env
        DB_CONNECTION=sqlite
        DB_DATABASE=C:\path\ke\project\database\database.sqlite
        ```
        *(**PENTING:** Ganti `C:\path\ke\project` dengan path absolut ke folder project kamu, contoh: `C:\laragon\www\uts-api-project\database\database.sqlite`)*

5.  **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

6.  **Migrasi dan Seeding Database**
    Perintah ini akan membuat tabel (termasuk `users` & `personal_access_tokens`) dan mengisi data user login (`UserSeeder`):
    ```bash
    php artisan migrate:fresh --seed
    ```

7.  **Jalankan Server**
    ```bash
    php artisan serve
    ```
    Server akan berjalan di `http://localhost:8000`.

---

## 🔑 Pengujian Endpoint API (Postman)

Project ini memiliki 2 endpoint utama sesuai dengan soal UTS.

### 1. Login (Mendapatkan Token)

Endpoint ini digunakan untuk autentikasi user dan mendapatkan Bearer Token.

* **Method:** `POST`
* **URL:** `http://localhost:8000/api/login`
* **Headers:**
    * `Accept`: `application/json`
* **Body:** (`raw`, `JSON`)
    ```json
    {
        "email": "rayayunib@gmail.com",
        "password": "12345678"
    }
    ```
* **Response (Sukses `200 OK`):**
    ```json
    {
        "message": "Login berhasil",
        "token": "1|aBcDeF... (token panjang akan muncul di sini)",
        "user": { ... }
    }
    ```
    **➡️ Salin (Copy) `token` yang Anda dapatkan.**

---

### 2. Get Data Mahasiswa

Endpoint ini menampilkan data mahasiswa. Endpoint ini dilindungi oleh Sanctum dan **memerlukan token**.

* **Method:** `GET`
* **URL:** `http://localhost:8000/api/mahasiswa`
* **Authorization:**
    * Pilih Tipe: `Bearer Token`
    * Paste (tempel) token yang Anda salin dari proses login ke kolom `Token`.
* **Headers:**
    * `Accept`: `application/json`
* **Response (Sukses `200 OK`):**
    ```json
    {
        "status": "success",
        "data": [
            {
                "id": 1,
                "nama": "Iyas Salahudin",
                "email": "iyasnawati@example.org",
                ...
            },
            {
                "id": 2,
                "nama": "Intan Agustina",
                "email": "tdabukke@example.net",
                ...
            },
            ...
        ]
    }
    ```
