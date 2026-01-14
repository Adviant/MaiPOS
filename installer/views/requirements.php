<div class="flex justify-center items-center">
    <div class="md:max-w-1/2 max-w-3/4">
        <div class="text-4xl mt-10 mb-1">MaiPOS</div>    
        <div class="text-2xl mb-5">Installation Requirements</div>   
        <div class="breadcrumbs mb-5">
            <ul>
                <li><strong>Check Requirements</strong></li>
                <li>Configure Database</li>
                <li>Initial Setup</li>
                <li>Install System</li>
            </ul>
        </div>
        <div class="flex justify-between <?php echo($deps['app_root']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div><?php echo("Correct Application Root".($deps['app_root']?"":"<br/><small>WallacePOS must be installed in the root directory of it's own virtual host</small>")); ?></div>
            <div><?php echo($deps['app_root']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['apache']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div><?php echo("Apache ".($deps['apache']?"":"2.4.7 required, ").$deps['apache_version']." installed"); ?></div>
            <div><?php echo($deps['apache']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['apache_rewrite']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div>Apache rewrite module</div>
            <div><?php echo($deps['apache_rewrite']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['apache_wstunnel']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div>Apache proxy_wstunnel module</div>
            <div><?php echo($deps['apache_wstunnel']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['php']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div><?php echo("PHP ".($deps['php']?"":"5.4 required, ").$deps['php_version']." installed"); ?></div>
            <div><?php echo($deps['php']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['php_pdomysql']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div>PHP pdo_mysql extention</div>
            <div><?php echo($deps['php_pdomysql']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['php_gd']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div>PHP gd extention</div>
            <div><?php echo($deps['php_gd']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['php_curl']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div>PHP curl extention</div>
            <div><?php echo($deps['php_curl']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['node']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div>Node installed</div>
            <div><?php echo($deps['node']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['node_socketio']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div>Socket.io installed</div>
            <div><?php echo($deps['node_socketio']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['node_redirect']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div>Apache Configuration: Node.js (Proxy Web Socket Tunnel)</div>
            <div><?php echo($deps['node_redirect']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($https=(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']!="off")?"bg-success-content":"bg-warning-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div>SSL / HTTPS</div>
            <div><?php echo($https=(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']!="off")?"ACTIVE":"NOT ACTIVE"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['permissions_root']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div>Folder Permissions: App Root <?php echo($deps['permissions_root']?"is writable":"must be writable") ?></div>
            <div><?php echo($deps['permissions_root']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['permissions_files']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div>File Permissions: Application files <?php echo($deps['permissions_files']?"are not writable":"must not be writable") ?></div>
            <div><?php echo($deps['permissions_files']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['permissions_docs']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div>File Permissions: Documents (/docs/) <?php echo($deps['permissions_docs']?" are writable":"files must be writable") ?></div>
            <div><?php echo($deps['permissions_docs']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between <?php echo($deps['permissions_config']?"bg-success-content":"bg-error-content"); ?> rounded-box py-2 px-4 m-1 items-center">
            <div>File Permissions: Config files <?php echo($deps['permissions_config']?" are writable":" .config.json && .dbconfig.json (/library/wpos/) must be writable") ?></div>
            <div><?php echo($deps['permissions_config']?"PASSED":"FAILED"); ?></div>
        </div>
        <div class="flex justify-between bg-base-200 rounded-box py-2 px-4 mt-5 mb-10 items-center">
            <div><?php echo($deps['all']?"All Requirements Met":"Not all requirements met"); ?></div>
            <div class="flex">
                <div class="m-1"><button class="btn" onclick="document.location.reload();">Refresh</button></div>
                <div class="m-1">
                    <form method="post">
                        <input type="hidden" name="<?php echo($curversion>0?"doupgrade":"screen"); ?>" value="2">
                        <button id="next-button" type="submit" class="btn">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>