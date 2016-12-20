<div id="loginform">
    <?php echo isset($error) && $error != "" ? $error : "" ?>
    <form action="index.php" method="post">
        <?php $formKey->outputKey(); ?>
        <p>Please enter your name to continue:</p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
</div>