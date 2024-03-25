<?php

namespace app\models;

use app\core\Model;
use app\libs\NEC;

class Main extends Model
{
    public function getData($post)
    {
        $name = new NEC();

        $data = array_values(array_filter(explode(PHP_EOL, $post['data'])));
        foreach ($data as $item) {
            $items[] = explode(',', $item);
        }
        foreach ($items as $key => $value) {
            $out[] = ['phone' => $value[0], 'name' => $name->convert(trim($value[1], ' '))];
        }

        return $out;
    }

    public function callForward($post)
    {
        $phones = explode(',', $post['phones']);

        if (!empty($phones[0])) {
            if (!isset($post['loop'])) {
                $phones[] = 'CCC';
            } else {
                $phones[] = $phones[0];
            }

            for ($i = 0; $i < count($phones) - 1; $i++) {
                $pairs[$i] = [$phones[$i], $phones[$i + 1]];
            }

            return $pairs;
        }
    }
}
