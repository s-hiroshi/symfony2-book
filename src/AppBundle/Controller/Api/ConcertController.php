<?php
namespace AppBundle\Controller\Api;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

class ConcertController extends FOSRestController
{
    /**
     * @Rest\Get("/api/concerts.{_format}")
     */
    public function getConcertsAction()
    {
    }
}