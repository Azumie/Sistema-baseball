<?php
class Table
{
	private $campos = array();

	function __construct(array $campos)
	{
			$this->campos = $campos;
	}
	public function createTable(){
		$pestañas = '';
		foreach($this->campos as $actual){
			$pestañas .= "<th>".$actual."</th>";
		}
		echo 	"<thead class='table-primary'>".
					$pestañas
			."</thead>
			<tbody>";
	}
	
	public function addItem( array $registro, $link){
		$campos = '<tr>';
		$count = 0;
		foreach($registro as $x){
			if ($count == 0) {
				$campos .= "<td><a href='".$link."'>".$x."</a></td>";
			}else{
				$campos .= "<td>".$x."</td>";
			}
			$count++;
		}
		$campos .= '</tr>';
		echo 	$campos."</tbody>";
	}
}

function addItemAdmin (array $registros){
	foreach ($registros as $registro) {
		echo "<tr>";
		foreach ($registro as $value) {
			echo "<td>".$value."</td>";
		}
		echo "</tr>";
	}
}

function addItemAdminActu (array $registros, string $link){
	foreach ($registros as $registro) {
		echo "<tr>";
		$registro = (array)$registro;
		
		foreach ($registro as $value) {

			if (($registro['id'] == $value) && (key($registro) != 'CI') ) {
				echo "	<td>
							<a href='$link&id=$value'>
								<i class='far fa-edit fa-2x'></i>
							</a>
						</td>";
			} else {
				echo "<td>$value</td>";
			}
			next($registro);
		}
		echo "</tr>";
	}
}

function addItemAdminInput (array $registros, $name){
	foreach ($registros as $registro) {
		echo "<tr>";
		$registro = (array) $registro;
		foreach ($registro as $value) {
			if ($registro['id'] !== $value) {
				echo "<td>".$value."</td>";
			} else {

				echo'<td><input type="checkbox" 
						name="'.$name.'[]" 
						class="custom-control btn btn-block" 
						value="'.$value.'">
					 </td>';
			}
		}
		echo "</tr>";
	}
}
?>
