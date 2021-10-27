<?php

namespace App\Controller;

use App\Entity\Hizmet;
use App\Form\HizmetType;
use App\Repository\HizmetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/hizmet")
 */
class HizmetController extends AbstractController
{
    /**
     * @Route("/", name="hizmet_index", methods={"GET"})
     */
    public function index(HizmetRepository $hizmetRepository): Response
    {
        return $this->render('hizmet/index.html.twig', [
            'hizmets' => $hizmetRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="hizmet_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $hizmet = new Hizmet();
        $form = $this->createForm(HizmetType::class, $hizmet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($hizmet);
            $entityManager->flush();

            return $this->redirectToRoute('hizmet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('hizmet/new.html.twig', [
            'hizmet' => $hizmet,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="hizmet_show", methods={"GET"})
     */
    public function show(Hizmet $hizmet): Response
    {
        return $this->render('hizmet/show.html.twig', [
            'hizmet' => $hizmet,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="hizmet_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Hizmet $hizmet): Response
    {
        $form = $this->createForm(HizmetType::class, $hizmet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('hizmet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('hizmet/edit.html.twig', [
            'hizmet' => $hizmet,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="hizmet_delete", methods={"POST"})
     */
    public function delete(Request $request, Hizmet $hizmet): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hizmet->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($hizmet);
            $entityManager->flush();
        }

        return $this->redirectToRoute('hizmet_index', [], Response::HTTP_SEE_OTHER);
    }
}
