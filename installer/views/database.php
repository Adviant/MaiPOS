<div class="flex justify-center items-center">
    <div class="md:max-w-1/2 max-w-3/4">
        <div class="text-4xl mt-10 mb-1">MaiPOS</div>    
        <div class="text-2xl mb-5">Configure Database</div> 
        <div class="breadcrumbs mb-5">
            <ul>
                <li>Check Requirements</li>
                <li><strong>Configure Database</strong></li>
                <li>Initial Setup</li>
                <li>Install System</li>
            </ul>
        </div>
        <?php if (isset($errormessage)){ ?>
        <div role="alert" class="alert alert-error">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Error! <?php echo($errormessage); ?></span>
        </div>    
        <?php } ?>
        <form role="form" class="form-horizontal" method="post">
        <input name="checkdb" type="hidden" value="1">
        <fieldset class="fieldset">
            <legend class="fieldset-legend text-base">Host</legend>
            <input name="host" type="text" class="input w-full" value="<?php echo(isset($_REQUEST['host'])?$_REQUEST['host']:"127.0.0.1"); ?>" placeholder="localhost" />
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend text-base">Port</legend>
            <input name="port" type="text" class="input w-full" value="<?php echo(isset($_REQUEST['port'])?$_REQUEST['port']:"3306"); ?>" placeholder="3306" />
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend text-base">Database</legend>
            <input name="database" type="text" class="input w-full" value="<?php echo(isset($_REQUEST['database'])?$_REQUEST['database']:""); ?>" placeholder="MaiPOS" />
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend text-base">Username</legend>
            <input name="username" type="text" class="input w-full" value="<?php echo(isset($_REQUEST['username'])?$_REQUEST['username']:""); ?>" placeholder="Username" />
        </fieldset>
        <fieldset class="fieldset">
            <legend class="fieldset-legend text-base">Password</legend>
            <input name="password" type="text" class="input w-full" placeholder="Password" />
        </fieldset>
        <div class="flex justify-end">
            <button type="button" class="btn btn-soft m-1" onclick="document.location.href='/installer?screen=1';">Back</button>
            <button type="submit" class="btn btn-soft m-1">Next</button>
        </div>
        </form>
    </div>
</div>