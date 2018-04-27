<?php

declare(strict_types=1);

namespace PathLib;

class Path
{
    const DIR_SEP = '/';

    public $currentPath;

    public function __construct($path)
    {
        $this->currentPath = $path;
    }

    public function cd($newPath): self
    {
        // In case you want to change entirely folder.
        if ($newPath[0] === self::DIR_SEP) {
            $this->currentPath = $newPath;
            return $this;
        }

        // Navigate the tree
        $newPathLevels = explode(self::DIR_SEP, $newPath);
        $oldPathLevels = explode(self::DIR_SEP, $this->currentPath);

        $backwardsLevels = count(preg_grep('/^\.\.$/', $newPathLevels));
        $oldPathLength = count($oldPathLevels);        

        $finalPath = [];
        
        for($i = 0; $i < ($oldPathLength - $backwardsLevels); $i++) {
            $finalPath[] = $oldPathLevels[$i];
        }
        
        $newPathLength = count($newPathLevels);        
        for ($i = 0; $i < $newPathLength; $i++) {
            if ($newPathLevels[$i] != '..' && !empty($newPathLevels[$i])) {
                $finalPath[] = $newPathLevels[$i];
            }
        } 

        $finalPath = implode(self::DIR_SEP, $finalPath) ?: self::DIR_SEP;
        $this->currentPath = $finalPath;

        return $this;
    }
}
