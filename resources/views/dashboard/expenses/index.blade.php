@extends('layouts.dashboard')

@section('title', 'Expenses')

@section('content-title', 'Expenses')

@section('active-item', 'Expense Management / Expenses')

@section('content')

<table class="table table-striped">
    <thead>
      <tr>
        <th>Category</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Created at</th>
        <th>Modify</th>
      </tr>
    </thead>
    <tbody>

    	@if($expenses)

    		@foreach($expenses as $expense)

		      <tr>
            <td>{{ $expense->category->name }}</td>
		        <td>&#8369;{{ $expense->amount }}</td>
		        <td>{{ $expense->description }}</td>
		        <td>{{ $expense->created_at == '' ? '' : $expense->created_at->diffForHumans() }}</td>
            <td>
            <button type="submit" class="btn btn-info" data-category_id="{{ $expense->category_id }}" data-amount="{{ $expense->amount }}" data-description="{{ $expense->description }}" data-entry_date="{{ $expense->entry_date }}" data-toggle="modal" data-target="#edit">Edit</button>
            <button type="submit" class="btn btn-danger" data-expense_id="{{ $expense->id }}" data-toggle="modal" data-target="#delete">Delete</button>
            </td>
		      </tr>

      		@endforeach

      	@endif
    </tbody>
</table>

@include('includes.expensesmodal')

@stop