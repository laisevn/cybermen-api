<?php

namespace Data\UseCase;

use Domain\UseCase\MakeTransaction;
use Infra\Db\MySQL\TransactionRepository\TransactionMysqlRepository;

class DBMakeTransaction implements MakeTransaction
{

  public function make(String $transactionData): String
  {
      $makeTransactionRepository = new TransactionMysqlRepository();
      $decodedData = json_decode($transactionData, true);
      $transaction = $makeTransactionRepository->make(json_encode($decodedData));
      
      return $transaction;
  }
}

