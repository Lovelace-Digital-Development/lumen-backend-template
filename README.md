# Lumen Backend Template

```
lumen-backend-template
├─ .dockerignore
├─ .editorconfig
├─ .gitignore
├─ .styleci.yml
├─ Dockerfile
├─ README.md
├─ app
│  ├─ Feature
│  │  ├─ Controllers
│  │  ├─ Database
│  │  │  ├─ Factory
│  │  │  ├─ Migration
│  │  │  └─ Seeder
│  │  ├─ Middleware
│  │  ├─ Model
│  │  └─ Routes
│  ├─ Console
│  │  ├─ ExampleCommand.php
│  │  └─ Kernel.php
│  ├─ Shared
│  │  ├─ Controller
│  │  │  ├─ Controller.php
│  │  │  └─ ExampleController.php
│  │  ├─ Database
│  │  │  └─ Seeders
│  │  │     └─ DatabaseSeeder.php
│  │  ├─ Event
│  │  │  ├─ Event.php
│  │  │  ├─ ExampleEvent.php
│  │  │  └─ ExampleEventListener.php
│  │  ├─ Exception
│  │  │  └─ ExceptionHandler.php
│  │  └─ Providers
│  │     ├─ AppServiceProvider.php
│  │     ├─ AuthServiceProvider.php
│  │     └─ EventServiceProvider.php
│  ├─ bootstrap.php
│  └─ index.router.php
├─ artisan
├─ composer.json
├─ composer.lock
├─ phpunit.xml
├─ public
│  ├─ .htaccess
│  └─ index.php
├─ storage
│  ├─ app
│  ├─ framework
│  │  ├─ cache
│  │  │  └─ data
│  │  └─ views
│  └─ logs
├─ tests
   ├─ ExampleTest.php
   └─ TestCase.php

```

## Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

### Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).


### License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
