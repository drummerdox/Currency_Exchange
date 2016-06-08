<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 06.06.2016
 * Time: 1:58
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class LuckyController extends Controller
{
    /**
     * @Route("/test")
     * @Method("POST")
     */
    public function requ(Request $request){
        $value = $request->getPathInfo();
        print_r($value);
        return new Response;
    }
    /**
     * @Route("/test")
     * @Method("GET")
     */
    public function testAction(){
        return $this->render('test\test.html.twig');
    }
    public function loginAction(Request $request){
        var_dump("we are here");
    }
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
    /**
     * @Route("/api/lucky/number{item}")
     */
    public function apiNumberAction($item)
    {
        echo $item;
        $data = array(
            'lucky_number' => rand(0, 100),
        );

        return new Response(
            json_encode($data),
            200,
            array('Content-Type' => 'application/json')
        );
    }
}