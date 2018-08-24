<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;

class DefaultController extends Controller
{
    /**
     * @Route("", name="homepage")
     */
    public function indexAction(Request $request)
    {
      
      $repository = $this->getDoctrine()->getRepository(Category::class);
      $categories = $repository->findAll();
      $repository = $this->getDoctrine()->getRepository(Product::class);
      $products = Null;
      $category_name = "Todas as Categorias";
      if (isset($_GET['id_category'])) {
        $category = $this->getDoctrine()
        ->getRepository(Category::class)
        ->find($_GET['id_category']);
        $products = $category->getProducts();
        $category_name = $category->getName();
      } else {
        $products = $repository->findAll();
      }

      $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
          $products, 
          $request->query->getInt('page', 1)/*page number*/,
          6 /*limit per page*/
      );

      return $this->render('default/index.html.twig', [
          'products' => $pagination,
          'category_name' => $category_name,
          'categories' => $categories,

      ]);
    }

    /**
     * @Route("/produtos", name="products")
     */
    public function productsAction(Request $request)
    {
      
      $repository = $this->getDoctrine()->getRepository(Category::class);
      $categories = $repository->findAll();
      $repository = $this->getDoctrine()->getRepository(Product::class);
      $products = Null;
      $category_name = "Todas as Categorias";
      if (isset($_GET['id_category'])) {
        $category = $this->getDoctrine()
        ->getRepository(Category::class)
        ->find($_GET['id_category']);
        $products = $category->getProducts();
        $category_name = $category->getName();
      } else {
        $products = $repository->findAll();
      }

      $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
          $products, 
          $request->query->getInt('page', 1)/*page number*/,
          6 /*limit per page*/
      );

      return $this->render('default/produtos.html.twig', [
          'products' => $pagination,
          'category_name' => $category_name,
          'categories' => $categories,

      ]);
    }

    /**
     * @Route("/sobre", name="sobre")
     */
    public function aboutAction(Request $request) {
      $repository = $this->getDoctrine()->getRepository(Category::class);
      $categories = $repository->findAll();
      return $this->render('default/quemsomos.html.twig', [
        'categories' => $categories,
      ]);
    }

    /**
     * @Route("/test", name="test")
     */
    public function testAction(Request $request) {
      return new Response('i am programer, i have life');
    }

    /**
     * @Route("/contato", name="contato")
     */
    public function contactAction(Request $request) {
      $repository = $this->getDoctrine()->getRepository(Category::class);
      $categories = $repository->findAll();
      return $this->render('default/contato.html.twig', [
        'categories' => $categories,
      ]);
    }

    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolioAction(Request $request) {
      $repository = $this->getDoctrine()->getRepository(Category::class);
      $categories = $repository->findAll();
      return $this->render('default/portfolio.html.twig', [
        'categories' => $categories,
      ]);
    }

    /**
     * @Route("/teleentregas", name="teleentregas")
     */
    public function deliveryAction(Request $request) {
      $repository = $this->getDoctrine()->getRepository(Category::class);
      $categories = $repository->findAll();
      return $this->render('default/tabelaentregas.html.twig', [
        'categories' => $categories,
      ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
      $email = $this->get('session')->get('user')['email'];
      
      if (empty($email)) {
        return $this->render('accounts/login.html.twig', []);
      } else {
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $products = $repository->findAll();
        return $this->render('accounts/admin.html.twig', array(
            'products' => $products,
        ));
      }

    }


}
