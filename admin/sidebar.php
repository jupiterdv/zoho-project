<?php
session_start();
error_reporting(0);
include('admin/dbconnection.php');
?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
               
            </div>
            <div class="profile-usertitle">
                <?php
$uid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select Email from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['Email'];

?>
                <div class="profile-usertitle-name"><?php echo $name; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Live</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="dashboard.php"><em class="fa fa-home">&nbsp;</em> Comment</a>
               <li><a href="comment.php"> Add Comment</a></li>
             <li><a href="change-password.php"><em class="fa fa-clone">&nbsp;</em> Change Password</a></li>
<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
            </li>
            
           
  <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
               




         

        </ul>
    </div>