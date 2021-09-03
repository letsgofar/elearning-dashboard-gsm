@extends('dashboard.layouts.master')

@section('content')

<div class="main-panel">      
    <div class="content-wrapper">
      <div class="row">
          @if (session('status'))
          <div class="ml-3 alert alert-success">
              {{ session('status') }}
          </div>
          @endif    
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Modul Special</h4>
              <p class="card-description">
                Admin bisa membuat mengedit modul dengan mengisi form berikut
              </p>
              <form class="forms-sample" method="POST" action="/module/special/{{$modules->slug}}/edit">
                @method('patch')
                @csrf
                <div class="form-group">
                  <label for="category">Pilih Kategori</label>
                  <select class="form-control" id="category" name="category">
                    <option vlaue="" selected disabled>Pilih Satu Kategori</option>
                    @foreach ($categories as $category)
                    <option {{$category->id == $modules->category_id ? ' selected' : ''}} value="{{$category->id}}"> {{$category->name}} </option>
                    @endforeach
                  </select>
                  @error('category')
                  <div class="mt-2 text-danger">
                      {{$message}}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="level">Pilih Level</label>
                  <select class="form-control" id="level" name="level">
                    <option selected disabled>Pilih level</option>
                    @foreach ($levels as $level)
                    <option {{$level->id == $modules->level_id ? ' selected' : ''}} value="{{$level->id}}"> {{$level->name}} </option>
                    @endforeach
                  </select>
                  @error('level')
                  <div class="mt-2 text-danger">
                      {{$message}}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="grade">Tingkat Sekolah</label>
                  <select class="form-control" id="grade" name="grade">
                    <option value="" selected disabled>Pilih TIngkat Sekolah</option>
                    @foreach ($grades as $grade)
                    <option {{$grade->id == $modules->grade_id ? ' selected' : ''}} value="{{$grade->id}}"> {{$grade->name}} </option>
                    @endforeach
                  </select>
                  @error('grade')
                  <div class="mt-2 text-danger">
                      {{$message}}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="title">Judul Modul</label>
                  <input type="text" name="title" id="title" class="form-control" value="{{old('title') ?? $modules->title }}" placeholder="Masukkan Judul Modul">
                  @error('title')
                  <div class="text-danger">
                      {{$message}}
                  </div>
                  @enderror
                  </div>
                <div class="form-group">
                  <label for="description">Deskripsi Modul</label>
                  <textarea class="form-control" name="description" id="description" rows="4">{{ old('title') ?? $modules->description }}</textarea>
                  @error('description')
                  <div class="mt-2 text-danger">
                      {{$message}}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="challenge">Tantangan</label>
                  <textarea class="form-control" name="challenge" id="challenge" rows="4">{{ old('challenge') ?? $modules->title }}</textarea>
                  @error('challenge')
                  <div class="text-danger">
                      {{$message}}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="url_video">Masukkan URL Video</label>
                  <input type="text" class="form-control" name="url_video" value="{{old('url_video') ?? $modules->url_video }}"  id="url_video" placeholder="Masukkan URL Video">
                  @error('url_video')
                  <div class="text-danger">
                      {{$message}}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="url_image">Masukkan URL Image</label>
                  <input type="text" class="form-control" name="url_image" value="{{old('url_image') ?? $modules->url_image }}" id="url_image" placeholder="Masukkan URL Image">
                  @error('url_image')
                  <div class="text-danger">
                      {{$message}}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="document_url">Masukkan URL Document</label>
                  <input type="text" class="form-control" name="url_document" value="{{old('url_document') ?? $modules->url_document }}" id="url_document" placeholder="Masukkan URL Video">
                  @error('url_document')
                  <div class="text-danger">
                      {{$message}}
                  </div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection