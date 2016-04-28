<?php

class DataHelper extends AppHelper {

    public function converterData($data) {
        $data = explode('-', $data);
        return $data[2] . '/' . $data[1] . '/' . $data[0];
    }
    
    public function converterDataTime($data) {
        $data = explode('-', $data);
        $hora = explode(' ', $data[2]);
        //pr($data);pr($hora);pr($hora[0]);exit;
        return $hora[0] . '/' . $data[1] . '/' . $data[0];
    }
    
    public function converterDataComMesAno($data) {
        $data = explode('-', $data);
        return $data[2] . '/' . $data[1] . '/' . $data[0];
    }
}

?>
