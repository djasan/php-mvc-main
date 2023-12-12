<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class AboutController extends Controller
{

    public function index()
    {
        $titreAbout= ' A propos ';
       // $message = 'Bienvenue sur le framework MVC';

        $this->render('app.about.about',[
           // 'message' => $message,
            'titreAbout'=>$titreAbout,
          
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
