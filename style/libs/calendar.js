var co = null, io = "";
/* 
 * String.prototype.trim = function() { return this.replace(/(^\s*)|(\s*$)/g,
 * "") };
 */
function getEvent() {
	if (document.all)
		return window.event;
	for (func = getEvent.caller; func != null;) {
		var a = func.arguments[0];
		if (a)
			if (a.constructor == Event || a.constructor == MouseEvent
					|| typeof a == "object" && a.preventDefault
					&& a.stopPropagation)
				return a;
		func = func.caller
	}
	return null
}

function getpos(a) {
	var b, c;
	if (a.getBoundingClientRect) {
		a = a.getBoundingClientRect();
		c = Math.max(document.documentElement.scrollTop,
				document.body.scrollTop);
		b = Math.max(document.documentElement.scrollLeft,
				document.body.scrollLeft)
				+ a.left;
		c = c + a.top
	} else {
		b = a.offsetLeft;
		for (c = a.offsetTop; a = a.offsetParent;) {
			b += a.offsetLeft;
			c += a.offsetTop
		}
	}
	return {
		x : b,
		y : c
	}
}

var calendar = function(a) {
	var b = new Date;
	if (a && /^(\d{4})\-(\d{1,2})\-(\d{1,2})$/.test(a) && a.indexOf("-") >= 0) {
		a = trim(a).split("-");
		b = new Date(a[0], a[1] - 1, a[2])
	}
	this.y = b.getFullYear();
	this.m = b.getMonth() + 1;
	this.d = b.getDate()
};

calendar.prototype = {
	draw : function() {
		for ( var a = [], b = "", c = [ "\u65e5", "\u4e00", "\u4e8c", "\u4e09",
				"\u56db", "\u4e94", "\u516d" ], e = [ "Sun", "Mon", "Tue",
				"Wed", "Thur", "Fri", "Sat" ], f = (new Date(this.y,
				this.m - 1, 1)).getDay(), g = (new Date(this.y, this.m, 0))
				.getDate(), d = 1; d <= f; d++)
			a.push(0);
		for (d = 1; d <= g; d++)
			a.push(d);
		d = '<em class=memo-sl id=memo_e1 onclick="co.py();"></em>';
		f = '<em class=memo-sr id=memo_e2 onclick="co.ny();"></em>';
		g = '<em class=memo-sl id=memo_e3 onclick="co.pm();"></em>';
		h = '<em class=memo-sr id=memo_e4 onclick="co.nm();"></em>';
		sel1 = '<select id="_Calendar_YearSelector" onchange="co.onSelectChange(\'Y\')"></select>';
		sel2 = '<select id="_Calendar_MonthSelector" onchange="co.onSelectChange(\'M\')"></select>';

		b += '<table cellspacing="1" width="100%" cellpadding="0" id="calendar">';
		b += '<caption>';
		b += '<span>' + d + "<b><span id=bf_y onclick=co.showSelect(this,'Y')>"
				+ this.y + "年</span>" + sel1 + "</b>" + f + "</span><span>" + g
				+ "<b><span id=bf_m onclick=co.showSelect(this,'M')>" + this.m
				+ "月</span>" + sel2 + "</b>" + h
				+ "</span></caption><thead><tr>";
		if ($("#act").val() == "2")
			for (d = 0; d < 7; d++)
				b += '<td class="memo_tl">' + e[d] + "</td>";
		else
			for (d = 0; d < 7; d++)
				b += '<td class="memo_tl">' + c[d] + "</td>";
		for (b += "</tr></thead><tbody>"; a.length;) {
			b += "<tr>";
			for (d = 1; d <= 7; d++)
				if (a.length)
					if (c = a.shift()) {
						b += '<td onmouseover="memo_calendar_over(this)" onmouseout="memo_calendar_out(this)"';
						b += c == this.d ? ' class="tday" ' : ' class="tdday" ';
						b += 'onclick="co.setdate(this);">' + c + "</td>"
					} else
						b += "<td>&nbsp;</td>";
				else
					b += "<td>&nbsp;</td>";
			b += "</tr>"
		}
		b += "</tbody></table>";
		return b
	},
	crte : function() {
		this.hide();
		var a = document.createElement("div"), b = a.style;
		b.visibility = "hidden";
		b.position = "absolute";
		b.top = "0px";
		b.zIndex = 999;
		a.innerHTML = this.draw();
		a.id = "container";
		document.body.appendChild(a);
		if (document.all) {
			var c = document.createElement("iframe");
			b = c.style;
			c.frameBorder = 0;
			c.height = a.clientHeight - 3 + "px";
			b.visibility = "inherit";
			b.zIndex = -1;
			b.filter = "alpha(opacity=100)";
			b.position = "absolute";
			b.top = "0px";
			b.width = _$("container").offsetWidth;
			a.insertAdjacentElement("afterBegin", c)
		}
	},
	showSelect : function(obj, s, e) {
		var o = (s == 'Y') ? "bf_y" : "bf_m", sel = (s == 'Y') ? '_Calendar_YearSelector'
				: "_Calendar_MonthSelector";
		var a = (s == 'Y') ? this.y : this.m;
		var min = $('#' + io).attr("datestart") ? $('#' + io).attr("datestart") : -100;
		var max = $('#' + io).attr("dateend") ? $('#' + io).attr("dateend") : 100;
		var b = new Date;
		var Y = b.getFullYear();
		d = (s == 'Y') ? [
				parseInt(Y + parseInt(min)),
				parseInt(Y + parseInt(max)) ]
				: [ 1, 12 ];
		k = (s == 'Y') ? "" : "月";
		$('span#' + o).hide();
		$('#' + sel).empty();
		for ( var i = d[0], len = d[1]; i <= len; i++) {
			$('#' + sel).append(
					$("<option value='" + i + "'>" + i + "" + k + "</option>"));
		}
		$('#' + sel).val(a).show();

	},
	onSelectChange : function(s) {
		if (s == 'Y') {
			this.y = $('#_Calendar_YearSelector').val();
		} else {
			this.m = $('#_Calendar_MonthSelector').val();
		}
		this.predraw(new Date(this.y, this.m - 1, 1));
	},
	hide : function() {
		_$("container") && document.body.removeChild(_$("container"))
		if(is_ie=='6'){
			$('select').show();
		}
	},
	py : function() {//上一年
		this.predraw(new Date(this.y - 1, this.m - 1, 1))
	},
	ny : function() {//下一年
		this.predraw(new Date(this.y + 1, this.m - 1, 1))
	},
	pm : function() {//上个月
		this.predraw(new Date(this.y, this.m - 2, 1))
	},
	nm : function() {//下个月
		this.predraw(new Date(this.y, this.m, 1))
	},
	predraw : function(a) {
		this.y = a.getFullYear();
		this.m = a.getMonth() + 1;
		_$("container").innerHTML = this.draw();
		if(is_ie=='6'){
			$('select').hide();
		}
	},
	setdate : function(a) {
		if (_$(io)){
			m=(this.m < 10) ? "0" + this.m : this.m;
			d=a.innerHTML.length == 1 ? "0" + a.innerHTML : a.innerHTML;
		}
			_$(io).value = this.y + "-"
					+ m + "-"
					+ d;
		this.hide();
		//如果有回调
		if($("#"+io).attr("fn")){
			eval($("#"+io).attr("fn"));
		}
	}
};

function bv_calendar(a) {
	var b = getEvent(), c = b.srcElement || b.target, e = a ? _$(a).value
			: c.value;
	io = a ? a : c.id;
	co = a = new calendar(e);
	a.crte();
	e = getpos(c);
	var f = c.offsetWidth, g = c.offsetHeight;
	c = e.x;
	e = e.y + g;
	c = document.all ? c - 2 : c;
	e = document.all ? e - 1 : e + 1
	f = _$("container");
	f.style.top = e + "px";
	f.style.left = c + "px";
	f.style.visibility = "visible";
	
	if (document.all) {
		document.attachEvent("onclick", a.hide);
		f.attachEvent("onclick", function(d) {
			d.cancelBubble = true
		})
	} else {
		document.addEventListener("click", a.hide, false);
		f.addEventListener("click", function(d) {
			d.cancelBubble = true
		}, false)
	}
	b.cancelBubble = true
}

function memo_calendar_over(a) {
	if (a.className != "tday")
		a.className = "over"
}

function memo_calendar_out(a) {
	if (a.className != "tday")
		a.className = "tdday"
};
