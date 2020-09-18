# Laravel 7.0+ Frontend preset for Axentix

A Laravel front-end scaffolding preset for [Axentix](https://useaxentix.com).  

## IMPORTANT

Default branch for Laravel 8.  
We maintained Laravel 7 compatibility on laravel-7.x branch.  
**Installation steps are same.**

## Usage

1. Fresh install Laravel >= 7.0 and `cd` to your app.
2. Install this preset via `composer require axentix/laravel-preset --dev`. Laravel will automatically discover this package. No need to register the service provider.

### a. For Presets without Authentication

1. Use `php artisan ui axentix` for the basic Axentix preset
2. `npm install && npm run dev`
3. `php artisan serve` (or equivalent) to run server and test preset.

### b. For Presets with Authentication

1. Use `php artisan ui axentix --auth` for the basic preset, auth route entry, and Axentix auth views in one go. (NOTE: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
4. `npm install && npm run dev`
5. Configure your favorite database (mysql, sqlite etc.)
6. `php artisan migrate` to create basic user tables.
7. `php artisan serve` (or equivalent) to run server and test preset.

### Config

Add a new i18n string in the `resources/lang/XX/pagination.php` file for each language that your app uses:
```php
'previous' => '&laquo; Previous',
'next' => 'Next &raquo;',
'goto_page' => 'Goto page #:page', // Add this line
```
This should help with accessibility
```html
<li>
    <a href="URL?page=2" class="..." 
       aria-label="Goto page #2"
    >
        2
    </a>
</li>
```
