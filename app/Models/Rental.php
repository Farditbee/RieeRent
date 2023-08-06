<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Facades\Storage;

class Rental extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'rentals';

    protected $primaryKey = 'rid';

    protected $guarded = [
        'rid',
    ];

    public function katalog(): BelongsTo
    {
        return $this->belongsTo(Katalog::class, 'id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    protected $fillable = [
        'rid',
        'id',
        'kode',
        'nama',
        'model',
        'ukuran',
        'harga',
        'jaminan',
        'tgl_pesan',
        'lama',
        'metode',
        'status',
        'nohp',
        'alamat',
        'ig',
    ];
}
