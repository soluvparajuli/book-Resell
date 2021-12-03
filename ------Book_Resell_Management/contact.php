<?php


  $title = "Contact";
  require_once "./template/header.php";
?>
    <!DOCTYPE html>
<html lang="fr">
<head>
<script type="text/javascript">
            function showMessage() {
                alert("Thanks for submission");
            }
        </script>
</head>
<body>



<div class="container">
    
    <div class="row">
        <div class="col">
           <form action="feedbacksubmission.php" method="POST">
           <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="inputName" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name='email' class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" id="textArea" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" id="MY" class="btn btn-primary text-right"  onClick="showMessage()">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body">
                    <p></p>
                    <p>Australia

                    </p>
                    <p>New South Wales</p>
                    <p>Email : email@example.com</p>
                    <p>Tel. +33 12 56 11 51 84</p>

                </div>

            </div>
        </div>
    </div>
</div>



<!-- JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
<?php
  require_once "./template/footer.php";
?>