<?php
include "header.php";
$job_id=$_POST['job_id'];
?>



<br/>
<br/>
<br/> 
<br/>
    <div class="mt-5 w-50 mx-auto">
      <h5 class="modal-title" id="exampleModalLabel">সিভি জমা দেওয়ার নিয়ম</h5> <br />
      <p>১। সিভি জমা দেওয়ার পূর্বে অবশ্যই ফি ১৫০ টাকা জমা দিতে হবে। </p>
      <p>২। অ্যাপ্লিকেশন ফর্ম এ সঠিক তথ্য দিন। ফি অবশ্যই নিম্নোক্ত বিকাশ / নগদ নাম্বার এ প্রেরণ করুন। </p>
      <p>৩। সিভি ফাইল আপলোড করে সাবমিট করুন।  </p>
      
      <p>৪। তথ্যসমূহ অবশ্যই ইংরেজীতে পূরণ করতে হবে। </p>
    
      <p>বিকাশ পারসোনালঃ 01962 439 985 </p>
      <p>নগদঃ 01773 637 788</p>
   </div>

       
   <form action="upload.php" method="post" enctype="multipart/form-data" class="mt-5 w-50 mx-auto">
           
         <input type="hidden" class="form-control" name="job_id" id="name" placeholder="<?php echo $job_id;?>" value="<?php echo $job_id;?>" required>
      
      <div class="mb-3 mt-3">      
         <input type="text" class="form-control"  name="app_name"  id="name" placeholder="Write Your Name in English" required>
      </div>  
      
      <div class="mb-3 mt-3">    
         <input type="text" class="form-control"  name="app_phone"  id="name" placeholder="Type Here Your Phone Number in English" required>
      </div>
      
      <div class="mb-3 mt-3">
         <select class="form-control" name="app_payment_method" id="name" required>
            <option value="">পেমেন্ট মেথড বাছাই করুন</option>
            <option value="Bkash">Bkash</option>
            <option value="Nagad">Nagad</option>
         </select>
      </div>   
      
      <div class="mb-3 mt-3"> 
         <input type="text" class="form-control"  name="tk_sender" id="name" placeholder="Tk Sender Number" required>
      </div>   
      
      <div class="mb-3 mt-3">  
         <input type="text" class="form-control"  name="email" id="name" placeholder="Type Here Your Email Address" required>
      </div>
      
      <div class="mb-3 mt-3">  
         <input type="password" class="form-control"  name="password" id="name" placeholder="Type Here a Strong Password" required>
      </div>  
      
      <div class="mb-3 mt-3">  
         <input type="file" name="pdf_file" accept="application/pdf" required>
      </div>
      
         <button type="submit" name="submit" class="btn btn-secondary">আপলোড করুন</button>

   </form>




<?php include "footer.php";?>