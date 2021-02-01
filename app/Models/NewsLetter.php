<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    protected $guarded = [];
    /**
     * @var string
     */
    protected $table = 'newsletter';

    /**
     * @var array
     */
    protected $fillable = [
                            'name',
                            'email',
                            'status',
                        ];

    public $timestamps = true;
}
