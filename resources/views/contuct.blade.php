@extends('layouts.app')
@section('section')



<form action="//submit.form" id="ContactUs100" method="post" onsubmit="return ValidateForm(this);">
<script type="text/javascript">
function ValidateForm(frm) {
if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
if (frm.Massage.value == "") { alert('Please enter your massages.'); frm.Massage.focus(); return false; }
return true; }
</script>



<table cellpadding="8" cellspacing="0">

<tr> <td>

<label for="Name">Name :</label> 
</td> <td>

<input name="Name" type="text" maxlength="60" />
</td> </tr> 

<input name="WebSite" type="hidden" maxlength="43" value="www.idokn.xyz" />
</td> </tr> <tr> <td>

<label for="FromEmailAddress">Email address :</label>
</td> <td>

<input name="FromEmailAddress" type="text" maxlength="90"  />
</td> </tr> <tr> <td>

<label for="Massage">Massages :</label>
</td> <td>

<textarea name="Massage" rows="7" cols="40" style="width:50%;;"></textarea>
</td> </tr> <tr> <td>


</td> <td>
<div style="float:right"><a href="https://www.100forms.com" id="lnk100" style="display:none" title="form to email">form to email</a></div>
<input name="skip_Submit" type="submit" value="Submit" />
<script src="https://www.100forms.com/js/FORMKEY:8GEGNX9EPK7P" type="text/javascript"></script>
</td> </tr>
</table>
</form>


@stop