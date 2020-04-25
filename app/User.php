<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // protected $appends = ['full_name']; //ben user tablomdaki first_name ile last_name kolonlarını birleştirerek
    // tek bir kolonda kullanmak istiyorum bu kolona da full_name adını verdim
    // $appends ile de User modeli üzerinden yapacağım sorgularda ek olarak full_name adındaki kolonunda dönmesini istedim
    // böyle tanımlamak yeterli değil bunu oluşturacak get metodunu tanımlamalıyım
    // getFullNameAttribute() bu yazım zorunludur
    public function getFullNameAttribute()
    {
        $ad_soyad = $this -> first_name . " " . $this->last_name;

        return response()->json(['Ad Soyad' => $ad_soyad]);
    }
    //böylece ayrı iki kolonu birleştirip tek bir kolonmuş gibi kullanabildim

}
