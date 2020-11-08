<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Product
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

    /**
     * Descrição do produto
     * @var string
     */
    public $description;

    /**
     * Valor do produto
     * @var double
     */
    public $value;

    /**
     * Categoria do produto
     * @var id
     */
    public $idcategories;


    public function register()
    {

        //Iserir produto no banco
        $obDatabase = new Database('product');
        $this->id = $obDatabase->insert([
            'name'    => $this->name,
            'description' => $this->description,
            'value'     => $this->value,
            'idcategories'     => $this->idcategories,
        ]);

        //Retornar sucesso
        return true;
    }

    public function update()
    {
        return (new Database('product'))->dbUpdate('id = ' . $this->id, [
            'name'    => $this->name,
            'description' => $this->description,
            'value'     => $this->value,
        ]);
    }
    public function deleteProd()
    {
        return (new Database('product'))->delete('id = ' . $this->id);
    }




    public static function getProducts($where = null, $order = null, $limit = null)
    {
        return (new Database('product'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    public static function getProduct($id)
    {
        return (new Database('product'))->select('id = ' . $id)
            ->fetchObject(self::class);
    }
}
