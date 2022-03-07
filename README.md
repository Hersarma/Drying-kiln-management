<div id="top"></div>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/github_username/repo_name">
    <img src="public/img/europalete-logo-black_teal.png" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">Dry Kiln web application</h3>

  <p align="center">
    Web app for dry kiln management.
    <br />
    <br />
    <a href="https://hersarma.in.rs" target="_blank">View Demo</a>
    <br />
    <br />
  </p>
</div>

## Built With

* [Laravel](https://laravel.com)
* [Tailwindcss](https://tailwindcss.com)
* [JQuery](https://jquery.com)

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/Hersarma/Drying-kiln-management.git
   ```
3. Install and run NPM packages
   ```sh
   npm install && nmp run
   ```
4. Run migrations

5. Run seeders
   ```sh
   php artisan db:seed
   ```
6. Change your change credentials in settings

### Email usage locally
1. Get mail locally
 Run artisan command
   ```sh
   php artisan mail:get
   ```
### Email usage shared hosting
2. Create cron job
/usr/local/bin/php /home/path/to/cron/script/artisan mail:get
