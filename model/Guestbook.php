<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Guestbook
 * @package App\Model
 */
class Guestbook extends Model
{
    protected $fillable = [
        'id', 'key', 'name', 'email', 'phone', 'message'
    ];

    protected $hidden = [];

    public function __construct($attributes = [])
    {
        if (!is_array($attributes)) {
            $attributes = (array) $attributes;
        }
        parent::__construct($attributes);
    }
}
