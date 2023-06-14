# Installation
1. laravel new classical-music-festival --jet
    1. inertia
    2. pest
    3. dark mode
2. Updated database settings in .env
    1. set engine to innodb
3. composer require spatie/db-dumper
    1. create directory *database/migration_dumps*
    2. code for dump() method
    ```
      if (Schema::hasTable('users')) {
            // The "users" table exists...
            Spatie\DbDumper\Databases\MySql::create()
                -> doNotUseColumnStatistics()
                -> setHost(env('DB_HOST'))
                -> setDbName(env('DB_DATABASE'))
                -> setUserName(env('DB_USERNAME'))
                -> setPassword(env('DB_PASSWORD'))
                -> includeTables('users')
                -> dumpToFile('database/migration_dumps/' . now() . '_users_table.sql');
        }
      ```
4. npm install dayjs
5. composer require orangehill/iseed
6. npm install @vueform/multiselect
7. 
8. npm install nprogress
## Laravel Migration Generator
https://github.com/bennett-treptow/laravel-migration-generator
1. composer require --dev bennett-treptow/laravel-migration-generator
2. php artisan vendor:publish --provider="LaravelMigrationGenerator\LaravelMigrationGeneratorProvider"
## Opscode log-viewer
1. composer require opcodesio/log-viewer (https://log-viewer.opcodes.io/)
2. php artisan log-viewer:publish
3. php artisan migrate
## Telescope
1. composer require laravel/telescope
2. php artisan telescope:install
3. php artisan migrate
## Statamic
1. php artisan config:clear
2. Add the statamic:install command to post-autoload-dump in composer.json.
3. composer require statamic/cms --with-dependencies
4. composer require statamic/eloquent-driver (https://github.com/statamic/eloquent-driver)
5. php artisan vendor:publish --tag="statamic-eloquent-config"
6. In the config/statamic/eloquent-driver.php file, change model to \Statamic\Eloquent\Entries\UuidEntryModel::class.
7. php artisan vendor:publish --provider="Statamic\Eloquent\ServiceProvider" --tag=migrations
8. php artisan vendor:publish --tag="statamic-eloquent-entries-table-with-string-ids"
9. php artisan migrate
## GraphQL
1. composer require nuwave/lighthouse (https://lighthouse-php.com/6/getting-started/installation.html)
2. php artisan vendor:publish --tag=lighthouse-schema
---
# App Design
* Session Storage
* Form Validation
* Logging
    * Daily, error, deprecations, syslog
* Error Handling
    * Notification to me
* Collections
    * Active/in-active registrations per account
    * Groups
    * Instrument/voice
    * Accommodations
* Events & Listeners
    * New account email
    * Delete account email
    * Registration created, updated, deleted email
    * Generate report queues based on area, instrument/voice, accommodations, airline, arrival date/time, departure date/time
* File Storage
    * Reports
* Benchmarking
    * Reports runtime
* Mail
    * User
    * Admin
* Notifications
    * aws-sns to send app errors to me
    * Syslog emergency, alert, critical log messages
* Queue
    * Database driver
* Task Scheduling
    * Report generation at night stored in File Storage
