

<?php
session_start();
error_reporting(0);
include('admin/dbconnection.php');



if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    
    

}

 else {
    $query = "SELECT * FROM `tbluser`";
    

    $search_result = filterTable($query);
}

//connect and execute the query from database
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "u995265517_jupi", "Rajnagar98@#", "u995265517_jupiter");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<html>

 


	
	<?php include_once('admin/header.php');?>
	<?php include_once('admin/sidebar.php');?>
	<?php include_once('admin/dbconnection.php');?>

		
	 
  
    <body>
      
    <div class="wrap">

    	<table width='90%' border=0>
          
                <tr>
                     <th width='90%' border=0 class="text-primary">Comment</th>
                    <th class="text-primary">Name</th>
                    
                   
                    
                   
                    
                </tr>
</div>
</table>
<div class="wrap">
    <table>
      <tbody>
     
    
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <form>
                   
                    <td width='85%' border=0 > <label><?php  echo $row['Comment'];?></label></td>
                    
                    </label>
                    <br>
                    <td ><?php echo $row['FullName'];?></td>
                    
                 
                      </form>
                     
                   
                </tr>
                <?php endwhile;?>
            </table>
			
		

       
 
    	
			</div>
		</div><!--/.row-->
		
		
</body>
</html>
</html>