<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 2017-12-06
 * Time: 21:22
 */
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HistoryAppController extends Controller
{
    /**
     * @Route("/LDMHistory")
     */
    public function LDMHistory()
    {
        $number = mt_rand(0, 100);

        return $this->render('History/main.html.twig', array('number' => $number,));
    }
}