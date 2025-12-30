<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('contratos', function (Blueprint $table) {
            $table->string('estado_civil', 30)
                  ->nullable()
                  ->after('pdf_status');

            $table->string('clave_lector', 18)
                  ->nullable()
                  ->after('estado_civil');
        });
    }

    public function down()
    {
        Schema::table('contratos', function (Blueprint $table) {
            $table->dropColumn(['estado_civil', 'clave_lector']);
        });
    }
};
