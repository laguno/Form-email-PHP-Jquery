//$(document).ready(function () {
//
//});
//
//$("form").submit(function (e) {
//    e.preventDefault();
//
//    var error = "";
//
//    $(".form-control").each(function () {
//        let ID = $(this).attr("id");
//        //console.log($("#"+ID).val());
//        if ($("#" + ID).val() == "") {
//            error += "<p>The " + ID + " field is required!</p><br>";
//        }
//        if (error != "") {
//            $("#error").html('<div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> There were error(s) in your form:' + error + '</div>');
//        }else{
//            $("form").unbind("submit").submit();
//        }
//
//    });
//
//});
//          $("form").submit(function(e) {
//              
//              var error = "";
//              
//              if ($("#email").val() == "") {
//                  
//                  error += "The email field is required.<br>"
//                  
//              }
//              
//              if ($("#subject").val() == "") {
//                  
//                  error += "The subject field is required.<br>"
//                  
//              }
//              
//              if ($("#text-area").val() == "") {
//                  
//                  error += "The message field is required.<br>"
//                  
//              }
//              
//              if (error != "") {
//                  
//                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
//                  
//                  return false;
//                  
//              } else {
//                  
//                  return true;
//                  
//              }
//          })