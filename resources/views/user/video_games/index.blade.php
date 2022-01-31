@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class='row'>
                <div class= 'col-md-12'>
                    <div class="card">
                        <div class ="card-header">
                            Video games
                        </div>
                        <div class="card-body">
                            @if (count($video_games)=== 0)
                            <p>There are no Video game Entries</p>
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
                                    <a href="{{ route('user.video_games.show', $video_game->id) }}" class ="btn btn-primary">View</a>
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