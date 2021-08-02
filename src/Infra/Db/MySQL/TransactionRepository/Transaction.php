<?php 

namespace Infra\Db\MySQL\TransactionRepository;

use Data\Protocols\MakeTransactionRepository;
use Infra\DB\MySQL\Utils\MysqlConnection;

class TransactionMysqlRepository implements MakeTransactionRepository
{
  public function make(String $transactionData) : String
  {
    $databaseConnection = new MysqlConnection();
    $data = $databaseConnection->insert('transactions', $transactionData);

    return $data;
  } 
}