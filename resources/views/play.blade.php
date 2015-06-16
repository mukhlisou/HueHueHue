<?php
echo "hooing";
?>


<table class="table">
		<thead>
		  <tr>
			<th>ID</th>
			<th>Nama</th>
		  </tr>
		</thead>
			<tbody id="listing">
			@foreach ($monitor as $field)
		  	<tr>
				<td> {{ $field->idpelanggan }} </td>
				<td id="center"> {{ $field->namapelanggan}} </td>
				<td>
					<?php $lala = $field->id; 
					$urls = '/delete/'.$lala;
					?>
				<a href="{{URL::to($urls)}}">Delete</a></button>
						
			</tr>
			@endforeach
			</tbody>
		</table>
		<a href="/coba">Delete</a>
