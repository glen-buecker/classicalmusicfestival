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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('photo_path', 2048)->nullable();
            $table->integer('sort_order');
            $table->boolean('active')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('hotels')) {
            // The "users" table exists...
            Spatie\DbDumper\Databases\MySql::create()
                -> doNotUseColumnStatistics()
                -> setHost(env('DB_HOST'))
                -> setDbName(env('DB_DATABASE'))
                -> setUserName(env('DB_USERNAME'))
                -> setPassword(env('DB_PASSWORD'))
                -> includeTables('hotels')
                -> dumpToFile('database/migration_dumps/' . now() . '_hotels_table.sql');
        }
        Schema::dropIfExists('hotels');
    }
};
