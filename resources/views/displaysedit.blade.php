@extends('layouts.app')

@section('content')
<script src="{{ asset('js/display.js') }}"></script>

<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data" action="{{ url('displays/update') }}" method="POST">

        <!-- display_name -->
        @can('editor')
        <div class="form-group">
           <label for="display_name">棚の名前</label>
           <input type="text" id="display_name" name="display_name" class="form-control" value="{{$display->display_name}}">
        </div>
        @endcan
        <div class="form-group">
            <p style="height:200px;">
            <label for="display_img"><img id="img_prv" src="/storage/{{$display->id}}.jpg"></label>
        @can('editor')
            <input type="file" id="display_img" name="display_img" class="form-control " value="{{$display->display_img}}">
        @endcan
        </div>
        <!-- Saveボタン/Backボタン -->
        @can('editor')
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