@extends('master')

@section('style')



@endsection
@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.doctor_registration')}}</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="container">

                    <div class="row">
                        <form id="form" method="post" class="form-horizontal"
                              action="/doctors/update/{{ $doctor->id }}">
                            <div class="col-md-12" style="margin-left: -15px;">
                                <div class="col-sm-12">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">{{trans('file.first_name')}}</label>
                                            <input type="text" maxlength="20" class="form-control" name="first_name"
                                                   value="{{ $doctor->first_name }}"
                                                   placeholder="{{trans('file.first_name')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">{{trans('file.last_name')}}</label>
                                            <input type="text" maxlength="20" class="form-control" name="last_name"
                                                   value="{{ $doctor->last_name }}"
                                                   placeholder="{{trans('file.last_name')}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">{{trans('file.father_name')}}</label>
                                            <input type="text" maxlength="20" class="form-control" name="father_name"
                                                   value="{{ $doctor->father_name }}"
                                                   placeholder="{{trans('file.father_name')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">{{trans('file.age')}}</label>
                                            <input type="number" max="100" min="20" class="form-control" name="age"
                                                   value="{{ $doctor->age }}"
                                                   placeholder="{{trans('file.age')}}" required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-12">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class=" control-label">{{trans('file.phone')}}</label>
                                            <input type="text" maxlength="10" class="form-control"
                                                   value="{{ $doctor->phone }}" name="phone"
                                                   placeholder="{{trans('file.phone')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label">{{trans('file.department')}}</label>

                                            <select class="select2_demo_1 form-control" id="dept" name="department"
                                                    required>
                                                <option selected value="{{ $doctor->department }}">{{ $doctor->department }}</option>
                                                @foreach($doctor_department as $departments)
                                                    <option value="{{$departments->department}}">{{$departments->department}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group" style="margin-left:1px;"><label
                                                class="control-label">{{trans('file.max_patient')}}</label>
                                        <input type="number" max="100" value="{{ $doctor->max_patient }}"
                                               class="form-control" name="max_patient"
                                               placeholder="{{trans('file.max_patient')}}" required>
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-5" style="margin-left: -25px;">
                                    <div class="col-sm-12" style="">
                                        <div class="form-group">
                                            <div class="col-sm-5">
                                                <label style="line-height: 35px;">{{trans('file.from')}} </label>
                                                <input type="time" class="form-control" name="start_work_time" required value="{{ $doctor->from }}" />
                                            </div>
                                            <div class="col-sm-5">
                                                <label style="line-height: 35px;">{{trans('file.to')}}</label>
                                                <input type="time" class="form-control" name="end_work_time"  required value="{{ $doctor->to }}" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3" style="margin-left: -17px;"><label
                                                        class=" control-label">{{trans('file.salary_type')}}:</label></div>
                                            @if( $doctor->salary_type  == 'per')
                                                <div class="col-sm-3"><label><input type="radio" name="salary_type" value="per"
                                                                                    id="per" onclick="perSal()"
                                                                                    style="height: 22px;width:22px;"
                                                                                    checked
                                                                                    required><i></i>{{trans('file.per')}}%</label></div>
                                                <div class="col-sm-3"><label><input type="radio" name="salary_type"
                                                                                    onclick="fixSal()" id="fix" value="fix"
                                                                                    style="height: 22px;width:22px;">
                                                        <i></i>{{trans('file.fix')}}</label></div>
                                            @elseif( $doctor->salary_type == 'fix')
                                                <div class="col-sm-3"><label><input type="radio" name="salary_type" value="per"
                                                                                    id="per" onclick="perSal()"
                                                                                    style="height: 22px;width:22px;"
                                                                                    required><i></i>{{trans('file.per')}}%</label></div>
                                                <div class="col-sm-3"><label><input type="radio" name="salary_type"
                                                                                    onclick="fixSal()" id="fix" value="fix" checked
                                                                                    style="height: 22px;width:22px;">
                                                        <i></i>{{trans('file.fix')}}</label></div>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-5" style="margin-left: 100px;margin-top: 30px">

                                </div>
                                <div class="col-sm-12" style="margin-top: 20px;">
                                    <div class="col-sm-5 text-center" style="margin-top: 22px;margin-left: -30px;">
                                        <div class="form-group">
                                            <div class="col-sm-3"><label class="control-label">{{trans('file.gender')}}
                                                    :</label></div>
                                            @if( $doctor->gender == 'male')
                                            <div class="col-sm-4" style="margin-left: 15px;">
                                                <div class="i-checks"><label><input type="radio" value="male"
                                                                                    name="gender" checked
                                                                                    required>&nbsp;&nbsp;{{trans('file.male')}}
                                                    </label></div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="i-checks"><label> <input type="radio" value="female"
                                                                                     name="gender"
                                                                                     required>&nbsp;&nbsp; {{trans('file.female')}}
                                                    </label></div>
                                            </div>
                                                @elseif( $doctor->gender == 'female' )
                                                <div class="col-sm-4" style="margin-left: 15px;">
                                                    <div class="i-checks"><label><input type="radio" value="male"
                                                                                        name="gender"
                                                                                        required>&nbsp;&nbsp;{{trans('file.male')}}
                                                        </label></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="i-checks"><label> <input type="radio" value="female"
                                                                                         name="gender"
                                                                                         checked
                                                                                         required>&nbsp;&nbsp; {{trans('file.female')}}
                                                        </label></div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-6 text-left" style="width: 44%">
                                        <div class="form-group" style="margin-left: 20px;">
                                            <label class=" control-label"
                                                   id="label">{{trans('file.salary_amount')}}</label>
                                            <input type="number" class="form-control" name="salary_amount" id="sal" value="{{ $doctor->salary_amount }}"
                                                    required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="margin-top: 25px;">

                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-12 text-right">
                                        <div class="form-group">
                                            <button class="btn btn-white" type='reset'>{{trans('file.reset')}}</button>&nbsp;
                                            <button class="btn btn-primary " type="submit" name="submit" value="Save"
                                                    style="margin-right: 93px">{{trans('file.save')}}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

@section('script')
    <script>
        function perSal() {
            document.getElementById('label').innerHTML = 'Salary Percentage';
            document.getElementById('sal').setAttribute('max', 100);
            document.getElementById('sal').setAttribute('placeholder', 'Enter the percentage of salary');
            document.getElementById('sal').disabled = false;
        }

        function fixSal() {
            document.getElementById('label').innerHTML = 'Salary amount';
            document.getElementById('sal').setAttribute('max', 10000000);
            document.getElementById('sal').setAttribute('placeholder', 'Enter the amount  of salary');
            document.getElementById('sal').disabled = false;
        }
    </script>
    <script type="text/javascript">
        $(function () {
            $('#form').submit(function () {
                // Display a success toast, with a title
                toastr.info('Successfully Inserted !');
            });
        });
    </script>

@endsection
