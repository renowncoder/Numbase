<?php
namespace Thunder\Numbase\Symbols;

/**
 * @author Tomasz Kowalczyk <tomasz@kowalczyk.cc>
 */
final class ArraySymbols extends AbstractSymbols
{
    public function __construct(array $array)
    {
        $this->symbols = $array;
        $this->reverseSymbols = array_flip($this->symbols);
    }
}
