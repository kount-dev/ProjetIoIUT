

<?php
		foreach ($users as $user) {
			echo "<tr>";
				echo '<td>'.$user['actual_rank'].' '.(($user['ecart'] > 0) ? '    UP' : (($user['ecart']) ? '    DOWN' : '    EGAL')).'</td>';
				echo '<td>'.$user['username'].'</td>';
				echo '<td>'.$user['xp'].'</td>';
			echo "</tr>";
		}
?>
