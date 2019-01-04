@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">

                <table border="0" cellspacing="5" cellpadding="5">
                    <tbody>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Market Cap:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Minimum age:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Minimum age:</td>
                        <td><input type="text" id="min" name="min"></td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Market Cap:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Minimum age:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Minimum age:</td>
                        <td><input type="text" id="min" name="min"></td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Market Cap:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Minimum age:</td>
                        <td><input type="text" id="min" name="min"></td>
                        <td>Minimum age:</td>
                        <td><input type="text" id="min" name="min"></td>
                    </tr>
                    </tbody>
                </table>
                <table id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Symbol</th>
                        <th>Sector</th>
                        <th>Industry</th>
                        <th>Market Cap</th>
                        <th>Price</th>
                        <th>Circulating Supply</th>
                        <th>Volume (24h)</th>
                        <th>% 1h</th>
                        <th>% 24h</th>
                        <th>% 7d</th>
                        <th>Exchange</th>
                        <th>Description</th>
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
                                <td>{{ $c->coin_name }}</td>
                                <td>{{ $c->symbol }}</td>
                                <td>Sector</td>
                                <td>Industry</td>
                                <td>{{ $c->market_cap }}</td>
                                <td>Price</td>
                                <td>{{ $c->total_supply }}</td>
                                <td>{{ $c->base_volume }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
        /* Custom filtering function which will search data in column four between two values */
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

        $(document).ready(function() {
            var table = $('#example').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').keyup( function() {
                table.draw();
            } );
        } );
    </script>

@endsection
