@extends("theme")
@section("content")

      <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 col-xxl-6">
                <table class="table table-borderless">
                    <h1 style="color: rgb(10, 231, 247);">
                        <center><b>
                         Sign Up
                        </center> 
                     </b>
                     </h1>
                    <tr>
                        <td style="color:  rgba(14, 180, 221, 0.726);"><strong>Name</strong> </td>
                        <td><input type="text" class="form-control" placeholder="Enter Your Name"></td>
                    </tr>
                    <tr>
                        <td style="color:   rgba(14, 180, 221, 0.726);"><strong>D.O.B</strong></td>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td style="color:  rgba(14, 180, 221, 0.726);"><strong>EMAIL ID</strong></td>
                        <td><input type="text" class="form-control" placeholder="abcd@gmail.com"></td>
                    </tr>
                    <tr>
                        <td style="color:  rgba(14, 180, 221, 0.726);"><strong>Password</strong></td>
                        <td><input type="password" class="form-control" placeholder="password"></td>
                    </tr>
                    <tr>
                        <td style="color: rgba(14, 180, 221, 0.726) ;"><strong>Confirm Password</strong></td>
                        <td><input type="password" class="form-control" placeholder=" Confirm Password"></td>
                    </tr>
                </table>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                  <table class="table table-borderless">
                    <tr>
                        <td></td>
                        <td><button class="btn btn-danger">Sign Up</button></td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 col-xxl-6">
                <table class="table table-borderless">
                    <h1 style="color: rgb(10, 231, 247);">
                       <center><b>
                        Login
                       </center> 
                    </b>
                    </h1>
                        <tr>
                            <td style="color: rgba(14, 180, 221, 0.726);"> <strong>Username:</strong></td>
                           <td><input type="text" class="form-control" placeholder="username"> </td>
                        </tr>
                        <tr>
                            <td  style="color: rgb(14, 180, 221, 0.726);"><strong>Password:</strong> </td>
                            <td><input type="password" class="form-control" placeholder="password"></td>
                        </tr>
                </table>
                <center><img height="200" src="https://www.troyhunt.com/content/images/2016/02/18591858image2.png" alt=""></center>
                <table class="table table-borderless">
                        <tr>
                            
                            <td></td>
                            <td><button class="btn btn-danger">Login</button></td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
    <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqoHtGDfEi_OqFpV1OxeoxG0gOVU69PfKkmw&usqp=CAU" alt=""></center>
    @endsection