<?php

namespace Utils;

use Presentation\Helpers\ExternalConnection;
use Presentation\Protocols\TransactionValidator;

const VALIDATOR_SERVICE = 'https://run.mocky.io/v3/8fafdd68-a090-496f-8c9a-3442cf30dae6';

class TransactionValidatorAdapter implements TransactionValidator
{
  public function isAuthorized(Int $type): Bool
  {
    $validator = new ExternalConnection();
    $data = $validator->connect(VALIDATOR_SERVICE);

    if ($data["message"] == "Autorizado") {
      return true;
    } else {
      return false;
    }
  }
}


