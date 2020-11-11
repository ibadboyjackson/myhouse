<?php

namespace App\Traits;

use App\Http\Requests\TruncRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

trait AdministrationController {

    /**
     * @return Factory|View
     */
    public function index () {

        return view( $this->view_index , [

            $this->variables => $this->getRepository()->get(),

            'countries' => $this->countryRepository->getAll(),
            'regions' => $this->regionRepository->getAll(),
            'prefectures' => $this->prefectureRepository->getAll(),
            'towns' => $this->townRepository->getAll(),
            'districts' => $this->districtRepository->getAll(),
            'quartiers' => $this->quartierRepository->getAll()
        ]);
    }

    /**
     * @return Factory|View
     */
    public function create () {
        return view( $this->view_create , [
            'countries' => $this->countryRepository->getAll(),
            'regions' => $this->regionRepository->getAll(),
            'prefectures' => $this->prefectureRepository->getAll(),
            'towns' => $this->townRepository->getAll(),
            'districts' => $this->districtRepository->getAll(),
            'quartiers' => $this->quartierRepository->getAll()
        ]);
    }

    /**
     * @param $id
     * @return Factory|View
     */
    public function edit ($id) {
        return view( $this->view_edit , [
            $this->variable => $this->getRepository()->getById($id),
            'countries' => $this->countryRepository->getAll(),
            'regions' => $this->regionRepository->getAll(),
            'prefectures' => $this->prefectureRepository->getAll(),
            'towns' => $this->townRepository->getAll(),
            'districts' => $this->districtRepository->getAll(),
            'quartiers' => $this->quartierRepository->getAll()
        ]);
    }

    /**
     * @param TruncRequest $request
     * @return RedirectResponse|Redirector
     */
    public function store (TruncRequest $request) {
        $this->getRepository()->create($request);
        putSessionMessage('success', __($this->getCreateLangPath));
        return redirect()->route($this->path);
    }

    /**
     * @param TruncRequest $request
     * @param $id
     * @return RedirectResponse|Redirector
     */
    public function update (TruncRequest $request , $id) {
        $this->getRepository()->update($id, $request);
        putSessionMessage('success', __($this->getUpdateLangPath));
        return redirect()->route($this->path);
    }

    /**
     * @param $id
     * @return RedirectResponse|Redirector
     */
    public function destroy ($id) {
        $this->getRepository()->delete($id);
        putSessionMessage('success', __($this->getDeleteLangPath));
        return redirect()->route($this->path);
    }

}
