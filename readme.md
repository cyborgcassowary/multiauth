# Multi Auth with Laravel

Testing Multi Authentication with Laravel and will hopefully come to a solution soon.

Migrations are set and seeds are ready... basically this means it can be easily deployed to any apache server environment, e.g., WAMP, MAMP, XAMPP, Vagrant. Vagrant is almost a favorite of mine. Anyway, deploy with your favorite CLI with following commands:

         php artisan migrate

         php artisan db:seed

Stay tuned for further updates on this documentation. I'm sure I will be running into a ton of errors with Multiauth library by Ollie Read.

**12/18/2014**

Took almost 24 hours. However, after so much pain and aggravation, I was able to login with a user in the users table with Multiauth package. My one qurrel with the php package is that the default Laravel filters are shut off and I can't logout.

Will need to report later on how to fix this.



## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
