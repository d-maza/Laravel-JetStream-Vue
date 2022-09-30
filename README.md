# PC3-2 Projecto Laravel - JetStream - Vue 3

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/avc17TY8QooosVbJXyCjk8eVpS366hsGJV-ff3pJQR5lPK2oVxIOL_iUSX1f9-yv6SUVDqM2QcTeur1vOn5P-_te1Kj2ZGeNEdD4kXt2d60ROjEMegXLthRc=w1200-h630-p-k-no-nu" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Basic Laravel - JetStream - Vue - Tailwind

----

### Language & Framework Used:

1. PHP-8
1. Laravel-9



### Architecture Used:
1. Laravel 9.x
1. Interface-Repository Pattern
1. Model Based Eloquent Query
1. PHP Unit Testing - Some basic unit testing added.

### Practices List:
##### Authentication Module
1. [x] PC1-1 Yoda Say - NodeJS - JavaScript
1. [x] PC2-1 Aplicación Express - NodeJS - Express - Ejs
1. [x] PC3-1 NodeJS CRUD con MonogoDB - NodeJS - Express - Ejs - Mongodb
1. [x] PC2-2 Formulario PHP & SQLite - 	PHP - SQLite - Bootstrap
1. [x] PC2-2 Routes Laravel- Laravel - JetStream - Blade - MySQ
1. [x] PC3-2 Crea un proyecto web - Laravel - JetStream - Vue - Tailwind	


### How to Run:
1. Clone Project -

```bash
git clone https://github.com/d-maza/Laravel-JetStream-Vue
```
1. Go to the project drectory by `cd Laravel-JetStream-Vue` & Run the
2. Create `.env` file & Copy `.env.example` file to `.env` file

3. Create your KEY 
```
php artisan key:generate 
```

4. Install composer packages 
 ```
 composer install
 ```
5. Install npm packages 
```
npm install
```


6. Create a database called - `pc_3`. in terminal: `mysql -u root`. and `create database pc_3`

```
php artisan migrate
php artisan db:seed
```


7. Remember to run the Vite server so you can compile the VUE files ❕❕
``` bash
nmp run dev
```
7. AND! run the server 
``` bash
php artisan serve 
```
8. Open Browser -
http://127.0.0.1:8000 & go 🚀🚀
And remember to have your apache server on 😋

9. You'll see a Web Panel and register to go to the Back End side


### Demo

![](https://raw.githubusercontent.com/d-maza/Laravel-JetStream-Vue/main/storage/app/public/img/demo1.png)


![](https://raw.githubusercontent.com/d-maza/Laravel-JetStream-Vue/main/storage/app/public/img/demo2.png)

![](https://raw.githubusercontent.com/d-maza/Laravel-JetStream-Vue/main/storage/app/public/img/demo3b.png)

![](https://raw.githubusercontent.com/d-maza/Laravel-JetStream-Vue/main/storage/app/public/img/demo4.png)




### Customize configuration
See [Configuration Reference](https://cli.vuejs.org/config/).


## Las solicitudes de extracción y los problemas son bienvenidos

Si encuentras algo que se pueda mejorar, envíe una solicitud de extracción. 

![:octocat:](https://github.githubassets.com/images/icons/emoji/octocat.png ":octocat:") [d-maza](https://github.com/d-maza)
