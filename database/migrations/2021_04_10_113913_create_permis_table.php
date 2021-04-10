<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('institution_autorisée');
            $table->integer('num_identification_fiscale');
            $table->string('qualité_déclarant');
            $table->string('état_immobilier');
            $table->string('adresse');
            $table->integer('superficie_terrain_non_bati');
            $table->integer('valeur_commerciale');
            $table->integer('surface_couverte');
            $table->string('composition_immobilier_et_ses_dépendances');
            $table->string('teinture_utilisation');
            $table->string('activité_mentionnée');
            $table->string('services_dispo');
            $table->string('coordonnéeGéo');
            $table->dateTimeTz('date_suivie');
            $table->string('nom_responsable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permis');
    }
}
