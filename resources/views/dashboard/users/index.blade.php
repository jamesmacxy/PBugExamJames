@extends('layouts.dashboard')

@section('title', 'Users')

@section('content-title', 'Users')

@section('active-item', 'User Management / All User')

@section('content')

<table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Created at</th>
        <th>Modify</th>
      </tr>
    </thead>
    <tbody>

    	@if($users)

    		@foreach($users as $user)

		      <tr>
		        <td>{{ $user->name }}</td>
		        <td>{{ $user->role ? $user->role->name : 'User has no role' }}</td>
		        <td>{{ $user->created_at->diffForHumans() }}</td>
            <td>

              @if($user->role->name != 'Admin')

            <button type="submit" class="btn btn-info" data-name="{{ $user->name }}" data-email="{{ $user->email }}" data-toggle="modal" data-target="#edit">Edit</button>
            <button type="submit" class="btn btn-danger" data-user_id="{{ $user->id }}" data-toggle="modal" data-target="#delete">Delete</button>

              @endif

            </td>

		      </tr>

      		@endforeach

      	@endif
    </tbody>
</table>

@include('includes.usermodal')

@stop




