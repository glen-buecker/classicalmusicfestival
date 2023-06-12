<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name', 100); // defaults to user name; useful for multiple registrations under one family
            $table->string('address1', 100)->nullable();
            $table->string('address2', 100)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('postal_code', 25)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('passport_country', 15)->nullable();
            $table->string('primary_phone', 15)->nullable();
            $table->string('mobile_phone', 15)->nullable();
            $table->string('festival_year', 4)->nullable();
            $table->foreignId('part_id')->constrained();
            $table->foreignId('room_id')->constrained();
            $table->foreignId('group_id')->constrained();
            $table->string('roommate_request', 100)->nullable();
            $table->date('arrival_date')->nullable();
            $table->time('arrival_time')->nullable();
            $table->string('arrival_method', 100)->nullable();
            $table->string('arrival_shuttle', 100)->nullable();
            $table->mediumText('arrival_note')->nullable();
            $table->date('departure_date')->nullable();
            $table->time('departure_time')->nullable();
            $table->string('departure_method', 100)->nullable();
            $table->string('departure_shuttle', 100)->nullable();
            $table->mediumText('departure_note')->nullable();
            $table->longText('special_needs')->nullable();
            $table->longText('admin_note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });


        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
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

        Schema::dropIfExists('registrations');
    }
};
