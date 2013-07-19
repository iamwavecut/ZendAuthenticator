<?php

/**
 * Use Zend_Auth to validate the logged in user.
 *
 * @link binarykitten.com/zend-framework/332-tinymce-and-zend_auth-simple-authentication-checking.html description Based on BinaryKitten's BinaryKitten_ZendAuthenticator plugin
 * @author WaveCut <valcool@pisem.net>
 *
 */
class WaveCut_ZendAuthenticator_Plugin implements MOXMAN_Auth_IAuthenticator {

    private $auth = null;

    public function __construct() {
        $config = MOXMAN::getConfig();
        $libPath = $config->get('ZendAuthenticator.LibraryPath');

        if ($libPath) {
            set_include_path(
                    implode(
                            PATH_SEPARATOR, array(
                realpath($libPath),
                get_include_path(),
                            )
                    )
            );
        }
        error_reporting(E_ALL);

        require "Zend/Auth.php";
        $this->auth = Zend_Auth::getInstance();
    }

    //put your code here
    public function authenticate(MOXMAN_Auth_User $user) {
        return $this->auth->hasIdentity();
    }

}

MOXMAN::getAuthManager()->add("ZendAuthenticator", new WaveCut_ZendAuthenticator_Plugin());