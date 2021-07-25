@extends("layouts.app")

@section("content")
    <div class="container">
        @include("partials.errors")

        @if(session("message"))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>{{ session("message") }}</strong> 
            </div>
            
            <script>
              $(".alert").alert();
            </script>
        @endif

        <form action="{{ route("contact.send") }}" method="post">
            @csrf

            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="John Doe" aria-describedby="fullNameHelper" minlength="5" maxlenght="255" value="{{old('full_name')}}" required>
                <small id="fullNameHelper" class="text-muted">Type here your full name</small>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="example@example.com" value="{{old('email')}}" required>
                <small id="emailHelpId" class="form-text text-muted">Type here you email address</small>
            </div>
        
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" rows="5">{{old('message')}}</textarea>
            </div>
        
            <button type="submit" class="btn btn-primary btn-block"> 📧 Send</button>
        </form>
    </div>
@endsection