<?php
require_once 'model/DataHandler.php';

class CustomerLogic {

    public function __construct() {
        $this->DataHandler = new Datahandler("localhost", "mysql", "gameplayparty2", "root", "");
    }

    public function __destruct() {

    }

}

?>
