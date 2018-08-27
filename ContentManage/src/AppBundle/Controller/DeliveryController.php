<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Delivery;

/**
 * 
 */
class DeliveryController extends Controller
{
	
	/**
     * @Route("entregas_novo", name="new_delivery")
     */
	public function newAction(Request $request){
		if (isset($_POST['save'])) {
			if ($_POST['neighborhood'] == '' || 
				$_POST['price'] == '') {
				$this->addFlash('msg', 'Por favor, preencha os dois campos');
				return $this->render('delivery/new_delivery.html.twig');
			} else {
				$delivery = new Delivery();
				$delivery->setNeighborhood($_POST['neighborhood']);
				$delivery->setValue($_POST['price']);
				try{
					$entityManager = $this->getDoctrine()->getManager();
					$entityManager->persist($delivery);
					$entityManager->flush();
					$this->addFlash('msg', 'Salvo com sucesso!');
					return $this->redirectToRoute('home');
				} catch (\Exception $e) {
					return new Response($e->getMessage());
				}
			}
		} else {
			return $this->render('delivery/new_delivery.html.twig');	
		}
		
	}

	/**
     * @Route("exibir_entrega", name="show_deliveries")
     */
	public function showAction(Request $request){
		$repository = $this->getDoctrine()->getRepository(Delivery::class);
	    $deliveries = $repository->findAll();
	    return $this->render('delivery/show_deliveries.html.twig', array(
	      'deliveries' => $deliveries,
	    ));		
	}

	/**
     * @Route("editar_entrega", name="edit_delivery")
     */
	public function editAction(Request $request){
		$repository = $this->getDoctrine()->getRepository(Delivery::class);
		
		if (isset($_GET['id'])) {
			$delivery = $repository->findOneById($_GET['id']);
			return $this->render('delivery/edit_delivery.html.twig', array(
		      'delivery' => $delivery,
		    ));
		} elseif ($_POST['id']) {
			$delivery = $repository->findOneById($_POST['id']);
			$changed = False;
			if ($_POST['neighborhood'] != $delivery->getNeighborhood()) {
				$delivery->setNeighborhood($_POST['neighborhood']);
				$changed = True;
			}
			if ($_POST['preice'] != $delivery->getValue()) {
				$delivery->setValue($_POST['preice']);
				$changed = True;
			}
			if ($changed == True) {
				try {
			      $entityManager = $this->getDoctrine()->getManager();
			      $entityManager->persist($delivery);
			      $entityManager->flush();
			      $this->addFlash('msg', 'Entrega editada com sucesso!');
			      return $this->redirectToRoute('home');
			    } catch (\Exception $e) {
			      return new Response($e->getMessage());
			    }
			}
			$this->addFlash('msg', 'Não houve alterações!');
			return $this->redirectToRoute('home');
		}
	}

}