<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntidadeTable extends Migration
{
    public function up()
    {
        Schema::create('entidades', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->char('cpf_cnpj', 14);
            $table->enum('tipo', ['CLI', 'FOR', 'FUN'])->default('CLI');
            $table->string('razaosocial')->nullable();
            $table->string('nome_fantasia');
            $table->char('insc_estadual', 50)->nullable();
            $table->string('responsavel')->nullable();
            $table->char('rg', 50)->nullable();
            $table->char('rg_orgao', 20)->nullable();
            $table->date('rg_emissao')->nullable();
            $table->enum('sexo', ['M', 'F', 'I'])->default('F');
            $table->enum('estado_civil', ['Casado', 'Separado', 'Divorciado', 'Solteiro', 'Viúvo'])->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('profissao')->nullable();
            $table->char('banco', 10)->nullable();
            $table->char('agencia', 10)->nullable();
            $table->char('conta', 20)->nullable();
            $table->date('dt_nascimento')->nullable();
            $table->char('telefone1', 15)->nullable();
            $table->char('telefone2', 15)->nullable();
            $table->char('celular1', 15)->nullable();
            $table->char('celular2', 15)->nullable();
            $table->char('cel_validate_code', 10)->nullable();
            $table->enum('cel_validate', ['Y', 'N'])->default('N');
            $table->string('email')->nullable();
            $table->dateTime('email_verified_at')->nullable();
            $table->char('cep', 9)->nullable();
            $table->string('logradouro')->nullable();
            $table->char('numero', 20)->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            $table->text('observacao')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entidades');
    }
}
