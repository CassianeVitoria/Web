# Web
curl -s "https://laravel.build/Web?with=mysql" | bash

cd Web 
./vendor/bin/sail up

./vendor/bin/sail artisan migrate
