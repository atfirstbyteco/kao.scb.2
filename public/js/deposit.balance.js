var deposit_t;
var deposit_balance_display = 0;
var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
var last = 0;
(function ($) {
	try{
	$("#blance_total #bl").html('<b class="show_balance">'+deposit_balance_x+'</b>');
    var socket = io(api_url);

    socket.on('connect', function () {
        var index = socket.io.engine.upgrade ? 1 : 0;
    });

    socket.on('update-webstatus', function (data) {
	    get_data_status_io(data);
	});
	socket.on('element-text', function (data) {
	    $(data[0]).text(data[1]);
	});
	socket.on('element-html', function (data) {
	    $(data[0]).html(data[1]);
	});
	socket.on('update-deposit', function (data) {
        if(last==0){
	        $('#blance_total #bl .show_balance').html(addCommas(parseFloat(data).toFixed(2)));
        }else{
	       $('#blance_total #bl .show_balance').each(function () {
			    $(this).prop('Counter',last).animate({
			        Counter: parseFloat(data)
			    }, {
			        duration: 2000,
			        easing: 'swing',
			        step: function (now) {
			            $(this).text(addCommas(now.toFixed(2)));
			        }
			    });
			});
        }

		last=parseFloat(data);
    });
    }catch(e){
	    get_deposit_balance();
    }
}(jQuery));
function addCommas(nStr)
{
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

function get_deposit_balance(){
	$.getJSON(api_url+"getbalance",function(res){
		if(res.status=="success"){
            var b = parseFloat(res.balance).toFixed(2);
				deposit_balance =b;
				if(deposit_balance_display < 1){
					deposit_balance_display = (b);
					if(deposit_balance_display < 0){
						deposit_balance_display = 0;

					}
					set_init_deposit_balance_display();
					console.log('Update balance to',deposit_balance_display);
				}
				console.info('Current Balance is',b);

			let fl2 = (Math.floor(Math.random() * 15)+5);
			let tm2 = 2000*fl2;
			console.log("Next schedule Getbalance in",(tm2/1000),'secconds');
			deposit_t = setTimeout(get_deposit_balance, tm2);
		}
	}).fail(function(e){
        deposit_balance_display = parseFloat(deposit_balance).toFixed(2);
        set_init_deposit_balance_display();
        let fl2 = (Math.floor(Math.random() * 15)+5);
			let tm2 = 2000*fl2;
            deposit_t = setTimeout(get_deposit_balance, tm2);
		//console.warning('API Error :',e);
	});
}
function set_init_deposit_balance_display()
{
/*
	let last_deposit_balance_display = parseFloat($.cookie('last_deposit_balance_display'));
	if(last_deposit_balance_display && last_deposit_balance_display < deposit_balance){
		deposit_balance_display = last_deposit_balance_display;
	}
	$.cookie('last_deposit_balance_display', deposit_balance_display.toFixed(2));
*/
	var tt = deposit_balance_display.toString().split('.');
	//$("#blance_total #bl .show_balance").html(''+tt[0]);
	//$("#blance_total #bl .show_balance_decimal").html(tt[1]);

    $('#blance_total #bl .show_balance').each(function () {
        $(this).prop('Counter',last).animate({
            Counter: parseFloat(deposit_balance_display)
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(addCommas(now.toFixed(2)));
            }
        });
    });
    //deposit_t = setTimeout(update_deposit_balance_display, 4000);
    last = deposit_balance_display;
}
function update_deposit_balance_display()
{
	if(deposit_balance_display == 0){
		return;
	}
	let fl = (Math.floor(Math.random() * 20));
	let ft = (Math.floor(Math.random() * 5));
	let update_bl = parseFloat(10*fl);
	deposit_balance_display =  parseFloat(deposit_balance_display+update_bl);
	if(deposit_balance_display > deposit_balance){
		deposit_balance_display = deposit_balance;
	}

	$('#blance_total #bl .show_balance').each(function () {
        $(this).prop('Counter',last).animate({
            Counter: parseFloat(deposit_balance_display)
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(addCommas(now.toFixed(2)));
            }
        });
    });
    last = deposit_balance_display;

	deposit_t = setTimeout(update_deposit_balance_display, 3000*ft);
}

