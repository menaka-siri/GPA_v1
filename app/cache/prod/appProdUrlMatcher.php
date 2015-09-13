<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // gpa_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gpa_homepage')), array (  '_controller' => 'GPABundle\\Controller\\DefaultController::indexAction',));
        }

        // gpa_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gpa_home');
            }

            return array (  '_controller' => 'GPABundle\\Controller\\DefaultController::indexAction',  '_route' => 'gpa_home',);
        }

        // gpa_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'GPABundle\\Controller\\LoginController::loginAction',  '_route' => 'gpa_login',);
        }

        // student_dashboard
        if (0 === strpos($pathinfo, '/student') && preg_match('#^/student/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_dashboard')), array (  '_controller' => 'GPABundle\\Controller\\StudentController::indexAction',));
        }

        // lecturer_dashboard
        if (0 === strpos($pathinfo, '/lec') && preg_match('#^/lec/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lecturer_dashboard')), array (  '_controller' => 'GPABundle:Lecturer:index',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // admin_dashboard
            if (0 === strpos($pathinfo, '/admin') && preg_match('#^/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dashboard')), array (  '_controller' => 'GPABundle:Admin:index',));
            }

            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
