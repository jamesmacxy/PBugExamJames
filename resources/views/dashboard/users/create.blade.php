@extends('layouts.dashboard')

@section('title', 'Create User')

@section('content-title', 'Create User')

@section('active-item', 'User Management / Create User')

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
				              <form method="post" action="{{ route('users.store') }}" autocomplete="off">
				              	{{ csrf_field() }}
				                <div class="card-body">
					                <div class="form-group">
					                    <label>Name</label>
					                    <input type="text" class="form-control" name="name" placeholder="Name..">
					                </div>
					                <div class="form-group">
					                    <label>Email address</label>
					                    <input type="email" class="form-control" name="email" placeholder="Email..">
					                </div>
					                <div class="form-group">
			                        	<label>Role</label>
				                        <select class="form-control" name="role_id">
				                        	@foreach($roles as $role)

				                          		<option value="{{$role->id}}">{{ $role->name }}</option>

				                          	@endforeach

				                        </select>
			                     	</div>
					                <div class="form-group">
					                    <label">Password</label>
					                    <input type="password" class="form-control" name="password" placeholder="****">
					                </div>
					                <!-- /.card-body -->

					                <div class="card-footer">
					                  <button type="submit" class="btn btn-primary">Submit</button>
					                </div>
				            	</div>
				              </form>
			            @include('includes.form-errors')
		            </div>
		            <!-- /.card -->

	            </div>
        </div>

@stop