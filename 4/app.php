<?php

class encriptado{
    protected $pass, $salt;

    function __construct($pass, $salt){
        $this->pass = $pass;
        $this->salt = $salt;
    }

    function setPass($pass){
        $this->pass = $pass;
    }

    function getPass(){
        return $this->pass;
    }

    function setSalt($salt){
        $this->salt = $salt;
    }

    function getSalt(){
        return $this->salt;
    }

    function base64(){
        return base64_encode($this->pass.$this->salt);
    }

    function encriptar(){
        $contra = $this->salt.$this->pass;

        ?>
            <tr>
                <th scope="col">Contraseña a cifrar</th>
                <th scope="col"><?php echo $this->pass; ?></td>
            </tr>
            <tr>
                <th scope="col">Salt</th>
                <th scope="col"><?php echo $this->salt; ?></td>
            </tr>
            <tr>
                <th scope="col">base64</th>
                <td><?php echo base64_encode($contra); ?></td>
            </tr>
            <tr>
                <th scope="col">md5</th>
                <td><?php echo md5($contra); ?></td>
            </tr>
            <tr>
                <th scope="col">sha1</th>
                <td><?php echo sha1($contra); ?></td>
            </tr>
            <tr>
                <th scope="col">crc32</th>
                <td><?php echo crc32($contra); ?></td>
            </tr>
            <tr>
                <th scope="col">crypt</th>
                <td><?php echo crypt($this->pass, $this->salt); ?></td>
            </tr>
            <tr>
                <th scope="col">hash-sha224</th>
                <td><?php echo hash("sha224", $contra); ?></td>
            </tr>
            <tr>
                <th scope="col">hash-sha512</th>
                <td><?php echo hash("sha512", $contra); ?></td>
            </tr>
            <tr>
                <th scope="col">hash-whirlpool</th>
                <td><?php echo hash("whirlpool", $contra); ?></td>
            </tr>
            <tr>
                <th scope="col">hash-snefru</th>
                <td><?php echo hash("snefru", $contra); ?></td>
            </tr>
            <tr>
                <th scope="col">hash-haval128,3</th>
                <td><?php echo hash("haval128,3", $contra); ?></td>
            </tr>
            <tr>
                <th scope="col">hash-haval128,5</th>
                <td><?php echo hash("haval128,5", $contra); ?></td>
            </tr>
        <?php
    }

}