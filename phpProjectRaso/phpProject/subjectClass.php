<?php

// include 'assignmentClass.php';
// include 'database.php';

class Subject
{
    private $name;
    private $espb;
    private $description;

    // function __construct($name, $espb, $description)
    // {
    //     if ($name == '') {
    //         throw new Exception('Naziv predmeta je prazan!');
    //     }

    //     $this->name = $name;
    //     $this->espb = $espb;
    //     $this->description = $description;
    // }

    function getNaziv()
    {
        return $name;
    }

    function getEspb()
    {
        return $espb;
    }

    function getDescription()
    {
        return $description;
    }

    public function fetch_single($id)
    {
        $mydat = new Database('assignment');
        $where = $id;
        $order = null;
        // $order = 'Name ASC';

        $query = $mydat->fetch();
        // OVAKO MOZES DA SKINES FAJL!!!!!!!
        //     echo "<h3> <a href='read.php?id=" .
        //     $row->ID .
        //     ">
        //    '$row->Name
        // </a></h3>";

        while ($row = $mydat->getResult()->fetch_object()) {
            echo '<div class="info" id="wizard' . $row->ID . '">';
            echo '<h3>' . $row->Name . '</h3>';
            echo '<br />';
            echo '<h3>' . $row->Description . '</h3>';
            echo '<br />';
            echo "<button class='button_up' onclick='deleteWizard(" .
                $row->ID .
                ")'>Delete </button>";
            echo "<a href='update.php?id=" .
                $row->ID .
                "' class='button_up'>
                        Change
                        </a>";
            echo '<br />';
            echo '<br />';
            echo '</div>';
        }
        // $this->allAssignmentsBySubjectId($id);
    }
}

?>
