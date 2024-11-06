<?php
   include "./header.php" 
?>


    <!--Notice Start-->
    <div class="notice">
        <div class="notice-article">
            <div class="notice-header">
                <h4>**** নিয়োগ বিজ্ঞপ্তি  ****</h4>
            </div>
            <div class="notice-form">
                <p>
                    কচাকাটা আইডিয়াল স্কুল অ্যান্ড কলেজে নিম্নোক্ত পদে কিছু সংখ্যক শিক্ষক নিয়োগ করা হবে। <br />
                    যোগ্যতাঃ সংশ্লিষ্ট বিষয়ে অনার্স/মাস্টার্স/সমমান।
                </p>
            </div>

            <!--Table start-->
            <!--Teacher Table start-->
            <div class="container mt-5">  
                <h2>সহকারী শিক্ষক</h2>              
                <table class="table table-bordered table-striped">
                  <thead class="thead-dark">
                    <tr>
                      <th>ক্রমিক</th>
                      <th>বিষয়</th>
                      <th>পদের সংখ্যা</th>
                      <th>অ্যাকশন</th>
                    </tr>
                  </thead>
                     <tbody>
                        <?php
                          $no=1;
                          require "connection.php";
                          $shammi0 = mysqli_query($con,"SELECT * FROM teacher_appointment");
                          $milon0=mysqli_num_rows($shammi0);
                          if($milon0>0){
    	                    while ($kolpona0 = mysqli_fetch_array($shammi0)){
    	                    $job_id=$kolpona0['job_id'];
    	                    $post=$kolpona0['post'];
    	                    $subject=$kolpona0['subject'];
    	                    $qty=$kolpona0['qty'];
    	                  ?>
    	            
                              <tr>
                                  <th> <?php echo $no; ?></th></th>
                                  <th scope="col"><?php echo $subject;?></th>                         
                                  <th scope="col"><?php echo $qty;?></th>
                                  <th>  

                                    <form action= "cvsub.php" method = "POST">               
                                    <input class="form-control"  type="hidden" name="job_id" 
                                      value=" <?php echo $job_id;?>">                     
                                    <button type="submit" class="btn btn-danger"> সিভি জমা দিন</button>
                                    </form>                                       
                                  </th> 
                              </tr>
                                
                                
    	                  <?php 
    	                    $no++;   	    
    	                }
    
                  }
                        ?>
                      </tbody>
                </table>
            </div>
            <!--Teacher Table end-->

              <!--Staff Table start-->
              <div class="container mt-5">  
                <h2>অফিস সহকারী</h2>   
                <div class="notice-form">
                    <p>
                        কচাকাটা আইডিয়াল স্কুল অ্যান্ড কলেজে নিম্নোক্ত পদে অফিস সহকারী নিয়োগ করা হবে। <br />
                        যোগ্যতাঃ এইচএসসি পাশ, কম্পিউটার চালনায় পারদর্শী হতে হবে।
                    </p>
                </div>           
                <table class="table table-bordered table-striped">
                  <thead class="thead-dark">
                    <tr>
                      <th>ক্রমিক</th>
                      <th>বিষয়</th>
                      <th>পদের সংখ্যা</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>১</td>
                      <td>কম্পিউটার দক্ষতা</td>
                      <td>১</td>
                    </tr>                             
                  </tbody>
                </table>
                <p> সরাসরি প্রতিষ্ঠানে সিভি জমা দিন। </p>
              </div>
              <!--Staff Table end-->
            <!--Table end-->


            <!--Staff Table start-->
            <div class="container mt-5">  
                <h2>কর্মচারী</h2>   
                <div class="notice-form">
                    <p>
                        কচাকাটা আইডিয়াল স্কুল অ্যান্ড কলেজে নিম্নোক্ত পদে কিছু সংখ্যক কর্মচারী নিয়োগ করা হবে। <br />
                        যোগ্যতাঃ অষ্টম শ্রেনী / এসএসসি।
                    </p>
                </div>           
                <table class="table table-bordered table-striped">
                  <thead class="thead-dark">                   
                  </thead>
                  <tbody>
                    <tr>
                      <td>১</td>
                      <td>সিকিউরিটি</td> 
                      <td>১</td>
                    </tr>
                    <tr>
                      <td>২</td>
                      <td>আয়া</td> 
                      <td>১</td>
                    </tr>                   
                  </tbody>
                </table>
                <p>কর্মচারীবৃন্দের সিভি সরাসরি প্রতিষ্ঠানে জমা দিন। </p>
              </div>
              <!--Staff Table end-->
        </div>
    </div>
    <!--Notice End-->

    
<!-- Footer Start -->
<?php 
  include "./footer.php";
?>