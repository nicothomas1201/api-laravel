<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return [
          'data' => $this->collection, // obligatorio
          'meta' => [
            'organization' => 'Platzi',
            'authors' => [
              'Italomoralesf',
              'platzi'
            ],
          ],
          'type' => 'articles'
        ];
    }
}
