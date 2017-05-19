<?php

namespace Astroanu\Lexicon\Models;

class Sense extends BaseModel
{

    protected $table = 'sense';

    public function synset()
    {
    	return $this->hasOne(Synset::class, 'synsetno', 'synsetno');
    }    

    public function words()
    {
    	return $this->belongsToMany(Word::class, 'wordno', 'wordno');
    }
}
