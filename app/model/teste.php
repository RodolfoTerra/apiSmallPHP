<?php 

	namespace App\Model;

	/**
	 * @Entity
	 * @Table(name="teste")
	 */


	class Teste
	{

		/**
		*	@var integer @id
		*		@Column(name="id", type="integer")
		*		@GenerateValue(strategy="AUTO")
		*/
		private $testeId;

		/**
		*
		*	@var string @Column(name="nome", type="string", length=255)
		*/
		private $testeNome;


		function __construct ($testeId=0, $testeNome="")
		{

			$this->testeId = $testeId;
			$this->testeNome = $testeNome;
			echo ' model-teste';
		}


		public function getTesteId(): integer
		{
			return $this->testeId;
		}


		public function getTesteNome(): string
		{
			return $this->testeNome;
		}


		public function setTesteNome(string $testeNome): void
		{
			$this->testeNome = $testeNome;
		}
	}
