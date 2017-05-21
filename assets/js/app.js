$(document).ready(function(){

	$("#bidang").change(function(event) {
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

    /**
        Author: Bayu Bimantara
        Function: Diagram Manajemen & Profesionalisme
        ========================================================================
    **/
	$.ajax({
        url: "../api/index",
        dataType: "JSON",
        type: "POST",
        data: {get_values: true},
        success: function(data){
            Morris.Bar({
                element: 'bar-diagram-mp',
                data: [{
                    y: 'Integritas',
                    a: data[0].mp1_a,
                    b: data[0].mp1_b,
                    c: data[0].mp1_c,
                    d: data[0].mp1_d
                },{
                    y: 'Profesionalisme',
                    a: data[0].mp2_a,
                    b: data[0].mp2_b,
                    c: data[0].mp2_c,
                    d: data[0].mp2_d
                },{
                    y: 'BHS. Inggris',
                    a: data[0].mp3_a,
                    b: data[0].mp3_b,
                    c: data[0].mp3_c,
                    d: data[0].mp3_d
                },{
                    y: 'TIK',
                    a: data[0].mp4_a,
                    b: data[0].mp4_b,
                    c: data[0].mp4_c,
                    d: data[0].mp4_d
                },{
                    y: 'Komunikasi',
                    a: data[0].mp5_a,
                    b: data[0].mp5_b,
                    c: data[0].mp5_c,
                    d: data[0].mp5_d
                },{
                    y: 'Kerjasama',
                    a: data[0].mp6_a,
                    b: data[0].mp6_b,
                    c: data[0].mp6_c,
                    d: data[0].mp6_d
                },{
                    y: 'Pengembangan',
                    a: data[0].mp7_a,
                    b: data[0].mp7_b,
                    c: data[0].mp7_c,
                    d: data[0].mp7_d
                }],
                xkey: 'y',
                ykeys: ['a', 'b', 'c', 'd'],
                labels: ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'],
                hideHover: 'auto',
                resize: true,
                barColors: ['#e74c3c', '#f1c40f', '#2ecc71', '#3498db']
            });
        }
    });

    $.ajax({
        url: "../api/index",
        dataType: "JSON",
        type: "POST",
        data: {get_values: true},
        success: function(data){
            Morris.Bar({
                element: 'bar-diagram-it',
                data: [{
                    y: 'Menguasai IT',
                    a: data[0].hasil_ti1a,
                    b: data[0].hasil_ti1b,
                    c: data[0].hasil_ti1c,
                    d: data[0].hasil_ti1d
                },{
                    y: 'Menguasai Tools',
                    a: data[0].hasil_ti2a,
                    b: data[0].hasil_ti2b,
                    c: data[0].hasil_ti2c,
                    d: data[0].hasil_ti2d
                },{
                    y: 'Menguasai DB',
                    a: data[0].hasil_ti3a,
                    b: data[0].hasil_ti3b,
                    c: data[0].hasil_ti3c,
                    d: data[0].hasil_ti3d
                },{
                    y: 'Merancang DB',
                    a: data[0].hasil_ti4a,
                    b: data[0].hasil_ti4b,
                    c: data[0].hasil_ti4c,
                    d: data[0].hasil_ti4d
                },{
                    y: 'Menguasai RPL',
                    a: data[0].hasil_ti5a,
                    b: data[0].hasil_ti5b,
                    c: data[0].hasil_ti5c,
                    d: data[0].hasil_ti5d
                },{
                    y: 'Menguasai OS',
                    a: data[0].hasil_ti6a,
                    b: data[0].hasil_ti6b,
                    c: data[0].hasil_ti6c,
                    d: data[0].hasil_ti6d
                },{
                    y: 'Menguasai TKJ',
                    a: data[0].hasil_ti7a,
                    b: data[0].hasil_ti7b,
                    c: data[0].hasil_ti7c,
                    d: data[0].hasil_ti7d
                }],
                xkey: 'y',
                ykeys: ['a', 'b', 'c', 'd'],
                labels: ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'],
                hideHover: 'auto',
                resize: true,
                barColors: ['#e74c3c', '#f1c40f', '#2ecc71', '#3498db']
            });
        }
    });


});