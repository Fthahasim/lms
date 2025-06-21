## Installation

- git clone https://github.com/Fthahasim/lms.git
- cd lms
- composer update if composer already installed else composer install
- npm update if npm already installed else npm install

## Set up environment:
- cp .env.example .env
- php artisan key:generate   

## Setup Database and Seed Data
- php artisan migrate:fresh -- seed


## Run the Application 
npm run dev & php artisan serve 
 