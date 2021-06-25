<?php 
    $title ='Home';
    require_once 'includes/header.php';
?>

<?php 
    include_once 'includes/heroimage.php';
?>

<div class="contactus">
            <div id="formsec">
                <form action="backend.php" id="contactform">
                    <div>
                        <label for="name">Full Name</label><br>
                        <input type="text" id="name" placeholder="Enter your full name">
                    </div>
                    <div>
                        <label for="email">Email id</label><br>
                        <input type="email" id="email" placeholder="Enter your mail here">
                    </div>
                    <div>
                        <label for="number">Contact Number</label><br>
                        <input type="number" id="number" placeholder="Enter your contact number">
                    </div>
                    <div>
                        <label for="companyname">Company Name</label><br>
                        <input type="text" id="companyname" Placeholder="Enter your company name">
                    </div>
                    <div>
                        <label for="message">Your Message</label><br>
                        <textarea id="message" name="message" placeholder="Enter your message here"></textarea>
                       
                    </div>
                    <div>
                        <label for="submit"></label>
                        <input type="submit" Placeholder="submit">
                    </div>

                </form>
            </div>
            <div id="addsec">
                <h3><ul class="address">
                    <li><h3>&#10159;Head office </h3> 06, Near Mama Chowk, Modern Industrial Estate, <br>
                        Part B, Bhadurgarh, Haryana, Pin 124507</li>
                    <li><h3>&#9993; Email for Support </h3><a href="mailto:support@inovace.co.in"> support@inovace.co.in</a></span></li>
                    <li><h3>&#9993; Email for Enquiry </h3><a href="mailto:info@inovace.co.in"> info@inovace.co.in</a></span></li>
                    <!-- <li><h3>&#9990; Contact Number </h3><a href="tel:+91-9462647426"> +91-9462647426</a> -->
                   
                </ul></h3>

            </div>

        </div>
  


<?php
    require_once 'includes/footer.php';
?>