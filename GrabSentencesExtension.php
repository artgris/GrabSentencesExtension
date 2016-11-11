<?php

namespace AppBundle\Twig;


class GrabSentencesExtension extends \Twig_Extension
{

	public function getFilters()
	{
		return array(
			new \Twig_SimpleFilter('grab_sentences', array($this, 'grabSentencesFilter')),
		);
	}

	public function grabSentencesFilter($text, $size = 1)
	{
		preg_match_all("/[A-Z].*?[\.!?…](?:\s|$)/", $text, $matches);
		
		return implode('', array_slice($matches[0], 0, $size));

	}

	public function getName()
	{
		return 'grab_sentences_extension';
	}


}
