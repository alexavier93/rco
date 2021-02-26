<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $table = 'imoveis';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'tag',
        'logo',
        'incorporador',
        'projeto_arquitetonico',
        'descricao',
        'obra_entrega',
        'torres',
        'pavimento_terreo',
        'pavimento_tipo',
        'pavimento_cobertura',
        'unidade_pavimento',
        'total_unidade',
        'dormitorios',
        'elevadores',
        'area_privativa',
        'area_terreno',
        'subsolo',
        'video',
        'tour_virtual',
        'endereco',
        'cep',
        'lougradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'latitude',
        'longitude',
        'slug',
        'status',
        'view_home',
        'categoria_id'
    ];

    public function categorias()
    {
        return $this->belongsTo(Category::class);
    }

    public function diferenciais()
    {
        return $this->belongsToMany(Diferencial::class, 'imoveis_diferenciais');
    }

    public function status()
    {
        return $this->belongsToMany(ImovelStatus::class, 'imoveis_status');
    }

    public function imagens()
    {
        return $this->hasMany(ImovelImage::class);
    }

    public function plantas()
    {
        return $this->hasMany(ImovelPlanta::class);
    }
}
