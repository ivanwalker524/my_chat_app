<?php
// session_start();
// // include_once "./config.php";
// $fname= mysqli_real_escape_string($conn,$_POST['fname']);
// $lname= mysqli_real_escape_string($conn,$_POST['lname']);
// $emai= mysqli_real_escape_string($conn,$_POST['email']);
// $password= mysqli_real_escape_string($conn,$_POST['password']);
// if(!empty($fname) && !empty($lname) && !empty($emai) && !empty($password)){
//     if(filter_var($emal,FILTER_VALIDATE_EMAIL)){ //check email wether it is valid
//         $sql= mysqli_query($conn, "SELECT * FROM whatsapp WHERE email = '$email'");
//         if(mysqli_num_rows($sql) > 0){
//             echo "$emai . This email is already exist!";
//         }else{
//             echo "This email is not valid";
//         }
//     }
//     //check user uploaded file or not
//     if(isset($_FILES['image'])){ // if file is uploded
//         $img_name=$_FILES['image']['img_name'];//geting uploaded file name
//         $tmp_name=$_FILES['image']['tmp_name'];//tempolary name is used to save/move file in the folder
//     }
//     //explode image and get the last extension like jpg jpn etc..
//     $img_explode=explode('.',$img_name);
//     $img_ext=end($img_explode);
//     $extensions=['npg','jpng','jpg','NPG','JPNG','JPG'];//These are some of images extensions and we h've stored them in the array
//     if(in_array($img_ext,$extensions) === true){
//         $time=time();//This will return current time
        
//         //let's move user uploaded image to the our particullar folder
//         $new_img_name=$time.$img_name;
//         if(move_uploaded_file($tmp_name,"images/" . $new_img_name)){//If user upload image, move to our folder successefully
//             $status= "Active now";
//             $random_id=rand(time(),1000000);//creating random id for user

//             //insert all user data in the table
//             $sql2=mysqli_query($conn,"INSERT INTO whatsapp(unique_id,fname,lname,email,img,password) VALUES('$random_id','$fname',
//             '$lname','$email','$new_img_name','$status')");
//             if($sql2){
//                 $sql3=mysqli_query($conn,"SELECT * FROM whatsapp WHERE email= '$email'");
//                 if(mysqli_num_rows($sql3) > 0){
//                     $row=mysqli_fetch_assoc($sql3);
//                     // $_SESSION=['unique_id'] = $row['unique_id'];
//                     echo "Success";
//                 }
//             }else{
//                 mysqli_connect_error($conn);
//                 echo "Something went wrong";
//             }
//         }else{
//             echo "Please select image jpg,jpng JPG....";
//         }
//     }else{
//         echo "Please select file";
//     }
//     // $file = $_FILES['images'];
//     // $destination= "uploads/images/".$file['name'];
//     // $tmp = $file['tmp_name'];

//     // move_uploaded_file($tmp,$destination);
// }else{
//     echo "All fields are required!";
// }
?>