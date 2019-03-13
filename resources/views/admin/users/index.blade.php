@extends('layouts.admin')


@section('content')

    <h1>All Users</h1>

        <table class="table">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Role</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
          </thead>
          <tbody>

          <?php $count = 1;?>

          @if($users)

              @foreach($users as $user)

                <tr>
                    <td>{{$count++}}</td>
                    <td>{{$user -> name}}</td>
                    <td>{{$user -> email}}</td>
                    <td>{{$user -> mobile_number ? $user -> mobile_number : "No mobile Number provided"}}</td>
                    <td>{{$user -> role ? $user -> role -> name : "No role assigned"}}</td>
                    <td>{{$user -> created_at -> diffForHumans()}}</td>
                    <td>{{$user -> updated_at -> diffForHumans()}}</td>
                </tr>

            @endforeach

          @endif
          </tbody>
        </table>

@stop