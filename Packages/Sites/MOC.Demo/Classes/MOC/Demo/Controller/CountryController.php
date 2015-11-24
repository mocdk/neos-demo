<?php
namespace MOC\Demo\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "MOC.Demo".              *
 *                                                                        *
 *                                                                        */

use MOC\Demo\Domain\Repository\CountryRepository;
use TYPO3\Flow\Annotations as Flow;

class CountryController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * @Flow\Inject
	 * @var CountryRepository
	 */
	protected $countryRepository;

	/**
	 * @return void
	 */
	public function listAction() {

		$countries = $this->countryRepository->findAll();

		$this->view->assign('countries', $countries);
	}

}