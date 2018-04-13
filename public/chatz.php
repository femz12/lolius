<html>
<head>
<title>chat</title>
  
<style type="text/css">
    #box{
        max-width: 400px;
        min-width: auto;
        margin: 0 auto;
        border: 2px dotted grey;
    }
    
    #chattext{
        height: 400px;
        overflow: auto;
    }
    input[type='text']{
        max-width: 700px;
        min-width: auto;        
        margin: 10px;
    }
    #button1{
        padding: 10px;
        color: whitesmoke;
        background-color: gray; 
    }
    
    #button2{
        padding: 2px;
        color: whitesmoke;
        background-color: gray;
        margin: 5px;  
    }
</style>
    
    <script type="text/javascript" >
    $(document).ready(function() {
            $('#button2').click(function(){
                
                var varname = $('#name').val();
                var varchat = $('#chat').val();
                
                $.ajax({
                   method: "post",
                   url: "data.php",
                   data: {name: varname, chat: varchat}
                })
                
                .done(function(data) {
                    $('#chattext').html(data); 
                });     
            }); 
       }); 
    </script>
    
</head>
    
    <body>
    
                        <div id="box">
                        <input type="text" name="name" id="name">
                            
                            <div id="chattext"></div>
                            
                             <input type="text" name="chat" id="chat">
                            
                            <button id= "button2">Send</button>
                            
                        </div>
    </body>
    
    <script type="text/javascript" src="jquery-1.2.6.min.js"></script>
</html>