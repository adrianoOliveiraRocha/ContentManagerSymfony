<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use AppBundle\Entity\Delivery;

class DefaultController extends Controller
{
    /**
     * @Route("", name="homepage")
     */
    public function indexAction(Request $request)
    {
      $nav = '';
      if (isset($_GET['page'])) {
        $nav = 'div_prod';
        
      }
      
      $repositoryCate = $this->getDoctrine()->getRepository(Category::class);
      $categories = $repositoryCate->findAll();
      $products = Null;
      $deliveries = Null;
      $objects = Null;
      
      if (isset($_GET['id_category'])) {
        $nav = 'div_prod';

        if ($_GET['id_category'] == 'promo') {
          $repositoryDel = $this->getDoctrine()->getRepository(Delivery::class);
          $deliveries = $repositoryDel->findAll();
          $category_name = 'Promoções';

        }
        
        elseif ($_GET['id_category'] == 0) {
          $repositoryProd = $this->getDoctrine()->getRepository(Product::class);
          $products = $repositoryProd->findAll();
          $category_name = "Todas as Categorias";
        } else {
            $category = $repositoryCate
            ->find($_GET['id_category']);
            $products = $category->getProducts();
            $category_name = $category->getName();  
          }
          
      } else { //$_GET['id_category'] not exists
        $repositoryCate = $this->getDoctrine()->getRepository(Category::class);
        $categories = $repositoryCate->findAll();
        $repositoryProd = $this->getDoctrine()->getRepository(Product::class);
        $products = $repositoryProd->findAll();
        $category_name = "Todas as Categorias";
      }

      if ($products) {
        $objects = $products;
      } elseif ($deliveries) {
        $objects = $deliveries;
      }

      $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
          $objects, 
          $request->query->getInt('page', 1)/*page number*/,
          6 /*limit per page*/
      );

      return $this->render('default/index.html.twig', [
          'objects' => $pagination,
          'category_name' => $category_name,
          'categories' => $categories,
          'nav' => $nav,
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
     * @Route("/tabelaentregas", name="deliverytable")
     */
    public function deliveryAction(Request $request) {
      $repositoryCate = $this->getDoctrine()->getRepository(Category::class);
      $categories = $repositoryCate->findAll();
      $repositoryDel = $this->getDoctrine()->getRepository(Delivery::class);
      $deliveries = $repositoryDel->findAll();
      return $this->render('default/tabelaentregas.html.twig', [
        'categories' => $categories,
        'deliveries' => $deliveries,
        'nav' => 'deliverytable',
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
