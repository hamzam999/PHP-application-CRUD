<?php

include('contact.php');

$id=$_GET['id'];
    if(isset($_POST['update']))
	{
	$u_name = $_POST["newName"];
	$u_email = $_POST["newEmail"];
	$u_phone = $_POST["newphone"];

	if(!empty($u_name)){
				mysqli_query($conn, "UPDATE user_details SET user_name='$u_name' WHERE id=$id");		
	}
	if(!empty($u_phone)){
				mysqli_query($conn, "UPDATE user_details SET user_phone='$u_phone' WHERE id=$id");
			}
	if(!empty($u_email)){
			mysqli_query($conn, "UPDATE user_details SET user_email='$u_email' WHERE id=$id");		
	}
}
?>



<html>
<head>
<h1>UPDATE FORM</h1>

</head>
<body>
    <div>
        <form method="post">
            <div>
                <label >Name</label> 
                 <input type="text"  name="newName"
                    id="newName" placeholder="FULL NAME" />
            </div>
            <div>
                <label>Phone</label> <input type="text"
                     name="newphone" id="newphone" placeholder="9876543210" />
            </div>

            <div>
                <label>Email</label> <input type="text"
                     name="newEmail" id="newEmail" placeholder="example@example.com" />
            </div>         
            
            <br>
                <button type="submit" name="update">UPDATE</button>
            <br>
             </form>
            
       

    </div>

 
</body>
</html>