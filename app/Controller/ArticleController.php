<?php

namespace App\Controller;

use App\Model\PostModel;
use App\Weblitzer\Controller;

/**
 *
 */
class ArticleController extends Controller
{

    public function index()
    {

        $articles = PostModel::all();
        $this->dd($articles);

        // $this->render('app.article.index',[
        //    // 'message' => $message,
        //     'titreBlog'=>$titreBlog,
        //     'article'=> $article
           
        // ]);
    }


}
