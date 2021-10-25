
$(document).ready(function() 
{ 
$('#password').keyup(function() 
{ 
$('#affichageMessage').html(checkStrength($('#password').val())) 
}) 
function checkStrength(password) 
{ 
var strength = 0 
if (password.length < 6) { 
$('#affichageMessage').removeClass() 
$('#affichageMessage').addClass('short') 
return "<font color='red' size='3'>Trop court</font>" 
} 

if (password.length > 7) strength += 1 
if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1 
if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1 
if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1 
if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1 
if (strength < 2) 
{ 
$('#affichageMessage').removeClass() 
$('#affichageMessage').addClass('weak') 
return "<font color='red' size='3'>Faible</font>" 
} 
else if (strength == 2) 
{ 
$('#affichageMessage').removeClass() 
$('#affichageMessage').addClass('good') 
return "<font color='orange' size='3'>Bien</font>" 
} 
else 
{ 
$('#affichageMessage').removeClass() 
$('#affichageMessage').addClass('strong') 
return "<font color='green' size='3'>Fort</font>" 
} 
} 
}); 
