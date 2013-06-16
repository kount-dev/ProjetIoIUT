<?php
	echo $this->Html->css('leaderboard');
	echo $this->Html->script('sortLeaderBoard.ajax');
	echo $this->Form->hidden("valSortRankXp", array('order' =>'ASC'));
	echo $this->Form->hidden("valSortUserName", array('order' =>'ASC'));

	echo "<table>";
		echo "<thead>";
			echo "<tr>";
				echo "<th colspan='2' id='col_rank'><a class='rank_xp_sort'>Rank</a></th>";
				echo "<th colspan='2' id='col_user'><a id='username_sort'>Username</a></th>";
				echo "<th class='col_rank'><a class='rank_xp_sort'>XP</a></th>";
			echo "</tr>";
		echo "</thead>";
		echo "<tbody id='leaderboard'>";
			foreach ($users as $user) {
				echo "<tr>";
					echo '<td class="rank">'.$user['actual_rank'].'</td>';
					echo '<td class="progression ' .(($user['ecart'] > 0) ? 'up_progress' : (($user['ecart']) ? 'down_progress' : 'egal_progress')). '">'.(($user['ecart'] > 0) ? '    UP' : (($user['ecart']) ? '    DOWN' : '    EGAL')).'</td>';
					echo '<td class="username ' .(($user['ecart'] > 0) ? 'up_progress' : (($user['ecart']) ? 'down_progress' : 'egal_progress')). '">' . $user['username'] . '</td>';
					echo '<td class="profile">' . $this->Html->link('Profile', array('action' => 'view', $user['id'])) . '</td>';
					echo '<td class="experience">'.$user['xp'].'</td>';
				echo "</tr>";
			}




		echo "</tbody>";
	echo "</table>";

?>
