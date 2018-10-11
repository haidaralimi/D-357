@extends('master')

@section('style')
    <link href="dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <link href="css/dropdown_menu.css" rel="stylesheet">
    <link href="dashboard/css/animate.css" rel="stylesheet">
    <link href="dashboard/css/style.css" rel="stylesheet">
    <link href="dashboard/css/plugins/sweetalert/sweetalert.css" rel="stylesheet"/>
    <link href="css/hover/hover-min.css" rel="stylesheet">
    <link href="dashboard/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <style media="screen">
        .bts:hover {
            box-shadow: 4px 4px 4px 4px grey;
            transform: scale(1.1);
        }

        .bts {
            height: 70px;
            width: 155px;
        }

        #menu-me-drop {
            overflow: hidden;
            position: absolute;
            transition: height 1s ease;
        }

    </style>
@endsection

@section('content')
    <div class="row text-center">
        <div class="col-md-12">
            <h1>Report Income&nbsp;&nbsp;<img src="img/income_icon.png" width="100px;"/></h1>
        </div>
    </div>
    <br/>
    <br/>


     {{--financial report all report--}}
    <div class="row page-wrapper border-bottom white-bg"
         style=" margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">
        <div class="row">

            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6" style="margin-top:15px; margin-left:20px;">
                        <h3> Report Income single day </h3>
                    </div>
                </div>
                <form action="/finance_report_income/create">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" style="margin-left:35px;">
                                <label class="font-noraml">Select single day </label>
                                <div class="input-daterange input-group" id="">
                                <span class="input-group-addon">&nbsp;  <i class="fa fa-calendar"></i> &nbsp;<i
                                            class="fa fa-arrow-right"></i></span>
                                    <input type="date" class="input-sm form-control" name="create_date" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-sm btn-primary" type="submit" style="margin-top:23px;"><i
                                        class="fa fa-tag" style=" color:#ffe118 ;"></i>
                                &nbsp;Report &nbsp;&nbsp;
                            </button>
                        </div>
                    </div>
                </form>

            </div>


            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6" style="margin-top:15px; margin-left:20px;">
                        <h3> Report Income range day all type</h3>
                    </div>
                </div>
                <form action="/finance_report_income2">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group" style="margin-left:35px;">
                                <label class="font-noraml">Select Range</label>
                                <div class="input-daterange input-group" id="">
                                    <input type="date" class="input-sm form-control" name="start" required/>
                                    <span class="input-group-addon">TO &nbsp;<i class="fa fa-arrow-right"></i></span>
                                    <input type="date" class="input-sm form-control" name="end" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-sm btn-primary" type="submit"
                                    style="margin-top:23px; margin-left:10px;">
                                <i class="fa fa-tag"
                                   style=" color:#ffe118 ;"></i>
                                &nbsp;Report&nbsp;&nbsp;<span class="caret"></span></button>

                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
     {{--end all report--}}


    <br/>


     {{--finance report select by type income--}}
    <div class="row page-wrapper border-bottom white-bg "
         style=" margin-top:-20px;margin-left: 1px; margin-bottom: 20px; padding-bottom: 15px;">

        <div class="col-md-6">
            <form action="/finance_report_income3">
                <div class="row">
                    <div class="col-md-6" style="margin-top:15px; margin-left:20px;">
                        <h3> Report Income single day select type</h3>
                    </div>
                </div>
                <div class="row">


        </div>
    </div>
    {{-- select report by type income --}}


                    <div class="col-md-7">
                        <div class="form-group" style="margin-left:35px;">
                            <label class="font-noraml">Select single day </label>
                            <div class="input-daterange input-group" id="">
                            <span class="input-group-addon">&nbsp;  <i class="fa fa-calendar"></i> &nbsp;<i
                                        class="fa fa-arrow-right"></i></span>
                                <input type="date" class="input-sm form-control" name="single" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-sm btn-primary " type="submit"
                                style="margin-top:23px;"><i class="fa fa-tag" style=" color:#ffe118 ;"></i>
                            &nbsp;Report &nbsp
                        </button>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group" style="margin-left:35px;">
                            <label class="font-noraml">Select type income</label>
                            <div class="input-daterange input-group" id="">
                            <span class="input-group-addon">&nbsp;  <i class="fa fa-bars"></i> &nbsp;<i
                                        class="fa fa-arrow-right"></i></span>
                                <select type="text" class="input-sm form-control" name="select_type" required>
                                    <option value="patient">Patient</option>
                                    <option value="xray">Xray</option>
                                    <option value="other">Other Income</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6" style="margin-top:15px; margin-left:20px;">
                    <h3> Report Income range day select type </h3>
                </div>
            </div>
            <form action="/finance_report_income4">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group" style="margin-left:35px;">
                            <label class="font-noraml">Select Range</label>
                            <div class="input-daterange input-group" id="">
                                <input type="date" class="input-sm form-control" name="start" required/>
                                <span class="input-group-addon">TO &nbsp;<i class="fa fa-arrow-right"></i></span>
                                <input type="date" class="input-sm form-control" name="end" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-sm btn-primary" type="submit" style="margin-top:23px; margin-left:10px;"><i class="fa fa-tag" style=" color:#ffe118 ;"></i>
                            &nbsp;Report&nbsp</button>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group" style="margin-left:35px;">
                            <label class="font-noraml">Select type income</label>
                            <div class="input-daterange input-group" id="">
                            <span class="input-group-addon">&nbsp;  <i class="fa fa-bars"></i> &nbsp;<i
                                        class="fa fa-arrow-right"></i></span>
                                <select type="text" class="input-sm form-control" name="rangeSelect" required>
                                    <option value="patient">Patient</option>
                                    <option value="xray">Xray Income</option>
                                    <option value="other">Other Income</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
     {{--select report by type income--}}
@endsection


@section('script')
    <!-- script -->

    <script src="dashboard/js/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Data Tables -->
    <script src="dashboard/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="dashboard/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="dashboard/js/inspinia.js"></script>
    <script src="dashboard/js/plugins/pace/pace.min.js"></script>

    <script>
        $(function () {
            $("#datepicker").datepicker();
        });

        $(document).ready(function () {

            $("#datepicker").datepicker();
        });

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
        })
        ;
        $(document).on('click', function () {
            $('.getl').collapse('hide');
        })
    </script>



@endsection
