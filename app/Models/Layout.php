<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stevebauman\Purify\Casts\PurifyHtmlOnGet;

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
