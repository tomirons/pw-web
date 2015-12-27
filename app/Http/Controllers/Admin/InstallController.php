<?php

namespace App\Http\Controllers\Admin;

use Efriandika\LaravelSettings\Facades\Settings;
use Exception;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

class InstallController extends Controller
{
    /**
     * @var array
     */
    protected $results = [];

    /**
     * @var string
     */
    private $env_path;

    /**
     * @var string
     */
    private $env_example_path;

    public function __construct()
    {
        $this->env_path = base_path( '.env' );
        $this->env_example_path = base_path( '.env.example' );
        $this->results['permissions'] = [];
        $this->results['errors'] = null;
    }

    /**
     * Display the Environment page.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        return view( 'admin.install.welcome' );
    }
    
    /**
     * Display the Environment page.
     *
     * @return \Illuminate\View\View
     */
    public function environment()
    {
        $env_config = $this->getEnvContent();
        return view( 'admin.install.environment', compact( 'env_config' ) );
    }

    /**
     * Processes the newly saved environment configuration and redirects back.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save( Request $request )
    {
        $message = $this->saveEnv( $request );

        return redirect()->route( 'admin.installer.environment' )
            ->with( ['message' => $message] );
    }

    /**
     * Display the Environment page.
     *
     * @return \Illuminate\View\View
     */
    public function requirements()
    {
        $extensions = [ 'openssl', 'pdo', 'mbstring', 'tokenizer' ];
        $requirements = $this->requirementsCheck( $extensions );
        return view( 'admin.install.requirements', compact( 'requirements' ) );
    }

    /**
     * Display the Environment page.
     *
     * @return \Illuminate\View\View
     */
    public function permissions()
    {
        $folders = [ 'storage/app/' => '775', 'storage/framework/' => '775', 'storage/logs/' => '775', 'bootstrap/cache/'=> '775' ];
        $permissions = $this->permissionsCheck( $folders );
        return view( 'admin.install.permissions', compact( 'permissions' ) );
    }

    /**
     * Display the Environment page.
     *
     * @return \Illuminate\View\View
     */
    public function database()
    {
        $response = $this->migrateAndSeed();

        return redirect()->route( 'admin.installer.complete' )
            ->with( ['message' => $response] );
    }

    /**
     * Display the Environment page.
     *
     * @return \Illuminate\View\View
     */
    public function complete()
    {
        if ( session( 'message' )['status'] === 'success' )
        {
            Artisan::call( 'key:generate' );
            file_put_contents( storage_path( 'installed'), '' );
        }

        return view( 'admin.install.complete' );
    }

    /**
     * Get the content of the .env file.
     *
     * @return string
     */
    public function getEnvContent()
    {
        if ( !file_exists( $this->env_path ) )
        {
            if ( file_exists( $this->env_example_path ) )
            {
                copy( $this->env_example_path, $this->env_path );
            } else {
                touch( $this->env_path );
            }
        }

        return file_get_contents( $this->env_path );
    }

    /**
     * Save the edited content to the file.
     *
     * @param Request $request
     * @return string
     */
    public function saveEnv( Request $request )
    {
        $message = trans( 'install.environment.message.success' );

        try {
            file_put_contents( $this->env_path, $request->env_config );
        }
        catch( Exception $e ) {
            $message = trans('install.environment.message.errors');
        }

        return $message;
    }

    /**
     * Check for the server requirements.
     *
     * @param array $requirements
     * @return array
     */
    public function requirementsCheck( array $requirements )
    {
        $results = [];

        foreach( $requirements as $requirement )
        {
            $results['requirements'][$requirement] = true;

            if( !extension_loaded( $requirement ) )
            {
                $results['requirements'][$requirement] = false;

                $results['errors'] = true;
            }
        }

        return $results;
    }

    /**
     * Check for the folders permissions.
     *
     * @param array $folders
     * @return array
     */
    public function permissionsCheck( array $folders )
    {
        foreach( $folders as $folder => $permission )
        {
            if ( !( $this->getPermission( $folder ) >= $permission ) )
            {
                $this->addFileAndSetErrors( $folder, $permission, false );
            } else {
                $this->addFile( $folder, $permission, true );
            }
        }

        return $this->results;
    }

    /**
     * Get a folder permission.
     *
     * @param $folder
     * @return string
     */
    private function getPermission( $folder )
    {
        return substr( sprintf( '%o', fileperms( base_path( $folder ) ) ), -4 );
    }

    /**
     * Add the file to the list of results.
     *
     * @param $folder
     * @param $permission
     * @param $isSet
     */
    private function addFile( $folder, $permission, $isSet )
    {
        array_push($this->results['permissions'], [
            'folder' => $folder,
            'permission' => $permission,
            'isSet' => $isSet
        ]);
    }

    /**
     * Add the file and set the errors.
     *
     * @param $folder
     * @param $permission
     * @param $isSet
     */
    private function addFileAndSetErrors( $folder, $permission, $isSet )
    {
        $this->addFile( $folder, $permission, $isSet );

        $this->results['errors'] = true;
    }

    /**
     * Migrate and seed the database.
     *
     * @return array
     */
    public function migrateAndSeed()
    {
        return $this->migrate();
    }

    /**
     * Run the migration and call the seeder.
     *
     * @return array
     */
    private function migrate()
    {
        try{
            Artisan::call( 'migrate' );
        }
        catch( Exception $e ){
            Artisan::call( 'migrate:reset' );
            return $this->response( $e->getMessage() );
        }

        return $this->seed();
    }

    /**
     * Seed the database.
     *
     * @return array
     */
    private function seed()
    {
        try{
            Artisan::call( 'db:seed' );
        }
        catch( Exception $e ){
            Artisan::call( 'migrate:reset' );
            return $this->response( $e->getMessage() );
        }

        return $this->response( trans( 'install.complete.installed' ), 'success' );
    }

    /**
     * Return a formatted error messages.
     *
     * @param $message
     * @param string $status
     * @return array
     */
    private function response( $message, $status = 'danger' )
    {
        return [
            'status' => $status,
            'message' => $message
        ];
    }
}
