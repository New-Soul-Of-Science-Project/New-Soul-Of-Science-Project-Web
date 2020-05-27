/**
* Navigation (for Styleswitch)
*/
var cStyle;

$(document).ready(function() {

	// XML-File with descriptions
	//$(".content").get("data.xml", {test: true}, function() { alert("load is done"); } );

/*
	$.get("data.xml",function(xml){
	  var text = $("description",xml).text();
	  $(".content").append("<h1>"+text+"</h1>");
	});
	

	var entries = $("item",xml.responseXML).each(
	   function() {
	      var title = $(this).find("title").text();
	      alert("Title: " + title);
	   }
*/

/*
    var s="";
	var entries = $("item",xml.responseXML).each(
					function() {
						var title = $(this).find("title").text();
						var description = $(this).find("description").text();
						var html = $C("<li><a href="#" rel="grid' + formatNumber(i) + '" class="styleswitch"><img src="images/layout0' + formatNumber(i) + '.gif" alt="layout' + formatNumber(i) + '" /></a></li>)
						//var html = $C("<div><b></b><br><blockquote></blockquote><hr></div>")
							.html({
									'':
							
									"b": "<a href='"+link+"'></a>",
									"a": title,
									"blockquote": description
						});
						s+="";
						
				});
*/

/*
	$('.stylechooser').each( function() {
		
		for (i=1;i<=40;i++) {
			$(this).html( $(this).html() + '<li><a href="#" rel="grid' + formatNumber(i) + '" class="styleswitch"><img src="images/layout0' + formatNumber(i) + '.gif" alt="layout' + formatNumber(i) + '" /></a></li>' );
		}
	});
*/	

	// StyleChooser
	$('.content').append( '<ul class="stylechooser"></ul>');

	$(".stylechooser").load("data.xml");
	

	$('.styleswitch').click(function()
	{
		switchStylestyle(this.getAttribute("rel"));
		return false;
	});
	var c = readCookie('style');
	if (c) {
		switchStylestyle(c);
		cStyle = c;
	} else {
		c = 'grid01';
		switchStylestyle(c);
		cStyle = c;
	}
	
	// Aktueller Style
	$('.stylechooser').before('<div class="currentGrid"></div>');
	$('.currentGrid').append('<p>Aktueller Style = ' + cStyle + '</p>');	
	
	// Download
	$('.currentGrid').before('<p class="download-button"><a href="downloads/' + cStyle + '.zip"><span class="download-green-button"><span class="download-button-text">Download now!</span></span></a></p>');	
	
	$('.styleswitch').click(function() {
		$(".currentGrid p").remove();
		$('.currentGrid').append('<p>Aktueller Style = ' + cStyle + '</p>');
		$(".download-button").remove();
		$('.currentGrid').before('<p class="download-button"><a href="downloads/' + cStyle + '.zip"><span class="download-green-button"><span class="download-button-text">Download now!</span></span></a></p>');	
	});
	
	// Text-Filler
	AddFillerLink("content","navigation","extra");	
	
});

/* Helper */
function formatNumber (n) {
	if (n < 10) {
		n = '0' + n;
	} 
	return n;
}

/**
* Styleswitch stylesheet switcher built on jQuery
* Under an Attribution, Share Alike License
* By Kelvin Luck ( http://www.kelvinluck.com/ )
**/



function switchStylestyle(styleName)
{
	$('link[@rel*=style][@title]').each(function(i) 
	{
		this.disabled = true;
		if (this.getAttribute('title') == styleName) {
			this.disabled = false;
			cStyle = styleName;
		}
	});
	createCookie('style', styleName, 365);
}

// cookie functions http://www.quirksmode.org/js/cookies.html
function createCookie(name,value,days)
{
	if (days)
	{
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}
function readCookie(name)
{
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}
function eraseCookie(name)
{
	createCookie(name,"",-1);
}
// /cookie functions