<?php

class StrUtils
{
    private String $myStr;


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

    public function __construct(string $myStr) {
        $this->setMyStr($myStr);
    }


}


