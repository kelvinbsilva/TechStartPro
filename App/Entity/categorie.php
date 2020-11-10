<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Categorie
{

    /**
     * Identificador único 
     * @var integer
     */
    public $id;

    /**
     * Nome do produto
     * @var string
     */
    public $name;


    public function register()
    {
        
        //Iserir produto no banco
        $obDatabase = new Database('categories');
        $this->id = $obDatabase->insert([
            'namec'    => $this->namec,
        ]);

        //Retornar sucesso
        return true;
    }
    

    public function deleteProd()
    {
        return (new Database('categories'))->delete('id = ' . $this->id);
    }

    public static function getCategories($where = null, $order = null, $limit = null)
    {
        return (new Database('categories'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}