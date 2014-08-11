<?php

class Recipe
{
    protected $fileName = '';
    protected $recipies = array();

    /**
     * コンストラクタ
     *
     * @param string $fileName ファイル名（CSVのみ）
     */
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        if (file_exists($this->fileName)) {
            $fileResource = fopen($this->fileName, 'r');
            $cnt = 0;
            while ($line = fgetcsv($fileResource)) {
                // 1行目はヘッダー行
                if ($cnt == 0) {
                    $header = $line;
                } else {
                    $this->recipies[] = $line;
                }
                ++$cnt;
            }
        }
    }
    public function getRecipies()
    {
        return $this->recipies;
    }
}
