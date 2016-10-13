@extends('layouts.admin_master')

@section('content')

    <div class="matter">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Edit Article</div>
                        <div class="panel-body">
                            {!! Form::model($article, array('method' => 'put', 'route' => ['articles.update', $article->id], 'class' => 'form', 'files' => true)) !!}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Title</label>

                                    <div class="col-md-6">
                                        {{Form::text('title', null, array('class'=>'form-control'))}}

                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Body</label>

                                    <div class="col-md-6">
                                        {{Form::textarea('body', null, array('class'=>'form-control'))}}

                                        @if ($errors->has('body'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Image</label>
                                <div class="col-md-8">
                                    {!! Form::file('image', array('id' => 'input_image', 'onchange'=> 'loadFile(event)')) !!}

                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-10 col-md-offset-1">
                                <img src="/uploads/{{ $article->image }}" class="img img-responsive" id="show_image" style="height:25%; width: 25%">
                            </div>


                            <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-sign-in"></i>Update Article
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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