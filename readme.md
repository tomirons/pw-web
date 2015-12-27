## Perfect World Web

### Requirements
1. Composer & Git - [Complete steps 1 & 2 on this tutorial](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-14-04)
2. PHP 5.5.9 or higher

### Setup

First you need to rename `.env.example` to `.env`

Then set the permissions to 775 for the following directories/files:

1. storage/app/
2. storage/framework/
3. storage/logs/
4. bootstrap/cache/
5. .env

Once that is done you'll need to edit the .env file and change the database credentials.

**Note:** Make sure your inside the `pw-web` directory when you run the commands.

Run the following command to install all the required packages:
````
composer install
````

**Note:** If you have **ANY** of the following columns in the `users` table, **REMOVE** them!
- money
- role
- remember_token
- created_at
- updated_at

**Note:** If you have **ANY** of the following tables in your database, **REMOVE** them!
- migrations
- password_resets
- pweb_apps
- pweb_articles
- pweb_payments
- pweb_ranking_factions
- pweb_ranking_players
- pweb_ranking_territories
- pweb_services
- pweb_settings
- pweb_shop_items
- pweb_transfer
- pweb_vote_logs
- pweb_voucher_logs
- pweb_vouchers

The next step is to create all the database tables and default records, run the following command:
````
php artisan migrate --seed
````

Finally, run this last command to generate an application key:
````
php artisan key:generate
````

If you haven't received any errors then you should be good to go!
If you receive any errors please create an [issue](https://github.com/huludini/pw-web/issues).