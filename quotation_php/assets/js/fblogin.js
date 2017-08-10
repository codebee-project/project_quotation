$(document).ready(function(e) {

 var APP_ID = "1934932676763550";
  window.fbAsyncInit = function() {
    FB.init({
      appId      : APP_ID,
      xfbml      : true,
      version    : 'v2.10'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

});

function fbLogin(){

 FB.login(function(response) {
  var listfriend = new Array();
  var fbuid = response.authResponse.userID;
  if (response.authResponse) {
   FB.api('/me', { locale: 'en_US', fields: 'picture,name,age_range, birthday, email, gender, friends'}, function(response) {
    console.log(JSON.stringify(response));

    var email = response.email;
    var name = response.name;
    var picture = response.picture;
/*    var sername = response.last_name;
    var friends = response.friends;
    var birthday = response.birthday;*/
//for friends user on facebook
/*    if(friends != null){
     for (var i = 0; i < friends['data'].length; i++) {
      listfriend.push(friends['data'][i].id);
     }
    }*/
   //console.log(listfriend);
   $("#isFacebook").val(1);
   $("#input_name").val(name);
   $("#input_email").val(email);
   $("#input_password").val(fbuid);
   $("#input_image").val("http://graph.facebook.com/"+fbuid+"/picture?type=normal");
/*   $("#member_sername").val(sername);
   $("#gender").val(response.gender);
   $("#listfriend").val(listfriend);
   $("#birthday").val(birthday);*/

   $("#fb_login").submit();

     console.log('Good to see you, ' + response.id + '.');

   });
  } else {
   console.log('User cancelled login or did not fully authorize.');
  }
 }, {scope:'public_profile,user_birthday,user_about_me,publish_actions,email,user_friends', return_scopes: true});

}