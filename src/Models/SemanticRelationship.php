<?php

namespace Astroanu\Lexicon\Models;

class SemanticRelationship extends BaseModel
{

    protected $table = 'semrel';

    public function relationshipType()
    {
    	return $this->hasOne(RelationshipType::class, 'reltypeno', 'reltypeno');
    }
}
