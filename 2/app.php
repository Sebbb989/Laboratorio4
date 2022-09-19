<?php 

class porcentaje {
    protected $h, $m, $ph, $pm;

    function __construct($h, $m){
        $this->h = $h;
        $this->m = $m;
    }

    function setH($h){
        $this->h = $h;
    }

    function setM($m){
        $this->m = $m;
    }

    function getH(){
        return $this->h;
    }

    function getM(){
        return $this->M;
    }

    function sacarPorcentaje(){

        $this->ph = ($this->h / ($this->h + $this->m)) * 100;
        $this->pm = ($this->m / ($this->h + $this->m)) * 100;

        ?> 
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Hombres</th>
                    <th scope="col">Mujeres</th>
                    <th scope="col">Porcentaje Hombres</th>
                    <th scope="col">Porcentaje Mujeres</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $this->h ?></th>
                    <td><?php echo $this->m ?></td>
                    <td><?php echo $this->ph ?>%</td>
                    <td><?php echo $this->pm ?>%</td>
                </tr>
            </tbody>
        </table>
        
        <?php 

        #return array($this->ph, $this->pm);
    }

}