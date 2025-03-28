<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class GetProductsListController extends Controller
{
    public function __invoke(): JsonResponse
    {
        return $this->successResponse(Product::query()->select(['id', 'name', 'description', 'price'])->get());
    }
}
