<?php
namespace Thunder\Numbase\Symbols;

use Thunder\Numbase\SymbolsInterface;

/**
 * @author Tomasz Kowalczyk <tomasz@kowalczyk.cc>
 */
final class Base62Symbols extends AbstractSymbols implements SymbolsInterface
    {
    public function __construct()
        {
        $this->symbols = str_split(''
            .'0123456789'
            .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
            .'abcdefghijklmnopqrstuvwxyz'
            .'');
        $this->reverseSymbols = array_flip($this->symbols);
        }
    }