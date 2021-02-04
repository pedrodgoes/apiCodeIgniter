<?php namespace App\Models;

use CodeIgniter\Model;

class NoticiasModel extends Model{
	protected $table = 'noticias';
	protected $primaryKey = 'id';
	protected $titulo = 'titulo';
	protected $descricao = 'descricao';
}

?>