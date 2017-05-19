<?php

namespace Astroanu\Lexicon\Models;

class Word extends BaseModel
{

    protected $table = 'word';

    protected $primaryKey = 'wordno';

    public function senses()
    {
    	return $this->hasMany(Sense::class, 'wordno', 'wordno')->orderBy('tagcnt', 'DESC');
    }

}
