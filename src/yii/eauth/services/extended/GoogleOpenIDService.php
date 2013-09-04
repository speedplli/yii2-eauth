<?php
/**
 * An example of extending the provider class.
 *
 * @author Maxim Zemskov <nodge@yandex.ru>
 * @link http://github.com/Nodge/yii2-eauth/
 * @license http://www.opensource.org/licenses/bsd-license.php
 */

namespace yii\eauth\services\extended;

class GoogleOpenIDService extends \yii\eauth\services\GoogleOpenIDService {

	//protected $jsArguments = array('popup' => array('width' => 450, 'height' => 450));

	protected $requiredAttributes = array(
		'name' => array('firstname', 'namePerson/first'),
		'lastname' => array('lastname', 'namePerson/last'),
		'email' => array('email', 'contact/email'),
		'language' => array('language', 'pref/language'),
	);

	protected function fetchAttributes() {
		$this->attributes['fullname'] = $this->attributes['name'] . ' ' . $this->attributes['lastname'];
		return true;
	}
}