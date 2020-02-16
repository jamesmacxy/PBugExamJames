@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content-title', 'Dashboard')

@section('active-item', 'Dashboard')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-4">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Expenses</h3>
			</div>
			<div class="card-body">
		    	<div class="row">
          <table class="table">
            <thead>
              <th>Category</th>
              <th>Expenses</th>
            </thead>
            <tbody>
              <!-- @foreach($categories as $category)
              <tr>
                <td>{{ $category->name }}</td>
                @foreach($expenses as $key => $expense)   
                    @if($key == $category->id)
                    <td>&#8369;{{ number_format($expense->sum, 2) }}</td>
                    @endif
                @endforeach
              </tr>
              @endforeach -->
              @foreach($expenses as $expense)
              <tr>   
                <th>{{ $expense->name }}</th>
                <td>&#8369;{{ number_format($expense->sum, 2) }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
		    	</div>
		    </div>
		</div>
	</div>
	<div class="col-md-6">
	<!-- DONUT CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Donut Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
</div>

@stop

@section('scripts')

<script>
	 function getRandomColor() {
        var letters = '0123456789ABCDEF'.split('');
        var color = '#';
        for (var i = 0; i < 6; i++ ) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
	//-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [

      @foreach($expenses as $expense)

      '{{ $expense->name }}',

      @endforeach

      ],
      datasets: [
        {
          data: [
          @foreach($expenses as $expense)

      			{{ $expense->sum }},

      		@endforeach
          ],
          backgroundColor : [
          @foreach($expenses as $expense) 

          getRandomColor(),

          @endforeach
          ],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })
</script>

@stop