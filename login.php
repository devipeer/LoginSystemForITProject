<?php include_once 'header.php'
?>
    <div class="signup-form"
        <h2>Log In</h2>
        <form action="includes\login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Log In</button>
        </form>

<?php 
    if(isset($_GET["error"])){
        if($_GET["error"] == "wronglogin"){
            echo "<p>Wrong login or password</p>";
        }
        if($_GET["error"] == "emptyinputs"){
            echo "<p>Fill in all fields</p>";
        }
    }
?>
</div>
<?php include_once 'footer.php'
?>