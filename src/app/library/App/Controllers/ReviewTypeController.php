<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/10/17
 * Time: 10:03
 */

namespace App\Controllers;

use App\Services\ReviewTypeService;
use CayBua\Controllers\BaseController;

class ReviewTypeController extends BaseController
{

    public function tree()
    {
        $reviewTypeService = new ReviewTypeService();
        $reviewTypeTree = $reviewTypeService->getReviewTypeTree();
        return $this->createArrayResponse($reviewTypeTree, 'data');
    }
}