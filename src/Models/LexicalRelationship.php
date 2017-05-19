<?php

namespace Astroanu\Lexicon\Models;

class LexicalRelationship extends BaseModel
{

    protected $table = 'lexrel';

    public function relationshipType()
    {
    	return $this->hasOne(RelationshipType::class, 'reltypeno', 'reltypeno');
    }
}
