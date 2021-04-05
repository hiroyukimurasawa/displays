@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data" action="{{ url('displays/update') }}" method="POST">

        <!-- display_name -->
        @can('webmastar')
        <div class="form-group">
           <label for="display_name">棚の名前</label>
           <input type="text" id="display_name" name="display_name" class="form-control" value="{{$display->display_name}}">
        </div>
        @endcan
        <div class="form-group">
            <label for="display_img"><img src="/upload/{{$display->display_img}}" ></label>
        @can('editar')
            <input type="file" id="display_img" name="display_img" class="form-control" value="{{$display->display_img}}">
        @endcan
        </div>
        <!-- Saveボタン/Backボタン -->
        @can('editar')
        <div class="well well-sm">

            <button type="submit" class="btn btn-primary">更新</button>
        @endcan
            <a class="btn btn-link pull-right" href="{{ url('/') }}">
                <i class="glyphicon glyphicon-backward"></i>  戻る
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
         
         <!-- id値を送信 -->
         <input type="hidden" name="id" value="{{$display->id}}" />
         <!--/ id値を送信 -->
         
         <!-- CSRF -->
         {{ csrf_field() }}
         <!--/ CSRF -->
         
    </form>
    </div>
</div>
@endsection