<?php

include 'subjectClass.php';
include 'database.php';

class Assignment
{
    private $name;
    private $description;
    // private $title;
    /*
    function __construct($name,$house, $picture){
        if($name=="") throw new Exception("Wizard name empty!");
        $this->name=$name;
        $this->house=$house;
        $this->picture=$picture;
    }
*/

    // private $server = 'localhost';
    // private $username = 'root';
    // private $password;
    // private $db = 'assignment';
    // private $conn;

    // public function __construct()
    // {
    //     try {
    //         $this->conn = new mysqli(
    //             $this->server,
    //             $this->username,
    //             $this->password,
    //             $this->db
    //         );
    //     } catch (Exception $e) {
    //         echo 'connection failed' . $e->getMessage();
    //     }
    // }

    function getName()
    {
        return $name;
    }

    function getDescription()
    {
        return $description;
    }

    public function fetch()
    {
        $data = null;
        $mydat = new Database('assignment');
        $where = null;
        $order = 'Name ASC';
        if (isset($_POST['search'])) {
            $where = "Name like '%" . $_POST['search'] . "%'";
        }

        if (isset($_GET['order'])) {
            $order = 'Name DESC';
        }

        $query = $mydat->fetch('subjects', '*', $where, $order);
        // echo '<div class="info" id="wizard'.$row->id_wizard.'">';
        while ($row = $mydat->getResult()->fetch_object()) {
            echo '<div class="card text-center" id="subject' .
                $row->subjectID .
                '">';
            // ' . $row->ID . '">';
            echo "<div class='card-body'>";
            echo "<a href='read.php?id=" .
                $row->subjectID .
                "'
            '<h5 class='card-title'> $row->Name</h5>
            </a>";
            echo "<h5 class='card-title'>" . $row->Name . '</h5>';
            echo "<p class='card-text'>" . $row->Description . '</h5>';
            echo '<br />';
            echo '<br />';
            echo "<button class='button_up' onclick='deleteSubject(" .
                $row->subjectID .
                ")'>Delete </button>";
            echo "<a href='update.php?id=" .
                $row->subjectID .
                "' class='button_up'>
                        Change
                        </a>";
            echo '<br />';
            echo '<br />';
            echo '</div>';
            echo '</div>';
            echo '<br />';
        }
    }

    function allAssignmentsBySubjectId($id)
    {
        $mydat = new Database('assignment');
        $where = $id;
        $order = null;
        // $order = 'Name ASC';
        // if (isset($_POST['search'])) {
        //     $where = "Name like '%" . $_POST['search'] . "%'";
        // }

        // if (isset($_GET['order'])) {
        //     $order = 'Name DESC';
        // }

        $query = $mydat->fetchAllAssignmentBySubjectId('assignments', '*', $id);
        // echo '<div class="info" id="wizard' . $mydat . '">';

        // OVAKO MOZES DA SKINES FAJL!!!!!!!
        //     echo "<h3> <a href='read.php?id=" .
        //     $row->ID .
        //     ">
        //    '$row->Name
        // </a></h3>";
        while ($row = $mydat->getResult()->fetch_object()) {
            echo '<div class="card text-center" id="assignment' .
                $row->ID .
                '">';
            // ' . $row->ID . '">';
            echo "<div class='card-body'>";
            // echo "<a href='read.php?id=" . $row->ID .">';
            echo "<h5 class='card-title'>" . $row->Name . '</h5>';
            echo "<p class='card-text'>" . $row->Description . '</h5>';

            // $row->ID .
            "
               '<h3> $row->Name </h3>
            </a>";
            echo '<br />';
            echo '<h3>' . $row->Description . '</h3>';
            echo '<br />';
            echo "<button class='button_up' onclick='deleteSubject(" .
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
            echo '</div>';
            echo '<br />';
        }
    }

    public function fetch_singleSubject($id)
    {
        $mydat = new Database('assignment');
        $where = $id;
        $order = null;
        // $order = 'Name ASC';
        $query = $mydat->fetchSingle('subjects', '*', $id);
        // OVAKO MOZES DA SKINES FAJL!!!!!!!
        //     echo "<h3> <a href='read.php?id=" .
        //     $row->ID .
        //     ">
        //    '$row->Name
        // </a></h3>";

        while ($row = $mydat->getResult()->fetch_object()) {
            echo '<div class="info" id="wizard' . $row->subjectID . '">';
            echo '<h3>' . $row->Name . '</h3>';
            echo "<a href='addAssignmet.php?id=" .
                $row->subjectID .
                "' class='button_up'>
                    Add New Assignment
                    </a>";
            echo '<br />';
            echo '<h3>' . $row->Description . '</h3>';
            echo '<br />';
            echo "<a href='update.php?id=" .
                $row->subjectID .
                "' class='button_up'>
                    Change
                    </a>";
            echo "<button class='button_up' onclick='deleteSubject(" .
                $row->subjectID .
                ")'>Delete </button>";
            echo '<br />';
            echo '<br />';
            echo '</div>';
        }
        $this->allAssignmentsBySubjectId($id);
    }

    function viewsAssignments()
    {
        $mydat = new Database('assignment');
        $where = null;
        $order = null;
        // $order = 'Name ASC';
        if (isset($_POST['search'])) {
            $where = "Name like '%" . $_POST['search'] . "%'";
        }

        if (isset($_GET['order'])) {
            $order = 'Name DESC';
        }

        $query = $mydat->select(
            'assignments',
            '*',
            'subjects',
            'subjectID',
            'subjectID',
            $where,
            $order
        );
        // OVAKO MOZES DA SKINES FAJL!!!!!!!
        //     echo "<h3> <a href='read.php?id=" .
        //     $row->ID .
        //     ">
        //    '$row->Name
        // </a></h3>";

        while ($row = $mydat->getResult()->fetch_object()) {
            echo '<div class="info" id="wizard' . $row->ID . '">';
            echo "<a href='read.php?id=" .
                $row->ID .
                "
               '<h3> $row->Name </h3>
            </a>";
            echo '<br />';
            echo '<h3>' . $row->Description . '</h3>';
            echo '<br />';
            echo "<button class='button_up' onclick='deleteSubject(" .
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
    }

    public function insert()
    {
        if (isset($_POST['submit'])) {
            if (
                isset($_POST['name']) &&
                isset($_POST['email']) &&
                isset($_POST['mobile']) &&
                isset($_POST['address'])
            ) {
                if (
                    !empty($_POST['name']) &&
                    !empty($_POST['email']) &&
                    !empty($_POST['mobile']) &&
                    !empty($_POST['address'])
                ) {
                    $name = $_POST['name'];
                    $mobile = $_POST['mobile'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];

                    $query = "INSERT INTO records (name,email,mobile,address) VALUES ('$name','$email','$mobile','$address')";
                    if ($sql = $this->conn->query($query)) {
                        echo "<script>alert('records added successfully');</script>";
                        echo "<script>window.location.href = 'index.php';</script>";
                    } else {
                        echo "<script>alert('failed');</script>";
                        echo "<script>window.location.href = 'index.php';</script>";
                    }
                } else {
                    echo "<script>alert('empty');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }
            }
        }
    }
}
?>
