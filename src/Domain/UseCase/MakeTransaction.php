<?php declare (strict_types = 1);

namespace Domain\UseCase;

interface MakeTransactionModel

{
    public function __contruct(): array;
}

interface MakeTransaction
{
  public function make(String $transaction): String;
}
