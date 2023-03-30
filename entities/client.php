<?php
  class Client {
    private $name;
    private $isStudent;
    private $document;

    public function __construct() {}

    public function setName($name) {
      $this->$name = $name;
    }

    public function getName() {
      return $this->name;
    }

    public function getIsStudent() {
      return $this->isStudent;
    }

    public function setDocument($document) {
      $this->$document = $document;
    }

    public function getDocument() {
      return $this->document;
    }

    public function verifyDocumet() {
      if ($this->document == 'Carterinha de estudante') {
        $this->isStudent = true;
      } else {
        $this->isStudent = false;
      }
    }
  }
?>