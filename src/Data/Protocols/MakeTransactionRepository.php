<?php

namespace Data\Protocols;

interface MakeTransactionRepository
{
  public function make(String $transactionData): String;
}