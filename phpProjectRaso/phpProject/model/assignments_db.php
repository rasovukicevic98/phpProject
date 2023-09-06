<?php

function get_assignments_by_course($course_id)
{
    global $db;

    if ($course_id) {
        $query = 'SELECT A.ID, A.Description, C.courseName FROM assignment A 
            LEFT JOIN courses C ON A.courseID = C.courseID WHERE A.courseID =:course_id ORDER BY A.ID';
    } else {
        $query = 'SELECT A.ID, A.Description, C.courseName FROM assignment A 
            LEFT JOIN courses C ON A.courseID = C.courseID ORDER BY C.courseID';
    }
    $statement = $db->prepare($query);
    $statement->bindValue(':course_id', $course_id);
    $statement->execute();
    $assignments = $statement->fetchAll();
    $statement->closeCursor();
    return $assignments;
}

function delete_assignment($assignment_id)
{
    global $db;
    $query = 'DELETE FROM assignment WHERE ID = :assignment_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':assignment_id', $assignment_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_assignment($subject_id, $course_id, $description)
{
    global $db;
    $query =
        "INSERT INTO assignment (Description, subjectID, courseID) VALUES (:description, :subjectID,  :courseID')";
    $statement = $db->prepare($query);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':courseID', $course_id);
    $statement->bindValue(':subjectID', $subject_id);
    $statement->execute();
    $statement->closeCursor();
}

function get_assignments_by_Subject($subject_id)
{
    global $db;

    if ($subject_id) {
        $query = 'SELECT A.ID, A.Description, S.name FROM assignment A 
            LEFT JOIN subjects S ON A.subjectID = S.ID WHERE A.subjectID =:subject_id ORDER BY A.ID';
    } else {
        $query = 'SELECT A.ID, A.Description, S.name FROM assignment A 
            LEFT JOIN subjects S ON A.subjectID = S.ID ORDER BY S.ID';
    }
    $statement = $db->prepare($query);
    $statement->bindValue(':subject_id', $subject_id);
    $statement->execute();
    $assignments = $statement->fetchAll();
    $statement->closeCursor();
    return $assignments;
}
