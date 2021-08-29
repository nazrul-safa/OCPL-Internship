<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="{{ asset("vendor\jquery.steps-1.1.0\jquery.steps.css") }}"> -->
    <link rel="stylesheet" href="{{ asset("vendor/preview_before/previewForm.css") }}"/>
    <link rel="stylesheet" href="{{ asset('vendor/jquery.steps-1.1.0/jquery.steps.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('userlist') }}">User List <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="application">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<main role="main">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                            <form id="example-basic" name="app-form" method="post" action="/app_store">
                                {{ csrf_field() }}
                                <h2>Applicant Info</h2>
                                <section>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email address</label>
                                        <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                                               placeholder="name@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <select name="country" class="form-control" id="country">
                                            <option value="">Select country</option>
                                            <option value="bd">Bangladesh</option>
                                            <option value="usa">USA</option>
                                            <option value="au">AUSTRALIA</option>
                                            <option value="be">BELGIUM</option>
                                        </select>
                                    </div>


                                    <div class="form-group" id="bd_adress">
                                        <label for="exampleFormControlInput1">District/ Division</label>
                                        <input name="bd_adress" type="text" class="form-control"
                                               placeholder="district/ division">
                                    </div>

                                    <div class="form-group" id="thana">
                                        <label for="exampleFormControlInput1">Thana</label>
                                        <input name="thana" type="text" class="form-control"
                                               placeholder="district/ division">
                                    </div>
 

                                    <div class="form-group" id="foreign_adress">
                                        <label for="exampleFormControlInput2">State/ Province</label>
                                        <input name="foreign_adress" type="text" class="form-control"
                                               placeholder="state/ province">
                                    </div>
                                   
                                </section>
               
                                <h2>More Info</h2>
                                <section>
                                <div class="form-group" id="name">
                                        <label for="exampleFormControlInput1">Full Name</label>
                                        <input name="name" type="text" class="form-control"
                                               placeholder="Full Name">
                                </div>

                                <div class="form-group" id="age">
                                        <label for="exampleFormControlInput1">Age</label>
                                        <input name="age" type="number" class="form-control"
                                               placeholder="Age">
                                </div>

                                <div class="form-group">
                                    <label for="status">Save as</label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="">Select save as</option>
                                        <option value="0">Save as Finally</option>
                                        <option value="1">Save As Draft</option>
                                    </select>
                                </div>

                                </section>
                                
                                <h2>Submit</h2>
                                <section>
                                    <button type="button" class="btn btn-primary preview">Preview</button>
                                    <button type="submit" class="btn btn-primary">Save</button> 
                                </section>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<footer class="container">
    <p>&copy; Company 2017-2018</p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<!-- <script src="{{ asset("vendor\jquery.steps-1.1.0\jquery.steps.js") }}"></script> -->

 <script src="{{ asset('vendor/preview_before/previewForm.js') }}"></script>
<script src="{{ asset('vendor/jquery.steps-1.1.0/jquery.steps.js') }}"></script>

<script>

    // http://buffernow.com/preview-form-before-submit-jquery-plugin/

    $(document).ready(function () {
        $("#example-basic").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true
        });

        $('#example-basic').previewForm({ show_password : false });

        $('#bd_adress').hide();
        $('#foreign_adress').hide();
        $('#thana').hide();
        $('#country').on('change', function () {
           if (this.value == 'bd') {
               $('#bd_adress').show();
               $('#thana').show();
               $('#foreign_adress').hide();
           } else {
                $('#foreign_adress').show();
                $('#bd_adress').hide();
           }
        });
    });
</script>
</body>
</html>
