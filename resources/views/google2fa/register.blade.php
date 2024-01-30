@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center " style="height: 70vh;S">
        <div class="col-md-8 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Set up Google Authenticator</div>
                <hr>
                <div class="panel-body" style="text-align: center;">
                    <p>Set up your two factor authentication by scanning the barcode below. Alternatively, you can use the code {{ $secret }}</p>
                    <div>
                        <?php echo $QR_Image; ?>
                    </div>
                    <p>You must set up your Google Authenticator app before continuing. You will be unable to login otherwise</p>
                    <div>
                        <a href="/complete-registration"><button class="btn-primary">Complete Registration</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection