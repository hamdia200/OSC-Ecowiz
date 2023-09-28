<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsommationTable extends Migration
{
    public function up(): void
    {
        Schema::create('consommations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipment_id');
            $table->decimal('value', 10, 2);
            $table->boolean('etat'); // Utilisez BOOLEAN ou TINYINT(1) pour stocker 0 ou 1
            $table->timestamps();

            //$table->foreign('equipment_id')->references('id')->on('equipments');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consommations');
    }
}
