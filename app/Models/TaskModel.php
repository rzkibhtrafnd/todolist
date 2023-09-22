<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    use HasFactory;
    protected $table ='list';
    public $timestamps = false;
    public static function getSingle($id){
        return self::find($id);
    }
    public static function getTask(){
        return self::select('list.*')
            ->orderBy('id','desc')
            ->paginate(50);
    }
}
