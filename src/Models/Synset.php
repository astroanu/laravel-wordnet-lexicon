<?php

namespace Astroanu\Lexicon\Models;

class Synset extends BaseModel
{

    protected $table = 'synset';

    protected $primaryKey = 'synsetno';

    public function lexicalName()
    {
    	return $this->hasOne(LexicalName::class, 'lexno', 'lexno');
    }  

    public function semanticVerbFrames()
    {
    	return $this->hasMany(Frame::class, 'lexno', 'lexno');
    }  

    public function samples()
    {
    	return $this->hasMany(Sample::class, 'synsetno', 'synsetno');
    }    
}
