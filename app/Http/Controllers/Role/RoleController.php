<?php

namespace App\Http\Controllers\Role;

use App\Http\Requests\RoleRequest;
use App\Repository\RoleRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class RoleController extends Controller
{
    /**
     * @var RoleRepository
     */
    private $roleRepository;
    /**
     * @var string
     */
    private $path;

    /**
     * RoleController constructor.
     * @param RoleRepository $roleRepository
     * @param string $path
     */
    public function __construct(RoleRepository $roleRepository, string $path = 'role.index')
    {
        $this->roleRepository = $roleRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('role.index', [
           'roles' => $this->roleRepository->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('role.pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RoleRequest $request
     * @return Response
     */
    public function store(RoleRequest $request)
    {
        $this->roleRepository->create($request);
        putSessionMessage('success', __('roles/message.created'));
        return redirect()->route($this->path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('role.pages.edit', [
            'role' => $this->roleRepository->getById($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RoleRequest $request
     * @param int $id
     * @return Response
     */
    public function update(RoleRequest $request, $id)
    {
        $this->roleRepository->update($id, $request);
        putSessionMessage('success', __('roles/message.updated'));
        return redirect()->route($this->path);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->roleRepository->delete($id);
        putSessionMessage('success', __('roles/message.deleted'));
        return redirect()->route($this->path);
    }
}
