<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class ContactController extends Controller
{

    public function index()
    {
        $titreContact= ' Bienvenue sur la page contact ';
       // $message = 'Bienvenue sur le framework MVC';
$person =[
    'nom'=> 'Sanson',
    'prenom'=> 'Djamila',
    'âge'=> 52
];
        $this->render('app.contact.index',[
           // 'message' => $message,
            'titreContact'=>$titreContact,
            'person'=>$person
        ]);
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
