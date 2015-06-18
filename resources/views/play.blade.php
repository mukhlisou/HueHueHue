@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row" style="margin-top:20px; padding-bottom: 60px;">
        <div class="table-responsive">
            <table id="datatable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Management Data</th>
                  </tr>
                </thead>
                    <tbody id="listing">
                    @foreach ($monitor as $field)
                        <?php $hue = $field->id;
                        $ur = '/detail/'.$hue;

                        ?>

                    <tr class='clickableRow'>
                        <td> {{ $field->idpelanggan }} </td>
                        <td id="center"> {{ $field->namapelanggan}} </td>
                        <td>
                            <?php $lala = $field->id;
                            $urls = '/delete/'.$lala;
                            ?>
                             <a class="btn" href="{{URL::to($urls)}}">Delete</a>
                            <?php $lala = $field->id;
                            $urlu = '/update/'.$lala;
                            ?>
                            <a class="btn" href="{{URL::to($urlu)}}">Edit</a>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
        <hr>
        <div class="row">
            <div class ="col-sm-5">
            <form method="POST" action="http://localhost/HueHueHue/public/import" accept-charset="UTF-8" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"><label for="file" id="" class="">File</label> <input name="file" type="file" id="file">
            <input type="submit" value="Import"> </form>
        <!-- {{ Form::open(array('url'=>'/import','files'=>true)) }}

		{{ Form::label('file','File',array('id'=>'','class'=>'')) }}
		{{ Form::file('file','',array('id'=>'','class'=>'')) }}
		<br/>
		submit buttons
		{{ Form::submit('Import') }}

		{{ Form::close() }}-->
        </div><div class ="col-sm-6" style="margin-bottom: 100px;>

                <?php $url = '/create'; ?>
                <a class="btn" href="{{URL::to($url)}}">Tambah Baru</a>

                <?php $urlex = '/export'; ?>
                <a class="btn" href="{{URL::to($urlex)}}">Export</a>

            </div>
        </div>
    </div>
</div>
<script>
$(function() {
$(".clickableRow").on("click", function() {
location.href="{{URL::to($ur)}}";

});

});</script>
@endsection