<?php

class NumbersWithFizzBuzz
{
    /**
     * Vars
     */
    private $_iFrom = 0;
    private $_iTo = 100;
    private $_iDevider1 = 3;
    private $_iDevider2 = 5;
    private $_sFizz = 'Fizz';
    private $_sBuzz = 'Buzz';
    private $_sEOL = PHP_EOL;

    /**
     * Constructor
     */
    function __construct($aSettings = []) {
        if (isset($aSettings['from'])) {
            $this->_iFrom = (int) $aSettings['from'];
        }

        if (isset($aSettings['to'])) {
            $this->_iTo = (int) $aSettings['to'];
        }

        if (isset($aSettings['devider1'])) {
            $this->_iDevider1 = (int) $aSettings['devider1'];
        }

        if (isset($aSettings['devider2'])) {
            $this->_iDevider2 = (int) $aSettings['devider2'];
        }

        if (isset($aSettings['hello'])) {
            $this->_sFizz = $aSettings['hello'];
        }

        if (isset($aSettings['world'])) {
            $this->_sBuzz = $aSettings['world'];
        }
    }

    /**
     * Print Numbers with Word
     */
    private function _displayRangOfNumbers(int $num_count) : string
    {
        $aResult = [];

        for ($i = $this->_iFrom; $i <= $num_count; $i ++) {
            switch ($i) {
                case (
                    ($i % $this->_iDevider1 == 0)
                    && ($i % $this->_iDevider2 == 0)
                ):
                    $aResult[] = $this->_getFizz() .$this->_getBuzz();
                    break;

                case ($i % $this->_iDevider1 == 0):
                    $aResult[] = $this->_getFizz();
                    break;

                case ($i % $this->_iDevider2 == 0):
                    $aResult[] = $this->_getBuzz();
                    break;
                   
                default:
                    $aResult[] = $i;
            }
        }

        return implode($this->_sEOL, $aResult);
    }

    /*
     * return sting
     */
    private function _getFizz()
    {
        return $this->_sFizz;
    }

    /*
     * return sting
     */
    private function _getBuzz()
    {
        return $this->_sBuzz;
    }

    /*
     * show results
     */
    public function showResult()
    {
        echo $this->_displayRangOfNumbers($this->_iTo);
    }
}

/*
 * create Object from NumbersWithFizzBuzz Class
 */
$listObject = new NumbersWithFizzBuzz();
$listObject->showResult();