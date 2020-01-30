<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit Expense</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="{{ route('expenses.update', $expense->id) }}" method="post" autocomplete="off">
          {{csrf_field()}}
          {{ method_field('PATCH') }}
        <div class="modal-body">
            <div class="card-body">
                          <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" id="category_id" name="category_id">
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
                                <input type="number" min="0" class="form-control" id="amount" name="amount" required>
                            </div>
                          </div>
                      <div class="form-group">
                          <label>Date range:</label>
                  
                          <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                              </div>
                              <input type="text" class="form-control" id="entry_date" name="entry_date" value="" data-date-format="yyyy-mm-dd" required>
                            </div>
                      </div>
                          <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" id="description" name="description" placeholder="Enter ..." required></textarea>
                        </div>
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
        <form action="{{ route('expenses.destroy', $expense->id) }}" method="post">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}

            <input type="hidden" name="id" id="expense_id" value="">
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
  var amount = button.data('amount') // Extract info from data-* attributes

  amount = amount.replace(/\,/g,''); // remove comma
  amount = parseInt(amount,10);

  var category_id = button.data('category_id')
  var description = button.data('description')
  var entry_date = button.data('entry_date')

  var modal = $(this)
  modal.find('.modal-body #amount').val(amount);
  modal.find('.modal-body #description').val(description);
  modal.find('.modal-body #entry_date').val(entry_date);
  modal.find('.modal-body #category_id').val(category_id);
})

  $('#delete').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button that triggered the modal
  var expense_id = button.data('expense_id') // Extract info from data-* attributes
  var modal = $(this)
  modal.find('.modal-footer #expense_id').val(expense_id);
})
</script>

@stop