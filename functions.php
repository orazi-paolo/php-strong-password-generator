<?php
function random_password($length, $uppercase = false, $lowercase = false, $number = false, $symbol = false)
{
    // dichiaro i caratteri che possono essere utilizzati
    $min_alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase_alphabet = strtoupper($min_alphabet);
    $numbers = '0123456789';
    $symbols = '!$%&/()=?*+^';

    $all_caracters = '';

    // se uppercase è falso li aggiugo alla stringa
    if (!$uppercase) {
        $all_caracters .= $uppercase_alphabet;
    }
    // se lowercase è falso li aggiugo alla stringa
    if (!$lowercase) {
        $all_caracters .= $min_alphabet;
    }
    // se number è falso li aggiugo alla stringa
    if (!$number) {
        $all_caracters .= $numbers;
    }
    // se symbol è falso li aggiugo alla stringa
    if (!$symbol) {
        $all_caracters .= $symbols;
    }

    // dichiaro la password
    $password = '';

    // ciclo per la lunghezza della password su tutti i caratteri disponibili
    for ($i = 0; $i < $length; $i++) {
        $password .= $all_caracters[random_int(0, strlen($all_caracters) - 1)];
    }
    return $password;
}