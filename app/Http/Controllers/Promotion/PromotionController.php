<?php

namespace App\Http\Controllers\Promotion;

use App\Http\Requests\PromotionRequest;
use App\Repository\ProjectRepository;
use App\Repository\PromotionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class PromotionController extends Controller
{
    /**
     * @var PromotionRepository
     */
    private $promotionRepository;
    /**
     * @var ProjectRepository
     */
    private $projectRepository;
    /**
     * @var string
     */
    private $path ;

    /**
     * PromotionController constructor.
     * @param PromotionRepository $promotionRepository
     * @param ProjectRepository $projectRepository
     * @param string $path
     */
    public function __construct(PromotionRepository $promotionRepository, ProjectRepository $projectRepository, string $path = 'promotion.index')
    {
        $this->middleware('auth');
        $this->promotionRepository = $promotionRepository;
        $this->projectRepository = $projectRepository;
        $this->path = $path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('promotion.index', [
            'promotions' => $this->promotionRepository->getPromotions()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('promotion.pages.add', [
            'projects' => $this->projectRepository->getAllProjects()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PromotionRequest $request
     * @return Response
     */
    public function store(PromotionRequest $request)
    {
        $response = $this->promotionRepository->createPromotion($request);

        if ($response === true) {
            putSessionMessage('success', __('promotion/message.create'));
            return redirect()->route($this->path);
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
        return view('promotion.pages.edit', [
           'promotion' => $this->promotionRepository->getPromotionById($id),
           'projects' => $this->projectRepository->getAllProjects()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PromotionRequest $request
     * @param int $id
     * @return Response
     */
    public function update(PromotionRequest $request, $id)
    {
        $response = $this->promotionRepository->updatePromotion($request, $id);

        if ($response === true) {
            putSessionMessage('success', __('promotion/message.update'));
            return redirect()->route($this->path);
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
        $this->promotionRepository->deletePromotion($id);
        putSessionMessage('success', __('promotion/message.delete'));
        return redirect()->route($this->path);
    }
}
