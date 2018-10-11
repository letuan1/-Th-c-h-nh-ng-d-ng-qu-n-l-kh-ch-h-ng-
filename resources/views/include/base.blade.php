<div class="wrap-input100 validate-input" data-validate="Name is required">
    <input class="input100" type="text" name="name" placeholder="Full Name" value="{{ isset($getData->name) ? $getData->name : '' }}">
    <span class="focus-input100-1"></span>
    <span class="focus-input100-2"></span>
</div>

<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" >
    <input class="input100" type="text" name="email" placeholder="Email" value="{{ isset($getData->email) ? $getData->email : '' }}">
    <span class="focus-input100-1"></span>
    <span class="focus-input100-2"></span>
</div>

<div class="wrap-input100 validate-input" data-validate = "Message is required">
    <input class="input100" name="dob" placeholder="Dob" value="{{ isset($getData->dob) ? $getData->dob : '' }}"></input>
    <span class="focus-input100-1"></span>
    <span class="focus-input100-2"></span>
</div>
