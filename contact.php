<?php
	

	$conn = mysqli_connect("localhost", "root", "", "startupflux");

	if($conn->connect_error){
		die("connection failed: ".$conn->connect_error);
	}
	
//insert query	
	if(isset($_POST['add']))
	{
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$phone = $_POST["user_phone"];

	mysqli_query($conn, "INSERT INTO user_details (user_name,user_email, user_phone) VALUES ('$name','$email', '$phone')");
}

//read Query
$read=mysqli_query($conn,"SELECT * FROM user_details");

//update query
/*if(isset($_POST['update'])){

    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $phone = $_POST["user_phone"];

    if(!$name==NULL)
    {
    mysqli_query($conn, "INSERT INTO user_details (user_name) VALUES ('$name','$email', '$phone')");
    }   
}*/


//delete query on delete.php
?>

<html>
<head>
<h1><a href="contact.php"> Contact Us Form</a></h1>

</head>
<body>
    <div>
        <form method="post">
            <div>
                <label >Name</label> 
                 <input type="text"  name="userName"
                    id="userName" placeholder="FULL NAME" />
            </div>
            <div>
                <label>Phone</label> <input type="text"
                     name="user_phone" id="user_phone" placeholder="9876543210" />
            </div>

            <div>
                <label>Email</label> <input type="text"
                     name="userEmail" id="userEmail" placeholder="example@example.com" />
            </div>         
            
            <br>
                <button type="submit" name="add">ADD</button>
            <br>
             </form>
            <div>
            	<br>
            <table border="1" cellpadding="15">
  <tr>
    <td>Name</td>
    <td>Phone</td>
    <td>Email</td>
    <td>UPDATE</td>
    <td>DELETE</td>
  </tr>

<?php

while($data = mysqli_fetch_array($read))
{
?>
  <tr>  
    <td><?php echo $data['user_name']; ?></td>
    <td><?php echo $data['user_phone']; ?></td>
    <td><?php echo $data['user_email']; ?></td>

    <td>
        <a href="update.php?id='<?php echo $data['id']; ?>'">Update</a>
    </td>

    <td><a href="delete.php?id='<?php echo $data['id']; ?>'">Delete</a>   </td>


  </tr>	
<?php
}
?>
</table>



        </div>
       

    </div>

 
</body>
</html>