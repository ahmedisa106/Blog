<?php

namespace Modules\ConfigModule\repositories;

use Modules\ConfigModule\Entities\Language;
use Yajra\DataTables\Facades\DataTables;

class LanguagesRepo
{
    protected $model;

    public function __construct(Language $language)
    {
        $this->model = $language;
    }

    public function getALlData()
    {
        return $this->model->get();
    }

    public function findId($id)
    {
        $language = $this->model->find($id);
        return $language;
    }

    public function data()
    {
        $lanuages = $this->getALlData();

        return DataTables::of($lanuages)
            ->addColumn('operations', function ($row) {
                return view('configmodule::languages.btns.operations', compact('row'));
            })
            ->addColumn('check', function ($row) {
                $checked = ($row->active == 1) ? 'checked' : '';
                return '<input type="checkbox" data-id="' . $row->id . '" class="activeBtn" ' . $checked . '  >';
            })
            ->rawColumns(['check' => 'check'])
            ->make(true);


    }


    public function destroy($id)
    {
        $language = $this->findId($id);
        $language->delete();

    }


}
