<?php
    include "header.php";
?>

<br />
<br />
<br />
<br />
<br />
<br />

<div class="container mt-5">
  <h5 class="text-center text-decoration-underline">ভর্তি ফর্ম পূরণের নিয়মঃ</h5>
  <br />
  <div class="d-flex flex-column flex-md-row justify-content-between">
    <!-- First Column (Left) -->
    <div class="mt-5 me-md-5">
      <p>১। ছাত্র-ছাত্রীর নাম, পিতার নাম, মাতার নাম, ফোন নাম্বার দিন।</p>
      <p>২। ছাত্র-ছাত্রীর ছবি দিন।</p>
      <p>৩। অ্যাপ্লিকেশন ফর্ম এ সঠিক তথ্য দিন।</p>
      <p>৪। ভর্তি ফি অবশ্যই নিম্নোক্ত বিকাশ / নগদ নাম্বার এ প্রেরণ করুন।</p>
      <p>৫। ফর্ম অবশ্যই ইংরেজীতে পূরণ করুন।</p>
      <p>বিকাশ পারসোনালঃ 01962 439 985</p>
      <p>নগদঃ 01773 637 788</p>
      <p>Note: Please write in English.</p>
    </div>
    <!-- Second Column (Right) -->
    <div class="mt-5">
      <p>
        <b>ভর্তি ফিঃ </b><br>
        ১) প্লে- নার্সারি ৮০০ টাকা।<br>
        ২) ১ম শ্রেণী থেকে ২য় শ্রেণী ১০০০ টাকা।<br>
        ৩) ৩য় এবং ৪র্থ শ্রেণী ১২০০ টাকা।<br>
        ৪) ৫ম শ্রেণী ১৫০০ টাকা।<br>
        ৫) ৬ষ্ঠ এবং ৭ম শ্রেণী ১৬০০ টাকা।<br>
        ৬) ৮ম শ্রেণী ১৮০০ টাকা।<br>
        ৭) নবম শ্রেণী ২২০০ টাকা।<br>
      </p>
    </div>
  </div>



    <div class="row justify-content-center">
      <div class="col-md-12 mt-5">    

        <form>

     
          <!-- Student's Name -->
          <div class="mb-3">
            <label for="name" class="form-label">Student's Name (English)</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">বাংলায়</label>
            <input type="text" class="form-control" id="name" placeholder="ছাত্র-ছাত্রীর নাম" required>
          </div>
          
            <!-- Father's Name -->
            <div class="mb-3">
              <label for="fathersName" class="form-label">Father's Name</label>
              <input type="text" class="form-control" id="fathersName" placeholder="Enter your Father's name" required>
            </div>
            <div class="row">
            <div class="col-md-9 mb-3">
              <label for="fathersName" class="form-label">বাংলায়</label>
              <input type="text" class="form-control" id="fathersName" placeholder="বাংলায় লিখুন" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="fathersName" class="form-label">পেশা</label>
              <input type="text" class="form-control" id="fathersName" placeholder="বাবার পেশা" required>
            </div>
          </div>

          <!-- Mother's Name -->
          <div class="mb-3">
              <label for="mothersName" class="form-label">Mother's Name</label>
              <input type="text" class="form-control" id="mothersName" placeholder="Enter your Mother's name" required>
            </div>

            <div class="row">
            <div class="col-md-9 mb-3">
              <label for="fathersName" class="form-label">বাংলায়</label>
              <input type="text" class="form-control" id="fathersName" placeholder="বাংলায় লিখুন" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="fathersName" class="form-label">পেশা</label>
              <input type="text" class="form-control" id="fathersName" placeholder="মায়ের পেশা" required>
            </div>
          </div>

          <!--Family Income-->
          <div class="mb-3">
              <label for="fathersName" class="form-label">Family Income (Yearly)</label>
              <input type="text" class="form-control" id="fathersName" placeholder="Family Incone" required>
          </div>

          <!-- Date of Birth-->
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="dateOfBirth" class="form-label">Date of Birth</label>
              <input type="date" class="form-control" id="dateOfBirth" placeholder="Date of Birth" required>
            </div>

            <!-- Birth Registration No (col-md-9) -->
            <div class="col-md-9 mb-3">
              <label for="birthRegNo" class="form-label">Birth Registration No</label>
              <input type="text" class="form-control" id="birthRegNo" placeholder="Birth Registration No">
            </div>
          </div>

          <!-- Age (col-md-4) -->
          <div class="row">
          <div class="col-md-4 mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" placeholder="Enter your age" required>
          </div>

          <!-- Height (col-md-4) -->
          <div class="col-md-4 mb-3">
            <label for="height" class="form-label">Height</label>
            <input type="text" class="form-control" id="height" placeholder="Enter your height (Inch or cm)">
          </div>

          <!-- Blood Group (col-md-4) -->
          <div class="col-md-4 mb-3">
            <label for="bloodGroup" class="form-label">Blood Group</label>
            <select class="form-select" id="bloodGroup">
              <option selected disabled value="">Select your blood group</option>
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
            </select>
          </div>
          </div>


          <div class="row">
          <!-- Nationality -->
          <div class="col-md-4 mb-3">
            <label for="nationality" class="form-label">Nationality</label>
            <input type="text" class="form-control" id="nationality" placeholder="Enter your nationality" required>
          </div>

          <!-- Religion -->
          <div class="col-md-4 mb-3">
            <label for="religion" class="form-label">Religion</label>
            <input type="text" class="form-control" id="religion" placeholder="Enter your Religion" required>
          </div>

          <!-- Weight -->
          <div class="col-md-4 mb-3">
            <label for="weight" class="form-label">Weight (kg)</label>
            <input type="number" class="form-control" id="weight" placeholder="Enter your weight">
          </div>
        </div>


        <!-- Present Address -->
        <div class="mb-3">
          <label for="presentAddress" class="form-label">Present Address</label>
          <input type="text" class="form-control" id="PresentAddress" placeholder="Present Address" required><br />
          <input type="text" class="form-control" id="PresentAddress" >
        </div>

        <!-- Parmanent Address -->
        <div class="mb-3">
          <label for="parmanentAddress" class="form-label">Parmanent Address</label>
          <input type="text" class="form-control" id="parmanentAddress" placeholder="Parmanent Address"><br />
          <input type="text" class="form-control" id="parmanentAddress" >
        </div>

        <!--Previous Institute-->
        <div class="mb-3">
              <label for="previousInstitute" class="form-label">Previous Institute (If any)</label>
              <input type="text" class="form-control" id="previousInstitute" placeholder="Previous Institute">
          </div>

        
          <!--T.C. No-->
          <div class="row">
            <div class="col-md-9 mb-3">
              <label for="Tc" class="form-label">T.C No</label>
              <input type="text" class="form-control" id="tcno" placeholder="T.C No">
            </div>

          <!--Date-->
            <div class="col-md-3 mb-3">
              <label for="date" class="form-label">Date</label>
              <input type="date" class="form-control" id="Date" placeholder="T.C Date">
            </div>
          </div>

          <div class="row">
          <!-- Contact Number (Father) -->
          <div class="col-md-4 mb-3">
            <label for="contactFather" class="form-label">Contact Number (Father)</label>
            <input type="tel" class="form-control" id="contactFather" placeholder="Enter father's contact number">
          </div>

          <!-- Contact Number (Mother) -->
          <div class="col-md-4 mb-3">
            <label for="contactMother" class="form-label">Contact Number (Mother)</label>
            <input type="tel" class="form-control" id="contactMother" placeholder="Enter mother's contact number">
          </div>

          <!-- Contact Number (Guardian) -->
          <div class="col-md-4 mb-3">
            <label for="contactGuardian" class="form-label">Contact Number (Guardian)</label>
            <input type="tel" class="form-control" id="contactGuardian" placeholder="Enter guardian's contact number">
          </div>
        </div>


        <!-- Emergency Contact -->
        <div class="mb-3">
          <label for="emergencyContact" class="form-label">Emergency Contact</label>
          <input type="text" class="form-control" id="emergencyContact" placeholder="Enter emergency contact">
        </div>
      
      <!--Remarks--> 
      <div class="mb-3">
        <label for="remarks" class="form-label">Remarks</label>
        <textarea class="form-control" id="remarks" rows="3" placeholder="Enter remarks here"></textarea>     
      </div>

          <div class="row">         
          <!--Class-->
          <div class="col-md-6 form-group">
            <select class="custom-select" required>
              <option selected>Select Class</option>
              <option value="1">Play-nursery</option>
              <option value="1">Class One</option>
              <option value="1">Class Two</option>
              <option value="1">Class Three</option>
              <option value="1">Class Four</option>
              <option value="1">Class Five</option>
              <option value="1">Class Six</option>
              <option value="1">Class Seven</option>
              <option value="1">Class Eight</option>
              <option value="1">Class Nine</option>                                                                
            </select>
        </div>

          <!--Payment method-->
          <div class="col-md-6 mb-3">
            <select class="form-control" name="app_payment_method" id="name" required>
                <option value="">পেমেন্ট মেথড</option>
                <option value="Bkash">Bkash</option>
                <option value="Nagad">Nagad</option>
            </select>
          </div>   

          <!--Tk sender number-->
          <div class="col-md-6 mb-3"> 
           <label for="phoneNumber" class="form-label">যে নাম্বার থেকে টাকা পাঠিয়েছেন</label>
            <input type="text" class="form-control"  name="tk_sender" id="name" placeholder="Tk Sender Number" required>
          </div>   

          <!-- Email -->
          <div class="col-md-6 mb-3">
            <label for="email" class="form-label">ইমেইল অ্যাড্রেস (বাধ্যতামূলক নয়)</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          </div>         

          <!-- Picture File -->
          <div class="col-md-6 mb-3"> 
           <label for="pictureFile" class="form-label">ছবি দিন</label>
           <input type="file" class="form-control"   id="pictureFIle" accept="image/*" required>
          </div>  
          <br />
          <br />

         

          </div>

          <!-- Submit Button -->
          <div class="col-md-12 d-flex justify-content-center">
             <button type="submit" class="col-md-6 btn btn-primary w-100 text-center">সাবমিট</button>
          </div>
       
        </form>      
    </div>
  </div>

    



<?php include "footer.php"?>