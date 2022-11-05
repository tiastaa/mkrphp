<?php

class Display
{
    public static function displaySubjects($array)
    {
        $table = '<table>';
        $table .= "<caption> Subjects </caption>";
        $table .= '<tr> <th>id</th> <th>name</th> <th>teacher</th> <th>mark</th>  </tr>';

        foreach ($array as $item) {
            $table .=
                "<tr><td>" . $item['id'] .
                "</td> <a href='additional.php?id=$item[id]&name=$item[name]&teacher=$item[teacher]&mark=$item[mark]'></a><td>" .$item['name'] .
                "</td><td>" . $item['teacher'] .
                "</td><td>" . $item['mark'] .
                "</td></tr>";
        }

        $table .= '</table>';
        return $table;
    }
}