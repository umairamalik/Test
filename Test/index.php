<!Doctype html>
<html>
<head>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>
       
    </title>
</head>


<body>










   
                           <div style="margin-top:100px">

                            <div class="container" >
                              <div class="panel panel-primary">
                              <div class="panel panel-heading"> <h1>Customer Details</h1></div>
   
                             <div class ="panel panel-body">
                                <div class="row">
    

                            <form action="action.php"  method="post" enctype="multipart/form-data" >
                           
                             
                            <div class="form-row"style="padding-bottom:20px">
                            <div class="col-md-4 mb-3">
                           <label for="validationDefault01"> Customer Name</label>
                           <input type="text" name="name" required class="form-control"placeholder="Name"  required/>
                            </div>
                            <div class="col-md-4 mb-3">
                            <lable  for="validationDefault01">Customer Address:</lable>
                            <input type="text" name="address" class="form-control" placeholder="Address" required/>
                            </div>
                            <div class="col-md-4 mb-3">
                            
                            <lable for="validationDefault01"> Customer Contact: </lable>
                            <input type="text" name="contact" placeholder="contact"  class="form-control" required/><br>
                            </div>
                            <div class="col-md-4 mb-3">  
                            <lable for="validationDefault01" >Aadhar Number:</lable>
                            <input type="text"class="form-control" placeholder="Adhaar"  name="adharno" required/></div>
                            </div>
                            <div class="col-md-4 mb-3">   
                            <lable  for="validationDefault01">Aadhar Front</lable>                           
                            <input type="file" name="image" class=" form-control btn-primary"  id="profile-img" required/>
                            <img src="" id="profile-img-tag"  />
                            </div>


                                    <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                
                                                reader.onload = function (e) {
                                                    $('#profile-img-tag').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#profile-img").change(function(){
                                            readURL(this);
                                        });
                                    </script><br>
                                    <div class="col-md-4 mb-3">
                            
                           <lable align="right">Aadharback:</lable>  <br>                          
                            <input type="file" class=" form-control btn-primary" name="back" id="back-img" required/><br>
                                    <img src="" id="back-img-tag"/>
                                    </div>

                                    <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                
                                                reader.onload = function (e) {
                                                    $('#back-img-tag').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#back-img").change(function(){
                                            readURL(this);
                                        });
                                    </script>
                                    <div class="row" style="margin-left: 500px">
                            <input type="submit" name="Register" value="submit" class="btn-success"/>
               </div>
                    
        </form>
                   </div>
               </div>
           </div>
       </div>
   

</body>
</html>