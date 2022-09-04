<?php

namespace App\Http\Controllers;

use App\Models\mois_facture;
use App\Models\index_facture;
use App\Models\portes;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Alert;

class IndexFactureController extends Controller
{

    public function index(){
        $mois = mois_facture::orderBy('id','desc')->get();
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
        return view('index.index',compact('index','mois','restant','som','consomme','consommer','tranche'));
    }

    public function ajouter(){
        $mois = mois_facture::all()->last();
        $moisall = mois_facture::all();
        $index = index_facture::all();
        $portes = portes::all();
        $consomme = $mois->nouvel_index - $mois->ancien_index;
        if($consomme > 130){
            $consomme_restant = $consomme -  130;
            if($consomme_restant > 170){
                $tranche = 764;
            }else{
                $tranche = 560;
            }
        }else{
            $tranche = 340;
        }
        return view('index.ajouter',compact('mois','moisall','index','portes','tranche'));
    }

    public function traitement(Request $request){     
            
            $laste_index = index_facture::Where(['mois_factures_id' => $request->moisID, 'portes_id' => $request->numero_porte])->get();
            $i = 0;
            if(Arr::exists($laste_index, $i)){
                $mois = mois_facture::all()->last();
                $moisall = mois_facture::all();
                $index = index_facture::all();
                $portes = portes::all();
                $consomme = $mois->nouvel_index - $mois->ancien_index;
                if($consomme > 130){
                    $consomme_restant = $consomme -  130;
                    if($consomme_restant > 170){
                        $tranche = 764;
                    }else{
                        $tranche = 560;
                    }
                }else{
                    $tranche = 340;
                }
        
                $laste_index = index_facture::Where(['mois_factures_id' => $request->moisID-1, 'portes_id' => $request->numero_porte])->get();
                $i = 0;
                while(Arr::exists($laste_index, $i) == false){
                    $i++;
                }
                $laste_index_consommer = $laste_index[$i]->nouvel_consommation;
                $num_porte = $request->numero_porte;
                $_mois = $request->moisID - 1;
                $now_mois = $request->moisID;
                Alert::warning("Existe déjà!");
                return view('index.ajouter',compact('mois','moisall','index','portes','tranche','laste_index_consommer','num_porte','now_mois','_mois'));
            }
            else{
                
                index_facture::create([
                    'portes_id' => $request->numero_porte,
                    'dernier_consommation' => $request->dernier_consommation,
                    'nouvel_consommation' => $request->nouvel_consommation,
                    'mois_factures_id' => $request->moisID,
                    'status' => 0
                ]);
                Alert::success("L'ajout a été bien efféctuée!!");
                $mois = mois_facture::all()->last();
                $moisall = mois_facture::all();
                $index = index_facture::all();
                $portes = portes::all();
                $consomme = $mois->nouvel_index - $mois->ancien_index;
                if($consomme > 130){
                    $consomme_restant = $consomme -  130;
                    if($consomme_restant > 170){
                        $tranche = 764;
                    }else{
                        $tranche = 560;
                    }
                }else{
                    $tranche = 340;
                }
                return view('index.ajouter',compact('mois','moisall','index','portes','tranche'));
        }
    }

    public function TrouvezDernierIndexConsommerAjouter(Request $request){
        $mois = mois_facture::all()->last();
        $moisall = mois_facture::all();
        $index = index_facture::all();
        $portes = portes::all();
        $consomme = $mois->nouvel_index - $mois->ancien_index;
        if($consomme > 130){
            $consomme_restant = $consomme -  130;
            if($consomme_restant > 170){
                $tranche = 764;
            }else{
                $tranche = 560;
            }
        }else{
            $tranche = 340;
        }
        // -------------------------------- TAF -----------------------------------//
        $laste_index = index_facture::Where(['mois_factures_id' => $request->moisID, 'portes_id' => $request->numero_porte])->get();
        $i = 0;
        while(Arr::exists($laste_index, $i) == false){
            $i++;
        }
        $laste_index_consommer = $laste_index[$i]->nouvel_consommation;
        $num_porte = $request->numero_porte;
        $_mois = $request->moisID;
        $now_mois = $request->moisID + 1;
        return view('index.ajouter',compact('mois','moisall','index','portes','tranche','laste_index_consommer','num_porte','now_mois','_mois'));
    }

    public function TrouvezDernierIndexConsommerModifier(Request $request){
       //    dd($request->all());
        $mois = mois_facture::all()->last();
        $moisall = mois_facture::all();
        $index = index_facture::all();
        $portes = portes::all();
        $consomme = $mois->nouvel_index - $mois->ancien_index;
        if($consomme > 130){
            $consomme_restant = $consomme -  130;
            if($consomme_restant > 170){
                $tranche = 764;
            }else{
                $tranche = 560;
            }
        }else{
            $tranche = 340;
        }

        $laste_index = index_facture::Where(['mois_factures_id' => $request->moisID, 'portes_id' => $request->numero_porte])->get();
        $i = 0;
        while(Arr::exists($laste_index, $i) == false){
            $i++;
        }
        $laste_index_consommer = $laste_index[$i]->dernier_consommation;
        $first_index_consommer = $laste_index[$i]->nouvel_consommation;
        $num_porte = $request->numero_porte;
        $_mois = $request->moisID;
        $now_mois = $request->moisID + 1;

        return view('index.edit',compact('mois','moisall','index','portes','tranche','first_index_consommer','laste_index_consommer','num_porte','now_mois','_mois'));
    }

    public function payer(index_facture $index){
        if($index->status == 0){
            $index->status = 1;
            $index->save();
        }else{
            $index->status = 0;
            $index->save();
        }


        return back();
    }

    public function modifier(index_facture $index){
        $num_porte = null;
        $_mois = null;
        $laste_index_consommer = null;
        $first_index_consommer = null;
        $mois = mois_facture::all()->last();
        $moisall = mois_facture::all();
        $portes = portes::all();
        $consomme = $mois->nouvel_index - $mois->ancien_index;
        if($consomme > 130){
            $consomme_restant = $consomme -  130;
            if($consomme_restant > 170){
                $tranche = 764;
            }else{
                $tranche = 560;
            }
        }else{
            $tranche = 340;
        }
        return view('index.edit',compact('num_porte','_mois','laste_index_consommer','first_index_consommer','mois','moisall','portes','index','tranche'));
    }

    public function chargement(Request $request, $index){
        $index_existe = index_facture::all()
                ->where('portes_id',$request->numero_porte)
                ->where('mois_factures_id',$request->moisID);
        $index_edit = index_facture::find($index);
        if(count($index_existe) == 0){
            $index_edit->update([
                'portes_id' => $request->numero_porte,
                'dernier_consommation' => $request->dernier_consommation,
                'nouvel_consommation' => $request->nouvel_consommation,
                'mois_factures_id' => $request->moisID,
                'status' => 0
            ]);  
            Alert::success("La modification a été bien effectuée!");
            return Redirect(route('index.index'));
        }else{
            $i = 0;
            while(Arr::exists($index_existe, $i) == false){
                $i++;
            }
            if($index_existe[$i]->id !== $index_edit->id){
                if($index_existe[$i]->portes_id !== $index_edit->portes_id){
                    Alert::warning("Ce numéro de porte existe déjà!");
                    return back();
                }else{
                    Alert::warning("Mois existe déjà!");
                    return back();
                }
                
            }elseif($index_existe[$i]->mois_factures_id !== $index_edit->mois_factures_id){
                Alert::warning("Ce numéro de porte existe déjà!");
                return back(); 
            }
        }
    }

    public function supprimer(index_facture $index){
        Alert::question('Voulez-vous supprimer ce produit ?')
        ->showConfirmButton('<a href="/index/'.$index->id.'/supprimer" class="text-white rounded-0 ml-1">OK</a>','#FF002B')->toHtml()
        ->showCancelButton('Annuler','#1262ff');
        return redirect(route('index.index'));
    }

    public function suppression(index_facture $index){
        $index->delete();
        Alert::success('La suppression a été bien effecutée ');
        return redirect(route('index.index'));
    }

}
