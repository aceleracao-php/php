<?php
interface JsonWriter{
    function writer(array $data, bool $formated):String; 
}

class WinJsonWriter implements JsonWriter{
    function writer(array $data, bool $formated):String{
        return json_encode($data,$formated);
    } 
}

class UnixJsonWriter implements JsonWriter{
    function writer(array $data, bool $formated):String{
        $options = 0;

        if($formated){
            $options = JSON_PRETTY_PRINT;
        }

        return json_encode($data, $options);
    }
}


interface CsvWriter{
    function writer(array $line):String;    
}

class WinCsvWriter implements CsvWriter{
    function writer(array $line):String{
        return join(',', $line). "\r\n";
    }
}

class UnixCsvWriter implements CsvWriter{
    function writer(array $line):String{
        return join(',', $line). "\r\n";
    }
}

//Definir a nossa Fabrica Abstrata
interface WriteFactory{
    public function createCsvWriter():CsvWriter;
    public function createJsonWriter():JsonWriter;
}


class WinWriterFactory implements WriteFactory{
    public function createCsvWriter():CsvWriter{
        return new WinCsvWriter();
    }
    public function createJsonWriter():JsonWriter{
        return new UnixJsonWriter();
    }
}


?>