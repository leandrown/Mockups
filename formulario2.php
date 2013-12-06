<!DOCTYPE html>
<html>
<head>
	<title>NoiseCall - Validação com jQuery SEM o uso de plugin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
	<script>
		(function($) {
			var validation = function() {
				var rules = {
					email : {
						check: function(value) {
							if (value) {
								return testPattern(value, "[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])");
							}
							return true;
						},
						msg : "Enter a valid e-mail address."
					},
					required : {
						check: function(value) {
							if (value) {
								return true;
							} else {
								return false;
							}
						},
						msg : "This filed is required."
					}
				}
				var testPattern = function(value, pattern) {
					var regExp = new RegExp(pattern, "");
					return regExp.test(value);
				}
				return {
					addRule : function(name, rule) {
						rules[name] = rule;
					},
					getRule : function(name) {
						return rules[name];
					}
				}
			}
			$.validation = new validation();
		})(jQuery);
	</script>
</head>
<body>
	<form>
		<fieldset>
			<legend>Legend Name: </legend>
			<div>
				<label for="name">Name: </label>
				<input type="text" id="name" name="name" />
			</div>
		</fieldset>
	</form>
</body>
</html>