@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Video Games
            <a href="{{ route('admin.video_games.create') }}" class="btn btn-primary float-right">Add</a>
          </div>
          <div class="card-body">
            @if (count($video_games)=== 0)
              <p>There are no video games!</p>
            @else
            <table id="table-video_games" class="table table-hover">
                                <thead>
                                    <th>title</th>
                                    <th>genre</th>
                                    <th>release date</th>
                                    <th>publisher</th>
                                    <th>metascore</th>
                                </thead>
                                <tbody>
                            @foreach ($video_games as $video_game)
                            <tr data-id="{{$video_game->id}}">
                                <td>{{ $video_game->title}}</td>
                                <td>{{ $video_game->genre}}</td>
                                <td>{{ $video_game->release_date}}</td>
                                <td>{{ $video_game->publisher}}</td>
                                <td>{{ $video_game->metascore}}</td>
                                <td>
                        <a href="{{ route('admin.video_games.show', $video_game->id) }}" class="btn btn-default">View</a>
                        <a href="{{ route('admin.video_games.edit', $video_game->id) }}" class="btn btn-warning">Edit</a>
                        <form style="display:inline-block" method="POST" action="{{ route('admin.video_games.destroy', $video_game->id) }}">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token"  value="{{ csrf_token() }}">
                          <button type="submit" class="form-cotrol btn btn-danger">Delete</a>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
