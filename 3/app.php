<?php 

class depresiacion{
    protected $po, $vu, $da;

    function __construct($po, $vu){
        $this->po = $po;
        $this->vu = $vu;
    }

    function setPo($po){
        $this->po = $po;
    }

    function getPo(){
        return $this->po;
    }

    function setVu($vu){
        $this->vu = $vu;
    }

    function getVu(){
        return $this->vu;
    }

    function getDa(){
        $da = $this->po / $this->vu;
        return $da;
    }

    function Calcular(){
        $this->da = $this->po / $this->vu;
        for($i=0;$i<=$this->vu;$i++){
            $resta = $this->po - $this->da*($i);
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $resta ?></td>
                    <td><?php echo $this->da*$i ?></td>
                </tr>
            <?php

        }
    }

}