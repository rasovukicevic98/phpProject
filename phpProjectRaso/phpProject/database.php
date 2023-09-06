<?php
class Database
{
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname;
    private $dblink;
    private $result;
    private $records;
    private $affected; // private $db = 'assignment';
    private $conn;

    function __construct($par_dbname)
    {
        $this->dbname = $par_dbname;
        $this->dblink = new mysqli(
            $this->hostname,
            $this->username,
            $this->password,
            $this->dbname
        );
        if ($this->dblink->connect_errno) {
            printf("Konekcija nije uspela: %s\n", $this->dblink->connect_error);
            exit();
        }
        $this->dblink->set_charset('utf8');
    }

    function ExecuteQuery($query)
    {
        try {
            $this->result = $this->dblink->query($query);
        } catch (Exception $e) {
            #print_r($this->dblink->error);
            return false;
        }
        if ($this->result) {
            if (isset($this->result->num_rows)) {
                $this->records = $this->result->num_rows;
            }
            if (isset($this->result->affected_rows)) {
                $this->affected = $this->result->affected_rows;
            }
            return true;
        } else {
            #print_r($this->dblink->error);
            return false;
        }
    }

    function getResult()
    {
        return $this->result;
    }

    public function fetch(
        $table = 'subjects',
        $rows = '*',
        $where = null,
        $order = null
    ) {
        $data = null;

        $q = 'SELECT ' . $rows . ' FROM ' . $table;

        if ($where != null) {
            $q .= ' WHERE ' . $where;
        }
        if ($order != null) {
            $q .= ' ORDER BY ' . $order;
        }

        $this->ExecuteQuery($q);
        return $q;
    }

    public function fetchAllAssignmentBySubjectId(
        $table = 'assignments',
        $rows = '*',
        $id
    ) {
        $data = null;

        $q = 'SELECT ' . $rows . ' FROM ' . $table . ' WHERE subjectID=' . $id;
        $this->ExecuteQuery($q);
        return $q;
    }

    public function fetchSingle($table = 'subjects', $rows = '*', $id)
    {
        $data = null;

        $q = 'SELECT ' . $rows . ' FROM ' . $table . ' WHERE subjectID=' . $id;
        $this->ExecuteQuery($q);
        return $q;
    }

    function select(
        $table = 'assignments',
        $rows = '*',
        $join_table = 'subjects',
        $join_key1 = 'subjectID',
        $join_key2 = 'subjectID',
        $where = null,
        $order = null
    ) {
        $q = 'SELECT ' . $rows . ' FROM ' . $table;

        if ($join_table != null) {
            $q .=
                ' JOIN ' .
                $join_table .
                ' ON ' .
                $table .
                '.' .
                $join_key1 .
                ' = ' .
                $join_table .
                '.' .
                $join_key2;
        }

        if ($where != null) {
            $q .= ' WHERE ' . $where;
        }
        if ($order != null) {
            $q .= ' ORDER BY ' . $order;
        }

        $this->ExecuteQuery($q);
        return $q;
    }

    function insert(
        $table = 'subjects',
        $rows = 'subjectID, name, espb, description',
        $values
    ) {
        $query_values = implode(',', $values);
        $q = 'INSERT INTO ' . $table;
        if ($rows != null) {
            $q .= '(' . $rows . ')';
        }
        $q .= " VALUES($query_values)";

        if ($this->ExecuteQuery($q)) {
            return true;
        } else {
            return false;
        }
    }

    function insertAssignment(
        $table = 'assignments',
        $rows = 'Name, Description,subjectID, courseID',
        $values
    ) {
        echo "<script>alert('empty' +  $values->Name);</script>";
        $query_values = implode(',', $values);
        $q = 'INSERT INTO ' . $table;
        if ($rows != null) {
            $q .= '(' . $rows . ')';
        }
        $q .= " VALUES($query_values)";

        if ($this->ExecuteQuery($q)) {
            return true;
        } else {
            return false;
        }
    }

    function update($id, $name, $description, $espb)
    {
        $update = sprintf(
            "UPDATE subjects SET Name='%s', Description='%s', ESPB ='%s' WHERE subjectID=%d",
            $name,
            $description,
            $espb,
            $id
        );

        return $this->ExecuteQuery($update);
    }

    function delete($id)
    {
        $delete = 'DELETE FROM subjects WHERE subjectID=' . $id;

        return $this->ExecuteQuery($delete);
    }
}
