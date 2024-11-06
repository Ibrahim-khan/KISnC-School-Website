<?php 
    include "header.php";
?>
<div style = "margin-top: 200px; text-align:center; font-weight: bold">

<?php
		  require "connection.php";


if(isset($_POST['submit'])){
    $file_name = $_FILES['pdf_file']['name'];
    $file_tmp = $_FILES['pdf_file']['tmp_name'];
    $file_path = "uploads/" . $file_name;
    $job_id=$_POST['job_id'];
     $app_name=$_POST['app_name'];
      $app_phone=$_POST['app_phone'];
       $app_payment_method=$_POST['app_payment_method'];
           $tk_sender=$_POST['tk_sender'];
            $email=$_POST['email'];
                 $password=$_POST['password'];
                 
       	
			$div = explode('.',$file_name);
					$file_ext = strtolower(end($div));
	
					
					
       
$select = "SELECT * FROM `teacher_applicant` where app_name = '$app_name' and app_phone = '$app_phone'";
    
$dat = mysqli_query($con, $select);
 
$total=mysqli_num_rows($dat)>0;


if($total){
    $rominfarhana=mysqli_fetch_array($dat);
	$applicant_id=$rominfarhana['applicant_id'];
    
    
    echo "<h2> আপনি ইতিমধ্যে আবেদন করেছেন। আপনার এনরোল আইডি ".$applicant_id."</h2>"; 
    ?>
    
    			<div class="mx-auto mt-5">
    <button type="submit" name="submit" class="btn btn-secondary">
         <a href="admit_cardattempt.php?applicant_id=<?php echo   $last_id;?>"><i class="fa fa-print"> </i>   এডমিট কার্ড ডাউনলোড করুন  </a>
        
      </button>
</div>
    
    <?php
    
    
    
}else{

    // File Upload to Directory
    if(move_uploaded_file($file_tmp, $file_path)){
        if($file_ext=='pdf'){
        
        
        //Info Saving into Database
        
$insert1 ="INSERT INTO `teacher_applicant` (`applicant_id`, `job_id`, `app_name`, `app_phone`, `app_payment_method`, `tk_sender_phone`, `email`, `password`, `cv_dirctory`) VALUES (NULL, '$job_id', '$app_name', '$app_phone', '$app_payment_method', '$tk_sender', '$email', '$password', '$file_path')";
								
						 $data1 = mysqli_query($con, $insert1);
						  if($data1){
							$last_id= mysqli_insert_id($con);
							
								 echo "<h3> আপনার তথ্যাবলি সফলভাবে সংযুক্ত হয়েছে। আপনার এনরোল আইডি   </h3> ".$last_id;
							?>
					<div class="mx-auto mt-5">
    <button type="submit" name="submit" class="btn btn-secondary">
         <a href="admit_card.php?applicant_id=<?php echo   $last_id;?>"><i class="fa fa-print"> </i>   এডমিট কার্ড ডাউনলোড করুন  </a>
        
      </button>
</div>

							<?php					 
						 }
						 
						 else{
							 echo "তথ্যাবলী সংযুক্ত হয় নি। আবার চেষ্টা করুন!";
							?>
					<div class="mx-auto mt-5">
					    <form action="cvsub.php" method= "POST">
					        <input type ="text" value= "<?php echo $job_id;?>"
    <button type="submit" name="submit" class="btn btn-secondary">
         <i class="fa fa-print"> </i>   ফিরে যান </a>
        
      </button>
      </form>
</div>

							<?php
					
						 }
   
   
   
   
        }else{
           echo "শুধুমাত্র পিডিএফ ফাইল নির্বাচন করুন।"; 
       ?>
      		<div class="mx-auto mt-5">
    <button type="submit" name="submit" class="btn btn-secondary">
         <a href="job-notice.php"><i class="fa fa-print"> </i> ফিরে যান</a>
        
      </button>
</div>
       
       <?php
       
        }
   
   
    } else {
        echo "সিভি আপলোড হয় নি । আবার চেষ্টা করুন।";
    
          ?>
      		<div class="mx-auto mt-5">
    <button type="submit" name="submit" class="btn btn-secondary">
         <a href="job-notice.php"><i class="fa fa-print"> </i> ফিরে যান</a>
        
      </button>
</div>
       
       <?php
       
        
    }
}
}


?>


</div>

<?php 
    include "footer.php";
?>