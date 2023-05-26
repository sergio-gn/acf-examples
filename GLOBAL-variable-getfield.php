<?php
//********** DEFINE IT ON FUNCTIONS.PHP *************/
define('CONTACT_DETAILS', get_field('contact_details', 'option'));


//*********** CALL IT ON TEMPLATE PAGE **************/
?>
<p><?= CONTACT_DETAILS['address'] ?></p>