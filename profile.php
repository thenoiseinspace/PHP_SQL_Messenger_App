<?php
   include_once 'header.php';
?>

<div id="main">
    <h4 style="font-family: Audiowide; font-size: 40px; padding-top: 0px;">WHISPER</h4>
    <!-- <img src="icon.png" width="100px"/>  -->
    <br> 
<div class="cols">
    <div class="col-left2">
       <h5 style="font-family: Ubuntu; font-size: 18px; padding-top: 0px;">Profile</h5> <br>
       <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="100px"/> <br> 
        <button type="submit" name="changepic" >Update profile picture</button>
    </div>

    <div class="col-right">

        <table class="table">
            <form method = "post" action="login.php">

            <p>
                You are logged in as: 
                <strong>
                    <?php echo $_SESSION['username']; ?>
                </strong>
            </p>

            <p>
                Your email is saved as as: 
                <strong>
                    <?php echo $_SESSION['email']; ?>
                </strong>
            </p>

            <!-- <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <button type="submit" name="login" >Log in</button> -->

            </form>
        </table>
    </div>
</div>
</div>

<!-- <div id="footer">
    All rights reserved. Copyright <?php echo date('Y');?>
</div> -->