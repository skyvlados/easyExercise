<?php

$fileName=__DIR__."/file.txt";

class writeAndReadTextWithFile
{
    private string $text;
    private string $fileName;

    public function __construct(string $text, string $fileName)
    {
        $this->text = $text;
        $this->fileName=$fileName;
    }

    public function writeWithFile()
    {
        $arg = $_SERVER['argv'][1];
        $fp = fopen($this->fileName, "a");
        fwrite($fp,$arg."\n");
        fclose($fp);
    }

    public function getUser()
    {
        $fp = file_get_contents($this->fileName);
        $data = explode("\n", $fp);
        var_dump($data);
    }


    public function readFromFile()
    {
        $fp = file_get_contents($this->fileName);
        $data = explode("\n", $fp);
        $isSuccess = false;
        foreach ($data  as $item) {
            if ($item === $this->text) {
                $isSuccess = true;
            }
        }
        if ($isSuccess) {
            echo "success";
        } else {
            echo "very bad((";
        }

    }
}

$test = new writeAndReadTextWithFile('testWord',$fileName);
$test->writeWithFile();
$test->getUser();
$test->readFromFile();

