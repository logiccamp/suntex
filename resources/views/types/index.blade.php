@extends('layouts.admin')

@section('agentcontent')
<section class="section">
<div class="">
    <h3>ALL TYPES</h3>

    <div class="my-3">
    <style>
        #initDataTable_wrapper {
            flex-direction: column !important;
            display: block !important;
            justify-content: start;
            align-items: center;
        }

        #initDataTable_wrapper label {
            justify-content: flex-start;
            text-align: left;
        }
    </style>
    <div class="col-sm-12">
        <table id="initDataTable" class="display table table-striped table-bordered table-hover " cellspacing="0" width="100%" role="grid" aria-describedby="zctb_info" style="width: 100%;">
            <thead>
                <tr role="row">
                    <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending" style="width: 120px;">Title</th>
                    <th class="sorting" tabindex="1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 120px;">Created</th>
                    <th style="width: 120px;">Action</th>
                </tr>
            </thead>
            <tbody>

            @foreach ($types as $type)
            
                <tr role="row" class="">
                    <td class="sorting_1">{{ $type->title }}</td>
                    <td> {{$type->created_at}} </td>
                    <td>
                        <form action="{{ route('managetypes.delete', $type->id) }}" method="post"> 
                            @csrf  <button class="btn btn-link">&times;</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    </div>

</section>
@endsection('agentcontent')