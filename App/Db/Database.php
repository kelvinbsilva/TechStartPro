<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database
{

  /**
   * Host de conexão com o banco de dados
   * @var string
   */
  const HOST = 'localhost';

  /**
   * Nome do banco de dados
   * @var string
   */
  const NAME = 'olist';

  /**
   * Usuário do banco
   * @var string
   */
  const USER = 'super';

  /**
   * Senha de acesso ao banco de dados
   * @var string
   */
  const PASS = 'pegu-it07';

  /**
   * Nome da tabela a ser manipulada
   * @var string
   */
  private $table;

  /**
   * Instancia de conexão com o banco de dados
   * @var PDO
   */
  private $connection;

  /**
   * Define a tabela e instancia e conexão
   * @param string $table
   */
  public function __construct($table = null)
  {
    $this->table = $table;
    $this->setConnection();
  }

  /**
   * Método responsável por criar uma conexão com o banco de dados
   */
  private function setConnection()
  {
    try {
      $this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die('ERROR: ' . $e->getMessage());
    }
  }
  public function execute($query, $params = [])
  {
    try {
      $statement = $this->connection->prepare($query);
      $statement->execute($params);
      return $statement;
    } catch (PDOException $e) {
      die('ERROR: ' . $e->getMessage());
    }
  }

  public function insert($values)
  {
    //DADOS DA QUERY
    $fields = array_keys($values);
    $binds  = array_pad([], count($fields), '?');

    //MONTA A QUERY
    $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';

    //EXECUTA O INSERT
    $this->execute($query, array_values($values));

  }


  public function select($where = null, $order = null, $limit = null, $fields = '*')
  {
    //DADOS DA QUERY
    $where = strlen($where) ? 'WHERE ' . $where : '';
    $order = strlen($order) ? 'ORDER BY ' . $order : '';
    $limit = strlen($limit) ? 'LIMIT ' . $limit : '';

    //MONTA A QUERY
    $query = 'SELECT ' . $fields . ' FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;

    //EXECUTA A QUERY
    return $this->execute($query);
  }

  /**
   * Método responsável por executar atualizações no banco de dados
   * @param  string $where
   * @param  array $values [ field => value ]
   * @return boolean
   */

  public function dbUpdate($where,$values){
    //Dados da query
    $fields = array_keys($values);

    //Monta a query
    $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;

    //Executa a query
    $this->execute($query,array_values($values));

    //Retorna sucesso
    return true;
  }
}
