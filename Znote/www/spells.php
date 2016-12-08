<h3>Spells</h3>
<form action="/" method="get">
	<input type="hidden" name="subtopic" value="spells">
	<table class="table">
		<tbody><tr>
			<th>Spell Search</th>
			</tr>
			<tr>
				<td>
					<label for="vocation">Vocation</label>
					<select class="form-control" name="vocation" id="vocation">
						<option value="all" checked="">All</option>
						<option value="1"> Sorcerer</option>
						<option value="2"> Druid</option>
						<option value="3"> Paladin</option>
						<option value="4"> Knight</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><button class="btn btn-primary" type="submit">Filter</button></td>
			</tr>
		</tbody>
	</table>
</form>
<?php
if (isset($_GET['vocation'])) {
	echo $_GET['vocation'] . ' chosen.';
}
echo $_GET['vocation'];
?>
