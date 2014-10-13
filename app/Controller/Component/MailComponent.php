<?php

App::uses('CakeEmail', 'Network/Email');

class MailComponent extends Component {

	public function Send($from,$to,$subject,$template,$viewVars) {

		$email = new CakeEmail('mandrill');
		$email->from($from);
		$email->to($to);
		$email->subject($subject);
		$email->template($template);
		$email->viewVars($viewVars);
		$email->addHeaders(array(
		    'X-Tags' => null,
		    'X-SubAccount' => null
    	));
		$email->send(); // send and ignore X-Tags and X-Subaccount errors

	}
}