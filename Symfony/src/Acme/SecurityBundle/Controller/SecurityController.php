<?php
	
namespace Acme\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
    public function loginAction()
    {
        
        
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
            
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
            
           /*  if($error){
                $error_message = $error->getMessage();
                $extrainformation = $error->getExtraInformation();
                echo "<pre>";
                var_dump($extrainformation); 
                echo "</pre>";
                exit;
               if($error_message == 'Bad credentials'){
                    //$error->setMessage('Неверный логин или пароль');
                    //var_dump(get_class($error)); exit;
                }
            } */
            //var_dump(); exit;
        }
        
        
        return $this->render('AcmeSecurityBundle:Security:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }
}