<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
  protected $table = 'cate';  
        
    protected $fillable = [
        'name','status','number', 
    ];  

  

    public function posts()
     {
      return $this->hasMany('App\Models\Rooms');
     }
  
}
