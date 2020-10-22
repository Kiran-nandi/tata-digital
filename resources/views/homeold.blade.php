<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TATA Digital</title>
    <link rel="stylesheet" href="{{asset('css/main.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body style="background-color: #f2f4f3;overflow-x: hidden;">
    <section>
        <div class="top-img">
            <img src="{{asset('images/tata-logo.png')}}">
        </div>
        <div class="both-padd mobhide">
            <form action="/geo" method="POST" enctype="multipart/form-data">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <div class="row first-row">
                    <div class="col-xl-6 col-lg-6 left-side">
                        <span class="capital-text"><b>PLEASE FILL IN THE FORM IN CAPITAL LETTERS :-</b></span>
                        <input type="text" class="left-input" name="name_of_entity" placeholder="NAME OF THE ENTITY">
                        <input type="text" class="left-input" name="contact_detial" placeholder="CONTACT DETAIL">
                        <div class="left-input">
                            <span class="only-text">PHOTO OF THE SHOP/GEO TAG</span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 right-side">
                        <input type="text" class="left-input extra-top-33" name="contact_name" placeholder="CONTACT PERSON NAME">
                        <input type="text" class="left-input" name="address" placeholder="ADDRESS">
                        <div class="btn btn-primary btn-file">
                            PICK FILE<input type="file" name="shopphoto">
                            <i class='fas fa-caret-down'></i>
                        </div>
                        <div class="btn-below-text">
                            <span>Uploads your file</span>
                        </div>
                    </div>
                </div>

                <div class="row second-row" style="margin-top: 3%;">
                    <div class="col-xl-6 col-lg-6 left-side">
                        <!-- <span class="capital-text"><b>PLEASE FILL IN THE FORM IN CAPITAL LETTERS :-</b></span> -->
                        <div class="left-input">
                            <span class="only-text">DO YOU SEND MATERIALS/GOODS TO OTHER CITIES IN INDIA</span>
                        </div>
                        <div class="left-input">
                            <span class="only-text">DO YOU SEND MATERIALS IN PTL OR FTL</span>
                        </div>
                        <div class="left-input">
                            <span class="only-text">TYPE OF ORGANIZATION</span>
                        </div>
                        <!-- <div class="left-input">
                            <span class="only-text">DO YOU SEND MATERIALS WITH PROPER BILLS</span>
                        </div>
                        <div class="left-input">
                            <span class="only-text">PHOTO OF VISITING CARD</span>
                        </div> -->
                    </div>
                    <div class="col-xl-6 col-lg-6 right-side">
                        <!-- <input type="text" class="left-input extra-top-33" placeholder="CONTACT PERSON NAME">
                        <input type="text" class="left-input" placeholder="ADDRESS"> -->
                        <div class="checkdiv">
                            <label class="label-text">YES <input type="checkbox" name="cities" value="yes">
                                <span class="checkmark"></span>
                            </label>
                            <label class="label-text">NO <input type="checkbox" name="cities" value="no">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkdiv">
                            <label class="label-text">PTL <input type="checkbox" name="ptl" value="PTL">
                                <span class="checkmark"></span>
                            </label>
                            <label class="label-text">FTL <input type="checkbox" name="ptl" value="FTL">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row" >                    
                        <div class="col-xl-6 col-lg-6 padd-left-15">
                            <span class="organization-text">(<span>&#8544;</span>)&nbsp;Manufacturer</span>
                            <span><input type="checkbox" name="organization" value="Manufacturer"></span>
                            <br>
                            <span class="organization-text">(<span>&#8544;&#8544;&#8544;</span>)&nbsp;Stockiest</span>
                            <span><input type="checkbox" name="organization" value="Stockiest"></span>
                            <br>
                            <span class="organization-text">(<span>&#x2164;</span>)&nbsp;Dealer</span>
                            <span><input type="checkbox" name="organization" value="Dealer"></span>
                        </div>
                        <div class="col-xl-6 col-lg-6 padd-left-15">
                            <span class="organization-text">(<span>&#8544;&#8544;</span>)&nbsp;Distributor</span>
                            <span><input type="checkbox" name="organization" value="Distributor"></span>
                            <br>
                            <span class="organization-text">(<span>&#8544;&#x2164;</span>)&nbsp;Trader</span>
                            <span><input type="checkbox" name="organization" value="Trader"></span>
                            <br>
                            <span class="organization-text">(<span>&#x2164;&#8544;</span>)&nbsp;Co-leader/Aggregator</span>
                            <span><input type="checkbox" name="organization" value="Co-leader/Aggregator"></span>
                        </div>                    
                </div>

                <div class="row" style="margin-top: 3%;">
                    <div class="col-xl-6 col-lg-6">
                        <div class="left-input">
                            <span class="only-text">DO YOU SEND MATERIALS WITH PROPER BILLS</span>
                        </div>
                        <div class="left-input">
                            <span class="only-text">PHOTO OF VISITING CARD</span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="checkdiv">
                            <label class="label-text">YES <input type="checkbox" name="bills" Value="yes">
                                <span class="checkmark"></span>
                            </label>
                            <label class="label-text">NO <input type="checkbox" name="bills" value="no">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="btn btn-primary btn-file">
                            PICK FILE<input type="file" name="photo_visiting_card" name="shopphoto">
                            <i class='fas fa-caret-down'></i>
                        </div>
                        <div class="btn-below-text">
                            <span>Uploads your file</span>
                        </div>
                    </div>
                </div>
                <div class="submit" style="margin-bottom: 3%;">
                    <button class="btn btn-primary">Submit</button>
                </div>
            

        <script>
        // the selector will match all input controls of type :checkbox
// and attach a click event handler 
    $("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
    var $box = $(this);
    if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
    </script>







    <p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<input id="demo" value="kiran" type="hidden" name="geolocate">


<script>
var x = document.getElementById("demo");

function getLocation(e) {
    e = e || window.event;
    e.preventDefault();
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {
    x.value="Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}
</script>
</form>
        </div>















        <!-- mobile code -->


        <div class="both-padd deskhide">
            <form action="/" method="POST" enctype="multipart/form-data">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <div class="row first-row">
                    <div class="col-xl-6 col-lg-6 left-side">
                        <span class="capital-text"><b>PLEASE FILL IN THE FORM IN CAPITAL LETTERS :-</b></span><br>
                        <input type="text" class="left-input" name="name_of_entity" placeholder="NAME OF THE ENTITY" style="margin-top: 3%;">
                        <input type="text" class="left-input extra-top-33" name="contact_name" placeholder="CONTACT PERSON NAME">
                        <input type="text" class="left-input" name="contact_detial" placeholder="CONTACT DETAIL">
                        <input type="text" class="left-input" name="address" placeholder="ADDRESS">
                        <div class="left-input">
                            <span class="only-text">PHOTO OF THE SHOP/GEO TAG</span>
                        </div>
                        <div class="btn btn-primary btn-file">
                            PICK FILE<input type="file" name="shopphoto">
                            <i class='fas fa-caret-down'></i>
                        </div>
                        <div class="btn-below-text">
                            <span>Uploads your file</span>
                        </div>
                    </div>
                </div>

                <div class="row second-row" style="margin-top: 3%;">
                    <div class="col-xl-6 col-lg-6 left-side">
                        <!-- <span class="capital-text"><b>PLEASE FILL IN THE FORM IN CAPITAL LETTERS :-</b></span> -->
                        <div class="left-input adjust-height" style="height: 60px;padding-left: 10px;">
                            <span class="only-text" style="padding-left: 0px;">DO YOU SEND MATERIALS/GOODS TO OTHER CITIES IN INDIA</span>
                        </div>
                        <div class="checkdiv">
                            <div class="row">
                                <div class="col-6">
                                    <label class="label-text">YES <input type="checkbox" name="cities" value="yes">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="label-text">NO <input type="checkbox" name="cities" value="no">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>                 
                            
                        </div>
                        <div class="left-input">
                            <span class="only-text">DO YOU SEND MATERIALS IN PTL OR FTL</span>
                        </div>
                        <div class="checkdiv">
                            <div class="row">
                                <div class="col-6">
                                    <label class="label-text">PTL <input type="checkbox" name="ptl" value="PTL">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="label-text">FTL <input type="checkbox" name="ptl" value="FTL">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>                         
                        </div>
                        <div class="left-input">
                            <span class="only-text">TYPE OF ORGANIZATION</span>
                        </div>
                        <div class="row" >                    
                            <div class="col-xl-6 col-lg-6 padd-left-15">
                                <span class="organization-text">(<span>&#8544;</span>)&nbsp;Manufacturer</span>
                                <span><input type="checkbox" name="organization" value="Manufacturer"></span>
                                <br>
                                <span class="organization-text">(<span>&#8544;&#8544;&#8544;</span>)&nbsp;Stockiest</span>
                                <span><input type="checkbox" name="organization" value="Stockiest"></span>
                                <br>
                                <span class="organization-text">(<span>&#x2164;</span>)&nbsp;Dealer</span>
                                <span><input type="checkbox" name="organization" value="Dealer"></span>
                            </div>
                            <div class="col-xl-6 col-lg-6 padd-left-15">
                                <span class="organization-text">(<span>&#8544;&#8544;</span>)&nbsp;Distributor</span>
                                <span><input type="checkbox" name="organization" value="Distributor"></span>
                                <br>
                                <span class="organization-text">(<span>&#8544;&#x2164;</span>)&nbsp;Trader</span>
                                <span><input type="checkbox" name="organization" value="Trader"></span>
                                <br>
                                <span class="organization-text">(<span>&#x2164;&#8544;</span>)&nbsp;Co-leader/Aggregator</span>
                                <span><input type="checkbox" name="organization" value="Co-leader/Aggregator"></span>
                            </div>                    
                    </div>
                        <!-- <div class="left-input">
                            <span class="only-text">DO YOU SEND MATERIALS WITH PROPER BILLS</span>
                        </div>
                        <div class="left-input">
                            <span class="only-text">PHOTO OF VISITING CARD</span>
                        </div> -->
                    </div>
                    <div class="col-xl-6 col-lg-6 right-side">
                        <!-- <input type="text" class="left-input extra-top-33" placeholder="CONTACT PERSON NAME">
                        <input type="text" class="left-input" placeholder="ADDRESS"> -->
                        
                        
                    </div>
                </div>

                

                <div class="row" style="margin-top: 3%;">
                    <div class="col-xl-6 col-lg-6">
                        <div class="left-input">
                            <span class="only-text">DO YOU SEND MATERIALS WITH PROPER BILLS</span>
                        </div>
                        <div class="checkdiv">
                            <div class="row">
                                <div class="col-6">
                                    <label class="label-text">YES <input type="checkbox" name="bills" Value="yes">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="label-text">NO <input type="checkbox" name="bills" value="no">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>                        
                            
                        </div>
                        <div class="left-input">
                            <span class="only-text">PHOTO OF VISITING CARD</span>
                        </div>
                        <div class="btn btn-primary btn-file">
                            PICK FILE<input type="file" name="photo_visiting_card">
                            <i class='fas fa-caret-down'></i>
                        </div>
                        <div class="btn-below-text" style="margin-bottom: 15px;">
                            <span>Uploads your file</span>
                        </div>
                    </div>
                </div>
                <div class="submit" style="margin-bottom: 10%;">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
    
</body>
</html>