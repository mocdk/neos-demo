<?php
namespace MOC\Demo\Command;

use MOC\Demo\Domain\Model\Country;
use MOC\Demo\Domain\Repository\CountryRepository;
use TYPO3\Flow\Cli\CommandController;
use TYPO3\Flow\Annotations as Flow;

/**
 * @Flow\Scope("singleton")
 */
class CountryCommandController extends CommandController {

	/**
	 * @Flow\Inject
	 * @var CountryRepository
	 */
	protected $countryRepository;

	/**
	 * @param string $name
	 */
	public function importCommand($name) {
		$fetchedCountry = json_decode(file_get_contents('https://restcountries.eu/rest/v1/name/' . $name))[0];

		$country = new Country($fetchedCountry->name, $fetchedCountry->capital, $fetchedCountry->population);

		$this->countryRepository->add($country);

		$this->outputLine($country->getName() . " was created.");
	}

	public function listCommand() {
		$countries = $this->countryRepository->findAll();

		foreach ($countries as $country) {
			$this->outputLine($country->getName());
		}
	}
}