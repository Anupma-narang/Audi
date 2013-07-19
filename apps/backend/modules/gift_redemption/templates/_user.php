<?php $user = Doctrine::getTable('sfGuardUser')->find($gift_redemption->getUser());?>
<?php echo $user->getUsername();?>
