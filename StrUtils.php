<?php

class StrUtils
{
    private String $myStr;

    public function __construct(string $myStr) {
        $this->setMyStr($myStr);
    }

    public function bold(): string {
       return $this->myStr = '<B>php is awesome !</B>';
    }

    public function souligne(): string {
       return $this->myStr = '<u>php is awesome !</u>';
    }

    public function italic(): string {
       return $this->myStr = '<i>php is awesome !</i>';
    }

    public function uglify(): string {
        return $this->myStr = '<i><b><u>php is awesome !</u></b></i>';
    }


    /**
     * @return String
     */
    public function getMyStr(): string
    {
        return $this->myStr;
    }

    /**
     * constructor
     * @param String $myStr
     */
    public function setMyStr(string $myStr): void
    {
        $this->myStr = 'php is awesome !';
    }



}


