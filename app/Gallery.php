<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function getImage()
    {
        return cl_image_tag($img['public_id'], 
                array(
                    'cloud_name' => 'citieclik',
                    'width'      => 200,
                    'height'     => 150,
                    "crop"       => "fill"

                    // "crop"       => "scale"
                )
            );
    }
}
