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
		for ($i=0; $i < (count($registro)/2); $i++) { 
			echo "<td>". $registro[$i]."</td>";
		}
		echo "</tr>";
	}
}
?>