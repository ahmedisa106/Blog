<?php

namespace Modules\ConfigModule\Services;

use Modules\ConfigModule\repositories\LanguagesRepo;

class LanguageServices
{
    protected $repo;

    public function __construct(LanguagesRepo $repo)
    {
        $this->repo = $repo;
    }

    public function active($request)
    {
        $lang = $this->repo->findId($request['id']);
        dd($request['checked']);
        if ($request['checked'] === 'true') {

            $lang->update([
                'active' => 1,
            ]);
        } else {
            $lang->update([
                'active' => 0,
            ]);
        }


    }

}
