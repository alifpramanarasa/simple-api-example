<?php
    include 'conn.php';

    $conn = OpenCon();
    
    // Get User Data
    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {        
        $data = array();
        
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        echo json_encode($data);
    } else {
        $data = array();

        $data['code'] = 500;

        echo json_encode($data);
    }

?>