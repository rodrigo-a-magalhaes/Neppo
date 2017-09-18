<?php

class question_1
{

    private $Num;
    private $Result;

    function __construct($num)
    {
        $this->Num = intval(strip_tags(trim($num)));
        if (!$this->Num) {
            $this->Result = 'Formato invalido para essa questão.<br>Favor informe somente numeros.';
        } else {
            $this->calc();
        }
    }

    public function getResult()
    {
        return $this->Result;
    }

    private function  calc()
    {
        $arr = str_split($this->Num);
        $n = $arr[0];
        $c = 0;
        $r = null;

        for ($i = 0; $i < sizeof($arr); $i++) {
            if ($arr[$i] == $n) {
                $c++;
            } else {
                $r .= ' ' . $c . $n;
                $n = $arr[$i];
                $c = 1;
            }
        }
        $r .= ' ' . $c . $n;
        $this->Result = $r;
    }

}

