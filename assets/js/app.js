$(document).ready(function(){
	$("#status").change(function(event) {
		$(this).find("option:selected").each(function(){
			$(".panel-q").hide();
			var optionvalue = $(this).attr("value");
				if(optionvalue){
					$(".panel-q").not("."+optionvalue).hide();
					$("."+optionvalue).show();
				}else{
					$(".panel-q");
				}
		});
	}).change();

	 $.ajax({
        url: "../api",
        dataType: "JSON",
        type: "POST",
        data: {get_values: true},
        success: function(data){
            var donut = new Morris.Donut({
                element: 'morris-donut-chart',
                resize: true,
                data: [{
                        label: 'Sudah Bekerja',
                        value: data[0].total_kerja
                    },
                    {
                        label: 'Belum Bekerja',
                        value: data[0].belum_kerja
                    },
                    {
                        label: 'Membuka Usaha',
                        value: data[0].buka_usaha
                    }]
            });
        }
    });
});