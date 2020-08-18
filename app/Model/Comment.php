<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['article_id','name','body'];

    public function Article()
    {
    	return $this->BelogsTo('App\Model\Article');
    }
}
