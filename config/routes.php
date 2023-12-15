<?php
//<pre><code>array('nom de la page','Nom du controller','nom de la methode',tableau d'arguments)), </code></pre>//
$routes = [
    ['home', 'default', 'index'],
    ['contact', 'contact', 'index'],
    ['about', 'about', 'index'],
    ['docphp', 'docphp', 'index'],
    ['articles', 'article', 'index'],
    ['users', 'user', 'index'],
    ['add', 'article', 'add'],
    ['article', 'article', 'show', ['id']],
    ['delete', 'article', 'delete', ['id']],
   

];










