@extends('layouts.layout')

@section('content')
    <!-- Default ordering -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Filters</h5>
            <div class="header-elements">
                <button id="refreshPage" type="button" class="btn bg-blue"><i class="icon-bin mr-2"></i> Clear</button>
                <div class="btn-group">
                    <button type="button" style="margin-right: 20px; margin-left: 5px;"
                            class="btn bg-green-400 dropdown-toggle" data-toggle="dropdown">Save filters
                    </button>
                    <div id="copyDropdown" class="dropdown-menu dropdown-menu-right">
                        <div class="form-group"
                             style="width: 500px;padding-left: 10px;padding-right: 10px;padding-top: 5px;padding-bottom: 5px;">
                            <label><h3>Share your screener:</h3></label>
                            <p>
                                Share or save your filters using the web URL.
                            </p>
                            <div class="input-group">
                                <input id="cpy" type="text" class="form-control" placeholder="URL">
                                <span class="input-group-append">
									<button id="cpyBtn" class="btn btn-light" type="button" data-clipboard-target="#cpy" data-popup="tooltip" title="Click to copy!" data-trigger="manual" data-container="body"><i class="icon-clipboard"></i></button>
								</span>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <label>High Price Range:</label>
                            <div class="mb-1">
                                <div class="input-group">
                                    <select id="operatorHigh" class="form-control select-search select-fixed-single"
                                            data-fouc>
                                        <option value="<">Below</option>
                                        <option value="<=">Below or equal</option>
                                        <option value=">">Above</option>
                                        <option value=">=">Above or equal</option>
                                        <option value="==">Equal</option>
                                        <option value="!=">Not equal</option>
                                    </select>
                                    <input id="highInput" style="margin-left: 10px;" type="text" class="form-control"
                                           placeholder="HIGH">
                                </div>
                            </div>
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
                                    <select id="operator" class="form-control select-search select-fixed-single"
                                            data-fouc>
                                        <option value="<">Below</option>
                                        <option value="<=">Below or equal</option>
                                        <option value=">">Above</option>
                                        <option value=">=">Above or equal</option>
                                        <option value="==">Equal</option>
                                        <option value="!=">Not equal</option>
                                    </select>
                                    <input id="changePercentageInput" style="margin-left: 10px;" type="text"
                                           class="form-control" placeholder="CHG %">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Last Price Range:</label>
                            <div class="mb-1">
                                <div class="input-group">
                                    <select id="operatorLast" class="form-control select-search select-fixed-single"
                                            style="margin-right: 10px;" data-fouc>
                                        <option value="<">Below</option>
                                        <option value="<=">Below or equal</option>
                                        <option value=">">Above</option>
                                        <option value=">=">Above or equal</option>
                                        <option value="==">Equal</option>
                                        <option value="!=">Not equal</option>
                                    </select>
                                    <input id="lastInput" style="margin-left: 10px;" type="text" class="form-control"
                                           placeholder="Last">
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

            /**
             * Dropdown with Input Field
             */
            var op = "<"; // % CHG
            var opl = "<"; // LAST
            var oph = "<"; // HIGH

            var operators = {
                "==": function (a, b) {
                    return a == b;
                },
                "<=": function (a, b) {
                    return a <= b;
                },
                ">=": function (a, b) {
                    return a >= b;
                },
                "<": function (a, b) {
                    return a < b;
                },
                ">": function (a, b) {
                    return a > b;
                },
                "!=": function (a, b) {
                    return a != b;
                }
            };

            //% Change
            $.fn.dataTable.ext.search.push(
                function (settings, data, dataIndex) {
                    var changePercentageInput = parseFloat($('#changePercentageInput').val(), 10);
                    var changePerc = parseFloat(data[5]) || 0; // use data for the changePerc column

                    if ((isNaN(changePercentageInput)) || (operators[op](+changePerc, +changePercentageInput))) {
                        // console.log(changePercentageInput + " " + changePerc);
                        return true;
                    }
                    return false;
                }, function (settings, data, dataIndex) {
                    let c = parseFloat($('#lastInput').val(), 10);
                    let l = parseFloat(data[4]) || 0; // CHG %

                    if ((isNaN(c)) || (operators[opl](+l, +c))) {
                        console.log(c + " " + l);
                        return true;
                    }
                    return false;
                }, function (settings, data, dataIndex) {
                    let c = parseFloat($('#highInput').val(), 10);
                    let l = parseFloat(data[7]) || 0; // HIGH

                    if ((isNaN(c)) || (operators[oph](+l, +c))) {
                        // console.log(c + " " + l);
                        return true;
                    }
                    return false;
                }, function (settings, data, dataIndex) {
                    // convert thousand seperator to real float number
                    // uses regex for replaceAll: https://stackoverflow.com/questions/1144783/how-to-replace-all-occurrences-of-a-string-in-javascript
                    var col = parseFloat(data[9].replace(/,/g, "")) || 0; // VOLUME

                    if ((isNaN(min) && isNaN(max)) ||
                        (isNaN(min) && col <= max) ||
                        (min <= col && isNaN(max)) ||
                        (min <= col && col <= max)) {
                        // console.log("data1")
                        // console.log(data)
                        return true;
                    }
                    return false;
                    console.log("data")
                    console.log(data)
                }
            );

            $('#operator').on('change', function () {
                op = this.value;
                // console.log(op)
                table.draw();
            });

            $('#changePercentageInput').keyup(function () {
                table.draw();
            });

            //Last
            $('#operatorLast').on('change', function () {
                opl = this.value;
                table.draw();
            });

            $('#lastInput').keyup(function () {
                table.draw();
            });

            //HIGH
            $('#operatorHigh').on('change', function () {
                oph = this.value;
                table.draw();
            });

            $('#highInput').keyup(function () {
                table.draw();
            });

// intantiate clipboardjs
            new ClipboardJS('#cpyBtn');

            $('#copyDropdown').on('click', function (e) {
                e.stopPropagation();
            });

            $('#refreshPage').click(function() {
                location.reload();
            });
        });
    </script>

@endsection
