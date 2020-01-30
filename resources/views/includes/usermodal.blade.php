<!-- Modal -->
<div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="{{ route('users.update', $user->id) }}" method="post" autocomplete="off">
          {{csrf_field()}}
          {{ method_field('PATCH') }}
        <div class="modal-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name..">
          </div>
          <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email..">
          </div>
          <div class="form-group">
              <label>Role</label>
              <select class="form-control" name="role_id">
                  @foreach($roles as $role)

                    <option value="{{ $role->id }}" {{ ($user->role_id == $role->id) ? 'selected' : '' }}>{{ $role->name }}</option>

                  @endforeach

              </select>
          </div>
          <div class="form-group">
              <label">Password</label>
              <input type="password" class="form-control" name="password" placeholder="****">
          </div>
          <!-- /.card-body -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">      
        <h4 class="modal-title" id="myModalLabel">Are you sure?</h4>  
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>Do you really want to delete these records? This process cannot be undone.</p>
      </div>
      <div class="modal-footer">
        <form action="{{ route('users.destroy', $user->id) }}" method="post">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}

            <input type="hidden" name="id" id="user_id" value="">
            <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete</button>

        </form>
      </div>
    </div>
  </div>
</div>

@section('scripts')

<script>
  $('#edit').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button that triggered the modal
  var name = button.data('name') // Extract info from data-* attributes
  var email = button.data('email')

  var modal = $(this)
  modal.find('.modal-body #name').val(name);
  modal.find('.modal-body #email').val(email);
})

  $('#delete').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button that triggered the modal
  var user_id = button.data('user_id') // Extract info from data-* attributes
  var modal = $(this)
  modal.find('.modal-footer #user_id').val(user_id);
})
</script>

@stop