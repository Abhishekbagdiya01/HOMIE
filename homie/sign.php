
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- css file link -->
<link rel="stylesheet" href="style.css">


<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<header class="header">

    <div class="header-1">

    <a href="index.php"><div class="fas fa-arrow-alt-circle-left"></div></a>
       
        </div>

</header>

<section class="form my-4 mx-5">
    <?php
        session_start();
        if(isset($_SESSION['signup'])){
            echo$_SESSION['signup'];
            unset($_SESSION['signup']);
        } 
    ?>

                <div class="container ">
                    <div class="row g-0">
                        <div class="col-lg-5">
                            <img src="https://source.unsplash.com/550x550/?rooms" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-7 px-5 pt-5">
                            <h1 class="font-weigth-bold py-3">Sign Up</h1>
                            <form action="signup.php" method="POST" name="myform">
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Username" name="username" class="form-control my-3 p-4" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="email" placeholder="1234@gmail.com" name="email" class="form-control my-3 p-4" autocomplete="off" required>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="password" placeholder="Create Password" name="createpassword" class="form-control my-3 p-4" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="password" placeholder="Confirm Password" name="confirmpassword" class="form-control my-3 p-4" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <select name="sques" id="sq">
                                            <option value="sq1">enter your birth place</option>
                                            <option value="sq2">enter your fav sub</option>
                                            <option value="sq3">enter your fav place</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="enter your ans" name="sans" class="form-control my-3 p-4" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="submit" class="btn1 mt-3 mb-5" value="sign up">
                                    </div>
                                </div>

                                <p>Don't have an account? <a href="login.php">Login</a> </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>


            <script type="text/javascript">
                function chk()
                {
                var empt1 = document.form["myform"]["name"].value;
                var empt2 = document.form["myform"]["email"].value;
                var empt3 = document.form["myform"]["createpassword"].value;
                var empt4 = document.form["myform"]["confirmpassword"].value;
                var empt5 = document.form["myform"]["sans"].value;
                if (empt1 == "" || empt2 == "" || empt3 == "" || empt4 == "" || empt5 == "" )
                {
                    alert("Please input a value");
                    return false;
                }
                
                }
            </script>