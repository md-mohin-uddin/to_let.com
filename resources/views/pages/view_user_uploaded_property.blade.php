@extends('layouts.app')
@section('content')

<div style="background: #F5F5FA; padding:80px">

    <h3 class="bg-white p-3 text-success text-center" style="background-color: #e1f1e9e5; font-size:23px;">
        Details Of Property '{{ $property->property_code }}' :
    </h3>
    {{-- <h3 class="col-md-12 p-2 mb-3 text-success text-center" style="background-color: #e1f1e9e5; font-size:29px;">
        Details Of Property '{{ $property->property_code }}' :
    </h3> --}}

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white" style="font-size: 16px;"><strong>Property Owner's Details</strong></div>

                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td>Name : </td>
                            <td>{{ $property->name }}</td>
                        </tr>
                        <tr>
                            <td>Email : </td>
                            <td>{{ $property->email }}</td>
                        </tr>
                        <tr>
                            <td>Phone : </td>
                            <td>{{ $property->phone }}</td>
                        </tr>
                        <tr>
                            <td>Address : </td>
                            <td>{{ $property->address }}</td>
                        </tr>
                        <tr>
                            <td>City :</td>
                            <td>{{ $property->city_name }}</td>
                        </tr>
                        {{-- <tr>
                            <td>Subcity/Thana : </td>
                            <td>{{ $property->subcity_name }}</td>
                        </tr> --}}
                        <tr>
                            <td>Month :</td>
                            <td>{{ $property->month }}</td>
                        </tr>
                        <tr>
                            <td>Date :</td>
                            <td>{{ $property->date }}</td>
                        </tr>
                        <tr>
                            <td>Date-Time :</td>
                            <td>{{ date('d M, Y h:i A', strtotime($property->created_at)) }}</td>
                        </tr>
                        <tr>
                            <td>Year :</td>
                            <td>{{ $property->year }}</td>
                        </tr>
                        <tr>
                            <td>Status : </td>
                            <td style="font-size: 16px">
                                @if($property->status == 0)
                                    <span class="badge badge-warning p-1">Pending</span>
                                @elseif($property->status == 1)
                                    <span class="badge badge-info p-1">Uploaded</span>
                                @elseif($property->status == 2)
                                    <span class="badge badge-info p-1">On Progress </span>
                                @elseif($property->status == 3)
                                    <span class="badge badge-success p-1">Delivered </span>
                                @else
                                    <span class="badge badge-danger p-1">Canceled </span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Property Code :</td>
                            <td>{{ $property->property_code }}</td>
                        </tr>
                        <tr>
                            <td>Added By :</td>
                            <td style="font-size: 16px">
                                @if($property->added_by == NULL)
                                    {{Auth::user()->name}}
                                @else
                                    <span class="badge badge-primary p-1">Admin</span>
                                @endif
                            </td>
                        </tr>

                        @if(isset($property->amount) && isset($property->transaction_id))
                            <tr>
                                <td>Payment :</td>
                                <td><span class="badge badge-primary p-1">Paid (৳{{$property->amount}})</span></td>
                                {{-- <th>৳ {{$property->amount}}</th> --}}
                            </tr>
                            <tr>
                                <td>Transaction Id :</td>
                                <td>{{$property->transaction_id}}</td>
                            </tr>
                        @else
                            <tr>
                                <td>Payment :</td>
                                <td><span class="badge badge-danger p-1">Unpaid</span></td>
                            </tr>
                            <tr>
                                <td>Transaction Id :</td>
                                <td>Not Available</td>
                            </tr>
                        @endif

                    </table>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white" style="font-size: 16px;"><strong>Property Details</strong></div>
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td>Bedroom : </td>
                            <td>{{ $property->bedroom }}</td>
                        </tr>
                        <tr>
                            <td>Bathroom : </td>
                            <td>{{ $property->bathroom }}</td>
                        </tr>
                        <tr>
                            <td>Kitchen : </td>
                            <td>{{ $property->kitchen }}</td>
                        </tr>
                        <tr>
                            <td>Parking : </td>
                            <td>{{ $property->parking }}</td>
                        </tr>
                        <tr>
                            <td>Type :</td>
                            <td>{{ $property->type }}</td>
                        </tr>
                        <tr>
                            <td>Area :</td>
                            <td>{{ $property->area }}</td>
                        </tr>
                        <tr>
                            <td>Categoty :</td>
                            <td>{{ $property->category }}</td>
                        </tr>
                        <tr>
                            <td>Purpose :</td>
                            <td>{{ $property->purpose }}</td>
                        </tr>
                        <tr>
                            <td>Floor Level :</td>
                            <td>{{ $property->floor }}</td>
                        </tr>
                        <tr>
                            <td>Price :</td>
                            <td>৳ {{ $property->price }}</td>
                        </tr>
                        <tr>
                            <td>Discount Price :</td>
                            <td>৳ {{ $property->discount_price }}</td>
                        </tr>
                        <tr>
                            <td>Service Charge :</td>
                            <td>৳ {{ $property->service_charge }}</td>
                        </tr>
                        {{-- <tr>
                            <td class="text-primary">Total Price :</td>
                            <td class="text-primary">৳ {{ number_format($property->total_price) }}</td>
                        </tr> --}}

                    </table>
                </div>
            </div>
        </div>
    </div>


    <!--------- Details show ----------->
    <div class="col-lg-12 my-4">
        <div class="form-group pl-5" style="border:1px solid grey;padding:10px; background-color:rgb(253, 253, 253);">
            <label class="form-control-label" style="font-size: 16px;">
                <b>Property Details/Description : </b>
            </label>
            <br>
            <p>{!! $property->details !!}</p>
        </div>
    </div>


    <!--------- Video show ----------->
    <div class="col-lg-12">
        <div class="form-group" style="border:1px solid grey;padding:10px;background-color:rgb(253, 253, 253);">
        <label class="form-control-label">Video Link : </label>
            <br>
        <p style="margin-left: 35px">
            <a href="{{ $property->video }}" target="_blank">{{ $property->video }}</a>
        </p>
        </div>
    </div>


    <!--------- Map show ----------->
    <div class="col-lg-12">
        <div class="form-group" style="border:1px solid grey;padding:10px;background-color:rgb(253, 253, 253);">
        <label class="form-control-label">Map Link : </label>
            <br>
        {{-- <p style="margin-left: 35px">{{ $property->map_link }}</p> --}}
            @if (isset($property->map_link))
                <iframe src="{{$property->map_link}}" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            @else
                <span style="font-size: 15px;"> Sorry!!! No Map Link Is Available To Show At This moment. </span>
            @endif
        </div>
    </div>


    <!--------- Image show ----------->
    {{-- <div class="row p-4 mb-3">
        <div class="col-lg-4">
            <label>Image One (Main Thumbnail)<span class="tx-danger">*</span></label>
            <label class="custom-file">
            <img src="{{ URL::to($property->image_one) }}" style="height: 100px; width: 100px;" >
        </label>
        </div>
        <div class="col-lg-4">
            <label>Image Two <span class="tx-danger">*</span></label>
            <label class="custom-file">
            <img src="{{ URL::to($property->image_two) }}" style="height: 100px; width: 100px;" >
        </label>
        </div>
        <div class="col-lg-4">
            <label>Image Three <span class="tx-danger">*</span></label>
            <label class="custom-file">
            <img src="{{ URL::to($property->image_three) }}" style="height: 100px; width: 100px;" >
        </label>
        </div>
    </div> --}}




    <!--------- Review/Note/Comment Details start ----------->
    <h3 class="bg-white p-3 text-success text-center" style="background-color: #e1f1e9e5; font-size:23px; margin-top:95px;">
        Review/Comment About This Property '{{ $property->property_code }}' :
    </h3>
    <div class="row">
        <div class="col-md-12 mx-3" style="background: rgb(253, 253, 253);">
            @forelse ($commentOfProperty as $row)
                <div class="p-3 d-flex flex-row">
                    <img src="{{ asset('public/default.png') }}" class="rounded-circle mr-3" style="height: 30px; width: 30px;">
                    <div class="">
                        <p class="p-2 mb-0" style="background: rgb(242, 242, 242)">
                            {{$row->comment}}
                        </p>
                        <small class="m-0 p-0" style="color:gray">{{ date('d M, Y h:i A', strtotime($row->created_at)) }}</small>
                    </div>
                </div>
            @empty
                <p>No Comment Available Yet.</p>
            @endforelse
        </div>
    </div>
    <!--------- Review/Note/Comment Details end ----------->

</div>

@endsection
