<div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome <?php echo $_SESSION['name'] ?><b></b></p>
        <p class="logout"><a id="exit" href="?controller=pages&action=disconnect">Exit Chat</a></p>
        <div style="clear:both">

        </div>
    </div>

    <div id="chatbox">
       <?php foreach ($aPosts as $message): ?>
        ()
        <b><?php echo $message->getAuthor(); ?>:</b>
        <?php echo $message->getContent(); ?>
        <br><br>
       <?php endforeach; ?>
    </div>

    <form name="message" name="message" method="post" action="?controller=posts&action=send&no_layout">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
    </form>
    <script type="text/javascript">
        // jQuery Document
        $(document).ready(function () {
        });
    </script>
</div>