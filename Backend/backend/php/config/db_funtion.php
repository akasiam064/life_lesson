<?php

include("../config/condb.php");

if  ( mysqli_connect_errno()) {
   echo "Error". mysqli_connect_error();
}

   function validate($inputdata) {

    global $connect;
    $validateData = mysqli_real_escape_string( $connect, $inputdata );
    return trim($validateData);

   }

   function redirect($url, $status){

    $_SESSION['$status'] = $status;
    header('Location: ' .$url);
    exit(0);
   }

   function alertMessage(){

    if(isset($_SESSION['$status'])){
        echo $_SESSION['status'];
        echo'
        
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <h6>'.$_SESSION['status'].'</h6>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        ';
        unset($_SESSION['status']);
    }
   }


   function insert($tableName , $data) {
    global $connect;
    $table = validate($tableName);
    $collumns = array_keys($data);
    $values = array_values($data);

    $finalColumn = implode(',', $collumns);
    $finalValue = "'".implode("','", $values)."'";

    $query = "INSERT INTO $table ($finalColumn) VALUES ($finalValue)";
    $result = mysqli_query($connect, $query);
    return $result;
   }
  
   
   function update($tableName , $id, $data){
    global $connect ;
    $table = validate($tableName);
    $id = validate($id);

    $updateDataString = "";

    foreach($data as $column => $value) {
        $updateDataString .= $column. '='. "'$value',";
    }

    $finalDataupdate = substr(trim($updateDataString),0,-1);

    $query = "UPDATE $table SET $finalDataupdate Where id=''$id";
    $result = mysqli_query($connect, $query);
    return $result;

   }

   
    function getall($tableName, $status = Null) {
        global $connect;

        $table = validate($tableName);
        $status = validate($status);

        if($status == 'status') {

            $quely = "SELECT * FROM $table Where $status= '0'";

        }

        else {
            $quely = "SELECT * FROM $table ";
        }
        return mysqli_query($connect, $quely);
    }
   

    function  getByid($tableName, $id) {
        global $connect;

        $table = validate($tableName);
        $id = validate($id);

        $query = "SELECT * FROM $table WHERE  id='$id' LIMIT 1";
        $result = mysqli_query($connect, $query);

        if ($result) {   
            if(mysqli_num_rows ($result) == 1) {
                //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $row = mysqli_fetch_assoc($result);
                $response = [
                    'status' => 200,
                    'data' => $row,
                    'message' => 'พบบันทึก'
                ];
            }        else {
                $response = [
                    'status' => 404,
                    'message' => 'ไม่มีข้อมูล'
                ];
            }
        }else {
            $response = [
                'status' => 500,
                'message' => 'บางอย่างผิดพลาด'
            ];
            return $response;
        }

    }

    function Delete ($tableName, $id) {
        global $connect;

        $table = validate($tableName);
        $id = validate($id);

        $query = "DELETE FROM $table WHERE id='$id' LIMIT 1 ";
        $result = mysqli_query($connect, $query);
        return $result;
    }


?>