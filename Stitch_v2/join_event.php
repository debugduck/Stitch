<?php
  $signup_message = '';
  include "connect_db.php";
 
  session_start();
  $user = "";
  if(isset($_SESSION['login_user'])){
    $user = $_SESSION['login_user'];
    $user_id = $_SESSION['login_id']; //get user_id
  }
  $table_name = 'user_events';

  function joinUser(user_id,event_id)
  {
    $query = "INSERT INTO $table_name (id,user_id,event_id) 
          VALUES (,'$user_id','$event_id')";
  
    $result = mysqli_query($conn, $query);
    if(!$result) {
      return;
    }
  
  }
}
  mysqli_close($conn);
  }
  