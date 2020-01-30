@extends('layouts.dashboard')

@section('title', 'Category')

@section('content-title', 'Category')

@section('active-item', 'Expense Management / Expense Category')

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

    	@if($categories)

    		@foreach($categories as $category)

		      <tr>
		        <td>{{ $category->name }}</td>
		        <td>{{ $category->description }}</td>
		        <td>{{ $category->created_at == '' ? '' : $category->created_at->diffForHumans() }}</td>
            <td>
            <button type="submit" class="btn btn-info" data-name="{{ $category->name }}" data-description="{{ $category->description }}" data-toggle="modal" data-target="#edit">Edit</button>
            <button type="submit" class="btn btn-danger" data-category_id="{{ $category->id }}" data-toggle="modal" data-target="#delete">Delete</button>
            </td>
		      </tr>

      		@endforeach

      	@endif
    </tbody>
</table>

@include('includes.categorymodal')

@stop