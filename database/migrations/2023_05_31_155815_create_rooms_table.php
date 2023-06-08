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
            $table->foreignId('hotel_id')->constrained();
            $table->string('room', 100);
            $table->float('cost');
            $table->integer('sort_order');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('rooms')) {
            Spatie\DbDumper\Databases\Sqlite::create()
                -> setDbName('database/database.sqlite')
                -> includeTables('rooms')
                -> dumpToFile('database/migration_dumps/' . now() . '_rooms_table.sql');
        }

        Schema::dropIfExists('rooms');
    }
};
