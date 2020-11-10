<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class proCat
{

    /**
     * Identificador único 
     * @var integer
     */
    public $idcategories;

    /**
     * Nome do produto
     * @var string
     */
    public $idproduct;


    public function register()
    {

        //Iserir produto no banco
        $obDatabase = new Database('procat');
        $this->idc = $obDatabase->insert([
            'idc' => $this->idc,
            'idproduct'    => $this->idproduct,
            'idcategories'    => $this->idcategories,
        ]);

        //Retornar sucesso
        return true;
    }

    public function deleteProcat()
    {   
        return (new Database('procat'))->delete('idc = ' . $this->idc);
    }

    public static function getprocats()
    {
        return (new Database('procat'))->selectidCat()
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    public static function getprocat($id)
    {
        return (new Database('procat'))->select('idc = ' . $id)
            ->fetchObject(self::class);
    }
}