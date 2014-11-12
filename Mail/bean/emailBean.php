<?php
class emailBean{
	var $to;
	var $cc;
	var $bcc;
	var $subject;
	var $body;
	var $id;
	
	/**
	 * @return the $to
	 */
	public function getId() {
		return $this->id;
	}

	
	/**
	 * @return the $to
	 */
	public function getTo() {
		return $this->to;
	}

	/**
	 * @return the $cc
	 */
	public function getCc() {
		return $this->cc;
	}

	/**
	 * @return the $bcc
	 */
	public function getBcc() {
		return $this->bcc;
	}

	/**
	 * @return the $subject
	 */
	public function getSubject() {
		return $this->subject;
	}


	/**
	 * @return the $body
	 */
	public function getBody() {
		return $this->body;
	}

	/**
	 * @param field_type $to
	 */
	public function setTo($to) {
		$this->to = $to;
	}

	/**
	 * @param field_type $cc
	 */
	public function setCc($cc) {
		$this->cc = $cc;
	}

	/**
	 * @param field_type $bcc
	 */
	public function setBcc($bcc) {
		$this->bcc = $bcc;
	}

	/**
	 * @param field_type $subject
	 */
	public function setSubject($subject) {
		$this->subject = $subject;
	}


	/**
	 * @param field_type $body
	 */
	public function setBody($body) {
		$this->body = $body;
	}
	
	public function setId($id) {
		$this->id = $id;
	}

}

?>