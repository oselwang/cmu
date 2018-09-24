@extends('template.container')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <center style="font-size: 16px">
                        <div class="x_content">
                            <b><i id="quote"></i></b>
                            <br>
                            - <i id="author"> </i>
                        </div>
                    </center>
                    <div class="x_content">
                        <br/>
                        <form class="form-horizontal form-label-left" method="post"
                              action="{{url('setup/dealer/set/session')}}" id="set-session-form">
                            {{csrf_field()}}
                            <div class="form-group" id="company-select-box">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Perusahaan
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="dealer_id" class="form-control">

                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group" id="submit-btn">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script src="{{asset('js/home.min.js')}}?v=0.1"></script>
@stop