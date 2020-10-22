<!DOCTYPE html>
<html lang="en">
<head>
  <title>TATA DIGITAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
        @media only screen and (min-width: 1200px) {
.deskhide {
  display: none;
}
}
@media only screen and (max-width: 1200px) {
  .mobhide {
    display: none;
  }
}
        @media only screen and (max-width: 900px){
        .mar-top {
            margin-top: 15% !important;
            padding-left: 8% !important;
            padding-right: 8% !important;
        }
    }
    </style>
    
<div style="background-color: #f2f4f3;width: 100%;position: absolute;">
<nav class="navbar navbar-expand-sm " style="float: right;">
  <ul class="navbar-nav" >
    <li class="nav-item">
      <a class="nav-link" href="logout" style="color: #000;">Logout</a>
    </li>
  </ul>
</nav>
</div>
<br>
<section>
    <div class="row mar-top mobhide" style="padding-left:3%;padding-right: 3%; margin-top: 3%;">
        <h2 style="margin-bottom: 1%;">Contact List</h2>
        <div style="width: 100%;margin-top: -50px;">
            <a href="exportfile" class="btn btn-primary" style="float: right;">Export File</a>
        </div>
        
        <!-- <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>             -->
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Entity Name</th>
              <th>Name Contact Person</th>
              <th>Person Type</th>
              <th>Type of Organization</th>
              <th>Contact Number</th>
              <th>Email Id</th>
              <th>Address</th>
              <th style="width: 15%;">Geo location</th>
              <th>Consumer Goods</th>
              <th>Industrial Goods</th>
              <th>Commercial Goods</th>
              <th>Monthly Dispatch</th>
              <th>Dispatch volume</th>
              <th>Mumbai to Delhi Potential</th>
              <th>Materials Sent</th>
              <th>Existing Transporter</th>
              <th>Interested To Work</th>
              <th>Photo of Shop</th>
              <th style="width: 15%;">Visiting Card</th>
              <th>GST IN</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
              @foreach($list as $digitalform)
            <tr>
              <td>{{$digitalform->id}}</td>
              <td>{{$digitalform->name_entity}}</td>
              <td>{{$digitalform->contact_name}}</td>
              <td>{{$digitalform->contact_person_type}}</td>
              <td>{{$digitalform->organization}}</td>
              <td>{{$digitalform->contact_number}}</td>
              <td>{{$digitalform->email_id}}</td>
              <td>{{$digitalform->address}}</td>
              <!-- <td>{{$digitalform->geo_location}}</td> -->
              <td>
                <img src="{{ asset('geolocation_upload/'.$digitalform->geo_location) }}" style="width:100%;"/>
              </td>
              <td>{{$digitalform->consumer_goods}}</td>
              <td>{{$digitalform->industrial_goods}}</td>
              <td>{{$digitalform->Commercial_goods}}</td>
              <td>{{$digitalform->pan_india}}</td>
              <td>{{$digitalform->dispatch_destination}}</td>
              <td>{{$digitalform->delhi_mumbai}}</td>
              <td>{{$digitalform->jaipur_ahmed_surat}}</td>
              <td>{{$digitalform->existing_trans}}</td>
              <td>{{$digitalform->interested_work}}</td>
              <td>
                <img src="{{ asset('photo_shop_upload/'.$digitalform->photo_shop) }}" style="width:100%;"/>
              </td>
              <td>
                <img src="{{ asset('visiting_card_upload/'.$digitalform->photo_visiting_card) }}" style="width:100%;"/>
              </td>
              <td>{{$digitalform->gst_by_client}}</td>
              
              <td>
                <a onclick="return deletenow()" href="deletecontact/{{$digitalform->id}}">
                    Delete
                </a>
              </td>
            </tr>
            @endforeach
            
          </tbody>
          <script>
            function deletenow()
            {
                return confirm("are you sure u want to delete the item ??");
            }
        </script>
        </table>
      </div>

      <!-- code for mobile -->


      <div class="row mar-top deskhide" style="padding-left:3%;padding-right: 3%; margin-top: 3%;">
        <h2 style="margin-bottom: 5%;">Contact List</h2>
        <div style="width: 100%;margin-top: -50px;">
            <a href="/admin/exportfile" class="btn btn-primary" style="float: right;">Export File</a>
        </div>
        
        <!-- <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>             -->
        @foreach($list as $digitalform)
        <table class="table" style="margin-bottom: 5%;">
            <tr>
                <th>
                    Id
                </th>
                <td>{{$digitalform->id}}</td>
            </tr>
            <tr>
                <th>Entity Name</th>
                <td>{{$digitalform->name_entity}}</td>
            </tr>
            <tr>
                <th>Contact Person Name</th>
                <td>{{$digitalform->contact_name}}</td>
            </tr>
            <tr>
                <th>Contact Detials</th>
                <td>{{$digitalform->contact_detials}}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{$digitalform->address}}</td>
            </tr>
            <tr>
                <th style="width: 15%;">Shop Img</th>
                <td>
                    <img src="{{ asset('photo_shop_upload/'.$digitalform->photo_shop) }}" style="width:100%;"/>
                  </td>
            </tr>
            <tr>
                <th>Other Cities</th>
                <td>{{$digitalform->other_cities}}</td>
            </tr>
            <tr>
                <th>PTL or FTL</th>
                <td>{{$digitalform->ptl_or_ftl}}</td>
            </tr>
            <tr>
                <th>Organisation</th>
                <td>{{$digitalform->organization}}</td>
            </tr>
            <tr>
                <th>Proper Bills</th>
                <td>{{$digitalform->proper_bills}}</td>
            </tr>
            <tr>
                <th style="width: 15%;">Visiting Card</th>
                <td>
                    <img src="{{ asset('visiting_card_upload/'.$digitalform->photo_visiting_card) }}" style="width:100%;"/>
                  </td>
            </tr>
            <tr>
                <th>Delete</th>
                <td>
                    <a onclick="return deletenow()" href="/admin/deletecontact/{{$digitalform->id}}">
                        Delete
                    </a>
                  </td>
            </tr>
        </table>
            @endforeach
            
          <!-- <thead>
            <tr>
              <th>Id</th>
              <th>Entity Name</th>
              <th>Contact Person Name</th>
              <th>Contact Detials</th>
              <th>Address</th>
              <th style="width: 15%;">Shop Img</th>
              <th>Other Cities</th>
              <th>PTL or FTL</th>
              <th>Organisation</th>
              <th>Proper Bills</th>
              <th style="width: 15%;">Visiting Card</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
              @foreach($list as $digitalform)
            <tr>
              <td>{{$digitalform->id}}</td>
              <td>{{$digitalform->name_entity}}</td>
              <td>{{$digitalform->contact_name}}</td>
              <td>{{$digitalform->contact_detials}}</td>
              <td>{{$digitalform->address}}</td>
              <td>
                <img src="{{ asset('photo_shop_upload/'.$digitalform->photo_shop) }}" style="width:100%;"/>
              </td>
              <td>{{$digitalform->other_cities}}</td>
              <td>{{$digitalform->ptl_or_ftl}}</td>
              <td>{{$digitalform->organization}}</td>
              <td>{{$digitalform->proper_bills}}</td>
              <td>
                <img src="{{ asset('visiting_card_upload/'.$digitalform->photo_visiting_card) }}" style="width:100%;"/>
              </td>
              <td>
                <a onclick="return deletenow()" href="/admin/deletecontact/{{$digitalform->id}}">
                    Delete
                </a>
              </td>
            </tr>
            @endforeach
            
          </tbody> -->
          <script>
            function deletenow()
            {
                return confirm("are you sure u want to delete the item ??");
            }
        </script>
        <!-- </table> -->
      </div>
</section>



</body>
</html>
