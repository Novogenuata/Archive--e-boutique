<?php
abstract class Controleur{
    protected $messagesErreur = [];

    public function __construct() {}

    public function getMessagesErreur() {
        return $this->messagesErreur;
    }

    abstract public function executerAction();
}




?>
