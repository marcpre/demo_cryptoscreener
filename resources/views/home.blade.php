@extends('layouts.layout')

@section('content')
    <!-- Default ordering -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Filters</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <!-- <a class="list-icons-item" data-action="reload"></a> -->
                    <!-- <a class="list-icons-item" data-action="remove"></a> -->
                </div>
            </div>
        </div>

        <div class="card-body">
            <fieldset>
                <!-- <legend class="font-weight-semibold"><i class="icon-cash4 mr-2"></i>Filter and Select</legend> -->

                <!-- First Row -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Pair:</label>
                            <select id="pairDD" class="form-control multiselect-select-all-filtering"
                                    multiple="multiple" data-fouc>
                                @foreach ($pairs as $p)
                                    <option value="{{ $p->pair }}">{{ $p->pair }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Symbol:</label>
                            <select id="symbolDD" class="form-control multiselect-select-all-filtering"
                                    multiple="multiple" data-fouc>
                                @foreach ($symbol as $s)
                                    <option value="{{ $s->symbol }}">{{ $s->symbol }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Volume:</label>
                            <div class="mb-1">
                                <input type="text" class="form-control ion-height-helper" id="ion-range" data-fouc>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Market Cap:</label>
                            <select id="marketcapDD" class="form-control multiselect-select-all-filtering"
                                    multiple="multiple" data-fouc>
                                @foreach ($symbol as $s)
                                    <option value="{{ $s->symbol }}">{{ $s->symbol }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /First Row -->

                <!-- Second Row -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Algorithm:</label>
                            <select id="algorithmDD" class="form-control multiselect-select-all-filtering"
                                    multiple="multiple" data-fouc>
                                @foreach ($algorithms as $a)
                                    <option value="{{ $a->algorithm }}">{{ $a->algorithm }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Exchange:</label>
                            <select id="exchangeDD" class="form-control multiselect-select-all-filtering"
                                    multiple="multiple" data-fouc>
                                @foreach ($exchanges as $e)
                                    <option value="{{ $e->name }}">{{ $e->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>% Change:</label>
                            <div class="mb-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-light dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                            <a href="#" class="dropdown-item">Below</a>
                                            <a href="#" class="dropdown-item">Below or equal</a>
                                            <a href="#" class="dropdown-item">Above</a>
                                            <a href="#" class="dropdown-item">Above or equal</a>
                                            <a href="#" class="dropdown-item">Equal</a>
                                            <a href="#" class="dropdown-item">Not equal</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Left dropdown">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Highest Price Range:</label>
                            <div class="mb-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-light dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                            <a href="#" class="dropdown-item">Below</a>
                                            <a href="#" class="dropdown-item">Below or equal</a>
                                            <a href="#" class="dropdown-item">Above</a>
                                            <a href="#" class="dropdown-item">Above or equal</a>
                                            <a href="#" class="dropdown-item">Equal</a>
                                            <a href="#" class="dropdown-item">Not equal</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Left dropdown">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Second Row -->

            </fieldset>
        </div>
    </div>

    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Digital Assets</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <!-- <a class="list-icons-item" data-action="collapse"></a> -->
                    <!-- <a class="list-icons-item" data-action="reload"></a> -->
                    <!-- <a class="list-icons-item" data-action="remove"></a> -->
                </div>
            </div>
        </div>

        <div class="card-body">

            <table class="table datatable-responsive dataTable" style="width:100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>TICKER</th>
                    <th>SYMBOL</th>
                    <th>ALGORITHM</th>
                    <th>LAST</th>
                    <th>CHG %</th>
                    <th>CHG</th>
                    <th>HIGH</th>
                    <th>LOW</th>
                    <th>VOL</th>
                    <th>EXCHANGE</th>
                    <!--
                    <th>Market Cap</th>
                    <th>Target Price (% 7d)</th>
                    <th>ICO_Year</th>
                    <th>Algorithm</th>
                    <th>Avg_Volume</th>
                    <th>Dividends</th>
                    <th>Liquitity</th>
                    -->
                </tr>
                </thead>
                <tbody>
                @foreach ($coins as $key=>$c)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $c->pair }}</td>
                        <td>{{ $c->symbol }}</td>
                        <td>{{ $c->algorithm }}</td>
                        <td>{{ number_format($c->last_price, 8) }}</td>
                        <td>{{ number_format($c->price_change_percentage * 100, 2)}}%</td>
                        <td>{{ number_format($c->price_change, 8) }}</td>
                        <td>{{ number_format($c->high_price, 8) }}</td>
                        <td>{{ number_format($c->low_price, 8) }}</td>
                        <td>{{ $c->base_volume }}</td>
                        <td>{{ $c->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /default ordering -->

    <script>

        $(document).ready(function () {
            var table = $('.datatable-responsive').DataTable();

            // Filtering Dropdown
            $('#pairDD').on('change', function () {
                let search = [];

                $.each($('#pairDD option:selected'), function () {
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(2).search(search, true, false).draw();
            });

            $('#symbolDD').on('change', function () {
                let search = [];

                $.each($('#symbolDD option:selected'), function () {
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(2).search(search, true, false).draw();
            });

            $('#algorithmDD').on('change', function () {
                let search = [];

                $.each($('#algorithmDD option:selected'), function () {
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(3).search(search, true, false).draw();
            });

            $('#exchangeDD').on('change', function () {
                let search = [];

                $.each($('#exchangeDD option:selected'), function () {
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(10).search(search, true, false).draw();
            });

            /**
             * Sliders
             */

            var min
            var max
            $('#ion-range').on('change', function () {
                var $inp = $(this);
                min = parseFloat($inp.data("from"));   // input data-from attribute
                max = parseFloat($inp.data("to"));       // input data-to attribute

                // let search = [];
                console.log(min, max);       // all values

                // table.draw();
                // table.column(4).search(search, true, false).draw();
            });


            $.fn.dataTable.ext.search.push(
                function (settings, data, dataIndex) {
                    var col = parseFloat(data[4]) || 0; // use data for the age column

                    if ((isNaN(min) && isNaN(max)) ||
                        (isNaN(min) && col <= max) ||
                        (min <= col && isNaN(max)) ||
                        (min <= col && col <= max)) {
                        return true;
                    }
                    return false;
                    console.log("data")
                    console.log(data)
                }
            );

        });
    </script>

@endsection
