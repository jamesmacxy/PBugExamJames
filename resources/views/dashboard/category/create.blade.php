@extends('layouts.dashboard')

@section('title', 'Add Category')

@section('content-title', 'Add Category')

@section('active-item', 'Expense Management / Add Category')

@section('content')

     <div class="row justify-content-center">
				<div class="col-md-6">
	            <!-- general form elements -->
		            <div class="card card-primary">
		              <div class="card-header">
		                <h3 class="card-title">Form</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form method="post" action="{{ route('expensemanagement.store') }}" autocomplete="off">
		              	{{ csrf_field() }}
		                <div class="card-body">
		                   <div class="form-group">
                        		<label>Category Name</label>
                        		<input type="text" class="form-control" name="name" placeholder="Enter ..." required>
                      		</div>
                      		<div class="form-group">
		                        <label>Description</label>
		                        <textarea class="form-control" rows="3" name="description" placeholder="Enter ..." required></textarea>
		                    </div>
		                </div>
		                <!-- /.card-body -->

		                <div class="card-footer">
		                  <button type="submit" class="btn btn-primary">Submit</button>
		                </div>
		              </form>
		            @include('includes.form-errors')
		            </div>
		            <!-- /.card -->

	             </div>
        </div>   


@stop

