@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Add new Video Games
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('admin.video_games.store')  }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" />
              </div>
              <div class="form-group">
                <label for="description">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}" />
              </div>
              <div class="form-group">
                <label for="location">Release Date</label>
                <input type="date" class="form-control" id="release_date" name="release_date" value="{{ old('release_date') }}" />
              </div>
              <div class="form-group">
                <label for="start_date">Publisher</label>
                <input type="text" class="form-control" id="publisher" name="publisher" value="{{ old('publisher') }}" />
              </div>
              <div class="form-group">
                <label for="end_date">Metascore</label>
                <input type="text" class="form-control" id="metascore" name="metascore" value="{{ old('metascore') }}" />
              </div>
        
              <div class="form-group">
                <label for="video_game_image"> Video game Image </label>
                <input type="file" class="form-control" id='video_game_image' name="video_game_image" />
            </div>

              <a href="{{ route('admin.video_games.index') }}" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
