@extends('layouts.app')

@section('content')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Date', 'Volume' ],
                @foreach($product_thailands as $item)
                [new Date('{{ $item->harvest_date }}'), {{ $item->total_volume }}  ],
                @endforeach
            ]);

            var options = {
            title: 'Volume of a whole country',
            curveType: 'function',
            legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            console.log('DOM fully loaded and parsed');
            $('#table').DataTable({
                ajax: {
                    url: "{{ url('api/product?resource_name='.request('resource_name')) }}",
                    dataSrc: ''
                },
                columns: [
                    { data: 'id' },
                    { data: 'harvest_date' },                    
                    { data: 'area' },
                    { data: 'resource_name' },
                    { data: 'label' },
                    { data: 'volume' },
                    { data: 'freq' } , 
                ]
            } );
        });
    </script>
    <div class="container">
        <div id="curve_chart" style="width: 900px; height: 500px"></div>
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Product</div>
                    <div class="card-body">
                        <a href="{{ url('/product/create') }}" class="btn btn-success btn-sm d-none" title="Add New Product">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/product') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right  d-none" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-sm" id="table" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Harvest Date</th><th>Area</th><th>Resource Name</th><th>Label</th><th>Volume</th><th>Freq</th><th class="d-none">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(false)
                                @foreach($product as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->harvest_date }}</td><td>{{ $item->area }}</td><td>{{ $item->resource_name }}</td><td>{{ $item->label }}</td><td>{{ $item->volume }}</td><td>{{ $item->freq }}</td>
                                        <td>
                                            <a href="{{ url('/product/' . $item->id) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/product/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                                </tbody>
                            </table>
                            @if(false)
                            <div class="pagination-wrapper"> {!! $product->appends(['search' => Request::get('search')])->render() !!} </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
