<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('contratos', function (Blueprint $table) {
            $table->tinyInteger('status_contratos')
                  ->default(1)
                  ->comment('1 = No aceptado, 0 = Aceptado')
                  ->after('status_anexos');
        });
    }

    public function down()
    {
        Schema::table('contratos', function (Blueprint $table) {
            $table->dropColumn('status_contratos');
        });
    }
};
