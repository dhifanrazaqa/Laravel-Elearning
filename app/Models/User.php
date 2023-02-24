<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'angkatan',
        'fakultas',
        'jurusan',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'no_induk',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $primaryKey = 'no_induk';

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $increment = User::select('id')->orderBy('id','desc')->first();
            if($increment!= null) {
                $increment = $increment['id'];
            }

            $model->no_induk = substr($model->angkatan, 2) . 10511 . str_pad($increment + 1,3,"0", STR_PAD_LEFT);
        });
    }
}