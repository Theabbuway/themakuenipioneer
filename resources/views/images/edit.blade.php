@extends('layouts.admin_master')

@section('content')

    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <img src="/uploads/{{ $image->name }}" class="img img-responsive" id="show_image" style="height:50%; width: 50%">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-2">

            <div class="edit-image">

                {!! Form::model($image, array('route' => ['image.update',$image->id], 'method' => 'PUT', 'files' => true)) !!}

                {!! Form::label('image') !!}
                {!! Form::file('image', array('id' => 'input_image', 'onchange'=> 'loadFile(event)')) !!}

                {{Form::label('title', 'image title') }}
                {{Form::text('title', null, array('class'=>'form-control'))}}

                {{Form::label('description', 'Image Description') }}
                {{Form::textarea('description', null, array('class'=>'form-control'))}}

                {{Form::submit('update image', array('class'=>'btn btn-success btn-lg btn-block '))}}
                {!! Form::close() !!}

            </div>
        </div>
    </div>

    <script language="javascript">
        var loadFile = function(event){
            var output = document.getElementById('show_image');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>

@endsection