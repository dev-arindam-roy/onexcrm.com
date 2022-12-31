<div class="row" id="validationErrorContainer" style="@if (count($errors->signupErrorBag)) display: block; @else display: none; @endif">
    <div class="col-md-12">
        <div class="alert alert-danger error-messages">
            <button type="button" class="close text-white" data-dismiss="alert">&times;</button>
            @if (count($errors->signupErrorBag))
                <h5><strong>Oops! - {{ count($errors->signupErrorBag) }} Invalid Input Found.</strong></h5>
                @if (Session::has('toastMessage') && !empty(Session::get('toastMessage')) && Session::has('toastMessageType') && Session::get('toastMessageType') == 'error')
                    <div class="mt-minus-10 mb-10"><small>{{ Session::get('toastMessage') }}</small></div>
                @endif
                @foreach ($errors->signupErrorBag->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            @endif
        </div>
    </div>
</div>