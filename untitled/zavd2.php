<?php


function defaultDataSubjects()
{
    return [
        [
            'id' => 1,
            'name' => 'maths',
            'teacher' => 'Olivia Ivanivna',
            'mark' => 10,

        ],
        [
            'id' => 2,
            'name' => 'english',
            'teacher' => 'Viktor Ivanovich',
            'mark' => 11,

        ],
        [
            'id' => 3,
            'name' => 'physics',
            'teacher' => 'Vasil Petrovich',
            'mark' => 6,

        ],
        [
            'id' => 4,
            'name' => 'chemistry',
            'teacher' => 'Zlata Mukhaylivna',
            'mark' => 9,

        ]
    ];
}

function CreateNewSubject($array, $id)
{
    return [
        'id' => $id,
        'name' => $array['name'],
        'teacher' => $array['teacher'],
        'mark' => $array['mark'],

    ];
}

function validationDataSubjects($array)
{
    return !(
        empty($array['name']) ||
        empty($array['teacher']) ||
        empty($array['mark']) ||

        !isset($array)
    );
}



function displayTableSubjects($array, $caption)
{
    $table = '<table>';
    $table .= "<caption> $caption </caption>";
    $table .= '<tr> <th>id</th> <th>name</th> <th>teacher</th> <th>mark</th>  </tr>';

    foreach ($array as $item) {
        $table .= "<tr>" .
            "<td>$item[id]</td> <td><a href='additional.php?id=$item[id]&name=$item[name]&teacher=$item[teacher]&mark=$item[mark]'>$item[name]</a></td> " .
            "<td>$item[teacher]</td><td>$item[mark]</td>" .
            "</tr>";
    }

    $table .= '</table>';
    echo $table;
}

if (!isset($_SESSION)) {
    session_start();
}

// setting default values
if (empty($_SESSION)) {
    $_SESSION['Subjects'] = defaultDataSubjects();
}

$actionToDo = $_POST['action'];


// display all Subjects
displayTableSubjects($_SESSION['Subjects'], 'Subjects');

unset($_POST);
?>





<style>


    table, th, td {
        border: 1px solid;
        text-align: center;
    }

    th {
        width: 100px;
    }

    td {
        height: 50px;
    }
</style>


