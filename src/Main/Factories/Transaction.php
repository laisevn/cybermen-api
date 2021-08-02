<?php declare(strict_types=1);

namespace Main\Factories;

use Presentation\Controllers\PaymentController;
use Data\UseCase\DBMakeTransaction;

function makeTransactionController()
{
  $dbMakeTransaction = new DBMakeTransaction();
  return new PaymentController($dbMakeTransaction);
}
