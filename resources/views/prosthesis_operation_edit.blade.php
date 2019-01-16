@extends('master')

@section('style')
    <style>
        /*image gallery*/
        .image-check {
            cursor: pointer;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border: 4px solid transparent;
            margin-bottom: 0;
            outline: 0;
        }

        .image-check input[type="checkbox"] {
            display: none;
        }

        .image-check-checked {
            background-color: #ff4542;
            border-radius: 15px;
        }

        .ullist {
            display: table;
            width: 100%;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        .ullist li {
            display: table-cell;
        }

        .prothisis li {
            display: inline-block;
            /* You can also add some margins here to make it look prettier */
            zoom: 1;
            *display: inline;
            margin-left: 20px;
            /* this fix is needed for IE7- */
        }
    </style>

@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.epinfo')}}&nbsp;<i class="fa fa-info"></i></h5>
            </div>
            <div class="ibox-content" id="divone">
                <a class="btn btn-primary" href="/prosthesis/create/{{$patient_in_treatment->id}}"><i class="fa fa-arrow-left"></i>&nbsp; Back</a>
                <br/>

                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center">Teeth number with position : [ @foreach($tee as $t) {{$t->tooth_number }} , @endforeach ]</h4>
                        <div class="container-fluid">

                            <div class="row" style="margin-left:-50px;">
                                <div class="col-md-6 col-xs-6">
                                    <ul class="ullist">


                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '8 Upper Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/8.png') }}" width="100%"
                                                     height="auto"
                                                     style="border-bottom: 1px"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="8 Upper Left"
                                                />
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>

                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '7 Upper Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/7.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="7 Upper Left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>

                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '6 Upper Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/6.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="6 Upper left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>

                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '5 Upper Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/5.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="5 Upper Left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '4 Upper Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/4.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="4 Upper Left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '3 Upper Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/3.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="3 Upper Left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '2 Upper Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/2.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="2 Upper Left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '1 Upper Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/1.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="1 Upper Left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <ul class="ullist">
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '1 Upper Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/1.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="1 Upper Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '2 Upper Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/2.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="2 Upper Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '3 Upper Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/3.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="3 Upper Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '4 Upper Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/4.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="4 Upper Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '5 Upper Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/5.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="5 Upper Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '6 Upper Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/6.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="6 Upper Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '7 Upper Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/7.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="7 Upper Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '8 Upper Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooths/8.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="8 Upper Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            {{-- Lower Tooths--}}
                            <div class="row" style="margin-left:-50px;">
                                <div class="col-md-6 col-xs-6">
                                    <ul class="ullist">
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '8 Lower Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/8.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="8 Lower Left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '7 Lower Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/7.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="7 Lower Left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '6 Lower Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/6.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="6 Lower left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '5 Lower Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/5.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="5 Lower Left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '4 Lower Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/4.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="4 Lower Left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '3 Lower Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/3.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="3 Lower Left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '2 Lower Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/2.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="2 lower Left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '1 Lower Left')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/1.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]"
                                                       value="1 lower Left"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <ul class="ullist">
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '1 Lower Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/1.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]" value="1 Lower Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '2 Lower Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/2.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]" value="2 Lower Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '3 Lower Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/3.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]" value="3 Lower Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '4 Lower Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/4.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]" value="4 Lower Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '5 Lower Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/5.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]" value="5 Lower Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '6 Lower Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/6.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]" value="6 Lower Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '7 Lower Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/7.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]" value="7 Lower Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="image-check"
                                                   @foreach($tee as $t)
                                                   @if($t->tooth_number == '8 Lower Right')
                                                   style="background-color:#ea615a;border-radius:15px;"
                                                    @endif
                                                    @endforeach
                                            >
                                                <img class="img-responsive"
                                                     src="{{ asset('img/tooth_lower/8.png') }}" width="100%"
                                                     height="auto"/>
                                                <input type="checkbox" name="teeth_number[]" value="8 Lower Right"/>
                                                <i class="fa fa-check hidden"></i>
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <form action="/operation/{{ $treatment->id }}" method="post">
                    @method('patch')
                    <input type="text" name="teeth_number_all" hidden id="tooth_number_general"/>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <h2>{{ $treatment->type_treatment }}</h2>
                                <input type="hidden" value="{{$treatment->type_treatment}}" name="treatment_type">
                                <input name="id" value="{{ $treatment->id }}" type="hidden"
                                       class="form-control required">


                                <div class="form-group">
                                    <label>Status Visits *</label>
                                    <ul class="prothisis">
                                        @if($treatment->status_visits == 'complete')
                                            <li>
                                                <div class="i-checks"><label>Complate : <input type="radio" checked
                                                                                               name="status_visits"
                                                                                               value="complete"/></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="i-checks"><label>Not Complate : <input type="radio"
                                                                                                   name="status_visits"
                                                                                                   value="not complete"/></label>
                                                </div>
                                            </li>
                                        @else
                                            <li>
                                                <div class="i-checks"><label>Complate : <input type="radio"
                                                                                               name="status_visits"
                                                                                               value="complete"/></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="i-checks"><label>Not Complate : <input type="radio" checked
                                                                                                   name="status_visits"
                                                                                                   value="not complete"/></label>
                                                </div>
                                            </li>
                                    </ul>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Treatment Cost *</label>
                                    <input type="number" value="{{ $treatment->estimated_fee }}" name="estimated_fee"
                                           class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <label>Discount Fee *</label>
                                    <input type="number" value="{{ $treatment->discount }}" name="discount"
                                           class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="5"
                                              name="description">{{ $treatment->description }}</textarea>
                                </div>
                                <div>
                                    <a class="btn btn-white" href="{{ URL::previous() }}"><i
                                                class="fa fa-arrow-left"></i>&nbsp; Back</a>
                                    <button class="btn btn-primary" type="submit" id="submitform">Save &nbsp;<i
                                                class="fa fa-save"></i></button>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- modal window gereral treatment --}}
    <div class="modal inmodal" id="general_treatment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">

                <form @foreach($teeth as $tr) action="/prosthesis_treatment/{{$tr->id}} @endforeach
                        " method="post">
                    {{method_field('PATCH')}}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">&times;</span><span
                                    class="sr-only">{{trans('file.close')}}</span></button>
                        <i class="fa fa-edit modal-icon text-primary"></i>
                        <h4 class="modal-title">Prosthesis Treatment</h4>
                    </div>
                    <div class="modal-body">
                        <input name="treatment_id" value="{{$treatment->id }}" type="hidden">

                        {{--<input type="hidden" name="type_treatment" value="General Treatment"/>--}}
                        <input type="hidden" name="teeth_id" value="null" id="teeth_id"/>

                        <div class="form-group">
                            <label>Tooth number</label>
                            @foreach($tee as $t)
                                <input type="text" value="{{$t->tooth_number}}" id="tooth_number" name="tooth_number" class="form-control"/>
                            @endforeach
                        </div>

                        <div class="form-group">
                            <label>Type Of Prosthesis *</label>
                            <ul class="prothisis">
                                <li>
                                    <div class="i-checks"><label>Static &nbsp;<input type="radio"
                                                                                     name="type_prosthesis"
                                                                                     value="static"
                                                                                     checked/></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="i-checks"><label>Dynamic &nbsp;<input type="radio"
                                                                                      name="type_prosthesis"
                                                                                      value="dynamic"/></label>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <label>Select shade teeth</label>
                            <select class="form-control" name="shade" required>
                                <option
                                        selected>Select shade
                                </option>
                                @foreach($teethShadeList as $teethshade)
                                    <option value="{{ $teethshade->shade }}">{{ $teethshade->shade }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Select Cover :</label>
                            <select class="form-control" name="type_cover"
                                    onchange="getFeeTreatment(this);" required>
                                <option selected>Select Cover</option>
                                @foreach($teethCoverList as $cover)
                                    <option value="{{ $cover->type }}"
                                            id="{{ $cover->price }}">
                                        {{ $cover->type }} </option>
                                @endforeach
                            </select>
                        </div>

                        <br>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-white pull-right" data-dismiss="modal"
                                style="margin-bottom: 10px;">{{trans('file.close')}}</button>
                        <button type="submit" class="btn btn-primary pull-right" id="refresh-btn"
                                style="margin-bottom: 10px;margin-right: 20px;">{{trans('file.save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection


@section('script')
    <script>
        $(document).on("click", "#submitform", function () {

            var valuesArray = $('input:checkbox:checked').map(function () {
                return $(this).val();
            }).get().join();

            $("#tooth_number_general").val(valuesArray);
        });


        $(".tooth_position").on("click", function () {
            tooth_pos = $(this).val();
            $("#tooth_position").val(tooth_pos);
        });

        $(".image-check").each(function () {
            if ($(this).find('input[type="radio"]').first().attr("checked")) {
                $(this).addClass('image-check-checked');
            }
            else {
                $(this).removeClass('image-check-checked');
            }
        });


        // sync the state to the input
        var tooth_num;
        var tooth_pos = null;

        $(".image-check").on("click", function (e) {
            $(this).toggleClass('image-check-checked');
            var $checkbox = $(this).find('input[type="checkbox"]');
            var $checkbox_lenght = $(this).find('input[type="checkbox"]').length;
            $checkbox.prop("checked", !$checkbox.prop("checked"));
            tooth_num = $checkbox.val();
            $('#tooth_number_3').val($checkbox.val());
            e.preventDefault();
        });

        $("#btnsubmit").on("click", function (e) {
            var $checkbox = $("input[type='checkbox']");
            var $checkbox_lenght = $('input[type="checkbox"]').length;
            var values;
            for (var i = 0; i < $checkbox_lenght; i++) {
                values = $checkbox[i].value;
            }
            e.preventDefault();
        });


        $(".image-check").on("click", function (e) {
            $(this).toggleClass('image-check-checked');
            var $checkbox = $(this).find('input[type="checkbox"]');
            tooth_num = $checkbox.val();
            $('.modal-body #tooth_number').val(tooth_num);
            $('#general_treatment').modal('show');
            e.preventDefault();
        });

        $(function () {
            if ($(window).width() <= 900) {
                $("img").each(function () {
                    $(this).attr("src", $(this).attr("src").replace("img", "img_phone"));
                });
            }
        });
    </script>


@endsection
