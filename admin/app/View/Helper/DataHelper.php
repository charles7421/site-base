<?php

class DataHelper extends AppHelper {

    public function converterData($data) {
        $data = explode('-', $data);
        return $data[2] . '/' . $data[1] . '/' . $data[0];
    }
}

?>
