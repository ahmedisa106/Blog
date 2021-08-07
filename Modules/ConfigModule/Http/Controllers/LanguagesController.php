<?php

namespace Modules\ConfigModule\Http\Controllers;

use Illuminate\Http\Request;
use Modules\ConfigModule\repositories\LanguagesRepo;
use Modules\ConfigModule\Services\LanguageServices;

class LanguagesController extends AppController
{
    protected $service;

    public function __construct(LanguagesRepo $repository, $route = 'admin.languages', $view = 'configmodule::languages', LanguageServices $service)
    {
        $this->service = $service;
        parent::__construct($repository, $route, $view);
    }

    public function active(Request $request)
    {
        $this->service->active($request->all());


    }
}
