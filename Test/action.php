<?php 
    if(isset($_POST['Register']))
    {
        $name = $_POST['name'];
          $contact = $_POST['contact'];
        $address = $_POST['address'];
      
        $adharno =$_POST['adharno'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp,"images/$image");

         $back = $_FILES['back']['name'];
         $back_temp = $_FILES['back']['temp_name'];
         

        move_uploaded_file($back_temp,"img/$back");

        $con = mysqli_connect("localhost","root","","customerreg");

        $query = "insert into register (name,contact,address,adharno,image,back) values ('$name','$address','$contact','$adharno','$image','$back')";

        $result = mysqli_query($con, $query);

        if($result==1)
        {       
           echo "Inserted successfully";
        
         
         header("Location:redirect.php"); 


        
        }
        else {       

        echo "Insertion Failed";

             }
    }
?>