 # Instalasi

1. Clone repository ini

```
git clone https://github.com/anggitmochammad/dot-sprint-1.git
```

2. Masuk ke file yang sudah diclone lalu ketik pada terminal
```
composer install
```
```
php artisan key:generate
```

3. Copy .env.example menjadi .env
4. Konfigurasi database
5. ketik pada terminal untuk generate database province dan city
```
php artisan ongkir:generate
```
6. ketik pada terminal untuk menjalankan aplikasi 
```
php artisan serv
```

# Penggunaan API

## BASE URL:
```
http://127.0.0.1:8000
```
## List API
<table>
<thead>
<tr>
  <th>No</th>
  <th>Kategori</th>
  <th>Endpoint</th>
  <th>Parameter</th>
  <th>Method</th>
</tr>
</thead>
<tbody>
  <tr>
    <td>1</td>
    <td>Login</td>
    <td>/login</td>
    <td>Tidak ada</td>
    <td>GET</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Search Provinsi</td>
    <td>/search/provinces</td>
    <td>id = int</td>
    <td>GET</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Search Kota</td>
    <td>/search/cities</td>
    <td>id = int</td>
    <td>GET</td>
  </tr>