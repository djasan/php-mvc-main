<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class DockphpController extends Controller
{

    public function index()
    {
        $message = 'CBienvenue sur le framework MV';

        $this->render('app.dockphp.frontpage',array(
            'message' => $message,
        ));
    }

    /**
     *
     */
    public function Page404()
    {
        $this->redirect('https://www.php.net');
    }

}