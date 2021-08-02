<?php

namespace Data\Protocols;

interface AddAccountRepository
{
  public function add(String $accountData): String;
}