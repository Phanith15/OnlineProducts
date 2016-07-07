
<style>
    tr:hover{
        background-color: #888888;
        color: white;
    }
    table,th,td{
        border: 0px solid black;
        border-collapse: collapse;
    }
    tr{
        border: none;
        background-color: #800080;
    }
    #second{
        padding-top: 5px;
        padding-bottom: 5px;
        background-color: white;
    }
    #prolink{
        color: white;
    }
    #productNames{
        color: white;
    }
    
</style>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>-->

<script type="text/javascript">
   
    $(function() {

   $.getJSON('products.json', function(data) {
       $.each(data.product, function(i, p) {
          var tblRow = "<tr  onclick = 'myFunction(this)'>" + "<td  style='display:none'>"+ p.id + "</td>" +
           "<td>"+"<a id ='prolink' href = 'index.php?page=detail&productID= "+p.id+"' >" +p.name+"</a>" +"</td>" +"</tr>" +"<td id='second'>" + "</td>"
           $(tblRow).appendTo("#productdata");
           
           /*var tblRow2 = "<tr  onclick = 'myFunction(this)'>" + "<td  style='display:none'>"+ p.id + "</td>" +
           "<td>"+"<a id ='prolink' href = 'index.php?page=detail&productID= "+p.id+"' >" +p.name+"</a>" +"</td>" +"</tr>" +"<td id='second'>" + "</td>"
           $(tblRow2).appendTo("#productNames");*/
           
           /*var tblRow = "<tr  onclick = 'myFunction(this)'>" + "<td>" + p.id + "</td>" +
           "<td>" + p.name + "</td>" + "<td>" + p.price + "</td>" + "<td>" + p.tags + "</td>" + "<td>" + "lenght :"+ p.dimensions.length + "</td>"
           + "<td>" + "width : "+ p.dimensions.width + "</td>" + "<td>" +"height : "+ p.dimensions.height + "</td>" +"<td>" +"latitude : "+ p.warehouseLocation.latitude + "</td>"+"<td>" +"longitude: "+ p.warehouseLocation.longitude + "</td>"+"</tr>"
           $(tblRow).appendTo("#productNames");*/
           
     });

   });

});
</script>
<div class="container">
    <div class="row" style="background-color: whitesmoke">
        <h2 id="productId">Products</h2>
        <table class="col-xs-12 col-sm-12 col-md-3"  id= "productdata" border="0"></table>
        <p class="col-xs-12 col-sm-12 col-md-3" id="productNames"></p>
    </div>
</div>

<script type="text/javascript">
    function myFunction(x) {
        //Get product id when click on row.
        //x.rowIndex is an index of a selected row
        var id = document.getElementById("productdata").rows[x.rowIndex].cells[0].innerHTML;
        //document.getElementById("productId").innerHTML = id;
        //return id.value();
    }
    
    
 
</script>

<?php
    
?>