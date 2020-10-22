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
        <div class="mid-line">
            <img src="{{asset('images/line.png')}}">
        </div>
        <div class="both-padd">
            <form action="form-submit" id="mainform" method="POST" enctype="multipart/form-data">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <div class="row">
                    <span class="capital-text"><b>PLEASE FILL IN THE FORM IN CAPITAL LETTERS :-</b></span>
                    <input type="text" class="left-input" name="name_of_entity" placeholder="NAME OF THE ENTITY / SOLE PROPRIETORSHIP">
                    <input type="text" class="left-input extra-top-33" name="contact_name" placeholder="NAME CONTACT PERSON">
                    <!-- contact name -->
                    <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                        <span class="organization-text">(<span>&#8544;</span>)&nbsp;Owner</span>
                        <span><input type="checkbox" name="contact_type" value="Owner"></span>
                        <br>
                        <span class="organization-text">(<span>&#8544;&#8544;&#8544;</span>)&nbsp;Logistics Manager</span>
                        <span><input type="checkbox" name="contact_type" value="Logistic Manger"></span>
                        <br>
                    </div>
                    <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                        <span class="organization-text">(<span>&#8544;&#8544;</span>)&nbsp;Dispatch manager</span>
                        <span><input type="checkbox" name="contact_type" value="Dispatch manager"></span>
                        <br>
                    </div>
                    <div class="left-input ext-top-12">
                        <span class="only-text">TYPE OF ORGANIZATION</span>
                    </div>
                    <!-- Type of organization -->
                    <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                        <span class="organization-text">(<span>&#8544;</span>)&nbsp;Manufacturer</span>
                        <span><input type="checkbox" name="organization" value="Manufacturer"></span>
                        <br>
                        <span class="organization-text">(<span>&#8544;&#8544;&#8544;</span>)&nbsp;Stockiest</span>
                        <span><input type="checkbox" name="organization" value="Stockiest"></span>
                        <br>
                        <span class="organization-text">(<span>&#x2164;</span>)&nbsp;Dealer</span>
                        <span><input type="checkbox" name="organization" value="Dealer"></span>
                    </div>
                    <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                        <span class="organization-text">(<span>&#8544;&#8544;</span>)&nbsp;Distributor</span>
                        <span><input type="checkbox" name="organization" value="Distributor"></span>
                        <br>
                        <span class="organization-text">(<span>&#8544;&#x2164;</span>)&nbsp;Trader</span>
                        <span><input type="checkbox" name="organization" value="Trader"></span>
                        <br>
                    </div>
                    <input type="text" class="left-input ext-top-12" name="contact_number" placeholder="CONTACT NUMBER">
                    <input type="email" class="left-input" name="emailid" placeholder="E-MAIL ID">
                    <input type="text" class="left-input" name="address" placeholder="ADDRESS">
                    <div class="set-width-50">
                        <div class="left-input">
                            <span class="only-text">NATURE OF THE BUSINESS</span>
                        </div>
                    </div>
                    <div id="accordion" style="width: 100%;">
                        <div class="card">
                            <div class="card-header">
                              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                <div class="left-input">
                                    <span class="only-text">CONSUMER GOODS</span>
                                </div>
                              </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                              <div class="row card-body">
                                <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                                    <span class="organization-text">(<span>&#8544;</span>)&nbsp;Cosmetics</span>
                                    <span><input type="checkbox" name="consumer_goods" value="Cosmetics"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#8544;&#8544;&#8544;</span>)&nbsp;Leather</span>
                                    <span><input type="checkbox" name="consumer_goods" value="Leather"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#x2164;</span>)&nbsp;Apparel</span>
                                    <span><input type="checkbox" name="consumer_goods" value="Apparel"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#x2164;&#8544;&#8544;</span>)&nbsp;Handicrafts</span>
                                    <span><input type="checkbox" name="consumer_goods" value="Handicrafts"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#8544;&#8553;</span>)&nbsp;Other - FMCG</span>
                                    <span><input type="checkbox" name="consumer_goods" value="Other - FMCG"></span>
                                    <br>
                                </div>
                                <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                                    <span class="organization-text">(<span>&#8544;&#8544;</span>)&nbsp;Electronics</span>
                                    <span><input type="checkbox" name="consumer_goods" value="Electronics"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#8544;&#x2164;</span>)&nbsp;Furniture</span>
                                    <span><input type="checkbox" name="consumer_goods" value="Furniture"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#x2164;&#8544;</span>)&nbsp;Drugs & Pharma</span>
                                    <span><input type="checkbox" name="consumer_goods" value="Drugs & Pharma"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#x2164;&#8544;&#8544;&#8544;</span>)&nbsp;Foods Products/Processed foods</span>
                                    <span><input type="checkbox" name="consumer_goods" value="Foods Products/Processed foods"></span>
                                    <br>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card ext-top-12 mob-no-ext-top">
                            <div class="card-header">
                              <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                <div class="left-input">
                                    <span class="only-text">INDUSTRIAL GOODS</span>
                                </div>
                            </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                              <div class="card-body row">
                                <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                                    <span class="organization-text">(<span>&#8544;</span>)&nbsp;Machinery Equipment</span>
                                    <span><input type="checkbox" name="industrial_goods" value="Machinery Equipment"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#8544;&#8544;&#8544;</span>)&nbsp;Chemicals</span>
                                    <span><input type="checkbox" name="industrial_goods" value="Chemicals"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#x2164;</span>)&nbsp;Agricultural products</span>
                                    <span><input type="checkbox" name="industrial_goods" value="Agricultural products"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#x2164;&#8544;&#8544;</span>)&nbsp;Pharmaceuticals</span>
                                    <span><input type="checkbox" name="industrial_goods" value="Pharmaceuticals"></span>
                                    <br>
                                    <!-- <span class="organization-text">(<span>&#8544;&#8553;</span>)&nbsp;Paper Products - paper plates/wedding cards/tissues</span>
                                    <span><input type="checkbox" name="organization" value="Stockiest"></span>
                                    <br> -->
                                </div>
                                <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                                    <span class="organization-text">(<span>&#8544;&#8544;</span>)&nbsp;Electrical Equipment</span>
                                    <span><input type="checkbox" name="industrial_goods" value="Electrical Equipment"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#8544;&#x2164;</span>)&nbsp;Packing Materials</span>
                                    <span><input type="checkbox" name="industrial_goods" value="Packing Materials"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#x2164;&#8544;</span>)&nbsp;Automobile spares/accessories</span>
                                    <span><input type="checkbox" name="industrial_goods" value="Automobile spares/accessories"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#x2164;&#8544;&#8544;&#8544;</span>)&nbsp;Medical equipment</span>
                                    <span><input type="checkbox" name="industrial_goods" value="Medical equipment"></span>
                                    <br>
                                </div>
                                <span class="organization-text padd-left-15 organization-text2 oneselect">(<span>&#8544;&#8553;</span>)&nbsp;Paper Products - paper plates/wedding cards/tissues</span>
                                    <span><input type="checkbox" name="industrial_goods" value="Paper Products - paper plates/wedding cards/tissues"></span>
                                <br>
                                <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                                    <span class="organization-text">(<span>&#8553;</span>)&nbsp;Plastic products</span>
                                    <span><input type="checkbox" name="industrial_goods" value="Plastic products"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#8553;&#8544;&#8544;</span>)&nbsp;Steel/Castings & Forgings </span>
                                    <span><input type="checkbox" name="industrial_goods" value="Steel/Castings & Forgings"></span>
                                    <br>
                                </div>
                                <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                                    <span class="organization-text">(<span>&#8553;&#8544;</span>)&nbsp;Sanitaryware</span>
                                    <span><input type="checkbox" name="industrial_goods" value="Sanitaryware"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#8553;&#8544;&#8544;&#8544;</span>)&nbsp;Textile/yarns </span>
                                    <span><input type="checkbox" name="industrial_goods" value="Textile/yarns"></span>
                                    <br>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card ext-top-12 mob-no-ext-top">
                            <div class="card-header">
                              <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                <div class="left-input">
                                    <span class="only-text">COMMERCIAL GOODS</span>
                                </div>
                              </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                              <div class="card-body row">
                                <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                                    <span class="organization-text">(<span>&#8544;</span>)&nbsp;Furniture</span>
                                    <span><input type="checkbox" name="commercial_goods" value="Furniture"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#8544;&#8544;&#8544;</span>)&nbsp;Stationery/Books</span>
                                    <span><input type="checkbox" name="commercial_goods" value="Stationery/Books"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#x2164;</span>)&nbsp;Gymnasium materials</span>
                                    <span><input type="checkbox" name="commercial_goods" value="Gymnasium materials"></span>
                                </div>
                                <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                                    <span class="organization-text">(<span>&#8544;&#8544;</span>)&nbsp;Electronics</span>
                                    <span><input type="checkbox" name="commercial_goods" value="Electronics"></span>
                                    <br>
                                    <span class="organization-text">(<span>&#8544;&#x2164;</span>)&nbsp;Handicrafts</span>
                                    <span><input type="checkbox" name="commercial_goods" value="Handicrafts"></span>
                                    <br>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="set-width-60 ext-top-12 mob-no-ext-top">
                        <div class="left-input doub-left-input">
                            <span class="only-text">PAN INDIA MONTHLY DISPATCH POTENTIAL IN TONNES</span>
                        </div>
                    </div>
                    <div class="set-width-35 ext-top-12 float-right mob-no-ext-top">
                        <input type="text" class="left-input" name="panindia" />
                    </div>
                    <div class="set-width-60">
                        <div class="left-input">
                            <span class="only-text">TOP 3 DISPATCH DESTINATIONS BY VOLUME</span>
                        </div>
                    </div>
                    <div class="set-width-35 float-right">
                        <input type="text" class="left-input" name="dispatch" />
                    </div>
                    <div class="left-input doub-left-input">
                        <span class="only-text ">DELHI TO MUMBAI/MUMBAI TO DELHI POTENTIAL (MONTHLY IN TONS)</span>
                    </div>
                    <input type="text" class="left-input" name="mum_to_del">
                    <div class="left-input doub-left-input">
                        <span class="only-text">MATERIALS BEING SENT TO JAIPUR/AHMEDABAD/SURAT</span>
                    </div>
                    <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                        <span class="organization-text organization-text1">YES</span>
                        <span><input type="checkbox" name="materials_sent" value="YES"></span>
                    </div>
                    <div class="col-xl-6 col-lg-6 padd-left-15 oneselect">
                        <span class="organization-text organization-text1">NO</span>
                        <span><input type="checkbox" name="materials_sent" value="NO"></span>
                    </div>
                    <div class="left-input ext-top-12 doub-left-input">
                        <span class="only-text">EXISTING TRANSPORTER (PRESENTLY WORKING WITH WHICH TRANSPORTER(S))</span>
                    </div>
                    <div class="col-xl-6 col-lg-6 padd-left-15">
                        <span class="organization-text">(<span>&#8544;</span>)&nbsp;ABC</span>
                        <span><input type="checkbox" name="existing_trans[]" value="ABC"></span>
                        <br>
                        <span class="organization-text">(<span>&#8544;&#8544;&#8544;</span>)&nbsp;Rivigo</span>
                        <span><input type="checkbox" name="existing_trans[]" value="Rivigo"></span>
                        <br>
                        <span class="organization-text">(<span>&#x2164;</span>)&nbsp;Gati</span>
                        <span><input type="checkbox" name="existing_trans[]" value="Gati"></span>
                        <br>
                        <span class="organization-text">(<span>&#x2164;&#8544;&#8544;</span>)&nbsp;Om Logistics</span>
                        <span><input type="checkbox" name="existing_trans[]" value="Om Logistics"></span>
                        <br>
                        <span class="organization-text">(<span>&#8544;&#8553;</span>)&nbsp;Okara</span>
                        <span><input type="checkbox" name="existing_trans[]" value="Okara"></span>
                        <br>
                        <span class="organization-text">(<span>&#8553;&#8544;</span>)&nbsp;VRL</span>
                        <span><input type="checkbox" name="existing_trans[]" value="VRL"></span>
                        <br>
                    </div>
                    <div class="col-xl-6 col-lg-6 padd-left-15">
                        <span class="organization-text">(<span>&#8544;&#8544;</span>)&nbsp;Jaipur Golden</span>
                        <span><input type="checkbox" name="existing_trans[]" value="Jaipur Golden"></span>
                        <br>
                        <span class="organization-text">(<span>&#8544;&#x2164;</span>)&nbsp;Delhivery</span>
                        <span><input type="checkbox" name="existing_trans[]" value="Delhivery"></span>
                        <br>
                        <span class="organization-text">(<span>&#x2164;&#8544;</span>)&nbsp;BlueDart</span>
                        <span><input type="checkbox" name="existing_trans[]" value="BlueDart"></span>
                        <br>
                        <span class="organization-text">(<span>&#x2164;&#8544;&#8544;&#8544;</span>)&nbsp;Nitco</span>
                        <span><input type="checkbox" name="existing_trans[]" value="Nitco"></span>
                        <br>
                        <span class="organization-text">(<span>&#8553;</span>)&nbsp;Safe Express</span>
                        <span><input type="checkbox" name="existing_trans[]" value="Safe Express"></span>
                        <br>
                        <span class="organization-text">(<span>&#8553;&#8544;&#8544;</span>)&nbsp;VExpress</span>
                        <span><input type="checkbox" name="existing_trans[]" value="VExpress"></span>
                        <br>
                    </div>
                    <div class="left-input ext-top-12 doub-left-input">
                        <span class="only-text">INTERESTED TO WORK WITH TATA DIGITAL LOGISTICS</span>
                    </div>
                    <div class="col-xl-4 col-lg-4 padd-left-15 oneselect">
                        <span class="organization-text organization-text1">YES</span>
                        <span><input type="checkbox" name="interest_work" value="YES"></span>
                    </div>
                    <div class="col-xl-4 col-lg-4 padd-left-15 oneselect">
                        <span class="organization-text organization-text1">NO</span>
                        <span><input type="checkbox" name="interest_work" value="NO"></span>
                    </div>
                    <div class="col-xl-4 col-lg-4 padd-left-15 oneselect">
                        <span class="organization-text organization-text1">MAY BE</span>
                        <span><input type="checkbox" name="interest_work" value="MAY BE"></span>
                    </div>
                    <div class="set-width-50 ext-top-12">
                        <div class="left-input">
                            <span class="only-text">GEO LOCATION(LATITUDE/LONGITUDE)</span>
                        </div>
                    </div>
                    <div class="set-width-50 ext-top-12">
                        <div class="btn btn-primary btn-file" >
                            PICK FILE<input id="demo" name="geolocation" type="file" accept="image/*" capture="camera">
                            <!-- <i class='fas fa-caret-down'></i> -->
                            <span class="cam-icon1">
                                <img src="{{asset('images/cam-icon.png')}}" >
                            </span>
                        </div>
                        <div class="btn-below-text">
                            <span>Uploads your file</span>
                        </div>
                    </div>
                    <script>
                        var x = document.getElementById("demo");
                        var lat,lon='';
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
                            lat = position.coords.latitude;
                            lon = position.coords.longitude;
                            // x.value="Latitude: " + position.coords.latitude + 
                            // ",Longitude: " + position.coords.longitude;
                        }
                        </script>
                    <div class="set-width-50 ext-top-12">
                        <div class="left-input doub-left-input">
                            <span class="only-text">PHOTO OF THE SHOP/ENTITY/ENTERPRISE/COMPANY</span>
                        </div>
                    </div>
                    <div class="set-width-50 ext-top-12 mob-no-ext-top">
                        <div class="btn btn-primary btn-file">
                            PICK FILE
                            <!-- <i class='fas fa-caret-down'></i> -->
                            <span class="cam-icon">
                                <input type="file" name="shopphoto" >
                                <img src="{{asset('images/download.png')}}" class="download">
                            </span>
                            <span class="only-cam-icon">
                                <input type="file" name="shopphoto1" accept="image/*" capture="camera" style="min-width: 80%;max-width: 80%;">
                                <img src="{{asset('images/camera.png')}}" >
                            </span>
                            <script>
                                function hello() {
                                    console.log("hello");
                                }                            
                            </script>
                        </div>
                        <div class="btn-below-text">
                            <span>Uploads your file</span>
                        </div>
                    </div>
                    <div class="set-width-50 ext-top-12">
                        <div class="left-input">
                            <span class="only-text">PHOTO OF VISITNG CARD</span>
                        </div>
                    </div>
                    <div class="set-width-50 ext-top-12 mob-no-ext-top">
                        <div class="btn btn-primary btn-file">
                            PICK FILE<input type="file" name="photo_visiting_card">
                            <!-- <i class='fas fa-caret-down'></i> -->
                            <span class="cam-icon">
                                <input type="file" name="photo_visiting_card" >
                                <img src="{{asset('images/download.png')}}" class="download">
                            </span>
                            <span class="only-cam-icon">
                                <input type="file" name="photo_visiting_card1" accept="image/*" capture="camera" style="min-width: 80%;max-width: 80%;" >
                                <img src="{{asset('images/camera.png')}}" >
                            </span>
                        </div>
                        <div class="btn-below-text d-none" id="custo">
                            <span>Uploads your file</span>
                        </div>
                        <div class="btn-below-text">
                            <span>Uploads your file</span>
                        </div>
                    </div>
                    <div class="set-width-60 ext-top-12">
                        <div class="left-input">
                            <span class="only-text">GST IN, IF PROVIDED BY CLIENT</span>
                        </div>
                    </div>
                    <div class="set-width-35 ext-top-12 float-right mob-no-ext-top">
                        <input type="text" class="left-input" name="gst_in" />
                    </div>
                    <div class="submit" style="margin-bottom: 3%;">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
                
            </form>
        </div>
<img src="" id="krp" style="width: 50px;" alt="">
<canvas id="myCanvas" height="500px" width="500px"></canvas>

        <!-- mobile code -->


        
    </section>
    <script>
        // the selector will match all input controls of type :checkbox
// and attach a click event handler 
    $(".oneselect input:checkbox").on('click', function() {
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
window.addEventListener('load', function() {
  document.querySelector('input[type="file"]').addEventListener('change', function() {
      if (this.files && this.files[0]) {
          var img = document.querySelector('img');  // $('img')[0]
          img.src = URL.createObjectURL(this.files[0]); // set src to blob url

          img.onload = imageIsLoaded;
      }
  });
});
var lat,lon,dataURL='';

function imageIsLoaded() { 
//   alert(this.src);  // blob url
  console.log(this.src);
  $('#krp').attr('src',this.src);
  var canvas = document.getElementById("myCanvas");
  var ctx = canvas.getContext("2d");
  var img = document.getElementById("krp");
  ctx.drawImage(img, 0, 0,500,500);
  ctx.font = "30px Arial";
  getLocation();
  console.log(lat);
  lat = 'Latitude : '+lat;
  lon = 'Longitude : '+lon;
ctx.fillText(lat, 10, 50);
ctx.fillText(lon, 10, 100);

dataURL = canvas.toDataURL();
console.log(dataURL);
  // update width and height ...
}

window.addEventListener('load',function(e){
e = e || window.event;
e.preventDefault();
if (navigator.geolocation) {
navigator.geolocation.watchPosition(showPosition);
} else { 
x.innerHTML = "Geolocation is not supported by this browser.";
}})  
                            
                        function showPosition(position) {
                            lat = position.coords.latitude;
                            lon = position.coords.longitude;
                            // x.value="Latitude: " + position.coords.latitude + 
                            // ",Longitude: " + position.coords.longitude;
                        }

// window.onload = function() {
//   var canvas = document.getElementById("myCanvas");
//   var ctx = canvas.getContext("2d");
//   var img = document.getElementById("scream");
//   ctx.drawImage(img, 10, 10);
// };
$(function() {
    var form = document.getElementById('mainform');
$('#mainform').submit(function(e) {
          e.preventDefault();
var input = $("<input>")
               .attr("type", "hidden")
               .attr("name", "picutre").val(dataURL);
$('#mainform').append(input);
form.submit();
})
})



    </script>
</body>
</html>