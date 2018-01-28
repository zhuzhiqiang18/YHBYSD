var xmlhttp;
	function myRequest(method, address, params, fn) {
			if(window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			if(method == "get" || method == "GET") {
				address = address + "?" + params;
			}

			xmlhttp.open(method, address, true);

			if(method == "GET" || method == "get") {
				xmlhttp.send();
			} else {
				xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlhttp.send(params);
			}

			xmlhttp.onreadystatechange = function() {
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					fn(xmlhttp.responseText);
				}
			}

		};