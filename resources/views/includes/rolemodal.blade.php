<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit Role</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="{{ route('roles.update', $role->id) }}" method="post" autocomplete="off">
          {{csrf_field()}}
          {{ method_field('PATCH') }}
        <div class="modal-body">
            <div class="form-group">
                 <label>Role Name</label>
                 <input type="text" class="form-control" id="name" name="name" placeholder="Enter ..." required>
            </div>
            <div class="form-group">
                 <label>Description</label>
                 <textarea class="form-control" rows="3" id="description" name="description" placeholder="Enter ..." required></textarea>
            </div>
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
        <form action="{{ route('roles.destroy', $role->id) }}" method="post">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}

            <input type="hidden" name="id" id="role_id" value="">
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
  var description = button.data('description')

  var modal = $(this)
  modal.find('.modal-body #name').val(name);
  modal.find('.modal-body #description').val(description);
})

  $('#delete').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button that triggered the modal
  var role_id = button.data('role_id') // Extract info from data-* attributes
  var modal = $(this)
  modal.find('.modal-footer #role_id').val(role_id);
})
</script>

@stop