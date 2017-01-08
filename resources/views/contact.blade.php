@extends('layout') @section('main')
<div class="row">
    <div class="col-sm-12">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
    <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"> ReCaptcha testing form </div>
            <div class="panel-body">
                <form class="form-horizontal" action="" method="post">
                    {!! csrf_field() !!}
                    <!-- recaptcha -->
                    {{Request::is('contactd')}}
                    <div class="form-group">
                        <div class="col-sm-4">
                            <img src="{{url('/images/robot.png')}}" class="img-responsive" alt="Image">
                        </div>
                        <div class="col-md-4">
                            <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" name="send" class="btn btn-primary">Send <span class="fa fa-paper-plane-o"></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection