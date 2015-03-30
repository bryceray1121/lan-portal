@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('chat')
        </div>
    </div>
    <!-- /. ROW  -->
    <hr />
    <h2>Free Games</h2>
    @foreach($free as $key => $chunk)
        <div class="row">
            @foreach($chunk as $id => $game)
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="panel panel-back">
                    <a href="{{ $game->link }}"><img src="{{ $game->image }}" style="max-width:100%; max-height:100%;"/></a>
                </div>
            </div>
            @endforeach
        </div>
    @endforeach

    <h2>Not Free Games</h2>
    @foreach($notFree as $key => $chunk)
        <div class="row">
            @foreach($chunk as $id => $game)
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back">
                        <a href="{{ $game->link }}"><img src="{{ $game->image }}" style="max-width:100%; max-height:100%;"/></a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
