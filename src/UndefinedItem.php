<?php
/**
 * Box packing (3D bin packing, knapsack problem)
 * @package BoxPacker
 * @author Doug Wright
 */

namespace DVDoug\BoxPacker;

/**
 * Class TestItem
 * @package DVDoug\BoxPacker
 */
class UndefinedItem implements Item
{

    /**
     * @param $aDescription
     * @param $aWidth
     * @param $aLength
     * @param $aDepth
     * @param $aWeight
     */
    public function __construct($aDescription, $aWidth, $aLength, $aDepth, $aWeight)
    {
        $this->description = $aDescription;
        $this->width = $aWidth;
        $this->length = $aLength;
        $this->depth = $aDepth;
        $this->weight = $aWeight;
        $this->volume = $this->width * $this->length * $this->depth;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }
}