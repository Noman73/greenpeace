@extends('layouts.app')
@section('css')
<style>
.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
@endsection
@section('content')
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        {{-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul> --}}
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Free Registration</h3>
                                
                                  <form action="{{route('registration.store')}}" method="POST">
                                    @csrf
                                    <div class="row register-form">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="first_name" placeholder="First Name *" value="" />
                                              <div class="invalid-feedback" id=''></div>
                                          </div>
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="last_name" placeholder="Last Name *" value="" />
                                          </div>
                                          <div class="form-group">
                                            <input type="text" class="form-control is-valid" name="username" placeholder="Username" value="" />
                                          </div>
                                          <div class="form-group">
                                            <input type="text" class="form-control is-valid" name="sponsor_username" placeholder="Sponsor Username" value="" />
                                          </div>
                                          <div class="form-group">
                                            <label for="">position</label>
                                              <div class="maxl">
                                                  <label class="radio inline"> 
                                                      <input type="radio" name="position" value="1"  >
                                                      <span> A </span> 
                                                  </label>
                                                  <label class="radio inline"> 
                                                      <input type="radio" name="position" value="2" >
                                                      <span>B </span> 
                                                  </label>
                                                  <label class="radio inline"> 
                                                    <input type="radio" name="position" value="3" >
                                                    <span>C </span> 
                                                </label>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Gender</label>
                                              <div class="maxl">
                                                  <label class="radio inline"> 
                                                      <input type="radio" name="gender" value="male" checked >
                                                      <span> Male </span> 
                                                  </label>
                                                  <label class="radio inline"> 
                                                      <input type="radio" name="gender" value="female" >
                                                      <span>Female </span> 
                                                  </label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <input type="email" class="form-control" placeholder="Your Email *" value="" name="email"/>
                                          </div>
                                          <div class="form-group">
                                              <input type="text"  name="phone" class="form-control" placeholder="Your Phone " value="" />
                                          </div>
                                          <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password *" value="" />
                                        </div>
                                          <input type="submit" class="btnRegister"  value="Register"/>
                                      </div>
                                    </div>
                                  </form>
                                    
                                
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>
@endsection
