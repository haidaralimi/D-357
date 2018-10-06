@extends('master')

@section('style')
    <link href="css/hover/hover-min.css" rel="stylesheet">
@endsection

@section('content')


    <!-- Nav-buttons -->
    <div class="row wrapper border-bottom white-bg page-heading"
         style="margin-top:-20px; margin-bottom: 10px; margin-left:1px;">
        <h3 style="margin-left:43px;margin-top:10px;">Income Details</h3>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px;width:155px; margin-left:25px;"
                   href="/income"><i class="fa fa-money" style="color:#ffc000; font-size: 30px;"></i> <br/>From Patient</a>
            </h2>
        </div>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px; margin-left:15px;"
                   href="/xrey_income"><i class="fa fa-xing" style="color:#ffc000; font-size: 30px;"></i> <br/>X-Rey
                    Income</a></h2>
        </div>
        <div class="col-md-2 ">
            <h2><a class="btn btn-primary hvr-float-shadow" style="height:70px; width:155px; margin-left:15px;"
                   href="/ext_income"><i class="fa fa-user" style="color:#ffc000; font-size: 30px;"></i> <br/> From
                    Other</a></h2>
        </div>

        <div class="col-lg-4" style="float:right;">
            <div class="ibox float-e-margins" style=" background-color: lightyellow;">
                <div class="ibox-title" style=" background-color: lightyellow;">
                    <h5>Capital</h5>
                </div>
                <div class="ibox-content" style=" background-color: lightyellow;">
                    <h1 class="no-margins">40 886,200</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>

                </div>
            </div>
        </div>
    </div>
    <!-- End of navButtons -->

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Patient Income</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">Config option 1</a>
                        </li>
                        <li>
                            <a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                <div class="row">

                    <!--Search -->
                    <div class="col-sm-9">
                        <div class="input-group" style="margin-top:25px;">
                        <span class="input-group-btn">
                        <button type="button" style="margin-left:17px;" class="btn btn-sm btn-primary"><i
                                    class="fa fa-search"></i> Search</button></span>
                            <input type="text" placeholder="Patient ID" class="input-sm form-control">
                        </div>
                    </div>

                    <div class="col-sm-3" style="margin-top:25px;">
                        <a href="income2" type="button" class="btn btn-sm btn-primary">Show completed Patient</a>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="editable"
                           style="margin-top:80px;margin-left:30px;width:95%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>P-ID</th>
                            <th>P-Name</th>
                            <th>Estimated Fee</th>
                            <th>Paid Amount</th>
                            <th>Discount</th>
                            <th>Remaining Fee</th>
                            <th>Paid</th>
                            <th>P-Details</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($income as $incom)
                        <tr class="gradeX">
                            <td>{{$incom->id}}</td>
                            <td>{{$incom->patient->id_patient}}</td>
                            <td>{{$incom->patient->name}}</td>
                            <td>{{$incom->estimated_fee}}</td>
                            <td>{{$incom->paid_amount}}</td>
                            <td>{{$incom->discount}}</td>
                            <td>{{$incom->remaining_fee}}</td>
                            <td>
                                <button class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal"
                                        data-target="#{{$incom->id}}">&nbsp;Paid
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-xs btn-success fa fa-info" data-toggle="modal"
                                        data-target="#p{{$incom->id}}">&nbsp;P-Details
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-xs btn-success fa fa-info" data-toggle="modal"
                                        data-target="#e{{$incom->id}}">&nbsp;Edit
                                </button>
                            </td>

                        </tr>
                        @endforeach


                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>

                <div style="margin-left: 30px">{{$income->links()}}</div>
                    <!-- detailss modal -->
                    @foreach($income as $in)
                    <div class="modal inmodal" id="{{$in->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated fadeIn">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                class="sr-only">Close</span></button>
                                    <i class="fa fa-edit modal-icon text-primary"></i>
                                    <h4 class="modal-title">Edit Content</h4>
                                    <small>Fill the Paid amount</small>
                                </div>
                                <div class="modal-body">
                                    <form action="/income/{{$in->id}}" method="post">
                                        {{method_field('patch')}}
                                    <div class="row">
                                        <div class="form-group"><label class="col-md-3 control-label">Estimated Fee
                                                :</label>
                                            <div class="col-md-6"><h4>{{$in->estimated_fee}}</h4></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group"><label class="col-md-3 control-label">Remaining Fee
                                                :</label>

                                            <div class="col-md-6"><h4>{{$in->remaining_fee}}</h4></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group"><label class="col-md-3 control-label">Discount :</label>

                                            <div class="col-md-6"><h4>{{$in->discount}}</h4></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group"><label class="col-md-3 control-label">Paid Amount
                                                :</label>

                                            <div class="col-sm-6"><input type="text" class="form-control"
                                                                         name="paid_amount" placeholder="Paid Amount"></div>
                                        </div>
                                    </div>
                                        <br>
                                        <br>
                                        <button type="button" class="btn btn-white pull-right" data-dismiss="modal" style="margin-bottom: 10px;">Close</button>
                                         <button type="submit" class="btn btn-primary pull-right" style="margin-bottom: 10px;margin-right: 20px;">Save changes</button>

                                    </form>
                                    <br>


                                </div>

                                <div class="modal-footer">


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of model -->
                    @endforeach
                    {{--Edit Modal--}}
                    @foreach($income as $in)
                        <div class="modal inmodal" id="e{{$in->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated fadeIn">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                    class="sr-only">Close</span></button>
                                        <i class="fa fa-edit modal-icon text-primary"></i>
                                        <h4 class="modal-title">Edit Content</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/income3/{{$in->id}}" method="post">
                                            {{method_field('patch')}}
                                            <div class="row">
                                                <label class="control-label">P-ID:</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="{{$in->patient->id_patient}}" readonly>
                                                </div>
                                                <label class="control-label">Patient Name:</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="{{$in->patient->name}}" readonly>
                                                </div>
                                                <label class="control-label">Estimated Fee:</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="{{$in->estimated_fee}}" readonly>
                                                </div>
                                                <label class="control-label">Paid Amount:</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="paid_amount" value="{{$in->paid_amount}}">
                                                </div>
                                                <label class="control-label">Discount:</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="{{$in->discount}}" readonly>
                                                </div>
                                                <label class="control-label">Remaining Fee:</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="{{$in->remaining_fee}}" readonly>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <button type="button" class="btn btn-white pull-right" data-dismiss="modal" style="margin-bottom: 10px;">Close</button>
                                            <button type="submit" class="btn btn-primary pull-right" style="margin-bottom: 10px;margin-right: 20px;">Save changes</button>

                                        </form>
                                        <br>


                                    </div>

                                    <div class="modal-footer">


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of model -->
                    @endforeach

                    {{--End Edit modal--}}
                    <!-- detaills model -->
                    @foreach($income as $in)
                    <div class="modal inmodal" id="p{{$in->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content animated fadeIn">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                class="sr-only">Close</span></button>
                                    {{-- <i class="fa fa-edit modal-icon text-primary"></i> --}}
                                    <h4 class="modal-title">Patient Informatino</h4>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-hover table-responsive">
                                        <tr>
                                            <td style="font-weight:bold;">Patient ID:</td>
                                            <td>{{$in->id}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Patient Name:</td>
                                            <td>{{$in->patient->name}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Patient Age:</td>
                                            <td>{{$in->patient->age}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Patient Gender:</td>
                                            <td>{{$in->patient->gender}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Patient Address:</td>
                                            <td>{{$in->patient->address}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Phone Number:</td>
                                            <td>{{$in->patient->phone}}</td>
                                        </tr>

                                        <tr>
                                            <td style="font-weight:bold;">Dental Defect:</td>
                                            <td>{{$in->dentaldefect}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Treatment:</td>
                                            <td>{{$in->treatment}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight:bold;">Registration Date:</td>
                                            <td>{{$in->created_at}}</td>
                                        </tr>

                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of model -->
                        @endforeach


                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')

    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {

            $('.demo1').click(function () {
                swal({
                    title: "Welcome in Alerts",
                    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                });
            });

            $('.demo2').click(function () {
                swal({
                    title: "Successfully Send!",
                    text: "X-Ray Document Successfully send to doctor!",
                    type: "success"
                });
            });

            $('.demo3').click(function () {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function () {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
            });

            $('.demo4').click(function () {
                swal({
                        title: "Are you sure?",
                        text: "Your will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel plx!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
            });


        });
    </script>


@endsection
