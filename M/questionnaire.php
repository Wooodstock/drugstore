<?php


Class Questionnaire{
	
	private $question;
	private $reponse;
	
	function __construct($question, $reponse){
		$this->question = $question;
		$this->reponse = $reponse;
	}
	
	public function getQuestion(){
		return $this->question;
	}
	
	public function setQuestion($question){
		$this->question = $question;
	}
	
	public function getReponse(){
		return $this->reponse;
	}
	
	public function setReponse($reponse){
		$this->reponse = $reponse;
	}
	
}

?>