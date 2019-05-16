<?php

namespace App\Controller;

use App\Entity\Article;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//use JMS\Serializer\SerializationContext;

class ArticleController extends Controller
{
    /**
     * @Route("/articles/{id}", name="article_show")
     */
    /*
    public function show(Article $article)
    {
        $data = $this->get('jms_serializer')->serialize(
            $article,
            'json',
            SerializationContext::create()->setGroups(array('detail'))
        );

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    */

    /**
     * @Route("/articles", name="article_list", methods={"GET"})
     */
    /*
    public function list()
    {
        $articles = $this->getDoctrine()->getManager()
            ->getRepository(Article::Class)->findAll();
        $data = $this->get('jms_serializer')->serialize(
            $articles,
            'json',
            SerializationContext::create()->setGroups(array('list'))
        );

        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    */

    /**
     * @Route("/articles", name="article_create", methods={"POST"})
     */
    /*
    public function create(Request $request)
    {
        $data = $request->getContent();
        $article = $this->get('jms_serializer')->deserialize($data, 'App\Entity\Article', 'json');

        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        return new Response('', Response::HTTP_CREATED);
    }
    */
}
