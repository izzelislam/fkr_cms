<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterViewsArticlesTable extends Migration
{
    
    public function up()
    {
       Schema::table('articles', function (Blueprint $table) {
           $table->integer('views')->default(0);
       });
    }

    public function down()
    {
        
    }
}
