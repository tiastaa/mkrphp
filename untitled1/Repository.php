<?php

class Repository
{
    public $dbh;
    public function __construct($dbh)
    {
        $this->dbh = $dbh;
    }

    public function createSubject($array)
    {
        $this->dbh->query('INSERT INTO Subjects(name, teacher, mark) VALUES (' .
            "'" . $array['name'] . "', " .
            "'" . $array['teacher'] . "', " .
            "'" . $array['mark']  . "')"
        );
    }

    public function readSubjects()
    {
        return $this->dbh->query('SELECT * FROM Subjects')->fetchAll();
    }

    public function updateSubject($array)
    {
        $this->dbh->query('UPDATE Subjects SET ' .
            'name = ' . $array['name'] . ', ' .
            'teacher = ' . $array['teacher'] . ', ' .
            'mark = ' . $array['mark'] . ', ' .
            'WHERE id = ' . $array['id']);
    }

    public function deleteSubject($array)
    {
        return $this->dbh->query('DELETE FROM Subjects WHERE id = ' . $array['id']);
    }
}