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
            $table->id();
            $table->foreignId('area_id', 100)->constrained()->cascadeOnDelete();
            $table->string('part_name', 100); // Flute, Soprano, Instructor, etc.
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
            Spatie\DbDumper\Databases\Sqlite::create()
                -> setDbName('database/database.sqlite')
                -> includeTables('parts')
                -> dumpToFile('database/migration_dumps/' . now() . '_parts_table.sql');
        }

        Schema::dropIfExists('parts');
    }
};
