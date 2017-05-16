<?php 

namespace Astroanu\Lexicon\Repositories;

use Astroanu\Lexicon\Contracts\LexiconRepositoryContract;
use Astroanu\Lexicon\Models\Word;

class LexiconRepository implements LexiconRepositoryContract {

	public function thesaurus($word)
	{
		return Word::on($this->getConnectionString())->where('lemma', $word);
	}

	private function getConnectionString()
	{
		return config('astroanu.lexicon.connection');
	}
}