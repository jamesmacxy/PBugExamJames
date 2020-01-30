@extends('layouts.dashboard')

@section('title', 'Add Expenses')

@section('content-title', 'Add Expenses')

@section('active-item', 'Expense Management / Add Expenses')

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
		              <form method="post" action="{{ route('expenses.store') }}" autocomplete="off">
		              	{{ csrf_field() }}
		                <div class="card-body">
                      		<div class="form-group">
			                        	<label>Role</label>
				                        <select class="form-control" name="category_id">
				                        	<option selected disabled>Choose Category</option>
				                        	@foreach($categories as $category)

				                          		<option value="{{$category->id}}">{{ $category->name }}</option>

				                          	@endforeach

				                        </select>
			                </div>
			                <div class="form-group">
                        		<label>Amount</label>
                        		<div class="input-group mb-3">
                        			<div class="input-group-prepend">
                            			<span class="input-group-text" id="basic-addon1"><i class="fa fa-coins"></i></span>
                        			</div>
                        				<input type="number" min="0" class="form-control" name="amount" required>
                        		</div>
                      		</div>
			                <div class="form-group">
                  				<label>Date range:</label>
                  
                  				<div class="input-group mb-3">
                          			<div class="input-group-prepend">
                            			<span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                        			</div>
                    					<input type="text" class="form-control" id="datepicker" name="entry_date" value="" data-date-format="yyyy-mm-dd" required>
                  					</div>
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

@section('scripts')

<script>
	$('#datepicker').datepicker({
      autoclose: true,
    orientation: "bottom"
    })
</script>

@stop

