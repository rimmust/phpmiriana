<?php
function loadCart($conn)
{
    //connect with database sql to load form table named town
    $sql = "SELECT * FROM Town ;";

    //statment stmt
    //initlaize an sql using a connection 
    $stmt= mysqli_stmt_int($conn);
    //if not woking stop code
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        echo "Could not load Product";
        exit();
    }

    //execute the order
    mysqli_stmt_execute($stmt);
    //get result
    $result = mysqli_stmt_get_result($stmt);

    //close databse connection
    mysqli_stmt_close($stmt);

    return $result;
}
