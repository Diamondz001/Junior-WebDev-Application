<?php
class Mailer
{
	private $_recipients;
	public function addRecipient($email,$name)
	{
		$recipient = new Addressbook($email,$name);
		$this->_recipients[] = $recipient;
	}
	
	public function send($message)
	{
		foreach($this->_recipients as $recipient)
		{
			mail($recipient->getEmail(), 'Alert', $message);
			echo sprintf("An email has been sent to %s at %s", $recipient->getName(), $recipient->getEmail());
		}
	}
}