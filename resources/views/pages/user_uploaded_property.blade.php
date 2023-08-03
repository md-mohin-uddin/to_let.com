@extends('layouts.app')
@section('content')


@php
    function loopIndex($object)
    {
        return ($object->currentPage() - 1) * $object->perPage() + 1;
    }
@endphp

<div style="background: #F5F5FA; padding:80px">
    <h3 class="bg-white p-2 mt-2 text-success text-center" style="background-color: #e1f1e9e5; font-size:25px;">
        My Uploaded Property List :
    </h3>


    <table class="table table-hover table-striped mt-4" border="1" style="border-color: rgb(215, 215, 215);">
        <thead class="bg-info text-white text-center">
            <tr>
                <th>SL No.</th>
                <th>Property Code</th>
                <th>Name</th>
                <th>Phone</th>
                <th>City Name</th>
                {{-- <th>Sub-City</th> --}}
                <th>Image</th>
                <th>Price (৳)</th>
                <th>Date-Time</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @forelse($property as $key => $row)
            <tr>
                <td>{{loopIndex($property) + $loop->index}}</td>
                <td>{{ $row->property_code }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->phone }}</td>
                <td>{{ $row->city_name }}</td>
                {{-- <td>{{ $row->subcity ? $row->subcity : 'N/A' }}</td> --}}
                <td><img src="{{ URL::to($row->image_one) }}" height="40px;" width="45px;"></td>
                {{-- <td>{{ $row->price }}</td> --}}
                @if (isset($row->discount_price))
                    <td>৳ {{ $row->discount_price }} (D)</td>
                @else
                    <td>৳ {{ $row->price }}</td>
                @endif
                <td>{{ date('d M, Y h:i A', strtotime($row->created_at)) }}</td>
                <td>
                    @if($row->status == 0)
                        <span class="badge badge-warning p-1">Pending</span>
                    @elseif($row->status == 1)
                        <span class="badge badge-primary p-1">Uploaded</span>
                    @elseif($row->status == 2)
                        <span class="badge badge-dark p-1">On Progress </span>
                    @elseif($row->status == 3)
                        <span class="badge badge-success p-1">Delivered </span>
                    @else
                        <span class="badge badge-danger p-1">Canceled </span>
                    @endif
                </td>
                <td>
                    <a href="{{ URL::to('user/uploaded/property/view/'.$row->id) }}" class="btn btn-sm btn-primary" title="View_Details">
                        <i class="fa fa-eye"> View</i>
                    </a>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="100%" class="text-danger text-center" style="font-size: 16px;">You did not upload any property yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

        <!--------------------Pagination--------------------->
        <div class="p-5" style="margin-left:600px; font-size: 14px;">
            {{ $property->links() }}
        </div>
</div>


@endsection
