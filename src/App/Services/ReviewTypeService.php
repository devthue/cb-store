<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/10/17
 * Time: 09:59
 */

namespace App\Services;

use App\Model\ReviewProperty;
use App\Model\ReviewType;
use App\Model\ReviewTypeProperty;
use App\Transformers\ReviewPropertyTransformer;
use App\Transformers\ReviewTypeTransformer;

class ReviewTypeService
{
    const PARENT_ID = 0;
    const KEY_CACHE_FIND_ALL = 'KEY_CACHE_FIND_ALL';
    public static $dataCache = [];

    /**
     * @return \Phalcon\Mvc\Model\ResultsetInterface
     */
    public static function findAll()
    {
        if (isset(self::$dataCache[self::KEY_CACHE_FIND_ALL])) {
            return self::$dataCache[self::KEY_CACHE_FIND_ALL];
        } else {
            self::$dataCache[self::KEY_CACHE_FIND_ALL] = ReviewType::find([
                'order' => 'displayorder ASC, id ASC'
            ]);
        }
        return self::$dataCache[self::KEY_CACHE_FIND_ALL];
    }

    /**
     * @return array
     */
    public function getReviewTypeTree()
    {
        $reviewTypes = self::findAll();
        $reviewTypesProcess = $this->processReviewType($reviewTypes);
        $reviewTypesTree = $this->createTree($reviewTypesProcess, $reviewTypesProcess[0]);
        return $reviewTypesTree;
    }

    /**
     * @param $reviewTypes
     * @return array
     */
    private function processReviewType($reviewTypes)
    {
        $reviewTypesProcess = array();
        $reviewTypeTransformer = new ReviewTypeTransformer();
        /** @var ReviewType $reviewType */
        foreach ($reviewTypes as $reviewType) {
            $data = $reviewTypeTransformer->transform($reviewType);
            $properties = $this->getProperty($reviewType);
            foreach ($properties as $property) {
                $data['properties'][] = $property;
            }
            $reviewTypesProcess[$reviewType->parentid][] = $data;
        }
        return $reviewTypesProcess;
    }

    /**
     * @param ReviewType $reviewType
     * @return mixed
     */
    private function getProperty($reviewType)
    {
        $reviewTypeProperties = $reviewType->getRelated(ReviewTypeProperty::class);
        $properties = array();
        $reviewPropertyTransformer = new ReviewPropertyTransformer();
        /** @var ReviewTypeProperty $reviewTypeProperty */
        foreach ($reviewTypeProperties as $reviewTypeProperty) {
            $reviewProperty = $reviewTypeProperty->getRelated(ReviewProperty::class);
            if (!$reviewProperty) {
                continue;
            }
            /** @var ReviewProperty $reviewProperty */
            $data = $reviewPropertyTransformer->transform($reviewProperty);
            $data['isdefault'] = $reviewTypeProperty->isdefault ? true : false;
            $properties[] = $data;
        }
        return $properties;
    }

    /**
     * @param $list
     * @param $parent
     * @return array
     */
    private function createTree(&$list, $parent)
    {
        $tree = array();
        foreach ($parent as $k => $l) {
            if (isset($list[$l['id']])) {
                $l['children'] = $this->createTree($list, $list[$l['id']]);
            }
            $tree[] = $l;
        }
        return $tree;
    }
}