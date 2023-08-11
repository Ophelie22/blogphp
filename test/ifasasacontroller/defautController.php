<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
  function __construct()
  {
  }

  #[Route('/', name: 'index')]
  public function index()
  {

    $form = $this->createFormBuilder()
      ->add('content', TextType::class)
      ->add('submit', SubmitType::class)
      ->getForm();

    return $this->render('page1.html.twig', [
      'myform' => $form->createView()
    ]);
  }
}