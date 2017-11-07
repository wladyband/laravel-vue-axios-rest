<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
      "descricao", "logradouro_endereco", "bairro_endereco","preco", "qtd_quartos", "tipo", "finalidade"
    ];
    protected $table = "imoveis";
}
