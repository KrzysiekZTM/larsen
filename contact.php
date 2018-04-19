<?php

$page = 'Contact';

include "inc/defHeader.php";
include "inc/contact-info.php"

$contact_infos = get_contact_infos();

?>
<!-- 1st section -->


<section style="padding-top: 0;" class="full-section">
	<img class="img-responsive" src="img/project-bg-4.jpg" alt="">
</section>


<!-- /1st section -->

<!-- 2nd section -->

<section class="full-section">
	
	<h3 class="align-center"><?php echo $footerEmail ?></h3>
	<div class="contact-info-wrapper">
		<?php 

			foreach($contactInfo as $contactItem){
				echo "<ul class=\"contact-info\">";
				echo $contactItem;
				echo "</ul>";
			}

		?>
	</div>
</section>

<!-- /2nd section -->

<?php include 'inc/no-footer.php' ?>