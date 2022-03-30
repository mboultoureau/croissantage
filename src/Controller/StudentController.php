<?php

namespace App\Controller;

use App\Repository\StudentRepository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class StudentController extends BaseController
{
    public function index(Request $request, Response $response, array $args = []): Response
    {
        $students = $this->studentRepository->findAll();

        return $this->render($request, $response, 'students.html.twig', [
            'students' => $students
        ]);
    }
}
