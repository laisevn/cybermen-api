<?php

namespace Presentation\Protocols;

interface TransactionValidator
{
    public function isAuthorized(Int $type): Bool;
}
