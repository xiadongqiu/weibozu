@extends('admin.index')
@section('zhuti')
    <div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
             - 用户列表
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <div id="DataTables_Table_1_length" class="dataTables_length">
            </div>
            <div class="dataTables_filter" id="DataTables_Table_1_filter">
                <label>
                    Search:
                    <input type="text" aria-controls="DataTables_Table_1">
                </label>
            </div>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending"
                        style="width: 182px;">
                            Rendering engine
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 245.889px;">
                            Browser
                        </th>
                        <th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-sort="descending" aria-label="Platform(s): activate to sort column ascending"
                        style="width: 229.889px;">
                            Platform(s)
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                        style="width: 155.889px;">
                            Engine version
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 115.889px;">
                            CSS grade
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                    <tr class="odd">
                        <td class="">
                            Misc
                        </td>
                        <td class="">
                            IE Mobile
                        </td>
                        <td class=" sorting_1">
                            Windows Mobile 6
                        </td>
                        <td class=" ">
                            -
                        </td>
                        <td class=" ">
                            C
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            Trident
                        </td>
                        <td class="">
                            Internet Explorer 7
                        </td>
                        <td class=" sorting_1">
                            Win XP SP2+
                        </td>
                        <td class=" ">
                            7
                        </td>
                        <td class=" ">
                            A
                        </td>
                    </tr>
                    <tr class="odd">
                        <td class="">
                            Trident
                        </td>
                        <td class="">
                            AOL browser (AOL desktop)
                        </td>
                        <td class=" sorting_1">
                            Win XP
                        </td>
                        <td class=" ">
                            6
                        </td>
                        <td class=" ">
                            A
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            Gecko
                        </td>
                        <td class="">
                            Netscape Browser 8
                        </td>
                        <td class=" sorting_1">
                            Win 98SE+
                        </td>
                        <td class=" ">
                            1.7
                        </td>
                        <td class=" ">
                            A
                        </td>
                    </tr>
                    <tr class="odd">
                        <td class="">
                            Gecko
                        </td>
                        <td class="">
                            Firefox 1.0
                        </td>
                        <td class=" sorting_1">
                            Win 98+ / OSX.2+
                        </td>
                        <td class=" ">
                            1.7
                        </td>
                        <td class=" ">
                            A
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            Gecko
                        </td>
                        <td class="">
                            Firefox 1.5
                        </td>
                        <td class=" sorting_1">
                            Win 98+ / OSX.2+
                        </td>
                        <td class=" ">
                            1.8
                        </td>
                        <td class=" ">
                            A
                        </td>
                    </tr>
                    <tr class="odd">
                        <td class="">
                            Gecko
                        </td>
                        <td class="">
                            Firefox 2.0
                        </td>
                        <td class=" sorting_1">
                            Win 98+ / OSX.2+
                        </td>
                        <td class=" ">
                            1.8
                        </td>
                        <td class=" ">
                            A
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            Gecko
                        </td>
                        <td class="">
                            Netscape Navigator 9
                        </td>
                        <td class=" sorting_1">
                            Win 98+ / OSX.2+
                        </td>
                        <td class=" ">
                            1.8
                        </td>
                        <td class=" ">
                            A
                        </td>
                    </tr>
                    <tr class="odd">
                        <td class="">
                            Gecko
                        </td>
                        <td class="">
                            Seamonkey 1.1
                        </td>
                        <td class=" sorting_1">
                            Win 98+ / OSX.2+
                        </td>
                        <td class=" ">
                            1.8
                        </td>
                        <td class=" ">
                            A
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="">
                            Gecko
                        </td>
                        <td class="">
                            Mozilla 1.7
                        </td>
                        <td class=" sorting_1">
                            Win 98+ / OSX.1+
                        </td>
                        <td class=" ">
                            1.7
                        </td>
                        <td class=" ">
                            A
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_1_info">
                Showing 1 to 10 of 57 entries
            </div>
            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                <a tabindex="0" class="first paginate_button paginate_button_disabled"
                id="DataTables_Table_1_first">
                    First
                </a>
                <a tabindex="0" class="previous paginate_button paginate_button_disabled"
                id="DataTables_Table_1_previous">
                    Previous
                </a>
                <span>
                    <a tabindex="0" class="paginate_active">
                        1
                    </a>
                    <a tabindex="0" class="paginate_button">
                        2
                    </a>
                    <a tabindex="0" class="paginate_button">
                        3
                    </a>
                    <a tabindex="0" class="paginate_button">
                        4
                    </a>
                    <a tabindex="0" class="paginate_button">
                        5
                    </a>
                </span>
                <a tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">
                    Next
                </a>
                <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">
                    Last
                </a>
            </div>
        </div>
    </div>
</div>  
@stop
@section('title','微博-user')