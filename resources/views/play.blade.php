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
				<a href="{{URL::to($urls)}}">Delete</a></td>
				<td>
					<?php $lala = $field->id; 
					$urlu = '/update/'.$lala;
					?>
				<a href="{{URL::to($urlu)}}">Edit</a></td>		
			</tr>
			@endforeach
			</tbody>
		</table>
		<?php $url = '/create'; ?>
		<a href="{{URL::to($url)}}">Tambah baru</a>

		<?php $urlex = '/export'; ?>
		<a href="{{URL::to($urlex)}}">export</a>
