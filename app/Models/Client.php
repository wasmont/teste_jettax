<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Client
 * @package App\Models
 */
class Client extends BaseModel
{
    use HasFactory;

    protected $casts = [
        'status' => 'integer'
    ];

    protected $fillable = [
        'name',
        'email',
        'document',
        'digitalCertificate',
        'digitalCertificatePassword',
        'status'
    ];
}
