<?php

namespace App\Http\Controllers\Event;

use App\Http\Requests\EventRequest;
use App\Repository\EventRepository;
use App\Repository\ProjectRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class EventController extends Controller
{
    /**
     * @var EventRepository
     */
    private $eventRepository;
    /**
     * @var ProjectRepository
     */
    private $projectRepository;

    /**
     * EventController constructor.
     * @param EventRepository $eventRepository
     * @param ProjectRepository $projectRepository
     */
    public function __construct(EventRepository $eventRepository, ProjectRepository $projectRepository)
    {
        $this->middleware('auth');
        $this->eventRepository = $eventRepository;
        $this->projectRepository = $projectRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('event.index', [
           'events' => $this->eventRepository->getEvents()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('event.pages.add', [
            'projects' => $this->projectRepository->getAllProjects()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EventRequest $request
     * @return Response
     */
    public function store(EventRequest $request)
    {
        $response = $this->eventRepository->storeEvent($request);

        if ($response === true) {
            putSessionMessage('success', __('event/message.create'));
            return redirect()->route('event.index');
        }
        return abort(403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('event.pages.edit', [
           'event' => $this->eventRepository->getEventById($id),
           'projects' => $this->projectRepository->getAllProjects()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EventRequest $request
     * @param int $id
     * @return Response
     */
    public function update(EventRequest $request, $id)
    {
        $response = $this->eventRepository->updateEvent($id, $request);

        if ($response === true) {
            putSessionMessage('success', __('event/message.update'));
            return redirect()->route('event.index');
        }
        return abort(403);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->eventRepository->delete($id);
        putSessionMessage('success', __('event/message.delete'));
        return redirect()->route('event.index');
    }
}
