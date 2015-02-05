<?php
/**
 * Box packing (3D bin packing, knapsack problem)
 * @package BoxPacker
 * @author Doug Wright
 */

namespace DVDoug\BoxPacker;

class DefaultBox implements Box
{

    /**
     * @param $aReference
     * @param $aOuterWidth
     * @param $aOuterLength
     * @param $aOuterDepth
     * @param $aEmptyWeight
     * @param $aInnerWidth
     * @param $aInnerLength
     * @param $aInnerDepth
     * @param $aMaxWeight
     */
    public function __construct($aReference, $aOuterWidth, $aOuterLength, $aOuterDepth, $aEmptyWeight, $aInnerWidth, $aInnerLength, $aInnerDepth, $aMaxWeight)
    {
        $this->reference = $aReference;
        $this->outerWidth = $aOuterWidth;
        $this->outerLength = $aOuterLength;
        $this->outerDepth = $aOuterDepth;
        $this->emptyWeight = $aEmptyWeight;
        $this->innerWidth = $aInnerWidth;
        $this->innerLength = $aInnerLength;
        $this->innerDepth = $aInnerDepth;
        $this->maxWeight = $aMaxWeight;
        $this->innerVolume = $this->innerWidth * $this->innerLength * $this->innerDepth;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return int
     */
    public function getOuterWidth()
    {
        return $this->outerWidth;
    }

    /**
     * @return int
     */
    public function getOuterLength()
    {
        return $this->outerLength;
    }

    /**
     * @return int
     */
    public function getOuterDepth()
    {
        return $this->outerDepth;
    }

    /**
     * @return int
     */
    public function getEmptyWeight()
    {
        return $this->emptyWeight;
    }

    /**
     * @return int
     */
    public function getInnerWidth()
    {
        return $this->innerWidth;
    }

    /**
     * @return int
     */
    public function getInnerLength()
    {
        return $this->innerLength;
    }

    /**
     * @return int
     */
    public function getInnerDepth()
    {
        return $this->innerDepth;
    }

    /**
     * @return int
     */
    public function getInnerVolume()
    {
        return $this->innerVolume;
    }

    /**
     * @return int
     */
    public function getMaxWeight()
    {
        return $this->maxWeight;
    }
}