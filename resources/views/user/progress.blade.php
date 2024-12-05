@extends('main')

@section('content')
    <div class="container mt-6 my-md-5">

        <style>
            .chart-center-text {
                display: flex;
                justify-content: center;
                color: black
            }
        </style>

        <div class="progress-chart">
            <canvas id="myChart" width="50" height="50"></canvas>
        </div>

        <script>
            window.addEventListener('load', function() {
                var ctx = document.getElementById('myChart').getContext('2d');

                var data = {
                    labels: ['Completed', 'Remaining'],
                    datasets: [{
                        data: [{{ $completed_percentage }}, 100 - {{ $completed_percentage }}],
                        backgroundColor: ['#007bff', '#6c757d'],
                        borderColor: ['#007bff', '#6c757d'],
                        borderWidth: 1
                    }]
                };

                var options = {
                    cutoutPercentage: 10, // Adjust the cutout percentage as needed
                    legend: {
                        display: false
                    },
                    tooltips: {
                        enabled: false
                    },
                    aspectRatio: 5
                };

                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: data,
                    options: options
                });

                // Add the percentage to the chart
                var centerText = document.createElement('div');
                centerText.className = 'chart-center-text';
                centerText.textContent = {{ $completed_percentage }} + '%';
                ctx.canvas.parentNode.appendChild(centerText);
            });
        </script>

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <p style="width: fit-content" class="m-0">Food</p>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">name</th>
                                    <th scope="col">carbohydrates</th>
                                    <th scope="col">fat</th>
                                    <th scope="col">protein</th>
                                    <th scope="col">sugar</th>
                                    <th scope="col">calories</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($today_food as $food)
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">{{ $food->name }}</th>
                                        <th scope="col">{{ $food->carbs }}</th>
                                        <th scope="col">{{ $food->fat }}</th>
                                        <th scope="col">{{ $food->protein }}</th>
                                        <th scope="col">{{ $food->sugar }}</th>
                                        <th scope="col">{{ $today_user_foods[$loop->index]->food_id == $food->id ? $today_user_foods[$loop->index]->calories : 0 }}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>total</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>{{ $today_user_foods_sum }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <p style="width: fit-content" class="m-0">Food</p>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">name</th>
                                    <th scope="col">calories</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($today_exercises as $exercise)
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">{{ $exercise->name }}</th>
                                        <th scope="col">{{ $today_user_exercise[$loop->index]->exercise_id == $exercise->id ? $today_user_exercise[$loop->index]->calories : 0 }}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>total</th>
                                    <th>{{ $today_user_exercise_sum }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
