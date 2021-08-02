<?php

namespace Presentation\Helpers;

final class ExternalConnection
{
  public static function connect(string $url): string {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    
    return curl_exec($curl);
  }
}
