
<?php
    $id = $_GET['productID'];
?>
<style>
    #row{
        
    }
    
</style>
<div class="container" style="background-color: whitesmoke">
    <div class="row">
        <h3>Product's detail</h3>
        <div class="col-xs-12 col-sm-12 col-md-6" style="background-color: whitesmoke">
            <table id= "productdImage" border="0"></table>
        </div>
        <p class="col-xs-12 col-sm-12 col-md-6" id="productName"></p>
        <p class="col-xs-12 col-sm-12 col-md-6" id="productPrice"></p>
        <p class="col-xs-12 col-sm-12 col-md-6" id="productTag"></p>
        <p class="col-xs-12 col-sm-12 col-md-6" id="productLength"></p>
        <p class="col-xs-12 col-sm-12 col-md-6" id="productWidth"></p>
        <p class="col-xs-12 col-sm-12 col-md-6" id="productHeight"></p>
        <p class="col-xs-12 col-sm-12 col-md-6" id="productLatitude"></p>
        <p class="col-xs-12 col-sm-12 col-md-6" id="productLongitude"></p>
        <p class="col-xs-12 col-sm-12 col-md-6" id="productDesc"></p>
        
        <div class="col-xs-12 col-sm-12 col-md-12 ">
            <table id= "productdata" border="1"></table>
        </div>
        
        
        <script type="text/javascript">
   
            $(function() {
        
                $.getJSON('detail.json', function(data) {
                    $.each(data.product, function(i, p) {
                        var id = p.id;
                       
                        if (id == <?php echo $_GET['productID'];?>) {
                            var name = "Name : ";
                            var price = "Price : ";
                            var tag = "Tag : ";
                            var length = "Length : ";
                            var width = "Width : ";
                            var height = "Height : ";
                            var latitude = "Latitude : ";
                            var longitude = "Longitude : ";
                            var desc = "Description : ";
                            
                            var tblRow1 = "<tr>"+"<td>"+'<img height="250" width="350" src="images/'+p.description.image+'">'+"</td>"+"</tr>"
                            $(tblRow1).appendTo("#productdImage");
                            
                            var tblRow2 = "<tr id='row'>"+ "<td>"+name+p.name+"</td>"+ "</tr>"
                            $(tblRow2).appendTo("#productName");
                            
                            var tblRow3 = "<tr id='row'>"+ "<td>"+price+p.price+"</td>"+ "</tr>"
                            $(tblRow3).appendTo("#productPrice");
                            
                            var tblRow4 = "<tr id='row'>"+ "<td>"+tag+p.tags+"</td>"+ "</tr>"
                            $(tblRow4).appendTo("#productTag");
                            
                            var tblRow5 = "<tr id='row'>"+ "<td>"+length+p.dimensions.length+"</td>"+ "</tr>"
                            $(tblRow5).appendTo("#productLenght");
                            
                            var tblRow6 = "<tr>"+ "<td>"+width+p.dimensions.width+"</td>"+ "</tr>"
                            $(tblRow6).appendTo("#productWidth");
                            
                            var tblRow7 = "<tr>"+ "<td>"+height+p.dimensions.height+"</td>"+ "</tr>"
                            $(tblRow7).appendTo("#productHeight");
                            
                            var tblRow8 = "<tr>"+ "<td>"+latitude+p.warehouseLocation.latitude+"</td>"+ "</tr>"
                            $(tblRow8).appendTo("#productLatitude");
                            
                            var tblRow9 = "<tr>"+ "<td>"+longitude+p.warehouseLocation.longitude+"</td>"+ "</tr>"
                            $(tblRow9).appendTo("#productLongitude");
                            
                            var tblRow10 = "<tr>"+ "<td>"+desc+p.description.detail+"</td>"+ "</tr>"
                            $(tblRow10).appendTo("#productDesc");
                            
                            /*var tblRow = 
                            "<tr>" + "<td  style='display:none'>"+ p.id + "</td>" +
                            "<td>" +p.name+"</td>" +"<td>" +p.price+"</td>"+"<td>" +p.tags+"</td>"+"<td>" +p.dimensions.length+"</td>"+"<td>" +p.dimensions.width+"</td>"+
                            "<td>" +p.dimensions.height+"</td>"+
                            "<td>" +p.warehouseLocation.latitude+"</td>"+"<td>" +p.warehouseLocation.longitude+"</td>"
                            +"<td>" +p.description.detail+"</td>"
                            //+"<td>" +'<img height="250" width="300" src="images/'+p.description.image+'">'+"</td>"
                            +"</tr>"
                            $(tblRow).appendTo("#productdata"); */
                        }
                        
                    });
             
                });
        
            });
</script>
    </div>
</div>