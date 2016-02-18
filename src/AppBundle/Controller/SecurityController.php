<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 18/02/16
 * Time: 11:24
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUserName = $authenticationUtils->getLastUsername();

        return $this->render(
            'security/login.html.twig',
            array(
                'last_username' => $lastUserName,
                'error' => $error,
            )
        );
    }

}
