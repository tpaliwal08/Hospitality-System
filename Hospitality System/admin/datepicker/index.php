<link rel="stylesheet" href="css/base/jquery.ui.all.css">
<script src="jquery-1.6.2.js"></script>
<script src="jquery.ui.core.js"></script>
<script src="jquery.ui.widget.js"></script>
<script src="jquery.ui.datepicker.js"></script>
<script>
      $(function() {
	      $( "#cdate" ).datepicker({ dateFormat: 'yy-mm-dd' });	      
      });
	   $(function() {
	      $( "#mdate" ).datepicker({ dateFormat: 'yy-mm-dd' });	      
      });
</script>
<input type="text" aria-required="true" value="" id="sale_start_date" name="sale_start_date"> 
<input type="text" aria-required="true" value="" id="sale_end_date" name="sale_end_date"> 
