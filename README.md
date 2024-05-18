# Web
curl -s "https://laravel.build/Web?with=mysql" | bash

cd Web 
./vendor/bin/sail up

./vendor/bin/sail artisan migrate

composer require laravel/breeze --dev
 php artisan breeze:install

vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php
protected $proxies='*';


#Views (layouts de páginas) resources/views
   nome.blade.php

#Routes - rotas - fluxos da aplicação
 com/sem parâmetros ( enviar/ receber dados )

 Componentes do layout
 php artisan make:component Layout

 sail/shell
 php artisan migrate