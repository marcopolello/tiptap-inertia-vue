<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'layouts';

    protected $table = self::TABLE_NAME;

    protected $guarded = [];

    protected $casts = [
        //'content' => PurifyHtmlOnGet::class,
    ];
}
