<?php get_header(); ?>
<div class="Batty_Body">

	<h2>Batty : User</h2>

	<div id="Batty_nav">
		<a href="/Batty/home">Home</a>
	</div>

	<div class="Batty_section" id="Batty_byReporter">
		<h3>Current Batty Users</h3>

		<div class="Batty_tableWrapper">
			<?php
			if (!isset($users) || !is_array($users) || !count($users)) {
				?>
				<p>No users found. How are you even seeing this?!</p>
			<?php
			} else {
				?>
				<table>
					<thead>
					<tr>
						<th>Id</th>
						<th>Username</th>
					</tr>
					</thead>
					<tbody>
					<?php
					foreach ($users as $login_id => $loginname) {
						?>
						<tr>
							<td><a href="/Batty/user/<?php html($login_id); ?>"><?php html($login_id);?></a></td>
							<td><a href="/Batty/user/<?php html($login_id); ?>"><?php html($loginname);?></a></td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
			<?php
			}
			?>

		</div>
	</div>

</div>

<?php get_footer(); ?>

