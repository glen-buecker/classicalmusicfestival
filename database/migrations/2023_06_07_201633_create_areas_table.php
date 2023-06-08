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
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('area_name');
            $table->integer('sort_order');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('areas')) {
            Spatie\DbDumper\Databases\Sqlite::create()
                -> setDbName('database/database.sqlite')
                -> includeTables('areas')
                -> dumpToFile('database/migration_dumps/' . now() . '_areas_table.sql');
        }
        Schema::dropIfExists('areas');
    }
};
