<?php

namespace App\Repository;

use App\Entity\Student;

class StudentRepository extends Repository
{
    public function findAll(): array
    {
        $students = [];

        $sql =  'SELECT * FROM Student ORDER BY login';
        foreach  ($this->connexion->query($sql) as $row) {
            $student = new Student();
            $student->setId($row['id']);
            $student->setLogin($row['login']);
            $student->setAlias($row['alias']);
            $student->setPwd($row['pwd']);
            $students[] = $student;
        }

        return $students;
    }
}