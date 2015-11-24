<?php
namespace MOC\Demo\Domain\Model;

use TYPO3\Flow\Annotations as Flow;

/**
 * @Flow\Entity
 */
class Country {

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $capital;

	/**
	 * @var int
	 */
	protected $population;

	/**
	 * Country constructor.
	 *
	 * @param string $name
	 * @param string $capital
	 * @param int $population
	 */
	public function __construct($name, $capital, $population) {
		$this->name = $name;
		$this->capital = $capital;
		$this->population = $population;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getCapital() {
		return $this->capital;
	}

	/**
	 * @param string $capital
	 */
	public function setCapital($capital) {
		$this->capital = $capital;
	}

	/**
	 * @return int
	 */
	public function getPopulation() {
		return $this->population;
	}

	/**
	 * @param int $population
	 */
	public function setPopulation($population) {
		$this->population = $population;
	}


}