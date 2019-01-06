@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <table border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <td>Pair:</td>
                        <td>
                            <select id="nameDropDown">
                                <option value=""></option>
                                <option value="OAX/ETH	">OAX/ETH</option>
                                <option value="SALT/ETH">SALT/ETH</option>
                            </select>
                        </td>
                        <td>Market Cap:</td>
                        <td>
                            <select id="wetcv">
                                <option value=""></option>
                                <option value="Software Engineer">Software Engineer</option>
                                <option value="Sales Assistant">Sales Assistant</option>
                            </select>
                        </td>
                        <td>Current MIN Volume:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Current MAX Volume:</td>
                        <td><input type="text" id="max" name="max"></td>
                        <td>Minimum age:</td>
                        <td>
                            <select id="adfdas">
                                <option value=""></option>
                                <option value="Software Engineer">Software Engineer</option>
                                <option value="Sales Assistant">Sales Assistant</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Symbol:</td>
                        <td>
                            <select id="dropdown1">
                                <option value=""></option>
                                <option value="ABY">ABY</option>
                                <option value="NXT">NXT</option>
                                <option value="RCN">RCN</option>
                                <option value="OAX">OAX</option>
                                <option value="BCN">BCN</option>
                            </select>
                        </td>
                        <td>Market Cap 2:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Minimum age 2:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Minimum age 2:</td>
                        <td><input type="text" id="min" name="min"></td>
                    </tr>
                    <tr>
                        <td>Name 3:</td>
                        <td><input type="text" id="min" name="min"></td>
                    </tr>
                    </tbody>
                </table>
                <table id="example" class="display" style="width:100%">
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
                                <td>{{ number_format($c->price_change_percentage, 8) }}</td>
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
    </div>

    <!-- jquery -->
    <script src="{{ asset('js/jquery-3.3.1.js') }}" ></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" ></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}" ></script>

    <script>
        /* Custom filtering function which will search data in column four between two values
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = parseInt( $('#min').val(), 10 );
                var max = parseInt( $('#max').val(), 10 );
                var age = parseFloat( data[3] ) || 0; // use data for the age column

                if (( isNaN( min ) && isNaN( max )) ||
                    ( isNaN( min ) && age <= max )  ||
                    ( min <= age   && isNaN( max )) ||
                    ( min <= age   && age <= max ))
                {
                    return true;
                }
                return false;
            }
        );
        */

        $(document).ready(function() {
            var table = $('#example').DataTable({
                "pageLength": 100
            });

            // Filtering Dropdown
            $('#dropdown1').on('change', function () {
                table.columns(2).search( this.value ).draw();
            } );

            $('#nameDropDown').on('change', function () {
                table.columns(1).search( this.value ).draw();
            } );

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').keyup( function() {
                table.draw();
            } );
        } );
    </script>

@endsection
