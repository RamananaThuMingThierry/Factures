<?php

namespace App\Http\Controllers;

use App\Models\mois_facture;
use App\Models\index_facture;

use Illuminate\Http\Request;

class factureController extends Controller
{
    public function index(){
        $mois = mois_facture::all();
        $index = index_facture::all();
        $consomme = array();
        $consommer = [];
        $tranche = [];
        $i = 0;
        $som = [];
        $restant = [];
        foreach($mois as $mois_facture){
            $consomme[$i] = $mois_facture->nouvel_index - $mois_facture->ancien_index;
            if($consomme[$i] > 130){
                $consommation_restant = $consomme[$i] - 130;
                if($consommation_restant > 170){
                    $tranche[$i] = 764;
                }else{
                    $tranche[$i] = 560;
                }
            }else{
                $tranche[$i] = 340;
            }
            $s = 0;
            $effectif = 0;

            foreach($index as $t){
                if($t->mois_factures_id == $mois_facture->id){
                    $effectif += 1;
                    $s += ($t->nouvel_consommation - $t->dernier_consommation);
                }
            }

            $consomme[$i] -= $s;
            $restant[$i] = $consomme[$i];
            $consomme[$i] *= $tranche[$i];
            $consomme[$i] += 8000;
            $consommer[$i] = $consomme[$i];

            if($effectif != 0){
                $consomme[$i] /= $effectif;
            }

            $som[$i] = $s;
            $i++;
        }

        return view('factures.index',compact('mois','index','restant','som','consomme','consommer','tranche'));
    }
}
