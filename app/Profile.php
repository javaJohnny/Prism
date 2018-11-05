<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id', 'bio', 'avatar', 'birthday', 'phonenumber', 'location', 'education'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
