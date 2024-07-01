<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('operarios', function (Blueprint $table) {
            $table->primary(['cliente', 'operario']);

            $table->float('cliente', 1);
            $table->float('operario', 1);
            $table->string('nombre_operario', 30);
            $table->string('apellido_1_operario', 40);
            $table->string('apellido_2_operario', 40);
            $table->integer('telefono_1');
            $table->string('email', 60);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operarios');
    }
};
