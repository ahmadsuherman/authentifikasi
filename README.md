# Panduan Penggunaan Git

* [Mengunduh repository ke dalam komputer](https://github.com/AhmadSuherman/authentifikasi/blob/master/README.md#mengunduh-repository)
* [Menjalankan repository yang telah diunduh](https://github.com/AhmadSuherman/authentifikasi/blob/master/README.md#menjalankan-aplikasi)


## Mengunduh Repository

Unduh repository ke dalam komputer menggunakan perintah `git clone`. Url
repository dapat dilihat di dalam repository yang diinginkan.

```
git clone https://github.com/AhmadSuherman/authentifikasi.git
```

#### Contoh

![img](https://github.com/AhmadSuherman/authentifikasi/blob/master/public/readme_img/git%20clone.PNG)

## Menjalankan Aplikasi

### Step 1
Setelah mengunduh repository selanjutnya mengatur hak akses untuk mengeksekusi file, menggunakan perintah `chmod 755`. folder repository yang telah di unduh. 

```
chmod 755 authentifikasi
```

#### Contoh

![img](https://github.com/AhmadSuherman/authentifikasi/blob/master/public/readme_img/chmod.PNG)

### Step 2
Masuk ke direktori folder repository yang telah diunduh

```
cd authentifikasi
```

![img](https://github.com/AhmadSuherman/authentifikasi/blob/master/public/readme_img/masuk%20folder%20yang%20di%20clone.PNG)

lalu composer install

```
composer install
```

#### Contoh

![img](https://github.com/AhmadSuherman/authentifikasi/blob/master/public/readme_img/composer%20install.PNG)

### Step 3
membuat file .env difolder repository yang telah diunduh dengan menyalin difile .env.example, lalu ubah DB_DATABASE sesuai dengan nama database yang akan digunakan.

![img](https://github.com/AhmadSuherman/authentifikasi/blob/master/public/readme_img/.env.PNG)

### Step 4
membuat database di phpmyadmin untuk menampung data-data dari folder repository.

![img](https://github.com/AhmadSuherman/authentifikasi/blob/master/public/readme_img/phpmyadmin.PNG)

### Step 5
Membuat kunci produk menggunakan `php artisan key:generate` untuk mengambil akses aplikasi.

```
php artisan key:generate
```

![img](https://github.com/AhmadSuherman/authentifikasi/blob/master/public/readme_img/key%20generate.PNG)

### Step 6
kemudian menjalankan perintah `php artisan migrate` untuk membuat tabel di database yang telah dibuat.

```
php artisan migrate
```
![img](https://github.com/AhmadSuherman/authentifikasi/blob/master/public/readme_img/migrate.PNG)


### Step 7
kemudian menjalankan perintah `php artisan db:seed` untuk membuat data-data tabel di database yang telah dibuat.

```
php artisan db:seed
```
![img](https://github.com/AhmadSuherman/authentifikasi/blob/master/public/readme_img/seed.PNG)

### Step 8
menjalankan aplikasi dengan perintah `php artisan serve` 

```
php artisan serve
```

![img](https://github.com/AhmadSuherman/authentifikasi/blob/master/public/readme_img/serve.PNG)

Lalu masuk ke web browser maka akan tampil seperti berikut.

![img](https://github.com/AhmadSuherman/authentifikasi/blob/master/public/readme_img/chrome.PNG)

