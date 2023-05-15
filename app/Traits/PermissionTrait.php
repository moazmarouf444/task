<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;


trait PermissionTrait
{
    public function getAll()
    {
        $routes           = Route::getRoutes();
        $superPermissions = [];

        foreach ($routes as $route) {
            if ($route->getName() and isset($route->getAction()['title']) and isset($route->getAction()['child'])) {

                $superPermissions[] = [
                    'childrens' => $route->getAction()['child'],
                    'name'      => $route->getName(),
                    'title'     => $route->getAction()['title'],
                ];
            }
        }
        return $superPermissions;
    }

    public function authHasPermission($route = null): bool
    {
        $authRole              = auth('admin')->user()->role;
        $currentRequest        = $route ?? Route::currentRouteName();
//        $this->authPermissions = Cache::rememberForever('authPermissions', function () use ($authRole) {
//            return $authRole->permissions->pluck('name')->toArray();
//        });
        $this->authPermissions = $authRole->permissions->pluck('name')->toArray();

        if (is_array($currentRequest)) {
            return count(array_intersect($currentRequest, $this->authPermissions)) > 0;
        }

        return $this->checkRouteIAuthPermissions($currentRequest);
    }

    private function checkRouteIAuthPermissions($route)
    {
//        dd($route, $this->authPermissions);
        return in_array($route, $this->authPermissions);
    }

}
