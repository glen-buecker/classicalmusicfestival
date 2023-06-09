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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained('hotels');
            $table->string('room', 100);
            $table->float('cost');
            $table->integer('sort_order');
            $table->timestamps();
            $table->softDeletes();

            //$table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('rooms')) {
            // The "users" table exists...
            Spatie\DbDumper\Databases\MySql::create()
                -> doNotUseColumnStatistics()
                -> setHost(env('DB_HOST'))
                -> setDbName(env('DB_DATABASE'))
                -> setUserName(env('DB_USERNAME'))
                -> setPassword(env('DB_PASSWORD'))
                -> includeTables('rooms')
                -> dumpToFile('database/migration_dumps/' . now() . '_rooms_table.sql');
        }

        Schema::dropIfExists('rooms');
    }
};
