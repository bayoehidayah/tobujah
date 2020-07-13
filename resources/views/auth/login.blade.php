@extends('theme')

@section('auth_content')
<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5 border">
                    <div class="brand-logo">
                        <img src="{{ asset("images/TBJ.png") }}" alt="logo">
                    </div>
                    <h4>Hello! let's get started</h4>
                    <h6 class="font-weight-light">Sign in to continue.</h6>
                    <form class="pt-3" method="post" action="{{route("login")}}">
                        @csrf
                        <div class="form-group @error('email') has-danger @enderror">
                            <input type="email" class="form-control @error('email') form-control-danger @enderror" id="emailForm" value="{{ old('email') }}" placeholder="Email" name="email">
                            @error('email')
                                <label id="email-error" class="error mt-2 text-danger" for="emailForm">
                                    {{ $message }}
                                </label>
                            @enderror
                        </div>
                        <div class="form-group @error('password') has-danger @enderror">
                            <input type="password" class="form-control @error('password') form-control-danger @enderror" id="passwordForm" placeholder="Password" name="password">
                            @error('password')
                                <label id="password-error" class="error mt-2 text-danger" for="passwordForm">
                                    {{ $message }}
                                </label>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                        </div>
                        <div class="my-2 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <label class="form-check-label text-muted">
                                    <input type="checkbox" class="form-check-input">
                                    Keep me signed in
                                </label>
                            </div>
                            <a href="#" class="auth-link text-black">Forgot password?</a>
                        </div>
                        <div class="text-center mt-4 font-weight-light">
                            Don't have an account? <a href="{{ url("register") }}" class="text-primary">Create</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
@endsection

{{-- @section('js')
<script>
    $(document).ready(function(){
        $("form").submit(function(e){
            e.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: form_data,
                dataType: "JSON",
                beforeSend : function(){
                    loadData();
                },
                success: function (response) {
                    setTimeout(function(){
                        closeLoad();
                        if(response.result){
                            toast("Success!", response.msg, "success", true);
                        }
                        else{
                            toast("Oops!", response.msg, "danger");
                        }
                    }, 1000);
                },
                error : function(textStatus){
                    console.log(textStatus);
                    setTimeout(function(){
                        closeLoad();
                        toast("Oops!", "Terjadi kesalahan dalam mengauthentikasi anda", "danger");
                    }, 1000);
                }
            });
        });
    });
</script>
@endsection --}}
