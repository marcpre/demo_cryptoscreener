@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="">

                <h1>Hello from ag-grid!</h1>
                <button onclick="getSelectedRows()">Get Selected Rows</button>
                <div id="myGrid" style="height: 600px;width:500px;" class="ag-theme-balham"></div>

                <script type="text/javascript" charset="utf-8">
                    // specify the columns
                    var columnDefs = [
                        {headerName: "Make", field: "make", rowGroupIndex: 0 },
                        {headerName: "Price", field: "price"}
                    ];

                    var autoGroupColumnDef = {
                        headerName: "Model",
                        field: "model",
                        cellRenderer:'agGroupCellRenderer',
                        cellRendererParams: {
                            checkbox: true
                        }
                    }

                    // let the grid know which columns and what data to use
                    var gridOptions = {
                        columnDefs: columnDefs,
                        enableSorting: true,
                        enableFilter: true,
                        autoGroupColumnDef: autoGroupColumnDef,
                        groupSelectsChildren: true,
                        rowSelection: 'multiple'
                    };

                    // lookup the container we want the Grid to use
                    var eGridDiv = document.querySelector('#myGrid');

                    // create the grid passing in the div to use together with the columns & data we want to use
                    new agGrid.Grid(eGridDiv, gridOptions);

                    fetch('https://api.myjson.com/bins/ly7d1').then(function(response) {
                        return response.json();
                    }).then(function(data) {
                        gridOptions.api.setRowData(data);
                    })

                    function getSelectedRows() {
                        const selectedNodes = gridOptions.api.getSelectedNodes()
                        const selectedData = selectedNodes.map( function(node) { return node.data })
                        const selectedDataStringPresentation = selectedData.map( function(node) { return node.make + ' ' + node.model }).join(', ')
                        alert('Selected nodes: ' + selectedDataStringPresentation);
                    }
                </script>

            </div>
        </div>
    </div>
@endsection
