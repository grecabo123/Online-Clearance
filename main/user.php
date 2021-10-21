<?php  
    
    require 'connector/connect.php';
    session_start();
    if ($_SESSION['user_email']) {
        $email = $_SESSION['user_email'];
        $search = "SELECT *from profile";
        $result = mysqli_query($conn,$search);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['Email'] == $email) {
                $user_fname = $row['first_name'];
                $user_mname = $row['middle_name'];
                $user_lname = $row['last_name'];
                $user_age = $row['age'];
                $user_gender = $row['gender'];
                $user_email = $row['Email'];
                $user_contact = $row['contact'];
                $user_id = $row['ProfileID'];
                All_data($user_fname,$user_mname,$user_lname,$user_age,$user_gender,$user_email,$user_contact,$user_id);
            }
        }

    }
    else {
        header("location: index");
        exit();
    }

?>


<?php  

    
    function All_data($user_fname,$user_mname,$user_lname,$user_age,$user_gender,$user_email,$user_contact,$user_id){
        ?>  
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title><?php echo $user_fname." ".$user_lname; ?></title>
                <link rel="stylesheet" href="css/user.css">
                <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
            </head>
            <body>

            <div class="content">
                <div class="sidebar">
                    <a href="user" style="text-decoration: none;"><h2>Dashboard</h2></a>
                    <ul>
                        <!-- <li><a href="#">Home</a></li> -->
                        <li><a href="#">Notification</a></li>
                        <li><a href="#">Collegiate</a></li>
                        <li><a href="#">Graduate Course</a></li>
                        <li><a href="#">Document</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Fsuu Website</a></li>
                        <li><a href="logout">Logout</a></li>
                    </ul> 
                </div>
                <div class="main_content">
                    <div class="header">
                        <p><b>Name:&nbsp</b><span><?php echo $user_fname." ".$user_lname;; ?></span></p>
                    </div>  
                    <div class="info">
                        <p>Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Distinctio fugiat architecto molestiae non voluptates dolorem at esse praesentium ullam incidunt ipsum harum ratione assumenda sapiente veniam soluta, tempore ad enim. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit recusandae in laborum unde voluptates quas minima modi distinctio odit. Eligendi, temporibus consequuntur, error a nobis optio tempore sequi. Consectetur, obcaecati. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt impedit neque architecto. Eum dicta et veritatis inventore, modi quam praesentium molestias deserunt, delectus vel nulla doloremque veniam excepturi placeat fugiat.</p>
                  </div>
                </div>
            </div>
        <?php
    }


?>



</body>
</html>