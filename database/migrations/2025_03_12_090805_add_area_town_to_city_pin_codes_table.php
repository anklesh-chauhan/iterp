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
        Schema::table('city_pin_codes', function (Blueprint $table) {
            $table->string('area_town')->nullable()->after('pin_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('city_pin_codes', function (Blueprint $table) {
            $table->dropColumn('area_town');
        });
    }
};
