<?php

namespace App\Controller;

use App\Model\PostModel;
use App\Model\UserModel;
use App\Weblitzer\Controller;

/**
 *
 */
class ArticleController extends Controller
{

    public function index()
    {

        $article = PostModel::all();
        $user = new UserModel;

   

        $this->render('app.article.index', [
         
            'article' => $article,
            'user' => $user,
        
        ]);
    }
    public function show($id)
    {

        $article = PostModel::findById($id);
        $user = new UserModel;

        $this->render('app.article.show', [
            'article' => $article,
            'user' => $user
        ]);
    }
}
