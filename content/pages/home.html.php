<?php
use app\models\{Challenge, Submission, Player};

	$active = Challenge::active();
if ($active) :
	$set = $active->setnr;
	$scores = Player::scoreboardForSet($set);
	$challenges_in_set = Challenge::findAsArray(['setnr' => $set, 'draft' => 0], ['order' => '`week` ASC']);
	$weeks = sizeof($challenges_in_set);
?>
<h2>Active challenge Scoreboard</h2>
<h3><?=$active->setnr?> Week <?=$active->week?> : <?=$active->name?></h3>
<p>See current <a href="/challenges/details/set/4/week/2">challenge details here</a>.</p>	
<table>
	<thead>
		<tr>
			<!-- <th>id</th> -->
			<th>Player</th>
			<th>Total</th>
			<?php 
			foreach ($challenges_in_set as $c) {
				echo "<th>Week #{$c->week}</th>";
			}
			?>
		</tr>
	</thead>
	<tbody><?php 
	foreach ($scores as $row) : ?>
		<tr>
			<td><?=$row['player']?></td>
			<td><?=$row['total']?> <?=$row['stars']?>*</td>
			<?php 

			foreach ($challenges_in_set as $c) {
			// foreach ($row['week'] as $week) {
				$week = $row['week'][$c->id];
				if ($week == null) {
					echo "<td>&nbsp;</td>";
					continue;
				}
				$sc = $week['score']; $st = "";
				for ($i=0; $i < (int) $week['stars'] ; $i++) { 
					$st .= '*';
				} 
				for ($i=0; $i < 2 - (int) $week['stars'] ; $i++) { 
					$st .= '_';
				}
				echo "<td>{$sc} {$st}</td>";
			}
			for ($i=0; $i < $weeks - sizeof($row['week']); $i++) { 
				echo "<td>&nbsp;</td>";
			}
			?>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<br />
<div style="font-size: smaller"><?php
for ($i=1; $i < $set; $i++) { 
	echo '<a href="/sets/score?set='.$i.'" >Set totals '.$i.'</a> ';
}
?></div>
<?php else : // no active challengs ?>
<h3>No currently active challenges</h3>
<?php endif; // if active ?>
<br />
<hr />
<h2>Challenge History</h2>
<table class="challenges_list">
	<thead>
		<tr>
			<th>&nbsp;</th>
			<th>Name</th>
			<th>Set</th>
			<th>Week</th>
			<th>Background</th>
			<th>Gods</th>
			<th>Species</th>
			<th>Submissions</th>
			<th>Menu</th>
			
		</tr>
	</thead>
	<tbody>
	<?php
		$challenges = Challenge::findBySets(['draft' => 0]);
		foreach ($challenges as $c) :
	?>
		<tr>
			<td><?php if ($c->icon):?><img src="<?=$c->icon?>" /><?php endif; ?> </td>
			<td><?=$c->name?></td>
			<td><?=$c->setnr?></td>
			<td><?=$c->week?></td>
			<td><?=$c->background?></td>
			<td><?=$c->gods?></td>
			<td><?=$c->species?></td>
			<td><?=$c->subs?></td>
			<td><a href="/challenges/scores?id=<?=$c->id?>">Scores</a> <a href="<?=$c->reddit?>">Reddit</a></td>
		</tr>
	<?php
		endforeach;
	?>
	</tbody>
</table>
