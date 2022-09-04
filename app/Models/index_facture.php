<?php

namespace App\Models;

use App\Models\mois_facture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class index_facture extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'portes_id',
        'dernier_consommation',
        'nouvel_consommation',
        'mois_factures_id'
    ];

    public $timestamps = false;

    public function mois_factures(){
        return $this->belongsTo(mois_facture::class);
    }
}
