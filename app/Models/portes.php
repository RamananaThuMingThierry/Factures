<?php

namespace App\Models;

use App\Models\index_facture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portes extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'numero_porte'
    ];

    public $timestamps = false;

    public function index_factures(){
        return $this->belongsTo(index_facture::class);
    }
}
