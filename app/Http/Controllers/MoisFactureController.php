<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mois_facture;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Arr;
use Alert;
use Carbon\Carbon;

class MoisFactureController extends Controller
{  
    public function index(){
        $mois = mois_facture::all();
        return view('mois.index',compact('mois'));
    }

    public function ajouter(){
        $today = date('Y-m-d');
        $mois = mois_facture::all()->last();
        $last_mois = $mois->nouvel_index ?? 0;
        $new_mois = 0;
        return view('mois.ajouter',compact('new_mois','last_mois','mois','today'));
    }

    public function traitement(Request $request){
        $mois_existe = mois_facture::where('mois', $request->mois)->get();
        if(count($mois_existe) !== 0){
            Alert::warning("Ce mois a déjà une index!");
            return back();
        }else{
            if($request->nouvel_index <= $request->ancien_index){
                Alert::warning('La nouvel index est supérieur ou égale à l\'ancien index!');
                return back();
            }else{
                mois_facture::create([
                    'date_index' => $request->date_index,
                    'mois' => $request->mois,
                    'ancien_index' => $request->ancien_index,
                    'nouvel_index' => $request->nouvel_index
                ]);
                return Redirect(route('mois.index'));
            }
        }
    }

    public function modifier(mois_facture $mois){
        return view('mois.modifier',compact('mois'));
    }

    public function chargement(Request $request, $mois){
        $mois_edit = mois_facture::find($mois);
        $mois_exist = mois_facture::where('mois',$request->mois)->get();
        if(count($mois_exist) === 0){
            $mois_edit->update([
                'mois' => $request->mois,
                'ancien_index' => $request->ancien_index,
                'nouvel_index' => $request->nouvel_index
            ]);
            Alert::success("La modification a été bien effectuée!");
            return Redirect(route('mois.index'));
        }else{
            $i = 0;
            while(Arr::exists($mois_exist, $i) == false){
                $i++;
            }
            if($mois_exist[$i]->id !== $mois_edit->id){
                Alert::warning("Ce mois existe déjà!");
                return back();
            }else{
                Alert::info("Aucune mise à jour!");
                return Redirect(route('mois.index'));
            }
        }
    }

    public function supprimer(mois_facture $mois){
        Alert::question('Voulez-vous supprimer ce mois ?')
        ->showConfirmButton('<a href="/mois/'.$mois->id.'/supprimer" class="text-white rounded-0 ml-1">OK</a>','#FF002B')->toHtml()
        ->showCancelButton('Annuler','#1262ff');
        return redirect(route('mois.index'));
    }

    public function suppression(mois_facture $mois){
        $mois->delete();
        Alert::success('La suppression a été bien effecutée ');
        return redirect(route('mois.index'));
    }
}
