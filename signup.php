<?php
    include 'header.php';
?> 
</div>
</div>

    <div class="form-wrap-log">
        <div class="container">
            <h1><span class="purple-fonts">Sign</span> Up</h1>
            
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'empty') {
                        echo '<p class="error-css">Empty Fileds</p>';
                    }
                    else if ($_GET['error'] == 'invalidemailname') {
                        echo '<p class="error-css">Invalid Email or Name</p>';
                    }
                    else if ($_GET['error'] == 'invalidemail') {
                        echo '<p class="error-css">Invalid Email</p>';
                    }
                    else if ($_GET['error'] == 'invalidName') {
                        echo '<p class="error-css">Invalid Name</p>';
                    }
                    else if ($_GET['error'] == 'passwordcheck') {
                        echo '<p class="error-css">Passwords dont match</p>';
                    }
                    else if ($_GET['error'] == 'emailused') {
                        echo '<p class="error-css">Email is Used Sorry!</p>';
                    }
                }
                elseif (isset($_GET['signup'])) {
                    if ($_GET['signup'] == 'success'){
                        echo '<p class="succes-css">You have Sign Up</p>';
                    }    
                }
            ?>
            <form action="includes/signup.inc.php" method="POST">
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <?php 
                        if (isset($_GET['name'])) {
                            $name = $_GET['name'];
                            echo '<input type="text" name="name" id="first-name" value="'.$name.'" autofocus/>';
                        }else {
                            echo '<input type="text" name="name" id="first-name" autofocus/>';
                        }
                    ?>
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <?php 
                        if (isset($_GET['surname'])) {
                            $surname = $_GET['surname'];
                            echo '<input type="text" name="surname" id="last-name" value="'.$surname.'"/>';
                        }else {
                            echo '<input type="text" name="surname" id="last-name" />';
                        }
                    ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <?php 
                        if (isset($_GET['email'])) {
                            $email = $_GET['email'];
                            echo ' <input type="email" name="email" id="email" value="'.$email.'" />';
                        }else {
                            echo '<input type="email" name="email" id="email" />';
                        }
                    ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                </div>
                <div class="form-group">
                    <label for="password2">Confirm Password</label>
                    <input type="password" name="passwordRepeat" id="password2" />
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="radio" name="gender" id="genderM" value="M" checked="checked"/>Male
                    <input type="radio" name="gender" id="genderF" value="F"/>Female
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <select name="country" id="country">
                        <option value="Kosova">Kosova</option>
                        <option value="Albania">Albania</option>
                        <option value="Deutschland">Deutschland</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="United States">United States</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <?php
                        if (isset($_GET['birthday'])) {
                            $birthday = $_GET['birthday'];
                            echo '<input type="text" name="birthday" id="birthday" autocomplete="off" placeholder=" y-m-d '. date("Y-m-d").'" value="'.$birthday.'"/>';
                        }else {
                            echo '<input type="text" name="birthday" id="birthday" autocomplete="off" placeholder=" y-m-d '. date("Y-m-d").'"/>';
                        }
                    ?>
                </div>
                <button type="submit" name="signup-submit" class="btn-1">Sign Up</button>
                <p class="bottom-text">
                    By clicking the Sign Up button, you agree to our
                    <a href="#">Terms & Conditions</a> and
                    <a href="#">Privacy Policy</a>
                </p>
            </form>
    </div>
    </div>

<?php
    include 'footer.php';
?>