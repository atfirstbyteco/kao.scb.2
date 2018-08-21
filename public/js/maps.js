var max_i = 0;
var canvas = $('#maps')[0];
$(document).ready(function(){
	loadimg(0);
});

function loadimg(i)
{
	if(i > diffDays){ 
		i=i-2; 
		setTimeout(function(){ 
			
			loadimg_down(i); 
			}, 200);
		return; 
	}
	//console.log('loadimg',i);
	var img = new Image();
	img.onload = function()
	{
		$('.stage-map img').hide();
		canvas.width = this.naturalWidth;
		canvas.height = this.naturalHeight;
		var context = canvas.getContext('2d');
		//context.clear(true);
		context.clearRect(0, 0, canvas.width, canvas.height);
        context.drawImage(this, 0, 0);
		//$('.stage-map img').attr('src',this.src);
		i++;
		setTimeout(function(){ loadimg(i); }, 200);
		
	}
	img.src = cdn_url + '/images/maps/map'+i+'.png';
}
function loadimg_down(i)
{
	//console.log('loadimg_down',i);
	var img = new Image();
	img.onload = function()
	{
		$('.stage-map img').hide();
		
        var context = canvas.getContext('2d');
		canvas.width = this.naturalWidth;
		canvas.height = this.naturalHeight;
		context.clearRect(0, 0, canvas.width, canvas.height);
		//context.clear(true);
        context.drawImage(this, 0, 0);
		//$('.stage-map img').attr('src',this.src);
		i++;
		setTimeout(function(){ loadimg(i); }, 200);
		
	}
	img.src = cdn_url + '/images/maps/map'+i+'.png';
}