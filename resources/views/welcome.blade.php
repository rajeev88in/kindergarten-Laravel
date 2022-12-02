<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KinderGarden Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <header class="text-center m-4" >
      <h1 > <b>Kindergarden Registration</b> </h1>
    </header>
    <form action="{{url('/')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="container">
      <!-- Card Text Starts -->
      <div class="card text-center">
      <div class="card-header">
        <h3>Applicant's Details</h3>
      </div>
      <div class="card-body">
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label class="col-sm-20"><b>Applicant's Name </b><font color="red">* </font></label>
          </div>
          <div class="">
            <input type="text" id="sname" name="sname" class="form-control text-uppercase" onkeypress="return isCharKey_not_dot(event)" value="{{old('sname')}}" required>
            <span class="error">
              @error('sname') 
                {{$message}}
              @enderror
            </span>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label class="col-sm-20"><b>Date-of-Birth </b><font color="red">* </font></label>
          </div>
          <div class="">
            <input type="date" class="form-control" id="dob" name="dob" value="{{old('dob')}}" required>
            <span class="error">
              @error('dob') 
                {{$message}}
              @enderror
            </span>
          </div>
        </div>
        <div class="col-sm-4 ">
          <div class="form-group">
            <label class="col-sm-20"><b>Select Class </b><font color="red">* </font></label>
          </div>
          <div class="">
            <select id="admclass" name="admclass" class="form-select" required>
              <option value="" selected="">--Select Class-- </option>
              <option value="I" >I </option>
              <option value="II">II </option>
              <option value="III">III </option>
              <option value="IV">IV  </option>
              <option value="V" >V </option>
              <option value="VI">VI </option>
              <option value="VII">VII </option>
              <option value="VIII">VIII  </option>
              <option value="IX">IX  </option>
              <option value="X" >X </option>
              <option value="XI">XI </option>
              <option value="XII">XII </option>
            </select>
            <span class="error">
              @error('admclass') 
                {{$message}}
              @enderror
            </span>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-sm-6">
            <div class="form-group">
              <label class="col-sm-20"><b>Premises No. & Locality/Road </b></label>
            </div>
            <div class="">
              <input type="text" id="road" name="road" class="form-control" value="{{old('road')}}" required>
              <span class="error">
              @error('road') 
                {{$message}}
              @enderror
            </span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label class="col-sm-20"><b>City </b><font color="red">* </font></label>
            </div>
            <div class="">
              <input type="text" id="city" name="city" class="form-control text-uppercase" onkeypress="return isCharKey(event)" value="{{old('city')}}" required>
              <span class="error">
              @error('city') 
                {{$message}}
              @enderror
            </span>
            </div>
          </div>
        <div class="col-sm-3">
            <div class="form-group">
              <label class="col-sm-20"><b>Country </b><font color="red">* </font></label>
            </div>
            <div class="">
                <select id="country" name="country" class="form-select" required >
                    <option>select country</option>
                </select>
            </div>
        </div>
        </div>
        <!-- 1st Row Ends -->
        <!-- 2nd row -->
        <div class="row mt-3">
        <div class="col-sm-6">
            <div class="form-group">
              <label class="col-sm-20"><b>State </b><font color="red">* </font></label>
            </div>
            <div class="">
            <span id="state-code"><input type="text" id="state" ></span>
            </div>
        </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label class="col-sm-20"><b>Pincode </b><font color="red">* </font></label>
            </div>
            <div class="">
              <input type="text" id="pin" name="pin" class="form-control" onkeypress="return onlyNumbers(event)"   value="{{old('pin')}}" required>
              <span class="error">
              @error('pin') 
                {{$message}}
              @enderror
            </span>
            </div>
          </div>
          
        </div>
        <!-- 2nd Row Ends -->
        <div class="row mt-4">
        <div class="col-lg-6">
          <label for="file-ip-1"><b>Upload Image</b><font color="red">* </font></label>
          <input type="file" id="file" name="img" accept="image/x-png,image/jpeg" required>
          <span class="error">
              @error('img') 
                {{$message}}
              @enderror
            </span>
          <p id="output"></p>
          <img id="frame" src="" width="200px" height="250px"/>
        </div>
      </div>
      <table id="myTable" class=" table order-list">
    <thead>
        <h3>Person to Pickup</h3>
        <tr>
            <td><b>Name <font color="red">* </font></b></td>
            <td><b>Relation <font color="red">* </font></b></td>
            <td><b>Phone <font color="red">* </font></b></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="col-sm-4">
                <input type="text" name="name" class="form-control text-uppercase" onkeypress="return isCharKey(event)" value="{{old('name')}}" required/>
                <span class="error">
              @error('name') 
                {{$message}}
              @enderror
            </span>
            </td>
            <td class="col-sm-4">
                <select class="form-select" name="relation" required>
                    <option value="Father">Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                    <option value="Grand Father">Grand Father</option>
                    <option value="Grand Mother">Grand Mother</option>
                </select>
            </td>
            <td class="col-sm-3">
                <input type="text" name="phone"  class="form-control" onkeypress="return onlyNumbers(event)"  value="{{old('phone')}}" required/>
                <span class="error">
              @error('phone') 
                {{$message}}
              @enderror
            </span>
            </td>
            <td class="col-sm-2"><a class="deleteRow"></a>

            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align: right;">
                <input type="button" class="btn btn-block btn-primary " id="addrow" value="Add More" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>
  <input type="hidden" id="mcounter" name="count">
      </div>
      <button class="btn btn-success">Submit</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="assets/js/countrynstates.js"></script>
    <script>
        $(document).ready(function () {
        var counter = 1;     
        document.getElementById('mcounter').value=counter;
        $("#addrow").on("click", function () {
        
            if(counter<6)
    { 
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" name="name' + counter + '" class="form-control text-uppercase" onkeypress="return isCharKey(event)"/></td>';
        cols += '<td><select class="form-select" name="relation' + counter + '"><option value="Father">Father</option> <option value="Mother">Mother</option> <option value="Brother">Brother</option> <option value="Sister">Sister</option> <option value="Grand Father">Grand Father</option> <option value="Grand Mother">Grand Mother</option> </select></td>';
        cols += '<td><input type="text" class="form-control" name="phone' + counter + '" onkeypress="return onlyNumbers(event)" pattern=".{10,10}"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';

        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    }
    else{
        alert("Max 6 Persons Allowed");
    }
    document.getElementById('mcounter').value=counter;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1;
        document.getElementById('mcounter').value=counter;
    });

    

});


//Image Upload
var uploadField = document.getElementById("file");
      uploadField.onchange = function() {
          if(this.files[0].size > 1000000){
             alert("File must be within 1 MB");
             this.value = "";
          }
          else{
            frame.src=URL.createObjectURL(event.target.files[0]);
          }
      };



        function onlyNumbers(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode;
    if(charCode==46)
    	return true;
   	if (charCode > 31 && (charCode < 48 || charCode > 57 ) )
    	return false;
	return true;
}
function isCharnumberKey(e) {

    var AllowableCharacters=' ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789.-';

    var k = document.all?parseInt(e.keyCode): parseInt(e.which);
    if (k!=13 && k!=8 && k!=0){
        if ((e.ctrlKey==false) && (e.altKey==false)) {
        return (AllowableCharacters.indexOf(String.fromCharCode(k))!=-1);
        } else {
        return true;
        }
    } else {
        return true;
    }
}
function isCharKey(e) {

var AllowableCharacters=' ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz.';

var k = document.all?parseInt(e.keyCode): parseInt(e.which);
if (k!=13 && k!=8 && k!=0){
    if ((e.ctrlKey==false) && (e.altKey==false)) {
    return (AllowableCharacters.indexOf(String.fromCharCode(k))!=-1);
    } else {
    return true;
    }
} else {
    return true;
}
}
function isCharKey_not_dot(e) {

var AllowableCharacters=' ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

var k = document.all?parseInt(e.keyCode): parseInt(e.which);
if (k!=13 && k!=8 && k!=0){
    if ((e.ctrlKey==false) && (e.altKey==false)) {
    return (AllowableCharacters.indexOf(String.fromCharCode(k))!=-1);
    } else {
    return true;
    }
} else {
    return true;
}
}
    </script>
    <script>
        // user country code for selected option
let user_country_code = "IN";

(function () {
    
    let country_list = country_and_states['country'];
    let states_list = country_and_states['states'];

    // creating country name drop-down
    let option =  '';
    option += '<option>select country</option>';
    for(let country_code in country_list){
        // set selected option user country
        let selected = (country_code == user_country_code) ? ' selected' : '';
        option += '<option value="'+country_code+'"'+selected+'>'+country_list[country_code]+'</option>';
    }
    document.getElementById('country').innerHTML = option;

    // creating states name drop-down
    let text_box = '<input type="text" class="input-text form-control" id="state">';
    let state_code_id = document.getElementById("state-code");

    function create_states_dropdown() {
        // get selected country code
        let country_code = document.getElementById("country").value;
        let states = states_list[country_code];
        // invalid country code or no states add textbox
        if(!states){
            state_code_id.innerHTML = text_box;
            return;
        }
        let option = '';
        if (states.length > 0) {
            option = '<select id="state" name="state" class="form-select" >\n';
            for (let i = 0; i < states.length; i++) {
                option += '<option value="'+states[i].code+'">'+states[i].name+'</option>';
            }
            option += '</select>';
        } else {
            // create input textbox if no states 
            option = text_box
        }
        state_code_id.innerHTML = option;
    }

    // country select change event
    const country_select = document.getElementById("country");
    country_select.addEventListener('change', create_states_dropdown);

    create_states_dropdown();
})();
    </script>
  </body>
</html>