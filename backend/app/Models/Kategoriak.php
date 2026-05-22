<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoriak extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriakFactory> */
    use HasFactory;
    protected $primaryKey ='id';
    protected $fillable =[
        'kategoria_nev',
    ];
    public function esemenyeks():BelongsTo{
        return $this->belongsTo(esemenyek::class, 'kategoria_id','id');
    }
}
