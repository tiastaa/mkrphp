<?php

class Subject
{
    public $id;
    public $name;
    public $teacher;
    public $mark;


    public function __construct($id, $array)
    {
        $this->id = $id;
        $this->name = $array['name'];
        $this->teacher = $array['teacher'];
        $this->mark = $array['mark'];

    }

    public static function validationDataSubjects($array)
    {
        return !(
            empty($array['name']) ||
            empty($array['teacher']) ||
            empty($array['mark']) ||

            !isset($array)
        );
    }
}