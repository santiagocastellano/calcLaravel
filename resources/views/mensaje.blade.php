<html>
   <head>
      <title>Ajax Example</title>
      <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}"type='text/css' />
      <link rel="stylesheet" href="{{URL::asset('/css/calc.css')}}"type='text/css' />
      <meta name="_token" content="{!! csrf_token() !!}"/>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      
      <script type="text/javascript">
      $.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
      function llenar2(num) {
           
            var dataString2="santiago";
            var key = "Nombre";
            var suma=localStorage.getItem("Nombre")+num;
                  //localStorage["Nombre"] = "algo";
            localStorage.setItem(key, suma);
           // console.log('iiii');
      };
      function vaciar() {
           
           localStorage.setItem("Nombre",'');
          // console.log('iiii');
     };
     
        $(document).ready(function(){
           
           
             
             $('#llenar').click(function(){
               //  console.log("llenar con 4");
                // var valorAnt=$("#fname").val();
                 //console.log(valorAnt);
                // $("#fname").val(valorAnt);
                 console.log(localStorage.getItem("Nombre"));
                
             });
             
             $('#getRequest').click(function(){
                   //var fname=$('#fname').val();
                 /*  $.post('register',{fname:name}, function(data){
                         console.log(data);
                         $('#postRequestData').html(data);
                   })*/
                   var dataString=$("#fname").val();
                   console.log("antes de mandar "+dataString);
                  $.ajax({
                        type:"POST",
                        url:"/postajax",
                        data:{'dato':dataString},
                        //data2 es lo que envia el servidor como respuesta
                        success: function(data2){
                              $('#server').append(data2);
                              console.log(data2);
                        }
                   });
             });
             $(".igual").click(function(){
                  var dataString=$("#answer").val();
                  console.log(dataString);
                  $.ajax({
                        type:"POST",
                        url:"/postajax",
                        data:{'dato':dataString},
                        //data2 es lo que envia el servidor como respuesta
                        success: function(data2){
                             // $('#server').append(data2);
                              $('#answer').val(data2);
                              console.log(data2);
                        }
                   });
             });
             $('.postbutton').click(function(){
                   //var fname=$('#fname').val();
                 /*  $.post('register',{fname:name}, function(data){
                         console.log(data);
                         $('#postRequestData').html(data);
                   })*/
                   var dataString=$("#fname").val();
                   console.log("antes de mandar "+dataString2);
                  $.ajax({
                        type:"POST",
                        url:"/postajax",
                        data:{'dato':dataString},
                        //data2 es lo que envia el servidor como respuesta
                        success: function(data2){
                              $('#server').append(data2);
                              console.log(data2);
                        }
                   });
             });
        });
      </script>
   </head>
   
   <body>
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="row col-lg-5">
      
         
         
         </div>
         <div id="getRequestData"></div>
         <div id="postRequestData"></div>
         
         <div id="server"></div>
         
         <div class="row col-lg-5">
         <h2 align="center">Calcular</h2>
        
            <div id='calc-contain'>
  
  <form name="calculator">
    
    <input type="text" id ="answer" name="answer" />
    <br>
    
    <input type="button" value=" 1 " onclick="calculator.answer.value += '1'" />
    <input type="button" value=" 2 " onclick="calculator.answer.value += '2'" />
    <input type="button" value=" 3 " onclick="calculator.answer.value += '3'" />
    <input type="button" value=" + " onclick="calculator.answer.value += '+'" />
    <br/>
    
    <input type="button" value=" 4 " onclick="calculator.answer.value += '4'" />
    <input type="button" value=" 5 " onclick="calculator.answer.value += '5'" />
    <input type="button" value=" 6 " onclick="calculator.answer.value += '6'" />
    <input type="button" value=" - " onclick="calculator.answer.value += '-'" />
    </br>
  
    <input type="button" value=" 7 " onclick="calculator.answer.value += '7'" />
    <input type="button" value=" 8 " onclick="calculator.answer.value += '8'" />
    <input type="button" value=" 9 " onclick="calculator.answer.value += '9'" />
    <input type="button" value=" x " onclick="calculator.answer.value += '*'" />
    </br>

    <input type="button" value=" c " onclick="calculator.answer.value = ''" />
    <input type="button" value=" 0 " onclick="calculator.answer.value += '0'" />
    <input type="button" value=" = " class="igual" />
    <input type="button" value=" / " onclick="calculator.answer.value += '/'" />
    </br>


  </form>
 
</div>
            

        
         </div>
        
   </body>

</html>