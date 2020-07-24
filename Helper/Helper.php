<?php 

function Error($Mensaje){
	echo "<div class='alert alert-danger' id='alerta'>
			$Mensaje
			<button type='button' class='close' data-dismiss='alert' aria-label='cerrar'>
				<span aria-hidden='true'>&times;</span>
			</button>
		</div>";
}


 ?>
