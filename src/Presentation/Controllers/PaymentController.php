<?php declare (strict_types = 1);

namespace Presentation\Controllers;

require __DIR__ . './../../../vendor/autoload.php';

use Domain\UseCase\MakeTransaction;
use Presentation\Erros\MissingParamError;
use Presentation\Protocols\Controller;
use function Presentation\Helpers\badRequest;
use function Presentation\Helpers\success;


class PaymentController implements Controller
{

  private $makeTransaction;

  public function __construct(MakeTransaction $makeTransaction) 
  {
    $this->makeTransaction = $makeTransaction;
  }

  public function handle($request): String
  {
    
    $request = json_decode($request, true);
    $requiredFields = array('value', 'payer', 'payee');

    foreach ($requiredFields as $field) {
        if (empty($request['body'][$field])) {
            return badRequest(new MissingParamError($field));
        }
    }

    var_dump($this->makeTransaction->make(json_encode($request)));
    $this->makeTransaction->make(json_encode($request));
    return success(json_encode($request));
  }
}

