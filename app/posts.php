<?php



namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  

class Posts extends Model
{
    use SoftDeletes;
	protected $table='posts';
    protected $primaryKey = 'id';
    protected $fillable=['id','titulo','slug','parrafo1', 'parrafo2','parrafo3', 'parrafo4',  'image_path'];
    protected $dates=['deleted_at,created_at, updated_at'];
}