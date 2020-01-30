@extends('layouts.dashboard')

@section('title', 'Roles')

@section('content-title', 'Roles')

@section('active-item', 'User Management / All Roles')

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

    	@if($roles)

    		@foreach($roles as $role)

		      <tr>
		        <td>{{ $role->name }}</td>
		        <td>{{ $role->description }}</td>
		        <td>{{ $role->created_at == '' ? '' : $role->created_at->diffForHumans() }}</td>
            <td>
              
              @if($role->name != 'Admin')

            <button type="submit" class="btn btn-info" data-name="{{ $role->name }}" data-description="{{ $role->description }}" data-toggle="modal" data-target="#edit">Edit</button>
            <button type="submit" class="btn btn-danger" data-role_id="{{ $role->id }}" data-toggle="modal" data-target="#delete">Delete</button>

              @endif

            </td>
		      </tr>

      		@endforeach

      	@endif
    </tbody>
</table>

@include('includes.rolemodal')

@stop


