<?php

namespace App\Http\Controllers\Project;

use App\Http\Requests\ProjectRequest;
use App\Repository\ProjectRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    /**
     * @var ProjectRepository
     * Use to make all request to database
     */
    private $projectRepository;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->middleware('auth');
        $this->projectRepository = $projectRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('project.index', [
            'projects' => $this->projectRepository->getProjects()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('project.pages.add');
    }

    /**
     * Store a newly created resource in storage.
     * @param ProjectRequest $request
     * @return Response
     */
    public function store(ProjectRequest $request)
    {
        $response = $this->projectRepository->storeProject($request);

        if ($response == true) {
            putSessionMessage('success', __('message/message.created'));
            return redirect()->route('project.index');
        }
        return abort(403, 'Oops something went wrong, please try again !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('project.pages.show', [
            'project' => $this->projectRepository->getSingleProject($id),
            'user' => $this->projectRepository->getUserAssociatedProject($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('project.pages.edit', [
            'project' => $this->projectRepository->getSingleProject($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param ProjectRequest $request
     * @param int $id
     * @return void
     */
    public function update(ProjectRequest $request, $id)
    {
        $response = $this->projectRepository->updateProject($id, $request);

        if ($response == true) {
            putSessionMessage('success', __('message/message.update'));
            return redirect()->route('project.index');
        }
        return abort(403);
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->projectRepository->destroy($id);
        putSessionMessage('success', __('message/message.delete'));
        return redirect()->route('project.index');
    }
}
