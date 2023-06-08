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

        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->mediumText('note')->nullable();
            $table->integer('sort_order');
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
        if (Schema::hasTable('groups')) {
            Spatie\DbDumper\Databases\Sqlite::create()
                -> setDbName('database/database.sqlite')
                -> includeTables('groups')
                -> dumpToFile('database/migration_dumps/' . now() . '_groups_table.sql');
        }

        Schema::dropIfExists('groups');
    }
};
