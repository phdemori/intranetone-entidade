<?php
namespace Agileti\IOEntidade;

use Dataview\IntranetOne\IOModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entidade extends IOModel
{
    use SoftDeletes;
    //public $incrementing = false; //necessário para a pk não virar int
    protected $primaryKey = 'id';

    protected $fillable = ['cpf_cnpj','tipo','razaosocial','nome_fantasia','condominio_id','insc_estadual', 'responsavel', 'rg', 'sexo', 'estado_civil', 'nacionalidade', 'profissao', 'dt_nascimento', 'telefone1', 'telefone2', 'celular1', 'celular2', 'email', 'cep', 'logradouro', 'numero', 'complemento', 'bairro', 'cidade_id', 'observacao']; //campos que podem ser editados

    protected $dates = ['deleted_at'];

    public function cidade()
    {
        return $this->belongsTo(Cidade);
    }

    public function condominio()
    {
        return $this->belongsTo(Condominio);
    }

    public static function boot()
    {
        parent::boot();
    }
}
