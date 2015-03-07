<?php namespace Anomaly\FilesModule\Folder;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;

/**
 * Class FolderRouteProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\FilesModule\Folder
 */
class FolderRouteProvider extends RouteServiceProvider
{

    /**
     * Map the routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->any(
            'admin/files/folders',
            'Anomaly\FilesModule\Http\Controller\Admin\BrowserController@redirect'
        );

        $router->any(
            'admin/files/folders/create',
            'Anomaly\FilesModule\Http\Controller\Admin\FoldersController@create'
        );
    }
}