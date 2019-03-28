<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Online Medical shop</title>
  <link rel="stylesheet" type="text/css" href="menu.css">
  <link rel="stylesheet" type="text/css" href="card.css">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="login.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">
   <style type="text/css">
     
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #228B22; 
  border-bottom: 1px solid #d4d4d4; 
}

   </style>

</head>

<body>

  <!-- Navigation -->
  
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#sign">
    signup
  </a>
  <a href="#Loginn">Login</a>
  <a href="#Order">Order</a>

   <div class="search-container">
    <form action="tab.php" method="post">
      <input type="text" placeholder="Search for Medicines" name="search" id="myInput" required >
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Online Medical Shop</h1>
        <h2 class="masthead-subheading mb-0">Now more faster</h2>
        
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

 

  <

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script type="text/javascript">
    function validate()
    {
     x=document.sign.pwd.value;
     if(x.length < 6)
     {
      alert("password should be more than 6 characters");
      return false;

     }




    }


  </script>
  <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var Medicines = ["ACCOLATE","ACCUNEB","ACCURETIC","","ACEON","","ACLOVATE","ACTIGALL","ACTIQ","ADALAT CC","ADDERALL","ADDERALL XR","ADIPEX-P","AGRYLIN","ALDACTAZIDE","ALDACTONE","ARALEN","ARAVA","ARICEPT","ATIVAN","BENTYL","BENZAC AC","BENZAMYCIN","BETAGAN","BIAXIN","CARDURA","CEFTIN","CIPRO","CLOMID","COREG","COSOPT","DAYPRO","DIABETA","DUONEB","DITROPAN XL","DURAGESIC","EXELON","ELOCON","EFUDEX","EMLA","FLUMADINE","FML","FLAGYL 375","FLOMAX","FOLTX","GLUCOPHAGE","GLUCOPHAGE XR","GLUCOTROL","GLUCOVANCE","HYDREA","HYZAAR","IMITREX","INDERAL LA","ISORDIL","IMITREX","KLARON","K-TAB","","KEFLEX","LAC-HYDRIN","LOESTRIN 1 / 20","LOESTRIN FE 1.5 / 30","LOPRESSOR","LOPROX","LURIDE LOZI-TABS","LUSTRA ","MAXITROL","MACRODANTIN","MIRCETTE","MOBIC","MYCELEX","PREVACID","NORVASC","OPTIPRANOLOL","ORTHO-CEPT","OXANDRIN","PAMELOR","PRINIVIL","REBETOL","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","RITALIN-SR","ROXICODONE","SEPTRA","SULAR","SYNTHROID","TEGRETOL","TESSALON","TIAZAC","TOBREX","TOLECTIN","TYLENOL WITH CODEINE","ULTRAVATE","URSO","VASERETIC","VICODIN","VIVACTIL","VOLTAREN-XR","WELLBUTRIN","WELLBUTRIN XL","XANAX","XANAX XR  ","XYZAL","YASMIN","YAZ","ZANTAC","ZERIT","ZESTORETIC","ZIAC","ZYLOPRIM","PARACETAMOL"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), Medicines);
</script>


<section >
    
<div class="container"  >
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="dia.jpg"  >
      </div>

      <div class="item">
        <img src="h.jpg" alt="Chicago">
      </div>
    
      <div class="item">
        <img src="baby.jpg" alt="New york" >
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

   </section>



<div class="row">
   <div class="col-sm-4 ">

<div class="card">
  <img src="cancer.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Tips </h1>
  <p class="price">To cure Naturally</p>
  <ul style="text-align: justify;"><li>The Gerson therapy and juicing.
<li>The bud wig protocol.</li>
<li>Proteolytic enzyme therapy.</li>
<li>Vitamin-C chelation.</li>
<li>Frankincense essential oil Therapy.</li>
<li>Probiotic foods and supplements.</li>
<li>Sunshine & vitamin D3.</li>
</ul>
  
</div>
</div>
 <div class="col-sm-4 ">
<div class="card">
  <img src="thy.jpg" alt="Denim Jeans" style="width:100%; height: 205px;">
  <h1>Tips </h1>
  <p class="price">foods to be avoided for thyroid</p>
  <ul style="text-align: justify;">
  <li>Soy foods: Tofu, tempeh, edamame.</li><li>
Certain vegetables: Cabbage, broccoli, kale, cauliflower, spinach.</li><li>
Fruits and starchy plants: Sweet potatoes, cassava, peaches.</li><li>
Nuts and seeds: Millet, pine nuts, peanuts.</li>
</ul>
</div>
</div>

 <div class="col-sm-4 ">
<div class="card">
  <img src="hair.jpg" alt="Denim Jeans" style="width:100%; height: 205px;">
  <h1>Tips </h1>
  <p class="price">Natural remedies to treat hair fall</p>
  <ul style="text-align: justify;">
  <li>Coconut Milk</li><li>Beetroot juice</li><li>Aloe Vera</li><li>Fenugreek seeds</li>
  <li>Licorice root</li>
  <li>Keep yourself hydrated</li>
</ul>
</div>
</div>
</div>

</div>







<div class="row" id="row2">
   <div class="col-sm-4 ">

<div class="card">
  <img src="heart.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Heart attack </h1>
  <p class="price">Path to improved health</p>
  <ul style="text-align: justify;"><li> Stop smoking</li>
<li>Control your blood pressure</li>
<li>Control your cholesterol levels</li>
<li>Check for diabetes</li>
<li>Exercise</li>
<li>Control your stress level</li>
</ul>
  
</div>
</div>
 <div class="col-sm-4 ">
<div class="card">
  <img src="tooth.jpg" alt="Denim Jeans" style="width:100%; height: 205px;">
  <h1>Tooth Tips </h1>
  <p class="price">Some painkillers</p>
  <ul style="text-align: justify;">
  <li>Clove Oil </li><li>
Gargle with Salt Water - Take a cup of warm water and add one teaspoon of salt in it. </li><li> Garlic</li><li> Almonds</li>
</ul>
</div>
</div>

 <div class="col-sm-4 ">
<div class="card">
  <img src="smoke.jpg" alt="Denim Jeans" style="width:100%; height: 205px;">
  <h1>Tips </h1>
  <p class="price">Quit smoking</p>
  <ul style="text-align: justify;">
  <li>Think positive</li><li>Make a plan to quit smoking</li><li>Change your drink</li><li>Identify when you crave cigarettes</li>
  <li>Make non-smoking friends</li>
  <li>Keep your hands and mouth busy</li>
</ul>
</div>
</div>
</div>

</div>

<div  id="Loginn" style=" text-align: center; margin-top: 70px; ">
<img src="icon.jpg" class="rounded" style="width: 8%; " >
</div>


<div class="login-page">
<h1>Login </h1>
  <div class="form" >
    
    <form class="login-form"  name="login" action="log.php" method="post" id="login" >
      <input type="text"  name="userlog" placeholder="username" required>
      <input type="password" name="pwdlog" placeholder="password" required>
      <input type="submit" name="submit" value="submit" >

      <p class="message">Not registered? <a href="#signup">Create an account</a></p>
    </form>
  </div>
</div>



<div class="login-page"  id="sign">
<h1>Sign up </h1>
  <div class="form" >
    
    <form  name="sign"class="login-form"  method="post" action="login.php"  onsubmit="return validate()">
      <input type="text" name="user" placeholder="username" id="signup"  required />
      <input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />
      <input type="password" name="pwd" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"  required/>
      <input type="submit" name="submit" value="signup">
      
    </form>
  </div>
</div>


<div class="login-page" id="Order">
<h1> Order </h1>
  <div class="form" >
    
    <form  name="order"class="login-form"  method="post" action="order.php"  >
      <input type="text" name="User" placeholder="username" id="signup"  required />
      <input type="email" name="Email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />
      <input type="text"  placeholder="Medicine" name="item"    required />
      <input type="number" name="Quantity" placeholder="quantity" required >
      <input type="submit" name="submit" value="order now">
      
    </form>
  </div>
</div>


   



</body>

<!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white large">Every Medicine On time. Now delivery to 50+ cities across India.</p>
    </div>
    <!-- /.container -->
  </footer>
</html>
