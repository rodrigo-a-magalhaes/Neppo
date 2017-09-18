<?php

class question_2
{

    private $Data;
    private $Result;

    function __construct($date)
    {
        if (!empty($date)) {
            $this->Data = explode(' ', $date);
            $this->CheckDate();
        } else {
            $this->Result = '<p>Favor informa data, no seguinte formato -> DD MM AAAA
                <br><small>com um espaço entre os numero.</small></p>';
        }
    }

    public function getResult()
    {
        return $this->Result;
    }


    private function CheckDate()
    {
        if (checkdate($this->Data[1], $this->Data[0], $this->Data[2])) {
            $this->Result = 'true';
        } else {
            $this->Result = 'false';
        }
    }

}

