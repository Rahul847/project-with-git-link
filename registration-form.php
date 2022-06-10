
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="img4.webp"
                                    alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">registration form</h3>
                                    <form method="post" action="">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="name">Full Name</label>
                                                    <input id="name" type="text" name="name"
                                                        class="form-control form-control-lg" onkeyup="Validatename();" />
                                                    <span id="nameErr" style="color:brown;"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Email ID</label>
                                                    <input id="email" type="email" name="email"
                                                        class="form-control form-control-lg" onkeyup="ValidateEmail();" />
                                                    <span id="emailErr" style="color:brown;"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="password">Password</label>
                                                    <input type="password" id="password" name="password"
                                                        class="form-control form-control-lg"
                                                        onkeyup="Validatepassword();" />
                                                    <span id="passErr" style="color:brown"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="tel">Phone Number</label>
                                                    <input id="phone" name="tel" type="tel"
                                                        class="form-control form-control-lg" onkeyup="Validatephone();">
                                                    <span id="passErr" style="color:brown"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="age">Age</label>
                                                    <input id="age" type="number" name="age"
                                                        class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="city">City</label>
                                                    <input id="city" type="text" name="city"
                                                        class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="image">Image</label>
                                                    <input id="image" type="file" name="att"
                                                        class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                            
                                                <input type="submit" class="btn btn-success text-capitalize"
                                                    value="register" name="regis" data-submit="...Sending">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Client side validation-->
    <script type="text/javascript">

        //Email Validation
        function ValidateEmail() {
            var email = document.getElementById("email").value;
            var lblError = document.getElementById("emailErr");
            lblError.innerHTML = "";
            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if (!expr.test(email)) {
                lblError.innerHTML = "Invalid email address.";
            }
        }

        //String Validation

        function Validatename() {
            var name = document.getElementById("name").value;
            var lblError = document.getElementById("nameErr");
            lblError.innerHTML = "";
            var expr = /^[a-zA-Z ]+$/;
            if (!expr.test(name)) {
                lblError.innerHTML = "Only alphabates allowed.";
            }
        }

        //Password Validation
        function Validatepassword() {
            var pass = document.getElementById("pass").value;
            var lblError = document.getElementById("passErr");
            lblError.innerHTML = "";
            var expr = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
            if (!expr.test(pass)) {
                lblError.innerHTML = "8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character";
            }
        }

        //Phone number validation

        function Validatephone() {
            var phone = document.getElementById("phone").value;
            var lblError = document.getElementById("phoneErr");
            lblError.innerHTML = "";
            var expr = /^\d{10}$/;
            if (!expr.test(phone)) {
                lblError.innerHTML = "Please enter 10 digit number";
            }
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>

<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "";  //My email address
 //getting customer data
 $name = $_POST['name']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $password = $_POST['password']; //getting customer password
 $phone = $_POST['tel']; //getting customer Phone number
 $age = $_POST['age']; //getting customer age
 $city = $_POST['city']; //getting city
 $subject2 = "Confirmation: Message was submitted successfully"; // For customer confirmation
 
 //Email body I will receive
 $message = "Cleint Name: " . $name . "\n"
 . "Phone Number: " . $phone . "\n\n"
 . "Client Message: " . "\n" . $_POST['message'];
 
 //Message for client confirmation
 $message2 = "Dear" . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
 . "Regards," . "\n" . "NeosoftTechnologies";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>