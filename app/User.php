<?php

namespace App;

use App\Model\Generique\Entreprise;
use App\Model\Particulier\Particulier;
use App\Model\Particulier\ParticulierInteresse;
use App\Model\Professionnel\ProfessionnelInteresse;


use App\ParticulierAgenda;
use App\Model\Professionnel\Professionnel;
use App\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'email', 'password', 'ville', 'pays', 'telephone', 'confirmation_token', 'telephone_2', 'account_type'
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

    public function role () {
        return $this->belongsTo(Role::class);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function entreprises () {
        return $this->hasMany(Entreprise::class);
    }

    public function professionnel () {
        return $this->hasMany(Professionnel::class);
    }

    public function particulier () {
        return $this->hasMany(Particulier::class);
    }

    public function favorite_particulier () {
        return $this->belongsToMany(Particulier::class, 'particulier_interesses', 'user_id', 'particulier_id')->withTimestamps();
    }

    public function interesse_particulier () {
        return $this->hasMany(ParticulierInteresse::class); 
    }


    public function interesse_professionnel () {
        return $this->hasMany(ProfessionnelInteresse::class);
    }

    public function agenda_particulier () {
        return $this->belongsToMany(Particulier::class, 'particulier_agendas', 'user_id', 'particulier_id')->withTimestamps()->withPivot('start', 'end');
    }


    public function agenda_professionnel () {
        return $this->belongsToMany(Professionnel::class, 'professionnel_agendas', 'user_id', 'professionnel_id')->withTimestamps()->withPivot('start', 'end');
    }


    public function favorite_professionnel () {
        return $this->belongsToMany(Professionnel::class, 'professionnel_interesses', 'user_id', 'professionnel_id')->withTimestamps();
    }
}