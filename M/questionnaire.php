<?php


Class Questionnaire{
	
	private $questions;
	private $reponse;
	
	public function __construc($question, $reponse){
		$this->question = $question;
		$this->reponse = $reponse;
	}
	
	public function getQuestion(){
		return $this->question;
	}
	
	public function setQuestion($question){
		$this->question = $questions;
	}
	
	public function getReponse(){
		return $this->reponse;
	}
	
	public function setReponse($reponse){
		$this->reponse = $reponse;
	}
	
}

?>