## Installation

``` bash
# bisogna installare php sql e node js
sudo apt install php8 mysql nodejs
# cloniamo questo progetto
git clone https://github.com/giospada/elaboirato
# installiamo tutte le librerie
composer update
composer install
#installiamo tailwind e alpine
npm install 
npm run prod

#set up mysql server 
#riscriviamo .env
# e migraiamo i database
php artisan migrate
php artisan serve
```