<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->string('nome', 100);
            $table->char('tag', 30)->nullable();
            $table->string('logo', 100)->nullable();
            $table->char('video', 50)->nullable();
            $table->string('tour_virtual', 150)->nullable();
            $table->char('incorporador', 50)->nullable();
            $table->string('projeto_arquitetonico', 50)->nullable();
            $table->char('obra_entrega', 10);
            $table->smallInteger('torres');
            $table->smallInteger('pavimento_terreo');
            $table->smallInteger('pavimento_tipo');
            $table->smallInteger('pavimento_cobertura');
            $table->smallInteger('unidade_pavimento');
            $table->smallInteger('total_unidade');
            $table->char('dormitorios', 10);
            $table->smallInteger('elevadores');
            $table->char('area_privativa', 15);
            $table->char('area_terreno', 15);
            $table->smallInteger('subsolo');
            $table->text('descricao');
            $table->char('cep', 15)->nullable();
            $table->string('endereco', 200);
            $table->string('lougradouro', 80);
            $table->char('numero', 10)->nullable();
            $table->string('bairro', 50);
            $table->string('cidade', 60);
            $table->string('estado', 50);
            $table->string('latitude', 50);
            $table->string('longitude', 50);
            $table->boolean('status')->nullable(); 
            $table->boolean('view_home')->nullable();
            $table->string('slug', 100);
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imoveis');
    }
}
