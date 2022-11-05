<?php

class SubjectsCollection
{
    public $subjects;

    public function __construct()
    {
    }

    public function defaultSubjects()
    {
        $this->subjects = [
            new Subject(1, [
                'id' => 1,
                'name' => 'maths',
                'teacher' => 'Olivia Ivanivna',
                'mark' => 10,

            ]),
            new Subject(2, [
                'id' => 2,
                'name' => 'english',
                'teacher' => 'Viktor Ivanovich',
                'mark' => 11,

            ]),
            new Subject(3, [
                'id' => 3,
                'name' => 'physics',
                'teacher' => 'Vasil Petrovich',
                'mark' => 6,

            ]),
            new Subject(4, [
                'id' => 4,
                'name' => 'chemistry',
                'teacher' => 'Zlata Mukhaylivna',
                'mark' => 9,

            ])
        ];
        return $this;
    }

    public function getSubjectById($id)
    {
        foreach ($this->subjects as $subject) {
            if ($subject->id == $id) {
                return $subject;
            }
        }
        return null;
    }


}