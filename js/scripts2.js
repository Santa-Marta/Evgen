$(document).ready(function() {           
          $("#send-email-button").click(function() {  
            var email = $("#form-email").val()
            var regex = /@{1}/;
            if (email.search(regex) != -1){
              $("#form-email").css('background', 'white');         
              var data = getData();                 
              if (isValidData(data)) {
                  var data = getData();
                  $.ajax({
                      type: "POST",
                      url: "php/writetobase.php",
                      data: data,
                      success: function(data) {
                          console.log("Log was written successfully");
                      },
                      error: function(xhr, status, error) {
                          var err = eval("(" + xhr.responseText + ")");
                          console.log("Internal error. Log writing. Details:");
                          console.log(err);
                      }
                  });
                  $.ajax({
                      type: "POST",
                      url: "php/phpMail.php",
                      data: data,
                      success: function(data) {
                          console.log("E-mail was sent successfully");
                          location.reload();
                      },
                      error: function(xhr, status, error) {
                          var err = eval("(" + xhr.responseText + ")");
                          console.log("Internal error. E-mail sending. Details:");
                          console.log(err);
                      }
                  });
              }
                
            }  
            else {   
                $("#form-email").css('background', 'red');
            }
              return false;
          });
      });