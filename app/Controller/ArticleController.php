<?php

namespace App\Controller;

use App\Model\PostModel;
use App\Model\UserModel;
use App\Service\Form;
use App\Weblitzer\Controller;
use App\Service\Validation;

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

    public function add()
    {
        //$this->dd('add');
        $errors = [];

        if (!empty($_POST['submitted'])) {
          // $this->dd($_POST);
            $postArticle=$this->cleanXss($_POST);
          // $this->dd($postArticle);

           $validerArticle= new Validation;


           $errors['titre'] =$validerArticle->textValid($postArticle['titre'],'titre',5,100);
           //$this->dbug($validerArticle);

        }
        
        $formAdd = new Form($errors);
        
        $this->render('app.article.addarticle', [
            'formAdd' => $formAdd,
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

    /* public function delete($id)
    {
        //PostModel::delete($id);
        $this->redirect('articles');
    }

    public function supprimerArticle($id)
    { var_dump("Début de supprimerArticle");
        if ($this->isArticleExist($id)) {
          //  PostModel::delete($id);
          //  $this->redirect('articles');
        } else {
            $this->afficherPage404();
        }
        var_dump("Fin de supprimerArticle"); 
       
    }

    // Retirez l'une des déclarations de isArticleExist
    public function isArticleExist($id)
    {
        // Logique pour vérifier si l'article avec l'ID donné existe
        // Retourne true si l'article existe, false sinon
        // remplacer cette logique par votre propre vérification, par exemple, en interagissant avec une base de données
        $article = PostModel::findById($id);
        $this->dd($article);
        return !empty($article); // On suppose que si $article n'est pas vide, l'article existe
    }

    public function afficherPage404()
    {
       /* header("HTTP/1.0 404 Not Found");
        include('view.app.default.404');
        exit;*/

    public function delete($id)
    {
        $articleDelete = $this->isArticleExist($id);
        PostModel::delete($id);
        $this->redirect('articles');
    }

    public function isArticleExist($id)
    {
        $article = PostModel::findById($id);

        // if (empty($article)):
        //     $this->Abort404();
        // endif;

        // return $article;

        return (empty($article)) ? $this->Abort404() : $article;
    }
}
