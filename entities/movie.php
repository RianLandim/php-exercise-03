<?php

class Movie {
	private $title;
	private $releasedAt;
	private $duration;
	private $synopsis;
  private $currentAt;

	public function setTitle($title) {
			$this->title = $title;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setReleaseAt($releasedAt) {
		$this->releasedAt = $releasedAt;
	}

	public function getReleasedAt() {
		return $this->releasedAt;
	}

	public function setDuration($duration) {
		$this->duration = $duration;
	}

	public function getDuration() {
		return $this->duration;
	}

	public function setSynopsis($synopsis) {
		$this->synopsis = $synopsis;
	}

	public function getSynopsis() {
		return $this->synopsis;
	}

  public function getCurrentAt() {
    return $this->currentAt;
  }

	public function start() {
    if($this->currentAt == 0) {
      return "Filme começou";
    } else {
      return "Filme já começou";
    }
	}

  public function running() {
    $this->currentAt += 5;
  }

	public function stop() {
    if($this->currentAt == $this->duration) {
      return "Filme parou";
    } else {
      return "Filme está rodando";
    }
	}

} 


?>