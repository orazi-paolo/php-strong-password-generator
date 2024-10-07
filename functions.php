<?php
function random_password($length)
{
    // dichiaro i caratteri che possono essere utilizzati
    $min_alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase_alphabet = strtoupper($min_alphabet);
    $numbers = '0123456789';
    $symbols = '!$%&/()=?*+^';

    // unisco tutti i caratteri
    $all_caracters = $min_alphabet . $uppercase_alphabet . $numbers . $symbols;

    // dichiaro la password
    $password = '';

    // ciclo per la lunghezza della password su tutti i caratteri
    for ($i = 0; $i < $length; $i++) {
        $password .= $all_caracters[random_int(0, strlen($all_caracters) - 1)];
    }
    return $password;
}