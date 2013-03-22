<?php
	echo $this->Html->script('sortLeaderBoard.ajax');
	echo $this->Form->hidden("valSortRankXp", array('order' =>'ASC'));
	echo $this->Form->hidden("valSortUserName", array('order' =>'ASC'));

	echo "<table>";
		echo "<thead>";
			echo "<tr>";
				echo "<th><a class='rank_xp_sort'>Rank</a></th>";
				echo "<th><a id='username_sort'>Username</a></th>";
				echo "<th><a class='rank_xp_sort'>XP</a></th>";
			echo "</tr>";
		echo "</thead>";
		echo "<tbody id='leaderboard'>";
			foreach ($users as $user) {
				echo "<tr>";
					echo '<td>'.$user['actual_rank'].' '.(($user['ecart'] > 0) ? '    UP' : (($user['ecart']) ? '    DOWN' : '    EGAL')).'</td>';
					echo '<td>'.$user['username'].'</td>';
					echo '<td>'.$user['xp'].'</td>';
				echo "</tr>";
			}
		echo "</tbody>";
	echo "</table>";

?>
