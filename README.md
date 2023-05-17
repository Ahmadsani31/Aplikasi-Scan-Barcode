# Aplikasi Web Scan Barcode

![N|Solid](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)

Mengunnakan package Qr Code Scanner [Html5-QRCode](https://github.com/mebjas/html5-qrcode) Terima Kasih.

Menggunakan  [laravel](https://nodejs.org/) v8 dan package [liveware](https://laravel-livewire.com/) dan Laravel WebSockets di [BeyondCode](https://beyondco.de/docs/laravel-websockets/getting-started/introduction) untuk trigger.

## Installation

Install the dependencies and devDependencies and start the server.

```sh
git clone https://github.com/Ahmadsani31/Aplikasi-Scan-Barcode.git

cd Aplikasi-Scan-Barcode

composer install

cp .env.example .env

php artisan config:cache

php artisan key:generate

php artisan migrate --seed
```

Install Laravel WebSocket, lihat di dokumentasi [BeyondCode](https://beyondco.de/docs/laravel-websockets/getting-started/installation)

Install Liveware, lihat di dokumentasi [Livewire](https://laravel-livewire.com/docs/2.x/quickstart)

Install Broadcasting Event, lihat di dokumentasi [Laravel Broadcasting](https://laravel.com/docs/10.x/broadcasting#main-content)

Jalankan Aplikasi
```sh
php artisan serve
```



lihat aplikasi berjalan pada browser

```sh
127.0.0.1:8000 / localhost:8080
```

## License

MIT


