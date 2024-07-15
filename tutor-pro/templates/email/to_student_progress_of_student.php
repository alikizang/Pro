<?php
/**
 * E-mail template for student when inactive.
 *
 * @package TutorPro
 * @subpackage Templates\Email
 *
 * @since 2.5.0
 */

?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
	<?php require TUTOR_EMAIL()->path . 'views/email_styles.php'; ?>
</head>

<body>
	<div class="tutor-email-body">
		<div class="tutor-email-wrapper">


			<?php require TUTOR_PRO()->path . 'templates/email/email_header.php'; ?>
			<div class="tutor-email-content">

				<div class="tutor-mr-160">
					<h6 data-source="email-heading" class="tutor-email-heading">{email_heading}</h6>
				</div>
				<br>
				<div class="email-user-content" data-source="email-additional-message">{email_message}</div>

				<div class="tutor-email-buttons">
					<a target="_blank" class="tutor-email-button" href="{dashboard_url}"><?php esc_html_e( 'Continue Learning', 'tutor-pro' ); ?></a>
				</div>

			</div>
		</div>
	</div>
</body>
</html>

