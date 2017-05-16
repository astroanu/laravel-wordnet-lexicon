<?php

namespace Astroanu\Lexicon\Models;

class Synset extends BaseModel
{

    protected $table = 'synset';

    public function lexiconName()
    {
    	return $this->hasOne(LexiconName::class, 'lexno', 'lexno');
    }  
}
