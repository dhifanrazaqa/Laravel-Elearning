<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function answer() {
        return $this->hasMany(Answer::class);
    }

    // public static function boot() {
    //     parent::boot();
    //     static::creating(function ($model) {
    //         $increment = Question::select('id')->orderBy('id','desc')->first();
    //         if($increment!= null) {
    //             $increment = $increment['id'];
    //         }

    //         $model->no_induk = substr($model->angkatan, 2) . 10511 . str_pad($increment + 1,3,"0", STR_PAD_LEFT);
    //     });
    // }
}
