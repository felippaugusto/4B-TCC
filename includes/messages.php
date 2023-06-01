<?php
if(isset($_SESSION['messages']) && $_SESSION['messagesVerify'] == true): 
    $_SESSION['messagesVerify'] = false; ?>
    <p id="paragraphMessages"><?php echo $_SESSION['messages']; ?></p>
<?php
endif;