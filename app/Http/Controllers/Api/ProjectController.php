<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\ProjectCategory;
use App\Repositories\ProjectRepository;
use Illuminate\Http\JsonResponse;

class ProjectController extends Controller
{
    /**
     * @param ProjectRequest $request
     * @param ProjectRepository $projectRepository
     * @return JsonResponse
     */
    public function index(ProjectRequest $request, ProjectRepository $projectRepository): JsonResponse
    {
        $limit = $request->input('limit');
        $offset = $request->input('offset');

        $data = $projectRepository->allWithPagination($limit, $offset);

        if ($limit !== null) {
            return response()->json($data);
        }

        return response()->json(['data' => $data]);
    }


    /**
     * @param ProjectRepository $projectRepository
     * @return JsonResponse
     */
    public function mainList(ProjectRepository $projectRepository): JsonResponse
    {
        return response()->json([
            'data' => [
                'categories' => ProjectCategory::all(),
                'projects' => $projectRepository->mainPageList(),
            ]
        ]);
    }


    /**
     * @param $id
     * @param ProjectRepository $projectRepository
     * @return JsonResponse
     */
    public function show($id, ProjectRepository $projectRepository): JsonResponse
    {
        return response()->json([
            'data' => $projectRepository->getById((int)$id)
        ]);
    }
}
