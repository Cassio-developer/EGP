<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use OwenIt\Auditing\Contracts\Auditable;

class Admin extends Authenticatable implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $guard = 'admin';

    protected $fillable = [
        'email',
        'password',
        'admin_level',
        'cpf',
        'name',
        'approved'

    ];

    protected $hidden = [
        'password',
    ];
}
