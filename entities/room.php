<?php 
	class Room {
		private $number;
		private $limit;
    private $filed;

		public function  __construct() {}

		public function setNumber($number) {
			$this->number = $number;
		}

		public function getNumber() {
			return $this->number;
		}

		public function setLimit($limit) {
			$this->limit = $limit;
		}

		public function getLimit() {
			return $this->limit;
		}

    public function fill() {
      if($this->filed == $this->limit) {
        echo "Sala cheia";
      } else {
        $this->filed + 1;
      }

    }
	}

?>