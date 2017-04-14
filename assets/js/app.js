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

	$.ajax({
        url: "../api/index",
        dataType: "JSON",
        type: "POST",
        data: {get_values: true},
        success: function(data){
            Morris.Bar({
                element: 'morris-bar-chart',
                data: [{
                    y: 'Integritas',
                    a: data[0].hasil_mp1a,
                    b: data[0].hasil_mp1b,
                    c: data[0].hasil_mp1c,
                    d: data[0].hasil_mp1d
                },{
                    y: 'Profesionalisme',
                    a: data[0].hasil_mp2a,
                    b: data[0].hasil_mp2b,
                    c: data[0].hasil_mp2c,
                    d: data[0].hasil_mp2d
                },{
                    y: 'BHS. Inggris',
                    a: data[0].hasil_mp3a,
                    b: data[0].hasil_mp3b,
                    c: data[0].hasil_mp3c,
                    d: data[0].hasil_mp3d
                },{
                    y: 'TIK',
                    a: data[0].hasil_mp4a,
                    b: data[0].hasil_mp4b,
                    c: data[0].hasil_mp4c,
                    d: data[0].hasil_mp4d
                },{
                    y: 'Komunikasi',
                    a: data[0].hasil_mp5a,
                    b: data[0].hasil_mp5b,
                    c: data[0].hasil_mp5c,
                    d: data[0].hasil_mp5d
                },{
                    y: 'Kerjasama',
                    a: data[0].hasil_mp6a,
                    b: data[0].hasil_mp6b,
                    c: data[0].hasil_mp6c,
                    d: data[0].hasil_mp6d
                },{
                    y: 'Pengembangan',
                    a: data[0].hasil_mp7a,
                    b: data[0].hasil_mp7b,
                    c: data[0].hasil_mp7c,
                    d: data[0].hasil_mp7d
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
            var donut = new Morris.Donut({
                element: 'donut-integritas',
                resize: true,
                data: [{
                        label: 'Sangat Baik',
                        value: data[0].hasil_mp1a
                    },
                    {
                        label: 'Baik',
                        value: data[0].hasil_mp1b
                    },
                    {
                        label: 'Cukup',
                        value: data[0].hasil_mp1c
                    },
                    {
                        label: 'Kurang',
                        value: data[0].hasil_mp1d
                    }],
                colors: ['#e74c3c', '#f1c40f', '#2ecc71', '#3498db'],
                formatter: function(data) {return data+"%"}
            });
        }
    });

    $.ajax({
        url: "../api/index",
        dataType: "JSON",
        type: "POST",
        data: {get_values: true},
        success: function(data){
            var donut = new Morris.Donut({
                element: 'donut-profesionalisme',
                resize: true,
                data: [{
                        label: 'Sangat Baik',
                        value: data[0].hasil_mp2a
                    },
                    {
                        label: 'Baik',
                        value: data[0].hasil_mp2b
                    },
                    {
                        label: 'Cukup',
                        value: data[0].hasil_mp2c
                    },
                    {
                        label: 'Kurang',
                        value: data[0].hasil_mp2d
                    }],
                colors: ['#e74c3c', '#f1c40f', '#2ecc71', '#3498db'],
                formatter: function(data) {return data+"%"}
            });
        }
    });

    // Morris.Bar({
    //     element: 'morris-bar-chart',
    //     data: [{
    //         y: 'Integritas',
    //         a: 100,
    //         b: 90,
    //         c: 75,
    //         d: 60
    //     }],
    //     xkey: 'y',
    //     ykeys: ['a', 'b', 'c', 'd'],
    //     labels: ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'],
    //     hideHover: 'auto',
    //     resize: true,
    //     barColors: ['#e74c3c', '#f1c40f', '#2ecc71', '#3498db']
    // });

});