<?php declare (strict_types = 1);

namespace Domain\UseCase;

interface AddAccountModel

{
  public function __contruct(): array;
}

interface AddAccount
{
  public function add(String $account): String;
}
