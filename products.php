
<style>
    tr:hover{
        color: red;
        height: 20px;
    }
    table,th{
        border: 0px solid black;
        border-collapse: collapse;
        color: white;
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
     #productNames{
        color: black;
    }
    
</style>

<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
<script type="text/javascript">
   
    $(function() {

   $.getJSON('products.json', function(data) {
       $.each(data.product, function(i, p) {
          /*var tblRow = "<tr  onclick = 'myFunction(this)'>" + "<td  style='display:none'>"+ p.id + "</td>" +
           "<td>"+"<a id ='prolink' href = 'index.php?page=detail&productID= "+p.id+"' >" +p.name+"</a>" +"</td>" +"</tr>" +"<td id='second'>" + "</td>"
           $(tblRow).appendTo("#productdata").DataTable();*/
           
         var tblRow = "<tr>" + "<td>"  + p.id + "</td>" +
           "<td>" +"<a id ='prolink' href = 'index.php?page=detail&productID= "+p.id+"' >" +p.name+"</a>"+ "</td>" + "<td>" + p.price + "</td>" + "<td>" + p.tags + "</td>" + "<td>" + "lenght :"+ p.dimensions.length + "</td>"
            +"<td >" +"latitude : "+ p.warehouseLocation.latitude + "</td>"+"</tr>"
           $(tblRow).appendTo("#productNames"); 
     });
       $(document).ready(function(){
            $('#productNames').DataTable();
            });
        });
   });

</script>
<div class="container">
    <div class="row" style="background-color: whitesmoke">
        <h2 id="productId">Products</h2>
        <table  id="productNames" border = "0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Tag</th>
                    <th>Dimensions</th>
                    <th>Location</th>
                </tr>
            </thead>
           
        </table>
            
        <!--<table class="col-xs-12 col-sm-12 col-md-3"  id= "productdata" border="0"></table>-->
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
