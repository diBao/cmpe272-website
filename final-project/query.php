
<!DOCTYPE html>
<html>
   <head>
      <!-- Standard Meta -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <!-- Site Properties -->
      <title>Market_Place_User</title>
      <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
      <link rel="stylesheet" type="text/css" href="dist/components/site.css">
      <link rel="stylesheet" type="text/css" href="dist/components/card.css">
      <link rel="stylesheet" type="text/css" href="dist/components/container.css">
      <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
      <link rel="stylesheet" type="text/css" href="dist/components/header.css">
      <link rel="stylesheet" type="text/css" href="dist/components/image.css">
      <link rel="stylesheet" type="text/css" href="dist/components/menu.css">
      <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
      <link rel="stylesheet" type="text/css" href="dist/components/dropdown.css">
      <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
      <link rel="stylesheet" type="text/css" href="dist/components/button.css">
      <link rel="stylesheet" type="text/css" href="dist/components/list.css">
      <link rel="stylesheet" type="text/css" href="dist/components/icon.css">
      <link rel="stylesheet" type="text/css" href="dist/components/sidebar.css">
      <link rel="stylesheet" type="text/css" href="dist/components/transition.css">
      <link rel="stylesheet" type="text/css" href="dist/components/rating.css">
      <link rel="stylesheet" type="text/css" href="dist/components/table.css">
      <style type="text/css">
         .hidden.menu {
         display: none;
         }
         .masthead.segment {
         min-height: 700px;
         padding: 1em 0em;
         }
         .masthead .logo.item img {
         margin-right: 1em;
         }
         .masthead .ui.menu .ui.button {
         margin-left: 0.5em;
         }
         .masthead h1.ui.header {
         margin-top: 3em;
         margin-bottom: 0em;
         font-size: 4em;
         font-weight: normal;
         }
         .masthead h2 {
         font-size: 1.7em;
         font-weight: normal;
         }
         .ui.vertical.stripe {
         padding: 8em 0em;
         }
         .ui.vertical.stripe h3 {
         font-size: 2em;
         }
         .ui.vertical.stripe .button + h3,
         .ui.vertical.stripe p + h3 {
         margin-top: 3em;
         }
         .ui.vertical.stripe .floated.image {
         clear: both;
         }
         .ui.vertical.stripe p {
         font-size: 1.33em;
         }
         .ui.vertical.stripe .horizontal.divider {
         margin: 3em 0em;
         }
         .overlay .menu {
         position: relative;
         left: 0;
         transition: left 0.5s ease;
         }
         .overlay.fixed .menu {
         left: 800px;
         }
         .text.container .left.floated.image {
         margin: 2em 2em 2em -4em;
         }
         .text.container .right.floated.image {
         margin: 2em -4em 2em 2em;
         }
         .quote.stripe.segment {
         padding: 0em;
         }
         .quote.stripe.segment .grid .column {
         padding-top: 5em;
         padding-bottom: 5em;
         }
         .footer.segment {
         padding: 5em 0em;
         }
         .secondary.pointing.menu .toc.item {
         display: none;
         }
         @media only screen and (max-width: 700px) {
         .ui.fixed.menu {
         display: none !important;
         }
         .secondary.pointing.menu .item,
         .secondary.pointing.menu .menu {
         display: none;
         }
         .secondary.pointing.menu .toc.item {
         display: block;
         }
         .masthead.segment {
         min-height: 350px;
         }
         .masthead h1.ui.header {
         font-size: 2em;
         margin-top: 1.5em;
         }
         .masthead h2 {
         margin-top: 0.5em;
         font-size: 1.5em;
         }
         }
      </style>
      <script src="jquery.min.js"></script>
      <script src="semantic.min.js"></script>
      <script src="dist/components/transition.js"></script>
      <script src="dist/components/dropdown.js"></script>
      <script src="dist/components/visibility.js"></script>
            <script src="dist/components/rating.js"></script>
      <script src="dist/components/rating.min.js"></script>
      <script>
         $(document)
           .ready(function() {

             // fix menu when passed
             $('.ui.rating')
              .rating({
                maxRating: 5
              })
            ;
            $('.toggle.example .rating')
              .rating({
                initialRating: 2,
                maxRating: 4
              })
            ;
             $('.masthead')
               .visibility({
                 once: false,
                 onBottomPassed: function() {
                   $('.fixed.menu').transition('fade in');
                 },
                 onBottomPassedReverse: function() {
                   $('.fixed.menu').transition('fade out');
                 }
               })
             ;
                  // lazy load images
            $('.image').visibility({
              type: 'image',
              transition: 'vertical flip in',
              duration: 500
            });
         // show dropdown on hover
                    $('.ui.menu  .ui.dropdown').dropdown({
                      on: 'hover'
                    });
             // create sidebar and attach to menu open
             $('.ui.sidebar')
               .sidebar('attach events', '.toc.item')
             ;

           })
         ;
      </script>
      <script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
    }
  }
  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1761144320805555',
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });
  // Now that we've initialized the JavaScript SDK, we call
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.
  };
  function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
  }
  function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
   }
  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      if (readCookie('username') == null) {
      var username = 'username'
      createCookie(username,response.name,1);
      window.location.reload();
      }
    });
  }
</script>
   </head>
   <body>
      <!-- Following Menu -->
      <div class="ui large top fixed hidden menu">
         <div class="ui container">
            <a class="active item">Home</a>
            <a class="item" href="news">News</a>
            <a class="item" href="product">Product</a>
            <a class="item" href="about">About</a>
            <a class="item" href="contact">Contact</a>
            <!-- <a class="item" href="/user">User</a> -->


         </div>
      </div>
      <!-- Sidebar Menu -->
      <div class="ui vertical inverted sidebar menu">
         <a class="active item">Home</a>
         <a class="item" href="news">News</a>
         <a class="item" href="product">Product</a>
         <a class="item" href="about">About</a>
         <a class="item" href="contact">Contact</a>
         <!-- <a class="item" href="/user">User</a> -->
         <a class="item" href ="/secureSection">Login</a>
         <a class="item" href ="/secureSection">SignUp</a>
      </div>
      <!-- Page Contents -->
      <div class="pusher ">
      <div class="ui vertical masthead center aligned segment indexbackground">
         <div class="ui container masthead">
            <div class="ui large secondary pointing menu">
               <a class="toc item">
               <i class="sidebar icon"></i>
               </a>
               <a class="active item">Home</a>
               <a class="item" href="news">News</a>
               <a class="item" href="product">Product</a>
               <a class="item" href="about">About</a>
               <a class="item" href="contact">Contact</a>
               <!-- <a class="item" href="/user">User</a> -->
               <?php
            if ($_COOKIE['username'] == null) {
               $path = 'http://www.hanchen-cmpe.com/272finalProject/272deploy/Sites/';
               //$path = '';
               $login = $path . 'secureSection/login.php';
               $signup = $path . 'secureSection/signin.php';
            echo '
            <div class="right menu">
               <div class="item">
                  <a class="ui button" href=' . $login . '>Login</a>
               </div>
               <div class="item">
                  <a class="ui primary button" href=' . $signup .'>SignUp</a>
               </div>
               <div class="item">
               <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
               </fb:login-button>
               </div>
            </div> '; }
            else {
               $username = $_COOKIE['username'];
               //$path = '';
               $path = 'http://www.hanchen-cmpe.com/272finalProject/272deploy/Sites/';
               $userDetail = $path . 'secureSection/userDetail.php';
               $Logout = $path . 'secureSection/signout.php';
               echo '
               <div class="right menu">
               <div class="item">
                  <a class="ui button" href=' . $userDetail . '>' . $username . '</a>
               </div>
               <div class="item">
                  <a class="ui primary button" href=' . $Logout .'>Logout</a>
               </div>
            </div> ';
            }
            ?>

            </div>
         </div>
         <div class="ui doubling stackable grid container">
            <div class="sixteen wide column">
               <div class="ui vertical masthead segment">
                  <div class="ui text container">
                     <div class="ui segment">
                        <div class="ui stackable column grid">
                           <?php
                              $conn = mysqli_connect('127.0.0.1', 'root', '123456','cmpe272FinalProject');
                              //connect to mysql
                              if($conn->connect_error) {
                                 die("Connection failed: " . $conn->connect_error);
                              }

                              $SQL = "SELECT id,username,email,phone FROM market_user";
                              $result = mysqli_query($conn, $SQL);
                              if ($result) {
                                  echo "<table class=\"ui violet
                              table\">";
                                echo "<thead>";
                                  echo "<tr>";
                                    echo "<th>ID</th>";
                                    echo "<th>USERNAME</th>";
                                    echo "<th>EMAIL</th>";
                                    echo "<th>PHONE</th>";

                                  echo "</tr>";
                                echo "</thead>";
                                echo '<tbody>';
                              while ($row = mysqli_fetch_array($result)){

                                     echo '<tr>';
                                       echo '<td>'.$row["id"].'</td>';
                                       echo '<td>'.$row["username"].'</td>';
                                       echo '<td>'.$row["email"].'</td>';
                                       echo '<td>'.$row["phone"].'</td>';
                                    echo '</tr>';

                           }
                           echo '</tbody>';
                           echo '</table>';
                        }
                           ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="ui inverted vertical footer segment">
            <div class="ui container">
               <div class="ui stackable inverted divided equal height stackable grid">
                  <div class="three wide column">
                     <h4 class="ui inverted header">About</h4>
                     <div class="ui inverted link list">
                        <a href="#" class="item">Sitemap</a>
                        <a href="#" class="item">Contact Us</a>
                        <a href="#" class="item">Annual sale</a>
                        <a href="#" class="item">Subscription</a>
                     </div>
                  </div>
                  <div class="three wide column">
                     <h4 class="ui inverted header">Services</h4>
                     <div class="ui inverted link list">
                        <a href="#" class="item">BPre-Order</a>
                        <a href="#" class="item">DNA FAQ</a>
                        <a href="#" class="item">How To Access</a>
                     </div>
                  </div>
                  <div class="seven wide column">
                     <h4 class="ui inverted header">Footer Header</h4>
                     <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
