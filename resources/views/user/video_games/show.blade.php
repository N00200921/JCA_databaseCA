@extends('layouts.app')
@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        Video Game: {{$video_games->title}}
                    </div>
                    <div class ="card-body">
                        <table id="table-festivals" class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Title</td>
                                    <td>{{$video_games->title }}</td>
                                </tr>
                                <tr>
                                    <td>genre</td>
                                    <td>{{$video_games->genre }}</td>
                                </tr>
                                <tr>
                                    <td>release date</td>
                                    <td>{{$video_games->release_date }}</td>
                                </tr>
                                <tr>
                                    <td>publisher</td>
                                    <td>{{$video_games->publisher }}</td>
                                </tr>
                                <tr>
                                    <td>metascore</td>
                                    <td>{{$video_games->metascore }}</td>
                                </tr>
                          
                                   
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('user.video_games.index', $video_games->id) }}" class ="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>