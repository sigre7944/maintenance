$(document).on('submit', '#up_post', function() //for searching customer
 {
  
 
  var data = $(this).serialize();
  
  
  $.ajax({
  
  type : 'POST',
  url  : 'up_post.php',
  data : data,
  success :  function(data)
       {
      $("#cusresult").html(data); 
          //  alert(data);
      
       }
  });
  return false;
 });

$(document).on('submit', '#csform', function() //for searching customer
 {
  
 
  var data = $(this).serialize();
  
  
  $.ajax({
  
  type : 'POST',
  url  : 'searchcustomer.php',
  data : data,
  success :  function(data)
       {
      $("#cusresult").html(data); 
          //  alert(data);
      
       }
  });
  return false;
 });

$(document).on('submit', '#csform', function() //for searching customer
 {
  
 
  var data = $(this).serialize();
  
  
  $.ajax({
  
  type : 'POST',
  url  : 'searchcustomer.php',
  data : data,
  success :  function(data)
       {
      $("#cusresult").html(data); 
          //  alert(data);
      
       }
  });
  return false;
 });

$(document).on('submit', '#csform', function() //for searching customer
 {
  
 
  var data = $(this).serialize();
  
  
  $.ajax({
  
  type : 'POST',
  url  : 'searchcustomer.php',
  data : data,
  success :  function(data)
       {
      $("#cusresult").html(data); 
          //  alert(data);
      
       }
  });
  return false;
 });
