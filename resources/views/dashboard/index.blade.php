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
		    	<div class="col-sm-6">
		    	@foreach($categories as $category)

		    	<h2>{{ $category->name }}</h2>

		    	@endforeach
		    	</div>
		    	<div class="col-sm-6">
		    	@foreach($expenses as $expense)

		    	<h2>&#8369;{{ number_format($expense, 2) }}</h2>

		    	@endforeach
		    	</div>
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

      @foreach($categories as $category)

      '{{ $category->name }}',

      @endforeach

      ],
      datasets: [
        {
          data: [
          @foreach($expenses as $expense)

      			{{ $expense }},

      		@endforeach
          ],
          backgroundColor : [
          @foreach($categories as $category) 

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