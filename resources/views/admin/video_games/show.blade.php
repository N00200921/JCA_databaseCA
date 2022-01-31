@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Video Game: {{ $video_game->title }}
          </div>
          <div class="card-body">
              <table id="table-video_games" class="table table-hover">
                <tbody>
                  <tr>
                      <td rowspan="8"><img src="{{ asset('storage/images/' . $video_game->image_location) }}" width="150"/></td>
                  </tr>
                  <tr>
                                    <td>Title</td>
                                    <td>{{$video_game->title }}</td>
                                </tr>
                                <tr>
                                    <td>genre</td>
                                    <td>{{$video_game->genre }}</td>
                                </tr>
                                <tr>
                                    <td>release date</td>
                                    <td>{{$video_game->release_date }}</td>
                                </tr>
                                <tr>
                                    <td>publisher</td>
                                    <td>{{$video_game->publisher }}</td>
                                </tr>
                                <tr>
                                    <td>metascore</td>
                                    <td>{{$video_game->metascore }}</td>
                                </tr>
                          
                                   
                </tbody>
              </table>

              <a href="{{ route('admin.video_games.index') }}" class="btn btn-default">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
