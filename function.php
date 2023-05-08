<?php
function generatePassword($passwordLength)
{
    $password = '';
    $result = '';
    $alphabet = "abcdefghijklmnsopqrstuvwxyz";
    $numbers = "0123456789";
    $symbols = "!?&%$<>{}[]()^+-*/='_#@";

    $fullCharacters = $alphabet . strtoupper($alphabet) . $numbers . $symbols;

    if (empty($passwordLength)) {
        $result = 'Nessun parametro valido inserito';
    } else if ($passwordLength < 8 || $passwordLength > 32) {
        $result = 'Errore! La lunghezza della password deve essere compresa tra gli 8 e i 32 caratteri';
    } else {
        while (strlen($password) < $passwordLength) {
            $index = rand(0, strlen($fullCharacters));
            $char = $fullCharacters[$index];

            if (!str_contains($password, $char)) {
                $password .= $char;
            }
        }
        $result = $password;
    }
    return $result;
}
