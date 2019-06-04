<!DOCTYPE html>
<html>
<head>
  <title>Registration form</title>
  <link rel="stylesheet" type="text/css" href="regSTYLE.css">
  
</head>
<body background="raghav.jpg">
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="index.php">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="insert.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                <span class="req"></span>
              </label>
              <input type="text" name="FirstName" placeholder="First Name" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                <span class="req"></span>
              </label>
              <input type="text" name="LastName" placeholder="Last Name" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
            <input type="email" name="Email" placeholder="Email Address" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
             <span class="req"></span>
            </label>
            <input type="password" name="Password" placeholder=" Set A Password" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
            <input type="text" name="Phone"  placeholder="Enter Number"  required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
            <input type="text" name="UID" placeholder="Enter UID" required autocomplete="off"/>
          </div>
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->


</body>
</html>