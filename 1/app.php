<?php 

class salNeto{

    protected $pph, $ht, $sb, $desc, $sn;

    function __construct($pph, $ht)
    {
        $this->pph = $pph;
        $this->ht = $ht;
    }

    function setPph($pph){
        $this->pph = $pph;
    }

    function getPph(){
        return $this->pph;
    }

    function setHt($ht){
        $this->ht = $ht;
    }

    function getHt(){
        return $this->ht;
    }

    function calSalario(){
        $sb = $this->ht * $this->pph;
        $desc = $sb * 0.2;
        $sn = $sb - $desc;

        return $sn;
    }

}