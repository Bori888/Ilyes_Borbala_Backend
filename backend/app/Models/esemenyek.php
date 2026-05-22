<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class esemenyek extends Model
{
    /** @use HasFactory<\Database\Factories\EsemenyekFactory> */
    use HasFactory;
    protected $primaryKey ='id';
    protected $fillable =[
        'kategoria_id',
        'esemeny_nev',
        'leiras',
        'datum',
        'ar',
        'resztvevok',
        'kepUrl',
    ];
    public function esemenyeks():BelongsTo{
        return $this->belongsTo(esemenyek::class);
    }
}
