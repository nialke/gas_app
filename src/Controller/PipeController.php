<?php

namespace App\Controller;

use App\Entity\Pipe;
use App\Form\Type\PipeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/pipe', name: 'pipe_')]
class PipeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $pipe = new Pipe();
        $form = $this->createForm(PipeType::class, $pipe);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($pipe);
            $entityManager->flush();

            return $this->redirectToRoute('pipe_index');
        }

        $pipesArray = $entityManager->getRepository(Pipe::class)->findAllSortedByName();

        return $this->render('pipe/index.html.twig', [
            'form' => $form->createView(),
            'pipesArray' => $pipesArray
        ]);
    }
}
