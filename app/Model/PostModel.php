<?php

namespace App\Model;
use App\Weblitzer\Model as ModelMvc;
use App\App;
use App\Model\UserModel;
use App\Weblitzer\Database;


class PostModel extends ModelMvc
{
    protected static $table = 'post';

    public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            'INSERT INTO ' . self::$table . ' (title, content) VALUES (?, ?)',
            [
                $post['titre'],
                $post['contenu'],
            ]
        );
    }
}
