<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // home_store_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_store_homepage')), array (  '_controller' => 'Home\\StoreBundle\\Controller\\DefaultController::indexAction',));
        }

<<<<<<< Upstream, based on origin/master
<<<<<<< Upstream, based on origin/master
=======
=======
<<<<<<< HEAD
<<<<<<< Upstream, based on origin/master
>>>>>>> 3145dd1 teste
=======
<<<<<<< HEAD
>>>>>>> b2641f5 resolve conflito
        // _teste
        if ($pathinfo === '/cadastro') {
            return array (  '_controller' => 'HomeStoraBundle:Default:create',  '_route' => '_teste',);
        }

<<<<<<< Upstream, based on origin/master
>>>>>>> e61c1ce estudo symfony
=======
=======
>>>>>>> branch 'master' of https://github.com/crysthianophp/RodoSul.git
<<<<<<< Upstream, based on origin/master
>>>>>>> 3145dd1 teste
=======
=======
>>>>>>> branch 'master' of https://github.com/crysthianophp/RodoSul.git
>>>>>>> b2641f5 resolve conflito
        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
