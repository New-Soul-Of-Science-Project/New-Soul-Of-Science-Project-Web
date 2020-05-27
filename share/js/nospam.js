function convertMailtoSpans() {
	var e = document.getElementsByTagName('span');
	var spans = [];
	for (var i = 0; i < e.length; i++) {
		if (e[i].className == 'mailto') spans.push(e[i]);
	}
	for (var i = 0; i < spans.length; i++) {
		var span = spans[i];
		var addr = span.innerHTML.replace(/ at /, '@');
		var t = new Array();
		t = span.title.split('#');
		var title = t[0];
		var text = t[1];
		if (t.length > 1) {
			addr = addr + '?' + text;
		}
		var a = document.createElement('a');
		a.href = 'mailto:' + addr;
		if (title !== '') {
			a.appendChild(document.createTextNode(title));
		} else {
			a.appendChild(document.createTextNode(addr));
		}
		span.parentNode.insertBefore(a, span);
		span.parentNode.removeChild(span);
	}
}
if (window.addEventListener) {
	window.addEventListener('load', convertMailtoSpans, false);
}
else if (window.attachEvent) {
	window.attachEvent('onload', convertMailtoSpans);
}