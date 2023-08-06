<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Acc extends Model
{
    use HasFactory, SoftDeletes;

/** @var string */
protected $table = 'accs';

/** @var string */
protected $primaryKey = 'id';

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'id',
        'gambar',
        'kode',
        'model',
        'nama',
        'harga',
        'stok',
        'keterangan',
    ];
}
