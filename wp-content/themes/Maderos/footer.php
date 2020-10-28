

<footer>
	<div class="footer__grid ">
		<div class="footer__grid--tem ">
			<div class="footer__grid--img">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="Logo Maderos">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/logo-nivel.png" alt="Logo Nivel">		
			</div>

			<p>El espacio que siempre has querido en un municipio tranquzilo, campestre y cerca a todo lo que necesitas. 
			</p>
			<ul>
				<li><a target="_blank" href="https://www.facebook.com/nivelpropiedadraiz"><img src="<?php echo get_template_directory_uri();?>/assets/img/fb.png" alt=""></a></li>
				<li><a target="_blank" href="https://www.instagram.com/nivelpropiedadraiz/"><img src="<?php echo get_template_directory_uri();?>/assets/img/instagram.png" alt=""></a></li>

			</ul>
		</div>

		<div class="footer__grid--tem">
			<h3 class="mb-3">Menú</h3>
			<ul>
				<li><a href="#detalle-proyecto">Detalle de proyecto</a></li>
				<li><a href="#acerca">Acerca del proyecto</a></li>
				<li><a href="#video">Video</a></li>
				<li><a href="#zonas-proyecto">Zonas comunes</a></li>
				<li><a href="#planos-proyecto">Planos del proyecto</a></li>
				<li><a href="#galeria">Galería</a></li>
				<li><a href="#avances-obra">Avances de la obra</a></li>
				<li><a href="#ubicacion">Ubicación</a></li>
				<li><a href="#formulario">Contacto</a></li>
				<!-- <li><a href="#formulario">Formulario</a></li> -->
				
			</ul>
		</div>
		<div class="footer__grid--tem">


			<h3 class="mb-3">Contáctanos
			</h3>
			<ul>
				<div>
					<h3>Teléfono</h3>
					<li>
						<a href="tel:5411332">
						+ 541 13 32</a>
					</li>
				</div>
				<div><h3>Celular</h3>
					<li>
						<a href="tel:3165050087">
							
						+ 316 505 00 87</a>
					</li>
				</div>
				<div>
					<h3>Email</h3>
					<li>
						<a href="mailto:maderos@nivel.com.co">maderos@nivel.com.co</a>
					</li>
				</div>
				<div>
					<li><a class="footer__grid--tem_btn" target="_blank" href="<?php echo get_template_directory_uri();?>/assets/img/1751 MADEROS APTOS - adaptación presentacion_baja.pdf">descargar brochure</a></li>
				</div>
			</ul>
		</div>
	</div>
	<div class="copy">
		<div class="main-end__text">
			<p class="end-text">
				 <a target="_blank" href="https://sigma.la/">Copyright © 2020 Sigma Studios</a>
			</p>
		</div>
	</div>
</footer>



<div class="btns">
	<a href="http://api.whatsapp.com/send?phone=573165050087" download target="blank" ><img src="<?php echo get_template_directory_uri();?>/assets/img/2.png" alt=""></a>
	<a href="#banner"><img src="<?php echo get_template_directory_uri();?>/assets/img/1.png" alt=""></a>

</div>



<!-- Modal -->
<div aria-hidden='true' class='modal fade modal-video' id='galleryModal' role='dialog' tabindex='-1'>
	<div class='modal-dialog' role='document'>
		<div class='modal-content'>
			<div class='modal-body'>
				<button aria-label='Close' class='close' data-dismiss='modal' type='button'>
					<span aria-hidden='true' class='fa fa-close'></span>
				</button>
				<video controls=''>
					<source src='<?php echo get_template_directory_uri();?>/assets/img/maderos-del-retiro-constructora-nivel.mp4' type='video/webm'>
					</video>
				</div>
			</div>
		</div>
	</div>


	<?php wp_reset_postdata(); ?>







	<script type="text/javascript">
		window.cfields = {"1":"ciudad","2":"mensaje","4":"acepto_polticas_de_privacidad","10":"utmsource","11":"utmmedium","12":"utmcampaign","13":"utmterm"};
		window._show_thank_you = function(id, message, trackcmp_url) {
			var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
			form.querySelector('._form-content').style.display = 'none';
			thank_you.innerHTML = message;
			thank_you.style.display = 'block';
			if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
    // Site tracking URL to use after inline form submission.
    _load_script(trackcmp_url);
}
if (typeof window._form_callback !== 'undefined') window._form_callback(id);
};
window._show_error = function(id, message, html) {
	var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
	if (old_error) old_error.parentNode.removeChild(old_error);
	err.innerHTML = message;
	err.className = '_error-inner _form_error _no_arrow';
	var wrapper = document.createElement('div');
	wrapper.className = '_form-inner';
	wrapper.appendChild(err);
	button.parentNode.insertBefore(wrapper, button);
	document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
	if (html) {
		var div = document.createElement('div');
		div.className = '_error-html';
		div.innerHTML = html;
		err.appendChild(div);
	}
};
window._load_script = function(url, callback) {
	var head = document.querySelector('head'), script = document.createElement('script'), r = false;
	script.type = 'text/javascript';
	script.charset = 'utf-8';
	script.src = url;
	if (callback) {
		script.onload = script.onreadystatechange = function() {
			if (!r && (!this.readyState || this.readyState == 'complete')) {
				r = true;
				callback();
			}
		};
	}
	head.appendChild(script);
};
(function() {
	if (window.location.search.search("excludeform") !== -1) return false;
	var getCookie = function(name) {
		var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
		return match ? match[2] : null;
	}
	var setCookie = function(name, value) {
		var now = new Date();
		var time = now.getTime();
		var expireTime = time + 1000 * 60 * 60 * 24 * 365;
		now.setTime(expireTime);
		document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
	}
	var addEvent = function(element, event, func) {
		if (element.addEventListener) {
			element.addEventListener(event, func);
		} else {
			var oldFunc = element['on' + event];
			element['on' + event] = function() {
				oldFunc.apply(this, arguments);
				func.apply(this, arguments);
			};
		}
	}
	var _removed = false;
	var form_to_submit = document.getElementById('_form_7_');
	var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

	var getUrlParam = function(name) {
		var regexStr = '[\?&]' + name + '=([^&#]*)';
		var results = new RegExp(regexStr, 'i').exec(window.location.href);
		return results != undefined ? decodeURIComponent(results[1]) : false;
	};

	for (var i = 0; i < allInputs.length; i++) {
		var regexStr = "field\\[(\\d+)\\]";
		var results = new RegExp(regexStr).exec(allInputs[i].name);
		if (results != undefined) {
			allInputs[i].dataset.name = window.cfields[results[1]];
		} else {
			allInputs[i].dataset.name = allInputs[i].name;
		}
		var fieldVal = getUrlParam(allInputs[i].dataset.name);

		if (fieldVal) {
			if (allInputs[i].dataset.autofill === "false") {
				continue;
			}
			if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
				if (allInputs[i].value == fieldVal) {
					allInputs[i].checked = true;
				}
			} else {
				allInputs[i].value = fieldVal;
			}
		}
	}

	var remove_tooltips = function() {
		for (var i = 0; i < tooltips.length; i++) {
			tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
		}
		tooltips = [];
	};
	var remove_tooltip = function(elem) {
		for (var i = 0; i < tooltips.length; i++) {
			if (tooltips[i].elem === elem) {
				tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
				tooltips.splice(i, 1);
				return;
			}
		}
	};
	var create_tooltip = function(elem, text) {
		var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
		if (elem.type != 'radio' && elem.type != 'checkbox') {
			tooltip.className = '_error';
			arrow.className = '_error-arrow';
			inner.className = '_error-inner';
			inner.innerHTML = text;
			tooltip.appendChild(arrow);
			tooltip.appendChild(inner);
			elem.parentNode.appendChild(tooltip);
		} else {
			tooltip.className = '_error-inner _no_arrow';
			tooltip.innerHTML = text;
			elem.parentNode.insertBefore(tooltip, elem);
			new_tooltip.no_arrow = true;
		}
		new_tooltip.tip = tooltip;
		new_tooltip.elem = elem;
		tooltips.push(new_tooltip);
		return new_tooltip;
	};
	var resize_tooltip = function(tooltip) {
		var rect = tooltip.elem.getBoundingClientRect();
		var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
		if (scrollPosition < 40) {
			tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
		} else {
			tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
		}
	};
	var resize_tooltips = function() {
		if (_removed) return;
		for (var i = 0; i < tooltips.length; i++) {
			if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
		}
	};
	var validate_field = function(elem, remove) {
		var tooltip = null, value = elem.value, no_error = true;
		remove ? remove_tooltip(elem) : false;
		if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
		if (elem.getAttribute('required') !== null) {
			if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
				var elems = form_to_submit.elements[elem.name];
				if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
					no_error = elem.checked;
				}
				else {
					no_error = false;
					for (var i = 0; i < elems.length; i++) {
						if (elems[i].checked) no_error = true;
					}
				}
				if (!no_error) {
					tooltip = create_tooltip(elem, "Seleccione una opción.");
				}
			} else if (elem.type =='checkbox') {
				var elems = form_to_submit.elements[elem.name], found = false, err = [];
				no_error = true;
				for (var i = 0; i < elems.length; i++) {
					if (elems[i].getAttribute('required') === null) continue;
					if (!found && elems[i] !== elem) return true;
					found = true;
					elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
					if (!elems[i].checked) {
						no_error = false;
						elems[i].className = elems[i].className + ' _has_error';
						err.push("Es necesario verificar %s".replace("%s", elems[i].value));
					}
				}
				if (!no_error) {
					tooltip = create_tooltip(elem, err.join('<br/>'));
				}
			} else if (elem.tagName == 'SELECT') {
				var selected = true;
				if (elem.multiple) {
					selected = false;
					for (var i = 0; i < elem.options.length; i++) {
						if (elem.options[i].selected) {
							selected = true;
							break;
						}
					}
				} else {
					for (var i = 0; i < elem.options.length; i++) {
						if (elem.options[i].selected && !elem.options[i].value) {
							selected = false;
						}
					}
				}
				if (!selected) {
					elem.className = elem.className + ' _has_error';
					no_error = false;
					tooltip = create_tooltip(elem, "Seleccione una opción.");
				}
			} else if (value === undefined || value === null || value === '') {
				elem.className = elem.className + ' _has_error';
				no_error = false;
				tooltip = create_tooltip(elem, "Este campo es obligatorio.");
			}
		}
		if (no_error && elem.name == 'email') {
			if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
				elem.className = elem.className + ' _has_error';
				no_error = false;
				tooltip = create_tooltip(elem, "Introduzca una dirección de correo electrónico válida.");
			}
		}
		if (no_error && /date_field/.test(elem.className)) {
			if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
				elem.className = elem.className + ' _has_error';
				no_error = false;
				tooltip = create_tooltip(elem, "Introduzca una fecha válida.");
			}
		}
		tooltip ? resize_tooltip(tooltip) : false;
		return no_error;
	};
	var needs_validate = function(el) {
		return el.name == 'email' || el.getAttribute('required') !== null;
	};
	var validate_form = function(e) {
		var err = form_to_submit.querySelector('._form_error'), no_error = true;
		if (!submitted) {
			submitted = true;
			for (var i = 0, len = allInputs.length; i < len; i++) {
				var input = allInputs[i];
				if (needs_validate(input)) {
					if (input.type == 'text') {
						addEvent(input, 'blur', function() {
							this.value = this.value.trim();
							validate_field(this, true);
						});
						addEvent(input, 'input', function() {
							validate_field(this, true);
						});
					} else if (input.type == 'radio' || input.type == 'checkbox') {
						(function(el) {
							var radios = form_to_submit.elements[el.name];
							for (var i = 0; i < radios.length; i++) {
								addEvent(radios[i], 'click', function() {
									validate_field(el, true);
								});
							}
						})(input);
					} else if (input.tagName == 'SELECT') {
						addEvent(input, 'change', function() {
							validate_field(this, true);
						});
					} else if (input.type == 'textarea'){
						addEvent(input, 'input', function() {
							validate_field(this, true);
						});
					}
				}
			}
		}
		remove_tooltips();
		for (var i = 0, len = allInputs.length; i < len; i++) {
			var elem = allInputs[i];
			if (needs_validate(elem)) {
				if (elem.tagName.toLowerCase() !== "select") {
					elem.value = elem.value.trim();
				}
				validate_field(elem) ? true : no_error = false;
			}
		}
		if (!no_error && e) {
			e.preventDefault();
		}
		resize_tooltips();
		return no_error;
	};
	addEvent(window, 'resize', resize_tooltips);
	addEvent(window, 'scroll', resize_tooltips);
	window._old_serialize = null;
	if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;
	_load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {
		window._form_serialize = window.serialize;
		if (window._old_serialize) window.serialize = window._old_serialize;
	});
	var form_submit = function(e) {
		e.preventDefault();
		if (validate_form()) {
      // use this trick to get the submit button & disable it using plain javascript
      document.querySelector('#_form_7_submit').disabled = true;
      var serialized = _form_serialize(document.getElementById('_form_7_'));
      var err = form_to_submit.querySelector('._form_error');
      err ? err.parentNode.removeChild(err) : false;
      _load_script('https://nivel.activehosted.com/proc.php?' + serialized + '&jsonp=true');
  }
  return false;
};
addEvent(form_to_submit, 'submit', form_submit);
})();

</script>






<script src='https://use.fontawesome.com/70a3cb5d53.js'></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/setting-slick.js"></script>
<script src='<?php echo get_template_directory_uri();?>/assets/js/wow.min.js'></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>


<script>
	new WOW().init();
</script>
</div>
<?php wp_footer(); ?>
</body>

</html>