# Greet PHP Project

## Descrizione
Questo progetto contiene uno script PHP che stampa un messaggio di saluto personalizzato.

## Funzionamento
Il file `greet.php` contiene:
- Una funzione `greet(string $name)` che accetta un nome come parametro e ritorna un saluto personalizzato
- Lettura di un parametro opzionale da riga di comando tramite `$argv[1]`
- Se non viene fornito alcun parametro, utilizza "Mondo" come valore predefinito
- Strict types attivo per una maggiore sicurezza del codice

## Utilizzo
Per eseguire lo script, utilizzare i seguenti comandi da terminale:
```bash
# Saluto predefinito
php greet.php

# Saluto personalizzato
php greet.php NomeTuo
```

## Esempi di Output
```bash
php greet.php
# Output: Ciao, Mondo!

php greet.php Mario
# Output: Ciao, Mario!
```

## Requisiti
- PHP 7.0 o superiore (consigliato PHP 7.1+ per strict_types)