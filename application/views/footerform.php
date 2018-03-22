<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Created by <a href="http://techgeektechnology.com">techgeektechnology.com</a> </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>  
      $(document).ready(function(){  
        $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd' 
              });   
        $(function(){  
          $("#date").datepicker();  
          $("#date2").datepicker();
          $("#date3").datepicker();
          $('#time').timepicker({
            timeFormat: 'HH:mm:00',
            interval: 30,
    minTime: '00:30:00',
    maxTime: '23:59:59',
    defaultTime: '<?php echo $bookingtime; ?>',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
          });
             $('#time2').timepicker({
            timeFormat: 'HH:mm:00',
            interval: 30,
    minTime: '00:30:00',
    maxTime: '23:59:59',
    defaultTime: '11:00:00',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
          });
           });  
           
           });  
          
 </script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
</body>
</html>
