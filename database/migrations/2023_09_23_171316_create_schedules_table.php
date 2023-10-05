<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipment_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->boolean('command_sent')->default(false); // Par défaut, la commande n'est pas envoyée
            $table->timestamps();
            
            // Clé étrangère vers la table des équipements
            $table->foreign('equipment_id')->references('id')->on('equipments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}

