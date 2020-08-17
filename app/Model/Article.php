<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['user_id','category_id','title','content','image_file','slug'];

    public function Category()
    {
    	return $this->BelongsTo('App\Model\Category');
    }

    public function User()
    {
    	return $this->BelongsTo('App\Model\User');
    }
}
