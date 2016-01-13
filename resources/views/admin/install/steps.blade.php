<div class="mt-element-step">
    <div class="row step-line">
        <div class="col-md-4 mt-step-col first {{ isDone( 'admin.installer.welcome' ) . isActive( 'admin.installer.welcome' ) }}">
            <div class="mt-step-number bg-white">1</div>
            <div class="mt-step-title uppercase font-grey-cascade">{{ trans( 'install.welcome.title' ) }}</div>
        </div>
        <div class="col-md-4 mt-step-col {{ isDone( 'admin.installer.settings' ) . isActive( 'admin.installer.settings' ) }}">
            <div class="mt-step-number bg-white">2</div>
            <div class="mt-step-title uppercase font-grey-cascade">{{ trans( 'install.settings.title' ) }}</div>
        </div>
        <!--<div class="col-md-2 mt-step-col {{ isDone( 'admin.installer.environment' ) . isActive( 'admin.installer.environment' ) }}">
            <div class="mt-step-number bg-white">2</div>
            <div class="mt-step-title uppercase font-grey-cascade">{{ trans( 'install.environment.title' ) }}</div>
        </div>
        <div class="col-md-2 mt-step-col {{ isDone( 'admin.installer.requirements' ) . isActive( 'admin.installer.requirements' ) }}">
            <div class="mt-step-number bg-white">3</div>
            <div class="mt-step-title uppercase font-grey-cascade">{{ trans( 'install.requirements.title' ) }}</div>
        </div>
        <div class="col-md-2 mt-step-col {{ isDone( 'admin.installer.permissions' ) . isActive( 'admin.installer.permissions' ) }}">
            <div class="mt-step-number bg-white">4</div>
            <div class="mt-step-title uppercase font-grey-cascade">{{ trans( 'install.permissions.title' ) }}</div>
        </div> -->
        <div class="col-md-4 mt-step-col last {{ ( session( 'message' )['status'] === 'success' ) ? 'done' : NULL . isActive( 'admin.installer.complete' ) }}">
            <div class="mt-step-number bg-white">3</div>
            <div class="mt-step-title uppercase font-grey-cascade">{{ trans( 'install.complete.title' ) }}</div>
        </div>
    </div>
</div>
