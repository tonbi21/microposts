@if(Auth::user()->is_favorite($micropost->id))
    {!! Form::open(['route' => ['favorites.unfavorites', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@else
    {!!Form::open(['route' => ['favorites.favorites', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => 'btn btn-secondary'])!!}
    {!! Form::close() !!}
@endif