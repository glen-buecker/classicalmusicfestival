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
        Schema::create('parts', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('area_id')->constrained();
            $table->string('name', 100); // Flute, Soprano, Instructor, etc.
            $table->integer('sort_order_within_area')->nullable();
            $table->boolean('active')->default(1);
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('parts')) {
            // The "users" table exists...
            Spatie\DbDumper\Databases\MySql::create()
                -> doNotUseColumnStatistics()
                -> setHost(env('DB_HOST'))
                -> setDbName(env('DB_DATABASE'))
                -> setUserName(env('DB_USERNAME'))
                -> setPassword(env('DB_PASSWORD'))
                -> includeTables('parts')
                -> dumpToFile('database/migration_dumps/' . now() . '_parts_table.sql');
        }

        Schema::dropIfExists('parts');
    }
};
