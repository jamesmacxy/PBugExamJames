@extends('layouts.dashboard')

@section('title', 'Change password')

@section('content-title', 'Change Password')

@section('active-item', 'Change Password')

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
                  <form id="form-change-password" role="form" method="POST" action="{{ route('change.password') }}" novalidate class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="col-md">             
                      <label for="current-password" class="col-sm-4 control-label">Current Password</label>
                      <div class="col-sm">
                        <div class="form-group">
                          <input type="password" class="form-control" id="current-password" name="old_password" placeholder="Password">
                        </div>
                      </div>
                      <label for="password" class="col-sm-4 control-label">New Password</label>
                      <div class="col-sm">
                        <div class="form-group">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                      </div>
                      <label for="password_confirmation" class="col-sm-4 control-label">Re-enter Password</label>
                      <div class="col-sm">
                        <div class="form-group">
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
                        </div>
                      </div>
                    </div>
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

