<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $books =[
        [
            "id"=>1,
            "titolo"=>"COME TRATTARE GLI ALTRI E FARSELI AMICI",
            "autore"=>"Dale Carnegie",
            "prezzo"=>"€ 15",
            "editore"=>"Bompiani",
            "genere"=>"auto-aiuto",
            "descrizione"=>"Una nuova edizione di un grande classico del self help."
        ],
        [
            "id"=>2,
            "titolo"=>"LA SCIENZA DELLE VERDUE",
            "autore"=>"Dario Bressanini",
            "prezzo"=>"€ 22",
            "editore"=>"Gribaudo",
            "genere"=>"ricettario",
            "descrizione"=>"Autore di best seller, docente di chimica e ricercatore di professione: dopo La scienza della pasticceria e La scienza della Carne, Dario Bressanini svela i principi chimici e fisici alla base delle verdure più utilizzate in cucina.",
        ],
        [
            "id"=>3,
            "titolo"=>"FU SERA E FU MATTINA",
            "autore"=>"Ken Follett",
            "prezzo"=>"€ 16",
            "editore"=>"Mondadori",
            "genere"=>"romanzo",
            "descrizione"=>"Fu sera e fu mattina di Ken Follett è un prequel della saga di Kingsbridge, ambientato alla fine del X secolo, che narra l'inizio degli eventi narrati ne I Pilastri della Terra, seguendo le vite intrecciate di quattro personaggi ponendo le basi per la nascita della città di Kingsbridge. ",
        ],
    ];

    public function homepage(){
        return view('welcome');
    }

    public function libri(){
        return view('libri', ["books"=>$this->books]);
    }

    public function dettaglio($id){
        foreach($this->books as $book){
            if($book["id"]==$id){
                return view('dettaglio-libri', ["book"=>$book]);
            }
        }
        
    }
}
