<?php

class question_3
{
    private $Num;
    private $Result;

    function __construct($num)
    {
        $this->Num = intval(strip_tags(trim($num)));
        if (!$this->Num) {
            $this->Result = '<p>Formato invalido para essa questão.<br>Favor informe somente numeros.</p>';
        } else {
            $this->Romano();
        }
    }

    public function getResult()
    {
        return $this->Result;
    }

    private function Romano()
    {
        $n = $this->Num;
        $r = null;
        while (($n / 1000) >= 1) {
            $r .= 'M';
            $n -= 1000;
        }
        if (($n / 900) >= 1) {
            $r .= 'CM';
            $n -= 900;
        }
        if (($n / 500) >= 1) {
            $r .= 'D';
            $n -= 500;
        }
        if (($n / 400) >= 1) {
            $r .= 'CD';
            $n -= 400;
        }

        while (($n / 100) >= 1) {
            $r .= 'C';
            $n -= 100;
        }
        if (($n / 90) >= 1) {
            $r .= 'XC';
            $n -= 90;
        }
        if (($n / 50) >= 1) {
            $r .= 'L';
            $n -= 50;
        }
        if (($n / 40) >= 1) {
            $r .= 'XL';
            $n -= 40;
        }

        while (($n / 10) >= 1) {
            $r .= 'X';
            $n -= 10;
        }
        if (($n / 9) >= 1) {
            $r .= 'IX';
            $n -= 9;
        }
        if (($n / 5) >= 1) {
            $r .= 'V';
            $n -= 5;
        }
        if (($n / 4) >= 1) {
            $r .= 'IV';
            $n -= 4;
        }
        while ($n >= 1) {
            $r .= 'I';
            $n -= 1;
        }
        $this->Result = $r;
    }
}

