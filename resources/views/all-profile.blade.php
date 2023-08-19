@extends('layout.admin-master')

@section('content')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Actions</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->mobile }}</td>
                <th scope="col">
                  <a href="{{ route('user.profile', $user->id) }}" class="btn btn-sm btn-primary">View</a>
                  <a href="{{ route('user.update', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                  <a href="{{ route('user.delete', $user->id) }}" class="btn btn-sm btn-danger">Delete</a>
              </th>
              </tr>
            @endforeach
          
        </tbody>
      </table>
      {{ $users->links() }}
@endsection    