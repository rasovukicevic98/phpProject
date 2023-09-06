<?php

function get_subjects()
{
    global $db;
    $query = 'SELECT * FROM subjects ORDER BY ID';
    $statement = $db->prepare($query);
    $statement->execute();
    $subjects = $statement->fetchAll();
    $statement->closeCursor();
    return $subjects;
}

function get_subject_name($subject_id)
{
    if (!$subject_id) {
        return 'All Subjects';
    }
    global $db;
    $query = 'SELECT * FROM subjects WHERE ID = :subject_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':subject_id', $subject_id);
    $statement->execute();
    $subject = $statement->fetch();
    $statement->closeCursor();
    $subject_name = $subject['Name'];
    return $subject_name;
}

function delete_subject($subject_id)
{
    global $db;
    $query = 'DELETE FROM subjects WHERE ID = :subject_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':subject_id', $subject_id);
    $statement->execute();
    $subjects = $statement->fetchAll();
    $statement->closeCursor();
}

function add_subject($name, $espb, $description)
{
    global $db;
    $query = 'INSERT INTO subjects (Name, ESPB, Description) VALUES (:name, :espb, :desc)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':espb', $espb);
    $statement->bindValue(':desc', $description);
    $statement->execute();
    $statement->closeCursor();
}
