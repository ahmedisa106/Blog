<?php

namespace Modules\ConfigModule\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class AppController extends Controller
{

    protected $repo;
    protected $route;
    protected $view;

    public function __construct($repository, $route, $view)
    {
        $this->repo = $repository;
        $this->route = $route;
        $this->view = $view;
    }

    public function index()
    {
        $items = $this->repo->getALlData();

        $str = explode('.', $this->route);
        if (count($str) > 0) {
            $this->route = $str[1];
        }


        return view($this->view . '.index')->with([$this->route => $items]);

    }

    public function data()
    {
        return $this->repo->data();
    }

    public function create()
    {
        return view($this->view . '.create');

    }

    public function edit($id)
    {
        $item = $this->repo->findId($id);
        $str = explode('.', $this->route);
        if (count($str) > 0) {
            $this->route = Str::singular($str[1]);
        }

        return view($this->view . '.edit')->with([$this->route => $item]);


    }

    public function destroy($id)
    {

        $this->repo->destroy($id);


        return back();

    }

}
