$(document).ready(function(){
    $.getJSON("getregions.php", success = function(data)
          //Get all regions name and display to dropdown  
        {
            var options = "";
            for (var i = 0;i<data.length; i++) {
                //code
                options+="<option value='" + data[i].toLowerCase() + "'>" + data[i] + "</option>";
            }
            $("#slcRegion").append(options);
            $("slcRegion").change();
        });
        $("#slcDistrict").change(function()
            {    //Get all regions name and display to dropdown
                $name = "CHRISTCHURCH";
                $.getJSON("getdistricts.php?region="+$name, success = function(data)
                {
                    var options = "";
                    for (var i = 0;i<data.length; i++) {
                        options+="<option value='" + data[i].toLowerCase() + "'>" + data[i] + "</option>";
                    }
                    $("#slcDistrict").html("");
                    $("#slcDistrict").append(options);
                    
                });    
            });
});