<?php

namespace App\Models;

use App\Models\index_facture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mois_facture extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'mois',
        'ancien_index',
        'nouvel_index',
        'date_index'
    ];

    public $timestamps = false;

    public function index_factures(){
        return $this->hasMany(index_facture::class);
    }
}
