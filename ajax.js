$(document).on('submit', '#report', function() //for adding customer
 {
  
 
  var data = $(this).serialize();
  
  
  $.ajax({
  
  type : 'POST',
  url  : 'report.php',
  data : data,
  success :  function(data)
       {
      $("#report_error").html(data); 
          //  alert(data);
      
       }
  });
  return false;
 });