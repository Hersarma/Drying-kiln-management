<div id="top"></div>

<br />
<div align="center">
  <a href="https://github.com/github_username/repo_name">
    <img src="public/img/europalete-logo-black_teal.png" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">Dry Kiln web application</h3>

  <p align="center">
    Web app for dry kiln management.
    <br />
    Clients, inventory, dry kilns, E-mail client.
    <br />
    <br />
    <a href="https://hersarma.in.rs" target="_blank">View Demo</a>
    <br />
    <br />
  </p>
  <p>
     username:testuser@it.com
  </p>
  <p>
     password:test
  </p>
</div>

## Requires
* requires a minimum PHP version of 8.0.


## Built With

* [Laravel](https://laravel.com)
* [Tailwindcss](https://tailwindcss.com)
* [JQuery](https://jquery.com)

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/Hersarma/Drying-kiln-management.git
   ```
   
   ```sh
   cd Drying-kiln-management
   ```
2. Install and run NPM packages

   ```sh
   composer install
   ```
   ```sh
   npm install
   ```
   ```sh
   npm run dev
   ```
3. Create database

4. Create and edit .env file with database credentials

5. Create APP_KEY in .env file
   ```sh
   php artisan key:generate
   ```
6. Run migrations
   ```sh
   php artisan migrate
   ```
7. Run seeders
   ```sh
   php artisan db:seed
   ```
8. Run server locally
   ```sh
   php artisan serve
   ```
9. Visit in browser
   <a href="http://localhost:8000" target="_blank">localhost:8000</a>

10. Login with username->admin@admin.com, password->admin

11. Change your login credentials in app settings

### Email usage locally

0.Link public folder to storage folder
 ```sh
 php artisan storage:link
 ```

1.Create an email account at your hosting provider

2. Edit email config in app settings

<div align="left">
  <img src="public/img/github_img/email_settings.png" alt="Logo" width="750" height="500">
</div>

3. Get mail locally
 Run artisan command
   ```sh
   php artisan mail:get
   ```
### Email usage shared hosting
4. Create cron job
/usr/local/bin/php /home/path/to/cron/script/artisan mail:get
