    <main>
        <div id="contactForm">
            <form name="contactForm" id="contactForm" action="Process.php" method="post">
                    <p class="h1">Contact Form</p>
                    <div class="form-group">
                        <label for="firstName"> First Name:</label>
                        <input type="text" class="form-control" name="firstName" id="firstName">
                    </div>

                    <div class="form-group">
                        <label for="lastName"> Last Name:</label>
                        <input type="text" class="form-control"name="lastName" id="lastName">
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select class="form-control" id="country" name="country">
                          <option value="australia">Canada</option>
                          <option value="canada">USA</option>
                        </select>
                    </div>
                
                    <div class="form-group">        
                        <label for="phoneNumber"> Phone Number:</label>
                        <input type="text" class="form-control" name="phoneNumber" id="phoneNumber">
                    </div>   
                
                    <div class="form-group">        
                        <label for="emailId"> Email ID:</label>
                        <input type="text" class="form-control" name="emailId" id="emailId">
                    </div>
                    
                    

                    <div class="form-group"> 
                        <input type="submit" class="btn btn-primary form-control" value="Submit">
                    </div>
                    <div id="validationSummary"></div>
            </form>
        </div>
        <script>index();</script>
    </main>
