<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="d-none d-md-block col-md-6 col-lg-7 a">
              
                <div>
                  <h1 class="text-center animated bounceInDown left-heading">Welcome To Chef-e-teria</h1>
                </div>

<!--
                <div class="text-light px-5 mt-3 text-center">
                  <p class="left-para type-animation">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime sint molestiae sapiente est perspiciatis?</p>
                </div>
-->
              
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-5 b">
              <form action="#" class="ml-2 form-class">
                <ul class="text-center">
                  <div>
                    <i class="signup-icon ml-4 mb-1 animated heartBeat display-4 fas fa-user-plus"></i>
                  </div>
                </ul>

                <div class="my-4 d-flex justify-content-around icons">
                  <div class="row">
                      <a href="#">
                        <div class="mx-3 animated bounceInDown border">
                          <i class="px-1 fb-icon fab fa-facebook-f"></i> 
                        </div>
                      </a>
                      
                      <a href="#">
                        <div class="border animated bounceInDown">
                          <i class="google-icon fab fa-google"></i> 
                        </div> 
                      </a>
                      
                      <a href="#">
                        <div class="mx-3 animated bounceInDown border">
                          <i class=" in-icon fab fa-linkedin-in"></i> 
                        </div> 
                      </a>
                  </div>
                </div>

                <div class="text-center mt-2 signup-with">
                    <p>...or signup with</p>
                  </div>

                <div class="form-group">
                  <label class="label-color labell" for="username">Email</label>
                  <div class=" d-flex">
                    <i class="fas fa-user"></i>
                    <input type="text" class="email-input form-control" placeholder="Enter email" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-color labell" for="password">Password</label>
    
                  <div class="d-flex">
                    <i class="fa fa-lock"></i>
                    <input type="password" class="password-input form-control" placeholder="Enter password" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-color labell" for="phone">CNIC</label>
    
                  <div class="d-flex">
                    <i class="fas fa-id-card"></i>
                    <input type="text" class="cnic-input form-control" data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X"  name="cnic" required />

                  </div>
                </div>

                <div class="form-group">
                  <label class="label-color labell" for="phone">Phone No</label>
    
                  <div class="d-flex">
                    <i class="fas fa-mobile"></i>
                    <input type="text" class="phone-input form-control" data-inputmask="'mask': '0399-99999999'" placeholder="03XX-XXXXXXX" required=""  type = "number" maxlength = "12" required />
                  </div>
                </div>
                <div class="d-flex mt-4">
                <div class="form-check-inline mb-3">
                  <label class="form-check-label radioContainer"><span class="male font-weight-bold">Male</span> 
                    <input type="radio" class="form-check-input" name="optradio" required>
                    <span class="circle"></span>
                  </label>
                </div>
                <div class="form-check-inline mb-3">
                  <label class="form-check-label radioContainer"><span class="female font-weight-bold">Female</span>
                    <input type="radio" class="form-check-input" name="optradio">
                    <span class="mx-3 circle"></span>
                  </label>
                </div>
               
              </div>  
                
              <div class="d-flex justify-content-center mt-4 signup-button">
                <button type="submit" class="px-4 change-button btn btn-block">Sign Up</button>  
              </div>
              <div class="mt-4 text-center already-account">
               <p class="d-inline signup ">Already have an account?</p> <a href="#" class="font-weight-bold login" data-toggle="modal" data-target="#popUpWindow">SignIn</a> 
              </div>
            </form>
          </div>

        </div>

        <div class="modal fade" id="popUpWindow">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Sign In</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
              </div>

              <div class="modal-body">
                  <form action="#" class="form-class">
                      <ul class="text-center">
                        <div>
                          <i class="login-icon mb-1 animated heartBeat display-4 fas fa-lock"></i>
                        </div>
                      </ul>
      
                      <div class="my-4 d-flex justify-content-around">
                        <div class="row">
                            <a href="#">
                              <div class="mx-3 animated bounceInDown border">
                                <i class="px-1 fb-icon fab fa-facebook-f"></i> 
                              </div>
                            </a>
                            
                            <a href="#">
                              <div class="border animated bounceInDown">
                                <i class="google-icon fab fa-google"></i> 
                              </div> 
                            </a>
                            
                            <a href="#">
                              <div class="mx-3 animated bounceInDown border">
                                <i class=" in-icon fab fa-linkedin-in"></i> 
                              </div> 
                            </a>
                        </div>
                      </div>
      
                      <div class="text-center mt-2">
                          <p>...or signin with</p>
                        </div>
      
                      <div class="form-group">
                        <label class="label-color" for="username">Email</label>
                        <div class=" d-flex">
                          <i class="fas fa-user"></i>
                          <input type="email" class="email-input form-control" placeholder="Enter email" required/>
                        </div>
                      </div>
      
                      <div class="form-group">
                        <label class="label-color" for="password">Password</label>
          
                        <div class="d-flex">
                          <i class="fa fa-lock"></i>
                          <input type="password" class="password-input form-control" placeholder="Enter password" required/>
                        </div>
                      </div>
      
                    <div class="d-flex">
                      <div class="form-group mr-auto">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customControlInline" />
                          <label class="my-2 custom-control-label label-color" for="customControlInline">Remember me</label>
                        </div>
                      </div>
      
                      <div class="forgot my-2">
                        <a href="#"><p>Forgot your password?</p></a>  
                      </div>
                    </div>
      
                    <div class="mt-4 text-center">
                        <p class="d-inline signin ">Don't have an account?</p> <a href="index.html" class="font-weight-bold login">Signup</a>
                    </div>
                  </form>
              </div>

              <div class="modal-footer">
                  <button type="submit" class="px-4 my-4 change-button btn btn-block">Sign In</button>  
              </div>
            </div>
          </div>
        </div>
    </div>

    <script
      src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
      integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>

    <script>
      $(":input").inputmask();
  
     </script>
</body>
</html>