@extends('kontak.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h3>WEB KONTAK TEMAN</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="{{ route('kontak.create') }}">Create New Post</a>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Nomor HP</th>
      <th width="300px">Actions</th>
    </tr>

    @foreach ($kontak as $post)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $post->nama }}</td>
        <td>{{ $post->alamat }}</td>
        <td>{{ $post->nohp }}</td>
        <td>
          <a class="btn btn-xs btn-info" href="{{ route('kontak.show', $post->id) }}">Show</a>
          <a class="btn btn-xs btn-primary" href="{{ route('kontak.edit', $post->id) }}">Edit</a>

          {!! Form::open(['method' => 'DELETE', 'route'=>['kontak.destroy', $post->id], 'style'=> 'display:inline']) !!}
          {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
  {!!$kontak->links() !!}
@endsection