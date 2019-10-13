<!DOCTYPE html>
<html>
<head>
      <title>Highcharts Tutorial</title>
      <script src="http://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
      <script src = "https://code.highcharts.com/highcharts.js"></script> 
   </head>
      <body>
      <div id = "container" style = "width: 550px; height: 400px; margin: 0 auto"></div>
      <script type = "text/javascript">
         $(document).read(function() {
         	var options ={
         		chart:{
         			renderTo: 'container',
         			type: 'line'
         		},
         		series[{}]
         	};
            var title = {
               text: 'Average Temperatures of Cities'   
            };
            $.getJSON('read.php', function(data){
            	options.series[0].data = data;
            	var chart =new Highcharts.Chart(options);
            	});
		});
 </script>
 </body>
</html>