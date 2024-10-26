<?php
// Le traits hydrator permet de itérer directement sur tout les setter et getter qui seront dans le param de cette class

namespace Els\Entity;

use Els\Traits\Hydrator;

abstract class BaseEntity
{
    use Hydrator;

    public function __construct(array $data = [])
    {
        $this->hydrate($data);
    }

    protected function createParagraphs(string | array $contents, $separator="<br>"): string {

        if(is_array($contents)) {
            $string = "";
            foreach($contents as $item) {
                $string .= $item . $separator;
            }
            return $string;
        } elseif(is_string($contents)) {
            return $contents;
        } else {
            return "";
        }
    }
}
