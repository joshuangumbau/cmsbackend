# Church Management System

<p align="center">
<a href=""><img src="" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
<!-- <a href="https://cms.trueworthfabrics.com.ng">Project Link</a> -->
<details>
</details>

# About Church Management System
    Its a web application for churches that manages administrative activities in the church.
    it manages the church's attendances, collections, members, events, announcements.
    features also includes bulk sms, email messaging, analysis on attendance, collection, members etc

# Installation

## Clone project
```bash
git clone https://github.com/joshuangumbau/cmsbackend.git
```
## Install Composer Dependencies
```bash
composer install
```
## Create Environment File
```bash
cp .env.example .env
```
## Configure Environment File
/ .env
```
APP_NAME=CMS
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"
```
## Generate App Key
```bash
php artisan key:generate
```
## Create Database
...
## Migrate Database Tables
```bash
php artisan migrate
```

## Running Server
```bash
php artisan serve
```

## Previews
<!-- 
# cmsbackend
