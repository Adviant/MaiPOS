<div class="flex justify-center items-center">
    <div class="md:max-w-1/2 max-w-3/4">
        <div class="text-4xl mt-10 mb-1">MaiPOS</div>    
        <div class="text-2xl mb-5">Initial Setup</div> 
        <div class="breadcrumbs mb-5">
            <ul>
                <li>Check Requirements</li>
                <li>Configure Database</li>
                <li><strong>Initial Setup</strong></li>
                <li>Install System</li>
            </ul>
        </div>
        <div role="alert" class="alert alert-info alert-soft mb-5">
            <span>Choose a secure password for your Admin account.</span>
        </div>
        <form role="form" class="form-horizontal" method="post" onsubmit="return validatePassword();">
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-base">Password</legend>
                <input name="password" id="password" type="password" class="input w-full" value="" placeholder="Password" />
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-base">Confirm Password</legend>
                <input name="cpassword" id="cpassword" type="password" class="input w-full" placeholder="Confirm password" />
            </fieldset>
            <div class="flex justify-end">
                <button type="button" class="btn btn-soft m-1" onclick="document.location.href='/installer?screen=2';">Back</button>
                <button type="submit" class="btn btn-soft m-1">Next</button>
            </div>
        </form>
    </div>
</div>


