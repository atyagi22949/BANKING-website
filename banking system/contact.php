<!DOCTYPE html> 
<html lang="en"> 
<head> 
 <meta charset="UTF-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <title>Family Bank</title> 
 <link rel="stylesheet" href="style.css"> 
</head> 
<body> 
   
   <?php  require 'header.php'?>
   <?php require 'partials/_nav.php'?>
   
   <center>
    <div class="container">
       <div class="content">
           <h1 style="font-family:'algerian'; color: blue;">::contact us::</h2>
           <p style="font-family: 'calibri';">We’d love to hear from you! Whether you have a question, feedback, or need assistance, feel free to reach out to us using the form below.</p>
            <form action="#" method="post">
               <div class="form-group">
                  <label for="name">Your Name</label>
                  <input type="text" id="name" name="name" placeholder="Enter your name" required>
               </div>
                <div class="form-group">
                   <label for="email">Your Email</label>
                   <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                   <label for="message">Your Message</label>
                   <textarea id="message" name="message" rows="5" placeholder="Type your message here" required></textarea>
                </div>
               <button type="submit" class="btn">Send Message</button>
           </form>
         </div>
      </div>
     </center>
     
     <?php include 'footer.php' ?>
</body> 
</html>