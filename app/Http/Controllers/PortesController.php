<?php

namespace App\Http\Controllers;

use App\Models\portes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Arr;
use Alert;

class PortesController extends Controller
{
    public function index(){
        $portes = portes::all();
        return view('portes.index',compact('portes'));
    }

    public function ajouter(){
        return view('portes.ajouter');
    }


    public function traitement(Request $request){
        $portes_all = portes::all()->find($request->numero_porte);

        if($portes_all == null){
           portes::create([
                'numero_porte' => $request->numero_porte
            ]);

            Alert::success("L'ajout a été bien effetcué!");
            return Redirect(route('portes.index'));
        }else{
            Alert::warning("Ce numéro de porte existe déjà!");
            return view('portes.ajouter');
        }
    }

    public function modifier(portes $porte){
        return view('portes.modifier',compact('porte'));
    }

    public function chargement(Request $request, $porte){
        $porte_edit = portes::find($porte);
        $porte_existe = portes::all()->where('numero_porte', $request->numero_porte);
        if(count($porte_existe) === 0){
            $porte_edit->update([
                'numero_porte' => $request->numero_porte
            ]);
            Alert::success("La modification a été bien effectuée!");
            return Redirect(route('portes.index'));
        }else{
            $i = 0;
            while(Arr::exists($porte_existe, $i) == false){
                $i++;
            }
            if($porte_existe[$i]->id !== $porte_edit->id){
                Alert::warning("Ce numéro de porte existe déjà!");
                return back();
            }else{
                Alert::info("Aucune mise à jour!");
                return Redirect(route('portes.index'));
            }
        }
    }

    public function supprimer(portes $porte){
        Alert::question('Voulez-vous supprimer ce produit ?')
        ->showConfirmButton('<a href="/porte/'.$porte->id.'/supprimer" class="text-white rounded-0 ml-1">OK</a>','#FF002B')->toHtml()
        ->showCancelButton('Annuler','#1262ff');
        return redirect(route('portes.index'));
    }

    public function suppression(portes $porte){
        $porte->delete();
        Alert::success('La suppression a été bien effecutée ');
        return redirect(route('portes.index'));
    }
}
