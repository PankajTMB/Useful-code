    
<?php
if(isset($_POST['submit'])){

    //$target_dir = "https://uiuxdesigner.online/";
    $target_dir = $_SERVER['DOCUMENT_ROOT'].'/assets/uploads/';
    // echo $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
   //echo "<a href=".$_SERVER['DOCUMENT_ROOT']."/assets/uploads/".$_FILES["file"]["name"].">View</a>";

    // echo "<pre>";
    // print_r($_POST);
    //  print_r($_FILES['file']["tmp_name"]);
    // die;

     if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {


        $to = "Example@gmail.com";

        $subject = 'UIUX Form';
        $message = '
        <html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <p>This email contains HTML Tags!</p>
        <table>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <td>Message</td>
        <td>Message</td>
        <td>option</td>
        <td>file</td>
        </tr>
        <tr>
        <td>'.$_POST['Name'].'</td>
        <td>'.$_POST['Email'].'</td>
        <td>'.$_POST['Message'].'</td>
        <td >'.$_POST['Number'].'</td>
        <td >'.$_POST['option'].'</td>
        <td ><a href="https://uiuxdesigner.online/assets/uploads/'.$_FILES["file"]["name"].'">View</a></td>
        </tr>
        </table>
        </body>
        </html>
        ';
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From:'.$_POST['Email']."\r\n";
        //$headers .= 'Cc: myboss@example.com' . "\r\n";

        mail($to,$subject,$message,$headers);
        //Header("Location : http://themadbrains.com/");

        echo '<script> 
                alert("Thank you for contacting Us");
                window.location.href= "https://uiuxdesigner.online/" ;
            </script>';
    }else {
        echo '<script> 
            alert("Sorry, there was an error uploading your file. Please upload file.");
            window.location.href= "https://uiuxdesigner.online/" ;
        </script>';
    }

}
?>