<?php
declare(strict_types=1);

/**
 * Ritorna un saluto personalizzato.
 */
function greet(string $name): string
{
    return "CIAO, {$name}!";
}

// Comando di esecuzione: php greet.php [nome]
// Esempio: php greet.php Mario
$name = $argv[1] ?? "Mondo";
echo greet($name) . PHP_EOL;